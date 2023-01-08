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
                        </div>
                        <button type="button" class="btn btn-white btn-outline-white send"> تأكيد </button>
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
                                                    <label for="Quantity"> تاريخ الكيلاد  </label>
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
                                                    <label for="Quantity"> تاريخ الكيلاد  </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-white btn-outline-white send"> تأكيد </button>
                    </form>
                </div>
                <div class="tab-pane fade mt-4" id="nav-facility" role="tabpanel" aria-labelledby="nav-facility-tab">
                <form action="" class="mt-4">
                        <div class="row">
                            <ul class="nav nav-tabs check d-flex justify-content-center gap-3 flex-wrap mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        value="option1" id="facilities-tab" data-bs-toggle="tab" data-bs-target="#facilities">
                                    <label class="form-check-label" for="inlineRadio1">الهوية الوطنية</label>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="company-tab" data-bs-toggle="tab" data-bs-target="#company" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">الإقامة</label>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="Establishment-tab" data-bs-toggle="tab" data-bs-target="#Establishment" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">الإقامة</label>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show" id="facilities" role="tabpanel" aria-labelledby="facilities-tab">
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
                                    <li class="mb-3">
                                            <h5 class="mb-2"> الخطوة الأولى </h5>
                                            <button class="btn btn__custom__two hvr-sweep-to-right"> تحميل  نموذج تفويض الشركة <i class="fas fa-download"></i></button>
                                        </li>
                                        <li>
                                            <h5 class="mb-2"> الخطوة الثانية </h5>
                                            <button class="btn btn__custom__two hvr-sweep-to-right">   رفع نموذج التفويض للشركة <i class="fas fa-file-upload"></i></button>
                                    </li>
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
                                <div class="tab-pane fade" id="Establishment" role="tabpanel" aria-labelledby="Establishment-tab">
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
                                                    <label for="Quantity"> تاريخ الكيلاد  </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        <button type="button" class="btn btn-white btn-outline-white send"> تأكيد </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end profie -->


    <?php include 'includes/footer.php';?>
    <?php include 'includes/script.php';?>


</body>

</html>