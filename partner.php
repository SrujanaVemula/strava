<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <?php include("includes/include_css.html") ?>
</head>

<body>
    <?php include("includes/browser_upgrade.html") ?>
	<?php include("includes/header.html") ?>
	<?php include("includes/sidebar.html") ?>

    <main id="partner" class="smooth_scroll_pages about">
        <!--  insert body content  -->
        <section class="banner">
            <picture>
                <source media="(min-width:767px)" srcset="img/partner_banner.jpg">
                <img src="img/partner_banner.jpg" alt="Banner Image" class="img-responsive">
            </picture>
            <div class="banner_content">
                <h1 class="banner_title">Co-create best-in-class <br>fitness supplements</h1>
            </div>
        </section>
        <section class="container">
            <div class="breadcrumbs">
                <p class="breadcrumbs_text"><span class="icon"><i class="fas fa-home"></i></span><a
                        href="index.php">home / </a><a href="" class="current">partner with us</a></p>
            </div>
        </section>
        <section class="page_desc">
            <div class="container">
                <p class="body1"><span class="bold">At Advance MuscleMass,</span> we pride ourselves for being pioneers
                    in manufacturing international-grade nutritional supplements that deliver on your fitness goals as
                    well as fit your budget. Interested in partnering with us? Fill out the form below.</p>
                <form class="m_form enquiry_form" id="enquiry-form" method="post">
                    <img src="img/home/4slanting_lines.svg" alt="Slanting Lines" class="slanting_lines">
                    <img src="img/plus.svg" alt="Plus" class="plus">
                    <div class="input-field">
                        <input id="name" type="text" name="fullname" class="validate">
                        <label class="placeholder_text" for="name">Name*</label>
                    </div>
                    <div class="input-field">
                        <input id="email" type="email" name="email" class="validate">
                        <label class="placeholder_text" for="email">Email Address*</label>
                    </div>
                    <div class="input-field">
                        <input id="phone" type="number" name="phone" class="validate">
                        <label class="placeholder_text" for="phone">Phone Number*</label>
                    </div>
                    <div class="input-field">
                        <input id="how" type="text" name="how" class="validate">
                        <label class="placeholder_text" for="how">How did you hear about us?*</label>
                    </div>
                    <div class="input-field company">
                        <input id="company" type="text" name="company" class="validate">
                        <label class="placeholder_text" for="company">Company Information</label>
                    </div>
                    <div class="input-field">
                        <input id="companyName" type="text" name="companyName" class="validate">
                        <label class="placeholder_text" for="companyName">Company Name*</label>
                    </div>
                    <div class="input-field">
                        <input id="business" type="text" name="business" class="validate">
                        <label class="placeholder_text" for="business">Type of Business*</label>
                    </div>
                    <div class="input-field">
                        <input id="address" type="text" name="address" class="validate">
                        <label class="placeholder_text" for="address">Address</label>
                    </div>
                    <div class="input-field">
                        <input id="website" type="text" name="website" class="validate">
                        <label class="placeholder_text" for="website">Website</label>
                    </div>
                    <div class="btn_div"><input class="green_btn" type="submit" value="Submit"></div>
                </form>
            </div>
        </section>
    </main>
    <!--  end body content -->
	<?php include("includes/footer.html") ?>
    <?php include("includes/include_js.html") ?>
    <script defer type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script defer>
        //for letters only
        $.validator.addMethod("lettersonly", function (value, element) {
            return this.optional(element) || /^[a-zA-Z][a-zA-Z ]+$/i.test(value);
        });

        //for email only
        $.validator.addMethod("emailtest", function (value, element) {
            return this.optional(element) || /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/i.test(value);
        });


        $("#enquiry-form").validate({
            rules: {
                fullname: {
                    required: true,
                    lettersonly: true,
                    minlength: 2
                },
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                },
                email: {
                    emailtest: true,
                    required: true,
                    email: true
                },
                how: {
                    required: true,
                    lettersonly: true,
                    minlength: 2
                },
                companyName: {
                    required: true,
                    lettersonly: true,
                    minlength: 2
                },
                business: {
                    required: true,
                    minlength: 2
                }
            },
            messages: {
                fullname: {
                    required: "This field is required",
                    lettersonly: "Please enter a text only"
                },
                mobile: {
                    required: "This field is required",
                    minlength: "Please enter a valid mobile number",
                    maxlength: "Please enter a valid mobile number",
                    digits: "Please enter a digits only"
                },
                email: {
                    required: "This field is required",
                    emailtest: "Please enter a valid email address"
                },
                how: {
                    required: "This field is required"
                },
                companyName: {
                    required: "This field is required"
                },
                business: {
                    required: "This field is required"
                }
            }
        });

        // $("#enquiry-form").ajaxForm({
        //     success: function ($response) {
        //         if ($response == 1) {
        //             $('#thank-you-msg').show();
        //             setTimeout(function () {
        //                 $('#thank-you-msg').hide();
        //             }, 5000);
        //         }
        //     }
        // });
    </script>
</body>

</html>