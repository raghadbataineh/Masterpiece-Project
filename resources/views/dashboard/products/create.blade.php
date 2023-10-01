@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

{{-- form --}}
<div class="card">
        <div class="card-header">Create new Product</div>
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="UserName">Product Name</label>
                    <input type="text" name="name" class="form-control" 
                     
                        placeholder="Product Name">

                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="description">Product Description</label>
                    <textarea name="description" class="form-control" placeholder="Product Description"></textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                        <label for="UserPassword">Product Image</label>
                        <input type="file" name="image" class="form-control"
                            placeholder="Product Image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                <div class="form-group">
                        <label for="UserPassword">Product Image</label>
                        <input type="file" name="image1" class="form-control"
                            placeholder="Product Image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                <div class="form-group">
                        <label for="UserPassword">Product Image</label>
                        <input type="file" name="image2" class="form-control"
                            placeholder="Product Image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                <div class="form-group">
                        <label for="UserPassword">Product Image</label>
                        <input type="file" name="image3" class="form-control"
                            placeholder="Product Image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
       
                        <div class="form-group">
                                <label for="Status">Product Price</label>
                                <input type="number" name="price" class="form-control"
                                    placeholder="Product Price">
                                    @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="shop">Choose Shop:</label>
                            <select name="shop_id" id="shop" class="form-control">
                                @foreach ($shopNames as $shopName)
                                    <option value="{{ $shopName->id }}">{{ $shopName->name }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" value="{{ $shopName->id }}"name="shop_id">
                        </div>
                    <br>
                    <input type="submit" value="Add Product" class="btn btn-success"><br>
                </div>
            </form>
        </div>
    </div>
{{-- end form --}}
@endsection

@section('scripts')

@endsection