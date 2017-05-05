<?php
	require_once('includes/header.php');
	include_once('includes/nav.php');
	include_once('includes/announcement.php');
?>
<section class="all-notice section-padding box">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">All Notices</h1>
				<?php 
					$id = $_REQUEST['id'];
					$slt = "SELECT * FROM notices WHERE id='$id' ";
						$qre = mysqli_query($DBC,$slt);
						while($data=mysqli_fetch_array($qre)){ 
							?>
								<p>Notice : <?= $data['notice']; ?></p>
							 <embed width="100%" height="600" src="notices/<?= $data['notice_file']; ?>"> 
								<br/>
								<a href="notices/<?= $data['notice_file']; ?>">Download</a>
						<?php	}
				?>
			</div>
		</div>
	</div>
</section>
<?php
	require_once('includes/footer.php');
?>