<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SubjectModel as SubjectModel;
use App\Models\QuestionModel as QuestionModel;
use App\Models\PostModel as PostModel;
use App\Models\ExamModel as ExamModel;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subModel = new SubjectModel();
        $examForSub = $subModel->getExamForSubject($request->subject_id);
        // dd($examForSub[0]->viewed);
        return view('exams.exam', compact('examForSub'));
    }

    public function examDetail(Request $request){
        $listQuestions = QuestionModel::where('exam_id','=',$request->exam_id)->get();
        $exam = ExamModel::find($request->exam_id);
        // dd($request->exam_id);
        $exam->viewed += 1; 
        $exam->save();
        return view('exams.examDetail', compact('listQuestions'));
    }

    public function showPost(Request $request){
        $post = new PostModel();
        $listPost =  $post->getPostForSubject($request->subject_id);
        // dd($listPost[0]->viewed);
        return view('post.showListPost', compact('listPost'));
    }

    public function postDetail(Request $request){
        $post = PostModel::find($request->post_id);
        $post->viewed += 1; 
        $post->save();

        return view('post.postDetail', compact('post'));
    } 
}
