<!-- latest news -->
<section class="announcement box">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="latest-news-left">
					<span>Announcement: </span>
				</div>
				<div class="latest-news-right">
					<div class="marquee announcement_inner" data-direction='up' data-duration='2000' data-pauseOnHover="true">
					<?php 
						$slt = "SELECT * FROM announcement ORDER BY id DESC";
						$qre = mysqli_query($DBC,$slt);
						while($data=mysqli_fetch_array($qre)){ ?>
							<a href="#">
								<p><?= $data['announcements']; ?></p>
							</a>
						<?php	}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /latest news -->