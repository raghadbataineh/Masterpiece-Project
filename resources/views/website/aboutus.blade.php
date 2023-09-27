
@extends('website_layouts.master')

@section('title','')


@section('css')
@endsection



@section('content')



          <!-- about us section start -->
          <div class="container">
            <h1>About Us</h1>

            <div class="aboutus">
               <div class="text_about">
                  <h2> Welcome to [Virtual Eye] – Your Ultimate Destination for Virtual Shopping and Directory Exploration!</h2>
                     <br>
                     <ol>
                        <li> Virtual Shopping: Experience the thrill of shopping from the comfort of your own space. Our virtual mall offers a seamless and immersive shopping experience where you can browse through a diverse range of products from renowned brands. Interact with lifelike storefronts, explore product details, and make purchases effortlessly.</li>
                        <li>  Directory Exploration: Discover a world of possibilities with our directory mall. Explore an array of categories, each filled with curated listings of businesses, services, and experiences. Whether you're looking for a cozy café, a top-notch spa, or expert advice from professionals, our directory has you covered.</li>
                        <li> Community and Events: [Virtual and Directory Mall Name] is not just a platform; it's a community. Engage with fellow shoppers, share your thoughts, and stay updated on the latest trends. Plus, we host exciting virtual events, workshops, and exhibitions that bring people together and celebrate the joy of exploration.</li>
                     </ol>
                     <br>
                     
                     <h3>  Our Mission:
                     
                        At Verual Eye, our mission is to revolutionize the way you shop and explore. We believe in harnessing technology to create a dynamic and interactive experience that bridges the gap between online convenience and offline charm. Our commitment to innovation, quality, and customer satisfaction drives us to continually enhance your virtual shopping and exploration journey.</h3>
               </div>
               <div class="image_aboutus">
                  <img src="../assets/img/Online ads-amico.png" alt="">

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