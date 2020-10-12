<?php 
include('server.php');
session_start();

$errors = array();
    // เปลี่ยน password
    if (isset($_POST['edit_pw'])) {
        $user = $_SESSION['username'];
        $pass1 = mysqli_real_escape_string($conn, $_POST['e_password1']);
        $pass2 = mysqli_real_escape_string($conn, $_POST['e_password2']);

        if (count($errors == 0) and $pass1 == $pass2) {
            $sql = "UPDATE users 
            SET password = '$pass1'
            WHERE username = '$user'";
            $query = mysqli_query($conn, $sql);
            echo "<script>";
            echo "alert(\" เปลี่ยน password สำเร็จ\");"; 
            echo "window.history.back()";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert(\" กรุณากรอก password ให้ตรงกัน\");"; 
            echo "window.history.back()";
            echo "</script>";
        }
        // close connection
        mysqli_close($conn);
    }
    // เปลี่ยนชื่อ นามสกุล
    if (isset($_POST['edit_pf'])) {
        $user = $_SESSION['username'];
        $firstname = mysqli_real_escape_string($conn, $_POST['Fname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['Lname']);
        
        if (count($errors) == 0) {
            $sql = "UPDATE users 
                    SET firstname = '$firstname',
                        lastname = '$lastname'
                    WHERE username = '$user'";
            $query = mysqli_query($conn, $sql);
            echo "<script>";
            echo "alert(\" เปลี่ยนชื่อสำเร็จ\");"; 
            echo "window.history.back()";
            echo "</script>";
        }
        mysqli_close($conn); 
    }

    //ซื้อคอร์สเรียน
    if(isset($_SESSION['cart'])){

        $classid = array_column($_SESSION['cart'], "class_id");

        if (isset($_POST['ok'])) {
            foreach ($classid as $key => $val) {
                $cid = intval($val);
                $student_id = intval($_SESSION['id']);
                $sql = "INSERT INTO enroll VALUES ($student_id, $cid)";
                $qry = mysqli_query($conn, $sql);
                unset($_SESSION['cart'][$key]);
                echo "<script>";
                echo "alert(\" Complete!\");"; 
                echo "window.history.back()";
                echo "</script>";
            }
        }
}
    
?>