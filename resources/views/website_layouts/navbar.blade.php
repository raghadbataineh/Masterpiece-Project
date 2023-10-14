   <!-- header section start -->
   <div class="container-fluid">
    <div class="header_section">
       <div class="container">
          {{-- <nav class="navbar navbar-light bg-light justify-content-between">
             <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            =

             </div>
             <form class="form-inline ">
                <div class="login_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +01 1234567890</span></a></div>
             </form>
             <a class="logo" href="index.html"><img src="{{ asset('images/logo.png') }}" alt="Logo">
             </a>
             
             <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
             <div class="login_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : Demo@gmail.com</span></a></div>
             <div class="dropdown">
               <button type="button" class="btn btn-primary" data-toggle="dropdown">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span class="badge badge-pill badge-danger">1</span>
               </button>
               
             </div>
          </nav> --}}
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> --}}
            <a class="navbar-brand" href="#">Navbar</a>
          
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
              
               <div class="d-flex align-items-center">
                  <!-- Icon -->
                  <button type="button" class="btn btn-primary" data-toggle="dropdown">
                     <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span class="badge badge-pill badge-danger">1</span>
                  </button>
            
                  <!-- Notifications -->
                  <div class="dropdown">
                    <a
                      class="text-reset me-3 dropdown-toggle hidden-arrow"
                      href="#"
                      id="navbarDropdownMenuLink"
                      role="button"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <i class="fa fa-bell"></i>
                      <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul
                      class="dropdown-menu dropdown-menu-end"
                      aria-labelledby="navbarDropdownMenuLink"
                    >
                      <li>
                        <a class="dropdown-item" href="#">Some news</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Another news</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </li>
                    </ul>
                  </div>
                  <!-- Avatar -->
                  <div class="dropdown">
                    <a
                      class="dropdown-toggle d-flex align-items-center hidden-arrow"
                      href="#"
                      id="navbarDropdownMenuAvatar"
                      role="button"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <img
                        {{-- src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" --}}
                        class="rounded-circle"
                        height="25"
                        alt="Black and White Portrait of a Man"
                        loading="lazy"
                      />
                    </a>
                    <ul
                      class="dropdown-menu dropdown-menu-end"
                      aria-labelledby="navbarDropdownMenuAvatar"
                    >
                      <li>
                        <a class="dropdown-item" href="#">My profile</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Settings</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Logout</a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
                <li>
                  @if (Auth::check())
                  <div style="display: flex; align-items: center;">
                      <a href="{{ route('profile.edit', [Auth::user()]) }}" style="margin-right: 10px;" class="nav-item nav-link nav-sticky profilee ">{{ Auth::user()->name }}</a>
                      <form method="POST" class="dropdown-item" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                          {{ __('Log Out') }}

                        </a>
                      </form>
                  </div>


                  @else
                      {{-- <a href="/login" class="nav-item nav-link nav-sticky">Login</a> --}}
                      <a href="/login"><button class="button-nav">Login</button></a>
                      <a href="/register"><button class="button-nav">Register</button></a>
                      {{-- <a href="/register" class="nav-item nav-link nav-sticky">Register</a> --}}
                  @endif
              </li>
              </form>
            </div>
          </nav>
       </div>
          
       
    </div>
 </div>
 
 <!-- header section end -->
 <!-- layout main section start -->
 <div class="container-fluid">
    <div class="layout_main">
       <!-- banner section start -->
       <div class="banner_section">
          <div class="container">
             <div class="menu_main">
                <div class="custome_menu">
                  <ul>
                                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                 <li><a href="{{ route('directory') }}">Directory</a></li>
                                 <li><a href="{{ route('categories') }}">Categories</a></li>
                                 <li><a href="{{ route('about') }}">About</a></li>
                                 <li><a href="{{ route('contact') }}">Contacts</a></li>

                  </ul>
                </div>
                <div class="login_menu">
                   <ul>
                      <li><a href="#">Login</a></li>
                      {{-- <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li> --}}
                   </ul>
                </div>
             </div>
          </div>
       </div>