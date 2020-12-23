<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel as QuestionModel;
use App\Models\SampleExamModel as SampleExamModel;
use Illuminate\Support\Facades\DB;
use Auth;

class ProcessExamController extends Controller
{
    public function handleExam(Request $request) {
        // Get request from ajax
        $data = $request->all();
        // Get data from database --> array quesiton
        $correct_answer = QuestionModel::where('exam_id','=', (int)$data['id'])
                                        ->select('correct_answer')->get();

        $count = count($correct_answer->toArray());
        $mark = 0;
        $select = [1 => 'A', 2 => 'B', 3 => 'C', 4 => 'D'];
        // Score per question
        $temp = 10/$count;

        $select_answer = [];

        foreach($data['arr'] as $q){
            array_push($select_answer, $q['value']);
        }

        $countSelected = count($select_answer);

        if($countSelected != $count){
            return response()->json(['error'=> 'Hãy điền hết các đáp án!']);
        } else{
            for( $i = 0; $i < $count; $i++){
                if($select_answer[$i] == $correct_answer[$i]['correct_answer']){
                    $mark += $temp;
                }
            }
            $mark = round($mark, 2);
    
            $table = '<tr style="background-color: rgb(13, 69, 86); color: white">';
            for($i = 1; $i <= $count; $i++){
                $table .= \sprintf(
                    '<td style="padding: 4px; width: 30px">%s</td>', $i
                );
            }
            $table .= '</tr><tr>';
            for($i = 1; $i <= $count; $i++){
                $table .= sprintf(
                    '<td style="padding: 4px; width: 30px">%s</td>',  $select[$correct_answer[$i-1]['correct_answer']]
                );
            }
            $table .= '</tr>';
    
            $xhtml = sprintf(
                '<div style="border-radius: 10px; border: black 1px solid;border-color: black;" class="col-md-8 col-md-offset-1">
                    <h3 style="text-align: center;">Kết Quả Bài Thi </h3>
                    <p>User : %s</p>
                    <p>Tổng Điểm : %.2f / 10</p>
                    <p>Thời Gian : %s</p>
                    <div>
                        <p>Đáp án đúng : </p>
                        <table class="tableStyle" border="1">
                            <tbody>
                                %s
                            </tbody>
                        </table>
                    </div>
                    <p style="color: red;"></p>
                </div>', Auth::user()->name, $mark, $data['time'], $table
            );
    
            $saveResult = [
                'exam_id' => (int)$data['id'],
                'user_id' => Auth::user()->id,
                'mark' => $mark,
                'time' => $data['time'],
                // 'create_at' => now()
            ];
            // $saveResult->save();
            DB::table('sample_exam')->insert($saveResult);
    
            return response()->json([
                'success' => "Nộp bài thành công!",
                'data' => [
                    'xhtml' => $xhtml,
                    'saveResult' => $saveResult,
                ]
            ], 200);
        }
    }
}
