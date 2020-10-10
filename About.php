<?php 
    session_start();

    $title = 'About';
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
            
            <h1>Members</h1>
            <div class="th-lang">
                <h3>61363753 นายวิทยา ทองจีน</h3>
                <h3>61364392 นางสาวสิณีนาฏ สีสังข์</h3>
                <p class='th-lang'>เป็นส่วนหนึ่งของรายวิชา Database 305365-2</p>  
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>