<?php
    require_once('../inc/functions.php');
    $cate_id = $_GET['cate_id'];
    $isCateDeleted = deleteFromCate($cate_id);
    if($isCateDeleted) {
        header("Location: http://localhost/basic-php-project-Lyhuoy/?page=usermanager");
    }