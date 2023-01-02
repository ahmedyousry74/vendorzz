<!DOCTYPE html>
<html lang="ar">

<?php include 'includes/head.php';?>

<body class="theme">
    <?php include 'includes/top-navbar.php';?>
    <?php include 'includes/inside-navbar.php';?>


    <!-- start As buyer -->
    <div class="as-buyer py-5">
        <div class="container">
            <h2 class="section_title"> تسجيل كـ مورد </h2>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <ul>
                            <li>بداية يتوجب عليك التسجيل في منصة فرصة عبر البريد الالكتروني، ثم توثيق الهويه عن طريق مالك المنشأة أو المفوض عنها بتصديق الغرفة التجارية ( سيتم قبول السجل التجاري خلال 24 ساعة)</li>
                            <li>إكمال التسجيل بإضافة معلومات التواصل واختيار القطاعات المناسبة للنشاط التجاري لتكون مؤهل للفرص في نفس القطاع.</li>
                            <li>بامكانكم الوصول لجميع طلبات الشراء (المباشرة والمناقصات) بجميع المعلومات المطلوبة متضمنا الشركات الناشرة وتفاصيل الفرص وقيمتها.</li>
                            <li>بامكانكم تقديم عروض أسعاركم على طلبات الشراء المناسبة لقطاعكم ورفع جميع المعلومات المطلوبة الكترونيا.                            </li>
                            <li>سيتم ابلاغكم عن حالة عرض السعر الخاصة بكم سواء تم تعميدكم أو لا عن طريق البريد الالكتروني</li>
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
                    <img src="assets/images//Meeting-pana.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end As buyer -->

    <?php include 'includes/footer.php';?>

    <?php include 'includes/script.php';?>



</body>

</html>