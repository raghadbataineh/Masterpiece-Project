@extends('website_layouts.master')

@section('title', '')


@section('css')


    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style_singleproduct.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/slick_singleproduct.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min_singleproduct.css') }}"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection



@section('content')






    <section class="h-100 h-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4 cart">

                            <div class="row">


                                <div class="col-lg-7">

                                    <h5 class="mb-3"><a href="{{ route('home') }}" class="text-body"><i
                                                class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                    <hr>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1" style="color: black">Shopping cart</p>
                                        </div>
                                        <div>
                                            <p class="mb-0" style="color: black"><span class="text-muted">Sort
                                                    by:</span> <a href="#!" class="text-body"
                                                    style="color: black">price <i class="fas fa-angle-down mt-1"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                    @if (count((array) session('cart')) > 0)

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="color: black">
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Shop Name</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $totalSubtotal = 0;
                                                @endphp
                                                @foreach ($cart as $item)
                                                    <tr style="color: black">
                                                        <td>
                                                            <img src="{{ asset('images/' . (isset($item->product) ? $item->product->image : $item['image1'])) }}"
                                                                class="img-fluid rounded-3" alt="Shopping item"
                                                                style="width: 65px;">
                                                        </td>
                                                        <td>
                                                            {{ isset($item->product) ? $item->product->name : $item['Name'] }}
                                                        </td>
                                                        <td>
                                                            {{ isset($item->product) ? $item->quantity : $item['quantity'] }}
                                                        </td>
                                                        <td>
                                                            JOD
                                                            {{ isset($item->product) ? $item->product->price * $item->quantity : $item['price'] * $item['quantity'] }}
                                                        </td>

                                                        <td>
                                                            {{-- {{ optional($item->product)->shop->name }} --}}
                                                            {{ isset($item['product']) ? optional($item['product']->shop)->name : '' }}

                                                        </td>

                                                        <td>

                                                            {{-- {{ route('checkout.destroy',$item->product->id) }} --}}

                                                            <form
                                                                action="{{ route('checkout.destroy', isset($item->id) ? $item->id : $item['id']) }}"
                                                                method="POST" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" style="color: red;"
                                                                    onclick="return confirm('Are you sure you want to delete this product?')">
                                                                    <i class="fa fa-trash">
                                                                    </i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <!-- Accumulate the subtotal for the current item to the total subtotal -->
                                                    @php
                                                        $totalSubtotal += isset($item->product) ? $item->product->price * $item->quantity : $item['price'] * $item['quantity'];
                                                    @endphp
                                                @endforeach

                                                <form action="{{ route('checkout.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    {{-- <input name="product_id" type="hidden"
                                                        value="{{ $item->product->id }}">
                                                    <input name="shop_id" type="hidden"
                                                        value="{{ $item['product']->shop->id }}">
                                                    <input name="quantity" type="hidden" value="{{ $item->quantity }}">
                                                    <input name="subtotal" type="hidden" value="{{ $totalSubtotal }}">
                                                    <input name="delivery" type="hidden" value=" 3 ">
                                                    <input name="total" type="hidden" value="{{ $totalSubtotal + 3 }}"> --}}
                                                    <input name="product_id" type="hidden"
                                                        value="{{ isset($item['product']['id']) ? $item['product']['id'] : $item['id'] }}">
                                                    <input name="shop_id" type="hidden"
                                                        value="{{ isset($item['product']['shop']['id']) ? $item['product']['shop']['id'] : '' }}">
                                                    <input name="quantity" type="hidden" value="{{ $item['quantity'] }}">
                                                    <input name="subtotal" type="hidden" value="{{ $totalSubtotal }}">
                                                    <input name="delivery" type="hidden" value="3">
                                                    <input name="total" type="hidden" value="{{ $totalSubtotal + 3 }}">
                                            </tbody>
                                        </table>




                                        <table class="table table-bordered">


                                            <div class="form-group">
                                                <label for="inputAddress" style="color: black">Address</label>
                                                <input name="address" type="text" class="form-control"
                                                    placeholder="your address" style="background-color: #e8f0fe">
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity" style="color: black">City</label>
                                                    <input placeholder="Your ciry" name="city" type="text"
                                                        class="form-control" style="background-color: #e8f0fe">
                                                </div>


                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity" style="color: black">Payment method</label>

                                                    <select name="paymentmethod" id="paymentmethodSelector">
                                                        <option value="cash" id="cashOption">Cash</option>
                                                        <option value="visa" id="visaCardOption">Visa card</option>
                                                    </select>
                                                </div>


                                            </div>
                                            <div class="form-row">
                                                <button type="submit" class="btn btn-info btn-block btn-lg"
                                                    id="cashButton">
                                                    <div class="d-flex justify-content-between">
                                                        <span>${{ number_format($totalSubtotal, 2) + 3 }}</span>
                                                        @if (auth()->check())
                                                            <span>Checkout <i
                                                                    class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                                        @else
                                                            <p style="margin: 10px 0; font-weight: bold;">
                                                                Please <a href="{{ route('login') }}"
                                                                    style="color: #F56565; text-decoration: underline;">log
                                                                    in</a> to checkout.
                                                            </p>
                                                        @endif
                                                    </div>
                                                </button>


                                            </div>


                                        </table>

                                </div>


                                </form>


                                <div class="col-lg-5">

                                    <div class="card  text-white rounded-3" style="background-color: #a084dc ; display:none"
                                        id="visaCardDetails">
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
                                            <a href="#!" type="submit" class="text-white"><i
                                                    class="fab fa-cc-paypal fa-2x"></i></a>

                                            <div class="mt-4">
                                                <div class="form-outline form-white mb-4">
                                                    <input type="text" name="cardholder"
                                                        class="form-control form-control-lg" siez="17"
                                                        placeholder="Cardholder's Name" />
                                                    <label class="form-label" for="typeName">Cardholder's Name</label>
                                                </div>

                                                <div class="form-outline form-white mb-4">
                                                    <input type="text" name="cardnumber"
                                                        class="form-control form-control-lg" siez="17"
                                                        placeholder="1234 5678 9012 3457" minlength="19"
                                                        maxlength="19" />
                                                    <label class="form-label" for="typeText">Card Number</label>
                                                </div>

                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="form-outline form-white">
                                                            <input type="text" name="expire"
                                                                class="form-control form-control-lg" placeholder="MM/YYYY"
                                                                size="7" id="exp" minlength="7"
                                                                maxlength="7" />
                                                            <label class="form-label" for="typeExp">Expiration</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-outline form-white">
                                                            <input type="password" name="cvv"
                                                                class="form-control form-control-lg"
                                                                placeholder="&#9679;&#9679;&#9679;" size="1"
                                                                minlength="3" maxlength="3" />
                                                            <label class="form-label" for="typeText">Cvv</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <hr class="my-4">

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Subtotal</p>
                                                {{-- <p class="mb-2">${{ $item['price'] * $item['quantity'] }}</p> --}}
                                                <p class="mb-2">$ {{ number_format($totalSubtotal, 2) }}</p>
                                                <input name="subtotal" type="hidden"
                                                    value="$ {{ number_format($totalSubtotal, 2) }}">

                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Delivary</p>
                                                <p class="mb-2">3$</p>
                                            </div>

                                            <div class="d-flex justify-content-between mb-4">
                                                <p class="mb-2">Total Price</p>
                                                <p class="mb-2">${{ number_format($totalSubtotal, 2) + 3 }}</p>
                                                <input type="hidden" name="total"
                                                    value="${{ number_format($totalSubtotal, 2) + 3 }}">
                                            </div>

                                            <button type="submit" class="btn btn-info btn-block btn-lg">
                                                <div class="d-flex justify-content-between">
                                                    <span>${{ number_format($totalSubtotal, 2) + 3 }}</span>
                                                    {{-- <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span> --}}
                                                    @if (auth()->check())
                                                        {{-- <button type="submit" class="btn btn-dark btn-outline-hover-dark"
                                                            style="margin-left: 20%;">Checkout</button> --}}
                                                        <span>Checkout <i
                                                                class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                                    @else
                                                        <p style="margin: 10px 0; font-weight: bold;">
                                                            Please <a href="{{ route('login') }}"
                                                                style="color: #F56565; text-decoration: underline;">log
                                                                in</a> to checkout.
                                                        </p>
                                                    @endif
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                @else
                                    <p style="color: black">Your cart is empty.</p>
                                    @endif

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
        const paymentMethodSelector = document.getElementById('paymentmethodSelector');
        const visaCardDetails = document.getElementById('visaCardDetails');
        const cashButton = document.getElementById('cashButton');

        paymentMethodSelector.addEventListener('change', function() {
            if (paymentMethodSelector.value === 'cash') {
                visaCardDetails.style.display = 'none';
                cashButton.style.display = 'block';
            } else if (paymentMethodSelector.value === 'visa') {
                visaCardDetails.style.display = 'block';
                cashButton.style.display = 'none';

            }
        });
    </script>
@endsection
