
<?php 
    session_start();

    require_once('./function/DB.php');
    require_once('./function/component.php');

    $database = new DB();

    $title = 'Home';
    include 'header.php';
    include 'sidebar.php';
    include 'toggleMenu.php';
    include 'content.php';
    include 'footer.php';
?>
