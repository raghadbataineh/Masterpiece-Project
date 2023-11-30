@extends('website_layouts.master')

@section('title', 'Your Title Here')

@section('css')
    <style>
        span {
            color: red;
        }

        .gradient-box {
            border-radius: 10px;
            padding: 39px 45px 45px;
            position: relative;
            z-index: 3;
            margin-bottom: 30px;
            max-width: 100%;
            display: inline-block;
            background: #590f87;
            background: -o-linear-gradient(45deg, #590f87 0, #ff0076 100%);
            background: linear-gradient(45deg, #590f87 0, #ff0076 100%);
        }

        .submit {
            color: white;
            padding: 1%;
            background: #590f87;
            background: -o-linear-gradient(45deg, #590f87 0, #ff0076 100%);
            background: linear-gradient(45deg, #590f87 0, #ff0076 100%);
        }

        .joinform {
            padding: 3%;
            background-color: #2c3a55;
            margin-top: 20px
        }
        p{
            font-size: 1rem;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="vdo-btn-wrapper gradient-box" style="margin-top: 20px">
                    <h2 class="text-white">Join to Vertual mall</h2>
                    {{-- <h1 class="service_taital">About Us</h1> --}}

                    </a>
                </div>
            </div>

        
        </div>
        <div class="row">
            <div class="col-9">
                <p>Welcome to Virtual Mall , where opportunities meet innovation! If you're a passionate shop
                    owner looking to expand your reach and showcase your unique products to a diverse audience, you're in
                    the right place.

                    By joining our virtual mall, you gain access to a dynamic and growing community of shoppers who are
                    eager to discover new and exciting offerings. </p>

                    <p>
                        Complete the form below. Provide us with essential information about your shop, and contact details. Our team will review your application, and upon approval, you'll receive further instructions on setting up your virtual shop .

                    </p>
            </div>
        </div>

        <form method="POST" action="{{ route('joinus.store') }}">
            @csrf

            <div class="joinform">
                <!-- Business Information -->
                <h3>Business Information:</h3>
                <div class="form-outline mb-2">
                    <label class="form-label" for="shopName">Shop Name</label>

                    <input type="text" id="shopName" name="shop_name" class="form-control" />
                    <span>
                        @error('shop_name')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="businessPhone">Shop Phone</label>

                    <input type="text" id="businessPhone" name="shop_phone" class="form-control" />
                    <span>
                        @error('shop_phone')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="businessEmail">shop_description</label>

                    <input type="text" id="businessEmail" name="shop_description" class="form-control" />
                    <span>
                        @error('shop_description')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

            </div>
            <!-- Owner/Manager Information -->
            <div class="joinform">
                <h3>Owner/Manager Information:</h3>
                <div class="form-outline mb-4">
                    <label class="form-label" for="ownerFullName">Owner's Full Name</label>

                    <input type="text" id="ownerFullName" name="owner_name" class="form-control" />
                    <span>
                        @error('owner_name')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="ownerPhone">Owner's Phone</label>

                    <input type="text" id="ownerPhone" name="owner_phone" class="form-control" />
                    <span>
                        @error('owner_phone')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="ownerEmail">Owner's Email</label>

                    <input type="text" id="ownerEmail" name="owner_email" class="form-control" />
                    <span>
                        @error('owner_email')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
            </div>

            <!-- Product/Service Details -->
            <div class="joinform">
                <h3>Product/Service Details:</h3>
                <div class="form-outline mb-4">
                    <label class="form-label" for="productDescription">Description of the Products</label>

                    <textarea class="form-control" id="productDescription" name="product_description" rows="4"></textarea>
                    <span>
                        @error('product_description')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="productCategories">Product Categories</label>

                    <input type="text" id="productCategories" name="product_categories" class="form-control" />
                    <span>
                        @error('product_categories')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <button type="submit" class="btn btn-block mb-4 submit">Submit</button>

            </div>


            <!-- Submit button -->
            {{-- <input type="submit" value="submit"> --}}
        </form>
    </div>
@endsection

@section('scripts')
    <!-- Include any additional JavaScript if needed -->
@endsection
