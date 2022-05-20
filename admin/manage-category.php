<?php include('partials/menuu.php');?>

        <!-- Main content section start -->
        <div class="main-content">
            <div class="wrapper">
                <div class="main-headers">
                <h1>Manage Category</h1>
        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
            if(isset($_SESSION['remove']))
            {
                echo $_SESSION['remove'];
                unset($_SESSION['remove']);
            }
            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['no-category-found']))
            {
                echo $_SESSION['no-category-found'];
                unset($_SESSION['no-category-found']);
            }
            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
            if(isset($_SESSION['failed-remove']))
            {
                echo $_SESSION['failed-remove'];
                unset($_SESSION['failed-remove']);
            }
        ?>
        <a href="<?php echo SITEURL; ?>admin/add-category.php" class="buttondesign">Add Category</a>
    </div><br>
<table cellspacing="5px" >
    <thead>
    <tr>
        <th>Produ</th>
        <th>Title</th>
        <th>Category </br> Image</th>
        <th>Featured</th>
        <th>Active</th>
        <th>Actions</th>
    </tr>
    </thead>
    <?php
        //Query to get all categories from database
        $sql = "SELECT * FROM tbl_category";

        //Execute query
        $res = mysqli_query($conn,$sql);

        //count rows
        $count = mysqli_num_rows($res);

        //Create serial number
        $sn = 1;

        //Check whether we have data in database or not
        if($count>0)
        {
            //We have data in database
            //Get data and display
            while($row=mysqli_fetch_assoc($res))
            {
                $id = $row['id'];
                $title = $row['title'];
                $image_name = $row['image_name'];
                $featured = $row['featured'];
                $active = $row['active'];

                ?>

            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $title; ?></td>

                <td>
                    <?php
                        //Check whether image name is availabe or not
                        if($image_name!="")
                        {
                            //Display the image
                            ?>
                            <img src="<?php echo SITEURL;?>images/category/<?php echo $image_name; ?>" width="100px">
                            <?php
                        }
                        else
                        {
                            //Display the message
                            echo "<div class='error'>Image not added.</div>";
                        }
                    ?>
                </td>

                <td><?php echo $featured; ?></td>
                <td><?php echo $active; ?></td>
                <td>
                    <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>" class="buttondesign green">Update Category</a>
                    <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="buttondesign red">Delete Category</a>
                </td>
            </tr>

                <?php
            }
        }
        else
        {
            //We do not have data
            //We will display the message inside table
            ?>

            <tr>
                <td colspan="6"><div class="error">No category added</div></td>
            </tr>

            <?php
        }
    ?>


</table>
            </div>
        </div>
        <!-- Main content section ends -->