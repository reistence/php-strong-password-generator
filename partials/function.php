<?php 

function genratePassword($user_length, $array){
    $password_string = '';
    $array_length = count($array) - 1;

    while (strlen($password_string) <= $user_length - 1) {
        $password_string .= $array[rand(0,$array_length)];    
    }

    return $password_string;
};

?>