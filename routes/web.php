<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//route::prefix('')->group();
//Route::prefix('')->group(function(){});

//////////****************************************////////////
route::prefix('/')->group(function(){
    route::get('hsc/registration','frontEnd\reg\singup@index');
    route::post('hsc/registration/save','frontEnd\reg\singup@hscSave');
     route::post('email/check/save','frontEnd\reg\singup@ajaxEmail');
});


//////////****************************************////////////
route::prefix('hsc/student')->group(function(){
    route::get('/login/form','frontEnd\stu\studentLogin@loginFormShow');
    route::post('/login/check','frontEnd\stu\studentLogin@loginCheck');
    route::get('/master/dashboard','frontEnd\stu\student@dashboard');
  
    route::get('/master/view/profile','frontEnd\stu\student@profile');
    
    
    
    route::get('/master/logout','frontEnd\stu\student@logout');
});


//////////****************************************////////////
Route::prefix('supper/admin')->group(function(){
        
    
});

//////////****************************************////////////
route::prefix('/collage/admin/')->group(function(){
     route::get('/login/form','admin_master\admin\adminLogin@loginFormShow');
     route::post('/login/check','admin_master\admin\adminLogin@loginCheck');
     
     route::get('/master/index','admin_master\admin\AdminDashboard@index');
     
     route::get('/master/logout','admin_master\admin\AdminDashboard@logout');
});


