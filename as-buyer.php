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
            <a class='navbar-brand text-white' href='index.html'> <img
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
                            <a class='nav-link active' aria-current='page' href='index.html'>الرئيسية</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' aria-current='page' href=''> الخدمات </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' aria-current='page' href='create-forsah.html'> إدارة فرصة </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link login_btn' aria-current='page' href='login.html'> تسجيل دخول </a>
                        </li>
                        <li class="profile">
                            <a href="profile.html">
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

    <!-- start As buyer -->
    <div class="as-buyer py-5">
        <div class="container">
            <h2 class="section_title"> تسجيل كـ مشتري </h2>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <ul>
                            <li>للتسجيل كشركة كبرى، يجب أن يكون عدد الموظفين أكثر من 250 موظف والدخل السنوي أكثر من 200
                                مليون ريال.( يتوجب على المنشئآت الصغيرة والمتوسطة اتباع نفس طريقة التسجيل)</li>
                            <li>إذا تطابق المؤهلات مع منشأتك، سيتوجب مليء ورفع نموذج التسجيل. بعدها سيتم إنشاء حساب
                                للمنشأة.</li>
                            <li>سيتمكن المستخدم من نشر الفرص
                                مناقصة
                                طلب شراء</li>
                            <li>عند نشر الفرصة ، سيتمكن الموردين من طرح عروض أسعارهم. بعدها بامكان طارح الفرصة كشف
                                ومقارنة عروض الأسعار ومعرفة معلومات الموردين والذي يتضمن تقييم المورد الحالي.</li>
                            <li>بعد مقارنة عروض الأسعار، سيتمكن ناشر الفرصة من تعميد السعر المناسب.</li>
                        </ul>
                    </div>
                    <form action="" class="mt-4">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control custom_input" id="floatingInput"
                                placeholder="name">
                            <label for="floatingInput" class="">الإسم <span style="color: red;">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control custom_input" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="">البريدالإلكتروني <span style="color: red;">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control custom_input" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="">الشركة <span style="color: red;">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control custom_input" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="">المنصب <span style="color: red;">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control custom_input" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="">الهاتف <span style="color: red;">*</span></label>
                        </div>
                        <div class="down_file d-flex justify-content-start flex-column align-items-start gap-2 mb-3">
                            <span> تحميل قالب الإشتراك  <span style="color: red;">*</span></span>
                            <button class="btn btn__custom__two hvr-sweep-to-right"> تحميل قالب الإشتراك <i class="fas fa-download"></i></button>
                        </div>
                        <div class="upload_file d-flex justify-content-start flex-column align-items-start gap-2 mb-3">
                            <span>  نموذج الإشتراك  <span style="color: red;">*</span></span>
                            <button class="btn btn__custom__two hvr-sweep-to-right"> اختر الملف <i class="fas fa-file-upload"></i> </button>
                        </div>
                        <button class="btn send_" type="button"> تقديم </button>
                    </form>
                </div>
                <div class="col-md-6">
                    <img src="assets/images//Product hunt-cuate.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end As buyer -->

    <!-- start footer -->
    <footer>
        <div class="container ">
            <div class="footer-logo ">
                <a href="index.html"> <img src="assets/images/3d9f58d0-a33e-4675-bda1-42d78d42a344.jpg" alt=""
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
                                <a href="index.html "> الرئيسية</a>
                            </li>
                            <li class="item ">
                                <a href="about-us.html "> من نحن </a>
                            </li>
                            <li class="item ">
                                <a href="services.html "> خدماتنا</a>
                            </li>
                            <li class="item ">
                                <a href="contact-us.html "> اتصل بنا</a>
                            </li>
                            <li class="item ">
                                <a href="projects.html ">أعمالنا</a>
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
                <a href="index.html"> فيندرز </a>
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