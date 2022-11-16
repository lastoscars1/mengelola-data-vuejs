
<!DOCTYPE html>

<html lang="en">
<head>
  @include('Template.Head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  
     @include('Template.Navbar')
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('Template.Sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
          <router-view></router-view>
        <!-- /.row -->
      
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

  <!-- Main Footer -->
  {{-- <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline ">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> --}}
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
   @include('Template.Script')
</body>

</html>
