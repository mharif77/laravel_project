<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    function index(){
        $students = Student::all();
       // dd($students); 
               return view('student/index', ['students' =>$students]); 
               
            //    "yes, i am md arif hasan";
    }
    function create(){
        return view('student/create');
    }
    function store(Request $request){
        $student = new Student();
        $student['name'] = $request->input('name');
        $student['email'] = $request->input('email');
        $student['phone'] = $request->input('phone');

        $student->save();
       return redirect(route('student.index'))->with('msg','successfully added');
    }

    function destroy(Request $request){
        $student = Student::find($request->id);
        // echo $request->id;
        $student->delete();
        return redirect(route('student.index'))->with('msg','successfully Deleted');

    }

    function edit(Request $request){
      $student =  Student::find($request->id);
        return view('student/edit',['student'=> $student]);
    }

    function update(Request $request){
        $item =  Student::find($request->id);
        $item ['name'] = $request->input('name');
        $item ['email'] = $request->input('email');
        $item ['phone'] = $request->input('phone');
        $item->update();
        return redirect(route('student.index'))->with('msg','successfully Updated');
    //    return "Hello";
    }
}
