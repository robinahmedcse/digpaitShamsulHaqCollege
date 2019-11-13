<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="{{asset('public/frontEnd/css/')}}/my_main_hsc_regi.css">
        <title>HSC,Registration</title>





    </head>
    <body>






        <div class="container">
            <div class="row-fluid"> 
                <div class="my_table col-sm-12 "style="overflow-x:auto";>

                    <!--                    <form   onsubmit="return validateForm()"  >-->
                    {!! Form::open(['url'=>'hsc/student/login/check','name'=>'myForm','method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal form-label-left']) !!}
                    <table class="table table-bordered table-responsive" style="width: 100%">

 
                        <tr>
                            <td colspan="4" align='center'><p>Login Form</p> </td>
                        </tr>


                        <tr>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Email</label>
                                </div>
                            </td>
                            <td width='75%'><div class="form-group">
                                    <input type="hidden" id="token_si" name="_token" value="{{ csrf_token()}}">
                                    <input type="email" class="form-control" name="email" required  >
                                      
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Password</label>
                                </div>
                            </td>
                            <td width='75%'><div class="form-group">
                                    <input type="password"   class="form-control" name="password" required>
                                </div>
                            </td>

                        </tr>  


                        <tr>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Id No.</label>
                                </div>
                            </td>
                            <td width='75%'><div class="form-group">
                                    <input type="text" class="form-control" name="id" required  >
                                    
                                </div>
                            </td>


                        </tr>




                        <tr>
                            <td width='25%'>
                                   <div class="form-group">
                                    <input type="submit" name="submit" id="mySubmit" value="Submit" class="btn btn-primary btn-large" style='width:100%; height:50px'>  
                                </div>
                            </td>
                            <td width='75%'>
                             
                            </td>

                        </tr>

                    </table>



                    {!! Form::close() !!}
                </div>
            </div>
        </div>



 



        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    </body>
</html>