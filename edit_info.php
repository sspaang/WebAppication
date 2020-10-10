<?php 
    session_start();

    if (isset($_GET['logout'])) {
        session_unset();   
        header('location: index.php');
    }

    include 'header.php';
    include 'banner.php';
    include 'sidebar.php';
    include 'content_edit_info.php';
    include 'footer.php';
?>