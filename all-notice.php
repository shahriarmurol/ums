<?php
	require_once('includes/header.php');
	$id = $_REQUEST['id'];
	include_once('includes/nav.php');
	include_once('includes/announcement.php');
?>
<section class="all-notice section-padding box">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">All Notices</h1>
				<?php 
					$slt = "SELECT * FROM notices WHERE id='$id' ";
						$qre = mysqli_query($DBC,$slt);
						while($data=mysqli_fetch_array($qre)){ ?>
								<?= $data['notice']; ?>
						<?php	}
				?>
			</div>
		</div>
	</div>
</section>
<?php
	require_once('includes/footer.php');
?>