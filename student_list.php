<?php 
    //connect database
    include('server.php');  
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student List</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom css --> 
    <link rel="stylesheet" href="css/sidebar.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>
    <div class="wrapper">
        <!-- sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Sidebar</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Menu</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Class</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Math</a>
                        </li>
                        <li>
                            <a href="#">Science</a>
                        </li>
                        <li>
                            <a href="#">Programming</a>
                        </li>
                    </ul>
                </li>
                <li>
                <a href="#">About</a>
                </li>
                <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                <a href="index_teacher.php">Back</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>

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
                            // query information from 'users' table
                            $query = "SELECT * FROM users WHERE position = '1' ORDER BY id asc" or die("Error:" . mysqli_error($link));
                            //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
                            $result = mysqli_query($conn, $query); 
                            while($row = mysqli_fetch_array($result)) { 
                                echo "<tr>";
                                echo "<td>" .$row["id"] .  "</td> "; 
                                echo "<td>" .$row["username"] .  "</td> ";  
                                echo "<td>" .$row["firstname"] .  "</td> ";
                                echo "<td>" .$row["lastname"] .  "</td> ";
                                echo "<td>" .$row["email"] .  "</td> ";
                                echo "</tr>";
                            }
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
    <footer class="page-footer bg-dark fixed-bottom">
        <div class="footer-copyright text-center py-3">
            <span class="text-muted">&copy;Sineenat Seesung 2020</span>
        </div>
    </footer>
  

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

</body>
</html>
