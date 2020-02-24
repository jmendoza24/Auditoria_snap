 <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark bg-gradient-x-grey-blue navbar-border navbar-brand-center">
    <div class="navbar-wrapper">      
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
           
          </ul>
          <ul class="nav navbar-nav float-right">
           

            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src=" {{ url('app-assets/images/portrait/small/avatar-s-1.png') }}" alt="avatar"><i></i></span>
                <span class="user-name">{{ Auth::user()->name }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                <a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a>
                <a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a>
                <a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{!! url('/logout') !!}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ft-power"></i> Logout</a>                
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>



 <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow menu-border"
  role="navigation" data-menu="menu-wrapper">
    <!-- Horizontal menu content-->
    <div class="navbar-container main-menu-content" data-menu="menu-container">
      <!-- include ../../../includes/mixins-->
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
               @include('layouts.menu')
      </ul>
    </div>
    <!-- /horizontal menu content-->
  </div> 
  