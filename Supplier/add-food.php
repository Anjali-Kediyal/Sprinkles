<?php include('partials/menuu.php');?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Product</h1><br>

        <?php
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-50">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Title of the Product">
                    </td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description" cols="30" rows="5" placeholder="Description of Product"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td>
                        <input type="number" name="price">
                    </td>
                </tr>
                <tr>
                    <td>Select Image:</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td>
                        <select name="category">

                        <?php
                            //Create php code to display categories from database
                            //1.Create sql to get all active categories
                            $sql = "SELECT * FROM tbl_category WHERE active='Yes'";
                            //Execute the query
                            $res = mysqli_query($conn,$sql);
                            //Count rows to check Whether we have categories or not
                            $count=mysqli_num_rows($res);
                            //If count is greater than zero, we have categories else we do not have categories
                            if($count>0)
                            {
                                //We have categories
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    //Get the details of categories
                                    $id = $row['id'];
                                    $title = $row['title'];

                                    ?>

                                    <option value="<?php echo $id; ?>"><?php echo $title; ?></option>

                                    <?php

                                }
                            }
                            else
                            {
                                //We do not have values
                                ?>
                                <option value="0">No category found</option>
                                <?php
                            }

                            //2.Display on dropdown
                        ?>

                    </select>
                </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Username of the supplier">
                    </td>
                </tr>
                <tr>
                    <td>Location: </td>
                    <td>
                        <input type="text" name="supplier_location" placeholder="Location of the supplier">
                    </td>
                </tr>
                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes">Yes
                        <input type="radio" name="featured" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes">Yes
                        <input type="radio" name="active" value="No">No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Product" class="buttondesign">
                    </td>
                </tr>
            </table>
        </form>

        <?php

            //Check whether the button is clicked or not
            if(isset($_POST['submit']))
            {
                //Add the food in databse

                //1.Get the data from form
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $category = $_POST['category'];
                $username = $_POST['username'];
                $supplier_location = $_POST['supplier_location'];

                //Check whether radio button for featured and active are checked or not
                if(isset($_POST['featured']))
                {
                    $featured = $_POST['featured'];
                }
                else
                {
                    $featured = "No"; //Setting default value
                }

                if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                {
                    $active = "No"; //Setting default value
                }

                //2.Upload the image is selected
                //Check whether the select image is clicked or not and upload the image only if image is selected
                if(isset($_FILES['image']['name']))
                {
                    //Get the details of the selected image
                    $image_name = $_FILES['image']['name'];

                    //Check whether the image is selected or not and upload image only if selected
                    if($image_name!="")
                    {
                        //Image is selected
                        //A.Rename the image
                        //Get the extension of selected image(jpg,png,gif,etc.)
                        $ext = end(explode('.',$image_name));
                        //Create new name for image
                        $image_name = "Food-Name-".rand(0000,9999).".".$ext; //New image name will be like product-Name-285.jpg

                        //B. Upload the image
                        //Get the source path and destination path
                        //Source_path is current location of the image
                        $src = $_FILES['image']['tmp_name'];
                        //Destination path for the image to be uploaded
                        $dst = "../images/food/".$image_name;
                        //Finally upload the image
                        $upload = move_uploaded_file($src,$dst);
                        //Check whether image uploaded or not
                        if($upload==false)
                        {
                            //Failed to upload the image
                            //Redirect to add product page with error message
                            $_SESSION['upload'] = "<div class='error'>Failed to upload image</div>";
                            header('location:'.SITEURL.'admin/add-food.php');
                            //Stop the process
                            die();
                        }
                    }
                }
                else
                {
                    $image_name = ""; //Setting default value as blank
                }

                //3. Insert into Database

                //Sql query to save or add product
                $sql2 = "INSERT INTO tbl_food SET
                    title = '$title',
                    description = '$description',
                    price = $price,
                    image_name = '$image_name',
                    category_id = $category,
                    username = '$username',
                    supplier_location = '$supplier_location',
                    featured = '$featured',
                    active = '$active'
                ";

                //Execute Query
                $res2 = mysqli_query($conn,$sql2);
                //Check whether data inserted or not
                //4.Redirect with message to manage product page
                if($res2==true)
                {
                    //Data inserted successfully
                    $_SESSION['add'] = "<div class='success'>Product Added Successfully</div>";
                    ?>
                    //header('location:'.SITEURL.'admin/manage-food.php');
                    <script>
                    window.location.href='http://localhost/main/Supplier/manage-food.php';
                    </script>
                    <?php
                }
                else
                {
                    //Failed to insert data
                    $_SESSION['add'] = "<div class='error'>Failed to add product</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
            }
        ?>

    </div>
</div>
