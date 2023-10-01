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
        <div class="card-header">Create new Floor </div>
        <div class="card-body">
            <form action="{{ route('floor.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
               
                <div class="form-group">
                    <label for="Floor image">Floor Image</label>
                    <input type="file" name="image" class="form-control" placeholder="Floor Image">
                    <span>@error('image'){{$message}} @enderror</span>

                </div>
                <div class="form-group">
                    <label for="Floor Name">Floor Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Floor Name">
                    <span>@error('name'){{$message}} @enderror</span>

                </div>
                {{-- <div class="form-group">
                    <label for="UserName">Floors Shops</label>
                    <input type="file" name="shop" class="form-control" placeholder="Floor Shops">
                    <span>@error('shop'){{$message}} @enderror</span>

                </div> --}}
              
                {{-- <div class="form-group">
                    <label for="UserName">Floors Shops</label>
                    <select name="shop_id" id="service_id" class="form-control">
                        @foreach ($floors as $floor)
                            <option value="{{ $floor->id }}">{{ $floor->name }}</option>
                        @endforeach
                    </select> 
                     <span>@error('shop'){{$message}} @enderror</span>

                </div>
               --}}
                    <br>
                    <input type="submit" value="Add Floor" class="btn btn-success"><br>
                </div>
            </form>
        </div>
    </div>
{{-- end form --}}
@endsection

@section('scripts')

@endsection