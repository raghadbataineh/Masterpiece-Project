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
               <nav class="navbar navbar-expand-lg  ">

                   <div class="navleft">
                       <img src="{{ asset('./images/logo1-removebg-preview.png') }}" alt="Logo" style="width: 50px">
                       <div class="navbar-line"></div>

                       <a class="navbar-brand" href="#" style="color: white">Virtual Eye</a>
                   </div>

                   <div class="collapse navbar-collapse navright" id="navbarTogglerDemo03">

                       <form class="form-inline my-2 my-lg-0">

                           <div class="d-flex align-items-center">
                               <!-- Icon -->

                               {{-- <a href="{{ route('cartweb') }}">
                                   <button type="button" class="btn cartbutton" data-toggle="dropdown">
                                       <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span
                                           class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                   </button>
                               </a> --}}
                               <button type="button" class="btn cartbutton" data-toggle="dropdown" id="cartButton">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            </button>
                               <div class="dropdown-menu">
                                   <div class="row total-header-section">
                                       {{-- @php $total = 0 @endphp
                                       @foreach ((array) session('cart') as $id => $details)
                                           @php $total += $details['price'] * $details['quantity'] @endphp
                                       @endforeach
                                       <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                           <p>Total: <span class="text-info">$
                                                   {{ $total }}</span></p>
                                       </div>
                                   </div>
                                   @if (session('cart'))
                                       @foreach (session('cart') as $id => $details)
                                           <div class="row cart-detail">
                                               <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                   <img src="{{ asset('img') }}/{{ $details['image'] }}" />
                                               </div>
                                               <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                   <p>{{ $details['product_name'] }}
                                                   </p>
                                                   <span class="price text-info">
                                                       ${{ $details['price'] }}</span> <span class="count">
                                                       Quantity:{{ $details['quantity'] }}</span>
                                               </div>
                                           </div>
                                       @endforeach
                                   @endif --}}
                                       <div class="row">
                                           <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                               {{-- <a href="{{ route('addcart',['idcart',$id] ) }}" class="btn btn-primary btn-block">View all</a> --}}
                                           </div>
                                       </div>
                                   </div>
                                   @if (session('success'))
                                       <div class="alert alert-success">
                                           {{ session('success') }}

                                       </div>
                                   @endif
                                   <!-- Notifications -->

                                   <!-- Avatar -->

                               </div>
                               <li>
                                   <div class="vollenter-btn">
                                       @if (Route::has('login'))
                                           @auth
                                               <a href="{{ url('/profile') }}"
                                                   class="theme-btn-s2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                                   style="margin: 0 10px; color:white;">Profile</a>


                                               {{-- <a class="btn btn-primary" style="margin-right: 10px;"
                                               href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> --}}


                                               <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                   style="display: none;">
                                                   @csrf

                                                   <a class="btn cartbutton" style="margin-right: 10px;"
                                                       href="{{ route('logout') }}">
                                                       Logout</a>

                                                   {{-- <a href="{{ route('logout')}}">Logout</a> --}}

                                               </form>
                                           @else
                                               <a class="btn cartbutton" href="{{ route('login') }}">Login</a>
                                               @if (Route::has('register'))
                                                   <a class="btn cartbutton" href="{{ route('register') }}">Register</a>
                                               @endif
                                           @endauth
                                       @endif
                                   </div>


                               </li>
                            </div>
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
                               <li><a href="{{ route('joinus.index') }}">Join Us</a></li>
                               <li><a href="{{ route('about') }}">About</a></li>
                               <li><a href="{{ route('contact.index') }}">Contacts</a></li>

                           </ul>
                       </div>
                       
                   </div>
               </div>
           </div>
