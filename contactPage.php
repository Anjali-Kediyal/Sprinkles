<?php include('partials-front/menu.php'); ?>

  <main id="main">
    <section class="contactPage">
        <div class="container">
            <div class="wrapper row">
                <div class="col-lg-10 col-lg-offset-2">

                <div class="section-title">
                    <h2>CONTACT FORM</h2>
                    <p>Contact us for any query</p>
                </div>

                    <form id="contact-form" method="post" role="form">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your firstname" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Enter your lastname" required="required" data-error="Lastname is required.">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for us" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="buttondesign buttonhover btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                        </div>
                    </form>

            <?php
            if(isset($_POST['ok'])){
                include_once 'contactfunction.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Something Went wrong!!')</script>";
                }else{
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }
            }
            ?>

                </div>
            </div>
        </div>
    </section>

</main>


<?php include('partials-front/footer.php'); ?>