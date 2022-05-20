<?php include('partials-front/menu.php'); ?>
<style>
    .orderpg .product-details{
        display: flex;
        width: 500px;
        margin: 25px 0px;
    }
    .orderpg .food-menu-desc{
        display: flex;
        justify-content: center;
        align-items: left;
        flex-direction: column;
    }
    .orderpg .span{
        width: 300px;
        display: flex;
        justify-content: space-between;
        margin: 0px;
    }
    .order-details{
        display: flex;
        flex-direction: column;
        width: 480px;
        margin-top: 25px;
    }

    .orderpg .order-details input[type=text], input[type=tel], input[type=email], input[type=submit], textarea{
        background: transparent;
        padding: 10px;
        border: 2px solid var(--yellow);
        border-radius: 5px;
        }
        h3{
            color: var(--yellow);
        }
    .orderpg .order-details div{
        margin-top: 15px;
    }
    .orderpg .buttondesign{
        margin-top: 20px;
        background-color: var(--yellow) !important;
    }
</style>
<?php
    //Check whether food id is set or not
    if(isset($_GET['food_id']))
    {
        //Get the food id and details of the selected food
        $food_id = $_GET['food_id'];

        //Get the details of the selected food
        $sql = "SELECT * FROM tbl_food WHERE id = $food_id";

        //Execute the query
        $res = mysqli_query($conn, $sql);

        //Count the rows
        $count = mysqli_num_rows($res);

        //Check whether data is available or not
        if($count==1)
        {
            //We have data
            //Get the data from database
            $row = mysqli_fetch_assoc($res);
            $title = $row['title'];
            $username = $row['username'];
            $supplier_location = $row['supplier_location'];
            $price = $row['price'];
            $image_name = $row['image_name'];
        }
        else
        {
            //Food not available
            //Redirect to home page
            header('location:'.SITEURL);
        }
    }
    else
    {
        //Redirect to home page
        header('location:'.SITEURL);
    }
?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="orderpg">
        <div class="container">

            <h3>Fill this form to confirm your order.</h3>

            <form action="" method="POST" class="order">
                <fieldset class="product-details">

                    <div class="food-menu-img">
                        <?php
                            //Check whether the image is available or not
                            if($image_name=="")
                            {
                                //Image not available
                                echo "<div class='error'>Image not Available</div>";
                            }
                            else
                            {
                                //Image Available
                                ?>
                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                <?php
                            }
                        ?>

                    </div>

                    <div class="food-menu-desc">
                        <h3>Selected Product</h3>

                        <div class="span">
                            <h4><?php echo $title; ?></h4>
                            <input type="hidden" name="food" value="<?php echo $title; ?>">

                            <h4><?php echo $price; ?></h4>
                            <input type="hidden" name="price" value="<?php echo $price; ?>">
                        </div>
                        <p><?php echo "Supplier: ". $username.",". $supplier_location; ?></p>
                        <input type="hidden" name="username" value="<?php echo $username. $supplier_location; ?>">


                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>

                    </div>

                </fieldset>

                <fieldset class="order-details">
                    <h3>Delivery Details</h3>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="Enter Your Username" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="Enter Your Phone Number" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="Enter Your Email" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="3" placeholder="Enter Your Address" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="buttondesign">
                </fieldset>

            </form>

            <?php
                //Check whether submit button is clicked or not
                if(isset($_POST['submit']))
                {
                    //Get all the details from form
                    $food = $_POST['food'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];
                    $total = $price * $qty;
                    $order_date = date("Y-m-d h:i:sa");
                    $status = "Ordered";  // Ordered, On Delivery, Delivered, Cancelled
                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];


                    //Save the order in database
                    //Create SQL to save the data
                    $sql2 = "INSERT INTO tbl_order SET
                        food = '$food',
                        price = $price,
                        qty = $qty,
                        total = $total,
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address',
                        supplier_username = '$username',
                        supplier_location = '$supplier_location'
                    ";

                    //Execute the query
                    $res2 = mysqli_query($conn, $sql2);

                    //Check whether query executed successfully or not
                    if($res2==true)
                    {
                        //Query Executed and order saved
                        $_SESSION['order'] = "<div class='success text-center'>Food Ordered Successfully</div>";
                        //header('location:'.SITEURL);
                        ?>
                        <script>
                            window.location.href='http://localhost/main/index.php';
                        </script>
                        <?php
                    }
                    else
                    {
                        //Failed to save order
                        $_SESSION['order'] = "<div class='error text-center'>Failed to order food</div>";
                        header('location: ../index.php');
                    }
                }
            ?>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

<?php include('partials-front/footer.php'); ?>