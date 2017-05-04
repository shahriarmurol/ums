<?php
	//menu active
	$link = explode('/', $_SERVER['PHP_SELF']);
	$page = $link['2'];//page address
?>
<!-- nav section -->
<section class="nav-section box">
	<div class="container">
		<div class="row">
			<div class="col-md-12">	
			<!-- nav -->
				<!-- / mobile icon -->
				<div id="navicondiv" class="nav-icon-div">
			          		<span id="navicon" class="glyphicon glyphicon-menu-hamburger"></span>
			        </button>	
				</div>
				<!-- / mobile icon -->
				<nav>
					<ul class="menu">
						<li <?php if($page == 'index.php') { echo 'class="active"';}?> > <a href="index.php">Home</a></li>
						<li <?php if($page == 'about.php') {echo 'class="active"';} ?> ><a href="about.php">About 
							<!-- nav indicator -->
							<span class="nav-indicator">
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</span>
							<!-- nav indicator -->
							</a> 
							<!-- submenu level one -->
							<ul class="sub-menu">
								<li><a href="#history">History</a></li>
								<li><a href="#">Menu Item 2</a></li>
								<li><a href="#">Menu Item 2</a></li>
							</ul>
						</li>
						<li <?php if($page == 'administration.php') {echo 'class="active"';} ?> ><a href="administration.php">Administration
							<!-- nav indicator -->
							<span class="nav-indicator">
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</span>
							<!-- nav indicator -->
							</a> 
							<!-- submenu level one -->
							<ul class="sub-menu">
								<li><a href="#">Menu Item 1</a></li>
								<li><a href="#">Menu Item 2</a></li>
								<li>
									<a href="#">Menu Item 2
										<!-- nav indicator -->
										<span class="nav-indicator">
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</span>
										<!-- nav indicator -->
									</a>
									<!-- sub-menu two-->
									<ul class="sub-menu">
										<li><a href="#">Menu Item 3</a></li>
										<li><a href="#">Menu Item 3</a></li>
										<li>
											<a href="#">Menu Item 3
												<!-- nav indicator -->
												<span class="nav-indicator">
												<i class="fa fa-angle-right" aria-hidden="true"></i>
												</span>
												<!-- nav indicator -->
											</a>
										 <!-- submenu level three -->
										 <ul class="sub-menu">
											<li><a href="#">Menu Item 4</a></li>
											<li><a href="#">Menu Item 4</a></li>
											<li><a href="#">Menu Item 4</a></li>
										</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li <?php if($page == 'academics.php') {echo 'class="active"';} ?> >
							<a href="academics.php">Academics
								<!-- nav indicator -->
								<span class="nav-indicator">
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
								<!-- nav indicator -->
							</a>
							<ul class="sub-menu">
								<li><a href="#">Service Menu Item 1</a></li>
								<li><a href="#">Service Menu Item 2</a></li>
								<li><a href="#">Service Menu Item 3</a></li>
							</ul>
						</li>
						<li <?php if($page == 'admission.php') {echo 'class="active"';} ?>>
							<a href="admission.php">Admission
								<!-- nav indicator -->
								<span class="nav-indicator">
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
								<!-- nav indicator -->
							</a>
							<ul class="sub-menu">
								<li><a href="#">Service Menu Item 1</a></li>
								<li><a href="#">Service Menu Item 2</a></li>
								<li><a href="#">Service Menu Item 3</a></li>
							</ul>
						</li>
						<li <?php if($page == 'faculty.php') {echo 'class="active"';} ?>>
							<a href="faculty.php">Faculty
								<!-- nav indicator -->
								<span class="nav-indicator">
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
								<!-- nav indicator -->
							</a>
							<ul class="sub-menu">
								<li><a href="#">Service Menu Item 1</a></li>
								<li><a href="#">Service Menu Item 2</a></li>
								<li><a href="#">Service Menu Item 3</a></li>
							</ul>
						</li>
						<li <?php if($page == 'career.php') {echo 'class="active"';} ?>>
							<a href="career.php">Career
								<!-- nav indicator -->
								<span class="nav-indicator">
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
								<!-- nav indicator -->
							</a>
							<ul class="sub-menu">
								<li><a href="#">Service Menu Item 1</a></li>
								<li><a href="#">Service Menu Item 2</a></li>
								<li><a href="#">Service Menu Item 3</a></li>
							</ul>
						</li>
						<li <?php if($page == 'gallery.php') {echo 'class="active"';} ?>>
							<a href="gallery.php">Gallery
								<!-- nav indicator -->
								<span class="nav-indicator">
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
								<!-- nav indicator -->
							</a>
							<ul class="sub-menu">
								<li><a href="#">Service Menu Item 1</a></li>
								<li><a href="#">Service Menu Item 2</a></li>
								<li><a href="#">Service Menu Item 3</a></li>
							</ul>
						</li>
						<li <?php if($page == 'contact.php') {echo 'class="active"';} ?>><a href="contact.php">Contact</a></li>
					</ul>
				</nav> <!-- nav end  -->
			</div>
		</div>
	</div>
</section>
<!-- /nav section -->