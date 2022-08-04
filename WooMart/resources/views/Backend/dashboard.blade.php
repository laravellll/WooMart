<!DOCTYPE html>
<html>
@include('Backend.layouts.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('Backend.layouts.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  @include('Backend.layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  @yield('main_content')
  <!-- /.content-wrapper -->
  
  @include('Backend.layouts.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('Backend.layouts.script')
<!-- jQuery -->

</body>
</html>
