<?php
    require_once('../inc/functions.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isCreated = updatePost($_POST);
        if($isCreated) {
            header("Location: http://localhost/basic-php-project-Lyhuoy/index.php?page=usermanager");
        }
    }