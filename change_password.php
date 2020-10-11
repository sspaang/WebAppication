<?php
    include 'server.php';
    session_start();
    $ID = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = $ID";
    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($link));
    $row = mysqli_fetch_assoc($result);

    $title = 'Manage Password';
    include 'header.php';
    include 'sidebar.php';
    include 'toggleMenu.php';
?>
        <!-- page content -->
            <body>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm">
                            <form class="form-signin" action="edit_db.php" method="post">
                                <h1 class="h3 mb-3 font-weight-normal">Reset Password</h1>
                                <input type="text" name="username" required class="form-control" autocomplete="off" value="<?php echo $row['username'];?>" disabled>
                                <label for="inputPassword1" class="sr-only">Password</label>
                                <input type="password" id="inputPassword1" class="form-control" name="e_password1" placeholder="Password" required>
                                <label for="inputPassword2" class="sr-only">Confirm Password</label>
                                <input type="password" id="inputPassword2" class="form-control" name="e_password2" placeholder="Confirm Password" required>
                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="edit_pw">Apply</button>                               
                            </form>
                        </div>
                        <div class="col-sm"></div>
                        <div class="col-sm"></div>
                    </div>     
                </div>
            </body>
        </div>
        </div>
    </div>
    
 <?php include 'footer.php'; ?>