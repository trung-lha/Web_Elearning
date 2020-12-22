<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table='post';

    public function getPostForSubject($sub_id){
        $listPost =  $this
        ->join('subject','post.subject_id','=','subject.id')
        ->where('post.status', "active")
        ->where('post.subject_id',$sub_id)
        ->select('post.id','subject.name as subjectName','post.name as postName','post.status','post.subject_id','post.content')
        ->get();

        return $listPost;
    }

    public function getPostForAdmin(){
        $listPosts = $this
        ->join('subject','post.subject_id','=','subject.id')
        ->select('post.id as id', 'post.content as content','post.name as postName','subject.name as subName',
        'post.status as status','post.viewed as viewed','post.created_at as created_at','post.updated_at as updated_at')
        ->paginate(10);

        return $listPosts;
    }
}
