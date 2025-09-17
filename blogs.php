<?php


session_start();

if (!isset($_SESSION['user_id'])) {
	header("Location: index.php");
	exit;
}

include "includes/config.php";

$select = "SELECT * FROM blogs WHERE status=1 order by id desc  ";
$stmt = $conn->query($select);
$blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);




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
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

		<!-- ============================ Page Title Start================================== -->
		<div class="page-title ">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">

						<h2 class="ipt-title mt-5">All Blogs</h2>
						<span class="ipn-subtitle">See Our Latest Articles & News</span>

					</div>
				</div>
			</div>
		</div>
		<!-- ============================ Page Title End ================================== -->

		<!-- ============================ Main Section Start ================================== -->
		<section class="min-sec">
			<div class="container">
				<div class="row">

					<?php
					foreach ($blogs as $row) {
						$id = $row['user_id'];
						// Fetch user data
						$sql = "SELECT * FROM user WHERE id = :user_id";
						$stmt = $conn->prepare($sql);
						$stmt->bindParam(":user_id", $id);
						$stmt->execute();
						$user = $stmt->fetch();

					?>
						<!-- Single blog Grid -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="blog-wrap-grid">

								<div class="blog-thumb">
									<a href="blog-detail.php"><img src="uploads/blogs/<?php echo $row['image'] ?>" class="img-fluid" alt=""></a>
								</div>

								<div class="blog-info">
									<span class="post-date">By <?php echo $user['username'] ?></span>
								</div>

								<div class="blog-body">
									<h4 class="bl-title"><a href="blog-detail.php"><?php echo $row['title'] ?></a></h4>
									<p><?php echo $row['description'] ?></p>
								</div>

								

							</div>
						</div>
					<?php
					}
					?>



				</div>
			</div>
		</section>
		<!-- ============================ Main Section End ================================== -->

		<!-- ============================ Call To Action Start ================================== -->

		<!-- ============================ Call To Action End ================================== -->

		<?php include "includes/footer.php" ?>

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