<?php
	require_once('config.php');
	if(isset($_POST)){
		$msg_name = $_POST['msg_name'];
		$msg_email = $_POST['msg_email'];
		$msg_subject = $_POST['msg_subject'];
		$msg_message = $_POST['msg_message'];

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