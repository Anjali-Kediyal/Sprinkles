<?php include('partials/menuu.php'); ?>

<?php
    //Check whether id is set or not
    if(isset($_GET['id']))
    {
        //Get all the details
        $id = $_GET['id'];

        //SQL query to get the selected food
        $sql2 = "SELECT * FROM tbl_food WHERE id=$id";
        //Execute the query
        $res2 = mysqli_query($conn,$sql2);
        //Get the value based on query executed
        $row2 = mysqli_fetch_assoc($res2);

        //Get the individual values of selected food
        $title = $row2['title'];
        $description = $row2['description'];
        $price = $row2['price'];
        $current_image = $row2['image_name'];
        $current_category = $row2['category_id'];
        $featured = $row2['featured'];
        $active = $row2['active'];
    }
    else
    {
        //Redirect to manage food
        header('location:'.SITEURL.'admin/manage-food.php');
    }
?>

<div class="main-class">
    <div class="wrapper">
        <br><h1>Update Food:</h1><br>

        <form action="" method="POST" enctype="multipart/form-data">
            <table cellspacing="5px" class="tbl-50">
                <tr>
                    <td>Title:</td>
                    <td>
                        <input type="text" name="title" value="<?php echo $title; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description" cols="30" rows="5"><?php echo $description; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td>
                        <input type="number" name="price" value="<?php echo $price; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Current Image:</td>
                    <td>
                        <?php
                            if($current_image == "")
                            {
                                //Image not available
                                echo "<div class='error'>Image not available.</div>";
                            }
                            else
                            {
                                //Image Available
                                ?>
                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $current_image; ?>" width="100px">
                                <?php
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Select New Image:</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td>
                        <select name="category">

                        <?php
                            //Query to get active categories
                            $sql = "SELECT * FROM tbl_category WHERE active='Yes'";
                            //Execute the query
                            $res = mysqli_query($conn,$sql);
                            //Count Rows
                            $count = mysqli_num_rows($res);

                            //Check whether category available or not
                            if($count>0)
                            {
                                //Category Available
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $category_title = $row['title'];
                                    $category_id = $row['id'];

                                    //echo "<option value='$category_id'>$category_title</option>";
                                    ?>
                                    <option <?php if($current_category==$category_id){ echo "selected"; } ?> value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>
                                    <?php
                                }
                            }
                            else
                            {
                                //Category not available
                                echo "<option value='0'>Category not available.</option>";
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Featured:</td>
                    <td>
                        <input <?php if($featured=="Yes"){echo "checked";} ?> type="radio" name="featured" value="Yes">Yes

                        <input <?php if($featured=="No"){echo "checked";} ?> type="radio" name="featured" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                        <input <?php if($active=="Yes"){echo "checked";} ?> type="radio" name="active" value="Yes">Yes

                        <input <?php if($active=="No"){echo "checked";} ?> type="radio" name="active" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Food" class="buttondesign green">
                    </td>
                </tr>
            </table>
        </form>

        <?php
            if(isset($_POST['submit']))
            {
                //echo "Clicked";
                //1.Get all the values from our form
                $id = $_POST['id'];
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $current_image = $_POST['current_image'];
                $category = $_POST['category'];

                $featured = $_POST['featured'];
                $active = $_POST['active'];

                //2. Updating new image if selected
                //Check whether the image is selected or not
                if(isset($_FILES['image']['name']))
                {
                    //Get the image details
                    $image_name = $_FILES['image']['name']; //New image name

                    //Check whether image is available or not
                    if($image_name!="")
                    {
                        //Image Available
                        //A. Upload the new image

                        //Auto rename our image
                        //Get the extension of our image (jpg,png,gif,etc) e.g. "food.jpg"
                        $ext = end(explode('.',$image_name));
                        //Rename the image
                        $image_name = "Food_Name_".rand(0000,9999).'.'.$ext; // e.g. Food_Name_293.jpg

                        $src_path = $_FILES['image']['tmp_name'];

                        $dest_path = "../images/food/".$image_name;

                        //Finally upload the image
                        $upload = move_uploaded_file($src_path,$dest_path);

                        //Check whether the image uploaded or not
                        // If not uploaded then we will stop the process and redirect with error message
                        if($upload==false)
                        {
                            //Set Message
                            $_SESSION['upload'] = "<div class='error'>Failed to upload new image</div>";
                            //Redirect to add category page
                            header('location:'.SITEURL.'admin/manage-food.php');
                            //Stop the process
                            die();
                        }

                        //B. Remove the current image if available
                        if($current_image!="")
                        {
                            $remove_path = "../images/food/".$current_image;
                            $remove = unlink($remove_path);

                            //check whether the image is removed or not
                            //If failed to remove then display the message and stop the process
                            if($remove==false)
                            {
                                //Failed to remove the image
                                $_SESSION['failed-remove'] = "<div class='error'>Failed to remove current image</div>";
                                header('location:'.SITEURL.'admin/manage-food.php');
                                die();//Stop the process
                            }
                        }
                    }
                    else
                    {
                        $image_name = $current_image;
                    }
                }
                else
                {
                    $image_name = $current_image;
                }

                //3. Update the database
                $sql3= "UPDATE tbl_food SET
                    title = '$title',
                    description = '$description',
                    price = $price,
                    image_name = '$image_name',
                    category_id = '$category',
                    featured = '$featured',
                    active = '$active'
                    WHERE id = $id
                ";

                //Execute the query
                $res3 = mysqli_query($conn, $sql3);

                //Redirect to manage category with message
                //Check whether executed or not
                if($res3==true)
                {
                    //Category updated
                    $_SESSION['update'] = "<div class='success'>Food Updated Successfully.</div>";
                    //header('location:'.SITEURL.'admin/manage-food.php');
                    ?>
                    <script>
                        window.location.href='http://localhost/main/admin/manage-food.php';
                    </script>
                    <?php
                }
                else
                {
                    //Failed to update category
                    $_SESSION['update'] = "<div class='error'>Failed to update category.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
            }
        ?>

    </div>
</div>