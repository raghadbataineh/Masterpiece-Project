@extends('website_layouts.master')

@section('title','')


@section('css')
@endsection



@section('content')


          
          <!-- blog section start -->
          <div class="blog_section">
             <div class="container">
                <div class="row">
                   <div class="col-sm-12">
                      <h1 class="blog_taital">McDonald's</h1>
                   </div>
                </div>
             </div>
          </div>
          <div class="blog_section_2 layout_padding">
             <div class="container">
                <div class="row">
                   <div class="col-md-6">
                      <div class="blog_img"><img src="../assets/img/Mc.png"></div>
                      <div class="main_img">
                        <img class="sub_img" src="../assets/img/mc1.jpg" alt="">
                        <img class="sub_img" src="../assets/img/mc2.jpg" alt="">
                        <img class="sub_img" src="../assets/img/mc3.jpg" alt="">
                      </div>
                   </div>
                   
                   <div class="col-md-6">
                      <div class="blog_taital_main">
                         <!-- <h1 class="blog_text">This Week going</h1> -->
                         <p class="lorem_text">
                           McDonald's was founded in 1940, is one of the largest and most recognized fast-food chains in the world.
                           The McDonald's menu includes a range of items, such as hamburgers (like the iconic Big Mac), cheeseburgers, chicken sandwiches, French fries, salads, breakfast items, milkshakes, soft drinks, and more. The menu may vary slightly based on regional preferences.
                         </p> 
                           <br> <br>                        
                         <div class="text">
                           <p>Category : <a href="../html/categories.html">Food</a> </p>
                           <p>Floor : <a href="../html/directory.html">First Floor</a></p>
                           <p>Shop Number : 12 </p>
                           <p>Phone Number : 0790801566</p> 
                         </div>
                         <div class="readmore_btn"><a href="{{ route ('ordermenue') }}">Order Menu</a></div>
                      </div>
                   </div>
                  
               
                </div>
             </div>
          </div>
          <!-- blog section end -->
        
       </div>
    </div>
   
    
   
 @endsection

 @section('scripts')
 
 @endsection