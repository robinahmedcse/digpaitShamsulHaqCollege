<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        
        <?php 
                $role=Session::get('admin_role');
                
                
                if($role == 'admin'){

        ?>
        
        <ul class="nav side-menu">
            
            
            <li><a><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{URL::to('/collage/admin/master/index')}}">Dashboard </a></li>

                </ul>
            </li>

       
			
		<li><a><i class="fa fa-edit"></i>আমাদের কথা <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{URL::to('/wp-admin/supper/master/my/word/create')}}">আমাদের কথা সংযুক্ত করুন</a></li>
                    <li><a href="{{URL::to('/wp-admin/supper/master/my/word/manage')}}">আমাদের কথা তথ্য দেখুন</a></li>
                </ul>
            </li>

	
	 
        </ul>
        
        
        
        
                <?php } elseif($role == 'acOfficer'){?>
        
                <ul class="nav side-menu">
                    
                    
         <li><a><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{URL::to('/collage/admin/master/index')}}">Dashboard </a></li>

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