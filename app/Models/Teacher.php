<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function courses(){
        return $this ->belongsToMany("app\models\course");
    }
    public function trainingCenter(){
        return $this ->belongsTo("app\models\trainingCenter");
    }
    public function area(){
        return $this ->belongsTo("app\models\Area");
    }
}
