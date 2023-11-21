<!-- Main Sidebar Container -->
<style>
  .main-sidebar{
    background-color:#27214a;
  }
  .nav-pills .nav-link {
    color: #fff;
    font: 1em sans-serif;
  }
  .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
    color: #fff;
    background: #590f87;
    background: -o-linear-gradient(45deg, #590f87 0, #ff0076 50%, #590f87 100%);
    background: linear-gradient(45deg, #590f87 0, #ff0076 50%, #590f87 100%);
    
    border-radius: 10px; 

  }

  .navbar-line {
    height: 40px; /* Adjust height as needed */
    width: 1px;
    background-color: #fff; /* Color of the vertical line */
    margin: 0 10px; /* Adjust margin as needed */
}
.navleft {
    display: flex;
    align-items: center;
    padding-left: 5px;
    margin-top: 10px;
}
</style>
<aside class="main-sidebar  elevation-4" >
        
        <div class="navleft">
          <img src="{{ asset('./images/logo1-removebg-preview.png') }}" alt="Logo" style="width: 50px">
          <div class="navbar-line"></div>

          <a class="navbar-brand" href="#" style="color: #fff">Virtual Eye</a>
      </div>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
              <img src="{{url('/images/'. session('loginimage') ) }}" class="img-circle elevation-2" alt="User Image" width="60px">

            </div> --}}
            <div class="info">
              <h6 style="color: white">Welcome {{session('loginname')}}</h6>

            </div>
          </div>

          <!-- SidebarSearch Form -->
          {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div> --}}

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
              <li class="nav-item menu-open">
                
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link active">
                      <i class="nav-icon fas fa-home"></i>
                      <p>website home</p>
                    </a>
                  </li>


                </ul>
              </li>

              <li class="nav-item">

                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Top Navigation</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Top Navigation + Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/boxed.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Boxed</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Sidebar <small>+ Custom Area</small></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/fixed-topnav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Navbar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/fixed-footer.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Footer</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Collapsed Sidebar</p>
                    </a>
                  </li>
                </ul>
              </li>



              <li class="nav-item">
                <a href="{{ route('dashboard.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                    <p>Dashboard home</p>
                </a>
            </li>

              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                    <p>Users</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Admins</p>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{ route('floor.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>
                    Floors

                  </p>
                </a>

              </li>

              <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Category
                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{ route('shop.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Shops

                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{ route('product.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-money-bill"></i>
                  <p>
                    products

                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{ route('cart.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Carts

                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{ route('review.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Reviews

                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{ route('payment.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-credit-card"></i>
                    Payments

                  </p>
                </a>

              </li>
            
              <li class="nav-item">
                <a href="{{ route('order.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Orders
                  </p>
                </a>

              </li>


              <li class="nav-item">
                <a href="http://127.0.0.1:8000/dashboard/contactus" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Mailbox

                  </p>
                </a>
                
              </li>


          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      {{-- @if(!session('loginname'))
        {{redirect()->route('adminLogin')}}
      @endif --}}
