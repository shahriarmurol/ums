<!-- informations -->
<section class="informations notice-manage-stdinfo section-padding box">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="campus-info">
					<img src="images/campus.jpg" alt="" width="280">
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi corporis quisquam, mollitia ab aliquid, laborum odit tempore, eum ullam id maxime similique! Consectetur illo nostrum velit nihil. Modi atque, iusto, quam vero, a recusandae reprehenderit adipisci eius iste odio fugiat aperiam tempora consequatur, at quibusdam cum quaerat. Facilis, nemo!</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="programmes-info">
					<h2> <i class="fa fa-graduation-cap"></i> Academics</h2>
					<p>UNDERGRADUATE PROGRAMS</p>
					<ul>
					<?php 
						$select = "SELECT * FROM undergradute_sub_names";
						$qre = mysqli_query($DBC,$select);
						while($info=mysqli_fetch_array($qre)){   ?>
						<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?= $info['sub_name']; ?></a></li>
						<?php	}
					?>
					</ul>
					<!-- <button class="btn btn-success btn-sm pull-right">More</button><br/> -->

					<p>GRADUATE PROGRAMS</p>
					<ul>
						<?php 
						$select = "SELECT * FROM gradute_sub_names";
						$qre = mysqli_query($DBC,$select);
						while($info=mysqli_fetch_array($qre)){   ?>
						<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?= $info['sub_name']; ?></a></li>
						<?php	}
					?>
					</ul>
					<!-- <button class="btn btn-success btn-sm pull-right">More</button><br/> -->
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="news-event">
					<div class="notice-title">
						<h2 class="text-center"><i class="fa fa-newspaper-o"></i>
						Notice Board</h2>
					</div>
					<div class="marquee notice-marquee" data-direction='up' data-duration='10000' data-pauseOnHover="true">
					<?php 
						$slt = "SELECT * FROM notices";
						$qre = mysqli_query($DBC,$slt);
						while($data=mysqli_fetch_array($qre)){ ?>
							<a href="single-notice.php?id=<?= $data['id']; ?>">
								<p><?= $data['notice']; ?></p>
								<p><?php date_default_timezone_set('Asia/Dhaka'); echo date('d-M-Y H:i:s A'); ?></p>
							</a>
						<?php	}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>	
<!-- </section> -->
<!-- /informations -->

<!-- notice and mangenent and student info section -->
<!-- 	<section class="notice-manage-stdinfo section-padding box"> -->
		<p class="empty" style="margin-bottom: 30px;"></p>
		<div class="container">
			<div class="row">
				<!-- management  -->
				<div class="col-md-4">
					<div class="management">
						  <h3>Management</h3>
						  <ul class="nav nav-pills nav-stacked">
						    	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Messages<span class="caret"></span></a>
						      		<ul class="dropdown-menu">
						       			 <li><a href="#">Submenu 1-1</a></li>
						       			 <li><a href="#">Submenu 1-2</a></li>
						        		 <li><a href="#">Submenu 1-3</a></li>     
						        	</ul>
						    	</li>
						    	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Professor<span class="caret"></span></a>
						      		<ul class="dropdown-menu">
						       			 <li><a href="#">Submenu 1-1</a></li>
						       			 <li><a href="#">Submenu 1-2</a></li>
						        		 <li><a href="#">Submenu 1-3</a></li>                        
						      		</ul>
						    	</li>
						    	<li><a href="#">Deans &amp; Heads</a></li>
						    	<li><a href="#">Administration</a></li>
						    	<li><a href="#">Committees</a></li>
						  </ul>
					</div>
				</div>
				<!-- /management  -->

				<div class="col-md-4">
					<div class="title">
						<h2>Informations</h2>
						<ul>
							<li><a href="notices.php">All Notices</a></li>
							<li><a href="#">Faculty Members</a></li>
							<li><a href="#">Visiting Professors</a></li>
							<li><a href="#">Coordination</a></li>
							<li><a href="#">Notice Board</a></li>
							<li><a href="#">Student Portal</a></li>
							<li><a href="#">Student Portal</a></li>
							<li><a href="#">Student Portal</a></li>
							<li><a href="#">Student Portal</a></li>
						</ul>
					</div>
				</div>

				<!-- notice board -->
				<div class="col-md-4">
					<h2 class="text-center">Online Admission</h2>
					<!-- 	student apply -->
					<div class="student-apply">
						<a class="btn btn-block btn-success" style="padding: 8px;" href="online-admission.php">Apply Now</a>
					</div>
				</div>

				<!-- /notice board -->
			</div>
		</div>
	</section>
<!-- /notice and mangenent and student info section -->