<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function questions(){

        return $this->hasMany('App\Question', 'questions_id');
    }
}
