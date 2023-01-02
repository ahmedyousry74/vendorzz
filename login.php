<!DOCTYPE html>
<html lang="ar">

<?php include 'includes/head.php';?>
 
<body class="theme">
    <!-- start login page -->
    <section class="authentication login_page" style="background-image: url('assets/images/img_4.jpg.webp');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap_page d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>مرحبا بك في فيندرز</h2>
                                <p class="mt-2">ليس لديك حساب ؟</p>
                                <a href="signup.php" class="hvr-sweep-to-right btn__custom__two btn-white btn-outline-white"> إنشاء حساب </a>
                            </div>
                        </div>
                        <div class="form-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">تسجيل دخول</h3>
                                </div>
                            </div>
                            <form action="#" class="">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control custom_input" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput" class="">البريدالإلكتروني</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control custom_input" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">كلمة السر</label>
                                </div>
                                <div class="form-group d-flex justify-content-between mt-3">
                                    <div class="mb-3">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1"> تذكرني </label>
                                    </div>
                                    <div class="forget_pass">
                                        <a href="forget-password.php"> نسيت كلمة السر ؟ </a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-white btn-outline-white"> دخول </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start login page -->



    <?php include 'includes/script.php';?>


</body>

</html>