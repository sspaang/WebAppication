
<?php
    include 'server.php';
    require_once('./function/DB.php');
    require_once('./function/component.php');

    $database = new DB();

    $title = 'Home';
    include 'header.php';
    include 'banner.php';
    include 'sidebar.php';
    include 'content.php';
    include 'footer.php';
?>
