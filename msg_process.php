<?php 
	if(($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))) : 

		$name = $_REQUEST['msg_name'];
		$email = $_REQUEST['msg_email'];
		$subject = $_REQUEST['msg_subject'];
		$message = $_REQUEST['msg_message'];
		
		//name
		if($name === ''){
			$err_name = '<div class="err">Sorry, Your name is a required field</div>';
		}
		//name preg_match
		if(!(preg_match('/[A-Za-z. ]{2}+[A-Aa-z ]+ [A-Za-z]+/', $name))) : 
			$err_name_pattarn = '<div class="err">Sorry, The name msut be in the format: First name, Last name';
		endif;

		//email
		if($email === '') {
		$err_email = '<div class="err">Sorry, Your email is a required field</div>';
		}elseif(!filter_var($_POST['msg_email'], FILTER_VALIDATE_EMAIL)){
			$err_email = '<div class="err">Sorry, Your email is not valid</div>';
		}else{
			$email = filter_var($_POST['msg_email'], FILTER_VALIDATE_EMAIL);
		}

		//sub
		if($subject === '') :
			$err_subject = '<div class="err">Sorry, Your subject is a required field</div>';
		endif;//input field empty
		if(!(preg_match('/[A-Aa-z]/', $subject))) : 
			$$err_subject = '<div class="err">Sorry, The name msut write in latter';
		endif;

		//message
		if($message === '') :
			$err_message = '<div class="err">Sorry, Your message is a required field</div>';
		endif;//input field empty
		if(!(preg_match('/[A-Aa-z]/', $message))) : 
			$err_message = '<div class="err">Sorry, The name msut write in latter';
		endif;

		//insert
		//insert data
		if(!empty($name AND $email AND $subject AND $message )){
			$insert = "INSERT INTO comments(com_name, com_email, com_subject, com_message) VALUES('$name','$email','$subject','$message')";
			$insert_query=mysqli_query($DBC, $insert);
			//header('Location: messages.php');
			header('Location:../../../ums/contact.php');
			$success = "your message has been sent";
		}else{
		 	$msgerr	=  "Message does't send";
		 	header('Location:../../../ums/contact.php');
		}
	endif;
	//validation function
	// function validation($data){
	// 	$data = trim($data);
	// 	$data = stripcslashes($data);
	// 	$data = htmlspecialchars($data);
	// }
?>