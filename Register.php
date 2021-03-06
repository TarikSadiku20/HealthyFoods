<?php
require './controller/UserController.php';
$user = new UserController;
if(isset($_POST['submit'])) {
    $user->store($_POST);
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In/Register</title>
    <link rel="stylesheet" href="./Css/RegisterCss.css">
    <script defer src="./Js/RegisterValidation.js"></script>
</head>
<body>
    

    
    <main> 
    <div id="error"></div>
    <form id="form" action="" method="POST">
        <div class="forminputs">
            <label for="name"></label>
            <input id="name" name="name" type="text" placeholder="Name">
        
        
            <label for="surname"></label>
            <input id="surname" name="surname" type="text" placeholder="Surname">
    
        
            <label for="email"></label>
            <input id="email" name="email" type="email" placeholder="Email">
        
        
            <label for="password"></label>
            <input id="password" name="password" type="password" placeholder="Password">
        </div>


        <div id="buttoncontrols">
            <button type="submit" name="submit">Submit</button>
            <p><a href="./LogIn.php"> Log In</a></p>
        </div>
    </form>
    </main>
    
</body>
</html>
