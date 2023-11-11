@extends('website_layouts.master')

@section('title', '')


@section('css')
@endsection


@section('content')



    <!-- layout main section start -->
    <div class="container-fluid">
        <div class="layout_main">
            <!-- banner section start -->
            <div class="banner_section">


                <div class="container">
                    <div class="dark_mode">

                    </div>
                </div>
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 mt-4 d-flex justify-content-center">

                                        <img src="./img-1.png" alt="slider" style="width: 80%">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 mt-4 d-flex justify-content-center">

                                        <img src="./blackfriday.png" alt="slider" style="width: 100%">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="banner_taital">Find The Best Restaurants Cafes And Bars in </h1>
                                        <h1 class="banner_text">YOUR CITY</h1>
                                        <div class="banner_main">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">All Category
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                            <div class="main">
                                                <!-- Another variation with a button -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Search this blog">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary" type="button"
                                                            style="background-color: #ffffff; border-color:#ffffff ">
                                                            <i class="fa fa-search" style="color: #191919;"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ordernow_bt"><a href="#">Order Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <!-- banner section end -->
            
            
        </div>
        <!-- service section start -->
        <div class="service_section layout_padding">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12">
                     <h1 class="service_taital">How it works</h1>
                 </div>
             </div>
             <div class="service_section_2">
                 <div class="row">
                     <div class="col-12">
                         <ul class="selling-process-list">
                             <li>
                                 <div class="icon"><img src="./images/icon1.svg" alt=""></div>
                                 <div class="content">
                                     <h5>Shop</h5>
                                 </div>
                             </li>
                             <li class="selling-sep"><img src="./images/icon5.svg" alt=""></li>
                             <li>
                                <div class="icon"><img src="./images/icon2.svg" alt=""></div>
                                <div class="content">
                                     <h5>Add to cart</h5>
                                 </div>
                             </li>
                             <li class="selling-sep"><img src="./images/icon5.svg" alt=""></li>
                            
                             <li>
                                <div class="icon"><img src="./images/icon3.svg" alt=""></div>
                                <div class="content">
                                     <h5>Payment </h5>
                                 </div>
                             </li>
                             <li class="selling-sep"><img src="./images/icon5.svg" alt=""></li>
                             <li>
                                <div class="icon"><img src="./images/icon4.svg" alt=""></div>
                                <div class="content">
                                     <h5> Shipped</h5>
                                 </div>
                             </li>
                         </ul>
                     </div>

                 </div>
             </div>
         </div>
     </div>
        <div class="service_section layout_padding">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12">
                     <h1 class="service_taital">Shop Catogries</h1>
                 </div>
             </div>
             <div class="service_section_2">
                 <div class="row">
                     @foreach ($categories as $category)
                         <div class="col">
                             <div class="service_box">
                                 <div class="breakfast_img">

                                     {{-- <img src="{{ asset('path_to_your_category_image_directory/' . $category->image) }}"> --}}
                                     <img src="{{ url('/images/' . $category->image) }}" alt="">

                                 </div>
                             </div>
                             <h4 class="breakfast_text">{{ $category->name }}</h4>
                             <div class="seemore_bt"><a href="{{ route('category.show', $category->id) }}">See
                                     More</a></div>
                         </div>
                     @endforeach
                 </div>

                 
             </div>
         </div>
     </div>
        <!-- service section end -->
        <!-- blog section start -->
        <div class="blog_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="blog_taital">Entertainment In the mall</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog_section_2 layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog_img"><img src="../assets/img/bowling.PNG"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_taital_main">
                            <h1 class="blog_text">Bowling & Skating Center </h1>
                            <p class="lorem_text"> The staff at Jordan Bowling Center considers each customer the most
                                important person in the center. We realize that customer services, is the secret to our
                                success. We look forward to each and every customer that walks through our door.
                                With 6 lanes available for bowling enjoyment, and rotter skating ring , wide choices of
                                beverages and a lounge that provides music, your visit should be a memorable one .</p>
                            <div class="readmore_btn"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_img"><img src="../assets/img/gym.PNG"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_taital_main">
                            <h1 class="blog_text">Amyal Gym </h1>
                            <p class="lorem_text">Introducing, the bench mark of gyms in town, Amyal Gym - Mecca Mall.
                                More than 3000 square meters of the most exquisite machines and equipment in the world.
                                A generously equipped free-weight area, along-side the most superior body building machines
                                .</p>
                            <div class="readmore_btn"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_img"><img src="../assets/img/bricks.PNG"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_taital_main">
                            <h1 class="blog_text">Brick House </h1>
                            <p class="lorem_text">The perfect spot for your child!
                                Safe, enjoyable and original Lego playing area & pools.

                                You can have your kids play at 'Lego Play House' without even worrying! Lego Play House is
                                an entertainment venue for kids, they offer a safe play area supervised by their qualified
                                staff.</p>
                            <div class="readmore_btn"><a href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact section start -->
        <div class="contact_section layout_padding">
            <div class="container">
                <div class="contact_section_2">
                    <div class="row">

                    </div>
                    <!-- order section start -->
                    <div class="order_section">
                        <div class="order_taital_main">
                            <h1 class="order_taital">Order Best Product at time</h1>
                            <div class="order_bt"><a href="#">Order Now</a></div>
                        </div>
                    </div>
                    <!-- order section end -->
                </div>
            </div>
        </div>
        <!-- contact section end -->

    </div>
    </div>


@endsection

@section('scripts')
    <!-- Include Bootstrap JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#main_slider').carousel();
        });
    </script>

@endsection
