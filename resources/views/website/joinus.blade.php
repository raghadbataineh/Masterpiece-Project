@extends('website_layouts.master')

@section('title', 'Your Title Here')

@section('css')
    <!-- Include any additional CSS styling if needed -->
<style>
    span {
        color: red;
    }
</style>
@endsection

@section('content')
    <div class="container">
        <form method="post" action="{{ route('joinus') }}">
            @csrf

            <!-- Business Information -->
            <h5>Business Information:</h5>
            <div class="form-outline mb-4">
                <label class="form-label" for="shopName">Shop Name</label>

                <input type="text" id="shopName" name="shop_name" class="form-control" />
                <span>@error('shop_name'){{$message}} @enderror</span>

            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="businessPhone">Business Phone</label>

                <input type="tel" id="businessPhone" name="shop_phone" class="form-control" />
                <span>@error('shop_phone'){{$message}} @enderror</span>

            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="businessEmail">shop_description</label>

                <input type="email" id="businessEmail" name="shop_description" class="form-control" />
                <span>@error('shop_description'){{$message}} @enderror</span>

            </div>

            <!-- Owner/Manager Information -->
            <h5>Owner/Manager Information:</h5>
            <div class="form-outline mb-4">
                <label class="form-label" for="ownerFullName">Owner's Full Name</label>

                <input type="text" id="ownerFullName" name="owner_name" class="form-control" />
                <span>@error('owner_name'){{$message}} @enderror</span>

            </div>
{{-- 
            <div class="form-outline mb-4">
                <label class="form-label" for="ownerTitle">Owner's Title/Role</label>

                <input type="text" id="ownerTitle" name="owner_title" class="form-control" />
                <span>@error('owner_title'){{$message}} @enderror</span>

            </div> --}}

            <div class="form-outline mb-4">
                <label class="form-label" for="ownerPhone">Owner's Phone</label>

                <input type="tel" id="ownerPhone" name="owner_phone" class="form-control" />
                <span>@error('owner_phone'){{$message}} @enderror</span>

            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="ownerEmail">Owner's Email</label>

                <input type="email" id="ownerEmail" name="owner_email" class="form-control" />
                <span>@error('owner_email'){{$message}} @enderror</span>

            </div>

            <!-- Product/Service Details -->
            <h5>Product/Service Details:</h5>
            <div class="form-outline mb-4">
                <label class="form-label" for="productDescription">Description of the Products</label>

                <textarea class="form-control" id="productDescription" name="product_description" rows="4"></textarea>
                <span>@error('product_description'){{$message}} @enderror</span>

            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="productCategories">Product Categories</label>

                <input type="text" id="productCategories" name="product_categories" class="form-control" />
                <span>@error('product_categories'){{$message}} @enderror</span>

            </div>

            <!-- Checkbox -->
            {{-- <div class="form-check d-flex justify-content-center mb-4">
                <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value="1"
                    id="createAccountCheckbox"
                    name="create_account"
                    checked
                />
                <span>@error('name'){{$message}} @enderror</span>

                <label class="form-check-label" for="createAccountCheckbox"> Create an account? </label>
            </div> --}}

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
        </form>
    </div>
@endsection

@section('scripts')
    <!-- Include any additional JavaScript if needed -->
@endsection
