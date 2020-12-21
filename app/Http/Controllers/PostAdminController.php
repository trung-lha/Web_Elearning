<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class PostAdminController extends Controller
{
    
    public function showPostAdmin($post_id){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        $postForEdit = DB::table('post')
        ->where('post.id',$post_id)
        ->get();
        return view('admin.post.editPost',compact('infoAdmin','postForEdit'));
    }

    public function editPostAdmin(Request $request){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        $dataUpdate = DB::table('post')
        ->where('post.id',$request->post_id)
        ->update(['name' => $request->name,
                'content' => $request->content,
                'status' => $request->status,
                'updated_at' => now()]);
        return redirect()->action('AdminController@postAdmin');
    }

    public function postDelete($post_id){
        DB::table('post')->where('post.id', $post_id)->delete();
        return \redirect()->action('AdminController@postAdmin');
    }
}
