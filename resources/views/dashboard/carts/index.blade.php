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
        <h3 class="card-title">Cart</h3>

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
                  <th>
                    Product Name
                 </th>
                    <th>
                        Product Image
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Total Price
                    </th>
                    
                  
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                     $i=1;
                @endphp
                    @foreach ($carts as $cart)
                    <tr>
                      <td>{{$i}}</td>
                    <td>{{ $cart->user->name }}</td>
                    <td>{{ $cart->product->name }}</td>
                    {{-- <td>{{ $cart->product->image }}</td> --}}



                    <td><img src="{{ url('/images/' . $cart->product->image ) }}" width="150px" alt=""></td>
                    <td>{{ $cart->quantity }}</td>
                   
                     
                 
                    <td>{{ $cart->total_Price }}</td>
                    <td>action</td>
                    {{-- <td>{{ $cart->phone }}</td> --}}
                    {{-- <td class="project-actions">

                      <form action="{{route('carts.destroy',$cart->id)}}"  method="POST"  style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" style="display: flex;"
                        onclick="return confirm('Are you sure you want to delete this cart?')">Delete</button>
                      </form>


                    </td> --}}
                </tr>
                @endforeach
                @php
                    $i++;
                @endphp
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
