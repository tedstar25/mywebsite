<?php

declare(strict_types= 1);   // -> enable type declarations

function is_input_empty(string $username, $pwd,string $email) {

    if(empty($username) || empty($pwd) || empty($email)) {
        return true;
    }else{
        return false;
    }
}

function is_email_invalid($email) {

    if(!filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
        return true;
    }else{
        return false;
    }
}

function is_username_taken(object $pdo, string $username) {

    if( get_username($pdo, $username)) {
        return true;
    }else{
        return false;
    }
}

function is_email_registered(object $pdo, string $email) {

    if( get_email( $pdo, $email)  ) {
        return true;
    }else{
        return false;
    }
}

function create_user(object $pdo, string $email,string $username,string $pwd) {

    set_user( $pdo, $email, $username, $pwd );

}