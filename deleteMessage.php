<?php
    require './controller/ContactController.php';

    $user = new ContactController;

    if(isset($_GET['id'])) {
        $userId = $_GET['id'];
    }

    $user->destroy($userId);
?>