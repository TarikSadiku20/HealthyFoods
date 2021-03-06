<?php

require './controller/ContactController.php';
$user = new ContactController;
if(isset($_POST['submit'])) {
    $user->store($_POST);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact </title>
    <link rel="stylesheet" href="./Css/ContactUsCss.css">
</head>
<body>  
<?php
    include "./Header.php";
    ?>

        <main>
            <div class="formContainer">
                <h2>Start Getting Results</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <br />
                        <input type="text" name='firstname' id="first-name">
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <br />
                        <input type="text" name="lastname" id="last-name">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <br />
                        <input type="text" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <br />
                        <input type="text" name="email">
                    </div>
                    

                    <div class="form-group form-select" >
                        <label>How can we help</label>
                        <br />
                        <select name="ideas" id="ideas">
                            <option value="null">Zgjedh opsionin</option>
                            <option value="diet">Me nevojitet nje diete e re</option>
                            <option value="ushtrime">Cilat ushtrime t'i bejme?</option>
                            <option value="plan">Plani ushtrimore</option>
                            <option value="ushqim">Ushqimi i nevojshem</option>
                        </select>
                    </div>

                    <div class="form-group form-select">
                        <label>Please tell us more</label>
                        <br />
                        <textarea rows="5" id="tellus" name="tellus" option value="null">Na shkruaj...</textarea>
                    </div>
                    <button id="contact-button" name="submit" value="submit">Send message</button>

                </form>
            </div>
        </main>
       


        <?php
    include "./Footer.php";
    ?>

