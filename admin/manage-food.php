<?php include('partials/menuu.php');?>

        <!-- Main content section start -->
        <div class="main-content">
            <div class="wrapper">
                <div class="main-headers">
                <h1>Manage Products</h1>
                <a href="<?php echo SITEURL; ?>admin/add-food.php" class="buttondesign">Add Product</a>
            </div>
        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
            if(isset($_SESSION['unauthorize']))
            {
                echo $_SESSION['unauthorize'];
                unset($_SESSION['unauthorize']);
            }
            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
        ?>

<table cellspacing="5px" >
    <thead>
    <tr>
        <th>Product <br> Number</th>
        <th>Username</th>
        <th>Location</th>
        <th>Title</th>
        <th>Price</th>
        <th>Image</th>
        <th>Featured</th>
        <th>Active</th>
        <th>Actions</th>
    </tr>

    </thead>

    <?php
        //Create sql query to get all the food
        $sql = "SELECT * FROM tbl_food";
        //Execute the query
        $res = mysqli_query($conn,$sql);

        //Count rows to check whether we have food or not
        $count=mysqli_num_rows($res);

        //Create serial number variable
        $sn = 1;

        if($count>0)
        {
            //We have food in database
            //Get the food from database and display
            while($row=mysqli_fetch_assoc($res))
            {
                //Get the values from individual columns
                $id = $row['id'];
                $username = $row['username'];
                $supplier_location = $row['supplier_location'];
                $title = $row['title'];
                $price = $row['price'];
                $image_name = $row['image_name'];
                $featured = $row['featured'];
                $active = $row['active'];
                ?>
                <tr>
                    <td><?php echo $sn++; ?></td>
                    <td><?php echo $username; ?></td>
                    <td><?php echo $supplier_location; ?></td>
                    <td><?php echo $title; ?></td>
                    <td><?php echo $price; ?></td>
                    <td>
                        <?php
                            //Check whether we have image or not
                            if($image_name=="")
                            {
                                //We do not have image, display error message
                                echo "<div class='error'>Image not added.</div>";
                            }
                            else
                            {
                                //We have image, display image
                                ?>
                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" width="100px">
                                <?php
                            }
                        ?>
                    </td>
                    <td><?php echo $featured; ?></td>
                    <td><?php echo $active; ?></td>
                    <td>
                        <a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id; ?>" class="buttondesign green">Update Product</a>
                        <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="buttondesign red">Delete Product</a>
                    </td>
                </tr>

                <?php
            }
        }
        else
        {
            //Food not added in database
            echo "<tr><td colspan='7' class='error'>Product not added yet</td></tr>";
        }
    ?>
</table>
            </div>
        </div>
        <!-- Main content section ends -->