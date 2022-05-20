<?php include('partials/menuu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Customer's Contact Details</h1><br><br>

    <table  cellspacing="5px" >
        <thead>
        <tr>
            <th>S.N</th>
            <th>Id</th>
            <th>First <br> Name</th>
            <th>Last <br> Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Date and Time</th>
            <th>Status</th>
        </tr>
        </thead>
            <?php
                //Query to get all seller data from database
                $sql = "SELECT * FROM contact_us";

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
                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $message = $row['message'];
                        $datetime = $row['datetime'];
                        $status = $row['status']
                        ?>

                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $first_name; ?></td>
                        <td><?php echo $last_name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $message; ?></td>
                        <td><?php echo $datetime; ?></td>
                        <td><?php echo $status; ?></td>
                    </tr>

                        <?php
                    }
                }

            ?>

        </table>
    </div>
</div>