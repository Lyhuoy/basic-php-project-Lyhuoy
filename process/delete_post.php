<?php
    require_once('../inc/functions.php');
    $post_id = $_GET['post_id'];
    $isPostDeleted = deleteFromPost($post_id);
    if($isPostDeleted) {
        header("Location: http://localhost/basic-php-project-Lyhuoy/index.php?page=usermanager");
    }
