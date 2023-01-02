<!DOCTYPE html>
<html lang="ar">

<?php include 'includes/head.php';?>

<body class="theme">
    <?php include 'includes/top-navbar.php';?>
    <?php include 'includes/inside-navbar.php';?>

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

    <?php include 'includes/footer.php';?>

    <?php include 'includes/script.php';?>

</body>

</html>