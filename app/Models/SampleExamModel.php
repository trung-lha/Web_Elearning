<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleExamModel extends Model
{
    protected $table = 'sample_exam';
    public $timestamp = true;

    public function user()
    {
        return $this->belongsTo(UserModel::class);
    }
}
