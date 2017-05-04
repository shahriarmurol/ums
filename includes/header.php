<?php 
	require_once('admin/pages/config.php');
?>
<!DOCTYPE html> <!-- html v5 -->
<html lang="en"> <!-- default language english -->
<head>
	<meta charset="UTF-8"> <!-- UTF-8 for All Standart language -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Institute Management System</title> <!-- site title -->
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet"> 
	 <!-- All CSS  -->
	 <link rel="stylesheet" href="css/bootstrap-theme.min.css"> <!-- bootstrap theme css -->
	 <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- bootstrp css -->
	 <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- font-awesome css  -->
	 <link rel="stylesheet" href="css/jquery.newsticker.min.css">
	 <link rel="stylesheet" href="css/owl.carousel.min.css"> <!-- owl carousel -->
	 <link rel="stylesheet" href="css/owl.theme.default.min.css"> <!-- owl carousel -->
	 <link rel="stylesheet" href="css/jquery.bxslider.min.css"> <!-- bx slider -->
	 <link rel="stylesheet" href="css/style.css"> <!-- Main style -->
	 <link rel="stylesheet" href="css/nav.css"> <!-- Main style -->
	 <!-- /CSS  -->
	 <style>
	 	.announcement_inner{
		 	height: 30px;
		 	padding: 8px;
		 	width: 100%;
		    overflow: hidden;
		    border:none;
		    background: #fff;
		    border-radius: 5px;
		    -webkit-border-radius: 5px;
		    -moz-border-radius: 5px;
		    display: inline-block;
		    box-shadow: none;
		}
		.announcement_inner a p{
			color: #333;
			font-weight: 700;
	 	}
	 	.carousel {
		    margin-bottom: 0;
		    padding: 0 auto !important;
		}
	 </style>
</head>
<body>
<!-- ============= markup start here ================== -->
<!-- header section -->
<header class="header-section box">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<!-- logo -->
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="ims logo"></a>
					</div>
					<!-- /logo -->
				</div>
				<div class="col-sm-4 col-md-8">
					<div class="header-contact pull-right mr15px">
						<ul>
							<li><a href="#"><i class="fa fa-envelope-o fa-2x"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
							<li><a href="#"><i class="fa fa-rss fa-2x"></i></a></li>
						</ul>
					</div>
					<div class="header-search mr15px">
						<form action="" method="post">
							<div class="form-group">
								<input type="text" name="top_search" class="form-control search-btn-field" placeholder="Search.." />
								<i class="search-icon fa fa-search" aria-hidden="true"></i>
							</div>
						</form>
					</div>
				</div>	
			</div>
		</div>
</header>
<!-- / header section -->