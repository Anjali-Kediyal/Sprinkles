<?php include("../../config/constants.php") ?>

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
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
  " rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">



<!-- include CSS -->
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../../font-awesome/css/font-awesome.css" />


<!-- include JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>



  <!-- Template Main CSS File -->
  <link href="../../assets/css/stylemain.css" rel="stylesheet">

    <!-- font awesome -->
  <script src="https://kit.fontawesome.com/41354f2a54.js" crossorigin="anonymous"></script>


  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


<style>
  #header{
    background: #000;
  }
  main{
      margin-top: 50px;
  }
  .accordion_one .panel-group {
      border: 1px solid #f1f1f1;
      margin-top: 100px
  }
  a:link {
      text-decoration: none
  }
  .accordion_one .panel {
      background-color: transparent;
      box-shadow: none;
      border-bottom: 0px solid transparent;
      border-radius: 0;
      margin: 0
  }
  .accordion_one .panel-default {
      border: 0
  }
  .accordion-wrap .panel-heading {
      padding: 0px;
      border-radius: 0px
  }
  h4 {
      font-size: 18px;
      line-height: 24px
  }
  .accordion_one .panel .panel-heading a.collapsed {
      color: #000;
      display: block;
      padding: 12px 30px;
      border-top: 0px
  }
  .accordion_one .panel .panel-heading a {
      display: block;
      padding: 12px 30px;
      background: #fff;
      color: #cda45e;
      border-bottom: 1px solid #f1f1f1
  }
  .accordion-wrap .panel .panel-heading a {
      font-size: 14px
  }
  .accordion_one .panel-group .panel-heading+.panel-collapse>.panel-body {
      border-top: 0;
      padding-top: 0;
      padding: 25px 30px 30px 35px;
      background: #fff;
      color: #000;
  }
  .img-accordion {
      width: 81px;
      float: left;
      margin-right: 15px;
      display: block
  }
  .accordion_one .panel .panel-heading a.collapsed:after {
      content: "\2b";
      color: #cda45e;
      background: #f1f1f1;
  }
  .accordion_one .panel .panel-heading a:after,
  .accordion_one .panel .panel-heading a.collapsed:after {
      font-family: 'FontAwesome';
      font-size: 15px;
      width: 36px;
      line-height: 48px;
      text-align: center;
      background: #F1F1F1;
      float: left;
      margin-left: -31px;
      margin-top: -12px;
      margin-right: 15px
  }
  .accordion_one .panel .panel-heading a:after {
      content: "\2212"
  }
  .accordion_one .panel .panel-heading a:after,
  .accordion_one .panel .panel-heading a.collapsed:after {
      font-family: 'FontAwesome';
      font-size: 30px;
      font-weight: bold;
      width: 36px;
      height: 48px;
      line-height: 48px;
      text-align: center;
      background: #fff;
      float: left;
      margin-left: -31px;
      margin-top: -12px;
      margin-right: 15px
  }
</style>


</head>

<body>

  <!-- ======= Header Section ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.php">SPRINKLES<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
    <a href="index.php" class="logo me-auto me-lg-0">
        <img src="../../assets/img/logoname.png" style="width:150px; max-height:60px;" alt="" class="img-fluid">
    </a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="../../index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="../../foods.php">Desserts</a></li>
          <li><a class="nav-link scrollto " href="../../categories.php">Categories</a></li>
          <li><a class="nav-link scrollto" href="../../contactPage.php">Contact</a></li>
          <li><a class="active" href="admin/FAQ/index.php ">FAQ</a></li>
          <li><a class="nav-link scrollto " href="../../my-order.php">My Orders</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../signup/login.php" class="get-started-btn scrollto">Switch to Selling</a>
      <?php  if (isset($_SESSION['username'])) : ?>
        <a a href="../../index.php?logout='1'" class="get-started-btn scrollto"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
      <?php endif ?>
    </div>
  </header>
  <!-- ======= Header Section End ======= -->



<main id="main">

    <section id="faqq">

<!-- show all FAQs in a panel -->
<div class="container" style=" margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-12 accordion_one">

        <div class="section-title"  style="margin-top: 50px;">
            <p>FREQUENTLY ASKED QUESTIONS</p>
        </div>
            <div class="panel-group"  style="margin-top: 10px;">
                <?php foreach ($faqs as $faq): ?>
                    <div class="panel panel-default">

                        <!-- button to show the question -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#faq-<?php echo $faq['id']; ?>" aria-expanded="false" class="collapsed">
                                    <?php echo $faq['question']; ?>
                                </a>
                            </h4>
                        </div>

                        <!-- accordion for answer -->
                        <div id="faq-<?php echo $faq['id']; ?>" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                            <div class="panel-body">
                                <div class="text-accordion">
                                    <?php echo $faq['answer']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

    </section>


</main>






<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>SPRINKLES</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone : </strong> +1 5589 55488 55<br>
                <strong>Email : </strong>sprinkles@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a href="../../index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="../../foods.php">Desserts</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="../../categories.php">Categories</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="../../contactPage.php">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="admin/FAQ/index.php ">FAQ</a></li>
            </ul>
          </div>



          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Drop your Email-ID to get all the updates of our latest products</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>
  </footer>
<!-- ======= Footer End ======= -->



  <!-- Vendor JS Files extra-->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
