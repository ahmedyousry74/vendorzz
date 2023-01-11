<!DOCTYPE html>
<html lang="ar">

<?php include 'includes/head.php';?>

<body class="theme">
    <?php include 'includes/top-navbar.php';?>
    <?php include 'includes/inside-navbar.php';?>

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
                            <div class="col-md-4">
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected disabled> المنطقة </option>
                                    <option value="1"> منطقة 1 </option>
                                    <option value="2">منطقة 2</option>
                                    <option value="3">منطقة 3</option>
                                    <option value="3">منطقة 4</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected disabled>المدينة</option>
                                    <option value="1"> مدينة 1 </option>
                                    <option value="2">مدينة 2</option>
                                    <option value="3">مدينة 3</option>
                                    <option value="3">مدينة 4</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span class="d-block gender"> الجنس </span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">ذكر</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">أنثى</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <span class="d-block gender"> نوع الحساب </span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">فرد</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">منشأة</label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-white btn-outline-white send mb-5"> تأكيد </button>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-identity" role="tabpanel" aria-labelledby="nav-identity-tab">
                    <form action="" class="mt-4">
                        <div class="row">
                            <ul class="nav nav-tabs check d-flex justify-content-center gap-3 flex-wrap mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        value="option1" id="identity-tab" data-bs-toggle="tab" data-bs-target="#identity">
                                    <label class="form-check-label" for="inlineRadio1">الهوية الوطنية</label>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="eqama-tab" data-bs-toggle="tab" data-bs-target="#eqama" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">الإقامة</label>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show" id="identity" role="tabpanel" aria-labelledby="identity-tab">
                                    <div class="col-12">
                                        <span> الرجاء تحميل <button class="namozk"> <i class="fas fa-download"></i> نموذج التفويض </button> </span>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control custom_input" placeholder=" رقم الهوية الوطنية ">
                                            <label for="Quantity"> رقم الهوية الوطنية  </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h6> تاريخ الميلاد الهجري </h6>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3">
                                                    <input type="date" class="form-control custom_input" placeholder=" الكمية ">
                                                    <label for="Quantity"> تاريخ الميلاد  </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="eqama" role="tabpanel" aria-labelledby="eqama-tab">
                                <div class="col-12">
                                        <span> الرجاء تحميل <button class="namozk"> <i class="fas fa-download"></i> نموذج التفويض </button> </span>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control custom_input" placeholder=" رقم إقامتك">
                                            <label for="Quantity">  رقم إقامتك </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h6> تاريخ الميلاد الهجري </h6>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3">
                                                    <input type="date" class="form-control custom_input" placeholder=" الكمية ">
                                                    <label for="Quantity"> تاريخ الميلاد  </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-white btn-outline-white send mb-5"> تأكيد </button>
                    </form>
                </div>
                <div class="tab-pane fade mt-4" id="nav-facility" role="tabpanel" aria-labelledby="nav-facility-tab">
                    <form action="" class="mt-4">
                        <div class="row">
                            <ul class="nav nav-tabs check d-flex justify-content-center gap-3 flex-wrap mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        value="option1" id="facilities-tab" data-bs-toggle="tab" data-bs-target="#facilities">
                                    <label class="form-check-label" for="inlineRadio1"> اضافة مؤسسة </label>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="company-tab" data-bs-toggle="tab" data-bs-target="#company" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">اضافة شركة</label>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="Establishment-tab" data-bs-toggle="tab" data-bs-target="#Establishment" value="option3">
                                    <label class="form-check-label" for="inlineRadio2">اضافة منشأت اخرى</label>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show" id="facilities" role="tabpanel" aria-labelledby="facilities-tab">
                                    <div class="col-md-12 mb-3">
                                        <span class="d-block gender"> اضافة منشأة </span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">مالك</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">مفوض</label>
                                        </div>
                                    </div> <hr>
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
                                <div class="tab-pane fade" id="company" role="tabpanel" aria-labelledby="company-tab">
                                    <ul class="d-flex justify-content-between align-items-start flex-row">
                                        <li class="mb-3">
                                            <h5 class="mb-2"> الخطوة الأولى </h5>
                                            <button class="btn btn__custom__two hvr-sweep-to-right"> تحميل  نموذج تفويض الشركة <i class="fas fa-download"></i></button>
                                        </li>
                                        <li>
                                            <h5 class="mb-2"> الخطوة الثانية </h5>
                                            <button class="btn btn__custom__two hvr-sweep-to-right">   رفع نموذج التفويض للشركة <i class="fas fa-file-upload"></i></button>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <span class="d-block gender"> الجنس </span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">ذكر</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">أنثى</label>
                                            </div>
                                        </div>
                                        <div class="col-12">                                
                                            <div class="form-floating mb-3">
                                                <input type="type" class="form-control custom_input" id="floatingPassword"
                                                    placeholder="type">
                                                <label for="floatingPassword"> رقم السجل التجاري </label>
                                            </div>
                                        </div>
                                        <div class="col-12">                                
                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control custom_input" id="floatingPassword"
                                                    placeholder="type">
                                                <label for="floatingPassword"> تاريخ انتهاء السجل التجاري </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Establishment" role="tabpanel" aria-labelledby="Establishment-tab">
                                <ul class="d-flex justify-content-between align-items-start flex-row">
                                    <li class="mb-3">
                                        <h5 class="mb-2"> الخطوة الأولى </h5>
                                        <button class="btn btn__custom__two hvr-sweep-to-right">   ارجو رفع ملف المنشأة   <i class="fas fa-download"></i></button>
                                    </li>
                                    <li>
                                        <h5 class="mb-2"> الخطوة الثانية </h5>
                                        <button class="btn btn__custom__two hvr-sweep-to-right">   رفع نموذج التفويض المصدق <i class="fas fa-file-upload"></i></button>
                                    </li>
                                </ul>
                                <div class="col-12">
                                    <h6 class="section_title"> تاريخ  إنشاء </h6>
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control custom_input" placeholder=" الكمية ">
                                        <label for="Quantity"> تاريخ الميلاد  </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control custom_input" placeholder=" اسم المنشأة بالعربي  ">
                                        <label for="Quantity">  اسم المنشأة بالعربي   </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control custom_input" placeholder=" رقم الجوال ">
                                        <label for="Quantity">  رقم الجوال  </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected disabled>  النشاط   </option>
                                        <option value="1">نشاط 1 </option>
                                        <option value="2">نشاط 2 </option>
                                        <option value="2">نشاط 3 </option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control custom_input" placeholder=" الكمية ">
                                        <label for="Quantity"> رقم سجل المنشأة   </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected disabled>  موقع المنشأة   </option>
                                        <option value="1">نشاط 1 </option>
                                        <option value="2">نشاط 2 </option>
                                        <option value="2">نشاط 3 </option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control custom_input" placeholder=" الكمية ">
                                        <label for="Quantity"> تاريخ الميلاد  </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-white btn-outline-white send mb-5 "> تأكيد </button>
                    </form>
                </div>
            </div>
            <h2 class="section_title">
                عروضي
            </h2>
        <div class="row latest" style="background-color: transparent !important">
            <div class="col-lg-4 col-md-6">
                <a href="forsah-details.php">
                    <div class="latest-info wow fadeIn"
                    data-wow-duration="0.8" data-wow-delay="1.2s">
                        <div class="latest-top d-flex justify-content-between align-items-start flex-row flex-wrap">
                            <div class="gap-2 d-flex justify-content-between align-items-start flex-row flex-wrap">
                                <span class="badge">متاح</span>
                                <button>
                                    <i class="fas fa-credit-card"></i>
                                </button>
                                <button>
                                    <i class="fas fa-share"></i>
                                </button>
                                <button>
                                    <i class="fas fa-clock"></i>
                                </button>
                            </div>
                            <div class="gap-2 d-flex justify-content-between align-items-center flex-row flex-wrap">
                                <i class="fas fa-eye"></i>
                                <span class="num__"> 22 </span>
                            </div>
                        </div>
                        <div class="latest-desc">
                            <h2 class="latest_title"> <i class="fas fa-signature"></i> جهاز تاب سامسونج </h2>
                            <p class="latest_Establishment"> <i class="fas fa-building"></i> اجهزة الاتصالات وتقنية
                                المعلومات </p>
                            <p class="latest_location"> <i class="fas fa-map-marker-alt"></i> جدة</p>
                            <p class="latest_type"> <i class="fas fa-cog"></i> متناهية الصغر</p>
                        </div>
                        <hr>
                        <div class="counter d-flex justify-content-start align-items-start gap-1 flex-column">
                            <span> 2 </span>
                            <span> يوم متبقي </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="forsah-details.php">
                    <div class="latest-info wow fadeIn"
                    data-wow-duration="0.8" data-wow-delay="1.2s">
                        <div class="latest-top d-flex justify-content-between align-items-start flex-row flex-wrap">
                            <div class="gap-2 d-flex justify-content-between align-items-start flex-row flex-wrap">
                                <span class="badge">متاح</span>
                                <button>
                                    <i class="fas fa-credit-card"></i>
                                </button>
                                <button>
                                    <i class="fas fa-share"></i>
                                </button>
                                <button>
                                    <i class="fas fa-clock"></i>
                                </button>
                            </div>
                            <div class="gap-2 d-flex justify-content-between align-items-center flex-row flex-wrap">
                                <i class="fas fa-eye"></i>
                                <span class="num__"> 22 </span>
                            </div>
                        </div>
                        <div class="latest-desc">
                            <h2 class="latest_title"> <i class="fas fa-signature"></i> جهاز تاب سامسونج </h2>
                            <p class="latest_Establishment"> <i class="fas fa-building"></i> اجهزة الاتصالات وتقنية
                                المعلومات </p>
                            <p class="latest_location"> <i class="fas fa-map-marker-alt"></i> جدة</p>
                            <p class="latest_type"> <i class="fas fa-cog"></i> متناهية الصغر</p>
                        </div>
                        <hr>
                        <div class="counter d-flex justify-content-start align-items-start gap-1 flex-column">
                            <span> 2 </span>
                            <span> يوم متبقي </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="forsah-details.php">
                    <div class="latest-info wow fadeIn"
                    data-wow-duration="0.8" data-wow-delay="1.2s">
                        <div class="latest-top d-flex justify-content-between align-items-start flex-row flex-wrap">
                            <div class="gap-2 d-flex justify-content-between align-items-start flex-row flex-wrap">
                                <span class="badge">متاح</span>
                                <button>
                                    <i class="fas fa-credit-card"></i>
                                </button>
                                <button>
                                    <i class="fas fa-share"></i>
                                </button>
                                <button>
                                    <i class="fas fa-clock"></i>
                                </button>
                            </div>
                            <div class="gap-2 d-flex justify-content-between align-items-center flex-row flex-wrap">
                                <i class="fas fa-eye"></i>
                                <span class="num__"> 22 </span>
                            </div>
                        </div>
                        <div class="latest-desc">
                            <h2 class="latest_title"> <i class="fas fa-signature"></i> جهاز تاب سامسونج </h2>
                            <p class="latest_Establishment"> <i class="fas fa-building"></i> اجهزة الاتصالات وتقنية
                                المعلومات </p>
                            <p class="latest_location"> <i class="fas fa-map-marker-alt"></i> جدة</p>
                            <p class="latest_type"> <i class="fas fa-cog"></i> متناهية الصغر</p>
                        </div>
                        <hr>
                        <div class="counter d-flex justify-content-start align-items-start gap-1 flex-column">
                            <span> 2 </span>
                            <span> يوم متبقي </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </div>
    <!-- end profie -->


    <?php include 'includes/footer.php';?>
    <?php include 'includes/script.php';?>


</body>

</html>