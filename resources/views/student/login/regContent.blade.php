<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Admin Registration|দিগপাইত শামসুল হক ডিগ্রী কলেজ </title>

        <!-- Bootstrap -->
        <link href="{{asset('public/backEnds/')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('public/backEnds/')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{asset('public/backEnds/')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{asset('public/backEnds/')}}/vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{asset('public/backEnds/')}}/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        {!! Form::open(['url'=>'wp-master/admin/registration/check/koro','method'=>'POST' ]) !!}
                        <h1>Registration Form</h1>
                       
                        <div>
                            {{Form::text('admin_f_name',null,['class'=>'form-control','placeholder'=>'Admin First Name','required'])}}
                        </div>
                        
                         <div>
                            {{Form::text('admin_l_name',null,['class'=>'form-control','placeholder'=>'Admin Last Name','required'])}}
                        </div>
                        
                        <div>
                            {{Form::text('admin_username',null,['class'=>'form-control','placeholder'=>'Admin Username','required'])}}
                        </div>
                        
                          <div>
                            {{Form::text('admin_phone',null,['class'=>'form-control','placeholder'=>'Admin Phone Number','required'])}}
                        </div>
                        
                        

                        <div>
                            {{Form::email('admin_email',null,['class'=>'form-control','placeholder'=>'Admin Email','required'])}}
                        </div>
                        

                        <div >
                            {{Form::password('admin_password',['class'=>'form-control','placeholder'=>'Admin Password','required'])}}
                        </div>
                        
                      
                        <div>
                            <select name="my_publication_status" class="form-control">
                                <option value="NUll">------Status----------</option>
                                <option value="1">Content</option>
                                <option value="2">Office</option>
                            </select>
                        </div>
                        <br>
                          <div>
                          {{Form::submit('Save',['class'=>'btn btn-default ','name'=>'btn'])}} 
                        </div>
                        

                        <div class="clearfix"></div>

                        <div class="separator">
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> দিগপাইত শামসুল হক ডিগ্রী কলেজ</h1>
                                  <p>©2019 All Rights Reserved. দিগপাইত শামসুল হক ডিগ্রী কলেজ ! is a Educational Site. Privacy and Terms</p>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </section>
                </div>

            </div>
        </div>
    </body>
</html>
