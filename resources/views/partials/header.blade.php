<!DOCTYPE html>
<html lang="en">

<head>
<base href="/public">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BingHr </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="admin/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="admin/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="admin/images/favicon.png" />

  <link rel="stylesheet" href="asset/style.css">

</head>
<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <!-- <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/star-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div> -->
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="admin/index.html">
            <!-- <img src="admin/images/logo.svg" alt="logo" /> -->
            <h4>Users Admin</h4>
          </a>
          <a class="navbar-brand brand-logo-mini" href="admin/index.html">
            <!-- <img src="admin/images/logo-mini.svg" alt="logo" /> -->
            <h4>Users Admin</h4>
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
          <!-- left -->
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h3 class="welcome-sub-text">Users </h3>
          </li>

          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Year </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left">Year</p>
              </a>
              <div class="dropdown-divider"></div>
            </div>
          </li>

          <!-- <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li> -->

          <li class="nav-item">
            <form class="search-formm" action="#">
              <!-- <i class="icon-search"></i> -->
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
              <!-- <i class="icon-search"></i> -->
            </form>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Language </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left"></p>
              </a>
              <div class="dropdown-divider"></div>
            </div>
          </li>

          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Reports </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left"></p>
              </a>
              <div class="dropdown-divider"></div>
            </div>
          </li>

          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Projects </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left"></p>
              </a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i style="" class="icon-mail icon-lg"></i>
              <span style="background-color:blue" class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
            </div>
          </li>

          <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span style="background-color:blue" class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
            </div>
          </li>

          <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-user"></i>
            </a>
          </li>
        
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>