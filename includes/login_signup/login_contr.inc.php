<?php

declare(strict_types= 1); 

function is_login_input_empty( string $pwd, string $username){    // result can be array or boolean

    if(empty($username)||empty($pwd))  {
        return true;
    }else{
        return false;
    }
}

function is_username_wrong( bool|array $result){    // result can be array or boolean

    if( !$result) {
        return true;
    }else{
        return false;
    }
}

function is_password_wrong( string $pwd, string $hashedPwd){    // result can be array or boolean

    if(!password_verify( $pwd, $hashedPwd ) ) {
        return true;
    }else{
        return false;
    }
}

