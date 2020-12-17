<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __contruct(){
        $listSubject = DB::table('subject')
        ->select('subject.id','subject.name')->get();
        view()->share('listSubject', $listSubject);
    }
    public function index(Request $request)
    {
        $listSubject = DB::table('subject')
        ->select('subject.id','subject.name')->get();
        $examForSub =  DB::table('exam')
        ->join('subject','exam.subject_id','=','subject.id')
        ->where('exam.status', "active")
        ->where('exam.subject_id',$request->subject_id)
        ->select('subject.id','subject.name as subjectName','exam.name as examName','exam.status','exam.subject_id')
        ->get();
        // dd($examForSub);
        return view('exams.exam', compact('examForSub','listSubject'));
    }

    public function examDetail(Request $request){
        $listSubject = DB::table('subject')
        ->select('subject.id','subject.name')->get();
        $listQuestions = DB::table('question')
        ->where('question.exam_id',$request->exam_id)
        ->get();
        // dd($listQuestions);
        return view('exams.examDetail', compact('listQuestions','listSubject'));
    }

    public function showPost(Request $request){
        $listSubject = DB::table('subject')
        ->select('subject.id','subject.name')->get();
        $listPost =  DB::table('post')
        ->join('subject','post.subject_id','=','subject.id')
        ->where('post.status', "active")
        ->where('post.subject_id',$request->subject_id)
        ->select('post.id','subject.name as subjectName','post.name as postName','post.status','post.subject_id','post.content')
        ->get();
        // dd($listPost);
        return view('post.showListPost', compact('listPost','listSubject'));
    }

    public function postDetail(Request $request){
        $listSubject = DB::table('subject')
        ->select('subject.id','subject.name')->get();

        $post = DB::table('post')
        ->where('post.id',$request->post_id)
        ->get();

        return view('post.postDetail', compact('post','listSubject'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
