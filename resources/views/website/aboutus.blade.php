@extends('website_layouts.master')

@section('title', '')


@section('css')

<style>
   .gradient-box {
    border-radius: 10px;
    padding: 39px 45px 45px;
    position: relative;
    z-index: 3;
    max-width: 100%;
    display: inline-block;
    background: #590f87;
    background: -o-linear-gradient(45deg,#590f87 0,#ff0076 100%);
    background: linear-gradient(45deg,#590f87 0,#ff0076 100%);
}
.vertival_line{
    width: 4px;
    height: 15px;
    margin-top: 6px;
    margin-left: 4px;
    background-color: white;
}
p {
    margin: 0px;

}


</style>
@endsection



@section('content')



    <!-- about us section start -->

    <div class="container ">
        <div class="row" >
            <div class="col">
                <div class="vdo-btn-wrapper gradient-box" style="margin-top: 20px"> 
                        <h2 class="text-white">About Vertual mall</h2>
                        {{-- <h1 class="service_taital">About Us</h1> --}}

                    </a></div>
            </div>
        </div>


        <br>
        <section class="pt-120 pb-120 section-shape">
         <div class="container mt-60 mt-lg-0">
        <div class="aboutus pt-120 pb-120 ">
            <div class="text_about">
                <h2> Welcome to Virtual Eye Your Ultimate Destination for Virtual Shopping and Directory Exploration!</h2>
                <br>
                <ol>
                    <li> Virtual Shopping: Experience the thrill of shopping from the comfort of your own space. Our virtual
                        mall offers a seamless and immersive shopping experience where you can browse through a diverse
                        range of products from renowned brands. Interact with lifelike storefronts, explore product details,
                        and make purchases effortlessly.</li>
                    <li> Directory Exploration: Discover a world of possibilities with our directory mall. Explore an array
                        of categories, each filled with curated listings of businesses, services, and experiences. Whether
                        you're looking for a cozy café, a top-notch spa, or expert advice from professionals, our directory
                        has you covered.</li>
                </ol>
                <br>

                <hr style="background-color: white">
                <hr style="background-color: white">
            </div>


            <div class="image_aboutus">
                <img src="../assets/img/Online ads-amico.png" alt="">

            </div>
        </div>
        </div>

        </section>
      </div>


        <div class="service_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>How it Work</h1>
                    </div>
                </div>
                <div class="service_section_2">
                    {{-- The first row --}}
                    <div class="row">
                        <div class="col-5">
                           <img src="/images/example-9.png" alt="" width="70%">
                        </div>
                        <div class="col-2">
                            @php
                            $numberOfLines = 5; // Change this value based on the number of lines you want
                            @endphp
                        
                        @for ($i = 0; $i < $numberOfLines; $i++)
                            <div class="vertical_line">
                               |
                            </div>
                        @endfor
                        
                        <h4>step 1</h4>
                        
                        @for ($i = 0; $i < $numberOfLines; $i++)
                            <div class="vertical_line">
                                |
                            </div>
                        @endfor
                        </div>
                        <div class="col-5" >
                           <p style="margin-top: 20%">Shop from your favorite brands and restaurants!
                            Browse by collections, categories, or by brand. Customize your items and add them to your cart.</p>
                        </div>

                    </div>
                                        {{-- The seconed row --}}

                    <div class="row">
                        <div class="col-5" >
                            <p style="margin-top: 20%">Click on your cart to review and click Checkout.
                            </p>
                         </div>
                        <div class="col-2">
                            @php
                            $numberOfLines = 5; // Change this value based on the number of lines you want
                            @endphp
                        
                        @for ($i = 0; $i < $numberOfLines; $i++)
                            <div class="vertical_line">
                               |
                            </div>
                        @endfor
                        
                        <p>step 2</p>
                        
                        @for ($i = 0; $i < $numberOfLines; $i++)
                            <div class="vertical_line">
                                |
                            </div>
                        @endfor
                        </div>
                       
                        <div class="col-5">
                            <img src="/images/phone_object (1).png" alt="" width="50%" height="20%">
                         </div>

                    </div>
                                        {{-- The third row --}}


                    <div class="row">
                        <div class="col-5">
                           <img src="/images/cart.png" alt="" width="50%">
                        </div>
                        <div class="col-2">
                            @php
                            $numberOfLines = 5; 
                            @endphp
                        
                        @for ($i = 0; $i < $numberOfLines; $i++)
                            <div class="vertical_line">
                               |
                            </div>
                        @endfor
                        
                        <p>step 3</p>
                        
                        @for ($i = 0; $i < $numberOfLines; $i++)
                            <div class="vertical_line">
                                |
                            </div>
                        @endfor
                        </div>
                        <div class="col-5" >
                           <p style="margin-top: 20%">Shop from your favorite brands and restaurants!
                            Browse by collections, categories, or by brand. Customize your items and add them to your cart.</p>
                        </div>

                    </div>
                                        {{-- The fourth row --}}

                    <div class="row">
                        <div class="col-5" >
                            <p style="margin-top: 20%">Select a payment method and apply any voucher codes you may have.
                                .</p>
                         </div>
                        <div class="col-2">
                            @php
                            $numberOfLines = 5; // Change this value based on the number of lines you want
                            @endphp
                        
                        @for ($i = 0; $i < $numberOfLines; $i++)
                            <div class="vertical_line">
                               |
                            </div>
                        @endfor
                        
                        <p>step 4</p>
                        
                        @for ($i = 0; $i < $numberOfLines; $i++)
                            <div class="vertical_line">
                                |
                            </div>
                        @endfor
                        </div>
                        
                        <div class="col-5">
                            <img src="/images/card.png" alt="" width="50%">
                         </div>

                    </div>
                                        {{-- The fifth row --}}

                    <div class="row">
                        <div class="col-5">
                           <img src="/images/motorcycle.png" alt="" width="70%">
                        </div>
                        <div class="col-2">
                            @php
                            $numberOfLines = 5; // Change this value based on the number of lines you want
                            @endphp
                        
                        @for ($i = 0; $i < $numberOfLines; $i++)
                            <div class="vertical_line">
                               |
                            </div>
                        @endfor
                        
                        <p>step 5</p>
                        
                        @for ($i = 0; $i < $numberOfLines; $i++)
                            <div class="vertical_line">
                                |
                            </div>
                        @endfor
                        </div>
                        <div class="col-5" >
                           <p style="margin-top: 20%">Track your Order Status for delivery or in-store pick up.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <!-- about us section End -->

   


@endsection

@section('scripts')
    <!-- Javascript files-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery-3.0.0.min.js"></script>
    <script src="../assets/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <!-- javascript -->
    <script src="../assets/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
@endsection
