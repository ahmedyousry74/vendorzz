<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendorzz</title>
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/sass/main.scss">
    <link rel="stylesheet" href="assets/sass/main.css">

</head>

<body class="theme">
    <!-- start top navbar -->
    <section class="top_navbar">
        <div class="container-fluid">
            <div class="top_navbar_social d-flex justify-content-between align-items-start flex-wrap flex-row">
                <ul class="d-flex justify-content-start align-items-start flex-wrap flex-row gap-3">
                    <li>
                        <a href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-snapchat-ghost"></i>
                        </a>
                    </li>
                </ul>
                <ul
                    class="d-flex justify-content-between align-items-start flex-wrap flex-row gap-5 top_navbar_location ">
                    <li>
                        <a href="">0123456789</a>
                    </li>
                    <li>
                        <a href="">test@gmail</a>
                    </li>
                    <li>
                        <a href="">الأحد - الأثنين (9صباحا : 5 مساءا)</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end top navbar -->

    <!-- start navbar -->
    <nav class='navbar navbar-expand-lg navbar-light sticky-top bg-white nav_layout_auth'>
        <!-- class (nav_layout_auth) required in this page  -->
        <div class='container-fluid'>
            <a class='navbar-brand text-white' href='index.php'> <img
                    src="assets/images/3d9f58d0-a33e-4675-bda1-42d78d42a344.jpg" alt="logo" loading="lazy" width="80"
                    height="80">
            </a>
            <button class='btn navbar-toggler' type='button' data-bs-toggle='offcanvas'
                data-bs-target='#offcanvasExample' aria-controls='offcanvasExample'>
                <i class="fas fa-bars"></i>
            </button>
            <div class='offcanvas offcanvas-start-lg' tabindex='-1' id='offcanvasExample'
                aria-labelledby='offcanvasExampleLabel'>
                <div class='offcanvas-header d-flex d-lg-none'>
                    <h5 class='offcanvas-title text-white' id='offcanvasExampleLabel'>Navbar</h5>
                    <a href='javascript:void(0) ' class='text-reset p-0' data-bs-dismiss='offcanvas' aria-label='close'>
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <div class='offcanvas-body p-lg-0'>
                    <ul class='navbar-nav'>
                        <li class='nav-item'>
                            <a class='nav-link active' aria-current='page' href='index.php'>الرئيسية</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' aria-current='page' href=''> الخدمات </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' aria-current='page' href='create-forsah.php'> إدارة فرصة </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link login_btn' aria-current='page' href='login.php'> تسجيل دخول </a>
                        </li>
                        <li class="profile">
                            <a href="profile.php">
                                <i class="far fa-user"></i>
                            </a>
                        </li>
                        <li class=''>
                            <button class='nav-link flag_lang'> <img src="assets/images/usa.png" alt="" width="35"
                                    height="35">
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- start profie -->
    <div class="profile py-5">
        <div class="container">
            <h2 class="section_title">
                الملف الشخصي
            </h2>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-baseInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-baseInfo"
                        type="button" role="tab" aria-controls="nav-baseInfo" aria-selected="true">المعلومات الشخصية</button>
                    <button class="nav-link" id="nav-identity-tab" data-bs-toggle="tab" data-bs-target="#nav-identity"
                        type="button" role="tab" aria-controls="nav-identity" aria-selected="false">توثيق الهوية</button>
                    <button class="nav-link" id="nav-facility-tab" data-bs-toggle="tab" data-bs-target="#nav-facility"
                        type="button" role="tab" aria-controls="nav-facility" aria-selected="false">توثيق المنشأة التجارية</button>
                    
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-baseInfo" role="tabpanel" aria-labelledby="nav-baseInfo-tab">
                    <div class="form mt-5">
                        <div class="row">
                            <div class="col-md-4">                                
                                <div class="form-floating mb-3">
                                    <input type="type" class="form-control custom_input" id="floatingPassword"
                                        placeholder="type" disabled value="اسم مشتري">
                                    <label for="floatingPassword"> الإسم </label>
                                </div>
                            </div>
                            <div class="col-md-4">                                
                                <div class="form-floating mb-3">
                                    <input type="type" class="form-control custom_input" id="floatingPassword"
                                        placeholder="type" disabled value="test@gmail.com">
                                    <label for="floatingPassword"> البريدالإلكتروني </label>
                                </div>
                            </div>
                            <div class="col-md-4">                                
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control custom_input" id="floatingPassword"
                                        placeholder="password" disabled value="123456789">
                                    <label for="floatingPassword"> كلمة المرور </label>
                                </div>
                            </div>
                            <div class="col-md-4">                                
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control custom_input" id="floatingPassword"
                                        placeholder="password" value="123456789">
                                    <label for="floatingPassword"> تغيير كلمة السر </label>
                                </div>
                            </div>
                            <div class="col-md-4">                                
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control custom_input" id="floatingPassword"
                                        placeholder="password" value="123456789">
                                    <label for="floatingPassword"> تأكيد كلمة السر </label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-white btn-outline-white send"> تأكيد </button>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-identity" role="tabpanel" aria-labelledby="nav-identity-tab">
                    <form action="" class="mt-4">
                        <div class="row">
                            <div class="d-flex justify-content-center gap-3 flex-wrap mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">الهوية الوطنية</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">الإقامة</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="type" class="form-control custom_input" id="floatingPassword"
                                        placeholder="type" value="">
                                    <label for="floatingPassword"> رقم الهوية الوطنية </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control custom_input" id="floatingPassword"
                                        placeholder="type" value="">
                                    <label for="floatingPassword"> تاريخ الميلاد </label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-white btn-outline-white send"> تأكيد </button>
                    </form>
                </div>
                <div class="tab-pane fade mt-4" id="nav-facility" role="tabpanel" aria-labelledby="nav-facility-tab">
                    <ul>
                        <li class="mb-3">
                            <h5 class="mb-2"> الخطوة الأولى </h5>
                            <button class="btn btn__custom__two hvr-sweep-to-right"> تحميل  نموذج تفويض الشركة <i class="fas fa-download"></i></button>
                        </li>
                        <li>
                            <h5 class="mb-2"> الخطوة الثانية </h5>
                            <button class="btn btn__custom__two hvr-sweep-to-right">   رفع نموذج التفويض للشركة <i class="fas fa-file-upload"></i></button>
                        </li>
                        <form action="" class="mt-4">
                            <div class="row">
                                <div class="col-md-4">                                
                                    <div class="form-floating mb-3">
                                        <input type="type" class="form-control custom_input" id="floatingPassword"
                                            placeholder="type">
                                        <label for="floatingPassword"> رقم السجل التجاري </label>
                                    </div>
                                </div>
                                <div class="col-md-4">                                
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control custom_input" id="floatingPassword"
                                            placeholder="type">
                                        <label for="floatingPassword"> تاريخ انتهاء السجل التجاري </label>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-white btn-outline-white send"> تأكيد </button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end profie -->


    <!-- start footer -->
    <footer>
        <div class="container ">
            <div class="footer-logo ">
                <a href="index.php"> <img src="assets/images/3d9f58d0-a33e-4675-bda1-42d78d42a344.jpg" alt=""
                        width="100" height="100"> </a>
            </div>
            <div class="row ">
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="footer-info ">
                        <h4>من نحن</h4>
                        <p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص
                            بالتصاميم سواء كانت تصاميم مطبوعه</p>
                        <ul class="social-links ">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f "></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter "></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram "></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="footer-contact ">
                        <h4>تواصل معنا</h4>
                        <ul>
                            <li class="item ">
                                <a href="#"> السعودية - جدة</a>
                            </li>
                            <li class="item ">
                                <a href="#"> رقم الهاتف : 0123456789 </a>
                            </li>
                            <li class="item ">
                                <a href="#"> الايميل : test@test.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="footer-links ">
                        <h4>لينكات سريعة</h4>
                        <ul>
                            <li class="item ">
                                <a href="index.php "> الرئيسية</a>
                            </li>
                            <li class="item ">
                                <a href="about-us.php "> من نحن </a>
                            </li>
                            <li class="item ">
                                <a href="services.php "> خدماتنا</a>
                            </li>
                            <li class="item ">
                                <a href="contact-us.php "> اتصل بنا</a>
                            </li>
                            <li class="item ">
                                <a href="projects.php ">أعمالنا</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="footer-newsletter ">
                        <h4>اتصل بنا</h4>
                        <p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص
                            بالتصاميم سواء كانت تصاميم مطبوعه</p>
                        <div class="footer-email ">
                            <form action=" ">
                                <input type="email ">
                                <button type="submit ">
                                    <i class="far fa-paper-plane "></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p class="text-center copyright ">جميع الحقوق محفوظة لدى
                <a href="index.php"> فيندرز </a>
            </p>
        </div>
    </footer>
    <!-- end footer -->


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>