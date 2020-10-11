<?php 
    session_start();

    require_once('./function/DB.php');
    require_once('./function/component.php');

    $database = new DB();
    $student_id = $_SESSION['id'];

    $title = 'Home';
    include 'header.php';
    include 'sidebar.php';
    include 'toggleMenu.php';
    include 'content_student.php';
    include 'footer.php';

?>