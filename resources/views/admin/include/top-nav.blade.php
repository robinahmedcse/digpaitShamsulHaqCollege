   <div class="top_nav">
          <div class="nav_menu">
            <nav>
              

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('public/backEnds/')}}/images//img.jpg" alt="">{{Session::get('admin_s_username')}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
              
                    <li><a href="{{url::to('/collage/admin/master/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

       
              </ul>
            </nav>
          </div>
        </div>