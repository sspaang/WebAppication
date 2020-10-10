<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']); // ป้องกันอักขระพิเศษ
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (count($errors) == 0) {
            //$password = $password;
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
            $result  = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) == 1) { // ถ้าข้อมูลมีใน database
                
                $row = mysqli_fetch_array($result);
                // เก็บ session ของ username
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $row['id'];
                $_SESSION['position'] = $row['position'];
                
                header('location: home.php');
            } else {
                array_push($errors, "Wrong username or password");
                $_SESSION['error'] = "Wrong username or password, try again";
                header("location: login.php");
            }
        }
    }

?>