@extends('website_layouts.master')

@section('title', '')


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
                    <h1 class="blog_taital">{{ $category->name }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="blog_section_2 layout_padding shopCard">
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
                            <div class="readmore_btn"><a href="{{ route('shop.show', $shop->id) }}">Read More</a></div>

                        </div>
                    </div>
                @endforeach


            </div>


        </div>
    </div>
   
        <!-- blog section end -->


    @endsection

    @section('scripts')

    @endsection
