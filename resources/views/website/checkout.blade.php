@extends('website_layouts.master')

@section('title','')


@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('assets/css/style_singleproduct.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick_singleproduct.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min_singleproduct.css') }}">


@endsection



@section('content')

    
		<!-- BREADCRUMB -->
		{{-- <div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div> --}}
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		{{-- <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Shipping address</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="First Name">
							</div>
							
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City">
							</div>
							
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Mobile">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
									<label for="create-account">
										<span></span>
										Create Account?
									</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div>
						</div>
						<!-- /Billing Details -->

					

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Order Notes"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>BigMAC burger</div>
									<div>$6.00</div>
								</div>
								<div class="order-col">
									<div>2x Product Name Goes Here</div>
									
									<div>$25.00</div>
								</div>
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">$31.00</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Cash Payment
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Place order</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div> --}}
		<!-- /SECTION -->

	

		<section class="h-100 h-custom" style="background-color: #292929;">
			<div class="container py-5 h-100">
			  <div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col">
				  <div class="card">
					<div class="card-body p-4">
		  
					  <div class="row">
		  
						<div class="col-lg-7">
						  <h5 class="mb-3"><a href="#!" class="text-body"><i
								class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
						  <hr>
		  
						  <div class="d-flex justify-content-between align-items-center mb-4">
							<div>
							  <p class="mb-1">Shopping cart</p>
							  <p class="mb-0">You have 4 items in your cart</p>
							</div>
							<div>
							  <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
								  class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
							</div>
						  </div>
		  
						  <div class="card mb-3">
							<div class="card-body">
							  <div class="d-flex justify-content-between">
								<div class="d-flex flex-row align-items-center">
								  <div>
									<img
									  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
									  class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
								  </div>
								  <div class="ms-3">
									<h5>Iphone 11 pro</h5>
									<p class="small mb-0">256GB, Navy Blue</p>
								  </div>
								</div>
								<div class="d-flex flex-row align-items-center">
								  <div style="width: 50px;">
									<h5 class="fw-normal mb-0">2</h5>
								  </div>
								  <div style="width: 80px;">
									<h5 class="mb-0">$900</h5>
								  </div>
								  <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
								</div>
							  </div>
							</div>
						  </div>
		  
						  <div class="card mb-3">
							<div class="card-body">
							  <div class="d-flex justify-content-between">
								<div class="d-flex flex-row align-items-center">
								  <div>
									<img
									  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp"
									  class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
								  </div>
								  <div class="ms-3">
									<h5>Samsung galaxy Note 10 </h5>
									<p class="small mb-0">256GB, Navy Blue</p>
								  </div>
								</div>
								<div class="d-flex flex-row align-items-center">
								  <div style="width: 50px;">
									<h5 class="fw-normal mb-0">2</h5>
								  </div>
								  <div style="width: 80px;">
									<h5 class="mb-0">$900</h5>
								  </div>
								  <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
								</div>
							  </div>
							</div>
						  </div>
		  
						  <div class="card mb-3">
							<div class="card-body">
							  <div class="d-flex justify-content-between">
								<div class="d-flex flex-row align-items-center">
								  <div>
									<img
									  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img3.webp"
									  class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
								  </div>
								  <div class="ms-3">
									<h5>Canon EOS M50</h5>
									<p class="small mb-0">Onyx Black</p>
								  </div>
								</div>
								<div class="d-flex flex-row align-items-center">
								  <div style="width: 50px;">
									<h5 class="fw-normal mb-0">1</h5>
								  </div>
								  <div style="width: 80px;">
									<h5 class="mb-0">$1199</h5>
								  </div>
								  <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
								</div>
							  </div>
							</div>
						  </div>
		  
						  <div class="card mb-3 mb-lg-0">
							<div class="card-body">
							  <div class="d-flex justify-content-between">
								<div class="d-flex flex-row align-items-center">
								  <div>
									<img
									  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img4.webp"
									  class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
								  </div>
								  <div class="ms-3">
									<h5>MacBook Pro</h5>
									<p class="small mb-0">1TB, Graphite</p>
								  </div>
								</div>
								<div class="d-flex flex-row align-items-center">
								  <div style="width: 50px;">
									<h5 class="fw-normal mb-0">1</h5>
								  </div>
								  <div style="width: 80px;">
									<h5 class="mb-0">$1799</h5>
								  </div>
								  <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
								</div>
							  </div>
							</div>
						  </div>
		  
						</div>
						<div class="col-lg-5">
		  
						  <div class="card  text-white rounded-3" style="background-color: #a084dc">
							<div class="card-body">
							  <div class="d-flex justify-content-between align-items-center mb-4">
								<h5 class="mb-0">Card details</h5>
								<img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
								  class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
							  </div>
		  
							  <p class="small mb-2">Card type</p>
							  <a href="#!" type="submit" class="text-white"><i
								  class="fab fa-cc-mastercard fa-2x me-2"></i></a>
							  <a href="#!" type="submit" class="text-white"><i
								  class="fab fa-cc-visa fa-2x me-2"></i></a>
							  <a href="#!" type="submit" class="text-white"><i
								  class="fab fa-cc-amex fa-2x me-2"></i></a>
							  <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
		  
							  <form class="mt-4">
								<div class="form-outline form-white mb-4">
								  <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
									placeholder="Cardholder's Name" />
								  <label class="form-label" for="typeName">Cardholder's Name</label>
								</div>
		  
								<div class="form-outline form-white mb-4">
								  <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
									placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
								  <label class="form-label" for="typeText">Card Number</label>
								</div>
		  
								<div class="row mb-4">
								  <div class="col-md-6">
									<div class="form-outline form-white">
									  <input type="text" id="typeExp" class="form-control form-control-lg"
										placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
									  <label class="form-label" for="typeExp">Expiration</label>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-outline form-white">
									  <input type="password" id="typeText" class="form-control form-control-lg"
										placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
									  <label class="form-label" for="typeText">Cvv</label>
									</div>
								  </div>
								</div>
		  
							  </form>
		  
							  <hr class="my-4">
		  
							  <div class="d-flex justify-content-between">
								<p class="mb-2">Subtotal</p>
								<p class="mb-2">$4798.00</p>
							  </div>
		  
							  <div class="d-flex justify-content-between">
								<p class="mb-2">Shipping</p>
								<p class="mb-2">$20.00</p>
							  </div>
		  
							  <div class="d-flex justify-content-between mb-4">
								<p class="mb-2">Total(Incl. taxes)</p>
								<p class="mb-2">$4818.00</p>
							  </div>
		  
							  <button type="button" class="btn btn-info btn-block btn-lg">
								<div class="d-flex justify-content-between">
								  <span>$4818.00</span>
								  <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
								</div>
							  </button>
		  
							</div>
						  </div>
		  
						</div>
		  
					  </div>
		  
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </section>  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @endsection

@section('scripts')
<script>
	const addTocart=document.getElementById('addToCartButton');
	const viewcart=document.getElementById('viewCartButton');

	addTocart.addEventListener ('click', function(){
		addTocart.style.display='none';
		viewcart.style.display='inline-block';
	})

	viewcart.addEventListener ('click', function(){
		window.location.href='cart.html';
	})

</script>
@endsection