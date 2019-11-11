<?php

namespace App\Http\Controllers\frontEnd\reg;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class singup extends Controller {

    public function index() {
        return view('frontEnd.regi.hscRegi');
    }

    public function hscSave(Request $request) {
     //  return $request->all();


         $lastRecord = DB::table('tbl_ssc_stu_personal_info')
                 ->orderBy('stu_id', 'DESC')
                 ->first();
        $get_code = $lastRecord->stu_code;
        $code = $get_code + 1;
             
        
        session::put('student_code', $code);

       
        $this->personal_information($request);
      
        $this->parent_information($request);
     
        $this->permanent_address($request );
        $this->present_address($request); 
        $this->legal_guardian_info($request);
        $this->admission_payment_info($request);
        $this->ssc_information($request);
        $this->mail_info($request);
    
        
          return redirect('hsc/student/login/form');
           session::put('login_message','All info Save Successfully.Please Login');
       
        
    }

    protected function personal_information($request) {

      $stu_code = session::get('student_code');
        $data = array();
        $data['stu_code'] = $stu_code;
        $data['stu_name'] = $request->stu_name;
        $data['stu_phone'] = $request->stu_phone;
        $data['stu_day'] = $request->day;
        $data['stu_month'] = $request->month;
        $data['stu_year'] = $request->year;
        $data['stu_religion'] = $request->religion;
        $data['stu_gender'] = $request->gender;
        $data['stu_nationality'] = $request->nation;
        $data['active_status'] = 0;

        DB::table('tbl_ssc_stu_personal_info')
                ->insert($data);
      
        
       
    }

    protected function parent_information($request) {

        $stu_code = session::get('student_code');
        $data = array();
        $data['stu_code'] = $stu_code;
        $data['ssc_stu_father_name'] = $request->father_name;
        $data['ssc_stu_father_occu'] = $request->father_occu;
        $data['ssc_stu_father_phone'] = $request->father_phone;
        $data['ssc_stu_father_income'] = $request->father_income;
        $data['ssc_stu_mother_name'] = $request->mother_name;
        $data['ssc_stu_mother_occu'] = $request->mother_occu;
        $data['ssc_stu_mother_phone'] = $request->mother_phone;

       DB::table('ssc_stu_parent_info')->insert($data);
    }

    protected function permanent_address($request) {

        $stu_code = session::get('student_code');
        $data = array();
        $data['stu_code'] = $stu_code;
        $data['per_village'] = $request->per_v_name;
        $data['per_post_code'] = $request->per_po_code;
        $data['per_upazila'] = $request->per_upazila;
        $data['per_district'] = $request->per_dis;

        DB::table('tbl_ssc_permanent_info')->insert($data);
    }

    protected function present_address($request) {

        $stu_code = session::get('student_code');
        $data = array();
        $data['stu_code'] = $data['stu_code'] = $stu_code;
        $data['pres_village'] = $request->pres_v_name;
        $data['pres_post_code'] = $request->pres_po_code;
        $data['pres_upazila'] = $request->pres_upazila;
        $data['pres_district'] = $request->pres_dis;

        DB::table('tbl_ssc_present_info')->insert($data);
    }

    protected function legal_guardian_info($request) {
        
        $stu_code = session::get('student_code');
        $data = array();
        $data['stu_code'] = $stu_code;
        $data['g_name'] = $request->g_name;
        $data['g_phone'] = $request->g_phone;
        $data['g_occu'] = $request->g_occu;
        $data['g_address'] = $request->g_address;

        DB::table('tbl_ssc_legal_guar_info')->insert($data);
    }

    protected function admission_payment_info($request) {
      
        $stu_code = session::get('student_code');
        $data = array();
        $data['stu_code'] = $stu_code;
        $data['ad_payment_type'] =  $request->ad_payment_type;
        $data['ad_pay_slip_id'] =  $request->ad_pay_id;
        
        DB::table('tbl_ssc_admision_payment_info')->insert($data);
    }
    
      protected function ssc_information($request) {

        $stu_code = session::get('student_code');
        $data = array();
        $data['stu_code'] = $stu_code;
        $data['ssc_board'] = $request->ssc_board;
        $data['ssc_yr'] = $request->ssc_pass_yr;
        $data['ssc_insti'] = $request->ssc_institute;
        $data['ssc_role'] = $request->ssc_role;
        $data['ssc_regi'] = $request->ssc_regi;
        $data['ssc_group'] = $request->ssc_group;
        $data['gpa_four_subject'] = $request->ssc_gpa_without;
        $data['gpa'] = $request->ssc_gpa_with;

        DB::table('tbl_ssc_info')->insert($data);

 
    }
    

    protected function mail_info($request) {

            $stuImage = $request->file('stu_photo');
            $name = $stuImage->getClientOriginalName();
            $uploadPath = 'public/studentImage/';
            $stuImage->move($uploadPath, $name);
            $imaeUrl = $uploadPath . $name;

 
            $password = md5($request->stu_password);
            
            $stu_code = session::get('student_code');      
        
        $data = array();
        $data['stu_code'] = $stu_code;
        $data['ssc_stu_email'] = $request->stu_email;
        $data['ssc_stu_pass'] = $password;

        $data['ssc_stu_img_url'] = $imaeUrl;
        
         DB::table('tbl_ssc_stu_mailling_info')
                ->insert($data);
    }
    
    
    
    
    public function ajaxEmail(Request $request) {
       // return $request->all();
        
        
         $email_info = DB::table('tbl_ssc_stu_mailling_info')
                ->select('tbl_ssc_stu_mailling_info.ssc_stu_email')
                ->where('ssc_stu_email', $request->email)
                ->first();
        
                  if($email_info != NULL){
                       return 'This Email Already Exists';
                 
                 }else{
                      return 'Email Available';
               
                 }
    }//ajaxEmail
    
    

}////sign up
