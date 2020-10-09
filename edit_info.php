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
    include 'content_edit_info.php';
    include 'footer.php';
?>