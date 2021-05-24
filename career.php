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

    <main id="career" class="smooth_scroll_pages career">
        <!--  insert body content  -->
        <section class="banner">
            <picture>
                <source media="(min-width:767px)" srcset="img/career_banner.jpg">
                <img src="img/career_banner.jpg" alt="Banner Image" class="img-responsive">
            </picture>
            <div class="banner_content">
                <h1 class="banner_title">Careers</h1>
            </div>
        </section>
        <section class="container">
            <div class="breadcrumbs">
                <p class="breadcrumbs_text"><span class="icon"><i class="fas fa-home"></i></span><a
                        href="index.php">home / </a><a href="" class="current">careers</a></p>
            </div>
        </section>
        <section class="work_with_us" data-scroll>
            <div class="container">
                <div class="flex_wrap">
                    <div class="work_title">
                        <h2 class="section_title">WORK</br><span class="transparent_text">WITH US</span></h2>
                    </div>
                    <div class="work_content">
                        <h3 class="content_title">Are you a fitness enthusiast?</h3>
                        <p class="body1">Do you want to leverage your knowledge and passion to make fitness accessible
                            to all through path-breaking innovation? At Advance MuscleMass, you get to be part of an
                            exciting organization full of opportunities to grow and excel. Check out our openings.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="current_openings">
            <div class="container">
                <img src="img/career_vector.svg" class="career_vector" alt="Career Vector">
                <p class="openings_desc">With aggressive growth plans on the anvil, we would like to hear from all those
                    who want to be part of the Fitness Transformation.<br><span class="bold">You can mail your resume on
                        <a href="mailto:careers@advancemusclemass.com">careers@advancemusclemass.com</a></span></p>
                <div class="opening_dropdown_wrap">
                    <h4 class="openings_title">Current openings</h4>
                    <div class="filters dropdown_wrap">
                        <div class="black_bg">
                            <div class="inside_box">
                                <img src="img/product/filter.svg" class="filter_img">
                                <select name="state" class="browser-default uppercase dropdown" id="stateId">
                                    <option value="">show filters</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scrollable_table">
                    <table class="cmn_table">
                        <tr>
                            <th>Job Title</th>
                            <th>Location</th>
                            <th>Function</th>
                            <th>Business Unit</th>
                        </tr>
                        <tr>
                            <td>Material Handler II</td>
                            <td>Mumbai, 400066</td>
                            <td>Manufacturing</td>
                            <td>Performance Nutrition</td>
                        </tr>
                        <tr>
                            <td>Director, Sr People Operations</td>
                            <td>Mumbai, 400066</td>
                            <td>Manufacturing</td>
                            <td>Performance Nutrition</td>
                        </tr>
                        <tr>
                            <td>Specialist, Category</td>
                            <td>Mumbai, 400066</td>
                            <td>Manufacturing</td>
                            <td>Performance Nutrition</td>
                        </tr>
                        <tr>
                            <td>Director, Sr People Operations</td>
                            <td>Mumbai, 400066</td>
                            <td>Manufacturing</td>
                            <td>Performance Nutrition</td>
                        </tr>
                        <tr>
                            <td>Specialist, Category</td>
                            <td>Mumbai, 400066</td>
                            <td>Manufacturing</td>
                            <td>Performance Nutrition</td>
                        </tr>
                    </table>
                </div>
                <div class="previous_next">
                    <span class="left_arrow"><img src="img/prev.svg" class="img-responsive"></span>
                    <p class="previous_text">Previous</p>
                    <p class="next_text">Next</p><span class="right_arrow"><img src="img/next.svg"
                            class="img-responsive"></span>
                </div>
            </div>
        </section>
    </main>
    <!--  end body content -->
    <?php include("includes/footer.html") ?>
    <?php include("includes/include_js.html") ?>
</body>

</html>