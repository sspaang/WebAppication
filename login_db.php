<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = $password;
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
            $result  = mysqli_query($conn, $query);
            $student = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND position = '1'";
            $teacher = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND position = '2'";
            $result_teacher = mysqli_query($conn, $teacher);
            $result_student = mysqli_query($conn, $student);
            
            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                
                if (mysqli_num_rows($result_student) == 1) { // ถ้ามีเป็นนักเรียน
                    header("location: student_home.php");
                } elseif (mysqli_num_rows($result_teacher) == 1) { // ถ้าเป็นอาจารย์
                    header("location: teacher_home.php");
                }
            } else {
                array_push($errors, "Wrong username or password");
                $_SESSION['error'] = "Wrong username or password, try again";
                header("location: login.php");
            }
            } else {
                array_push($errors, "Username & Password is required");
                $_SESSION['error'] = "Username & Password is required";
                header("location: login.php");
        }
    }

?>