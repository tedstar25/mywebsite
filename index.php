<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/login_signup/signup_view.inc.php';
require_once 'includes/login_signup/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/constants.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">

    <title>MyWebsite</title>
</head>

<body class="app">

    <section class ="navbar app__section">

        <ul class='navbar__links'>
        <form action="includes/login_signup/logout.inc.php" method="post">
                <button class="custom__button">Logout</button>
            </form>
            <li class='p__opensans'><a href = "#home" >Home</a></li>
            <li class='p__opensans'><a href = "#projects" >Projects</a></li>
            <li class='p__opensans'><a href = "#contact" >Contact</a></li>
            <form action="includes/login_signup/form.php" >
            <button class="navbar__button">
                <img width="50px" height="50px" src="assets/logout.svg" alt="Your Image Alt Text">
            </button>
        </form>
        </ul>

    </section>

    
</body>
</html>