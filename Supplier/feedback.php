<?php include('partials/menuu.php');?>
<div class="main-content">
    <div class="wrapper">
        <h1>Feedback From Customers</h1><br><br>

        <table cellspacing="5px" style="width: 70%">
            <thead>
            <tr>
                <th>S.N</th>
                <th>Customer </br> Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            </thead>
            <?php
                //Query to get all seller data from database
                $supplier = $_SESSION['username'];

                $sql = "SELECT * FROM feedback WHERE supplier_username='$supplier'";

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
                        $customer_username = $row['customer_username'];
                        $email = $row['email'];
                        $message = $row['message'];
                        ?>

                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $customer_username; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $message; ?></td>
                    </tr>

                        <?php
                    }
                }

            ?>

        </table>
    </div>
</div>