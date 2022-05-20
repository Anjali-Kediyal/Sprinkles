<?php include('partials-front/menu.php'); ?>

<style>
.buttondesign{
    padding: 8px 15px;
    font-size: 15px;
}
</style>


<section class="orderspage">
    <div class="section-title">
        <h2>MY ORDERS</h2>
        <p>Know Your Order History</p>
    </div>
    <div class="container">
    <div class="main-content">

        <?php
            if(isset($_SESSION['suc']))
            {
                echo $_SESSION['suc'];
                unset($_SESSION['suc']);
            }
            if(isset($_SESSION['fail']))
            {
                echo $_SESSION['fail'];
                unset($_SESSION['fail']);
            }
        ?>

        <table border="3px" bordercolor="#cda45e" width="100%" cellpadding="20px" cellspacing="15px">

            <thead bgcolor="#cda45e" style="margin: 20px;">
            <tr>
                <th>S.N</th>
                <th>Supplier</th>
                <th>Product</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>

        <?php
            //Getting customer id to fetch data from database
            $customer = $_SESSION['username'];

            //Get all the orders from database
            $sql = "SELECT * FROM tbl_order WHERE customer_name='$customer'";
            //Execute Query
            $res = mysqli_query($conn, $sql);
            //Count the rows
            $count = mysqli_num_rows($res);

            $sn = 1; // Serial number

            if($count>0)
            {
                //Order Available
                while($row=mysqli_fetch_assoc($res))
                {
                    //Get all the order details
                    $supplier = $row['supplier_username'];
                    $food = $row['food'];
                    $price = $row['price'];
                    $qty = $row['qty'];
                    $total = $row['total'];
                    $order_date = $row['order_date'];
                    $status = $row['status'];
                    ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $supplier; ?></td>
                        <td><?php echo $food; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $qty; ?></td>
                        <td><?php echo $total; ?></td>
                        <td><?php echo $order_date ?></td>

                        <td>
                            <?php
                                if($status=="Ordered")
                                {
                                    echo "<label>$status</label>";
                                }
                                elseif($status=="On Delivery")
                                {
                                    echo "<label style='color: orange; '>$status</label>";
                                }
                                elseif($status=="Delivered")
                                {
                                    echo "<label style='color: green; '>$status</label>";
                                }
                                elseif($status=="Cancelled")
                                {
                                    echo "<label style='color: red; '>$status</label>";
                                }
                            ?>
                        </td>
                        <td>
                            <a class="buttondesign" href="feedback.php">Add Feedback</a>
                        </td>
                    </tr>

                    <?php
                }
            }
            else
            {
                //Order not available
                echo "<div colspan='12' class='error'>Order not Available</div>";
            }
        ?>

        </table>
    </div>
    </div>

</section>


<?php include('partials-front/footer.php'); ?>

