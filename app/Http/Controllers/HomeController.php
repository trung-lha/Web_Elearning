<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listSubject = DB::table('subject')
        ->select('subject.id','subject.name')->get();
        return view('home')->with('listSubject',$listSubject);
    }
    public function showInfo(){
        $info = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        $listSubject = DB::table('subject')
        ->select('subject.id','subject.name')->get();
        return view('profile', compact('info','listSubject'));
    }
}
