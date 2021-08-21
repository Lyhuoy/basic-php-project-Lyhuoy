<?php
    require_once('../inc/functions.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isUserUpdated = updateUser($_POST);
        if($isUserUpdated) {
            header("Location: http://localhost/basic-php-project-Lyhuoy/index.php?page=usermanager");
        }
    }