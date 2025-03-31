<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    public function aprendice()
    {
        return $this->hasOne("app\Models\Apprentice");
    }
}