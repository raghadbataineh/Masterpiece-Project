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
    {{-- <a class="btn btn-primary  mb-3" href="{{route('payments.create') }}">Add Payment </a> --}}
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Payments</h3>

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
                        buyer Name
                     </th>
                    <th>
                        buyer phone
                     </th>
                    <th>
                        buyer address
                     </th>
                    <th >
                      payment_method
                    </th>
                    <th>
                      payment_amount
                    </th>
                    <th>
                      payment_status
                     </th>
                    <th>
                      payment_date
                    </th>
                   
                   
                    <th>
                        Currency
                    </th>



                </tr>
            </thead>
            <tbody>
                @php
                     $i=1;
                @endphp
                @foreach ($payments as $payment)
                {{-- {{dd($userWithPayment)}} --}}
                   <tr>
                    <th scope="row">{{$i}}</th>
                    <td>
                        {{$payment->user->name}}
                  </td>
                    <td>
                        {{$payment->user->phone}}
                  </td>
                    <td>
                        {{$payment->user->address}}
                  </td>
                    <td>{{$payment->payment_method}}</td>
                    <td>{{$payment->payment_amount}}</td>
                    <td>{{$payment->payment_method}}</td>
                    <td >{{$payment->payment_amount}}</td>
                    <td>{{$payment->payment_status}}</td>
                    <td>{{$payment->payment_date}}</td>
                    <td>{{$payment->Currency}}</td>

                    <td class="project-actions text-right">

{{--

                        <form action="{{route('partners.destroy',$payment->id)}}"  method="POST"  style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this admin?')">Delete</button>
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
