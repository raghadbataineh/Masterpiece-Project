@extends('website_layouts.master')

@section('title','')


@section('css')
@endsection



@section('content')




          <!-- Test Section -->
          <div class="container-fluid">
            <div class="location">
              
               <div class="left">
                  @php
                  $i=1;
                  @endphp
                  @foreach ($floors as $floor )
                     
                  <div class="section1" class="floor_list">
                     <h1>{{$floor->floor_name}}</h1>
                     {{-- <img src="../assets/img/groundfloor.PNG" alt=""> --}}
                     <img src="{{ url('/images/' . $floor->floor_image) }}" alt="" >

                     <ol style="color: white;" class="floor_list" >

                        @foreach ($floor->shops as $shop)
                       {{-- <li style="list-style-type: decimal">{{$shop->name}}</li> --}}
                       <a href="{{ route ('shop.show', $shop->id)  }}"> <li style="list-style-type: decimal">{{$shop->name}}</li>
                       </a>
                       @php
                       $i++;
                   @endphp
                      @endforeach                        
                     </ol>

                  </div>
                  @endforeach

                  {{-- <div id="section2" class="section2">
                     <h4>
                        first floor
                     </h4>
                     <img src="../assets/img/firstfloor.PNG" alt="">
                  </div>
                  <div class="section3">
                     <h4>seconed floor</h4>
                     <img src="../assets/img/seconedfloor.PNG" alt="">
                  </div>
                  <div class="section4">
                     <h4>third floor</h4>
                     <img src="../assets/img/thirdfloor.PNG" alt="">
                  </div> --}}
               </div>

               <div class="right_section">
                  <ul>
                     <li ><svg id="sectionButton" xmlns="http://www.w3.org/2000/svg" height="4em" viewBox="0 0 640 512"><style>svg{fill:#ff9001}</style><path d="M0 488V171.3c0-26.2 15.9-49.7 40.2-59.4L308.1 4.8c7.6-3.1 16.1-3.1 23.8 0L599.8 111.9c24.3 9.7 40.2 33.3 40.2 59.4V488c0 13.3-10.7 24-24 24H568c-13.3 0-24-10.7-24-24V224c0-17.7-14.3-32-32-32H128c-17.7 0-32 14.3-32 32V488c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zm488 24l-336 0c-13.3 0-24-10.7-24-24V432H512l0 56c0 13.3-10.7 24-24 24zM128 400V336H512v64H128zm0-96V224H512l0 80H128z"/></svg><span class="floor">Ground floor</span></li>
                     <li><svg id="sectionButton1" xmlns="http://www.w3.org/2000/svg" height="4em" viewBox="0 0 640 512"><style>svg{fill:#ff9001}</style><path d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z"/></svg><span class="floor">First floor</span></li>
                     
                     <li><svg id="sectionButton2" xmlns="http://www.w3.org/2000/svg" height="4em" viewBox="0 0 448 512"><style>svg{fill:#ff9001}</style><path d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/></svg><span class="floor">Seconed floor</span></li>
                     <li><svg id="sectionButton3" xmlns="http://www.w3.org/2000/svg" height="4em" viewBox="0 0 640 512"><style>svg{fill:#ff9001}</style><path d="M576 64H64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H184.4c24.2 0 46.4-13.7 57.2-35.4l32-64c8.8-17.5 26.7-28.6 46.3-28.6s37.5 11.1 46.3 28.6l32 64c10.8 21.7 33 35.4 57.2 35.4H576c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64zM96 240a64 64 0 1 1 128 0A64 64 0 1 1 96 240zm384-64a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg><span class="floor">Third floor</span></li>
                  </ul>
               </div>
               
            </div>
          </div>
          <!-- end test section -->
       
        
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

   // Get references to the button and sections
const button = document.getElementById('sectionButton');
const button_1 = document.getElementById('sectionButton1');
const button_2 = document.getElementById('sectionButton2');
const section1 = document.getElementById('section1');
const section2 = document.getElementById('section2');
const section3 = document.getElementById('section3');

// Add a click event listener to the button
button.addEventListener('click', function() {
// Scroll to the top of the section2
section1.scrollIntoView({ behavior: 'smooth' }); // You can also use 'auto' instead of 'smooth'

});
button_1.addEventListener('click', function() {
// Scroll to the top of the section2
section2.scrollIntoView({ behavior: 'smooth' }); // You can also use 'auto' instead of 'smooth'


});
button_2.addEventListener('click', function() {
// Scroll to the top of the section2
section3.scrollIntoView({ behavior: 'smooth' }); // You can also use 'auto' instead of 'smooth'


});


</script> 

@endsection