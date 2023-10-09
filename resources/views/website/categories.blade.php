@extends('website_layouts.master')

@section('title','')


@section('css')
@endsection



@section('content')


 
          <!-- banner section end -->
          <!-- blog section start -->
          <div class="blog_section">
             <div class="container">
                <div class="row">
                   <div class="col-sm-12">
                      {{-- <h1 class="blog_taital">Resturents</h1> --}}
                      <h1 class="blog_taital">{{$category->name}}</h1>
                   </div>
                </div>
             </div>
          </div>
          <div class="blog_section_2 layout_padding">
             <div class="container">
                <div class="row">
                  {{-- @foreach ($categories as $category) --}}
                  @foreach ($shops as $shop)


                   <div class="col-md-3">
                      <div class="blog_taital_main">
                        {{-- <img src="../assets/img/crispy-chicken-logo.png" alt=""> --}}
                        <img class="cat_img" src="{{ url('/images/' . $shop->image) }}" alt="" width="150px">

                         {{-- <h1 class="blog_text">{{$category->shop->name}}</h1> --}}
                         <h1 class="blog_text">{{ $shop->name }}</h1>

                         {{-- <div class="readmore_btn"><a href="{{ route ('singlepage') }}">Read More</a></div> --}}
                         <div class="readmore_btn"><a href="{{ route ('shop.show', $shop->id)  }}">Read More</a></div>

                      </div>
                   </div>
                   @endforeach

                   
                   {{-- <div class="col-md-3">
                      <div class="blog_taital_main">
                        <img src="../assets/img/lebnani-snack-1.png" alt="">
                         <h1 class="blog_text">Lebnani Snack</h1>
                         <div class="readmore_btn"><a href="single page.html">Read More</a></div>
                      </div>
                   </div>
                   
                   <div class="col-md-3">
                      <div class="blog_taital_main">
                        <img src="../assets/img/ocean-1.png" alt="">
                         <h1 class="blog_text">Ocean</h1>
                         <div class="readmore_btn"><a href="single page.html">Read More</a></div>
                      </div>
                   </div>
                   <div class="col-md-3">
                      <div class="blog_taital_main">
                        <img src="../assets/img/subway-1.png" alt="">
                         <h1 class="blog_text">SubWay</h1>
                         <div class="readmore_btn"><a href="single page.html">Read More</a></div>
                      </div>
                   </div>
                </div>
                <div class="row">
                   
                   <div class="col-md-3">
                      <div class="blog_taital_main">
                        <img src="../assets/img/tavada-tavuk-logo.png" alt="">
                         <h1 class="blog_text">Tavada Tavuk</h1>
                         <div class="readmore_btn"><a href="single page.html">Read More</a></div>
                      </div>
                   </div>
                   
                   <div class="col-md-3">
                      <div class="blog_taital_main">
                        <img src="../assets/img/mamas-tendars-1.png" alt="">
                         <h1 class="blog_text">Mama's Tendars</h1>
                         <div class="readmore_btn"><a href="single page.html">Read More</a></div>
                      </div>
                   </div>
                   
                   <div class="col-md-3">
                      <div class="blog_taital_main">
                        <img src="../assets/img/hardees-1.png" alt="">
                         <h1 class="blog_text">Hardees</h1>
                         <div class="readmore_btn"><a href="single page.html">Read More</a></div>
                      </div>
                   </div>
                   <div class="col-md-3">
                      <div class="blog_taital_main">
                        <img src="../assets/img/kfc-1.png" alt="">
                         <h1 class="blog_text">KFC</h1>
                         <div class="readmore_btn"><a href="single page.html">Read More</a></div>
                      </div>
                   </div>
                </div>
                <div class="row">
                   
                   <div class="col-md-3">
                      <div class="blog_taital_main">
                        <img src="../assets/img/mcdonalds-1.png" alt="">
                         <h1 class="blog_text">McDonald</h1>
                         <div class="readmore_btn"><a href="single page.html">Read More</a></div>
                      </div>
                   </div>
                   
                   <div class="col-md-3">
                      <div class="blog_taital_main">
                        <img src="../assets/img/sultan-1.png" alt="">
                         <h1 class="blog_text">Sultaan</h1>
                         <div class="readmore_btn"><a href="single page.html">Read More</a></div>
                      </div>
                   </div>
                   
                   <div class="col-md-3">
                      <div class="blog_taital_main">
                        <img src="../assets/img/periperi-1.png" alt="">
                         <h1 class="blog_text">Periperi</h1>
                         <div class="readmore_btn"><a href="single page.html">Read More</a></div>
                      </div>
                   </div>
                   <div class="col-md-3">
                      <div class="blog_taital_main">
                        <img src="../assets/img/hadra-maut-1.png" alt="">
                         <h1 class="blog_text">Hadra Maut</h1>
                         <div class="readmore_btn"><a href="single page.html">Read More</a></div>
                      </div>
                   </div> --}}
                </div>
             </div>
          </div>
          <!-- blog section end -->


          @endsection

          @section('scripts')
          
          @endsection