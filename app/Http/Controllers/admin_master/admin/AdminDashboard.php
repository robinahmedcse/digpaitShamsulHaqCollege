<?php

namespace App\Http\Controllers\admin_master\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminDashboard extends Controller {

    public function index() {

        $home = view('admin.home.homeContent');


        return view('admin.adminMaster')
                        ->with('x', $home);
    }

    public function logout() {

        $admin_id=Session::get('admin_id');
        $data = array();
        
        $data['admin_is_login']=0;

        DB::table('tbl_admin')
                ->where('admin_id', $admin_id)
                ->update($data);



        Session::put('admin_id', NULL);
        Session::put('admin_role', NULL);
        Session::put('admin_name', NULL);
        Session::put('admin_active', NULL);

        return redirect('/collage/admin/login/form')->with('exception', 'You are Logout successfully');
    }

}
