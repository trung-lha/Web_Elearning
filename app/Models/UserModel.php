<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';

    public function sampleExams(){
        return hasMany(SampleExamModel::class);
    }
}
