<?php

    include('../config/constants.php');

    //1. Get the ID of Admin to be deleted
    echo $id = $_GET['id'];

    //2. Create SQL query to Delete admin
    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    //Execute the query
    $res = mysqli_query($conn, $sql);

    // Check whether the query executed successfully or not
    if($res==TRUE)
    {
        //Query executed successfully and admin deleted
        //echo "Admin Deleted";
        //create session variable to display message
        $_SESSION['delete'] = "Admin deleted successfully";
        //Redirect to manage admin page
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        //Failed to delete the admin
        //echo "Admin not Deleted";
        //create session variable to display message
        $_SESSION['delete'] = "Failed to delete the admin";
        //Redirect to manage admin page
        header('location:'.SITEURL.'admin/manage-admin.php');
    }

    //3. Redirect to manage Admin page with message (success/error)
?>