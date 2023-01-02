<!DOCTYPE html>
<html lang="en">

    <style>
  /* .wrapper {
	width: 826px;
	height: 620px;
	padding: 63px 90px 0;
	background: #fff; } */
  
    .wizard {
        position: relative; 
    }
    .steps .current-info, .steps .number {
        display: none; 
    }
  
    .steps ul {
        display: flex;
        justify-content: center;
        margin-bottom: 35px;
        direction: initial;
    }
	.steps ul li {
        margin-right: 10.8%;
        position: relative; 
    }
	.steps ul li:last-child {
		margin-right: 0; 
    }
	.steps ul li .step-arrow {
		position: absolute;
		top: 33%;
		left: 113%;
		max-width: 57%; 
    }
	.steps ul li .step-order {
		display: block;
		text-align: center;
		text-transform: uppercase;
		font-size: 12px;
		color: #666;
		margin-top: 14px; 
    }
    h3 {
        font-size: 20px;
        color: #333;
        text-transform: uppercase;
        text-align: center;
        font-weight: 900;
        margin-bottom: 29px;
        font-weight: 900; 
    }
    .form-row {
        display: flex;
        margin-bottom: 20px; 
    }
	.form-row .form-holder {
        width: 50%;
        margin-right: 20px; 
    }
	.form-row .form-holder:last-child {
		margin-right: 0; 
    }
	.form-row .form-holder.w-100 {
		width: 100%;
		margin-right: 0; 
    }
	.form-row .form-group {
        width: 50%;
        display: flex; 
    }
	.form-row .form-group .form-holder {
		margin-right: 21px; 
    }
    .form-row .form-group .form-holder:last-child {
        margin-right: 0; 
    }
  
    .form-holder {
        position: relative; 
    }
    .form-holder i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 20px;
        font-size: 16px; 
    }
	.form-holder i.zmdi-eye {
		cursor: pointer; 
    }
  
    .form-control {
        height: 42px;
        border: 1px solid #e6e6e6;
        width: 100%;
        background: none;
        padding: 0 35px 0 19px;
        color: #999; 
    }
	.form-control:focus {
	    border-color: #8eb852; 
    }
	.form-control::-webkit-input-placeholder {
	    color: #999; 
    }
	.form-control::-moz-placeholder {
	    color: #999; 
    }
	.form-control:-ms-input-placeholder {
	    color: #999; 
    }
	.form-control:-moz-placeholder {
	    color: #999; 
    }
  
    .actions {
    	margin-top: 30px; 
    }
    .actions ul {
        display: flex;
        justify-content: space-between; 
    }
	.actions ul.step-4 {
		justify-content: center; 
    }
    .actions ul.step-4 li:first-child {
        display: none; 
    }
	.actions li a {
        border: none;
        display: inline-flex;
        height: 42px;
        width: 132px;
        align-items: center;
        color: #fff;
        cursor: pointer;
        background: #8eb852;
        text-transform: uppercase;
        justify-content: center;
        letter-spacing: 1px;
        font-size: 15px;
        border-radius: 3px; 
    }
	.actions li a:hover {
		background: #a1d15e;
    }
	.actions li:first-child a {
	    width: 97px; 
    }
	.actions li:last-child a {
	    width: 234px; 
    }
    .dropdown__select{
        border: 1px solid var(--primary-color);
        background-color: transparent;
        border-radius: 3px;
    }
    .dropdown-toggle{
        color: var(--primary-color);
    }
    .dropdown-menu{
        max-height: 350px;
        overflow-y: scroll;
    }
    ::-webkit-scrollbar-thumb{
        background-color: var(--primary-color);
        border-radius: 0px ;
    }

    ::-webkit-scrollbar{
        width: 4px ;
        background-color: transparent
    }
  
    .counter__increment, .counter__decrement {
        transition: all 0.4s ease-in-out;
    }

