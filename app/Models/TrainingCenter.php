<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{
    public function courses(){
        return $this-> hasMany ("App\Models\Course");
    }
    public function teachers(){
        return $this -> hasMany("app\models\teacher");
    }
}
