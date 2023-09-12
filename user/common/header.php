<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark stroke">
            <h1>
                <img src="common/logo.png">
                <a class="navbar-brand" href="index.php">
                    Sakshi-Hospital </a>
            </h1>
            <!-- if logo is image enable this   
          <a class="navbar-brand" href="#index.html">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <?php

                    if (isset($_SESSION['user_id'])) {

                        ?>

                        <li class="nav-item ">
                            <a class="nav-link" href="b_appoinment.php">Book appoinment</a>
                        </li>
                        <li class="nav-item ">
                            <div class="profile_details">
                                <ul>
                                    <li class="dropdown profile_details_drop">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <div class="profile_img">
                                                <span class="prfil-img"><button class="btn btn-danger dropdown-toggle"
                                                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                        aria-expanded="false">My profile</button> </span>

                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu drp-mnu">

                                            <li> <a class="dropdown-item" href="m_appoinment.php"><i class="fa fa-user"></i>
                                                    My Appoinment</a> </li>
                                            <li> <a class="dropdown-item" href="m_profile.php"><i
                                                        class="fa fa-suitcase"></i> Edit Profile</a> </li>
                                            <li> <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out"></i>
                                                    Logout</a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item mr-lg-1">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                        <li class="nav-item mr-lg-1">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>

                    <?php } ?>
                    <!--/search-right
                            <li class="header-search mr-lg-2 mt-lg-0 mt-4 position-relative">
                                <div class="search-right">
                                    <a href="#search" class="btn btn-style search-btn" title="search"><span
                                            class="fas fa-search mr-2" aria-hidden="true"></span> Search</a>
                                  
                                </div>
                            </li>
                            //search-right-->
                </ul>
            </div>


            <!-- toggle switch for light and dark theme -->
            <!--  <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container py-1">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>  -->
            <!-- //toggle switch for light and dark theme -->
        </nav>

    </div>
</header>