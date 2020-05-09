<!DOCTYPE html>
<html>
<head>
  @include('layouts/head')
</head>

<body class="skin-blue sidebar-mini fixed sidebar-mini-expand-feature">
<div class="wrapper">
  <header class="main-header">    
    <a href="index2.html" class="logo">    
      <span class="logo-mini"><b>L</b>T</span>      
      <span class="logo-lg"><b>Lara</b>LTE</span>
    </a>    
    @include('layouts/navbar')
  </header>    
  
  @include('partials.main-sidebar.default-main-sidebar')  

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>  
    @yield('main-content')    
  </div>  

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  @include('partials.control-sidebar.default-control-sidebar')  
</div>
  @include('layouts/script')
</body>
</html>
