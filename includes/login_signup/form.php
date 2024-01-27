<?php
require_once '../config_session.inc.php';
require_once 'signup_view.inc.php';
require_once 'login_view.inc.php';

?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../../css/constants.css">
<link rel="stylesheet" type="text/css" href="../../css/navbar.css">
<link rel="stylesheet" type="text/css" href="../../css/main.css">
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="../../css/app.css">


<body class="app" >
    <section class ="navbar app__section">

        <ul class='navbar__links'>
            <form action="includes/login_signup/logout.inc.php" method="post">
                    <button class="custom__button">Logout</button>
                </form>
                <li class='p__opensans'><a href = "#home" >Home</a></li>
                <li class='p__opensans'><a href = "#projects" >Projects</a></li>
                <li class='p__opensans'><a href = "#contact" >Contact</a></li>
                <form action="../../index.php" >
                <button class="navbar__button">
                    <img width="50px" height="50px" src="../../assets/logout.svg" alt="Your Image Alt Text">
                </button>
            </form>
        </ul>
    </section>
    <section class="form__section app__section">

        <?php if( !isset($_SESSION['user_id'])) { ?>

        <div class="form__section-div">
            <div class="form__section-div-form">
                <h3 class="form__section-div-h">Login</3>
                <form action="login.inc.php" method="post">
                    <div>
                        <input name="username"  type="text" placeholder="Username">
                    </div>
                    <div>
                        <input name="pwd"  type="password" placeholder="Password">
                    </div>
                    <button>Login</button>
                </form>
            </div>

            <?php }?>

            <?php
            check_login_errors();
            ?>


            <div class="form__section-div-form" >
                <h3 class="form__section-div-h">Signup</3>
                <form action="signup.inc.php" method="post">

                    <?php
                    sign_input();
                    ?>

                    <button>Signup</button>
                </form>

                <?php
                check_signup_errors();
                ?>

            </div>


        </div>



    </section>

    <div>
            <h3 class="form__section-div-h">
                <?php
                output_username();
                ?>
            </h3>

            <div class="form__section-return">
                <form action="../../index.php" method="post">
                    <button class="custom__button">Return</button>
                </form>
            </div>
        </div>



</body>
