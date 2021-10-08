<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth',\App\Http\Middleware\AdminMiddleware::class]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ol=new Teacher();
        $ol=$ol->paginate(11);



        return view('teacher',['teacher'=>$ol,'activ'=>1]);
    }











    public function baholash($id,Request $req){

        $req->validate([
            'student_baho'=>'required | max:1| regex:/^[0-5]$/ ',
        ]);


        $student_baho=$_GET['student_baho'];
        Student::where('id',$id)->update(['student_baho'=>$student_baho]);
        $id=Student::where('id',$id)->first()->vazifa;
        return redirect('view?id='.$id);

    }


    public function add_baho(){
        $id=$_GET['id'];

        return view('baholash',['id'=>$id]);
    }









    public function save(Request $req){

        $req->validate([
            'teacher_vazifa'=>'required | max:500|min:10',
            'lesson'=>'required | max:25|min:3',
        ]);

        $teacher_vazifa=$_GET['teacher_vazifa'];
        $lesson=$_GET['lesson'];
        $post= Teacher::insert(['teacher_vazifa'=>$teacher_vazifa,'lesson'=>$lesson]);

    return redirect('home');
    }
    public function add(){
        return view('add_vazifa');
    }

    public function delete(){
        $id=$_GET['id'];
        $rasm=Teacher::where('id',$id)->delete();

        return redirect('home');
    }

    public function edit(){
        $id=$_GET['id'];
        $a=Teacher::where('id',$id)->first();
        return view('edit_vazifa',['edit'=>$a]);
    }

    public function save_e($id,Request $req){
        $req->validate([
            'teacher_vazifa'=>'required | max:500|min:10',
            'lesson'=>'required | max:25|min:3',
        ]);

        $teacher_vazifa=$_GET['teacher_vazifa'];
        $lesson=$_GET['lesson'];
        Teacher::where('id',$id)->update(['teacher_vazifa'=>$teacher_vazifa,'lesson'=>$lesson]);

        return redirect('home');
    }







}
