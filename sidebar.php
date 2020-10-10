<ul class="list-unstyled components">
                <?php if (isset($_SESSION['username'])) : ?>
                    <p>Hello <b><?php echo $_SESSION['username'] ?></b></p>
                <?php endif ?>
                <p>Menu</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Lesson</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Database</a>
                        </li>
                        <li>
                            <a href="#">English</a>
                        </li>
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
                <a href="About.php">About</a>
                </li>
                <?php if (isset($_SESSION['username'])) : ?>
                <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Account</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="change_info.php">Profile</a>
                        </li>
                        <li>
                            <a href="change_password.php">Password</a>
                        </li>
                    </ul>
                </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) and $_SESSION['position'] == '2') : ?>
                    <li>
                    <a href="student_list.php">Student list</a>
                    </li>
                <?php endif ?>

                <?php if (!isset($_SESSION['username'])) : ?>
                    <li>
                    <a href="login.php">Sign in</a>
                    </li>
                    <li>
                        <a href="register.php">Sign up</a>
                    </li>
                <?php endif ?>
                <?php if (isset($_SESSION['username'])) : ?>
                    <li>
                    <a href="logout.php">Sign out</a>
                    </li>
                <?php endif ?>
            </ul>
        </nav>