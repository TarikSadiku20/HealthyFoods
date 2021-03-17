<?php

require './controller/AuthController.php';

$user = new AuthController;

    if(isset($_POST['submit'])) {
        $user->login($_POST);
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In/Register</title>
    <link rel="stylesheet" href="./Css/LogInCss.css">
    <script defer src="./Js/LogInValidation.js"></script>
</head>
<body>

    

    <main>
    <div id="error"></div>
    <form id="form" action="" method="POST">
        <div class="forminputs">
            <label for="email"></label>
            <input id="email" name="email" type="email" placeholder="Email">
        
        
            <label for="password"></label>
            <input id="password" name="password" type="password" placeholder="Password">

        </div>
        
        <div id="buttoncontrols"> 
        <button type="submit" name="submit">Log In</button>

       <p><a href="./Register.php"> Register</a></p>

    </div>
    </form>
</main>
    
</body>
</html>