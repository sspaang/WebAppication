<?php 
    session_start();

    include 'header.php';
    include 'banner.php';
    include 'sidebar.php';
?>

        <!-- page content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button> 
                </div>
            </nav>
            <div class="container-fluid">    
                <div class="table-responsive">
                    <table class="table table-hover"> <!-- เอา form มาใส่แทน -->
                    <caption>List of students</caption>
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php 
                            // query information from 'users' table
                            $query = "SELECT * FROM users WHERE position = '1' AND username =  " or die("Error:" . mysqli_error($link));
                            //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
                            $result = mysqli_query($conn, $query); 
                            https://www.youtube.com/watch?v=wXu0ymUEIR4

                            //5. close connection
                            mysqli_close($conn);
                        ?>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

   <?php include 'footer.php'; ?>