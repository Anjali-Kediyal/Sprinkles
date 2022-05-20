<?php include('partials-front/menu.php'); ?>
<style>
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

  .btn-primary{
      background : #cda45e;
  }

  main{
    margin-top: 0px !important;
  }

  #header{
      background: transparent;
  }

  #footer .footer-top .footer-newsletter form {
    margin-top: 30px;
    display: flex;
    padding: 5px;
    align-items: center;
    justify-content: flex-start;
  }

  #footer input.mainnn {
    background: transparent;
    outline: none;
    border: 0px;
}

#footer .footer-top .footer-newsletter form input[type=submit] {
    margin-top: 0px;
}

#footer .form-control{
    border: 0px;
    background-color: #fff0;
}

#footer .footer-top .footer-newsletter form input[type=submit] {
    margin-bottom: 0px;
}

#footer .form-input{
    height: 10px;
}

</style>

<?php
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center flex-column">

    <div class="container" data-aos="fade-up">
      <div class="row align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="150">

        <div class="col-xl-7 col-lg-8">
          <h1>A sweet escape from the ordinary<span>.</span></h1>
          <h2>The taste of home-baked goodness.</h2>
        </div>

        <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
              <div class="col-md-6">

                    <form class="form" action="<?php echo SITEURL; ?>food-search.php" method="POST">
                        <input type="search" class="form-control form-input" name="search" placeholder="Search for Product.." required>
                        <span class="left-pan"><input type="submit" name="submit" value="Search" class="btnn" style="margin-bottom: 10px;"></span>
                    </form>

              </div>
          </div>
        </div>


      </div>
    </div>

  </section>
  <!-- Hero Section End-->


  <main id="main">


    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container">
        <div class="aboutwrap">
          <div class="about-details">
            <h4>WELCOME</h4>
            <h1>WE SERVE SWEETS FROM YOUR FAVOURITE BAKER</h1>
            <p class="paraheading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vero reiciendis magni? Officia hic sint, ducimus voluptas sapiente dolore? Ullam enim tempora corporis molestias? </p>
            <a class="buttondesign buttonhover" href="#categories">Explore Menu<i class="fas fa-shopping-cart"></i></a>
          </div>
          <div class="donutpic">
            <img src="assets/img/menu/d1.jpg" alt="" width="400px">
          </div>
        </div>
      </div>

    </section>
    <!-- About Section End-->


    <!-- offers Section -->
    <section id="offers" class="offerwrap">

      <div class="offer">
        <div class="offer-details">
          <h2>GET UPTO <span> 40% OFF !</span><br>ON ALL ORDERS </h2>
          <a href="foods.php">ORDER NOW <i class="fas fa-shopping-cart"></i></a>
        </div>
      </div>

    </section>
    <!-- End offers Section -->


    <!-- CAtegories Section Starts Here -->
    <section id="categories" class="categories">
        <div class="container">
        <div class="section-title">
          <h2>Our Categories</h2>
          <p>Explore From the Categories</p>
        </div>
            <?php
                //Create SQL QUery to display categories from database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes'";
                // Limit 3 will display only 3 categories in main page
                //Execute the query
                $res = mysqli_query($conn,$sql);
                //Count rows to check whether category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //Categories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the values like title, image name, id
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>

                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                        <div class="box-3 float-container">
                            <?php
                                //Check whether image is available or not
                                if($image_name=="")
                                {
                                    //Display message
                                    echo "<div class='error'>Image not available</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve" width="10px" height="200px">
                                    <?php
                                }
                            ?>

                            <h3 class="float-text text-white"><?php echo $title; ?></h3>
                        </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not available
                    echo "<div class='error'>Category not found</div>";
                }
            ?>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
        <div class="section-title">
          <h2>Our Menu</h2>
          <p>HIGH-IN SUGAR</p>
        </div>
            <?php
                //Getting foods from database that are active
                //SQL Query
                $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 4 ";

                //Execute the query
                $res2 = mysqli_query($conn,$sql2);

                //Count Rows
                $count2 = mysqli_num_rows($res2);

                //Check Whether Food Available or not
                if($count2>0)
                {
                    //Food Available
                    while($row=mysqli_fetch_assoc($res2))
                    {
                        //Get all the values
                        $id = $row['id'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $username = $row['username'];
                        $supplier_location = $row['supplier_location'];
                        $image_name = $row['image_name'];
                        ?>

                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                <?php
                                    //Check whether image is available or not
                                    if($image_name=="")
                                    {
                                        //Image not available
                                        echo "<div class='error'>Image not found</div>";
                                    }
                                    else
                                    {
                                        //Image available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                            </div>

                            <div class="food-menu-desc">
                                <span class="food-title"><?php echo $title ?></span>
                                <span class="food-price">Rs.<?php echo $price; ?></span>
                                <p class="username"><?php echo "Supllier: ".$username.",".$supplier_location ?></p>

                                <p class="food-detail">
                                    <?php echo $description; ?>
                                </p>
                                <!-- <br> -->

                                <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="buttondesign btnn"> Order Now </a>

                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //Food not available
                    echo "<div class='error'></div>";
                }
            ?>



            <div class="clearfix"></div>



        </div>

        <p class="text-center">
            <a href="foods.php">See All Products</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->


  <!-- ======= videoSection Section ======= -->
  <section id="videoSection" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="50">

        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=gFegXQJBA78" class="glightbox play-btn"></a>
        </div>

    </div>
  </section><!-- videoSection Section End -->


<!-- =======  F.A.Q Section ======= -->
<section id="faq">

<div class="container" style=" margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-12 accordion_one">

        <div class="section-title"  style="margin-top: 50px;">
            <p>FREQUENTLY ASKED QUESTIONS</p>
        </div>
            <div class="panel-group"  style="margin-top: 10px;">
                <?php foreach ($faqs as $faq): ?>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#faq-<?php echo $faq['id']; ?>" aria-expanded="false" class="collapsed">
                                    <?php echo $faq['question']; ?>
                                </a>
                            </h4>
                        </div>

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
    <!-- End  F.A.Q Section -->

  </main>



<?php include('partials-front/footer.php'); ?>