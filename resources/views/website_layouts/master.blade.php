<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


 @include('website_layouts.headerlinks');
 @yield('css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 

 @include('website_layouts.navbar');

 @include('sweetalert::alert')


  
    <!-- /.content-header -->

    @yield('content')
  </div>
  <!-- /.content-wrapper -->
 @include('website_layouts.footer');

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('website_layouts.footerscripts');

@yield('scripts')


</body>
</html>