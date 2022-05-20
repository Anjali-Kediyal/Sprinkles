<?php include('partials-front/menu.php'); ?>
<style>
    .contactpage .container{
        justify-content: center;
        align-items: center;
        display: flex;
        width: 500px;
        flex-direction: column;
    }

    .contactpage .controls{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 700px;
    }

    .contactpage form, .form-control {
        width: 100%;
    }

    .contactpage .form-group {
        width: 450px;
    }


    .contactpage form .row {
        margin-bottom: 15px;
        width: 100%;
    }
</style>
<section class="contactpage">
    <div class="container">

    <div class="section-title">
        <h2>FEEDBACK FORM</h2>
        <p>Enter your feedback</p>
    </div>


    <form action="" method="POST" enctype="multipart/form-data">

        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Username</label>
                                        <input id="form_name" type="text" name="customer_username" placeholder="Enter Your Username" class="form-control" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Supplier *</label>
                                        <input id="form_lastname" type="text" name="supplier_username" placeholder="Enter Supplier Name" class="form-control" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_message">Message</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for us" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <input type="submit" name="submit" value="Submit" class="buttondesign buttonhover btn btn-success btn-send">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
    <?php
        //Check Whether the button is clicked or not
        if(isset($_POST['submit']))
        {
            //Add the feedback in database

            //1.Get the data from form
            $customer_username = $_POST['customer_username'];
            $supplier_username = $_POST['supplier_username'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            //2.Insert Into Database
            $sql = "INSERT INTO feedback SET
                customer_username = '$customer_username',
                supplier_username = '$supplier_username',
                email = '$email',
                message = '$message'
            ";

            //Execute Query
            $res = mysqli_query($conn, $sql);
            //check whether data inserted or not
            //3. Redirect With Message
            if($res==true)
            {
                //Data Inserted Successfully
                $_SESSION['suc'] = "<div class='success'>Thankyou for your review</div>";
                //header('location:'.SITEURL.'my-order.php');
                ?>
                <script>
                    window.location.href='http://localhost/main/my-order.php';
                </script>
                <?php
            }
            else{
                //Failed to insert review
                $_SESSION['fail'] = "<div class='error'>Failed to send your review</div>";
                header('location:'.SITEURL.'my-order.php');
            }
        }
    ?>

</div>
</section>

<?php include('partials-front/footer.php'); ?>