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
                <div class="col-12">
                    <div>
                        <ul>
                            <li>بداية يتوجب عليك التسجيل في منصة فرصة عبر البريد الالكتروني، ثم توثيق الهويه عن طريق مالك المنشأة أو المفوض عنها بتصديق الغرفة التجارية ( سيتم قبول السجل التجاري خلال 24 ساعة)</li>
                            <li>إكمال التسجيل بإضافة معلومات التواصل واختيار القطاعات المناسبة للنشاط التجاري لتكون مؤهل للفرص في نفس القطاع.</li>
                            <li>بامكانكم الوصول لجميع طلبات الشراء (المباشرة والمناقصات) بجميع المعلومات المطلوبة متضمنا الشركات الناشرة وتفاصيل الفرص وقيمتها.</li>
                            <li>بامكانكم تقديم عروض أسعاركم على طلبات الشراء المناسبة لقطاعكم ورفع جميع المعلومات المطلوبة الكترونيا.                            </li>
                            <li>سيتم ابلاغكم عن حالة عرض السعر الخاصة بكم سواء تم تعميدكم أو لا عن طريق البريد الالكتروني</li>
                        </ul>
                    </div>
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
                                                <li class="active" id="account"><strong>المعلومات الشخصية </strong></li>
                                                <li id="personal"><strong> توثيق الهوية </strong></li>
                                                <li id="personal"><strong>  توثيق المنشأة التجارية  </strong></li>
                                            </ul>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div> <br> 
                                            <!-- fieldsets -->
                                            <fieldset>
                                                <div class="form mt-5">
                                                    <div class="row">
                                                        <div class="col-md-4">                                
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control custom_input" id="floatingPassword"
                                                                    placeholder="الإسم"  value=" ">
                                                                <label for="floatingPassword"> الإسم </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">                                
                                                            <div class="form-floating mb-3">
                                                                <input type="email" class="form-control custom_input" id="floatingPassword"
                                                                    placeholder="البريدالإلكتروني "  value="">
                                                                <label for="floatingPassword"> البريدالإلكتروني </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">                                
                                                            <div class="form-floating mb-3">
                                                                <input type="password" class="form-control custom_input" id="floatingPassword"
                                                                    placeholder="كلمة المرور "  value="">
                                                                <label for="floatingPassword"> كلمة المرور </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">                                
                                                            <div class="form-floating mb-3">
                                                                <input type="password" class="form-control custom_input" id="floatingPassword"
                                                                    placeholder="كلمة المرور " value="">
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
                                                            <select class="form-select mb-3" aria-label="Default select example">
                                                                <option selected disabled>القطاع</option>
                                                                <option value="1"> الخدمات الزراعية </option>
                                                                <option value="2"> معدات و صيانة </option>
                                                                <option value="3">أجهزة كهربائية</option>
                                                                <option value="3"> تأمين السيارات </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 text-end">
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
                                                        <div class="col-md-4 text-end">
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
                                                </div>
                                                <input type="button" name="next" class="next action-button" value="التالي" />
                                            </fieldset>
                                            <fieldset>
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
                                                            <div class="col-12 text-end">
                                                                <span> الرجاء تحميل <button class="namozk"> <i class="fas fa-download"></i> نموذج التفويض </button> </span>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-floating mb-3">
                                                                    <input type="number" class="form-control custom_input" placeholder=" رقم الهوية الوطنية ">
                                                                    <label for="Quantity"> رقم الهوية الوطنية  </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 text-end">
                                                                <h6> تاريخ الميلاد الميلادي </h6>
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
                                                        <div class="col-12 text-end">
                                                                <span> الرجاء تحميل <button class="namozk"> <i class="fas fa-download"></i> نموذج التفويض </button> </span>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-floating mb-3">
                                                                    <input type="number" class="form-control custom_input" placeholder=" رقم إقامتك">
                                                                    <label for="Quantity">  رقم إقامتك </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 text-end">
                                                                <h6> تاريخ الميلاد الميلادي </h6>
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
                                                <input type="button" name="next" class="next action-button" value="التالي" />
                                                <input type="button" name="previous" class="previous action-button-previous" value="السابق" />
                                            </fieldset>
                                            <fieldset>
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
                                                        <div class="col-md-12 mb-3 text-end">
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
                                                        <div class="col-md-12">                                
                                                            <div class="form-floating mb-3">
                                                                <input type="type" class="form-control custom_input" id="floatingPassword"
                                                                    placeholder="type">
                                                                <label for="floatingPassword"> رقم السجل التجاري </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">                                
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
                                                            <div class="col-md-12 mb-3 text-end">
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
                                                        <!-- <h6 class="section_title"> تاريخ  إنشاء </h6> -->
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
                                                <input type="submit" name="next" class="next action-button" value="تسجيل" />
                                                <input type="button" name="previous" class="previous action-button-previous" value="السابق" />
                                            </fieldset>
                                        </form>         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <img src="assets/images//Meeting-pana.svg" alt="">
                </div> -->
            </div>
        </div>
    </div>
    <!-- end As buyer -->

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