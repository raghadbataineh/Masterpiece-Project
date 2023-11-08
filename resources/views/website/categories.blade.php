@extends('website_layouts.master')

@section('title', '')


@section('css')
@endsection



@section('content')



    <!-- banner section end -->
    <!-- blog section start -->
    <div class="container">
        <div class="row">
            <aside class="left-sidebar col-md-3">
                <div class="container">
                    <div class="row">
                        {{-- <div class="meta-person bg-alabaster p-4 text-center">
                        <h3 class="colored mt-3">Head Chef</h3>
                        <p>He is an experienced, amazing, and the best Chef in our Restaurant.</p>
                    </div> --}}

                        <div class="sidebar-box">
                            <h3>Search</h3>
                            <div class="search-box d-flex">
                                <input type="text" name="search" class="border" class="mt-3">
                                <a href="#" class="btn-search btn-hvr-effects"><i class="icon icon-search"></i></a>
                            </div>
                        </div>

                        <div class="col-md-12">

                            <div class="categories-box sidebar-box">
                                <h3>Categories</h3>
                                <ul class="list-unstyled mt-3">
                                    <li><a href="#">Restrents</a></li>
                                    <li><a href="#">Banks</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Optics</a></li>
                                    <li><a href="#">Shoes and bags</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="floors-box sidebar-box">
                                <h3>Floors</h3>
                                <ul class="list-unstyled mt-3">
                                    <li><a href="#">Ground Floor</a></li>
                                    <li><a href="#">First Floor</a></li>
                                    <li><a href="#">Seconed Floor</a></li>

                                </ul>
                            </div>
                        </div>


                    </div><!--container-->
                </div>
            </aside>


            <div class="col-sm-9">
                <div class="blog_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="blog_taital">{{ $category->name }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog_section_2 layout_padding shopCard">
                    <div class="container">
                        <div class="row">
                            @foreach ($shops as $shop)
                                <div class="col-md-4">
                                    <div class="blog_taital_main">
                                        <img class="cat_img" src="{{ url('/images/' . $shop->image) }}" alt=""
                                            width="150px">
                                        <h1 class="blog_text">{{ $shop->name }}</h1>
                                        <div class="readmore_btn"><a href="{{ route('shop.show', $shop->id) }}">Read
                                                More</a></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog section end -->


@endsection

@section('scripts')

@endsection
