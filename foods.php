<?php include('partials-front/menu.php'); ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section style="margin-top: 100px;" class="food-search text-center">
        <div class="container">

            <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="buttondesign search">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->




    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Dessert Menu</h2>

            <?php
                //Getting foods from database that are active
                //SQL Query
                $sql2 = "SELECT * FROM tbl_food WHERE active='Yes'";

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

    </section>
    <!-- fOOD Menu Section Ends Here -->



<?php include('partials-front/footer.php'); ?>