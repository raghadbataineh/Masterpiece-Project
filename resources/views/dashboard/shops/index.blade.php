@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success" id="success-alert">
    {{ session('success') }}
</div>
@endif
 <!-- Main content -->
 <section class="content">
    <a class="btn btn-primary  mb-3" href="{{route('shop.create') }}">Add Shop </a>
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">shops</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                       shop name
                    </th>
                    <th>
                       shop Image
                    </th>
                    <th>
                       Floor
                    </th>
                    <th>
                        Category_name
                     </th>
                    <th>
                        Category_image
                     </th>
                    <th>
                        shop location
                    </th>

                    <th>
                       phone
                    </th>

                    <th >
                        opening_hours
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                     $i=1;
                @endphp
                @foreach ($shops as $shop)

                <tr>
                    <th scope="row">{{$i}}</th>

                     <td>{{$shop->name}}</td>
                     <td><img src="{{ url('/images/' . $shop->image) }}" alt="" width="100px" height="100px"></td>
                     <td>
                        <div class="description-wrapper" style="width: 100px">
                            <span class="short-description">{{ Str::limit($shop->description, 100) }}</span>
                            <span class="full-description" style="display: none;">{{ $shop->description }}</span>
                        </div>
                        <a href="#" class="read-more">Read More</a>
                    </td>


                     <td>{{$shop->floor->floor_name}}</td>

                     <td>{{$shop->category->name}}</td>
                    <td><img src="{{ url('/images/' . $shop->category->image) }}" alt="" width="100px" height="100px"></td>

                     <td>{{$shop->location}}</td>


                     <td>{{$shop->phone}}</td>
              
                    <td>{{$shop->opening_hours}}</td>

                    <td class="project-actions text-right">

                        <a class="btn btn-info " href="{{ route('category.edit', $shop->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>

                        <form action="{{route('category.destroy',$shop->id)}}"  method="POST"  style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this shop?')">
                            <i class="fas fa-trash">
                            </i>
                            Delete</button>
                          </form>
                    </td>




                </tr>
                @php
                $i++;
            @endphp
                @endforeach


            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection

@section('scripts')

@endsection
