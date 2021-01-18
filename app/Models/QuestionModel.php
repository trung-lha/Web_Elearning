<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionModel extends Model
{
    protected $table='question';

    public function getQuestionForAdmin($subject_id){
        if($subject_id == 0){
            $listQuestions = $this
            ->join('exam','exam.id','=','question.exam_id')
            ->join('subject','exam.subject_id','=','subject.id')
            ->select('question.id as id','exam.id as exam_id','exam.name as exam_name','subject.id as subject_id','question.question','question.answer_b','question.answer_a','question.answer_c','question.answer_d','question.correct_answer','subject.name as subject_name','exam.status as status','question.created_at','question.updated_at')
            ->orderBy('question.id')
            ->paginate(20);
        } else{
            $listQuestions = $this
            ->join('exam','exam.id','=','question.exam_id')
            ->join('subject','exam.subject_id','=','subject.id')
            ->where('subject.id',$subject_id)
            ->select('question.id as id','exam.id as exam_id','exam.name as exam_name','subject.id as subject_id','question.question','question.answer_b','question.answer_a','question.answer_c','question.answer_d','question.correct_answer','subject.name as subject_name','exam.status as status','question.created_at','question.updated_at')
            ->orderBy('question.id')
            ->paginate(20);
        }
        

        return $listQuestions;
    }
}
