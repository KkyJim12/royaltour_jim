<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/admin-css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/admin-css/admin-custom.css">
    <link rel="stylesheet" href="/assets/admin-css/AdminLTE.min.css">
    <link rel="stylesheet" href="/assets/admin-css/all-skins.min.css">
    <link rel="stylesheet" href="/assets/admin-css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/admin-css/jquery-jvectormap.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <script src="/assets/admin-js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="/assets/admin-js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/admin-js/adminlte.min.js" type="text/javascript"></script>
    <script src="/assets/tinymce/tinymce.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body class="skin-blue">
    <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/admin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Royaltour</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <i class="fas fa-user"></i>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{session('user_email')}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-body">
                <a href="/logout-process">Log out</a>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">เมนูหลัก</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="treeview">
        <a href="#"><i class="fas fa-globe-americas"></i></i>  <span>หมวดหมู่</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
          <li><a href="/admin/admin-continent"><i class="fas fa-globe-asia"></i>  ทวีป</a></li>
          <li><a href="/admin/admin-country"><i class="fas fa-flag"></i>  ประเทศ</a></li>
          <li><a href="/admin/admin-city"><i class="fas fa-city"></i>  เมือง</a></li>
        </ul>
      </li>
      <li><a href="/admin/admin-airline"><i class="fas fa-plane"></i>  <span>สายการบิน</span></a></li>
      <li><a href="/admin/admin-branch"><i class="fas fa-code-branch"></i>  <span>สาขา</span></a></li>
      <li><a href="/admin/admin-staff"><i class="fas fa-user-alt"></i>  <span>พนักงาน</span></a></li>
      <li><a href="/admin/admin-tour"><i class="fas fa-map-marked"></i>  <span>ทัวร์</span></a></li>
      <li><a href="/admin/admin-banner"><i class="fas fa-chalkboard"></i> <span>แบนเนอร์</span></a></li>
      <li><a href="/admin/admin-slide"><i class="fab fa-slideshare"></i> <span>สไลด์</span></a></li>
      <li><a href="/admin/admin-payment"><i class="fas fa-money-bill-alt"></i> <span>การชำระเงิน</span></a></li>
      <li><a href="/admin/admin-aboutus"><i class="fas fa-info-circle"></i> <span>เกี่ยวกับเรา</span></a></li>
      <li><a href="/admin/admin-contact"><i class="fas fa-phone-volume"></i> <span>ติดต่อเรา</span></a></li>
      <li class="treeview">
        <a href="#"><i class="far fa-newspaper"></i>  <span>บทความ</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
          <li><a href="/admin/admin-article-cat"><i class="fas fa-book"></i>  หมวดหมู่บทความ</a></li>
          <li><a href="/admin/admin-article"><i class="fas fa-book"></i>  บทความ</a></li>
        </ul>
      </li>

      <li><a href="/admin/admin-gallery"><i class="fas fa-image"></i> ภาพประทับใจ</span></a></li>
      <li><a href="/admin/admin-seo"><i class="fas fa-cog"></i> <span>ตั้งค่า SEO</span></a></li>
      <li><a href="/admin/admin-contactinfo"><i class="fab fa-telegram-plane"></i> <span>ข้อมูลติดต่อ</span></a></li>
      <li><a href="/admin/admin-holiday"><i class="fas fa-calendar-alt"></i> <span>วันหยุดพิเศษ</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
<div class="content-wrapper">
  <section class="content-header">
    @yield('content-header')
  </section>
  <section class="content">
    @yield('content')
  </section>
</div>
@include('backend.backend-components.tinymce')
  </body>
</html>