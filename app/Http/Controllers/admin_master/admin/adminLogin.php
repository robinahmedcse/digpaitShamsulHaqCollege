<?php

namespace App\Http\Controllers\admin_master\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



class adminLogin extends Controller
{
    
        public function loginFormShow() {
        return view('admin.login.login');
    }
    
    
    public function loginCheck(Request $request) {
        
         $email=$request->email;
         $password=md5($request->password);
   
        
              $LoginData= DB::table('tbl_admin')
                  ->where('admin_email',$email) 
                  ->where('admin_password',$password)
                   ->first();
//         
//              echo '<pre>'; 
//           print_r($LoginData);
//      exit();
      
      
                        if ($LoginData) {
                            $admin_id=$LoginData->admin_id;
                           
                                $data['admin_is_login']=1;
                                DB::table('tbl_admin')
                                        ->where('admin_id',$admin_id)
                                         ->update($data);


                            
                          Session::put('admin_id', $admin_id);
                          Session::put('admin_role', $LoginData->admin_role);
                          Session::put('admin_name', $LoginData->admin_name);  
                          Session::put('admin_active', $LoginData->admin_active);
                          return redirect('/collage/admin/master/index');
                      } else {
                         return redirect('/collage/admin/login/form')->with('exception','iNVALIDE'); 
                          
                      }
      
      
      
      
                      
        
    }
    
    
    
    
}
