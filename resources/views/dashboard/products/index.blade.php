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
    <a class="btn btn-primary  mb-3" href="{{route('product.create')}}">Add Product </a>
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Products</h3>

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
                    <th>
                        #
                    </th>
                    <th>
                       Product Image
                    </th>
                    <th>
                       Product Title
                    </th>
                    <th style="width: 20%">
                        Product description
                    </th>
                    <th class="text-center">
                        Product price
                    </th>
                    <th>
                       Shop name
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
           @foreach ($products as $product)

           <tr>

               <th scope="row">{{$i}}</th>
               <td><img src="{{ url('/images/' . $product->image) }}" alt="" width="100px" height="100x"></td>

                <td>{{$product->name}}</td>
               <td >
                <div class="description-wrapper">
                    <span class="short-description">{{ Str::limit($product->description, 100) }}</span>
                    <span class="full-description" style="display: none;">{{ $product->description }}</span>
                </div>
                <a href="#" class="read-more">Read More</a>
            </td>
               <td>${{$product->price}}</td>

               {{-- <td>
                @foreach (optional($product->shops) as $shop)
                {{$product->$shop->name}}<br>
                 @endforeach
                 
            </td> --}}
            <td>{{$product->shop->name}}</td>


               

               <td class="project-actions text-right">

                   <a class="btn btn-info " href="{{ route('product.edit', $product->id) }}">
                       <i class="fas fa-pencil-alt">
                       </i>
                       Edit
                   </a>

                   <form action="{{route('product.destroy',$product->id)}}"  method="POST"  style="display: inline;">
                       @method('DELETE')
                       @csrf
                       <button type="submit" class="btn btn-danger"
                       onclick="return confirm('Are you sure you want to delete this product?')">
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
