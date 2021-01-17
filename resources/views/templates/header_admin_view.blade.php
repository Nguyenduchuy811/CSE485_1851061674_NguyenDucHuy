<?php 
  $user_session = Session::get('username');
?>

<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="css/css.css">
  <link rel="stylesheet" href="css/admin_menu_sidebar.css">
	<link rel="stylesheet" href="css/responsive.css">
  </head>
  <body>
  
<body class="login_page_view admin_page_view">
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Admin Page</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name"><?php echo $user_session[0]['firstname'] ?>
            <strong><?php echo $user_session[0]['lastname'] ?></strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="<?php echo URL::to('/dashboard'); ?>">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="<?php echo URL::to('/dashboard'); ?>">Dashboard 1
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a>
              <i class="fa fa-shopping-cart"></i>
              <span>User</span>
              <span class="badge badge-pill badge-danger">3</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="<?php echo URL::to('/list_user'); ?>">List user</a>
                </li>
                <li>
                  <a href="<?php echo URL::to('/add_user'); ?>">Add user</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a>
              <i class="far fa-gem"></i>
              <span>MemberCv</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="<?php echo URL::to('/list_member_cv'); ?>">List MemberCV</a>
                </li>
                <li>
                  <a href="<?php echo URL::to('/add_member_cv'); ?>">Add MemberCv</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a>
              <i class="fa fa-chart-line"></i>
              <span>Profile_group</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="<?php echo URL::to('/list_education'); ?>">List education profile</a>
                </li>
                <li>
                  <a href="<?php echo URL::to('/add_education'); ?>">Add education profile</a>
                </li>
                <li>
                  <a href="<?php echo URL::to('/list_experience'); ?>">List experience</a>
                </li>
                <li>
                  <a href="<?php echo URL::to('/add_experience'); ?>">Add experience</a>
                </li>
                <li>
                  <a href="<?php echo URL::to('/list_profile_content'); ?>">List profile content</a>
                </li>
                <li>
                  <a href="<?php echo URL::to('/add_profile_content'); ?>">Add profile content</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a>
              <i class="fa fa-globe"></i>
              <span>Thank letter</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="<?php echo URL::to('/list_thank_letter'); ?>">List thank letter</a>
                </li>
                <li>
                  <a href="<?php echo URL::to('/add_thank_letter'); ?>">Add thank letter</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a>
              <i class="fa fa-globe"></i>
              <span>Banner</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="<?php echo URL::to('/list_banner'); ?>">List banner</a>
                </li>
                <li>
                  <a href="<?php echo URL::to('/add_banner'); ?>">Add banner</a>
                </li>
              </ul>
            </div>
          </li>

          <!-- <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li> -->
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="<?php echo URL::to('/logoutaction'); ?>">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>

    <!-- </header> -->
    <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">