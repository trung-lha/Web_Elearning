<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
    protected $table = 'subject';

    public function getSubjectActive(){
        $listSubject = $this
        ->select('subject.id','subject.name')
        ->where('subject.status',"active")
        ->get();
        return $listSubject;
    }

    public function getExamForSubject($subId){
        $examForSub =  $this
        ->join('exam','exam.subject_id','=','subject.id')
        ->where('exam.status', "active")
        ->where('exam.subject_id',$subId)
        ->select('subject.id','subject.name as subjectName','exam.name as examName','exam.status','exam.subject_id')
        ->get();

        return $examForSub;
    }
}
