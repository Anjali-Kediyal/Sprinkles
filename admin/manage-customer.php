<?php include('partials/menuu.php');?>


<!-- Main content section starts here -->

<div class="main-content">
    <div class="wrapper">
        <h1>Registered Customers</h1><br><br>

        <!-- To check whether session is set or not -->
        <?php
            if(isset($_SESSION['no-customer-found']))
            {
                echo $_SESSION['no-customer-found'];
                unset($_SESSION['no-customer-found']);
            }
            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
            if(isset($_SESSION['delete_customer']))
            {
                echo $_SESSION['delete_customer'];
                unset($_SESSION['delete_customer']);
            }
        ?>

        <table cellspacing="5px" >
        <thead>
            <tr>
                <th>Sr. <br> No.</th>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>


            <?php
                //Query to get all seller data from database
                $sql = "SELECT * FROM users";

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
                        $username = $row['username'];
                        $email = $row['email'];
                        $password = $row['password'];
                        ?>

                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $password; ?></td>
                        <td>
                            <a href="<?php echo SITEURL; ?>admin/update-customer.php?id=<?php echo $id; ?>" class="buttondesign green">Update Customer</a>
                            <a href="<?php echo SITEURL; ?>admin/delete-customer.php?id=<?php echo $id; ?>" class="buttondesign red">Delete Customer</a>
                        </td>
                    </tr>

                        <?php
                    }
                }

            ?>

        </table>
    </div>
</div>