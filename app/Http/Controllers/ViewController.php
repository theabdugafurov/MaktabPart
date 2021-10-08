<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Student;

class ViewController extends Controller
{
    //
    public function welcome(){
        $ol=new Teacher();
        $d=new Student();
        $ol=$ol->get();

        return view('welcome',['teacher'=>$ol,'student'=>$d]);
    }

    public function start(){
        return view('start');
    }
}
