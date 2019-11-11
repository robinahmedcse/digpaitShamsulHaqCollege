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
route::prefix('/hsc/student')->group(function(){
    route::get('/login/form','frontEnd\reg\hscStudent@index');
    
});


//////////****************************************////////////
Route::prefix('supper/admin')->group(function(){
        
    
});

//////////****************************************////////////
route::prefix('master/admin')->group(function(){
    
});


