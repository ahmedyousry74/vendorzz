<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>

<body class="theme">
    <?php include 'includes/top-navbar.php';?>
    <?php include 'includes/inside-navbar.php';?>

    <!-- start wizard form -->
    <div class="wizard_form pt-5">
        <div class="container">
            <h2 class="section_title">
                شراء مباشر
            </h2>
            <div class="wrapper">
                <div class="row">
                    <!-- <div class="col-md-6">
                        <img src="assets/images/Risk management-pana.svg">
                    </div> -->
                    <div class="col-md-12">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>معلومات عامة</strong></li>
                                <li id="personal"><strong>  معلومات التسليم </strong></li>
                                <li id="personal"><strong>  معايير الأهلية </strong></li>
                                <li id="personal"><strong> نطاق العمل   </strong></li>
                                <li id="personal"><strong>  معلومات التواصل   </strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> 
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control custom_input" placeholder="عنوان الفرصة">
                                                    <label for="addressForsah"> عنوان الفرصة </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control custom_input" placeholder="رقم المراجعة الداخلي">
                                                    <label for="referenceNumber"> رقم المراجعة الداخلي </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <span class="title_span">خيارات إغلاق فرصة *</span>
                                                <div class="d-flex justify-content-start gap-5 align-items-start flex-row mb-3">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">تاريخ الإغلاق</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">الحد المسموح لتقديم الأسعار</label>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-3 mt-3">
                                                    <input type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <div>
                                                    <span class="note"> <i class="fas fa-arrow-left"></i>  ستغلق الفرصة في حد أقصى في  27/11/2020 </span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select mb-3" aria-label="Default select example">
                                                    <option selected disabled>مدة الدفع</option>
                                                    <option value="1">الدفع عند التسليم</option>
                                                    <option value="2">1 - 30 يوم</option>
                                                    <option value="3">30 - 60 يوم</option>
                                                    <option value="3">+60 يوم</option>
                                                </select>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <span class="title_span"> المستندات المطلوبة *</span>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                                    <label class="form-check-label" for="flexCheckChecked1">
                                                        شهادة زكاة 
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" >
                                                    <label class="form-check-label" for="flexCheckChecked2">
                                                        شهادة عدم محكومية
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3" >
                                                    <label class="form-check-label" for="flexCheckChecked3">
                                                        The finanical report for 2023
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4" >
                                                    <label class="form-check-label" for="flexCheckChecked4">
                                                        New  
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="التالي" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- start saved address -->
                                                <section class="saved_address_page">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="section_title mb-2 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
                                                                    <h2 class=""> العناوين المحفوظة </h2>
                                                                    <nav aria-label="breadcrumb">
                                                                        <ol class="breadcrumb">
                                                                            <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                                                                            <li class="breadcrumb-item active" aria-current="page">العناوين المحفوظة</li>
                                                                        </ol>
                                                                    </nav>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wrraper_address">
                                                                <div class="saved_address">
                                                                    <h6> العناوين المحفوظة (3) </h6>
                                                                    <div class="saved_address_item">
                                                                        <label for="" class="active saved_address_item_label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.5s">
                                                                            <input type="radio"  name="" id="">
                                                                            <div class="saved_address_item_info ">
                                                                                <ul>
                                                                                    <li class="saved_address_email">Yousry@gmail.com</li>
                                                                                    <li class="saved_address_phone">0123456789</li>
                                                                                    <li class="saved_address_region"> المنطقة : الرياض</li>
                                                                                    <li class="saved_address_city"> المدينة : الحي الرابع </li>
                                                                                    <li class="saved_address_post">الرمز البريدى : 125366</li>
                                                                                </ul>
                                                                                <div class="d-flex">
                                                                                    <div class="flex-grow-1 ms-3">
                                                                                        <h5>أحمد يسري </h5>
                                                                                        <span>فيلا رقم 11 , الرياض , حى الروضة , الرياض , السعودية
                                                                                            فيلا
                                                                                            رقم 11 , الرياض , حى الروضة , الرياض , السعودية</span>
                                                                                        <div class="action">
                                                                                            <button><i class="fas fa-trash-alt"></i></button>
                                                                                            <button data-bs-toggle="modal" data-bs-target="#editaddress" style="position: relative;z-index:999"><i class="fas fa-edit"></i></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                        <label for="" class=" saved_address_item_label wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.6s">
                                                                            <input type="radio" name="" id="">
                                                                            <div class="saved_address_item_info">
                                                                                <ul>
                                                                                    <li class="saved_address_email">Yousry@gmail.com</li>
                                                                                    <li class="saved_address_phone">0123456789</li>
                                                                                    <li class="saved_address_region"> المنطقة : الرياض</li>
                                                                                    <li class="saved_address_city"> المدينة : الحي الرابع </li>
                                                                                    <li class="saved_address_post">الرمز البريدى : 125366</li>
                                                                                </ul>
                                                                                <div class="d-flex">
                                                                                    <div class="flex-grow-1 ms-3">
                                                                                        <h5>أحمد يسري </h5>
                                                                                        <span>فيلا رقم 11 , الرياض , حى الروضة , الرياض , السعودية
                                                                                            فيلا
                                                                                            رقم 11 , الرياض , حى الروضة , الرياض , السعودية</span>
                                                                                        <div class="action">
                                                                                            <button><i class="fas fa-trash-alt"></i></button>
                                                                                            <button data-bs-toggle="modal" data-bs-target="#editaddress" style="position: relative;z-index:999"><i class="fas fa-edit"></i></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                        <button type="button" class="btn__custom__two w-100 hvr-sweep-to-right"
                                                                            data-bs-toggle="modal" data-bs-target="#addaddress"> اضافة
                                                                            عنوان جديد 
                                                                        </button>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            <!-- end saved address -->
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="التالي" />
                                <input type="button" name="previous" class="previous action-button-previous" value="السابق" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-12">
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected disabled> القطاع </option>
                                                <option value="1"> 1 </option>
                                                <option value="2">2 </option>
                                                <option value="3">3 </option>
                                                <option value="3">4 </option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected disabled> عمر المنشأت </option>
                                                <option value="1"> لا يهم </option>
                                                <option value="2">1 - 5 سنوات</option>
                                                <option value="3">5 - 10 سنوات</option>
                                                <option value="3">+10 سنوات</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected disabled> رأس مالها </option>
                                                <option value="1"> أقل من 100 ألف </option>
                                                <option value="2"> أكثر من 100 ألف </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="التالي" />
                                <input type="button" name="previous" class="previous action-button-previous" value="السابق" />
                            </fieldset>
                            <fieldset>                                    
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-12">
                                                <select class="form-select mb-3" aria-label="Default select example">
                                                    <option selected disabled> اختيار قيمة الفرصة  </option>
                                                    <option value="1"> 0 - 100 ألف</option>
                                                    <option value="2"> 100 ألف - 200 ألف</option>
                                                    <option value="2"> 200+ ألف</option>
                                                </select>
                                            </div>
                                            <div class="nation__">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control custom_input" placeholder=" إسم الوحدة ">
                                                        <label for="nationName">  إسم الوحدة </label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control custom_input" placeholder=" الكمية ">
                                                        <label for="Quantity"> الكمية  </label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-select mb-3" aria-label="Default select example">
                                                        <option selected disabled> نوع الوحدة </option>
                                                        <option value="1"> صندوق </option>
                                                        <option value="2"> حبة </option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <textarea type="text" class="form-control custom_input" placeholder=" الوصف "></textarea>
                                                        <label for="addressForsah"> الوصف  </label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="upload_file d-flex justify-content-start flex-column align-items-start gap-2 mb-3">
                                                        <span>   المرفقات  <span style="color: red;">*</span></span>
                                                        <button class="btn btn__custom__two hvr-sweep-to-right"> اختر الملف <i class="fas fa-file-upload"></i> </button>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="next action-button w-100" type="button" > إضافة وحدة <i class="fas fa-plus"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <input type="button" name="next" class="next action-button" value="التالي" />
                                <input type="button" name="previous" class="previous action-button-previous" value="السابق" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- start saved address -->
                                                <section class="saved_address_page">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="section_title mb-2 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
                                                                    <h2 class=""> العناوين المحفوظة </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wrraper_address">
                                                                <div class="saved_address">
                                                                    <h6> العناوين المحفوظة (3) </h6>
                                                                    <div class="saved_address_item">
                                                                        <label for="" class="active saved_address_item_label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.5s">
                                                                            <input type="radio"  name="" id="">
                                                                            <div class="saved_address_item_info ">
                                                                                <ul>
                                                                                    <li class="saved_address_email">Yousry@gmail.com</li>
                                                                                    <li class="saved_address_phone">0123456789</li>
                                                                                    <li class="saved_address_region"> المنطقة : الرياض</li>
                                                                                    <li class="saved_address_city"> المدينة : الحي الرابع </li>
                                                                                    <li class="saved_address_post">الرمز البريدى : 125366</li>
                                                                                    <li class="saved_address_post"> المنصب : دكتور </li>
                                                                                </ul>
                                                                                <div class="d-flex">
                                                                                    <div class="flex-grow-1 ms-3">
                                                                                        <h5>أحمد يسري </h5>
                                                                                        <span>فيلا رقم 11 , الرياض , حى الروضة , الرياض , السعودية
                                                                                            فيلا
                                                                                            رقم 11 , الرياض , حى الروضة , الرياض , السعودية</span>
                                                                                        <div class="action">
                                                                                            <button><i class="fas fa-trash-alt"></i></button>
                                                                                            <button data-bs-toggle="modal" data-bs-target="#editaddress" style="position: relative;z-index:999"><i class="fas fa-edit"></i></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                        <label for="" class=" saved_address_item_label wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.6s">
                                                                            <input type="radio" name="" id="">
                                                                            <div class="saved_address_item_info">
                                                                                <ul>
                                                                                    <li class="saved_address_email">Yousry@gmail.com</li>
                                                                                    <li class="saved_address_phone">0123456789</li>
                                                                                    <li class="saved_address_region"> المنطقة : الرياض</li>
                                                                                    <li class="saved_address_city"> المدينة : الحي الرابع </li>
                                                                                    <li class="saved_address_post">الرمز البريدى : 125366</li>
                                                                                    <li class="saved_address_post"> المنصب : دكتور </li>
                                                                                </ul>
                                                                                <div class="d-flex">
                                                                                    <div class="flex-grow-1 ms-3">
                                                                                        <h5>أحمد يسري </h5>
                                                                                        <span>فيلا رقم 11 , الرياض , حى الروضة , الرياض , السعودية
                                                                                            فيلا
                                                                                            رقم 11 , الرياض , حى الروضة , الرياض , السعودية</span>
                                                                                        <div class="action">
                                                                                            <button><i class="fas fa-trash-alt"></i></button>
                                                                                            <button data-bs-toggle="modal" data-bs-target="#editaddress" style="position: relative;z-index:999"><i class="fas fa-edit"></i></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                        <button type="button" class="btn__custom__two w-100 hvr-sweep-to-right"
                                                                            data-bs-toggle="modal" data-bs-target="#addContact"> اضافة
                                                                             جهة اتصال 
                                                                        </button>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            <!-- end saved address -->
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="next" class="next action-button" value="تسجيل" />
                                <input type="button" name="previous" class="previous action-button-previous" value="السابق" />
                            </fieldset>
                        </form>         
                    </div>
                </div>
            </div>
        </div>
    </div>


    
