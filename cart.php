<?php 
    session_start();

    require_once('./function/DB.php');
    //require_once('./function/component.php');

    $database = new DB();
    $student_id = $_SESSION['id'];

    $title = 'Cart';
    include 'header.php';
    include 'sidebar.php';
    include 'toggleMenu.php';
?>

<div class="container-fluid">
            
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>