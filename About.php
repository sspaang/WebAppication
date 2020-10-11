<?php 
    session_start();

    require_once('./function/DB.php');
    require_once('./function/component.php');

    $database = new DB();

    $title = 'About';
    include 'header.php';
    include 'sidebar.php';
    include 'toggleMenu.php';
?>

<!-- page content -->
        <div class="container-fluid">
            <div class="text-center">
                <div class="th-lang">
                    <h1>Members</h1>
                    <h4>61363753 นายวิทยา ทองจีน</h4>
                    <h4>61364392 นางสาวสิณีนาฏ สีสังข์</h4>
                    <p class='th-lang'>เป็นส่วนหนึ่งของรายวิชา Database 305365-2</p>  
                </div>
            </div>  
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>