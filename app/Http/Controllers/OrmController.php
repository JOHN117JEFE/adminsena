<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Area;
use App\Models\Computer;
use App\Models\CourseTeacher;
use App\Models\Teacher;
use App\Models\CourseArea;
use App\Models\CourseComputer;
use App\Models\CourseApprentice;
use App\Models\TrainingCenter;

class OrmController extends Controller
{
    public function consultas()
    {
        // Apprentice = Apprentice::find(2);
        // return $Apprentice;

        // $Apprentice = course::find(2);
        // return $Apprentice;



        // $Apprentice=Apprentice::find(2);
        // return $Apprentice->computer;

        // $Apprentice=Apprentice::find(1);
        // return $Apprentice->course;

        // $course = Course::find(1);
        // return $course->area; me da un error en esta consulta porque no existe el area con id 1
        // $course = Area::find(1);
        //  return $course->courses;

        // $area = Area::find(1);
        // return $area->teachers;

        // {  $teacher = Teacher::find(1);
        // return $teacher->trainingCenter;

        $teacher = TrainingCenter::find(1);
        return $teacher->teachers  ; 

        // $course = TrainingCenter::find(1);
        //  return $course->courses; 

        //  $course = Course::find(1);
        //  return $course->trainingCenter; este tambien me dio error pero el de arriba no

        // $course = Course::find(1);
        // return $course->teachers;
        // $teacher = Teacher::find(1);
        // return $teacher->courses; tambien me dio error
    }
}
