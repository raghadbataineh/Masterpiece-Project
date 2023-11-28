@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

<div class="container-fluid">
    {{-- <form action="{{ route('shop.update', $shop->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="Shop Name">Shop Name</label>
            <input type="text" name="name" class="form-control" placeholder="Shop Name" value="{{ old('name', $shop->name) }}">
            <span>@error('name'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="Shop Description">Shop Description</label>
            <textarea name="description" class="form-control" placeholder="Shop Description">{{ old('description', $shop->description) }}</textarea>
            <span>@error('description'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="Shop Image">Shop Image</label>
            <input type="file" name="image" class="form-control" placeholder="Shop Image">
            <span>@error('image'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="Shop Floor">Shop Floor</label>
            <select name="floor_id" class="form-control">
                @foreach ($floors as $floor)
                    <option value="{{ $floor->id }}" {{ $floor->id == $shop->floor_id ? 'selected' : '' }}>{{ $floor->floor_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Shop Category">Shop Category</label>
            <select name="category_id" class="form-control">
                @foreach ($categoryNames as $categoryName)
                    <option value="{{ $categoryName->id }}" {{ $categoryName->id == $shop->category_id ? 'selected' : '' }}>{{ $categoryName->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Shop Location">Shop Location</label>
            <input type="text" name="location" class="form-control" placeholder="Shop Location" value="{{ old('location', $shop->location) }}">
            <span>@error('location'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="Shop Phone">Shop Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Shop Phone" value="{{ old('phone', $shop->phone) }}">
            <span>@error('phone'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="Shop Opening Hours">Shop Opening Hours</label>
            <input type="time" name="open" class="form-control" placeholder="Shop Opening Hours" value="{{ old('open', $shop->open) }}">
            <span>@error('open'){{ $message }} @enderror</span>
        </div>

        <input type="submit" value="Update Shop" class="btn btn-success">
    </form> --}}

    <form action="{{ route('shop.update', $shop->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <div class="form-group">
            <label for="Shop Name">Shop Name</label>
            <input type="text" name="name" class="form-control" placeholder="Shop Name" value="{{ old('name', $shop->name) }}">
            <span>@error('name'){{ $message }} @enderror</span>
        </div>
    
        <div class="form-group">
            <label for="Shop Description">Shop Description</label>
            <textarea name="description" class="form-control" placeholder="Shop Description">{{ old('description', $shop->description) }}</textarea>
            <span>@error('description'){{ $message }} @enderror</span>
        </div>
    
        <div class="form-group">
            <label for="Shop Image">Shop Image</label>
            <!-- Display the current image if available -->
            @if ($shop->image)
                <img src="{{ url('images/' .$shop->image) }}" alt="Current Image" width="100px" height="100px">
            @endif
            <input type="file" name="image" class="form-control" placeholder="Shop Image">
            <span>@error('image'){{ $message }} @enderror</span>
        </div>
    
        <div class="form-group">
            <label for="Shop Image 1">Shop Image 1</label>
            <!-- Display the current image if available -->
            @if ($shop->image1)
                <img src="{{ url('images/' .$shop->image1) }}" alt="Current Image 1" width="100px" height="100px">
            @endif
            <input type="file" name="image1" class="form-control" placeholder="Shop Image 1">
            <span>@error('image1'){{ $message }} @enderror</span>
        </div>
    
        <div class="form-group">
            <label for="Shop Image 2">Shop Image 2</label>
            <!-- Display the current image if available -->
            @if ($shop->image2)
                <img src="{{ url('images/' .$shop->image2) }}" alt="Current Image 2" width="100px" height="100px">
            @endif
            <input type="file" name="image2" class="form-control" placeholder="Shop Image 2">
            <span>@error('image2'){{ $message }} @enderror</span>
        </div>
    
        <div class="form-group">
            <label for="Shop Image 3">Shop Image 3</label>
            <!-- Display the current image if available -->
            @if ($shop->image3)
                <img src="{{ url('images/' .$shop->image3) }}" alt="Current Image 3" width="100px" height="100px">
            @endif
            <input type="file" name="image3" class="form-control" placeholder="Shop Image 3">
            <span>@error('image3'){{ $message }} @enderror</span>
        </div>
        <div class="form-group">
            <label for="category">Choose category:</label>
            <select name="category_id" id="category" class="form-control">
                @foreach ($categoryNames as $categoryName)
                    <option value="{{ $categoryName->id }}">{{ $categoryName->name }}</option>
                @endforeach
            </select>
            {{-- <input type="hidden" value="{{ $categoryName->id }}"name="category_id"> --}}
            <input type="hidden" name="category_name" value="{{ $categoryName->name }}">

        </div>
        <div class="form-group">
            <label for="floor">Choose Floor:</label>
            <select name="floor_id" id="floor" class="form-control">
                @foreach ($floorNames as $floorName)
                    <option value="{{ $floorName->id }}">{{ $floorName->floor_name }}</option>
                @endforeach
            </select>
            {{-- <input type="hidden" value="{{ $floorName->id }}"name="floor_id"> --}}
            <input type="hidden" name="floor_name" value="{{ $floorName->floor_name }}">

        </div>
        <div class="form-group">
            <label for="Shop Location">Shop Location</label>
            <input type="text" name="location" class="form-control" placeholder="Shop Location" value="{{ old('location', $shop->location) }}">
            <span>@error('location'){{ $message }} @enderror</span>
        </div>
    
        <div class="form-group">
            <label for="Shop Phone">Shop Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Shop Phone" value="{{ old('phone', $shop->phone) }}">
            <span>@error('phone'){{ $message }} @enderror</span>
        </div>
    
        <div class="form-group">
            <label for="Shop Opening Hours">Shop Opening Hours</label>
            <input type="time" name="open" class="form-control" placeholder="Shop Opening Hours" value="{{ old('opening_hours', $shop->opening_hours) }}">
            <span>@error('opening_hours'){{ $message }} @enderror</span>
        </div>
    
        <div class="form-group">
            <label for="Has Products">Has Products</label>
            <input type="number" name="hasproducts" class="form-control" placeholder="Has Products" value="{{ old('hasproducts', $shop->hasproducts) }}">
            <span>@error('hasproducts'){{ $message }} @enderror</span>
        </div>
    
        <input type="submit" value="Update Shop" class="btn btn-success">
    </form>
    
</div>


@endsection

@section('scripts')

@endsection