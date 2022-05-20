<?php

    // Starting session
    session_start();

    // create constants to store non repeating values

    define('SITEURL', 'http://localhost/main/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    DEFINE('DB_NAME', 'project');

    $conn = mysqli_connect(LOCALHOST , DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); // selecting database


    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: signup/login.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: signup/login.php");
    }

    //  connect with database
     $connc = new PDO("mysql:host=localhost;dbname=project", "root", "");

    // fetch all FAQs from database
     $sql = "SELECT * FROM faqs";
     $statement = $connc->prepare($sql);
     $statement->execute();
     $faqs = $statement->fetchAll();


?>

