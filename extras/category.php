<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: signup/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: signup/login.php");
  }
?>
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


  <!-- Template Main CSS File -->
  <link href="assets/css/stylemain.css" rel="stylesheet">

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
</style>


</head>

<body>


    <!-- ======= Header Section ======= -->
    <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.php">SPRINKLES<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo me-auto me-lg-0">
        <img src="assets/img/logoname.png" style="width:150px; max-height:60px;" alt="" class="img-fluid">
      </a>
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php">About</a></li>
          <li><a class="nav-link scrollto " href="index.php">Offers</a></li>
          <li class="dropdown"><a class="nav-link scrollto active" href="category.php"><span>Category</span><i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- <li><a href="#">Drop Down 1</a></li> 
                   <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="category.php">Pastries</a></li>
              <li><a href="category.php">Cupcake</a></li>
              <li><a href="category.php">Brownies</a></li>
              <li><a href="category.php">Chocolate</a></li>
              <li><a href="category.php">Cookies</a></li>
              <li><a href="category.php">Donuts</a></li>
              <li><a href="category.php">Cake</a></li>
              <li><a href="category.php">Ice-Cream</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact/contactPage.php">Contact</a></li>
          <li><a  href="FAQ/index.php">FAQ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="editt.php" class="get-started-btn scrollto">Switch to Selling</a>
      <?php  if (isset($_SESSION['username'])) : ?>
        <a a href="index.php?logout='1'" class="get-started-btn scrollto"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
      <?php endif ?>
    </div>
  </header>
  <!-- Header Section End-->

  <main id="main">

    <section id="catHeader" class="catHeader">
      <div class="container">        
        <h1>DONUTS</h1>

        <img src="assets/img/menu/cookies.jpg" alt="">
      </div>
    </section>


    <!-- ======= Sellers List Section (Filter) ======= -->
    <section id="seller" class="seller section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>FILTER BY</h2>
          <p>ORDER FROM YOUR FAVOURITE SELLER</p>
        </div>


        <div class="row seller-container">

          <div class="col-lg-6 seller-item filter-starters d-flex justify-content-left align-content-center">
            <div class="seller-wrap">
              <div>
                <img src="assets/img/menu/brownies.jpg" class="seller-img" alt="">
              </div>
              <div class="seller-content d-flex flex-column justify-content-center">
                <div class="seller-sellerDetails">
                  <a href="sellerPage.php">Lobster Bisque</a>
                  <!-- <span >Thane</span> -->
                  <p>Lorem, deren, trataro, filede, nerada</p>
                </div>
                <div class="seller-elements">
                  <a href="sellerPage.php"><i class="fa fa-star"></i>4.5<span class="buttonhover">View</span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 seller-item filter-starters d-flex justify-content-left align-content-center">
            <div class="seller-wrap">
              <div>
                <img src="assets/img/menu/cake.jpg" class="seller-img" alt="">
              </div>
              <div class="seller-content d-flex flex-column justify-content-center">
                <div class="seller-sellerDetails">
                  <a href="sellerPage.php">Lobster Bisque</a>
                  <!-- <span >Thane</span> -->
                  <p>Lorem, deren, trataro, filede, nerada</p>
                </div>
                <div class="seller-elements">
                  <a href="sellerPage.php"><i class="fa fa-star"></i>4.5<span class="buttonhover">View</span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 seller-item filter-starters d-flex justify-content-left align-content-center">
            <div class="seller-wrap">
              <div>
                <img src="assets/img/menu/chocolate.jpg" class="seller-img" alt="">
              </div>
              <div class="seller-content d-flex flex-column justify-content-center">
                <div class="seller-sellerDetails">
                  <a href="sellerPage.php">Lobster Bisque</a>
                  <!-- <span >Thane</span> -->
                  <p>Lorem, deren, trataro, filede, nerada</p>
                </div>
                <div class="seller-elements">
                  <a href="sellerPage.php"><i class="fa fa-star"></i>4.5<span class="buttonhover">View</span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 seller-item filter-starters d-flex justify-content-left align-content-center">
            <div class="seller-wrap">
              <div>
                <img src="assets/img/menu/cookies.jpg" class="seller-img" alt="">
              </div>
              <div class="seller-content d-flex flex-column justify-content-center">
                <div class="seller-sellerDetails">
                  <a href="sellerPage.php">Lobster Bisque</a>
                  <!-- <span >Thane</span> -->
                  <p>Lorem, deren, trataro, filede, nerada</p>
                </div>
                <div class="seller-elements">
                  <a href="sellerPage.php"><i class="fa fa-star"></i>4.5<span class="buttonhover">View</span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 seller-item filter-starters d-flex justify-content-left align-content-center">
            <div class="seller-wrap">
              <div>
                <img src="assets/img/menu/cupcake.jpg" class="seller-img" alt="">
              </div>
              <div class="seller-content d-flex flex-column justify-content-center">
                <div class="seller-sellerDetails">
                  <a href="sellerPage.php">Lobster Bisque</a>
                  <!-- <span >Thane</span> -->
                  <p>Lorem, deren, trataro, filede, nerada</p>
                </div>
                <div class="seller-elements">
                  <a href="sellerPage.php"><i class="fa fa-star"></i>4.5<span class="buttonhover">View</span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 seller-item filter-starters d-flex justify-content-left align-content-center">
            <div class="seller-wrap">
              <div>
                <img src="assets/img/menu/donut.jpg" class="seller-img" alt="">
              </div>
              <div class="seller-content d-flex flex-column justify-content-center">
                <div class="seller-sellerDetails">
                  <a href="sellerPage.php">Lobster Bisque</a>
                  <!-- <span >Thane</span> -->
                  <p>Lorem, deren, trataro, filede, nerada</p>
                </div>
                <div class="seller-elements">
                  <a href="sellerPage.php"><i class="fa fa-star"></i>4.5<span class="buttonhover">View</span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 seller-item filter-starters d-flex justify-content-left align-content-center">
            <div class="seller-wrap">
              <div>
                <img src="assets/img/menu/ice-cream.jpg" class="seller-img" alt="">
              </div>
              <div class="seller-content d-flex flex-column justify-content-center">
                <div class="seller-sellerDetails">
                  <a href="sellerPage.php">Lobster Bisque</a>
                  <!-- <span >Thane</span> -->
                  <p>Lorem, deren, trataro, filede, nerada</p>
                </div>
                <div class="seller-elements">
                  <a href="sellerPage.php"><i class="fa fa-star"></i>4.5<span class="buttonhover">View</span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 seller-item filter-starters d-flex justify-content-left align-content-center">
            <div class="seller-wrap">
              <div>
                <img src="assets/img/menu/pastries.jpg" class="seller-img" alt="">
              </div>
              <div class="seller-content d-flex flex-column justify-content-center">
                <div class="seller-elements">
                  <a href="sellerPage.php">Lobster Bisque</a>
                  <!-- <span >Thane</span> -->
                  <p>Lorem, deren, trataro, filede, nerada</p>
                </div>
                <div class="seller-elements">
                  <a href="sellerPage.php"><i class="fa fa-star"></i>4.5<span class="buttonhover">View</span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 seller-item filter-starters d-flex justify-content-left align-content-center">
            <div class="seller-wrap">
              <div>
                <img src="assets/img/menu/cake.jpg" class="seller-img" alt="">
              </div>
              <div class="seller-content d-flex flex-column justify-content-center">
                <div class="seller-elements">
                  <a href="sellerPage.php">Lobster Bisque</a>
                  <!-- <span >Thane</span> -->
                  <p>Lorem, deren, trataro, filede, nerada</p>
                </div>
                <div class="seller-elements">
                  <a href="sellerPage.php"><i class="fa fa-star"></i>4.5<span class="buttonhover">View</span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 seller-item filter-starters d-flex justify-content-left align-content-center">
            <div class="seller-wrap">
              <div>
                <img src="assets/img/menu/chocolate.jpg" class="seller-img" alt="">
              </div>
              <div class="seller-content d-flex flex-column justify-content-center">
                <div class="seller-sellerDetails">
                  <a href="sellerPage.php">Lobster Bisque</a>
                  <!-- <span >Thane</span> -->
                  <p>Lorem, deren, trataro, filede, nerada</p>
                </div>
                <div class="seller-elements">
                  <a href="sellerPage.php"><i class="fa fa-star"></i>4.5<span class="buttonhover">View</span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 seller-item filter-starters d-flex justify-content-left align-content-center">
            <div class="seller-wrap">
              <div>
                <img src="assets/img/menu/ice-cream.jpg" class="seller-img" alt="">
              </div>
              <div class="seller-content d-flex flex-column justify-content-center">
                <div class="seller-sellerDetails">
                  <a href="sellerPage.php">Lobster Bisque</a>
                  <!-- <span >Thane</span> -->
                  <p>Lorem, deren, trataro, filede, nerada</p>
                </div>
                <div class="seller-elements">
                  <a href="sellerPage.php"><i class="fa fa-star"></i>4.5<span class="buttonhover">View</span></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
  <!-- ======= Sellers List Section (Filter) End ======= -->






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
              <li><i class="bx bx-chevron-right"></i><a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="index.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="index.php">Offers</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="contact/contactPage.php">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="FAQ/index.php">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Categories</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a href="category.php">Cupcake</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="category.php">Brownies</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="category.php">Pastries</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="category.php">Donuts</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="category.php">Ice-Cream</a></li>
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


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

</body>

</html>