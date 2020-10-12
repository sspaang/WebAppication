<?php 
    session_start();

    require_once('./function/DB.php');
    require_once('./function/component.php');

    $database = new DB();
    $student_id = $_SESSION['id'];

    // add to cart
    if(isset($_POST['add'])){
        if(!isset($_SESSION['username'])){
            echo "<script>";
            echo "alert(\" กรุณาเข้าสู่ระบบ\");"; 
            echo "window.history.back()";
            echo "</script>";
        } else {
            if(isset($_SESSION['cart'])){

                $item_array_id = array_column($_SESSION['cart'], "class_id"); // return an array of class_id
                
                if(in_array($_POST['class_id'], $item_array_id)) { //ถ้ามีสินค้านั้นในตะกร้าอยู่แล้ว
                    echo "<script>alert('This course is already in the cart!')</script>";
                    echo "<script>>window.history.back()</script>";

                } else {
                    
                    $count = count($_SESSION['cart']);
                    $item_array = array(
                        'class_id'=>$_POST['class_id']
                    );

                    $_SESSION['cart'][$count] = $item_array;  //$_SESSION['cart] เก็บ array
                }

            } else {
                $item_array = array(
                    'class_id'=>$_POST['class_id'] 
                );

                // create new session variable
                $_SESSION['cart'][0] = $item_array; //$_SESSION['cart] เก็บ array
            }
        }
    } 


    $title = 'Home';
    include 'header.php';
    include 'sidebar.php';
    include 'toggleMenu.php';
    include 'content_student.php';
    include 'footer.php';
 
?>