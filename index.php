<?php
session_start();
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Workoo - Freelancing HTML Template</title>

    <!-- All Plugins Css -->
    <link href="assets/css/plugins.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">
</head>

<body class="blue-skin">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="Loader"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <?php include "includes/header.php" ?>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->


        <!-- ============================ Hero Banner  Start================================== -->
        <div class="hero-banner full jumbo-banner" style="background:#f4f9fd url(assets/img/bg2.png);">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-7 col-md-8">
                        <a href="#" class="header-promo light w-inline-block">
                            <div class="label bg-success">NEW</div>
                            <div class="header-promo-text">Workoo is now world wide job find platform</div>
                        </a>
                        <h1>Find <span class="text-info">your job</span> & make sure goal!</h1>
                        <p class="lead">Your dream job is waiting for you.</p>
                        <form class="search-big-form banner-search shadow mt-3">
                            <div class="row m-0">
                                <div class="col-lg-5 col-md-5 col-sm-12 p-0">
                                    <div class="form-group">
                                        <i class="ti-search"></i>
                                        <input type="text" class="form-control b-0 b-r l-radius" placeholder="Job Title or Keywords">
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-4 col-sm-12 p-0">
                                    <div class="form-group">
                                        <select id="jb-category" class="js-states form-control b-0">
                                            <option value="">&nbsp;</option>
                                            <option value="1">Accounting & Finance</option>
                                            <option value="2">Telecommunications</option>
                                            <option value="3">IT Companies</option>
                                            <option value="4">Art & Design</option>
                                            <option value="5">Automotive Jobs</option>
                                            <option value="6">Banking Jobs</option>
                                            <option value="7">Education Training</option>
                                            <option value="8">Designing & Multimedia</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                                    <button type="button" class="btn dark-3 full-width r-radius">Search</button>
                                </div>
                            </div>
                        </form>
                        <div class="featured-category dark">
                            <ul>
                                <li>Browse Category:</li>
                                <li><a href="search-job.html" data-toggle="tooltip" data-original-title="Banking">Banking</a></li>
                                <li><a href="search-job.html" data-toggle="tooltip" data-original-title="Healthcare">Healthcare</a></li>
                                <li><a href="search-job.html" data-toggle="tooltip" data-original-title="Software">Software</a></li>
                                <li><a href="search-job.html" data-toggle="tooltip" data-original-title="Automotive">Automotive</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-4">
                        <img src="assets/img/a-2.png" alt="latest property" class="img-fluid">
                    </div>

                </div>
            </div>
        </div>
        <!-- ============================ Hero Banner End ================================== -->

        <!-- ============================ Newest Designs Start ==================================== -->
        <section class="min-sec">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9">
                        <div class="sec-heading">
                            <h2>Top Featured <span class="theme-cl-2">Jobs</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <!-- Single Item -->
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="job_grid_02">
                            <img src="assets/img/job-featured.png" class="_featured_jbs" alt="">
                            <div class="jobs-like">
                                <label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
                            </div>
                            <div class="jb_types fulltime">Full Time</div>
                            <div class="jb_grid_01_thumb">
                                <a href="employer-detail.html"><img src="assets/img/c-1.png" class="img-fluid" alt=""></a>
                            </div>
                            <div class="jb_grid_01_caption">
                                <h4 class="_jb_title"><a href="job-detail.html">WordPress Web Developer</a></h4>
                                <div class="_emp_jb">A.K Infra &amp; Reality Developers Pvt. Ltd.</div>
                            </div>
                            <div class="jb_grid_01_footer">
                                <a href="job-detail.html" class="_jb_apply">View Job</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="job_grid_02">
                            <div class="jobs-like">
                                <label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
                            </div>
                            <div class="jb_types parttime">Part Time</div>
                            <div class="jb_grid_01_thumb">
                                <a href="employer-detail.html"><img src="assets/img/c-2.png" class="img-fluid" alt=""></a>
                            </div>
                            <div class="jb_grid_01_caption">
                                <h4 class="_jb_title"><a href="job-detail.html">Data Management System</a></h4>
                                <div class="_emp_jb">A.K Infra Developers</div>
                            </div>
                            <div class="jb_grid_01_footer">
                                <a href="job-detail.html" class="_jb_apply">View Job</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="job_grid_02">
                            <div class="jobs-like">
                                <label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
                            </div>
                            <div class="jb_types internship">Internship</div>
                            <div class="jb_grid_01_thumb">
                                <a href="employer-detail.html"><img src="assets/img/c-3.png" class="img-fluid" alt=""></a>
                            </div>
                            <div class="jb_grid_01_caption">
                                <h4 class="_jb_title"><a href="job-detail.html">Graphics Web Designer</a></h4>
                                <div class="_emp_jb">A.K. Infra Technology</div>
                            </div>
                            <div class="jb_grid_01_footer">
                                <a href="job-detail.html" class="_jb_apply">View Job</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="job_grid_02">
                            <img src="assets/img/job-featured.png" class="_featured_jbs" alt="">
                            <div class="jobs-like">
                                <label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
                            </div>
                            <div class="jb_types fulltime">Full Time</div>
                            <div class="jb_grid_01_thumb">
                                <a href="employer-detail.html"><img src="assets/img/c-4.png" class="img-fluid" alt=""></a>
                            </div>
                            <div class="jb_grid_01_caption">
                                <h4 class="_jb_title"><a href="job-detail.html">Games &amp; UI Developer</a></h4>
                                <div class="_emp_jb">Waft Technologies</div>
                            </div>
                            <div class="jb_grid_01_footer">
                                <a href="job-detail.html" class="_jb_apply">View Job</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="job_grid_02">
                            <div class="jobs-like">
                                <label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
                            </div>
                            <div class="jb_types contract">Contract</div>
                            <div class="jb_grid_01_thumb">
                                <a href="employer-detail.html"><img src="assets/img/c-5.png" class="img-fluid" alt=""></a>
                            </div>
                            <div class="jb_grid_01_caption">
                                <h4 class="_jb_title"><a href="job-detail.html">Core PHP Developer</a></h4>
                                <div class="_emp_jb">Themezhub Infotech</div>
                            </div>
                            <div class="jb_grid_01_footer">
                                <a href="job-detail.html" class="_jb_apply">View Job</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="job_grid_02">
                            <div class="jobs-like">
                                <label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
                            </div>
                            <div class="jb_types parttime">Part Time</div>
                            <div class="jb_grid_01_thumb">
                                <a href="employer-detail.html"><img src="assets/img/c-6.png" class="img-fluid" alt=""></a>
                            </div>
                            <div class="jb_grid_01_caption">
                                <h4 class="_jb_title"><a href="job-detail.html">Drupal Web Developer</a></h4>
                                <div class="_emp_jb">Simran Web Soft</div>
                            </div>
                            <div class="jb_grid_01_footer">
                                <a href="job-detail.html" class="_jb_apply">View Job</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="job_grid_02">
                            <div class="jobs-like">
                                <label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
                            </div>
                            <div class="jb_types internship">Internship</div>
                            <div class="jb_grid_01_thumb">
                                <a href="employer-detail.html"><img src="assets/img/c-7.png" class="img-fluid" alt=""></a>
                            </div>
                            <div class="jb_grid_01_caption">
                                <h4 class="_jb_title"><a href="job-detail.html">Sr. Products Designer</a></h4>
                                <div class="_emp_jb">Shai Web Infotech</div>
                            </div>
                            <div class="jb_grid_01_footer">
                                <a href="job-detail.html" class="_jb_apply">View Job</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="job_grid_02">
                            <img src="assets/img/job-featured.png" class="_featured_jbs" alt="">
                            <div class="jobs-like">
                                <label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label>
                            </div>
                            <div class="jb_types contract">Contract</div>
                            <div class="jb_grid_01_thumb">
                                <a href="employer-detail.html"><img src="assets/img/c-8.png" class="img-fluid" alt=""></a>
                            </div>
                            <div class="jb_grid_01_caption">
                                <h4 class="_jb_title"><a href="job-detail.html">Magento Web Developer</a></h4>
                                <div class="_emp_jb">Hello Inductries</div>
                            </div>
                            <div class="jb_grid_01_footer">
                                <a href="job-detail.html" class="_jb_apply">View Job</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="mt-3 text-center">
                            <a href="#" class="_browse_more-2 light">Browse More Jobs</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ============================ Newest Designs End ==================================== -->

        <!-- ============================ Category Section Start ==================================== -->
        <section class="gray-light">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9">
                        <div class="sec-heading">
                            <h2>Popular Jobs <span class="theme-cl-2">Category</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <!-- Single Category -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="urip_cated shadow">
                            <div class="urip_cated_avater">
                                <i class="ti-bar-chart"></i>
                            </div>
                            <div class="urip_cated_caps">
                                <h3 class="cats_urip_title"><a href="#">Accounting & Finance</a></h3>
                                <span>310 Jobs Found</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Category -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="urip_cated shadow">
                            <div class="urip_cated_avater">
                                <i class="ti-palette"></i>
                            </div>
                            <div class="urip_cated_caps">
                                <h3 class="cats_urip_title"><a href="#">Art & Design</a></h3>
                                <span>200 Jobs Found</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Category -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="urip_cated shadow">
                            <div class="urip_cated_avater">
                                <i class="ti-car"></i>
                            </div>
                            <div class="urip_cated_caps">
                                <h3 class="cats_urip_title"><a href="#">Transportation</a></h3>
                                <span>100k Jobs Found</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Category -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="urip_cated shadow">
                            <div class="urip_cated_avater">
                                <i class="ti-home"></i>
                            </div>
                            <div class="urip_cated_caps">
                                <h3 class="cats_urip_title"><a href="#">Telecommunications</a></h3>
                                <span>507 Jobs Found</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Category -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="urip_cated shadow">
                            <div class="urip_cated_avater">
                                <i class="ti-desktop"></i>
                            </div>
                            <div class="urip_cated_caps">
                                <h3 class="cats_urip_title"><a href="#">Designing & Multimedia</a></h3>
                                <span>10k Jobs Found</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Category -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="urip_cated shadow">
                            <div class="urip_cated_avater">
                                <i class="ti-brush-alt"></i>
                            </div>
                            <div class="urip_cated_caps">
                                <h3 class="cats_urip_title"><a href="#">Education Training</a></h3>
                                <span>102 Jobs Found</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Category -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="urip_cated shadow">
                            <div class="urip_cated_avater">
                                <i class="ti-car"></i>
                            </div>
                            <div class="urip_cated_caps">
                                <h3 class="cats_urip_title"><a href="#">Automotive Jobs</a></h3>
                                <span>45 Jobs Found</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Category -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="urip_cated shadow">
                            <div class="urip_cated_avater">
                                <i class="ti-bar-chart-alt"></i>
                            </div>
                            <div class="urip_cated_caps">
                                <h3 class="cats_urip_title"><a href="#">Banking Jobs</a></h3>
                                <span>32 Jobs Found</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ============================ Category Section End ==================================== -->

        <!-- ============================ Candidates Section Start ==================================== -->
        <section class="min-sec">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9">
                        <div class="sec-heading">
                            <h2>High Qualified <span class="theme-cl-2">Candidates</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="_freelacers_120 large">
                            <div class="jobs-like"><label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label></div>
                            <div class="_freelacers_120_thumb">
                                <img src="assets/img/verify.svg" class="verified" width="15" alt="">
                                <a href="freelancer-detail.html"><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></a>
                            </div>
                            <div class="_freelacers_120_caption">
                                <div class="_freelan_laft"><i class="ti-location-pin mr-1"></i>Allahabad, UP</div>
                                <h4><a href="freelancer-detail.html">Tiffany H. Mueller</a></h4>
                                <span class="_freel_spec">Sr, Java Developer</span>
                            </div>
                            <div class="_freelacers_120_body">
                                <div class="_free0o9">
                                    <ul>
                                        <li><span>HTML5</span></li>
                                        <li><span>CSS3</span></li>
                                        <li><span>PHP</span></li>
                                        <li><span>Bootstrap</span></li>
                                        <li><span>JavaScript</span></li>
                                        <li><span>3 More</span></li>
                                    </ul>
                                </div>
                                <div class="_freelacers_121_foot">
                                    <a href="freelancer-detail.html" class="btn btn-theme blue light">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="_freelacers_120 large">
                            <div class="jobs-like"><label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label></div>
                            <div class="_freelacers_120_thumb">
                                <img src="assets/img/verify.svg" class="verified" width="15" alt="">
                                <a href="freelancer-detail.html"><img src="assets/img/author.png" class="img-fluid circle" alt=""></a>
                            </div>
                            <div class="_freelacers_120_caption">
                                <div class="_freelan_laft"><i class="ti-location-pin mr-1"></i>Lucknow, UP</div>
                                <h4><a href="freelancer-detail.html">Doris A. Christiansen</a></h4>
                                <span class="_freel_spec">Apps Developer</span>
                            </div>
                            <div class="_freelacers_120_body">
                                <div class="_free0o9">
                                    <ul>
                                        <li><span>HTML5</span></li>
                                        <li><span>CSS3</span></li>
                                        <li><span>PHP</span></li>
                                        <li><span>Bootstrap</span></li>
                                        <li><span>JavaScript</span></li>
                                        <li><span>3 More</span></li>
                                    </ul>
                                </div>
                                <div class="_freelacers_121_foot">
                                    <a href="freelancer-detail.html" class="btn btn-theme blue light">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="_freelacers_120 large">
                            <div class="jobs-like"><label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label></div>
                            <div class="_freelacers_120_thumb">
                                <img src="assets/img/verify.svg" class="verified" width="15" alt="">
                                <a href="freelancer-detail.html"><img src="assets/img/team-2.jpg" class="img-fluid circle" alt=""></a>
                            </div>
                            <div class="_freelacers_120_caption">
                                <div class="_freelan_laft"><i class="ti-location-pin mr-1"></i>London, UK</div>
                                <h4><a href="freelancer-detail.html">Catherine K. Gordon</a></h4>
                                <span class="_freel_spec">Joomla Developer</span>
                            </div>
                            <div class="_freelacers_120_body">
                                <div class="_free0o9">
                                    <ul>
                                        <li><span>HTML5</span></li>
                                        <li><span>CSS3</span></li>
                                        <li><span>PHP</span></li>
                                        <li><span>Bootstrap</span></li>
                                        <li><span>JavaScript</span></li>
                                        <li><span>3 More</span></li>
                                    </ul>
                                </div>
                                <div class="_freelacers_121_foot">
                                    <a href="freelancer-detail.html" class="btn btn-theme blue light">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="_freelacers_120 large">
                            <div class="jobs-like"><label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label></div>
                            <div class="_freelacers_120_thumb">
                                <img src="assets/img/verify.svg" class="verified" width="15" alt="">
                                <a href="freelancer-detail.html"><img src="assets/img/team-3.jpg" class="img-fluid circle" alt=""></a>
                            </div>
                            <div class="_freelacers_120_caption">
                                <div class="_freelan_laft"><i class="ti-location-pin mr-1"></i>Montral, Canada</div>
                                <h4><a href="freelancer-detail.html">Charles P. Daniels</a></h4>
                                <span class="_freel_spec">Magento Developer</span>
                            </div>
                            <div class="_freelacers_120_body">
                                <div class="_free0o9">
                                    <ul>
                                        <li><span>HTML5</span></li>
                                        <li><span>CSS3</span></li>
                                        <li><span>PHP</span></li>
                                        <li><span>Bootstrap</span></li>
                                        <li><span>JavaScript</span></li>
                                        <li><span>3 More</span></li>
                                    </ul>
                                </div>
                                <div class="_freelacers_121_foot">
                                    <a href="freelancer-detail.html" class="btn btn-theme blue light">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="_freelacers_120 large">
                            <div class="jobs-like"><label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label></div>
                            <div class="_freelacers_120_thumb">
                                <img src="assets/img/verify.svg" class="verified" width="15" alt="">
                                <a href="freelancer-detail.html"><img src="assets/img/team-4.jpg" class="img-fluid circle" alt=""></a>
                            </div>
                            <div class="_freelacers_120_caption">
                                <div class="_freelan_laft"><i class="ti-location-pin mr-1"></i>Canada, USA</div>
                                <h4><a href="freelancer-detail.html">Manuel T. Snider</a></h4>
                                <span class="_freel_spec">PHP Developer</span>
                            </div>
                            <div class="_freelacers_120_body">
                                <div class="_free0o9">
                                    <ul>
                                        <li><span>HTML5</span></li>
                                        <li><span>CSS3</span></li>
                                        <li><span>PHP</span></li>
                                        <li><span>Bootstrap</span></li>
                                        <li><span>JavaScript</span></li>
                                        <li><span>3 More</span></li>
                                    </ul>
                                </div>
                                <div class="_freelacers_121_foot">
                                    <a href="freelancer-detail.html" class="btn btn-theme blue light">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="_freelacers_120 large">
                            <div class="jobs-like"><label class="toggler toggler-danger"><input type="checkbox"><i class="fa fa-heart"></i></label></div>
                            <div class="_freelacers_120_thumb">
                                <img src="assets/img/verify.svg" class="verified" width="15" alt="">
                                <a href="freelancer-detail.html"><img src="assets/img/team-5.jpg" class="img-fluid circle" alt=""></a>
                            </div>
                            <div class="_freelacers_120_caption">
                                <div class="_freelan_laft"><i class="ti-location-pin mr-1"></i>Liverpool, UK</div>
                                <h4><a href="freelancer-detail.html">Shrenivashan Yadav</a></h4>
                                <span class="_freel_spec">UI/UX Specialist</span>
                            </div>
                            <div class="_freelacers_120_body">
                                <div class="_free0o9">
                                    <ul>
                                        <li><span>HTML5</span></li>
                                        <li><span>CSS3</span></li>
                                        <li><span>PHP</span></li>
                                        <li><span>Bootstrap</span></li>
                                        <li><span>JavaScript</span></li>
                                        <li><span>3 More</span></li>
                                    </ul>
                                </div>
                                <div class="_freelacers_121_foot">
                                    <a href="freelancer-detail.html" class="btn btn-theme blue light">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ============================ Candidates Section End ==================================== -->

        <!-- ============================ Featured Themes Start ==================================== -->
        <section class="gray-light">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9">
                        <div class="sec-heading">
                            <h2>What People <span class="theme-cl-2">Saying</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="owl-carousel owl-theme middle-arrow-hover" id="reviews-slide">

                            <!-- Single Review -->
                            <div class="item testimonial-center">
                                <div class="smart-tes-author">
                                    <div class="st-author-box">
                                        <div class="st-author-thumb">
                                            <img src="assets/img/team-1.jpg" class="img-fluid" alt="" />
                                        </div>
                                        <div class="st-author-info">
                                            <h4 class="st-author-title">Adam Williams</h4>
                                            <span class="st-author-subtitle theme-cl">CEO Of Microwoft</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="smart-tes-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                </div>
                            </div>

                            <!-- Single Review -->
                            <div class="item testimonial-center">
                                <div class="smart-tes-author">
                                    <div class="st-author-box">
                                        <div class="st-author-thumb">
                                            <img src="assets/img/team-2.jpg" class="img-fluid" alt="" />
                                        </div>
                                        <div class="st-author-info">
                                            <h4 class="st-author-title">Lilly Wikdoner</h4>
                                            <span class="st-author-subtitle theme-cl">Content Writer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="smart-tes-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                </div>
                            </div>

                            <!-- Single Review -->
                            <div class="item testimonial-center">
                                <div class="smart-tes-author">
                                    <div class="st-author-box">
                                        <div class="st-author-thumb">
                                            <img src="assets/img/team-3.jpg" class="img-fluid" alt="" />
                                        </div>
                                        <div class="st-author-info">
                                            <h4 class="st-author-title">Shaurya Williams</h4>
                                            <span class="st-author-subtitle theme-cl">Manager Of Doodle</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="smart-tes-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                </div>
                            </div>

                            <!-- Single Review -->
                            <div class="item testimonial-center">
                                <div class="smart-tes-author">
                                    <div class="st-author-box">
                                        <div class="st-author-thumb">
                                            <img src="assets/img/team-4.jpg" class="img-fluid" alt="" />
                                        </div>
                                        <div class="st-author-info">
                                            <h4 class="st-author-title">Shrithi Setthi</h4>
                                            <span class="st-author-subtitle theme-cl">CEO Of Applio</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="smart-tes-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ============================ Featured Themes End ==================================== -->

        <!-- ============================ News Updates Start ==================================== -->
        <section class="min-sec">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9">
                        <div class="sec-heading">
                            <h2>Latest Updates & News</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Single blog Grid -->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="blog-wrap-grid">

                            <div class="blog-thumb">
                                <a href="blog-detail.html"><img src="assets/img/b-1.jpg" class="img-fluid" alt=""></a>
                            </div>

                            <div class="blog-info">
                                <span class="post-date">By Shilpa Sheri</span>
                            </div>

                            <div class="blog-body">
                                <h4 class="bl-title"><a href="blog-detail.html">Why people choose listio for own properties</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
                            </div>

                            <div class="blog-cates">
                                <ul>
                                    <li><a href="#" class="blog-cates-list style-4">Health</a></li>
                                    <li><a href="#" class="blog-cates-list style-3">Business</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- Single blog Grid -->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="blog-wrap-grid">

                            <div class="blog-thumb">
                                <a href="blog-detail.html"><img src="assets/img/b-2.jpg" class="img-fluid" alt=""></a>
                            </div>

                            <div class="blog-info">
                                <span class="post-date">By Shaurya</span>
                            </div>

                            <div class="blog-body">
                                <h4 class="bl-title"><a href="blog-detail.html">List of benifits and impressive listeo services</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
                            </div>

                            <div class="blog-cates">
                                <ul>
                                    <li><a href="#" class="blog-cates-list style-1">Banking</a></li>
                                    <li><a href="#" class="blog-cates-list style-5">Stylish</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- Single blog Grid -->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="blog-wrap-grid">

                            <div class="blog-thumb">
                                <a href="blog-detail.html"><img src="assets/img/b-3.jpg" class="img-fluid" alt=""></a>
                            </div>

                            <div class="blog-info">
                                <span class="post-date">By Admin K.</span>
                            </div>

                            <div class="blog-body">
                                <h4 class="bl-title"><a href="blog-detail.html">What people says about listio properties</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
                            </div>

                            <div class="blog-cates">
                                <ul>
                                    <li><a href="#" class="blog-cates-list style-1">Fashion</a></li>
                                    <li><a href="#" class="blog-cates-list style-2">Wedding</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- ============================ News Updates End ==================================== -->

        <!-- ============================ Call To Action Start ================================== -->
        <section class="call-to-act" style="background:#0b85ec url(assets/img/landing-bg.png) no-repeat">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-7 col-md-8">
                        <div class="clt-caption text-center mb-4">
                            <h2 class="text-light">Subscribe Now!</h2>
                            <p class="text-light">Simple pricing plans. Unlimited web maintenance service</p>
                        </div>
                        <div class="inner-flexible-box subscribe-box">
                            <div class="input-group">
                                <input type="text" class="form-control large" placeholder="Enter your mail here">
                                <button class="btn btn-subscribe bg-dark" type="button"><i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================ Call To Action End ================================== -->

        <!-- =========================== Footer Start ========================================= -->
        <?php include "includes/footer.php" ?>
        <!-- =========================== Footer End ========================================= -->

        <!-- Log In Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="registermodal">
                    <div class="modal-header">
                        <h4>Sign In</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span></button>
                    </div>
                    <div class="modal-body">

                        <div class="login-form">
                            <form method="POST" action="controllers/login.php">

                                <div class="form-group">
                                    <label>User Email</label>
                                    <input type="email" class="form-control" placeholder="Enter your email" name="email">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="*******" name="password">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn dark-2 btn-md full-width pop-login">Login</button>
                                </div>

                            </form>
                        </div>
                        <div class="d-flex">
                            <div class="mf-link"><i class="ti-user"></i>Haven't An Account?<a href="javascript:void(0)" class="theme-cl" data-toggle="modal" data-target="#signup"> Sign Up</a></div>
                            <div class="mf-forget"><a href="#"><i class="ti-help"></i>Forget Password</a></div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="registermodal">
                    <div class="modal-header">
                        <h2>Register form!</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span></button>
                    </div>
                    <div class="modal-body">

                        <div class="container mt-3">

                            <form method="post" action="controllers/register.php" enctype="multipart/form-data">
                                <div class="mb-3 mt-3">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="phone">Phone:</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                                </div>
                                 <div class="mb-3 mt-3">
                                    <label for="phone">Profile</label>
                                    <input type="file" class="form-control" id="avatar" name="avatar">
                                </div>
                                <div class="form-check mb-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <!-- Sign Up End Modal -->





        </div>



    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->


</body>

</html>