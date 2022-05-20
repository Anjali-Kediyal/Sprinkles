<?php include('partials/menuu.php');?>


        <!-- Main content section start -->
        <div class="main-content paddings">
            <div class="wrapper">
                <h1>DASHBOARD</h1>

                <div class="col-4 text-center">
                <a href="http://localhost/main/Supplier/index.php">

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
                <a href="http://localhost/main/Supplier/manage-food.php">

                    <?php

                        // Getting supplier id to fetch data added by particular supplier
                        $supplier = $_SESSION['username'];

                        $sql2 = "SELECT * FROM tbl_food WHERE username='$supplier'";
                        //Execute Query
                        $res2 = mysqli_query($conn, $sql2);
                        //Count rows
                        $count2 =  mysqli_num_rows($res2);
                    ?>

                    <h1><?php echo $count2; ?></h1><br>
                    PRODUCTS
                </div>
                <div class="col-4 text-center">
                <a href="http://localhost/main/Supplier/manage-order.php">

                    <?php
                        // Getting supplier id to fetch data added by particular supplier
                        $supplier = $_SESSION['username'];

                        $sql3 = "SELECT * FROM tbl_order WHERE supplier_username='$supplier'";
                        //Execute Query
                        $res3 = mysqli_query($conn, $sql3);
                        //Count rows
                        $count3 =  mysqli_num_rows($res3);
                    ?>

                    <h1><?php echo $count3; ?></h1><br>
                    TOTAL ORDERS
                </div>
                <div class="col-4 text-center">
                <a href="http://localhost/main/Supplier/feedback.php">

                    <?php

                        $sql5 = "SELECT * FROM feedback WHERE supplier_username='$supplier'";
                        //Execute Query
                        $res5 = mysqli_query($conn, $sql5);
                        //Count rows
                        $count5 =  mysqli_num_rows($res5);
                    ?>

                    <h1><?php echo $count5; ?></h1><br>
                    FEEDBACK
                </div>
                <div class="col-4 text-center">
                <a href="http://localhost/main/Supplier/manage-order.php">
                <?php
                    //Create Sql Query to get revenue generated
                    //Aggrigate function in SQl
                    $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE supplier_username='$supplier' AND status='Delivered'";

                    //Execute the query
                    $res4 = mysqli_query($conn, $sql4);

                    //Get the value
                    $row4 = mysqli_fetch_assoc($res4);

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
