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
    <form action="{{ route('category.update',$categories->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $categories->id }}">
        <div class="form-group">
            <label>Category name</label>
            <input type="text" class="form-control" name="name" value="{{ $categories->name }}">
        </div>
        <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" value="{{ $categories->description }}">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" value="{{ $categories->image }}">
            </div>
          
        <div class="form-group">
                
         
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


@endsection

@section('scripts')

@endsection