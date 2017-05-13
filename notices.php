<?php
	require_once('includes/header.php');
	include_once('includes/nav.php');
	include_once('includes/announcement.php');
?>
<section class="all-notice section-padding box">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center" style="margin-bottom: 30px;">All Notices</h1>

				  <table class="table table-bordered">
					<tr>
						<th>SR No.</th>
						<th>Date</th>
						<th>Title</th>
					</tr>
					<!-- repeat -->
					<?php 
						$sr=1;
						$slt = "SELECT * FROM notices";
							$qre = mysqli_query($DBC,$slt);
							while($data=mysqli_fetch_array($qre)){  ?>
									<tr>	
										<td><?=  $sr++;?></td>
										<td><?php date_default_timezone_set('Asia/Dhaka'); echo date('d-M-Y h:i:s A');?></td>
										<td><a href="notices/<?= $data['notice_file']; ?>"> <?= $data['notice']; ?> </a></td>
									</tr>
							<?php	}
					?>
				</table>
			</div>
		</div>
	</div>
</section>
<?php
	require_once('includes/footer.php');
?>