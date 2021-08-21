<?php
    require_once('../inc/functions.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isCreateCate = createCate($_POST);
        if($isCreateCate) {
            header("Location: http://localhost/basic-php-project-Lyhuoy/?page=usermanager");
        }
    }