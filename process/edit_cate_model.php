<?php
    require_once('../inc/functions.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isCateUpdated = updateCate($_POST);
        if($isCateUpdated) {
            header("Location: http://localhost/basic-php-project-Lyhuoy/?page=usermanager");
        }
    }