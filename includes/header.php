<!-- Start Navigation -->
<div class="header header-transparent dark-text">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<nav id="navigation" class="navigation navigation-landscape">
					<div class="nav-header">
						<a class="nav-brand" href="#">
							<img src="assets/img/logo.png" class="logo" alt="" />
						</a>
						<div class="nav-toggle"></div>
					</div>
					<div class="nav-menus-wrapper">
						<ul class="nav-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="blogs.php">Blogs</a></li>	
							<li><a href="contact.php">Contact Us</a></li>

						</ul>

						<ul class="nav-menu nav-menu-social align-to-right">

							<?php
							if (isset($_SESSION['user_id'])) {
							?>
								<li class="add-listing dark-bg">
									<a href="dashboard.php">
										<i class="ti-user mr-1"></i>
									</a>
								</li>
							<?php

							} else {
							?>
								<li class="add-listing dark-bg">
									<a href="#" data-toggle="modal" data-target="#login">
										<i class="ti-user mr-1"></i> Sign in
									</a>
								</li>
							<?php
							}

							?>

						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>