.counter {
  position: relative;
  width: 7.5rem;
  height: 1.875rem;
  border: 1px solid var(--primary-color);
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
  border-left: 1px solid var(--primary-color);
}
.counter__decrement {
  left: 0;
  top: 0;
  border-right: 1px solid var(--primary-color);
  line-height: 1.6875rem;
}
  /*# sourceMappingURL=style.css.map */
  
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
                <form action="" id="wizard">
                    <!-- SECTION 1 -->
                    <h4></h4> <!-- don't remove this tag . this is important -->
                    <section>
                        <h3>معلومات شخصية</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control custom_input" placeholder="الإسم">
                                    <label for="floatingPassword"> الإسم </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control custom_input" placeholder="الهاتف المحمول">
                                    <label for="floatingPassword"> الهاتف المحمول </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control custom_input" placeholder="البريد الإلكتروني">
                                    <label for="floatingPassword"> البريد الإلكرتوني </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control custom_input" placeholder="العنوان">
                                    <label for="floatingPassword"> العنوان </label>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- SECTION 2 -->
                    <h4></h4>
                    <section>
                        <h3>بيانات الصنف</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-holder">
                                    <div class="dropdown dropdown__select">
                                        <a class="btn dropdown-toggle custom_input" href="#" role="button" id="dropdownMenuLink"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            القطاعات 
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">اختيار 1</a></li>
                                            <li><a class="dropdown-item" href="#"> اختبار 2 </a></li>
                                            <li><a class="dropdown-item" href="#"> اختيار3  </a></li>
                                            <li><a class="dropdown-item" href="#">اختيار 1</a></li>
                                            <li><a class="dropdown-item" href="#"> اختبار 2 </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
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
                            <div class="col-md-6">
                                <div class="mt-3">
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
                                <div class="form-floating mt-3">                            
                                    <textarea class="custom_input form-control" placeholder="المواصفات" style="width:100%"></textarea>
                                    <label for="floatingPassword"> المواصفات </label>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
    


    <?php include 'includes/footer.php';?>
    <?php include 'includes/script.php';?>

    <script>
        $(function(){
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 300,
        labels: {
            next: "التالي",
            previous: "السابق",
            finish: 'تأكيد'
        },
        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex >= 1 ) {
                $('.steps ul li:first-child a img').attr('src','assets/images/step-1.png');
            } else {
                $('.steps ul li:first-child a img').attr('src','assets/images/step-1-active.png');
            }

            if ( newIndex === 1 ) {
                $('.steps ul li:nth-child(2) a img').attr('src','assets/images/step-2-active.png');
            } else {
                $('.steps ul li:nth-child(2) a img').attr('src','assets/images/step-2.png');
            }

            // if ( newIndex === 2 ) {
            //     $('.steps ul li:nth-child(3) a img').attr('src','assets/images/step-3-active.png');
            // } else {
            //     $('.steps ul li:nth-child(3) a img').attr('src','assets/images/step-3.png');
            // }

            // if ( newIndex === 3 ) {
            //     $('.steps ul li:nth-child(4) a img').attr('src','assets/images/step-4-active.png');
            //     $('.actions ul').addClass('step-4');
            // } else {
            //     $('.steps ul li:nth-child(4) a img').attr('src','assets/images/step-4.png');
            //     $('.actions ul').removeClass('step-4');
            // }
            return true; 
        }
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Click to see password 
    $('.password i').click(function(){
        if ( $('.password input').attr('type') === 'password' ) {
            $(this).next().attr('type', 'text');
        } else {
            $('.password input').attr('type', 'password');
        }
    }) 
    // Create Steps Image
    $('.steps ul li:first-child').append('<img src="assets/images/step-arrow.png" alt="" class="step-arrow">').find('a').append('<img src="assets/images/step-1-active.png" alt=""> ').append('<span class="step-order">Step 01</span>');
    $('.steps ul li:nth-child(2').append('<img src="assets/images/step-arrow.png" alt="" class="step-arrow">').find('a').append('<img src="assets/images/step-2.png" alt="">').append('<span class="step-order">Step 02</span>');
    // $('.steps ul li:nth-child(3)').append('<img src="assets/images/step-arrow.png" alt="" class="step-arrow">').find('a').append('<img src="assets/images/step-3.png" alt="">').append('<span class="step-order">Step 03</span>');
    // $('.steps ul li:last-child a').append('<img src="assets/images/step-4.png" alt="">').append('<span class="step-order">Step 04</span>');
    // Count input 
    $(".quantity span").on("click", function() {

        var $button = $(this);
        var oldValue = $button.parent().find("input").val();

        if ($button.hasClass('plus')) {
          var newVal = parseFloat(oldValue) + 1;
        } else {
           // Don't allow decrementing below zero
          if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
            } else {
            newVal = 0;
          }
        }
        $button.parent().find("input").val(newVal);
    });
})

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