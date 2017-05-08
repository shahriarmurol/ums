<?php
	require_once('config.php');
	
	if(isset($_POST)){
		//catch data
		$msg_name = trim($_POST['msg_name']);
		$msg_email = trim($_POST['msg_email']));
		$msg_subject = trim($_POST['msg_subject']);
		$msg_message = trim($_POST['msg_message']);
		
		//insert data
		if(!empty($msg_name AND $msg_email AND $msg_subject AND $msg_message  )){

			$insert = "INSERT INTO comments(com_name, com_email, com_subject, com_message) VALUES('$msg_name', '$msg_email', '$msg_subject', '$msg_message')";
			$insert_query=mysqli_query($DBC, $insert);
			//header('Location: messages.php');
			header('Location: ../../../ims/contact.php');
		}else{
			echo "Message does't send";
		}

	}
?>