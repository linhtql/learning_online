<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  @include('admin.sidebar')

  <!-- Content here -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      @include('alert')
      @yield('content')

    </section>
  </div>

  <!-- Main Footer -->
  @include('admin.footer')
</div>

<!-- REQUIRED SCRIPTS -->
  @include('admin.scripts')
</body>
</html>
