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
                                   <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span
                                       class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                               </button>
                               <div class="dropdown-menu">
                                   <div class="row total-header-section">
                                       @php $total = 0 @endphp
                                       @foreach ((array) session('cart') as $id => $details)
                                           @php $total += $details['price'] * $details['quantity'] @endphp
                                       @endforeach
                                       <div
                                           class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                           <p>Total: <span class="text-info">$
                                                   {{ $total }}</span></p>
                                           </div>
                                       </div>
                                   @if (session('cart'))
                                       @foreach (session('cart') as $id => $details)
                                           <div class="row cart-detail">
                                               <div
                                                   class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                   <img
                                                       src="{{ asset('img') }}/{{ $details['photo'] }}" />
                                                   </div>
                                               <div
                                                   class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                   <p>{{ $details['product_name'] }}
                                                   </p>
                                                   <span class="price text-info">
                                                       ${{ $details['price'] }}</span> <span class="count">
                                                       Quantity:{{ $details['quantity'] }}</span>
                                                   </div>
                                               </div>
                                       @endforeach
                                       @endif
                                   <div class="row">
                                       <div
                                           class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                           {{--                             <a href="{{ route('addcart',['idcart',$id] ) }}" class="btn btn-primary btn-block">View all</a> --}}
                                           </div>
                                       </div>
                                   </div>
                               @if (session('success'))
                                   <div class="alert alert-success">
                                       {{ session('success') }}

                                   </div>
                               @endif
                               <!-- Notifications -->
                               <div class="dropdown">
                                   <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#"
                                       id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                       aria-expanded="false">
                                       <i class="fa fa-bell"></i>
                                       <span class="badge rounded-pill badge-notification bg-danger">1</span>
                                   </a>
                                   <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
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

                           </div>
                           <li>
                               <div class="vollenter-btn">
                                   @if (Route::has('login'))
                                       @auth
                                           <a href="{{ url('/profile') }}"
                                               class="theme-btn-s2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                               style="margin: 0 10px">Profile</a>
                                           <a class="btn btn-primary" style="margin-right: 10px;"
                                               href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                           <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                               style="display: none;">
                                               @csrf

                                           </form>
                                       @else
                                           <a class="theme-btn-s2" href="{{ route('login') }}">Login</a>
                                           @if (Route::has('register'))
                                               <a class="theme-btn-s2" href="{{ route('register') }}">Register</a>
                                           @endif
                                       @endauth
                                   @endif
                               </div>
                               {{--                 
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
                      <a href="/login"><button class="button-nav">Login</button></a>
                      <a href="/signup"><button class="button-nav">Register</button></a>
                  @endif
          --}}

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
