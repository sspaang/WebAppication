<?php 
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }

    include 'header.php';
    include 'banner.php';
    include 'sidebar_teacher.php';
    include 'content_teacher.php';
    include 'footer.php';

?>