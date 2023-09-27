   <!-- header section start -->
   <div class="container-fluid">
    <div class="header_section">
       <div class="container">
          <nav class="navbar navbar-light bg-light justify-content-between">
             <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                {{-- <a href="{{ route('home') }}">Home</a>

                <a href="{{ route('directory') }}">Directory</a>
                <a href="{{ route('categories') }}">Category</a>

                <a href="blog.html">Blog</a>
                <a href="shop.html">Shop</a>
                <a href="{{ route('about') }}">About</a>

                <a href="{{ route('contact') }}">Contacts</a> --}}

             </div>
             <form class="form-inline ">
                <div class="login_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +01 1234567890</span></a></div>
             </form>
             <a class="logo" href="index.html"><img src="{{ asset('images/logo.png') }}" alt="Logo">
             </a></a>
             <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
             <div class="login_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : Demo@gmail.com</span></a></div>
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
                      <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>