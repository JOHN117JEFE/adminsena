<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
   
    protected $fillable = ['name', 'email', 'cell_numer'];
 public function computer()
 {
     return $this->belongsTo("App\Models\Computer");
 }
 public function course(){
    return $this ->belongsTo("App\Models\Course");
 }
}
