<?php echo '
        <!-- start navbar -->
        <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white nav_layout_auth">
            <!-- class (nav_layout_auth) required in this page  -->
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="index.php"> <img
                        src="assets/images/3d9f58d0-a33e-4675-bda1-42d78d42a344.jpg" alt="logo" loading="lazy" width="80"
                        height="80">
                </a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="offcanvas offcanvas-start-lg" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header d-flex d-lg-none">
                        <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">Navbar</h5>
                        <a href="javascript:void(0) " class="text-reset p-0" data-bs-dismiss="offcanvas" aria-label="close">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <div class="offcanvas-body p-lg-0">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href=""> الخدمات </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="create-forsah.php"> إدارة فرصة </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link login_btn" aria-current="page" href="login.php"> تسجيل دخول </a>
                            </li>
                            <li class="profile">
                                <a href="profile.php">
                                    <i class="far fa-user"></i>
                                </a>
                            </li>
                            <li class="">
                                <button class="nav-link flag_lang"> <img src="assets/images/usa.png" alt="" width="35"
                                        height="35">
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navbar -->
';
?>