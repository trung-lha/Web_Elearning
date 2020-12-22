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
}
