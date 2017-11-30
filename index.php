<?php

include 'includes/config.php';
include 'includes/database.php';

$action = isset($_GET['action'])?$_GET['action']:'home';

switch($action){

    case 'home':

        include 'View/head.php';
        include 'View/article.php';





        break;

    case 'upload':

        include 'View/head.php';
        include 'View/upload.php';




        break;

    case 'favorite':

        include 'View/head.php';
        include 'View/favorite.php';

        break;

    case '':

        break;

}




 ?>
