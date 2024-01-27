<?php


if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = $_POST["username"];       // best practice: use htmlspecialchars() only when output something 
    $pwd = $_POST["pwd"]; 
    $email = $_POST["email"]; 


    try {

        // order is important !!!!!!!!!!!!!!!!!     1.db 2.model 3.controller 
        require_once('../dbh.inc.php');               
        require_once('signup_model.inc.php');
        require_once('signup_contr.inc.php');


        //ERROR HANDLERS
        $errors = [];
        
        if(is_input_empty($username,$pwd,$email) ){
            $errors['empty_input'] = 'Fill out all fields!';
        }

        if(is_email_invalid($email) ){
            $errors['invalid_email'] = 'Invalid E-Mail used!';
        }
        

        if(is_username_taken( $pdo, $username)){
            $errors['username_taken'] = 'Username already taken!';
        }

        if( is_email_registered( $pdo, $email)){
            $errors['email_used'] = 'E-Mail already registered!';
        }

        require_once('../config_session.inc.php');

        if($errors){
            $_SESSION["errors_signup"] = $errors;

            $signupData = [
                "username" => $username,
                "email"=> $email,
            ];

            $_SESSION["signup_data"] = $signupData;

            


           header("Location: form.php"); 
            die();
        }


        create_user( $pdo,  $email,  $username,  $pwd) ;

        header("Location: ../../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e){
        die("Query during signup failed:" . $e->getMessage());
    }


}else{
    header("Location: ../../index.php"); 
    die();
}