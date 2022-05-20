<?php include('partials/menuu.php');?>
        <!-- Main content section start -->
        <div class="main-content paddings">
            <div class="wrapper">
                <h1>DASHBOARD</h1><br>

                <div class="col-4 text-center">
                <a href="http://localhost/main/admin/manage-supplier.php">

                    <?php
                        $sql = "SELECT * FROM sellers";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count rows
                        $count =  mysqli_num_rows($res);
                    ?>

                    <h1><?php echo $count; ?></h1><br>
                    SUPPLIERS
                </div>
                <div class="col-4 text-center">
                <a href="http://localhost/main/admin/manage-category.php">

                    <?php
                        $sql = "SELECT * FROM tbl_category";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count rows
                        $count =  mysqli_num_rows($res);
                    ?>

                    <h1><?php echo $count; ?></h1><br>
                    CATEGORIES
                </div>
                <div class="col-4 text-center">
                <a href="http://localhost/main/admin/manage-food.php">

                    <?php
                        $sql2 = "SELECT * FROM tbl_food";
                        //Execute Query
                        $res2 = mysqli_query($conn, $sql2);
                        //Count rows
                        $count2 =  mysqli_num_rows($res2);
                    ?>

                    <h1><?php echo $count2; ?></h1><br>
                    PRODUCTS
                </div>
                <div class="col-4 text-center">
                <a href="http://localhost/main/admin/manage-order.php">

                    <?php
                        $sql3 = "SELECT * FROM tbl_order";
                        //Execute Query
                        $res3 = mysqli_query($conn, $sql3);
                        //Count rows
                        $count3 =  mysqli_num_rows($res3);
                    ?>

                    <h1><?php echo $count3; ?></h1><br>
                    TOTAL ORDERS
                </div>
                <div class="col-4 text-center">
                <a href="http://localhost/main/admin/feedback.php">

                    <?php
                        $sql4 = "SELECT * FROM feedback";
                        //Execute Query
                        $res4 = mysqli_query($conn, $sql4);
                        //Count rows
                        $count4 =  mysqli_num_rows($res4);
                    ?>

                    <h1><?php echo $count4; ?></h1><br>
                    FEEDBACK
                </div>
                <div class="col-4 text-center">
                <a href="http://localhost/main/admin/manage-order.php">

                    <?php
                        //Create Sql Query to get revenue generated
                        //Aggrigate function in SQl
                        $sql5 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                        //Execute the query
                        $res5 = mysqli_query($conn, $sql5);

                        //Get the value
                        $row4 = mysqli_fetch_assoc($res5);

                        //Get the total revenue
                        $total_revenue = $row4['Total'];
                    ?>

                    <h1><?php echo $total_revenue; ?></h1><br>
                    TOTAL REVENUE
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Main content section ends -->
