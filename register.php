<?php 
    session_start();
    include('server.php'); 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Sign up</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signup.css" rel="stylesheet">
  </head>
  
  <body class="text-center">
    <form class="form-signin" action="register_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <img class="mb-4" src="https://www.flaticon.com/svg/static/icons/svg/3468/3468192.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password_1" placeholder="Password" required>
        <label for="inputPassword" class="sr-only">Confirm password</label>
        <input type="password" id="inputPassword" class="form-control" name="password_2" placeholder="Confirm password" required>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email" required>
        <label for="inputFName" class="sr-only">Firstname</label>
        <input type="text" id="inputFName" class="form-control" name="firstname" placeholder="Firstname" required>
        <label for="inputLName" class="sr-only">Lastname</label>
        <input type="text" id="inputLName" class="form-control" name="lastname" placeholder="Lastname" required>
        <label for="Position" class="sr-only">Position</label>
        <select name="position" id="Position" class="form-control" required>
          <option>Choose Position...</option>
          <option value="1">นักเรียน</option>
          <option value="2">อาจารย์</option>
        </select>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="reg_user">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
</body>
</html>