<?php
    require_once('../inc/functions.php');
    $user_id = $_GET['user_id'];
    $isDeleteUser = deleteFromUser($user_id);
    if($isDeleteUser) {
        header("Location: http://localhost/basic-php-project-Lyhuoy/index.php?page=usermanager");
    }