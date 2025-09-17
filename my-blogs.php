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

$select = "SELECT * FROM blogs WHERE user_id=:user_id and status=1 order by id desc ";
$stmt = $conn->prepare($select);
$stmt->bindParam(":user_id", $id);
$stmt->execute();
$blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Blog</title>

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
                                            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
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
                                            <h4><i class="ti-briefcase mr-1"></i>Manage Blogs</h4>
                                        </div>
                                    </div>

                                    <div class="_dashboard_content_body p-0">
                                        <div class="_dashboard_list_group">

                                            <?php
                                            foreach ($blogs as $row) {
                                            ?>

                                                <!-- Single List jobs -->
                                                <div class="_dash_singl_box">
                                                    <div class="_dash_singl_thumbs">
                                                        <img src="uploads/blogs/<?php echo $row['image']?>" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="_dash_singl_captions">
                                                        <h4 class="_jb_title"><?php echo $row['title']?></h4>
                                                        <ul class="_grouping_list">
                                                            <li><span><?php echo $row['description']?></span></li>
                                                            
                                                        </ul>
                                                        <ul class="_action_grouping_list">
                                                            <li><a href="edit-blog.php?id=<?php echo $row['id']?>" data-toggle="tooltip" data-placement="top" title="Edit job" class="_edit_list_point"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="controllers/delete-blog.php?id=<?php echo $row['id']?>" data-toggle="tooltip" data-placement="top" title="Delete Job" class="_delete_point"><i class="fa fa-trash"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            <?php
                                            }
                                            ?>
                                        </div>
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


</body>

</html>