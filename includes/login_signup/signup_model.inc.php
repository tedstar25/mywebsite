<?php

declare(strict_types= 1);   // -> enable type declarations 

// model file is only interacting with database (only controler file is allowed to interact with these file)


//         require_once('dbh.inc.php'); not required, first import in signup.inc.php



function get_username(object $pdo, string $username){

    $query = "SELECT username FROM user WHERE username=:username;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);  // -> fetch gets first result, fetchall gets all results 

    return $result; // is username not exist -> false statement 

}


function get_email(object $pdo, string $email){

    $query = "SELECT username FROM user WHERE email=:email;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC); 

    return $result; 

}

function set_user(object $pdo, string $email, string $username, string $pwd){

    $query = "INSERT INTO user (username,pwd,email) VALUES (:username,:pwd,:email)  ;";

    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];

    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);


    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->execute();


}