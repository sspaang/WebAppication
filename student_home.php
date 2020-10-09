<?php 
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }

    include 'header.php';
    include 'banner.php';
    include 'sidebar_student.php';
    include 'content_student.php';
    include 'footer.php';
?>