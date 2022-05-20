<?php
    include('partials/menuu.php');
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Customer</h1><br><br>

        <?php
            //Check whether the id is set or not
            if(isset($_GET['id']))
            {
                //Get the id and all other details
                //echo "Getting the data";
                $id = $_GET['id'];
                //Create SQL query to get all other details
                $sql = "SELECT * FROM users WHERE id=$id";
                //Execute the query
                $res = mysqli_query($conn,$sql);
                //Count the rows to check whether the id is valid or not
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //Get all the data
                    $row = mysqli_fetch_assoc($res);
                    $id = $row['id'];
                    $username = $row['username'];
                    $email = $row['email'];
                    $password = $row['password'];
                }
                else
                {
                    //Redirect to manage category with session message
                    $_SESSION['no-customer-found'] = "<div class='error'>Customer not found</div>";
                    header('location:'.SITEURL.'admin/manage-customer.php');
                }
            }
            else
            {
                //Redirect to manage category
                header('location:'.SITEURL.'admin/manage-customer.php');
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">

        <table cellspacing="5px" class="tbl-30">
            <tr>
                <td>Id: </td>
                <td>
                    <input type="text" name="id" value="<?php echo $id; ?>">
                </td>
            </tr>
            <tr>
                <td>Username: </td>
                <td>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                </td>
            </tr>
            <tr>
                <td>Email: </td>
                <td>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                </td>
            </tr>
            <tr>
                <td>Password: </td>
                <td>
                    <input type="text" name="password" value="<?php echo $password; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Update Customer" class="buttondesign green">
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
                $username = $_POST['username'];
                $email = $_POST['email'];

                //2. Update the database
                $sql2= "UPDATE users SET
                    username = '$username',
                    email = '$email'
                    WHERE id = $id
                ";

                //Execute the query
                $res2 = mysqli_query($conn, $sql2);

                //Redirect to manage category with message
                //Check whether executed or not
                if($res2==true)
                {
                    //Category updated
                    $_SESSION['update'] = "<div class='success'>Customer Detail Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-customer.php');
                }
                else
                {
                    //Failed to update category
                    $_SESSION['update'] = "<div class='error'>Failed to update customer details.</div>";
                    header('location:'.SITEURL.'admin/manage-customer.php');
                }
            }
        ?>

    </div>
</div>