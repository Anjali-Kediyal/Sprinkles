<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>

    <!-- css file link -->
    <link href="signup_Style.css" type="text/css" rel="stylesheet" >
    <link href="../assets/css/stylemainn.css" type="text/css" rel="stylesheet" >

    <!-- css file link -->
    <link href="../../assets/css/signup.css" type="text/css" rel="stylesheet" >
    <!-- <link href="../assets/css/stylemainn.css" type="text/css" rel="stylesheet" > -->


    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/41354f2a54.js" crossorigin="anonymous"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&family=Playfair+Display&family=Zen+Dots&display=swap" rel="stylesheet">

</head>
<body>



  <!-- ======= Header Section ======= -->
  <header id="header" class="fixed-top ">
    <div class="container">
    <div>
        <a href="index.php" class="logo me-auto me-lg-0"><img src="../../assets/img/logoname.png" style="width:150px; max-height:60px;" alt="" class="img-fluid"></a>
    </div>
    <div>
        <a href="../../signup/login.php" class="buttondesign">Switch to Buying</a>
    </div>

    </div>
  </header>

<!-- signIN -->
<div class="wrap6 flex-ja">
    <div class="section flex-jaf">
            <div class="content">
                <div class="box">
                    <h2>Create Supplier Account</h2>
                    <p class="subheading">Already have an account <a href="login.php">SignIn</a></p>
                </div>
            </div>

            <div class="contactform">
                <form method="post" action="register.php">
                    <?php include('errors.php'); ?>
                    <div class="inputs">
                        <!-- <label> Email </label><br> -->
                        <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>"  autofocus required>
                    </div>
                    <div class="inputs">
                        <!-- <label> Username </label><br> -->
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="inputs">
                        <!-- <label> Password </label><br> -->
                        <input type="password" placeholder="Password" name="password_1">
                    </div>
                    <div class="inputs">
                        <!-- <label> Password </label><br> -->
                        <input type="password" placeholder="Confirm Password" name="password_2">
                    </div>
                    <div class="takeaction">
                        <div class="signUp"><button type="submit" name="reg_user">Sign Up</button></div>
                    </div>

                </form>
            </div>
    </div>
</div>


    <script src="script.js"></script>
</body>
</html>
