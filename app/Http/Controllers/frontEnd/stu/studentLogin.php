<?php

namespace App\Http\Controllers\frontEnd\stu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



class studentLogin extends Controller
{
    
    public function loginFormShow() {
        return view('frontEnd.login_hsc.login');
    }
    
    
    
    public function loginCheck(Request $request) {
    //  return  $request->all();
      
       $email= $request->email;
      $password= md5($request->password);
     $id= $request->id;
      
             
        $LoginData= DB::table('tbl_ssc_stu_mailling_info')
                  ->where('stu_code',$id) 
                  ->where('ssc_stu_email',$email) 
                  ->where('ssc_stu_pass',$password)
                   ->first();
          
          
//           echo '<pre>';
//           print_r($LoginData);
//           exit();if ($admin_info) {       
                 
     
                        if ($LoginData) {
                            
                            $stuData= DB::table('tbl_ssc_stu_personal_info')
                                        ->where('stu_code',$id) 
                                        ->first();
                            
                          Session::put('student_id_h', $stuData->stu_code);
                          Session::put('student_name_h', $stuData->stu_name);  
                          Session::put('student_status_h', $stuData->active_status);
                          return redirect('hsc/student/master/dashboard');
                      } else {
                         return redirect('hsc/student/login/form')->with('exception','iNVALIDE'); 
                          
                      }
      
      
      
      
    }
    
    
    
    
    
}
