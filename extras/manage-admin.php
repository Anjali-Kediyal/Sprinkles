<?php include('partials/menu.php');?>

        <!-- Main content section start -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1><br><br>

                <?php

                // Session to check whether the session for add is set or not
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];// displaying session message
                        unset($_SESSION['add']);// Removing session message
                    }
                // Session to check whether the session for delete is set or not
                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];// displaying session message
                        unset($_SESSION['delete']);// Removing session message
                    }
                // Session to check whether the session for update is set or not
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];// displaying session message
                    unset($_SESSION['update']);// Removing session message
                }
                // Session to check whether the session for user not found is set or not
                if(isset($_SESSION['user-not-found']))
                {
                    echo $_SESSION['user-not-found']; // displaying session message
                    unset($_SESSION['user-not-found']); // Removing session message
                }
                // Session to check whether the session for password did not match
                if(isset($_SESSION['pwd-not-match']))
                {
                    echo $_SESSION['pwd-not-match']; // displaying session message
                    unset($_SESSION['pwd-not-match']); // Removing session message
                }
                // Session to check whether the session for password changed
                if(isset($_SESSION['change-pwd']))
                {
                    echo $_SESSION['change-pwd']; // displaying session message
                    unset($_SESSION['change-pwd']); // Removing session message
                }
                ?><br><br><br>

                <!-- Button to add admin -->
                <a href="add-admin.php" class="btn-primary">Add Admin</a><br><br>

                <table class="tbl-full">
                    <tr>
                        <th>S.N</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                        //query to get all admin 
                        $sql = "SELECT * from tbl_admin";
                        //execute the query
                        $res = mysqli_query($conn, $sql);

                        //Check Query is executed or not
                        if($res==TRUE)
                        {
                            // Count rows to check whether we have data in database or not
                            $count = mysqli_num_rows($res); // function to get all the rows in database

                            $sn=1; // create variable and assign the value

                            // check the number of rows
                            if($count>0)
                            {
                                // We have data in database
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    // using while loop to get all data from database
                                    //And while loop will run as long as we have data in databse

                                    // get individual data
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];

                                    // Display the values in our table
                                    ?>
                                        <tr>
                                            <td><?php echo $sn++; ?></td>
                                            <td><?php echo $full_name; ?></td>
                                            <td><?php echo $username; ?></td>
                                            <td>
                                                <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                                <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                                <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                // We do not have data in database
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
        <!-- Main content section ends -->
<?php include('partials/footer.php');?> 