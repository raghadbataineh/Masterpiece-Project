@extends('website_layouts.master')

@section('title','')


@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset ('assets/css/style_menu.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/custom_menue.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/responsive_menue.css') }}">

@endsection



@section('content')


    <div id="menu" class="section lb">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3>Menu</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="../assets/img/bigmac.jfif" class="img-fluid" alt="" />
						</div>
						<h2>Big Mac</h2>
						<a class="hvr-radial-in" href="#">$ 6.00</a>
						<a class="hvr-radial-in" href="{{ route ('singleproduct') }}">View Meal</a>
					</div>
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="../assets/img/cheesburger.jfif" class="img-fluid" alt="" />
						</div>
						<h2>CheesBurger</h2>
						<a class="hvr-radial-in" href="#">$ 4.50</a>
                        <a class="hvr-radial-in" href="singleproduct.html">View Meal</a>

					</div>
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="../assets/img/cheesdelux.jfif" class="img-fluid" alt="" />
						</div>
						<h2>Chees Delux</h2>
						<a class="hvr-radial-in" href="#">$ 6.50</a>
                        <a class="hvr-radial-in" href="singleproduct.html">View Meal</a>

					</div>
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="../assets/img/cheesdelux.jfif" class="img-fluid" alt="" />
						</div>
						<h2>Chees Delux</h2>
						<a class="hvr-radial-in" href="#">$ 6.50</a>
                        <a class="hvr-radial-in" href="singleproduct.html">View Meal</a>

					</div>
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="../assets/img/cheesdelux.jfif" class="img-fluid" alt="" />
						</div>
						<h2>Chees Delux</h2>
						<a class="hvr-radial-in" href="#">$ 6.50</a>
                        <a class="hvr-radial-in" href="singleproduct.html">View Meal</a>

					</div>
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="../assets/img/cheesdelux.jfif" class="img-fluid" alt="" />
						</div>
						<h2>Chees Delux</h2>
						<a class="hvr-radial-in" href="#">$ 6.50</a>
                        <a class="hvr-radial-in" href="singleproduct.html">View Meal</a>

					</div>
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="../assets/img/cheesdelux.jfif" class="img-fluid" alt="" />
						</div>
						<h2>Chees Delux</h2>
						<a class="hvr-radial-in" href="#">$ 6.50</a>
                        <a class="hvr-radial-in" href="singleproduct.html">View Meal</a>

					</div>
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="../assets/img/deluxemccrispy.jfif" class="img-fluid" alt="" />
						</div>
						<h2>Delux Crispy</h2>
						<a class="hvr-radial-in" href="#">$ 7.00</a>
                        <a class="hvr-radial-in" href="singleproduct.html">View Meal</a>

					</div>
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="../assets/img/spicydelux.jfif" class="img-fluid" alt="" />
						</div>
						<h2>Spicy Delux</h2>
						<a class="hvr-radial-in" href="#">$ 5.00</a>
                        <a class="hvr-radial-in" href="singleproduct.html">View Meal</a>

					</div>
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="../assets/img/bigmac.jfif" class="img-fluid" alt="" />
						</div>
						<h2>Vegetable Name..</h2>
						<a class="hvr-radial-in" href="#">$ 24.00</a>
                        <a class="hvr-radial-in" href="singleproduct.html">View Meal</a>

					</div>
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="../assets/img/bigmac.jfif" class="img-fluid" alt="" />
						</div>
						<h2>Vegetable Name..</h2>
						<a class="hvr-radial-in" href="#">$ 28.00</a>
                        <a class="hvr-radial-in" href="singleproduct.html">View Meal</a>

					</div>
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="../assets/img/bigmac.jfif" class="img-fluid" alt="" />
						</div>
						<h2>Vegetable Name..</h2>
						<a class="hvr-radial-in" href="#">$ 30.00</a>
                        <a class="hvr-radial-in" href="singleproduct.html">View Meal</a>

					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <!-- footer section start -->
 
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @endsection

    @section('scripts')
    
    @endsection
    