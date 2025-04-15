<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function apprentices()
    {
        return $this ->hasMany("app\models\apprentice");
    }
    public function area()
    {
       return $this ->belongsTo("app\models\Area");
    }
    public function teachers(){
        return $this->belongsToMany("Teacher::class");
    }
    public function trainingCenter(){
        return $this ->belongsTo("app\models\trainingCenter");
    }
}
