<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use App\Models\PostModel as PostModel;
use App\Models\QuestionModel as QuestionModel;

class AdminController extends Controller
{
    public function showHomeAdmin(){
        return view('admin.adminHome');
    }

    public function postAdmin(){
        $post = new PostModel();
        $listPosts = $post->getPostForAdmin();

        return view('admin.post.form',compact('listPosts'));
    }

    public function examAdmin(Request $request){
        
        $ques = new QuestionModel();
        $listQuestions = $ques->getQuestionForAdmin($request->selectedSubject);
        $listSubject = DB::table('subject')->get();
        return view('admin.exam.form',compact('listQuestions','listSubject'));
    }

    public function userAdmin(){
        $users = DB::table('users')
        ->paginate(10);
        return view('admin.users.form',compact('users'));
    }
}
