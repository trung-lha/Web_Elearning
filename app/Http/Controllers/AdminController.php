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
        return view('admin.post.form',compact('infoAdmin'));
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
        return view('admin.users.form',compact('infoAdmin'));
    }
}
