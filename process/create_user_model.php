<?php
    require_once('../inc/functions.php');
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $isUserCreated = createUser($_POST);
        if($isUserCreated) {
            header("Location: http://localhost/basic-php-project-Lyhuoy/index.php?page=usermanager");
        }
    }

?>