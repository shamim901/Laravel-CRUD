<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UploadExcelController extends Controller
{
   
   /** 
	** file upload
   **/
   	function upload(){

       return view('upload');
   
   	}

   function uploadExcel() 
   {

   Excel::import(new User(), request()->file('select'));

   return redirect('/')->with('success', 'All good!');
   }
}
