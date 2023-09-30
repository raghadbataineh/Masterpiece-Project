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
        <div class="card-header">Create new category</div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="ategory name">Category name</label>
                    <input type="text" name="name" class="form-control" 
                        placeholder="category name">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control"
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
                    <input type="submit" value="Add Category" class="btn btn-success"><br>
            </form>
        </div>
    </div>
{{-- end form --}}
@endsection

@section('scripts')

@endsection
