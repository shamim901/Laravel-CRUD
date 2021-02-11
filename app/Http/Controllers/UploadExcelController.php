<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UploadExcelController extends Controller
{
   function upload(){
       return view('upload');
   }

   function uploadExcel(){
       Excel::import(new User(), request()->file('select'));

    //   Excel::import(new UsersImport, 'users.xlsx');
       return redirect('/')->with('success', 'All good!');
   }
}
