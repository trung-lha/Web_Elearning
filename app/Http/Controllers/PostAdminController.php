<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostAdminController extends Controller
{
    
    public function showPostAdmin($post_id){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();

        return view('admin.post.form');
    }
}
