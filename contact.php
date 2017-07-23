<?php 
	require_once('includes/header.php');
	include_once('includes/nav.php'); 
	?>
<?php 
	$nameError = $emailError  = $websiteError = $commentError = $result = "" ;
	$name = $email = $website = $subject = $comment = "";

	if(isset($_POST["submit"])){
	
		//for name field
		if(empty($_POST["name"])){
			$nameError = "Name is required";
		}else{
			$name = testUserInput($_POST["name"]);
			if(!preg_match("/^[A-Za-z. ]*$/", $name)){
				$nameError = "Only Letters and white space are allowed";
			}
		}

		// for email field
		if(empty($_POST["email"])){
			$emailError = "Email is required";
		}else{
			$email = testUserInput($_POST["email"]);
			if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$email)){
				$emailError = "Invalid Email Format";
			}
		}

		//for subject field
		if(empty($_POST["subject"])){
			$subjectError = "Subject is required";
		}else{
			$subject = testUserInput($_POST["subject"]);
			if(!preg_match("/^[A-Za-z. ]*$/", $subject)){
				$subjectError = "Only Letters and white space are allowed";
			}
		}

		// for website field
		if(empty($_POST["website"])){
			$websiteError = "Website is required";
		}else{
			$website = testUserInput($_POST["website"]);
			if(!preg_match("/(http:|https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$website)){
				$websiteError = "Invalid URL Format";
			}
		}

		// for comment
		if(empty($_POST["comment"])){
			$commentError = "Comment is required";
		}else{
			$comment = testUserInput($_POST["comment"]);
		}
		// ==================== print data =================
		//if not empty
		if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['website']) && !empty($_POST['subject']) && !empty($_POST['comment'])){
			//if is valid
			if( (preg_match("/^[A-Za-z. ]*$/",$name)== true) && preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$email) && preg_match("/(http:|https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$website) ){

				//php mail
					$emaiLTo="shahriarmurolcse@gmail.com";
					$subject = $_POST['subject'];
					$body = "A person Name: ".$_POST["name"]." With the Eemail : ".$_POST["email"]." have website: ".$_POST["website"]." Subject : ".$_POST['subject']." Added Comment: ".$_POST["comment"];
					$sender ="From:{$_POST['email']}";

						if(mail($emaiLTo,$subject,$body,$sender)){
							$result =  "Mail sent successfully!";
							//echo "Mail sent successfully!";
						}else{
							$result =  "Mail not sent!";
							//echo  "Mail not sent!";
						}
				//end of php mail

			}else{
				echo '<span class="error">Please complete and correct your form again</span>';
			}
		} 
		// =============== end of printing ======================

	} //end of submit

	//data filtering function
	function testUserInput($data){
		$data = trim($data);
		$data = htmlentities($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<style>
	.err{
		color: red;
		margin-top: 8px;
		margin-left: 15px;
		font-weight: 700;
	}
	body > div{
    border:1px solid grey;
}
html, body, #msgbox {
    height:100%;
    width:100%;
    margin:0;
    padding:0;
}
#msgbox {
    overflow:hidden;
    position:relative;
}
#hideMe {
    -webkit-animation: cssAnimation 5s forwards; 
    animation: cssAnimation 5s forwards;
}
@keyframes cssAnimation {
    0%   {opacity: 1;}
    90%  {opacity: 1;}
    100% {opacity: 0;}
}
@-webkit-keyframes cssAnimation {
    0%   {opacity: 1;}
    90%  {opacity: 1;}
    100% {opacity: 0;}
}

</style>
<!-- contact -->
<div class="contact-section section-padding box">
	<div class="container">
		<div class="row">
		<div id="msgbox">
			<span onload="myFunction()" id="hideMe" style="color:red;font-weight:bold;padding-left:30px;font-size:36px;"> <?php echo $result; ?> </span>
		</div>

			<h1 class="text-center">Contact us</h1>
			<div class="col-md-6">
				<div class="address">
					<h2>University Name</h2>
					<ul>
						<li><i class="fa fa-map-marker"></i> Campus-2 Dhaka Commerce College Road Mirpur-2, Dhaka-1216 </li>
						<li><i class="fa fa-map-marker"></i>  Permanent Campus Plot # 77-78 Road # 9 Rupnagar Mirpur-2, Dhaka-1216 Telephone: 9024266, 9024277, 9015397, 9020132-4 </li>
						<li><i class="fa fa-mobile"></i> Cell: 01741129235, 01554882075, 01680050630, 01967169189, 01845734337</li>
						<li><i class="fa fa-fax"></i> Fax: 9024399</li>
						<li><i class="fa fa-envelope-o"></i> E-mail: info@bubt.edu.bd , bubtinfo@gmail.com, admission@bubt.edu.bd</li>
					</ul>
				</div>
				<div class="send-message">
					<h2 class="text-center">Leave a Message</h2>
					<!-- form -->
					<form action="contact.php" method="POST">
						<div class="form-group">
							<label for="name">Name  <?php echo $nameError; ?></label> 
							<input type="text" name="name" id="name" placeholder="Name" class="form-control" required="1" />
						</div>
						<div class="form-group">
							<label for="email">Email <?php echo $emailError; ?></label>
							<input type="email" name="email" id="email" placeholder="Email Address" class="form-control" required="1" />
						</div>
						<div class="form-group">
							<label for="website">Website</label>
							<input type="url" name="website" id="website" placeholder="Website url" class="form-control" required="1" />
						</div>
						<div class="form-group">
							<label for="subject">Subject</label>
							<input type="text" name="subject" id="subject" placeholder="Subject " class="form-control" required="1" />
						</div>
						<div class="form-group">
							<label for="comment">Message <?php echo $commentError; ?></label>
							<textarea name="comment" id="comment" rows="5"  class="form-control" placeholder="Type your Messages here.." required=""></textarea>
						</div>
						<div class="text-center">
							<input type="submit" name="submit" value="Send" class="btn btn-lg btn-success">
						</div>
					</form>
				</div>

			</div>
			<div class="col-md-6">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.370334389508!2d90.39056151440508!3d23.734169784597366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8c1f25e613d%3A0xaad562eec578f8ff!2sArts+Faculty%2C+Dhaka!5e0!3m2!1sbn!2sbd!4v1492790672468" width="550" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- / contact -->


<?php
	require_once('includes/footer.php');
?>
