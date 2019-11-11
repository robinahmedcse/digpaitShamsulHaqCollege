<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        
        <?php 
                $checkContent=Session::get('admin_s_con');
                
                
                if($checkContent == 'Content'){

        ?>
        
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> ড্যাশবোর্ড <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{URL::to('/wp-admin/supper/master/dashboard')}}">ড্যাশবোর্ড </a></li>

                </ul>
            </li>

       
			
		<li><a><i class="fa fa-edit"></i>আমাদের কথা <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{URL::to('/wp-admin/supper/master/my/word/create')}}">আমাদের কথা সংযুক্ত করুন</a></li>
                    <li><a href="{{URL::to('/wp-admin/supper/master/my/word/manage')}}">আমাদের কথা তথ্য দেখুন</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-edit"></i> কৃতী শিক্ষার্থীদের তথ্য <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{URL::to('/wp-admin/supper/master/my/student/achive/create')}}"> শিক্ষার্থীদের তথ্য সংযুক্ত  করুন</a></li>
                    <li><a href="{{URL::to('/wp-admin/supper/master/my/student/achive/manage')}}">শিক্ষার্থীদের সকল তথ্য দেখুন</a></li>
					<hr>
					<li><a href="{{URL::to('/wp-admin/supper/master/my/student/achive/photo/create')}}"> শিক্ষার্থীদের ছবি সংযুক্ত  করুন</a></li>
                    <li><a href="{{URL::to('/wp-admin/supper/master/my/student/achive/photo/manage')}}">শিক্ষার্থীদের ছবি  দেখুন</a></li>
					
                </ul>
            </li>




  
               <li><a><i class="fa fa-edit"></i> প্রাক্তন প্রতিষ্ঠান প্রধানদের তথ্যাবলী <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                 <li><a href="{{URL::to('/wp-admin/supper/master/x/head/info/create')}}">প্রতিষ্ঠান প্রধানদের তথ্যাবলী সংযুক্ত করুন</a></li>
                    <li><a href="{{URL::to('/wp-admin/supper/masterx/head/info/manage')}}">প্রতিষ্ঠান প্রধানদের তথ্যাবলী দেখুন</a></li>
              </ul>
            </li>
			
			
			
			
			    <li><a><i class="fa fa-edit"></i> পাবলিক পরীক্ষার ফলাফল<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{URL::to('/wp-admin/supper/master/')}}"> পরীক্ষার ফলাফল সংযুক্ত  করুন</a></li>
                    <li><a href="{{URL::to('/wp-admin/supper/master/')}}">পরীক্ষার ফলাফলের সকল তথ্য দেখুন</a></li>
					<hr>
 
					<li><a href="{{URL::to('/wp-admin/supper/master/')}}">পরীক্ষার ফলাফল সংযুক্ত  করুন(গ্রেডিং)</a></li>
                    <li><a href="{{URL::to('/wp-admin/supper/master/')}}">পরীক্ষার ফলাফলের সকল তথ্য দেখুন(গ্রেডিং)</a></li>
					
                </ul>
            </li>

			
			
			
			
			
			
			
	 
        </ul>
        
        
        
        
                <?php } elseif($checkContent == 'Office'){?>
        
                <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> ড্যাশবোর্ড <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{URL::to('/wp-admin/supper/master/dashboard')}}">ড্যাশবোর্ড </a></li>

                </ul>
            </li>

       
	 



  
              
        </ul>
         <?php }  ?>
    </div>

<!--
    <div class="menu_section">
                     <h3>Live On</h3>
                        <ul class="nav side-menu">
                          <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="e_commerce.html">E-commerce</a></li>
                              <li><a href="projects.html">Projects</a></li>
                              <li><a href="project_detail.html">Project Detail</a></li>
                              <li><a href="contacts.html">Contacts</a></li>
                              <li><a href="profile.html">Profile</a></li>
                            </ul>
                          </li>
                          <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="page_403.html">403 Error</a></li>
                              <li><a href="page_404.html">404 Error</a></li>
                              <li><a href="page_500.html">500 Error</a></li>
                              <li><a href="plain_page.html">Plain Page</a></li>
                              <li><a href="login.html">Login Page</a></li>
                              <li><a href="pricing_tables.html">Pricing Tables</a></li>
                            </ul>
                          </li>
                          <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="#level1_1">Level One</a>
                                <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                  <ul class="nav child_menu">
                                    <li class="sub_menu"><a href="level2.html">Level Two</a>
                                    </li>
                                    <li><a href="#level2_1">Level Two</a>
                                    </li>
                                    <li><a href="#level2_2">Level Two</a>
                                    </li>
                                  </ul>
                                </li>
                                <li><a href="#level1_2">Level One</a>
                                </li>
                            </ul>
                          </li>                  
                          <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                        </ul>
    </div>-->

</div>