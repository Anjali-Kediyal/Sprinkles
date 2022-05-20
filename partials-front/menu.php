<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sprinkles</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@900&family=Permanent+Marker&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
  " rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">

<!-- include CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />

<!-- include JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<!-- Template Main CSS File -->
<link href="assets/css/stylemain.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/foodsearch.css">

    <!-- font awesome -->
  <script src="https://kit.fontawesome.com/41354f2a54.js" crossorigin="anonymous"></script>


  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<style>
  header{
    background: #000;
  }
</style>

</head>

<body>

  <!-- ======= Header Section ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">
    <a href="index.php" class="logo me-auto me-lg-0">
        <img src="assets/img/logoname.png" style="width:150px; max-height:60px;" alt="" class="img-fluid">
    </a>

      <!-- navbar -->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="foods.php">Desserts</a></li>
          <li><a href="categories.php">Categories</a></li>
          <li><a href="contactPage.php">Contact</a></li>
          <li><a href="admin/FAQ/index.php">FAQ</a></li>
          <li><a href="my-order.php">My Orders</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- navbar -->

      <a href="Supplier/signup/login.php" class="get-started-btn scrollto">Switch to Selling</a>
      <?php  if (isset($_SESSION['username'])) : ?>
        <a a href="index.php?logout='1'" class="get-started-btn scrollto">Sign Out &nbsp; <i class="fa fa-sign-out" aria-hidden="true"></i></a>
      <?php endif ?>
    </div>
  </header>
  <!-- Header Section End-->

<main id="main" style="margin-top: 100px;">
