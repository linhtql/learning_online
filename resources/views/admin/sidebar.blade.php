<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin-home') }}" class="brand-link">
    <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Name</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-align-justify"></i>
            <p>
              Danh mục
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ URL::to('/admin/categories/add') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm danh mục</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/admin/categories/list') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Xem danh mục</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-align-justify"></i>
            <p>
              Khoá học
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ URL::to('/admin/courses/add') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm khoá học</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/admin/categories/list') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Xem khoá học</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</aside>