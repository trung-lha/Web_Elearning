<?php

namespace App\Http\Controllers;
use App\Models\QuestionModel as QuestionModel;
use Illuminate\Http\Request;
use DB;

class test extends Controller
{
    public function index(Request $request)
    {
        $ques = new QuestionModel();
        $listQuestions = $ques->getQuestionForAdmin($request->selectedSubject);
        // $listSubject = DB::table('subject')->get();
        //echo $request->selectedSubject;
        $records = count($listQuestions->toArray());
        $xhtml='';
        if($records>0){
            foreach ($listQuestions as $key=>$question){
                $xhtml .= sprintf('
                <tr>
                <td style="width: 2%%;">%d</td>
                <td style="width: 39%%;">%s</td>
                <td style="width: 10%%;">%s</td>
                <td style="width: 10%%;">%s</td>
                <td style="width: 13%%;"></td>
                <td style="width: 13%%;"></td>
                <td style="width: 13%%;">
                </td></tr>',$key+1,$question['question'],$question['exam_name'],$question['subject_name']);
            }
        }
        else{
            $xhtml .= '<tr><td colspan="5" align="center">No record found.</td></tr>';
        }
        
        return response()->json([
            'success' => "Nộp bài thành công!",
            'tableData' => $xhtml,
        ], 200);
    }
}
