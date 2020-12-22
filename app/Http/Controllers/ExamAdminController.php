<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ExamAdminController extends Controller
{
    public function showQuestion(Request $request){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        $questionForEdit = DB::table('question')
        ->where('question.id',$request->question_id)
        ->get();
        return view('admin.exam.editQuestion',compact('infoAdmin','questionForEdit'));
    }

    public function editQuestion(Request $request){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        $dataUpdate = DB::table('question')
        ->where('question.id',$request->question_id)
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
