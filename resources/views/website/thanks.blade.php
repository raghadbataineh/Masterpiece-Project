@extends('website_layouts.master')

@section('title','')


@section('css')
<style>
    p{
        color: black;
    }
</style>
@endsection



@section('content')

{{-- <div class="container">
    <div class="row">
        <div class="col-4" >
            <h1>Thank You for Your Purchase!</h1>

            <p>Dear Customer,</p>
            <p>Thank you for choosing us,order has been successfully placed.</p>
    
            <!-- You can include order details, transaction ID, etc. -->
            <h2>Order Details:</h2>
            <ul>
                <li><strong>Order Number:</strong> [Order Number]</li>
                <li><strong>Transaction ID:</strong> [Transaction ID]</li>
                <!-- Include more details as needed -->
            </ul>
    
            <!-- Additional information or instructions for the user -->
            <p>Your items will be shipped/delivered to the following address:</p>
            <address>
                [User's Address]
            </address>
    
            <p>If you have any questions or concerns regarding your order, feel free to contact our customer support at [Customer Support Email/Phone].</p>
    
            <!-- Optionally, you can provide next steps or additional information -->
            <h2>What Happens Next?</h2>
            <p>Your order is now being processed, and you will receive an email with the order confirmation shortly. Once your order has shipped, you will receive another email with tracking information.</p>
    
            <p>We appreciate your business!</p>
            <p>Best Regards,<br>
                 Virtual mall</p>
        </div>
    </div>
</div> --}}

<section class="h-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-10 col-xl-8">
          <div class="card" style="border-radius: 10px;">
            <div class="card-header px-4 py-5">
              <h5 class=" mb-0" style="color: black">Thanks for your Order, <span style="color: #a8729a;">{{ $order->user->name}}</span>!</h5>
            </div>
            <div class="card-body p-4">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                <p class="small mb-0">Receipt Voucher : 1KAU9-84UIL</p>
              </div>
              <div class="card shadow-0 border mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-2">
                      <img src="{{ url('images/' . $order->product->image)}}"
                        class="img-fluid" alt="Phone">
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                      <p class=" mb-0">{{ $order->product->name}}</p>
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                      <p class=" mb-0 small">White</p>
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                      <p class=" mb-0 small">{{ $order->shop->name}}</p>
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                      <p class=" mb-0 small">Qty {{ $order->quantity}}</p>
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                      <p class=" mb-0 small">{{ $order->product->price}} JD</p>
                    </div>
                  </div>
                  <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                  <div class="row d-flex align-items-center">
                    <div class="col-md-2">
                      <p class=" mb-0 small">Track Order</p>
                    </div>
                    <div class="col-md-10">
                      <div class="progress" style="height: 6px; border-radius: 16px;">
                        <div class="progress-bar" role="progressbar"
                          style="width: 15%; border-radius: 16px; background-color: #e06ce4;" aria-valuenow="65"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="d-flex justify-content-around mb-1">
                        <p class=" mt-1 mb-0 small ms-xl-5">{{ $order->order_status}}</p>
                        <p class=" mt-1 mb-0 small ms-xl-5">Delivered</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
  
              <div class="d-flex justify-content-between pt-2">
                <p class="fw-bold mb-0">Order Details</p>
                <p class=" mb-0"><span class="fw-bold me-4">Total</span> {{ $order->total}} JD</p>
              </div>
  
              <div class="d-flex justify-content-between pt-2">
                <p class=" mb-0">Address </p>
                <p class=" mb-0"><span class="fw-bold me-4"></span> {{ $order->address}}</p>
              </div>
  
              <div class="d-flex justify-content-between">
                <p class=" mb-0">City</p>
                <p class=" mb-0"><span class="fw-bold me-4"></span> {{ $order->city}}</p>
              </div>
  
              <div class="d-flex justify-content-between mb-5">
                <p class=" mb-0">Recepits Voucher : 18KU-62IIK</p>
                <p class=" mb-0"><span class="fw-bold me-4">Delivery Charges</span> 3JD</p>
              </div>
            </div>
            <div class="card-footer border-0 px-4 py-5"
              style="background-color: #a084dc; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
              <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                paid: <span class="h2 mb-0 ms-2">{{ $order->total}} JD</span></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')

@endsection