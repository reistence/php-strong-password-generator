<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Strong Password Generator</title>
</head>
<body>
    <div class="container">
        <div>  
            <h1>Password Generator</h1>
            <h2>Generate a secure password</h2>
        </div>
        <form action="generated_password.php" method="GET">
            <div>
                <label for="pssw-len">Password length:</label>
                <input type="text" id="pssw-len" name="pass-len">
            </div>
             <div>
                 <input type="checkbox" id="repetition" name="repetition">
                 <label for="repetition">Allow repetition</label>
            </div>
            <div>
                <input type="checkbox" name="letters" id="letters" checked>
                <label for="letters">Letters</label>
            </div>
            <div>
                <input type="checkbox" name="numbers" id="numbers" checked>
                <label for="numbers">Numbers</label>
            </div>
            <div>
                <input type="checkbox" name="symbols" id="symbols" checked>
                <label for="symbols">Symbols</label>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>