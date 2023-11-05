@extends('website_layouts.master')

@section('title', '')


@section('css')
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/style_singleproduct.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick_singleproduct.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min_singleproduct.css') }}"> --}}



@endsection



@section('content')




    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            {{-- <img src="../assets/img/cheesburger.jfif" alt=""> --}}
                            <img src= "{{ url('/images/' . $product->image) }}" class="img-fluid" alt="" />

                        </div>

                        <div class="product-preview">
                            <img src="../assets/img/cheesburger.jfif" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="../assets/img/cheesburger.jfif" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="../assets/img/cheesburger.jfif" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src= "{{ url('/images/' . $product->image) }}" class="img-fluid" alt="" />

                        </div>

                        <div class="product-preview">
                            <img src= "{{ url('/images/' . $product->image1) }}" class="img-fluid" alt="" />

                        </div>

                        <div class="product-preview">
                            <img src= "{{ url('/images/' . $product->image3) }}" class="img-fluid" alt="" />

                        </div>

                        <div class="product-preview">
                            <img src= "{{ url('/images/' . $product->image4) }}" class="img-fluid" alt="" />

                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->
                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name" style="color: white">{{ $product->name }} </h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#tab3">10 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">{{ $product->price }} <del class="product-old-price">$7.00</del></h3>
                            <!-- <span class="product-available">In Stock</span> -->
                        </div>
                        <div style="width: 200px">
                            <p >{{ $product->description }}</p>

                        </div>

                       


                        <form id="cartForm" action="{{ route('addcart', ['idcart' => $product->id]) }}" method="post">
                            @csrf
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input type="number" name="quantity" value="1" min="1">
                                    <span class="qty-up" style="color: black">+</span>
                                    <span class="qty-down" style="color: black">-</span>
                                </div>
                                <br>
                            </div>
                            <button class="btn add-to-cart-btn" type="submit" style="background-color: #a084dc"><i
                                    class="fa fa-shopping-cart"></i> Add to
                                cart</button>

                            {{-- <input class="add-to-cart-btn" type="submit" value="Add to cart"> --}}

                        </form>




                    </div>

                    {{-- </form> --}}


                    <ul class="product-btns">
                        <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                    </ul>

                    <ul class="product-links">
                        <li>Shop: {{ $product->shop->name }}</li>
                    </ul>


                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>

                        <li><a data-toggle="tab" href="#tab2">You may also like</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                       

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.</p>

                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->

                        <!-- tab3  -->
                        <div id="tab3" class="tab-pane fade in">
                            <div class="row">
                                <!-- Rating -->
                                <!-- Rating -->
<div class="col-md-3">
    <div id="rating">
        <div class="rating-avg">
            <span>{{ $averageRating }}</span>
            <div class="rating-stars">
                @php
                $averageRatingRounded = round($averageRating);
                @endphp
                @for ($i = 1; $i <= 5; $i++)
                    <i class="fa fa-star{{ $i <= $averageRatingRounded ? '' : '-o' }}"></i>
                @endfor
            </div>
        </div>
        <ul class="rating">
            @foreach ($ratings as $rating)
            <li>
                <div class="rating-stars">
                    {{-- @for ($i = 1; $i <= 5; $i++)
                        <i class="fa fa-star{{ $rating->rating && $i <= $rating->rating ? '' : '-o' }}"></i>
                    @endfor --}}
                </div>
                <div class="rating-progress">
                    {{-- <div style="width: {{ $rating->percentage }}%;"></div> --}}
                </div>
                {{-- <span class="sum">{{ $rating->count }}</span> --}}
            </li>
        @endforeach
        
        </ul>
    </div>
</div>

                                <!-- /Rating -->

                                <!-- Reviews -->
                                <div class="col-md-6">
                                    <div id="reviews">
                                        <ul class="reviews">
                                            @if ($reviews)

                                            @foreach ($reviews as $review)
                                            <li>
                                                <div class="review-heading">
                                                    <h5 class="name">{{ $review->user->name }}</h5> <!-- Assuming user information is available in the review model -->
                                                    <p class="date">{{ $review->created_at->format('M d, Y, h:i A') }}</p> <!-- Adjust the date format accordingly -->
                                                    <div class="review-rating">
                                                        @for ($i = 0; $i < $review->rating; $i++)
                                                            <i class="fa fa-star"></i>
                                                        @endfor
                                                        @for ($i = 0; $i < 5 - $review->rating; $i++)
                                                            <i class="fa fa-star-o empty"></i>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>{{ $review->comment }}</p> <!-- Assuming the review content is stored in the 'review' field -->
                                                </div>
                                            </li>
                                        @endforeach
                                        @else
    <p>No reviews available for this product.</p>
@endif
                                        



                                        </ul>
                                        <ul class="reviews-pagination">
                                            <li class="active">1</li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Reviews -->

                                <!-- Review Form -->
                                <div class="col-md-3">
                                    <div id="review-form">
                                        @if (auth()->check())
                                            <form class="review-form" method="POST"
                                                action="{{ route('reviews.store') }}" enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                <textarea class="input" placeholder="Your Review" name="review"></textarea>
                                                <div class="input-rating">
                                                    <span>Your Rating: </span>
                                                    <div class="stars">
                                                        <input id="star5" name="rating" value="5"
                                                            type="radio"><label for="star5"></label>
                                                        <input id="star4" name="rating" value="4"
                                                            type="radio"><label for="star4"></label>
                                                        <input id="star3" name="rating" value="3"
                                                            type="radio"><label for="star3"></label>
                                                        <input id="star2" name="rating" value="2"
                                                            type="radio"><label for="star2"></label>
                                                        <input id="star1" name="rating" value="1"
                                                            type="radio"><label for="star1"></label>
                                                    </div>

                                                </div>
                                                <button class="primary-btn" type="submit">Submit</button>
                                            @else
                                                <p style="margin: 10px 0; font-weight: bold;">
                                                    Please <a href="{{ route('login') }}"
                                                        style="color: #F56565; text-decoration: underline;">log in</a> to
                                                    submit a review.
                                                </p>
                                        @endif
                                        </form>
                                    </div>
                                </div>
                                <!-- /Review Form -->
                            </div>
                        </div>
                        <!-- /tab3  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- Section -->
    {{-- <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../assets/img/deluxemccrispy.jfif" alt="">
								<div class="product-label">
									<span class="sale">-30%</span>
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">Delux Burger</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
					</div>
					<!-- /product -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div> --}}
    <!-- /Section -->


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- jQuery Plugins -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

@endsection

@section('scripts')
    <script>
        const addTocart = document.getElementById('addToCartButton');
        const viewcart = document.getElementById('viewCartButton');

        addTocart.addEventListener('click', function() {
            addTocart.style.display = 'none';
            viewcart.style.display = 'inline-block';
        })

        viewcart.addEventListener('click', function() {
            window.location.href = 'cart.html';
        })
    </script>
@endsection
