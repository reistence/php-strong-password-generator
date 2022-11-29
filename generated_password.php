<?php
session_start();
include_once __DIR__ . "/partials/function.php";

$aplhabet = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

$special_characters = ['!', '$', '%', '&','/', '(', ')', '=', '?', '^', '*', '.', ':', ';', ',', '@', '#', '_', '{', '}', '<', '>', '+',]; 

$numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

$pssw_len = intval($_GET["pass-len"] ?? '');
$letters = $_GET["letters"] ?? '';
$numb = $_GET["numbers"] ?? '';
$symbols = $_GET["symbols"] ?? '';
$repetition = $_GET['repetition'] ?? '';



//MANIPULATING ARRAY - OLDER VERSION
// $all_characters = array_merge($aplhabet, $special_characters, $numbers);
// if ($pssw_len >= 8) {
//     if ($letters) {
//         $generated_pssw = genratePassword($pssw_len, $aplhabet);
//     };
//     if($numb){
//         $generated_pssw = genratePassword($pssw_len, $numbers);
//     };
//     if($symbols){
//         $generated_pssw = genratePassword($pssw_len, $special_characters);
//     };

//     if($letters && $numb && $symbols ){
//         $generated_pssw = genratePassword($pssw_len, $all_characters);
//     };

//     if($letters && $numb && !$symbols){
//         $generated_pssw = genratePassword($pssw_len, array_merge($aplhabet, $numbers));
//     };

//     if($letters && !$numb && $symbols){
//         $generated_pssw = genratePassword($pssw_len, array_merge($aplhabet, $special_characters));
//     };

//     if(!$letters && $numb && $symbols){
//         $generated_pssw = genratePassword($pssw_len, array_merge($special_characters, $numbers));
//     };
// } else{
//     $generated_pssw = "Password has to be longer than 8 characters";
// };



// MANIPULATING STRINGS - NEW VERSION
$all_characters = "";

if ($letters) {
        $all_characters .= implode("",$aplhabet);
    };
if($numb){
        $all_characters .= implode("",$numbers);
    };
if($symbols){
        $all_characters .= implode("",$special_characters);
};

$generated_pssw = genratePassword($pssw_len, $all_characters, $repetition);

if (!empty($generated_pssw)) {
    $_SESSION["generated_pssw"] = $generated_pssw;
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Generated Password</title>
</head>
<body>
    <div class="container">
        <div class="password">
            <h1>Your Generated Password is:</h1>
            <?php 
            echo "<p>" . $_SESSION["generated_pssw"] . "</p>" ."<br>";  
            ?>
        </div>
    </div>
</body>
</html>