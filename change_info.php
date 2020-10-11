<?php 
    include 'server.php';
    session_start();
    $ID = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = $ID";
    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($link));
    $row = mysqli_fetch_assoc($result);

    $title = 'Manage Profile';
    include 'header.php';
    include 'sidebar.php';
    include 'toggleMenu.php';
?>

        <!-- page content -->
            <div class="container-fluid">    
                <div class="row">
                    <div class="col-sm">
                        <form class="form-signin" action="edit_db.php" method="post">
                            <h1 class="h3 mb-3 font-weight-normal">Profile</h1>
                            <input type="text" name="username" required class="form-control" autocomplete="off" value="<?php echo $row['username'];?>" disabled>
                            <input type="email" name="email" required class="form-control" value="<?php echo $row['email'];?>" disabled>
                            <input type="text" id="inputFname" class="form-control" name="Fname" value="<?php echo $row['firstname'];?>" required>
                            <input type="text" id="inputLname" class="form-control" name="Lname" value="<?php echo $row['lastname'];?>" required>
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="edit_pf">Apply</button>                               
                        </form>
                    </div>
                    <div class="col-sm"></div>
                    <div class="col-sm"></div>
                </div>     
            </div>
        </div>
    </div>

   <?php include 'footer.php'; ?>