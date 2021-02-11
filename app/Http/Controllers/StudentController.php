<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   public function record(Request $request){
       $student = new Student();

       $student->name = $request->input('name');
       $student->email = $request->input('email');
       $student->password = $request->input('password');

       $student->save();
   }
   public function retriveData(){
       $data = DB::table("users")->get();

       $value = DB::table('students')->get();

       $name = DB::table('students')->where('name','Lina')->first();

       $id= DB::table('students')->find(3);

       $pluck = DB::table('students')->pluck('password');

       dd($pluck);

//       dd($data);
       return view("query",
           ['data' => $data],
           ['value'=>$value]
       );
   }
}
