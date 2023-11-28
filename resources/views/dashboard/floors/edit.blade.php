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
    <h2>Edit Floor Information</h2>

    <form action="{{ route('floor.update', $floor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="Floor image">Floor Image</label>
            <input type="file" name="image" class="form-control" placeholder="Floor Image">
            <span>@error('image'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="Floor Name">Floor Name</label>
            <input type="text" name="name" class="form-control" placeholder="Floor Name" value="{{ old('name', $floor->name) }}">
            <span>@error('name'){{ $message }} @enderror</span>
        </div>

        {{-- Add other fields as needed --}}

        <input type="submit" value="Update Floor" class="btn btn-success">
    </form>
    </div>
</div>
        


@endsection

@section('scripts')

@endsection