<?php
session_start();
include_once __DIR__ . "/partials/function.php";
// include_once __DIR__ . "/index.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Password</title>
</head>
<body>
    <h1>Your Passwoord is:</h1>
    <?php 

echo  $_SESSION["generated_pssw"];
var_dump($_SESSION["generated_pssw"]);
?>
    
</body>
</html>