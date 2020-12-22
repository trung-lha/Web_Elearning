<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\PostModel;

class PostAdminController extends Controller
{
    
    public function showPostAdmin($post_id){
        
        $postForEdit = PostModel::where('id',$post_id)->get();
        return view('admin.post.editPost',compact('postForEdit'));
    }

    public function editPostAdmin(Request $request){
        
        PostModel::where('id',$request->post_id)
        ->update(['name' => $request->name,
                'content' => $request->content,
                'status' => $request->status,
                'updated_at' => now()]);
        return redirect()->action('AdminController@postAdmin');
    }

    public function postDelete($post_id){
        $toDel = PostModel::find($post_id);
        $toDel->delete();
        return \redirect()->action('AdminController@postAdmin');
    }
}
