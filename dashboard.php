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
								<img src="uploads/<?php echo $user ['avatar'] ?>" class="img-fluid rounded" alt="">
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
											<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
								<div class="dashboard-stat">
									<div class="dashboard-stat-icon widget-1"><i class="ti-location-pin"></i></div>
									<div class="dashboard-stat-content">
										<h4><span class="cto">72</span></h4>
										<p>Job Posted</p>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
								<div class="dashboard-stat">
									<div class="dashboard-stat-icon widget-2"><i class="ti-pie-chart"></i></div>
									<div class="dashboard-stat-content">
										<h4><span class="cto">12</span>M</h4>
										<p>Total Viewed</p>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
								<div class="dashboard-stat">
									<div class="dashboard-stat-icon widget-3"><i class="ti-user"></i></div>
									<div class="dashboard-stat-content">
										<h4><span class="cto">72</span>K</h4>
										<p>User Applied</p>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
								<div class="dashboard-stat">
									<div class="dashboard-stat-icon widget-4"><i class="ti-bookmark"></i></div>
									<div class="dashboard-stat-content">
										<h4><span class="cto">80</span></h4>
										<p>Job Bookmarked</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="dashboard-gravity-list with-icons">
									<h4>Recent Activities</h4>
									<ul>
										<li>
											<i class="dash-icon-box ti-layers text-purple bg-light-purple"></i> Your job for <strong><a href="#">IOS Developer</a></strong> has been approved!
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>

										<li>
											<i class="dash-icon-box ti-star text-success bg-light-success"></i> Jodie Farrell left a review <div class="numerical-rating high" data-rating="5.0"></div> for<strong><a href="#"> Real Estate Logo</a></strong>
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>

										<li>
											<i class="dash-icon-box ti-heart text-warning bg-light-warning"></i> Someone bookmarked your <strong><a href="#">SEO Expert Job</a></strong> listing!
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>

										<li>
											<i class="dash-icon-box ti-star text-info bg-light-info"></i> Gracie Mahmood left a review <div class="numerical-rating mid" data-rating="3.8"></div> on <strong><a href="#">Product Design</a></strong>
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>

										<li>
											<i class="dash-icon-box ti-heart text-danger bg-light-danger"></i> Your Magento Developer job expire<strong><a href="#">Renew</a></strong> now it!
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>

										<li>
											<i class="dash-icon-box ti-star text-success bg-light-success"></i> Ethan Barrett left a review <div class="numerical-rating high" data-rating="4.7"></div> on <strong><a href="#">New Logo</a></strong>
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>

										<li>
											<i class="dash-icon-box ti-star text-purple bg-light-purple"></i> Your Magento Developer job expire <strong><a href="#">Renew</a></strong> now it.
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-6 col-md-12">
								<div class="dashboard-gravity-list invoices with-icons">
									<h4>Invoices</h4>
									<ul>

										<li><i class="dash-icon-box ti-files text-warning bg-light-warning"></i>
											<strong>Starter Plan</strong>
											<ul>
												<li class="unpaid">Unpaid</li>
												<li>Order: #20551</li>
												<li>Date: 01/08/2019</li>
											</ul>
											<div class="buttons-to-right">
												<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
											</div>
										</li>

										<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
											<strong>Basic Plan</strong>
											<ul>
												<li class="paid">Paid</li>
												<li>Order: #20550</li>
												<li>Date: 01/07/2019</li>
											</ul>
											<div class="buttons-to-right">
												<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
											</div>
										</li>

										<li><i class="dash-icon-box ti-files text-danger bg-light-danger"></i>
											<strong>Extended Plan</strong>
											<ul>
												<li class="paid">Paid</li>
												<li>Order: #20549</li>
												<li>Date: 01/06/2019</li>
											</ul>
											<div class="buttons-to-right">
												<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
											</div>
										</li>

										<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
											<strong>Platinum Plan</strong>
											<ul>
												<li class="paid">Paid</li>
												<li>Order: #20548</li>
												<li>Date: 01/05/2019</li>
											</ul>
											<div class="buttons-to-right">
												<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
											</div>
										</li>

										<li><i class="dash-icon-box ti-files text-warning bg-light-warning"></i>
											<strong>Extended Plan</strong>
											<ul>
												<li class="paid">Paid</li>
												<li>Order: #20547</li>
												<li>Date: 01/04/2019</li>
											</ul>
											<div class="buttons-to-right">
												<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
											</div>
										</li>

										<li><i class="dash-icon-box ti-files text-info bg-light-info"></i>
											<strong>Platinum Plan</strong>
											<ul>
												<li class="paid">Paid</li>
												<li>Order: #20546</li>
												<li>Date: 01/03/2019</li>
											</ul>
											<div class="buttons-to-right">
												<a href="dashboard-invoice.html" class="button gray">View Invoice</a>
											</div>
										</li>

									</ul>
								</div>
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
		<?php include "includes/footer.php" ?>
		<!-- =========================== Footer End ========================================= -->





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