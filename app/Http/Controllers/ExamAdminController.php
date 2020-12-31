<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\QuestionModel;

class ExamAdminController extends Controller
{
    public function showQuestion(Request $request){
        $questionForEdit = QuestionModel::where('id',$request->question_id)->get();
        return view('admin.exam.editQuestion',compact('questionForEdit'));
    }

    public function editQuestion(Request $request){
        
        QuestionModel::where('id',$request->question_id)
        ->update(['question' => $request->question,
                'answer_a' => $request->answer_a,
                'answer_b' => $request->answer_b,
                'answer_c' => $request->answer_c,
                'answer_d' => $request->answer_d,
                'correct_answer' =>$request->correct_answer,
                'updated_at' => now()]);
        return redirect()->action('AdminController@examAdmin');
    }

    public function filterQuestion(Request $request){
        //$ques = new QuestionModel();
        //$listQuestions = $ques->getQuestionForAdmin($request->selectedSubject);
        // $listSubject = DB::table('subject')->get();
        //echo $request->selectedSubject;
        // $records = count($listQuestions->toArray());
        // $xhtml='';
        // if($records){
        //     foreach ($listQuestions as $key=>$question){
        //         $xhtml = \sprintf(
        //         '<tr>
        //             <td style="width: 2%;">{{$key+1}}</td>
        //             <td style="width: 39%;">{{$question->question}}</td>
        //             <td style="width: 10%;">{{$question->exam_name}}</td>
        //             <td style="width: 10%;">{{$question->subject_name}}</td>
        //             <td style="width: 13%;">{{$question->created_at}}</td>
        //             <td style="width: 13%;">{{$question->updated_at}}</td>
        //             <td style="width: 13%;">
        //                 <a href="{{Route(%s,$question->id)}}"><button
        //                         class="btn btn-success">Sửa</button></a>
        //                 <a onclick="return confirm(%s)" href=""><button
        //                         class="btn btn-dark">Xóa</button>
        //                 </a>
        //             </td>
        //         </tr>',"'showQuestion'","'Bạn có chắc muốn xóa bài viết này không?'");
        //     }
        // }
        // else{
        //     $xhtml .= '<tr><td colspan="5" align="center">No record found.</td></tr>';
        // }
        return response()->json([
            'success' => "Nộp bài thành công!",
            
        ], 200);
    }
}
