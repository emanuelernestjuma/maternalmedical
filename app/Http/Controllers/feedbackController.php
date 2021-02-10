<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;
use Auth;
//use iluminate\support\Carbon;

class feedbackController extends Controller
{
    
    public function Makefeedback(Request $request){
       
   feedback::insert([
    
  
   'feedId' => $request->feedId ,
   'feedDescription' => $request->feedDescription,
   
    
   
  ]);
 

    return Redirect()->back()->with('success' , 'feedback created succesfully Successfull');    
    
}
}
