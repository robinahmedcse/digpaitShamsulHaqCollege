<?php

namespace App\Http\Controllers\frontEnd\stu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;




class student extends Controller
{
    
    public function dashboard() {
        $home=view('student.home.home');
        
    //    return view('student.home.home');
        
        return view('student.studentMaster')
                  ->with('x',$home);
        
        
       
    }
    
    
    
    
    
    public function logout(){
        
        Session::put('student_id_h', NULL);
         Session::put('student_name_h', NULL);
         Session::put('student_status_h', NULL);
        

        return redirect('hsc/student/login/form')->with('exception','You are Logout successfully');
   
    }
    
    
    
    
    
}//student
