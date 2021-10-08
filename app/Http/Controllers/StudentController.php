<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use  App\Http\Controllers\Auth;
class StudentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $id=$_GET['id'];
        $ol=Student::where('vazifa',$id)->get();
        return view('student',['student'=>$ol]);

    }


    public function save($id,Request $req){

        $req->validate([
            'student_vazifa'=>'required | max:500|min:10 ',
        ]);

        $student_name=$req->user()->name;
        $student_vazifa=$_GET['student_vazifa'];
        $vazifa=$id;
        $post= Student::insert(['student_name'=>$student_name,'student_vazifa'=>$student_vazifa,'vazifa'=>$vazifa]);

       return redirect('welcome?id='.$id);
    }

    public function add(){
        $id=$_GET['id'];
        return view('add_vazifa_student',['id'=>$id]);
    }

    public function delete(){
        $id=$_GET['id'];
        $student_baho="0";
        Student::where('id',$id)->update(['student_baho'=>$student_baho]);
        $id=Student::where('id',$id)->first()->vazifa;
        return redirect('view?id='.$id);
    }
}
