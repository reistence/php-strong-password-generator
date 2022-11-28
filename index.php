<?php 
session_start();

include_once __DIR__ . "/partials/function.php";

$pssw_len = intval($_GET["pass-len"] ?? '');

$aplhabet = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

$special_characters = ['!', '£', '$', '%', '&','/', '(', ')', '=', '?', '^', '*', '§', '.', ':', ';', ',', '@', '#', '_']; 

$numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

$all_characters = array_merge($aplhabet, $special_characters, $numbers);


$generated_pssw = genratePassword($pssw_len, $all_characters);

if (!empty($generated_pssw)) {
    $_SESSION["generated_pssw"] = $generated_pssw;
    var_dump($_SESSION);
};



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>

<form action="generated_password.php" method="GET">

<label for="pssw-len">Password length:</label>
<input type="text" id="pssw-len" name="pass-len">
<button type="submit">Submit</button>


</form>
    
</body>
</html>