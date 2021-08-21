<?php 
    require_once('partial/header.php'); 
    require_once('partial/navbar.php'); 
    if (isset($_GET['page'])) {
        $isPageExist = file_exists('pages/' . $_GET['page'] . '.php');
        $page = 'pages/' . $_GET['page'] . '.php';
        if($isPageExist) {
            require_once($page);
        }else {
            require_once('pages/404.php');
        }
    }else {
        require_once('pages/home.php');
    }
    require_once('partial/footer.php'); 
?>