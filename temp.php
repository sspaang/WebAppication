

<!-- Sticky navbar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="https://www.flaticon.com/svg/static/icons/svg/3468/3468192.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Kiki
        </a>
        <!-- Collapse button -->
        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                class="fas fa-bars fa-1x"></i></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <!-- Navigation bar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>

            <div class="ml-md-2 my-2 my-lg-0">
                <button class="btn btn-primary" onclick="location.href='login.php'" type="button">Sign in</button>
                <button class="btn btn-primary" onclick="location.href='register.php'" type="button">Sign up</button>
            </div>
        </div>
    </nav>

    <!-- index -->
    <!-- Sticky navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="https://www.flaticon.com/svg/static/icons/svg/3468/3468192.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Kiki
        </a>
        <!-- Collapse button -->
        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                class="fas fa-bars fa-1x"></i></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <!-- Navigation bar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>

            <div class="ml-md-2 my-2 my-lg-0">
                <button class="btn btn-primary" onclick="location.href='login.php'" type="button">Sign in</button>
                <button class="btn btn-primary" onclick="location.href='register.php'" type="button">Sign up</button>
            </div>
        </div>
    </nav>

    <!-- index_user --> 
      <!-- Sticky navbar -->
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="https://www.flaticon.com/svg/static/icons/svg/3468/3468192.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Kiki
        </a>
        <!-- Collapse button -->
        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                class="fas fa-bars fa-1x"></i></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <!-- Navigation bar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index_user.php">Home</a>
                    </li>
                    <span class="navbar-text">Welcome
                    <?php if (isset($_SESSION['username'])) : ?>    
                        <?php echo $_SESSION['username'] ?>
                    <?php endif ?>!
                    You are now logged in</span>
                </ul>

            <div class="ml-md-2 my-2 my-lg-0">
            <button class="btn btn-primary" onclick="location.href='index.php?logout=1'" type="button">Sign out</button>
            </div>
        </div>
    </nav>