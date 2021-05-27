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
    <main id="authentication" class="smooth_scroll_pages authentication" data-scroll>
        <section class="authentication_desc">
            <div class="container">
                <div class="text-center"data-scroll>
                    <h2 class="section_title">PRODUCT<br><span class="transparent_text">AUTHENTICATION</span></h2>
                </div>
                <div class="img_text_wrap"data-scroll>
                    <img src="img/scratch_card_img.png" class="img-responsive" alt="Scratch Card Image">
                    <h2 class="header2 desc1">Scratch and enter<br>this code only</h2>
                    <h2 class="header2 desc2">This is not a <br>scratch code</h2>
                </div>
                <div class="authentication_code_section"data-scroll>
                    <div class="code_section_bg">
                        <img class="lines_img" src="img/6slanting_lines.svg" alt="Star Image">
                        <img class="star_img" src="img/auth_star.svg" alt="Star Image">
                        <div class="section_clip_big">
                            <h2 class="header2">LOOK FOR UNIQUE CODE UNDER THE CAP.</h2>
                            <div class="code_wrap_section">
                                <p class="enter_text">ENTER UNIQUE CODE</p>
                                <form class="code_form" autocomplete="off" novalidate>
                                    <div class="code_input">
                                        <input name="code" maxlength="1" />
                                        <input maxlength="1" />
                                        <input maxlength="1" />
                                        <input maxlength="1" />
                                        <input maxlength="1" />
                                        <input maxlength="1" />
                                        <input maxlength="1" />
                                        <input maxlength="1" />
                                    </div>
                                    <div class="input_wrap">
                                        <div class="input-field">
                                            <input id="phone" type="number" name="phone" class="validate">
                                            <label class="placeholder_text" for="phone">Mobile Number</label>
                                        </div>
                                        <div class="input-field">
                                            <input id="email" type="email" name="email" class="validate">
                                            <label class="placeholder_text" for="email">Email Address</label>
                                        </div>
                                    </div>
                                    <h2 class="header2">Purchased From</h2>
                                    <div class="input_wrap">
                                        <div class="input-field">
                                            <select id="purchased" name="purchased" class="validate"
                                                value="Please select from below options" required>
                                                <option>Please select from below options</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                            </select>
                                        </div>
                                        <div class="btn_div">
                                            <input class="green_btn" type="submit" value="verify">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="congratulations">
                                <p class="congartulations_msg">Congratulations your product with code MNXXV4RK is authenticated successfully.<br><a href="http://www.advancemusclemass.com/">www.advancemusclemass.com</a></p>
                                <div class="product_detail">
                                    <div class="product_detail_text">
                                        <p class="title">Product Code: </p><p class="desc">MNXXV4RK</p>
                                    </div>
                                    <div class="product_detail_text">
                                        <p class="title">Product Name: </p><p class="desc">ADVANCE MUSCLEMASS WEIGHT GAINER( VANILLA, 1KG)</p>
                                    </div>
                                    <div class="product_detail_text">
                                        <p class="title">Batch Number: </p><p class="desc">AM21248</p>
                                    </div>
                                    <div class="product_detail_text">
                                        <p class="title">Date of Manufacturing: </p><p class="desc">APR-2021</p>
                                    </div>
                                </div>
                                <div class="text-center btn_div"><button class="green_btn">Authenticate again</button></div>
                            </div> -->
                            <!-- <div class="error">
                                <p class="error_msg">Sorry!!! your product with code MNXXV4RK is already verified or invalid. For any query, Please contact to our customer care number <a href="tel:917698430406">+91 7698430406</a></p>
                                <div class="product_detail">
                                    <p class="product_detail_text">If Problem in authentication please call on our customer care number <br><span class="bold"><a href="tel:917698430406">+91 7698430406</a> or mail on <a href="mailto:stravakart@hgmail.com">stravakart@hgmail.com</a></span></p>
                                </div>
                                <div class="text-center btn_div"><button class="green_btn">Authenticate again</button></div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="how_authenticate">
            <div class="container" data-scroll>
                <h2 class="header2">How to Authenticate ?</h2>
                <div class="steps_to_authenticate">
                    <ul class="steps">
                        <li>Scratch the coupon pasted on the seal wad</li>
                        <li>Enter unique code in the columns</li>
                        <li>Enter the email ID and mobile number</li>
                        <li>Click on Verify</li>
                    </ul>
                    <ul class="steps">
                        <li>Follow us on Instagram <span class="bold">@advancemusclemass</span> and like our Facebook
                            page to get giveaway alerts and new launch. </li>
                    </ul>
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
        // OTP Input Auto Tab
        $('.code_input input').on('keyup change', function () {
            $t = $(this);
            if ($t.val().length > 0) {
                $t.next().focus();
            } else {
                $t.prev().focus();
            }
        });
        //for letters only
        $.validator.addMethod("lettersonly", function (value, element) {
            return this.optional(element) || /^[a-zA-Z][a-zA-Z ]+$/i.test(value);
        });

        //for email only
        $.validator.addMethod("emailtest", function (value, element) {
            return this.optional(element) || /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/i.test(value);
        });


        $(".code_form").validate({
            rules: {
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
                purchased: {
                    required: true,
                }
            },
            messages: {
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
                purchased: {
                    required: "Please select from where you purchased field",
                }
            }
        });
    </script>
</body>

</html>