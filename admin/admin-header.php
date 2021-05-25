<?php

include "connection.php";


$logged_user = "null";
// session_start();
// $logged_user=  $_SESSION['User'];
require_once('admin-session.php');

?>



<?php
if ($page_id == 1001) {
  $dashboard = "active";
}
if ($page_id == 1002) {
  $audience = "active";
}
if ($page_id == 1003) {
  $posts = "active";
}
if ($page_id == 1004) {
  $manage_topic = "active";
}
if ($page_id == 1005) {
  $banned = "active";
}
if ($page_id == 1006) {
  $misc = "active";
}
if ($page_id == 1007) {
  $reports = "active";
}
if ($page_id == 1008) {
  $admins = "active";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../images/site-icon-white.png" />
  <link rel="icon" type="image/png" href="../images/site-icon-white.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?php echo $page_tittle ?></title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />

  



  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <!-- CSS Files -->
  <link href="css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

  <link rel="stylesheet" href="css/admin.css">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          <img src="../images/logo-dark.png" width="80%" alt="">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php echo $dashboard ?>">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php echo $audience ?>">
            <a class="nav-link" href="audience.php">
              <i class="material-icons">supervisor_account</i>
              <p>Audience</p>
            </a>
          </li>
          <li class="nav-item <?php echo $posts ?>">
            <a class="nav-link" href="posts.php">
              <i class="material-icons">content_paste</i>
              <p>Posts</p>
            </a>
          </li>
          <li class="nav-item <?php echo $manage_topic ?>">
            <a class="nav-link" href="manage-topic.php">
              <i class="material-icons">library_books</i>
              <p>Manage Topics</p>
            </a>
          </li>
          <li class="nav-item <?php echo $banned ?>">
            <a class="nav-link" href="banned.php">
              <i class="material-icons">remove_circle</i>
              <p>Banned Users</p>
            </a>
          </li>
          <li class="nav-item <?php echo $admins ?>">
            <a class="nav-link" href="admins.php">
              <i class="material-icons">admin_panel_settings</i>
              <p>Admins</p>
            </a>
          </li>
          <li class="nav-item <?php echo $misc ?>">
            <a class="nav-link" href="misc.php">
              <i class="material-icons">miscellaneous_services</i>
              <p>Misc</p>
            </a>
          </li>
          <li class="nav-item <?php echo $reports ?>">
            <a class="nav-link" href="reports.php">
              <i class="material-icons">notifications</i>
              <p>Reports</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../index.php">
              <i class="material-icons">language</i>
              <p>Visit Website</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"><?php echo $page_tittle ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search..." />
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">Account</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="logout.php?logout">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">