<!DOCTYPE html>
<html lang="en">

    <style>
/* wizard */

#heading {
    text-transform: uppercase;
    color: var(--primary-color);
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    /* background: white; */
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: right
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform input,
#msform textarea {
        /* padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px; */
    /* margin-bottom: 25px; */
    /* margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px */
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid var(--primary-color);
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: var(--primary-color);
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: var(--primary-color)
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: left
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000
}

.card {
    z-index: 0;
    border: none;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: var(--primary-color);
    margin-bottom: 15px;
    font-weight: normal;
    text-align: right
}

.purple-text {
    color: var(--primary-color);
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: left
}

.fieldlabels {
    color: gray;
    text-align: right
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey;
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey;
    display: flex;
    justify-content: center;
}

#progressbar .active {
    color: var(--primary-color)
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 50%;
    float: right;
    position: relative;
    font-weight: 400
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    /* font-family: FontAwesome;
    content: "\f00c" */
}

#progressbar #confirm:before {
    /* font-family: FontAwesome;
    content: "\f030" */
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px;
    z-index: 26;
    position: inherit;
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    right: 0;
    top: 25px;
    z-index: 0
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: var(--primary-color)
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: var(--primary-color)
}

.counter__increment, .counter__decrement {
        transition: all 0.4s ease-in-out;
    }

.counter {
  position: relative;
  width: 7.5rem;
  height: 1.875rem;
  border: 1px solid #ced4da;
  border-radius: 3px;
  text-align: center;
  overflow: hidden;
}
.counter__input {
  border: none;
  height: 100%;
  margin: 0 auto;
  text-align: center;
  color: #2f3640;
  font-size: 0.875rem;
  background-color: transparent;
}
.counter__increment, .counter__decrement {
  position: absolute;
  top: 0;
  font-size: 1rem;
  line-height: 1.5625rem;
  height: 1.875rem;
  width: 2.1875rem;
  font-weight: normal;
  color: #2f3640;
  text-decoration: none;
}
.counter__increment:hover, .counter__increment:active, .counter__increment:focus, .counter__decrement:hover, .counter__decrement:active, .counter__decrement:focus {
  color: #2f3640;
  text-decoration: none;
  background-color: #edeff0;
}
.counter__increment {
  right: 0;
  border-left: 1px solid #ced4da;
}
.counter__decrement {
  left: 0;
  top: 0;
  border-right: 1px solid #ced4da;
  line-height: 1.6875rem;
}

.input-group input{
    height: 38px !important;
}
label{
    color: var(--third-color)
}
    </style>



<?php include 'includes/head.php';?>

<body class="theme">
    <?php include 'includes/top-navbar.php';?>
    <?php include 'includes/inside-navbar.php';?>

    <!-- start wizard form -->
    <div class="wizard_foorm pt-5">
        <div class="container">
            <h2 class="section_title">
                عمل فرصة
            </h2>
            <div class="wrapper">

            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/Risk management-pana.svg">
                </div>
                <div class="col-md-6">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>معلومات شخصية</strong></li>
                                <li id="personal"><strong> بيانات الصنف </strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control custom_input" placeholder="الإسم">
                                                    <label for="floatingPassword"> الإسم </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control custom_input" placeholder="الهاتف المحمول">
                                                    <label for="floatingPassword"> الهاتف المحمول </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control custom_input" placeholder="البريد الإلكتروني">
                                                    <label for="floatingPassword"> البريد الإلكرتوني </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control custom_input" placeholder="العنوان">
                                                    <label for="floatingPassword"> العنوان </label>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="التالي" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="mb-2" style="color:var(--third-color)"> شهادة ذكاة </label>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control custom_input" id="inputGroupFile02">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="mb-2" style="color:var(--third-color)"> خلو طرف من الضرائب</label>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control custom_input" id="inputGroupFile02">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="mb-2" style="color:var(--third-color)"> اخر تقرير مالي </label>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control custom_input" id="inputGroupFile02">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="mb-2" style="color:var(--third-color)"> اخر تقرير مالي </label>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control custom_input" id="inputGroupFile02">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-holder mb-3">
                                                <select class="form-select custom_input" aria-label="Default select example">
                                                    <option selected>طريقة الدفع </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-holder mb-3">
                                                <select class="form-select custom_input" aria-label="Default select example">
                                                    <option selected> مدة التسليم</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-holder mb-3">
                                                <select class="form-select custom_input" aria-label="Default select example">
                                                    <option selected>القطاعات</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mt-3 mb-3">
                                                <div class="wrap">
                                                <label>العدد</label>
                                                <div class="counter">
                                                    <input class="counter__input" type="text" value="1" name="counter" size="5" readonly="readonly"/>
                                                    <a class="counter__increment">+</a>
                                                    <a class="counter__decrement">-</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <div class="wrap">
                                                <label>الكمية</label>
                                                <div class="counter">
                                                    <input class="counter__input" type="text" value="1" name="counter" size="5" readonly="readonly"/>
                                                    <a class="counter__increment">+</a>
                                                    <a class="counter__decrement">-</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">                            
                                                <textarea class="custom_input form-control" placeholder="المواصفات" style="width:100%"></textarea>
                                                <label for="floatingPassword"> المواصفات </label>
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