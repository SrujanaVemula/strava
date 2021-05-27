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

    <main id="lab_reports" class="smooth_scroll_pages lab_reports">
        <section class="lab_reports_section" data-scroll>
            <div class="text-center">
                <h2 class="section_title">LAB</br><span class="transparent_text">REPORTS</span></h2>
            </div>
            <div class="about_lab">
                <div class="outside_section_clip">
                    <div class="section_clip_big">
                        <div class="flex-wrap">
                            <div class="flex-item">
                                <div class="icon"><img src="img/lab/lab1.svg" alt="No. 1 Gainer & Protein"></div>
                                <p class="icon_desc">Product is authentic and each product contains scratch code so
                                    authentication is provided by scratch code verification only.</p>
                            </div>
                            <div class="flex-item">
                                <div class="icon"><img src="img/lab/lab2.svg" alt="Most Trusted Amino Acid"></div>
                                <p class="icon_desc">During Analysis, due to inherent variation in the analytical
                                    procedure
                                    and lab environment there may be variation of 5-6% in the actual result stated on
                                    the
                                    label claim.</p>
                            </div>
                            <div class="flex-item">
                                <div class="icon"><img src="img/lab/lab3.svg" alt="4,00,000+ Happy Customers"></div>
                                <p class="icon_desc">All Products are tested in NABL and ISO certified (ISO 9001:2015)
                                    lab
                                    for protein content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="reports_table">
            <div class="container">
                <img class="star_img" src="img/lab/star.svg" alt="Star Image">
                <div class="filters_featured" data-scroll>
                    <div class="filters dropdown_wrap">
                        <p class="text">Show entries</p>
                        <div class="select rel_item">
                            <!-- <img src="img/lab/select.svg" class="filter_img"> -->
                            <select name="" class="browser-default uppercase element" id="stateId">
                                <option value="">25</option>
                            </select>
                        </div>
                    </div>
                    <div class="featured dropdown_wrap">
                        <span class="uppercase text">search</span>
                        <div class="rel_item">
                            <img src="img/lab/search.svg" class="filter_img">
                            <input type="text" class="input_element element">
                        </div>
                    </div>
                </div>
                <div class="scrollable_table" data-scroll>
                    <table class="cmn_table">
                        <tr>
                            <th>Sr.no.</th>
                            <th>Product</th>
                            <th>Date of manufacturing</th>
                            <th>batch number</th>
                            <th>content</th>
                            <th>report</th>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Whey protein Powder - Chocolate (1kg)</td>
                            <td>01-11-2019</td>
                            <td>AM19324</td>
                            <td>22.09 GR PROTEIN<br> PER 32.5GR<br> (1 SERVING)</td>
                            <td><button class="green_btn">VIEW REPORTS</button></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Mass Gainer - Vanila (1kg)</td>
                            <td>01-11-2019</td>
                            <td>AM19314</td>
                            <td>7.15 GR PROTEIN <br>PER 34 GR <br>(1 SERVING)</td>
                            <td><button class="green_btn">VIEW REPORTS</button></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Weight Gainer - Chocolate (1kg)</td>
                            <td>01-11-2019</td>
                            <td>AM19318</td>
                            <td>22.09 GR PROTEIN <br>PER 32.5GR<br>(1 SERVING)</td>
                            <td><button class="green_btn">VIEW REPORTS</button></td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Weight Gainer - Vanilla (1kg)</td>
                            <td>01-11-2019</td>
                            <td>AM19320</td>
                            <td>7.15 GR PROTEIN <br>PER 34 GR <br>(1 SERVING)</td>
                            <td><button class="green_btn">VIEW REPORTS</button></td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Mass Gainer - Chocolate (1kg)</td>
                            <td>01-10-2019</td>
                            <td>AM19279</td>
                            <td>22.09 GR PROTEIN <br>PER 32.5GR<br>(1 SERVING)</td>
                            <td><button class="green_btn">VIEW REPORTS</button></td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td>22.09 GR PROTEIN <br>PER 32.5GR <br>(1 SERVING)</td>
                            <td>01-08-2019</td>
                            <td>AM19209</td>
                            <td>7.15 GR PROTEIN <br>PER 34 GR <br>(1 SERVING)</td>
                            <td><button class="green_btn">VIEW REPORTS</button></td>
                        </tr>
                    </table>
                </div>
                <div class="previous_next" data-scroll>
                    <p class="next_text">Show entries 1 to <span class="bold">6</span> of <span class="bold">8</span>
                        enteries</p>
                    <div class="prev_next_wrap">
                        <span class="left_arrow"><img src="img/prev.svg" class="img-responsive"></span>
                        <p class="previous_text">Previous</p>
                        <p class="next_text">Next</p><span class="right_arrow"><img src="img/next.svg"
                                class="img-responsive"></span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--  end body content -->
    <?php include("includes/footer.html") ?>
    <?php include("includes/include_js.html") ?>
</body>

</html>