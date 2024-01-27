<?php

declare(strict_types= 1);   // -> enable type declarations

function check_login_errors(){  	        // htmlspecialchars() notwendig und sinnvoll hier ? 

    if(isset($_SESSION['errors_login'])){

        $errors = $_SESSION['errors_login'];

        echo "<div>";
        echo "<br>";

        foreach($errors as $error){
            echo '<p class="form-error">'.$error."</p>";
        }

        echo "</div>";

        unset($_SESSION['errors_login']);
        
    }else if ( isset($_GET['login']) && $_GET['login'] == "success" ) {   // 2. statement -> checking for this:  header("Location: ../index.php?login=success");

        echo '<br>';
        echo '<p class="form-success">Login success!</p>';

    }
}


function output_username( ){    

    if( isset ($_SESSION['user_id'])) {
        echo 'You are logged in as '.$_SESSION['user_username'];
    }else{
        echo 'You are not logged in.';
    }
}