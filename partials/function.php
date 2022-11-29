<?php 

function genratePassword($user_length, $string, $boolean){
    $password_string = '';
    //ARRAY VERSION
    // $array_length = count($array) - 1; 
    //STRING VERSION
    $string_length = strlen($string) - 1;

    if($user_length >= 8){
        while (strlen($password_string) < $user_length ) {
            if(!$boolean){
                if(!str_contains($password_string, $string[rand(0,$string_length)] )){
                    $password_string .= $string[rand(0,$string_length)];    
                };
    
            } else {
                $password_string .= $string[rand(0,$string_length)];    
            }
        }
    } else {
        $password_string = "The Password length must be grater than 8 characters";
    }
    return $password_string;
};


?>