<!doctype html>
<html lang="en-US">

<head>
  <!-- Required meta tags -->
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Icon CSS -->
  <link type="text/css" rel="stylesheet" href="../css/boxicons.min.css">
  <link type="text/css" rel="stylesheet" href="../css/icofont.min.css">
  <!-- Jquery UI CSS -->
  <link type="text/css" rel="stylesheet" href="css/jquery-ui.min.css">
  <!-- Custom CSS -->
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <link type="text/css" rel="stylesheet" href="css/responsive.css">
</head>

<body class="bg-theme bg-theme1">
  <div class="wrapper">
    <!-- =============== SIDEBAR START ================ -->
    <div class="sidebar sidebar-area shadow" id="sidebar">
      <div class="sideber-scroll-content">
        <div class="menu-bar d-xl-none">
          <i class="icofont-close"></i>
        </div>
        <div class="logo-area text-center">
          <a href="index.php">
            <img src="images/logo-icon.png" alt="Logo" width="40px" />
            <h5>Admin Panel</h5>
          </a>
        </div>
        <?php
        $path = $_SERVER["SCRIPT_FILENAME"];
        $crtPath = basename($path, ".php");
        ?>
        <div class="navigation-area">
          <p class="mb-0 pt-3 pb-2">Main Navigation</p>
          <nav class="navbar p-0">
            <ul class="navigation sub-menu w-100 mb-0 navbar-nav">
              <li class="dropdown">
                <a href="index.php" class="<?php if ($crtPath == 'index') {
                                              echo 'active';
                                            } ?>"><i class="fa fa-database mr-2"></i>Dashboard</a>
              </li>
              <li class="dropdown">
                <a href="#" class="<?php if ($crtPath == 'title_logo' || $crtPath == 'social' || $crtPath == 'copyright') {
                                      echo 'active';
                                    } ?>" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-database mr-2"></i>Site Option
                </a>
                <ul class="dropdown-menu">
                  <li><a href="title_logo.php"><i class="fa fa-database mr-2"></i>Title and Slogan</a></li>
                  <li><a href="social.php"><i class="fa fa-database mr-2"></i>Social</a></li>
                  <li><a href="copyright.php"><i class="fa fa-database mr-2"></i>Copyright</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="<?php if ($crtPath == 'pageadd' || $crtPath == 'pagelist') {
                                      echo 'active';
                                    } ?>" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-pager mr-2"></i>Pages</a>
                <ul class="dropdown-menu">
                  <li><a href="pageadd.php"><i class="fa fa-database mr-2"></i>Add Page</a></li>
                  <li><a href="pagelist.php"><i class="fa fa-database mr-2"></i>Page List</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="<?php if ($crtPath == 'categoryadd' || $crtPath == 'categorylist') {
                                      echo 'active';
                                    } ?>" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-database mr-2"></i>Category</a>
                <ul class="dropdown-menu">
                  <li><a href="categoryadd.php"><i class="fa fa-database mr-2"></i>Add Category</a></li>
                  <li><a href="categorylist.php"><i class="fa fa-database mr-2"></i>Category List</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="<?php if ($crtPath == 'slideradd' || $crtPath == 'sliderlist') {
                                      echo 'active';
                                    } ?>" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-database mr-2"></i>Slider</a>
                <ul class="dropdown-menu">
                  <li><a href="slideradd.php"><i class="fa fa-database mr-2"></i>Add Slider</a></li>
                  <li><a href="sliderlist.php"><i class="fa fa-database mr-2"></i>Slider List</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="<?php if ($crtPath == 'postadd' || $crtPath == 'postlist') {
                                      echo 'active';
                                    } ?>" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-database mr-2"></i>Posts</a>
                <ul class="dropdown-menu">
                  <li><a href="postadd.php"><i class="fa fa-database mr-2"></i>Add Post</a></li>
                  <li><a href="postlist.php"><i class="fa fa-database mr-2"></i>Post List</a></li>
                </ul>
              </li>
              <li>
                <a href="adduser.php" class="<?php if ($crtPath == 'adduser') {
                                                echo 'active';
                                              } ?>"><i class="fa fa-user mr-2"></i>Add User</a>
              </li>
              <li>
                <a href="?action=logout"><i class="fa fa-lock mr-2"></i>Logout</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- =============== SIDEBAR END ================ -->
    <!-- =============== NAVBAR START ================ -->
    <nav class="navbar navbar-expand fixed-top p-0">
      <ul class="navbar-nav mr-auto align-items-center nav-left">
        <div class="logo-area">
          <a href="index.php">
            <img src="images/logo-icon.png" alt="Logo" width="40px" />
            <h5>Admin Panel</h5>
          </a>
        </div>
        <div class="menu-bar pl-3">
          <i class="icofont-navigation-menu"></i>
        </div>
      </ul>
      <ul class="navbar-nav align-items-center pr-3 nav-right">
        <li class="nav-item message">
          <a href="" class="nav-link"><i class="bx bx-envelope"></i></a>
        </li>
        <li class="nav-item notification">
          <a href="" class="nav-link"><i class="bx bxs-bell"></i></a>
        </li>
        <li class="nav-item dropdown language">
          <a href="" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="bx bxs-flag-alt"></i>
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-item">
              <a href="">
                <img src="images/flags/united-kingdom.svg">
                <span>English<span>
              </a>
            </li>
            <li class="dropdown-item">
              <a href="">
                <img src="images/flags/bangladesh.svg">
                <span>Bangla<span>
              </a>
            </li>
            <li class="dropdown-item">
              <a href="">
                <img src="images/flags/india.svg">
                <span>Hindi<span>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown account">
          <a href="" class="nav-link pt-0" data-toggle="dropdown" aria-expanded="false">
            <img src="images/male_avatar.png" width="30px" alt="User Photo" />
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-item"><a href="">
                <div class="media">
                  <img src="images/male_avatar.png" alt="Profile Photo" class="mr-2" />
                  <div class="media-body" />
                  <p class="mb-0">Sujit Sarkar</p>
                  <p>example@gmail.com</p>
                </div>
  </div>
  </a></li>
  <li class="dropdown-item"><a href="">Inbox</a></li>
  <li class="dropdown-item"><a href="">Account</a></li>
  <li class="dropdown-item"><a href="">Setting</a></li>
  <li class="dropdown-item"><a href="">Logout</a></li>
  </ul>
  </li>
  </ul>
  </nav>
  <!-- =============== NAVBAR END ================ -->
  <div class="clearfix"></div>
  <main class="main">
    <section class="">
      <div class="container-fluid">