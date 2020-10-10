<div class="wrapper">
        <!-- sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <?php if (!isset($_SESSION['username'])) : // ถ้าไม่มีการ log in?>
                <a href="index.php">
                    <!-- <img src="https://www.flaticon.com/svg/static/icons/svg/3468/3468192.svg" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">  -->
                    <h3 style="display: inline;"> &#x1F393; </h3>
                    <h3 style="display: inline;">Kiki</h3>
                </a>
                <?php endif ?>
                <?php if (isset($_SESSION['username'])) : // ถ้ามีการ log in?>
                <a href="home.php">
                    <h3 style="display: inline;"> &#x1F393; </h3>
                    <h3 style="display: inline;">Kiki</h3>
                </a>
                <?php endif ?>
            </div>