<?php 
    session_start();

    include 'header.php';
    include 'banner.php';
    include 'sidebar.php';
    if ($_SESSION['position'] == '1') {
        include 'content_student.php';
    } elseif ($_SESSION['position'] == '2') {
        include 'content_teacher.php';
    }
    include 'footer.php';

?>