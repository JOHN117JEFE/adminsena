<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function apprendices()
    {
        return $this ->hasMany("app\models\apprentice");
    }
    public function area()
    {
       return $this ->bel0ongsTo("app\models\area");
    }
    public function teachers(){
        return $this->belongsToMany("app\models\teacher");
    }
    public function trainingCenter(){
        return $this ->belongsTo("app\models\trainingCenter");
    }
}
