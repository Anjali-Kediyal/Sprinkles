<?php include('partials-front/menu.php'); ?>

    <!-- CAtegories Section Starts Here -->
    <section id="categories" class="categories">
        <div class="container">
        <div class="section-title">
          <h2>Our Menu</h2>
          <p>HIGH-IN SUGAR</p>
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
                                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve" width="130px" height="250px">
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




<?php include('partials-front/footer.php'); ?>