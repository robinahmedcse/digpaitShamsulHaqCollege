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

    
   <!-- ajax -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>



    </head>
    <body>






        <div class="container">
            <div class="row-fluid"> 
                <div class="my_table col-sm-12 "style="overflow-x:auto";>

                    <!--                    <form   onsubmit="return validateForm()"  >-->
                    {!! Form::open(['url'=>'hsc/registration/save','name'=>'myForm','method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal form-label-left']) !!}
                    <!--                        SSC Information -->


                    <table class="table table-bordered table-responsive">

                        <tr>
                            <td colspan="4" align='center' ><p>SSC Information</p> </td>
                        </tr>
                        <tr>
                            <td width='25%'>

                                <div class="form-group">
                                    <select name="ssc_board" class="form-control" id="" required>
                                        <option value="-1" selected>---Select SSC Board---</option>
                                        <option value="barisal">Barisal</option>
                                        <option value="chittagong">Chittagong</option>
                                        <option value="comilla">Comilla</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="dinajpur">Dinajpur</option>
                                        <option value="jessore">Jessore</option>
                                        <option value="rajshahi">Rajshahi</option>
                                        <option value="sylhet">Sylhet</option>
                                        <option value="madrasah">Madrasah</option>
                                        <option value="tec">Technical</option>
                                        <option value="dibs">DIBS(Dhaka)</option>
                                        <option value="BOU">BOU(Bangladesh Open University)</option>
                                    </select>
                                </div>

                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <select name="ssc_pass_yr" class="form-control" id="" required>
                                        <option value="">---Select SSC Passing Year--</option>
                                        <option value='2019'>2019</option>
                                        <option value='2018'>2018</option>
                                        <option value='2017'>2017</option>
                                        <option value='2016'>2016</option>
                                        <option value='2015'>2015</option>
                                        <option value='2014'>2014</option>
                                        <option value='2013'>2013</option>
                                        <option value='2012'>2012</option>
                                        <option value='2011'>2011</option>
                                        <option value='2010'>2010</option>
                                        <option value='2009'>2009</option>
                                        <option value='2008'>2008</option>
                                    </select>
                                </div>

                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <input type="text" name="ssc_institute" required class="form-control" id="" required placeholder="Institute Name">
                                </div>
                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <input type="text" name="ssc_role" class="form-control"  required id="sscRole" onblur="ssc()" required placeholder="SSC Roll NO">
                                </div>
                            </td>
                        </tr>



                        <tr>
                            <td width='25%'>
                                <div class="form-group">
                                    <input type="text" name="ssc_regi" class="form-control" required id="sscReg" onblur="ssc()" placeholder="SSC Registration No.">
                                </div>
                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <select name="ssc_group" class="form-control" id="" required>
                                        <option value="" selected>Select SSC Group</option>
                                        <option value="Science">Science</option>
                                        <option value="Business Studies">Business Studies</option>
                                        <option value="Humanities">Humanities</option>
                                    </select>
                                </div>


                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <input type="text" name="ssc_gpa_without"class="form-control" required  id="gpa_without" onblur="ssc()" placeholder="SSC GPA (without 4th subject)">
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="text" name="ssc_gpa_with" class="form-control" required id="gpa" onblur="ssc()" placeholder="SSC GPA (with 4th subject)">
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <td colspan="4" align='center'><p>Student Information </p></td>
                        </tr>


                        <tr>
                            <td width='25%'>
                                <label>Student Name</label>
                            </td>
                            <td width='25%'>
                                <input type="text" class="form-control" name="stu_name" required placeholder="Student Name">
                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Student Phone Number</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="text" class="form-control" name="stu_phone" required placeholder="Student Phone Number">
                                </div>
                            </td>

                        </tr>


                        <tr>
                            <td width='25%'>
                                <label>Date of Birth</label>
                            </td>
                            <td width='25%'>
                                <table   width="100%">
                                    <tr>
                                        <td>


                                            <div class="form-group">
                                                <select name="day" class="form-control" required >
                                                    <option value="0" selected="selected">Select Day</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                                                </select>
                                            </div>



                                            <div class="form-group">
                                                <select name="month" class="form-control" required>
                                                    <option value="0" selected="selected">Select Month</option>
                                                    <option value="01">01 - January</option>
                                                    <option value="02">02 - February</option>
                                                    <option value="03">03 - March</option>
                                                    <option value="04">04 - April</option>
                                                    <option value="05">05 - May</option>
                                                    <option value="06">06 - June</option>
                                                    <option value="07">07 - July</option>
                                                    <option value="08">08 - August</option>
                                                    <option value="09">09 - September</option>
                                                    <option value="10">10 - October</option>
                                                    <option value="11">11 - November</option>
                                                    <option value="12">12 - December</option>
                                                </select>
                                            </div>


                                            <select name="year" class="form-control" required>
                                                <option value="0" selected="selected">Select Year</option>
                                                <option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option>


                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Religion</label>
                                </div>
                            </td>
                            <td width='25%'> 
                                <div class="form-group">
                                    <select name="religion" class="form-control" required>
                                        <option value="BUDDHISM">Religion</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="BUDDHISM">BUDDHISM</option>
                                        <option value="CHRISTIANITY">CHRISTIANITY</option>
                                        <option value="HINDUISM">HINDUISM</option>
                                        <option value="JAINISM">JAINISM</option>
                                        <option value="JUDAISM">JUDAISM</option>
                                        <option value="OTHERS">OTHERS</option>
                                        <option value="SIKHISM">SIKHISM</option>
                                    </select>

                                </div>
                            </td>

                        </tr>



                        <tr>

                            <td width='25%'>
                                <div class="form-group">
                                    <label>Gender</label>
                                </div>
                            </td>
                            <td width='25%'> 
                                <div class="form-group">
                                    <select name="gender" class="form-control" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>


                                    </select>

                                </div>
                            </td>

                        </tr>








                        <!--                            father Info-->

                        <tr>
                            <td width='25%'>
                                <label>Father Name</label>
                            </td>
                            <td width='25%'>
                                <input type="text" class="form-control" name="father_name" required placeholder="Father Name">
                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Father's Occupation</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="text" class="form-control" name="father_occu" required placeholder="Father's Occupation">
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Father's Phone Number</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="text" class="form-control" name="father_phone" required placeholder="Father Phone Number">
                                </div>
                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Father's Yearly Income</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="text" class="form-control" name="father_income" required placeholder="Father's Yearly Income">
                                </div>
                            </td>

                        </tr>
















                        <!--                            Mother Info-->
                        <tr>
                            <td width='25%'>
                                <label>Mother Name</label>
                            </td>
                            <td width='25%'>
                                <input type="text" class="form-control" name="mother_name" required placeholder="Mother Name">
                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Mother's Occupation</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="text" class="form-control"required name="mother_occu"  placeholder="Mother's Occupation">
                                </div>
                            </td>

                        </tr>


                        <tr>
                            <td width='25%'>
                                <label>Mother Phone Number</label>
                            </td>
                            <td width='25%'>
                                <input type="text" class="form-control" name="mother_phone" required placeholder="Mother Phone Number">
                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <label> Nationality</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="text" class="form-control" name="nation" required value="Bangladeshi" readonly="">
                                </div>
                            </td>

                        </tr>


















                        <!--                          address-->

                        <tr>
                            <td colspan="4" align='center'>
                                <p>Permanent  Address</p>
                            </td>
                        </tr>   

                        <tr>
                            <td width='25%'>
                                <input type="text" class="form-control" name="per_v_name" required placeholder="Village Name">  
                            </td>
                            <td width='25%'>
                                <input type="text" class="form-control" name="per_po_code" required placeholder="Post Office Name">
                            </td>
                            <td width='25%'>
                                <input type="text" class="form-control" name="per_upazila" required placeholder="Upazila Name">
                            </td>
                            <td width='25%'>
                                <input type="text" class="form-control" name="per_dis" required placeholder="District Name">
                            </td>


                        </tr>

                        <tr>
                            <td colspan="4" align='center'>
                                <p>Present  Address</p>
                            </td>
                        </tr>   

                        <tr>
                            <td width='25%'>
                                <input type="text" class="form-control" name="pres_v_name" required placeholder="Village Name">  
                            </td>
                            <td width='25%'>
                                <input type="text" class="form-control"   name="pres_po_code"  required placeholder="Post Office Name">
                            </td>
                            <td width='25%'>
                                <input type="text" class="form-control" name="pres_upazila"  required placeholder="Upazila Name">
                            </td>
                            <td width='25%'>
                                <input type="text" class="form-control" name="pres_dis" required placeholder="District Name">
                            </td>


                        </tr>


















                        <!--                                  Legal Guardian Information -->
                        <tr>
                            <td colspan="4" align='center'> <p>Legal Guardian Information</p> </td>
                        </tr>

                        <tr>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Legal Guardian Name</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="text" class="form-control" name="g_name" required placeholder="Guardian Number">
                                </div>
                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Legal Guardian Phone Number</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="text" class="form-control" name="g_phone" required placeholder="Guardian Phone Number">
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Legal Guardian Occupation</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="text" class="form-control" name="g_occu" required placeholder=" Guardian Occupation">
                                </div>
                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Legal Guardian Address</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="text" class="form-control" name="g_address" required placeholder="Guardian Address">
                                </div>
                            </td>

                        </tr>











                        <!--                                  Payment  Information -->
                        <tr>
                            <td colspan="4" align='center'> <p>Payment Information</p> </td>
                        </tr>

                        <tr>
                            <td colspan="2" width='50%'>
                                <div class="form-group">
                                    <select name="ad_payment_type" class="form-control" required>
                                        <option value="bkash">Bkash</option>
                                        <option value="rocket">Rocket</option>
                                        <option value="Payment_Slip">Payment Slip</option>

                                    </select>

                                </div>
                            </td>
                            <td colspan="2" width='50%'>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ad_pay_id" required placeholder="Transaction Id or Payment Slip Id">
                                </div>
                            </td>

                        </tr>

















                        <!--                 other Information -->
                        <tr>
                            <td colspan="4" align='center'><p>Other Information</p> </td>
                        </tr>


                        <tr>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Email</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                             <input type="hidden" id="token_si" name="_token" value="{{ csrf_token()}}">
                                    <input type="email" class="form-control" name="stu_email" id="email"
                                           required placeholder="Student valid Email" onblur="email_check(this.value);">
                                 <span class="text-danger" id="success"></span>
                                </div>
                            </td>

                            <td width='25%'>
                                <div class="form-group">
                                    <label>Password</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="possword" class="form-control" name="stu_password" required placeholder="Student Password">
                                </div>
                            </td>

                        </tr>  
                        <tr>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="possword" class="form-control" name="conf_password" required placeholder="Student Phone Number">
                                </div>
                            </td>

                            <td width='25%'>
                                <div class="form-group">
                                    <label>Photo</label>
                                </div>
                            </td>
                            <td width='25%'><div class="form-group">
                                    <input type="file" class="form-control" name="stu_photo" required >
                                </div>
                                <div style="width:152px; height:190px; background:#fff; padding: 3px; border-radius:2px;">
                                    <img id="blah" src="{{asset('public/')}}/img/default.png" height="190px" width="152px" />
                                </div>  
                            </td>


                        </tr>

                        <tr>
                            <td width='25%'>
                                <div class="form-group">
                                    <label>Save and Go to Next Step</label>
                                </div>
                            </td>
                            <td width='25%'>
                                <div class="form-group">
                                    <input type="submit" name="submit" id="mySubmit" value="Submit" class="btn btn-primary btn-large" style='width:100%; height:50px'>  
                                </div>
                            </td>

                        </tr>

                    </table>



                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        
        
        
<script type="text/javascript">
    
    
           function email_check(given_email){
            
                        $.ajax({
                            
                              type:"POST",
                               url:'{{URL::to("/email/check/save")}}',
                              data:{
                                      email:given_email,
                                       _token:$('#token_si').val()
                                   },
                                   
                                    datatype:'html',
               
                             success:function(response)
                                    {
                                       console.log(response);
                                        result = response; 
                                          
                                        
                                        if(result == 'This Email Already Exists'){
                                              $('#success').html(result);
                                            document.getElementById("mySubmit").disabled=true;
                                        }else{
                                             document.getElementById("mySubmit").disabled=false;
                                               $('#success').html(result);
                                        }
                                        
                                   
                                    }


               
                        });  
          
          
          
          
          
          
          
                          
                      }
</script>








        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    </body>
</html>