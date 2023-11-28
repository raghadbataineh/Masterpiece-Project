@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')
 <!-- Main content -->
 <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">review</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects text-center">
            <thead>
                <tr>
                  <th class="text-center">
                    #
                </th>

                  <th class="text-center">
                    User
                </th>

                  <th class="text-center">
                    product name
                </th>
                 
                    <th>
                        Comment
                    </th>
                    <th>
                        Rating
                    </th>
                   
                    
                    <th style="width: 30px">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                     $i=1;
                @endphp
                    @foreach ($reviews as $review)
                    <tr>
                      <td>{{$i}}</td>
                    <td>{{ $review->user->name }}</td>
                    <td>{{ $review->product->name }}</td>


                    <td>{{ $review->comment }}</td>
                   
                     
                 
                    <td>{{ $review->rating }} <i class="fa fa-star"></i></td>
                    {{-- <td>{{ $review->phone }}</td> --}}
                    <td class="project-actions">

                      <form action="{{route('review.destroy',$review->id)}}"  method="POST"  style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" style="display: flex;"
                        onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
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