<!-- Modal add address -->
    <div class="modal fade" id="addaddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافة عنوان جديد</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form_auth">
                                <form>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control custom_input" placeholder=" العنوان">
                                                <label for="Address">  العنوان </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control custom_input" placeholder=" اسم المدينة">
                                                <label for="City">  اسم المدينة </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="map mb-3">
                                                <h3> العنوان على الخريطة </h3>
                                                <p> الرياض , الحى السابع , مسجد عباد الرحمن </p>
                                                <div class="ratio ratio-16x9">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927755.0519899436!2d46.262027123739045!3d24.72539808840737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sen!2seg!4v1657282815810!5m2!1sen!2seg"
                                                        style="border:0;" allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control custom_input" placeholder=" الإرشادات ">
                                                <label for="notes">  الإرشادات  </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn__custom__two w-100 hvr-sweep-to-right w-100 mt-3"> إضافة
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- modal for add contact -->
<div class="modal fade" id="addContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافة جهة اتصال جديدة </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form_auth">
                                <form>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control custom_input" placeholder=" الإسم">
                                                <label for="name">  الإسم </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control custom_input" placeholder=" المنصب">
                                                <label for="Address">  المنصب </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control custom_input" placeholder=" العنوان">
                                                <label for="Address">  العنوان </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control custom_input" placeholder=" الجوال">
                                                <label for="number">  الجوال </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn__custom__two w-100 hvr-sweep-to-right w-100 mt-3"> إضافة
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'includes/footer.php';?>
    <?php include 'includes/script.php';?>

    
<script>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script>

    <script>


$(document).ready(function() {

// ------------ Counter BEGIN ------------ 
$(".counter__increment, .counter__decrement").click(function(e)
{
    var $this = $(this);
    var $counter__input = $(this).parent().find(".counter__input");
    var $currentVal = parseInt($(this).parent().find(".counter__input").val());

    //Increment
    if ($currentVal != NaN && $this.hasClass('counter__increment'))
    {
        $counter__input.val($currentVal + 1);
    }
    //Decrement
    else if ($currentVal != NaN && $this.hasClass('counter__decrement'))
    {
        if ($currentVal >= 1) {
            $counter__input.val($currentVal - 1);
        }
    }
});
// ------------ Counter END ------------ 

});
    </script>

</body>

</html>