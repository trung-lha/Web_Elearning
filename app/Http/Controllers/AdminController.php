<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        return view('admin.exam.form',compact('infoAdmin'));
    }

    public function userAdmin(){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        $users = DB::table('users')
        ->paginate(10);
        // dd($subjects);
        return view('admin.users.form',compact('infoAdmin','users'));
    }
}
