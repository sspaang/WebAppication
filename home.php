<?php 
    session_start();

    if (isset($_GET['logout'])) {
        session_unset();
        header('location: index.php');
    }

    include 'header.php';
    include 'banner_loggedin.php';
    if ($_SESSION['position'] == '1') {
        include 'sidebar_student.php';
    } elseif ($_SESSION['position'] == '2') {
        include 'sidebar_teacher.php';
    }
    if ($_SESSION['position'] == '1') {
        include 'content_student.php';
    } elseif ($_SESSION['position'] == '2') {
        include 'content_teacher.php';
    }
    include 'footer.php';

?>