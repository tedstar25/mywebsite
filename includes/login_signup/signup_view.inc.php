<?php

declare(strict_types= 1);   // -> enable type declarations


function sign_input(){  	        // htmlspecialchars() notwendig und sinnvoll hier ? 

    if(isset($_SESSION["signup_data"]["username"])&& !isset($_SESSION["errors_signup"]["username_taken"])){
        echo '<div><input name="username"  type="text" placeholder="Username" value=" ' .htmlspecialchars($_SESSION["signup_data"]["username"]) .' " ><div>';
    }else{
        echo '<div><input name="username"  type="text" placeholder="Username"></div>';
    }

    echo '<div><input name="pwd"  type="password" placeholder="Password"></div>';

    if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"]) ){
        echo '<div><input name="email" type="text" placeholder="E-Mail" value="'.htmlspecialchars($_SESSION["signup_data"]["email"]).'"></div>';
    }else{
        echo '<div><input name="email" type="text" placeholder="E-Mail"></div>';
    }







}


function check_signup_errors(){

    if(!$_SESSION){
        echo"No session ";
    }

    if(isset($_SESSION['errors_signup'])){



        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach($errors as $error){
            echo '<p class="form-error">'.$error."</p>";
        }

        unset($_SESSION['errors_signup']);
        
    }else if ( isset($_GET['signup']) && $_GET['signup'] == "success" ) {

        echo '<br>';
        echo '<p class="form-success">Signup success!</p>';

    }
}