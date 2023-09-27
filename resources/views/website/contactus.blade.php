@extends('website_layouts.master')

@section('title','')


@section('css')
@endsection



@section('content')


    <!-- header section end -->
    <!-- layout main section start -->
    <div class="container-fluid">
       <div class="layout_main">
    <!-- layout main section start -->
    <div class="container-fluid">
      
          <!-- banner section end -->
          <!-- contact section start -->
          <div class="contact_section">
             <div class="container">
                <div class="contact_section_2">
                   <div class="row">
                      <div class="col-md-12">
                         <h1 class="contact_taital">Get In Touch</h1>
                         <form action="">
                            <div class="mail_section_1">
                               <input type="text" class="mail_text" placeholder="Name" name="Name">
                               <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                               <input type="text" class="mail_text" placeholder="Email" name="Email">
                               <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                               <div class="send_bt"><a href="#">SEND</a></div>
                            </div>
                         </form>
                      </div>
                   </div>
                   <!-- order section start -->
                   <div class="order_section">
                      <div class="order_taital_main">
                         <h1 class="order_taital">Order Best food at time</h1>
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
    <!-- layout main section end -->
    

@endsection

@section('scripts')
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
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