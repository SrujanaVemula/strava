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

    <!--  insert body content  -->
    <main id="contact_page" class="smooth_scroll_pages">
        <section class="banner">
            <picture>
                <source media="(min-width:767px)" srcset="img/contact_banner.jpg">
                <img src="img/contact_banner.jpg" alt="Banner Image" class="img-responsive">
            </picture>
            <div class="banner_content">
                <h1 class="banner_title">Contact Us</h1>
            </div>
        </section>
        <section class="container">
            <div class="breadcrumbs">
                <p class="breadcrumbs_text"><span class="icon"><i class="fas fa-home"></i></span><a
                        href="index.php">home / </a><a href="" class="current">contact</a></p>
            </div>
        </section>
        <section class="page_desc">
            <div class="container">
                <p class="body1" data-scroll><span class="bold">Have any suggestions, feedback or concerns? </span><br> Share it
                    with us by filling out the form below. Also, you could reach out to us at</p>
                <form class="m_form enquiry_form" id="enquiry-form" method="post" data-scroll>
                    <img src="img/home/4slanting_lines.svg" alt="Slanting Lines" class="slanting_lines">
                    <img src="img/transparent_star.svg" alt="Plus" class="plus">
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
                        <input id="message" type="text" name="message" class="validate">
                        <label class="placeholder_text" for="message">Message</label>
                    </div>
                    <div class="btn_div"><input class="green_btn" type="submit" value="Submit"></div>
                </form>
                <div class="contact_info" data-scroll>
                    <div class="wrap phone"><a href="tel:91 76984 30406"><img src="img/phone.svg">+91 76984 30406</a></div>
                    <div class="wrap mail"><a href="mailto:info@advancemusclemass.com"><img src="img/mail.svg">info@advancemusclemass.com</a></div>
                </div>
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


        $(".enquiry_form").validate({
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
                }
            }
        });

        $("#enquiry-form").ajaxForm({
            success: function ($response) {
                if ($response == 1) {
                    $('#thank-you-msg').show();
                    setTimeout(function () {
                        $('#thank-you-msg').hide();
                    }, 5000);
                }
            }
        });
    </script>
</body>

</html>