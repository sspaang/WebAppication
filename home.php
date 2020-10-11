<?php 
    session_start();

    require_once('./function/DB.php');
    require_once('./function/component.php');

    $database = new DB();

    $title = 'Home';
    include 'header.php';
    include 'sidebar.php';
    include 'toggleMenu.php';
    if ($_SESSION['position'] == '1') {
        include 'content_student.php';
    } elseif ($_SESSION['position'] == '2') {
        include 'content_teacher.php';
    }
    include 'footer.php';

?>