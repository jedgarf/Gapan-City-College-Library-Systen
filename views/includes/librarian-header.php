<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>GCC Library Management</title>

  <!-- logo -->
  <link rel="shortcut icon" href="../../../library/import-images/gcc-logo.png">

  <!-- Bootstrap 4.1 CSS -->
  <link rel="stylesheet" type="text/css" href="../../../library/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="../../../library/font-awesome/css/font-awesome.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../../../library/CSS/mycss.css">

  <!-- include the style of alertifyJS -->
    <link rel="stylesheet" href="../../../library/alertifyjs/css/alertify.min.css" >
    <!-- include a theme of AlertifyJS -->
    <link rel="stylesheet" href="../../../library/alertifyjs/css/themes/default.min.css" >
    <!-- AlertifyJS -->
  <script type="text/javascript" src="../../../library/alertifyjs/alertify.min.js"></script>
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../../../library/CSS/mycss.css">

  <!-- Jquery DataTables -->
  <link rel="stylesheet" type="text/css" href="../../../library/DataTables/datatables.min.css">

  
  <!-- Importing JQuery -->
  <script type="text/javascript" src="../../../library/jquery/jquery.min.js"></script>


<!------------------------------- Admin Template -------------------------------------------->

    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../../../library/admin_template/css/fontastic.css">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="../../../library/admin_template/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="../../../library/admin_template/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../../../library/admin_template/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../../../library/admin_template/css/custom.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

<!--------------------------------------------------------------------------------------------->

    
  <!-- Main Controller -->
  <script type="text/javascript" src="../../../controllers/MainController.js"></script>

  <!-- Controller Ajax -->
  <script type="text/javascript" src="../../../controllers/AjaxController.js"></script>

</head>
<body onload="lib_init()">

<!-- Side Navbar -->
<nav id="side-navbar" class="side-navbar">
  <div class="side-navbar-wrapper">
    <!-- Sidebar Header    -->
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <!-- User Info-->
      <div class="sidenav-header-inner text-center"><img src="#" alt="person" class="user-photo img-fluid rounded-circle">
        <h2 id="user-fullname" class="h6">User Name</h2><span id="user-role">Role</span>
      </div>
      <!-- Small Brand information, appears on minimized sidebar-->
      <div class="sidenav-header-logo"><a href="#" class="brand-small text-center"> <img src="#" alt="person" class="user-photo img-fluid rounded-circle"></a></div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <div class="main-menu mt-3">
      <h5 class="sidenav-heading">Main Menu</h5>
      <ul id="side-main-menu" class="side-menu list-unstyled">                  
        <li><a id="librarian-dashboard-button" title="Dashboard" href="#"> <i class="fa fa-columns"></i>Dashboard</a></li>

        <li><a id="librarian-borrowed-button" href="#" title="Borrowing Books"> <i class="fa fa-hand-lizard-o"></i>Borrowing</a></li>
        <li><a id="librarian-return-button" href="#" title="Returning Books"> <i class="fa fa-hand-lizard-o"></i>Returning</a></li>

        <li><a href="#bookDropdown" aria-expanded="false" data-toggle="collapse" title="Books"><i class="fa fa-book"></i>Books</a>
          <ul id="bookDropdown" class="collapse list-unstyled text-left">
            <li><a id="librarian-booklist-button" href="#" class="text-center" title="Book List">Book List</a></li>
            <li><a id="librarian-bookinventory-button" href="#" class="text-center" title="Book Inventory">Book Inventory</a></li>
          </ul>
        </li>
        <li><a href="#studentDropdown" aria-expanded="false" data-toggle="collapse" title="Students"><i class="fa fa-users"></i>Students</a>
          <ul id="studentDropdown" class="collapse list-unstyled text-left">
            <li><a id="librarian-studentlist-button" href="#" class="text-center" title="Student List">Student List</a></li>
            <li><a id="librarian-studentpenalty-button" href="#" class="text-center" title="Student with Penalty">Student with Penalty</a></li>
          </ul>
        </li>
        
        <li><a href="#settingDropdown" aria-expanded="false" data-toggle="collapse" title="Settings"><i class="fa fa-cog"></i>Settings</a>
          <ul id="settingDropdown" class="collapse list-unstyled text-left">
            <li><a id="librarian-adminprofile-button" href="#" class="text-center" title="Admin Profile">My Profile</a></li>
            <li><a id="librarian-about-button" href="#" class="text-center" title="About the Developer">About Us</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
<div class="page">

<!-- header -->
<div id="user-header">
  <div class="row text-center">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 pt-3">
      <img id="header-left-logo" src="../../../library/import-images/gcc-logo.png" alt="GCC Logo">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pt-4">
      <h6>Republic of the Philippines<br>
        <b>GAPAN CITY COLLEGE</b><br>
        Gapan City, Nueva Ecija<br>
      </h6>
      <h4 id="sys-title" class="mt-2">GCC LIBRARY MANAGEMENT</h4>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 pt-3">
      <img id="header-right-logo" src="../../../library/import-images/ne-logo.png" alt="NE Logo">
    </div>
  </div>
</div>
