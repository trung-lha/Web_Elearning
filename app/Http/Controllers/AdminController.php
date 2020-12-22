<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;

class AdminController extends Controller
{
    public function showHomeAdmin(){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        return view('admin.adminHome', compact('infoAdmin'));
    }

    public function postAdmin(){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        $listPosts = DB::table('post')
        ->join('subject','post.subject_id','=','subject.id')
        ->select('post.id as id', 'post.content as content','post.name as postName','subject.name as subName',
        'post.status as status','post.viewed as viewed','post.created_at as created_at','post.updated_at as updated_at')
        ->paginate(10);

        return view('admin.post.form',compact('infoAdmin','listPosts'));
    }

    public function examAdmin(){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        $listQuestions = DB::table('question')
        ->join('exam','exam.id','=','question.exam_id')
        ->join('subject','exam.subject_id','=','subject.id')
        ->select('question.id as id','exam.id as exam_id','exam.name as exam_name','subject.id as subject_id','question.question','question.answer_b','question.answer_a','question.answer_c','question.answer_d','question.correct_answer','subject.name as subject_name','exam.status as status','question.created_at','question.updated_at')
        ->orderBy('question.id')
        ->paginate(20);
        // dd($listQuestions);
        return view('admin.exam.form',compact('infoAdmin','listQuestions'));
    }

    public function userAdmin(){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        $users = DB::table('users')
        ->paginate(10);
        return view('admin.users.form',compact('infoAdmin','users'));
    }
}
