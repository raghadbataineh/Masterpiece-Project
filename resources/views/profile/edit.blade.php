{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 --}}

 @extends('website_layouts.master')

 @section('title','')
 
 <style>
   .container p {
    color: black;
  }
 
  table{
    color: black
  }
 </style>
 @section('css')
 
 @endsection
 
 
 
 @section('content')
 
 
 
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="images/logoo.jpg" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3" style="color: black">{{$user->name}}</h5>
              {{-- <x-text :value="old('name', $user->name)" required autofocus autocomplete="name" /> --}}

              
              {{-- <p class="text-muted mb-1">Full Stack Developer</p> --}}
              {{-- <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> --}}
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary">Follow</button>
                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
              </div>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                  <a class="mb-0" style="color: black" href="" id="update">Update your password</a>
                  
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                  <p class="mb-0">Delete Account</p>
                </li>
                {{-- <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                  <p class="mb-0">@mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li> --}}
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          
             <div class="max-w-xl" id="profile_info">
                    @include('profile.partials.update-profile-information-form')
                </div>
                <div class="max-w-xl" id="update_pass" style="display: none">
                  @include('profile.partials.update-password-form')
              </div>

          </div>
          
       
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">Deliverd Orders</span> 
                  </p>
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
                                shop
                            </th>
        
                            <th class="text-center">
                                Product
                            </th>
                            <th>
                                quantity
                            </th>
                            <th>
                                Payment_method
                            </th>
                            
                            <th>
                              Total_price

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
                    <td><img src="{{ url('/images/' . $order->product->image) }}" alt="" width="70px"></td>

                     <td>{{$order->shop->name}}</td>
                     <td>{{$order->product->name}}</td>                   
                    <td>{{$order->quantity}}</td>
                    {{-- <td>{{$order->address}}</td>
                    <td>{{$order->city}}</td> --}}
                    <td>{{$order->payment_method}}</td>
                    <td>{{$order->total}} JD</td>

                </tr>
                @php
                $i++;
            @endphp
                @endforeach
        
                    </tbody>
                </table>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
     
     
  @endsection
 
  @section('scripts')
    <script>
        const update = document.getElementById('update');
        const update_pass = document.getElementById('update_pass');
        const profile_info = document.getElementById('profile_info');

        update.addEventListener('click', function() {
            update_pass.style.display = 'block';
            profile_info.style.display = 'none';
        });
    </script>
@endsection
    