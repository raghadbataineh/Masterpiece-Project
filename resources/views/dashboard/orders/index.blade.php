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
    {{-- <a class="btn btn-primary  mb-3" href="{{route('orders.create')}}">Add order </a> --}}
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Orders</h3>

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
                        product image
                    </th>
                    <th>
                        User
                    </th>
                    <th>
                        shop
                    </th>

                    <th class="text-center">
                        Product
                    </th>
                    <th>
                        quantity
                    </th>
                    <th>
                        Order status
                    </th>
                    
                    <th>
                        Adress
                    </th>
                    <th>
                        City
                    </th>
                    <th>
                        Payment method
                    </th>
                    <th>
                        Total Price
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
                @foreach ( $orders as $order )

                <tr>

                    <th scope="row">{{$i}}</th>
                    <td><img src="{{ url('/images/' . $order->product->image) }}" alt="" width="110px"></td>

                     <td>{{$order->user->name}}</td>
                     <td>{{$order->shop->name}}</td>
                     <td>{{$order->product->name}}</td>
                    {{-- <td>{{$order->description}}</td> --}}
                   
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->order_status}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->city}}</td>
                    <td>{{$order->payment_method}}</td>
                    <td>{{$order->total}} JD</td>
                    <td class="project-actions text-right">

                        {{-- <a class="btn btn-info " href="{{ route('order.edit', $order->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a> --}}

                        <form action="{{route('order.destroy',$order->id)}}"  method="POST"  style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this order?')">
                            <i class="fas fa-trash">
                            </i>Delete</button>
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
