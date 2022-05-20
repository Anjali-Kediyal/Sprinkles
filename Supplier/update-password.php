<?php include('partials/menuu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1><br><br>

        <?php
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
            }
        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Current Password:</td>
                    <td>
                        <input type="password" name="current_password" placeholder="Current Password">
                    </td>
                </tr>
                <tr>
                    <td>New Password:</td>
                    <td>
                        <input type="password" name="new_password" placeholder="New Password">
                    </td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php
    //Check whether the submit button is Clicked or not
    if(isset($_POST['submit']))
    {
        //echo "clicked";

        //1.Get the data from form
        $id=$_POST['id'];
        $current_password=md5($_POST['current_password']);
        $new_password=md5($_POST['new_password']);
        $confirm_password=md5($_POST['confirm_password']);

        //2.Check whether the user with current ID and password exist or not
        $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";
        //Execute the query
        $res = mysqli_query($conn, $sql);

        if($res==TRUE)
        {
            //Check whether data is availabe or not
            $count=mysqli_num_rows($res);

            if($count==1)
            {
                //user exist and password can rechange
                //echo "User Found";

                //Check whether the new password or confirm password match or not
                if($new_password==$confirm_password)
                {
                    //Update the password
                    $sql2 = "UPDATE tbl_admin SET password='$new_password' WHERE id=$id";
                    //Execute the query
                    $res2 = mysqli_query($conn, $sql2);
                    //Check whether the query is executed or not
                    if($res2==TRUE)
                    {
                        //Query Executed
                        //Redirect wirh success message
                        $_SESSION['change-pwd'] = "<div class='success'>Password changed successfully</div>";
                        //Redirect
                        header('location:'.SITEURL.'admin/manage-admin.php');

                    }
                    else
                    {
                        //Display error message
                        //Redirect wirh erroe message
                        $_SESSION['change-pwd'] = "<div class='error'>Failed to change Password</div>";
                        //Redirect
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                }
                else
                {
                    //Redirect wirh erroe message
                    $_SESSION['pwd-not-match'] = "<div class='error'>Password did not match</div>";
                    //Redirect
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
            else
            {
                //user does not exist set message and redirect
                $_SESSION['user-not-found'] = "<div class='error'>User not Found</div>";
                //Redirect
                header('location:'.SITEURL.'admin/manage-admin.php');
            }
        }

        //3.Check whether the current, new or confirm password match or not

        //4.Update change password if all above is true
    }
?>