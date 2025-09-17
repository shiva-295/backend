<?php


session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

include "includes/config.php";

$id = $_SESSION['user_id'];

// Fetch user data
$sql = "SELECT * FROM user WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();
$user = $stmt->fetch();


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Blog</title>

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
        <!-- Top header  -->
        <!-- ============================================================== -->

        <!-- ============================ Page Title Start================================== -->
        <div class="page-title bg-cover" style="background:url(assets/img/bn-1.jpg)no-repeat;" data-overlay="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12"></div>
                </div>
            </div>
        </div>
        <!-- ============================ Page Title End ================================== -->

        <!-- ============================ Main Section Start ================================== -->
        <section class="gray-bg pt-4">
            <div class="container-fluid">
                <div class="row m-0">

                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12">
                        <div class="dashboard-navbar overlio-top">

                            <div class="d-user-avater">
                                <img src="uploads/<?php echo $user['avatar'] ?>" class="img-fluid rounded" alt="">
                                <h4><?php echo $user['username'] ?></h4>
                                <span><?php echo $user['email'] ?></span>
                            </div>

                            <div class="d-navigation">
                                <ul id="metismenu">
                                    <li class="active"><a href="dashboard.html"><i class="ti-dashboard"></i>Dashboard</a></li>
                                    <li><a href="my-blogs.php"><i class="ti-user"></i>My Blogs</a></li>
                                    <li><a href="add-blog.php"><i class="ti-bookmark-alt"></i>Add Blog</a></li>
                                    <li><a href="controllers/logout.php"><i class="ti-power-off"></i>Log Out</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- Item Wrap Start -->
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <!-- Breadcrumbs -->
                                <div class="bredcrumb_wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Post Job</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">

                                <!-- Single Wrap -->
                                <div class="_dashboard_content">
                                    <div class="_dashboard_content_header">
                                        <div class="_dashboard__header_flex">
                                            <h4><i class="ti-briefcase mr-1"></i>Add Blog</h4>
                                        </div>
                                    </div>

                                    <div class="_dashboard_content_body">
                                        <form action="controllers/add-blog.php" method="POST" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group with-light">
                                                        <label>Title</label>
                                                        <div class="tg_grouping">
                                                            <input type="hidden" name="user_id" value="<?php echo $id?>">
                                                            <input type="text" class="form-control with-light" name="title" placeholder="Enter title">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea class="form-control with-light" name="description"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image" required>
                                                        <label class="custom-file-label" for="upfile">Import Blog Image</label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-save m-3">Submit Job</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Single Wrap End -->


                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- ============================ Main Section End ================================== -->

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
        <footer class="dark-footer skin-dark-footer">
            <div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <img src="assets/img/logo-light.png" class="img-fluid f-logo" width="120" alt="">
                                <p>407-472 Rue Saint-Sulpice, Montreal<br>Quebec, H2Y 2V8</p>
                                <ul class="footer-bottom-social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="footer-widget">
                                <h4 class="widget-title">Useful links</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">FAQs Page</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="#">Login</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <div class="footer-widget">
                                <h4 class="widget-title">Developers</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Booking</a></li>
                                    <li><a href="#">Stays</a></li>
                                    <li><a href="#">Adventures</a></li>
                                    <li><a href="#">Author Detail</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <div class="footer-widget">
                                <h4 class="widget-title">Useful links</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Press</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <div class="footer-widget">
                                <h4 class="widget-title">Useful links</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Privacy &amp; Terms</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0">© 2021 Workoo. Designd By <a href="https://themezhub.com">Themez Hub</a> All Rights Reserved</p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
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
                            <form>

                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="*******">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn dark-2 btn-md full-width pop-login">Login</button>
                                </div>

                            </form>
                        </div>

                        <div class="form-group text-center">
                            <span>Or Signin with</span>
                        </div>

                        <div class="social_logs mb-4">
                            <ul class="shares_jobs text-center">
                                <li><a href="#" class="share fb"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="share gp"><i class="fa fa-google"></i></a></li>
                                <li><a href="#" class="share ln"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="mf-link"><i class="ti-user"></i>Haven't An Account?<a href="javascript:void(0)" class="theme-cl"> Sign Up</a></div>
                        <div class="mf-forget"><a href="#"><i class="ti-help"></i>Forget Password</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <!-- Upload Resume -->
        <div class="modal fade" id="upload-resume" tabindex="-1" role="dialog" aria-labelledby="resumeupload" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="resumeupload">
                    <div class="modal-header">
                        <h4>Upload Resume</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ti-close"></i></span></button>
                    </div>
                    <div class="modal-body">

                        <div class="login-form">
                            <form>

                                <div class="form-row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>E-Mail ID</label>
                                            <input type="email" class="form-control" placeholder="ucicl@gmail.com">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Paste Your Resume</label>
                                    <textarea class="form-control ht-150" placeholder="Copy & Paste Resume"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="light">doc, docx,pdf,txt,png</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="uploadResume">
                                        <label class="custom-file-label" for="uploadResume"><i class="ti-link mr-1"></i>Upload Resume</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn dark-2 btn-md full-width pop-login">Upload Resume</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Upload Resume -->

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

    <script>
        var vChipsList = [{
            tag: 'Photoshop',
        }, {
            tag: 'WordPress',
        }, {
            tag: 'Jquery',
        }];

        // INITIALIZATION OF AUTOCOMPLETE LIST
        var vTagList = {
            design: null,
            html: null,
            css: null,
            magento: null,
            drupal: null,
            business: null,
            java: null,
            joomla: null,
            css3: null,
            bootstrap: null
        };

        function fDisplayChips() {
            // FILLS THE CHIPS ZONE FROM THE LIST
            $('#lg-Chips').material_chip({
                data: vChipsList
            });
        }


        // ADDING A NEW CHIP
        function fChipAdd(lChipName) {
            lChipName = lChipName.toLowerCase();
            // test1 : minimum word size
            if (!(lChipName.length > 2)) {
                return 0;
            }
            // test2 :  no duplicates
            for (i = 0; i < vChipsList.length; i++) {
                if (lChipName == vChipsList[i].tag) {
                    return 0;
                }
            }
            // tests Okay => add the chip and refresh the view
            vChipsList.push({
                "tag": lChipName
            });
            fDisplayChips();
            return 1;
        };

        $(function() {
            // delete chip command
            $('#lg-Chips').on('chip.delete', function(e, chip) {
                vChipsList = $("#lg-Chips").material_chip('data');
            });


            $("#lg-Chips").focusin(function() {
                $("#lg-input").focus();
            });


            fDisplayChips();


            // NEW CHIP COMMAND
            $("#cmd-ChipsAjout").click(function() {
                fChipAdd($("#lg-input").val());
                $("#lg-input").val("");
            });

            $("#lg-input").autocomplete({
                data: vTagList
            });

        });
    </script>

</body>

</html>