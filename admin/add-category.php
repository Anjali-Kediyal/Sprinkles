<?php include('partials/menuu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1><br><br>

        <!-- To check whether the Session is set or not -->

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>

        <!-- Add Category form starts -->
        <form action="" method="POST" enctype="multipart/form-data">
            <table cellspacing="5px" class="tbl-50">
                <tr>
                    <td>Title:</td>
                    <td><input type="text" name="title" placeholder="Category Title"></td>
                </tr>
                <tr>
                    <td>Select Image:</td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td>Featured:</td>
                    <td>
                        <input type="radio" name="featured" value="Yes">Yes
                        <input type="radio" name="featured" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                        <input type="radio" name="active" value="Yes">Yes
                        <input type="radio" name="active" value="No">No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="buttondesign green">
                    </td>
                </tr>
            </table>
        </form>
        <!-- Add Category form ends -->

        <!-- Database Connection Starts -->

        <?php
            //Check whether the submit button is clicked or not
            if(isset($_POST['submit']))
            {
                //echo "Clicked";

                //1. Get the value from the form
                $title = $_POST['title'];

                //For radio input type need to check whether the button is selected or not
                if(isset($_POST['featured']))
                {
                    //Get the value from form
                    $featured = $_POST['featured'];
                }
                else
                {
                    //Set the default value
                    $featured = "No";
                }

                //For radio input type need to check whether the button is selected or not
                if(isset($_POST['active']))
                {
                    //Get the value from form
                    $active = $_POST['active'];
                }
                else
                {
                    //Set the default value
                    $active = "No";
                }

                //Check whether the image is selected or not and set the value for image name accoridingly
               // print_r($_FILES['image']);
                //die(); //Break the code here

                if(isset($_FILES['image']['name']))
                {
                    //Upload the image
                    //To upload image we need image name, source path and destination path
                    $image_name = $_FILES['image']['name'];

                    //Upload the image only if image is selected
                    if($image_name!="")
                    {
                        //Auto rename our image
                        //Get the extension of our image (jpg,png,gif,etc) e.g. "food.jpg"
                        $ext = end(explode('.',$image_name));
                        //Rename the image
                        $image_name = "Food_Category_".rand(000,999).'.'.$ext; // e.g. Food_Category_293.jpg

                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "../images/category/".$image_name;

                        //Finally upload the image
                        $upload = move_uploaded_file($source_path,$destination_path);

                        //Check whether the image uploaded or not
                        // If not uploaded then we will stop the process and redirect with error message
                        if($upload==false)
                        {
                            //Set Message
                            $_SESSION['upload'] = "<div class='error'>Failed to upload image</div>";
                            //Redirect to add category page
                            header('location:'.SITEURL.'admin/add-category.php');
                            //Stop the process
                            die();
                        }
                    }
                }
                else
                {
                    //Don't upload image and set the image_name value as blank
                    $image_name="";
                }

                //2.Create SQL to get insert category into database
                $sql = "INSERT INTO tbl_category SET
                title ='$title',
                image_name = '$image_name',
                featured = '$featured',
                active = '$active'
                ";

                //3.Execute the query and save in database
                $res = mysqli_query($conn, $sql);

                //4.Check whether the query executed or not and data added or not
                if($res==TRUE)
                {
                    //Query executed and category added
                    $_SESSION['add'] = "<div class='success'>Catrgory added successfully.</div>";
                    //Redirect to manage category page
                    //header('location:'.SITEURL.'admin/manage-category.php');
                    ?>
                    <script>
                        window.location.href='http://localhost/main/admin/manage-category.php';
                    </script>
                    <?php
                }
                else
                {
                    //Failed to add category
                    $_SESSION['add'] = "<div class='error'>Failed to add category.</div>";
                    //Redirect to manage category page
                    header('location:'.SITEURL.'admin/add-category.php');
                }
            }
        ?>

        <!-- Database Connection ends -->
    </div>
</div>
