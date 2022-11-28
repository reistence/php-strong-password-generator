<?php 

function genratePassword($user_length, $array){
    $password_string = '';
    $array_length = count($array) - 1;
    while (strlen($password_string) < $user_length ) {
        $password_string .= $array[rand(0,$array_length)];    
    }
    return $password_string;
};


// function genratePasswordWithoutTwins($user_length, $array){
//     $new_pass = "";
//     $array_length = count($array) - 1;
   
//         do {
//          $new_pass .= $array[rand(0,$array_length - 1)];
//         } while ( strlen($new_pass) < $user_length && str_contains($new_pass, $array[rand(0,$array_length)] ) === false);
//         // var_dump($new_pass);

//     return $new_pass;
    

// }

?>