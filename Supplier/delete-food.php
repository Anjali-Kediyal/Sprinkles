<?php

    include('../config/constants.php');

    if(isset($_GET['id']) AND isset($_GET['image_name']))
    {
        //Process to delete
        //1.Get ID and image name
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        //2.Remove the image if Available
        //Check whether the image is available or not and delete only if available
        if($image_name!="")
        {
            //It has image and need to remove from folder
            //Get the image path
            $path = "../images/food/".$image_name;

            //REmove image from folder
            $remove = unlink($path);

            //Check whether image is removed or not
            if($remove==false)
            {
                //Failed to remove image
                $_SESSION['upload'] = "<div class='error'>Failed to remove image.</div>";
                //Redirect to Manage food
                header('location:'.SITEURL.'admin/manage-food.php');
                //Stop process
                die();
            }
        }

        //3.Delete food from database
        $sql = "DELETE FROM tbl_food WHERE id=$id";
        //Execute the query
        $res = mysqli_query($conn,$sql);

        //Check whether query executed or not and set the session message respectively
        //4.Redirect to Manage food with Session Message
        if($res==true)
        {
            //Food Deleted
            $_SESSION['delete'] = "<div class='success'>Product Deleted Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
        }
        else
        {
            //Failed to delete food
            $_SESSION['delete'] = "<div class='error'>Failed to delete Product.</div>";
            header('location:'.SITEURL.'Supplier/manage-food.php');
        }

    }
    else
    {
        //Redirect to manage food page
        $_SESSION['unauthorize'] = "<div class='error'>Unauthorized Access.</div>";
        header('location:'.SITEURL.'admin/manage-food.php');
    }
?>