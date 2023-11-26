
@extends('website_layouts.master')

@section('title','')


@section('css')
@endsection



@section('content')



          <!-- about us section start -->

          <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="service_taital">About Us</h1>
              </div>
            </div>
            

            <br>

            <div class="aboutus">
               <div class="text_about">
                  <h2> Welcome to Virtual Eye Your Ultimate Destination for Virtual Shopping and Directory Exploration!</h2>
                     <br>
                     <ol>
                        <li> Virtual Shopping: Experience the thrill of shopping from the comfort of your own space. Our virtual mall offers a seamless and immersive shopping experience where you can browse through a diverse range of products from renowned brands. Interact with lifelike storefronts, explore product details, and make purchases effortlessly.</li>
                        <li>  Directory Exploration: Discover a world of possibilities with our directory mall. Explore an array of categories, each filled with curated listings of businesses, services, and experiences. Whether you're looking for a cozy café, a top-notch spa, or expert advice from professionals, our directory has you covered.</li>
                     </ol>
                     <br>
                     
                  <hr style="background-color: white">
                  <hr style="background-color: white">
               </div>

               
               <div class="image_aboutus">
                  <img src="../assets/img/Online ads-amico.png" alt="">

               </div>
            </div>

            <div class="service_section layout_padding">
               <div class="container">
                   <div class="row">
                       <div class="col-sm-12">
                           <h1>Our Vision</h1>
                       </div>
                   </div>
                   <div class="service_section_2">
                       <div class="row">
                           <div class="col-12">
                              <video width="100%" height="auto" controls autoplay muted >
                                  <!-- Provide multiple sources for compatibility -->
                                  <source src="./images/Virtual Shopping Mall.mp4" type="video/mp4">
                                  {{-- <source src="video.webm" type="video/webm"> --}}
                                  <!-- Add a fallback message for browsers that do not support the video element -->
                                  Your browser does not support the video tag.
                              </video>
                           </div>
      
                       </div>
                   </div>
               </div>
           </div>
          </div>
          <!-- about us section End -->
       
       </div>
    </div>
    <!-- layout main section end -->
    
    
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