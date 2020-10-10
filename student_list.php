<?php 
    //connect database
    include('server.php');
    session_start();

    $title = 'Student List';
    include 'header.php';
    include 'banner.php';
    include 'sidebar.php';

    $id = $_SESSION['id'];
    // query information from 'users' table
    $query = "SELECT * FROM users WHERE position = '1' 
            AND id IN 
            (SELECT enroll.id_student FROM teach JOIN enroll 
                ON teach.class_id = enroll.class_id
                AND teach.id_teacher = $id)
                ORDER BY id ASC" 
                or die("Error:" . mysqli_error($link));
    //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
    $result = mysqli_query($conn, $query);
    // นับว่ามีนักเรียนทั้งหมดกี่คน
    $rowcount = mysqli_num_rows($result);
    
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
                    <h3>This class has <?php echo $rowcount ?> students</h3>
                    <table class="table table-hover">
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
                            while($row = mysqli_fetch_array($result)) { 
                                echo "<tr>";
                                echo "<td>" .$row["id"] .  "</td> "; 
                                echo "<td>" .$row["username"] .  "</td> ";  
                                echo "<td>" .$row["firstname"] .  "</td> ";
                                echo "<td>" .$row["lastname"] .  "</td> ";
                                echo "<td>" .$row["email"] .  "</td> ";
                                echo "</tr>";
                            }
                            // free result set
                            mysqli_free_result($result);
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

<?php 
    include 'footer.php';
?>