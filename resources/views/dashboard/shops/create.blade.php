@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

<div class="card">
        <div class="card-header">Create new Shop</div>
        <div class="card-body">
            <form action="{{ route('shop.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="ategory name">shop name</label>
                    <input type="text" name="name" class="form-control" 
                        placeholder="category name">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="description">shop Description</label>
                    <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                        <label for="image"> Shop Image</label>
                        <input type="file" name="image" class="form-control"
                            placeholder="Image">
                            @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    
                </div>
                <div class="form-group">
                        <label for="image"> Shop Image</label>
                        <input type="file" name="image1" class="form-control"
                            placeholder="Image">
                            @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    
                </div>
                <div class="form-group">
                        <label for="image"> Shop Image</label>
                        <input type="file" name="image2" class="form-control"
                            placeholder="Image">
                            @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    
                </div>
                <div class="form-group">
                        <label for="image"> Shop Image</label>
                        <input type="file" name="image3" class="form-control"
                            placeholder="Image">
                            @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    
                </div>
                <div class="form-group">
                        <label for="image"> Shop Floor</label>
                        <input type="text" name="image3" class="form-control"
                            placeholder="Image">
                            @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    
                </div>
                
                <div class="form-group">
                        {{-- <label for="image"> Shop Category</label>
                        <input type="text" name="image3" class="form-control"
                            placeholder="Image">
                            @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    
                </div> --}}
                <div class="form-group">
                    <label for="category">Choose category:</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categoryNames as $categoryName)
                            <option value="{{ $categoryName->id }}">{{ $categoryName->title }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" value="{{ $categoryName->id }}"name="category_id">
                </div>
             
                
                <div class="form-group">
                        <label for="image"> Category Image</label>
                        <input type="file" name="image3" class="form-control"
                            placeholder="Image">
                            @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    
                </div>
                <div class="form-group">
                        <label for="image"> Shop Location</label>
                        <input type="text" name="image3" class="form-control"
                            placeholder="Image">
                            @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    
                </div>
                <div class="form-group">
                        <label for="image"> Shop phone</label>
                        <input type="text" name="image3" class="form-control"
                            placeholder="Image">
                            @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    
                </div>
                <div class="form-group">
                        <label for="image"> Shop opening_hours</label>
                        <input type="time" name="image3" class="form-control"
                            placeholder="Image">
                            @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    
                </div>
                {{-- <div class="form-group">
                    <label for="description">Type </label>
                  
                        <br>
                        <select name="type" id="">
                            <option value="learning">learning</option>
                            <option value="school suplies">school suplies</option>
                            <option value="service">service</option>
                        </select>
                </div> --}}

                <br>
                    <input type="submit" value="Add Shop" class="btn btn-success"><br>
            </form>
        </div>
    </div>
{{-- end form --}}
@endsection

@section('scripts')

@endsection
