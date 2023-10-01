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
    <a class="btn btn-primary  mb-3" href="{{route('floor.create') }}">Add Floor </a>
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">floors</h3>

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
                        Floor Image
                    </th>
                    <th>
                       Floor Name
                   </th>
                    <th>
                       Shops in floor 
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
                @foreach ($floors as $floor )
                   <tr>
                    <th scope="row">{{$i}}</th>
                    <td><img src="{{ url('/images/' . $floor->floor_image) }}" alt="" width="100px" height="100px"></td>

                    <td>{{$floor->floor_name}}</td>
                    <td>
                      @foreach ($floor->shops as $shop)
                      <ul>
                        <li>  {{$shop->name}}</li>

                      </ul>
                          <br>
                      @endforeach
                    </td>
                    <td class="project-actions text-right">

                        <a class="btn btn-info " href="{{ route('floor.edit', $floor->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>

                        {{-- <form action="{{route('floor.destroy',$floor->id)}}"  method="POST"  style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this admin?')">
                            <i class="fas fa-trash">
                            </i>Delete</button>
                          </form> --}}
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
