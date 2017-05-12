<?php
	require_once('config.php');
		if(isset($_POST)){
			$msg_name = $_REQUEST['msg_name'];
			$msg_email = $_REQUEST['msg_email'];
			$msg_subject = $_REQUEST['msg_subject'];
			$msg_message = $_REQUEST['msg_message'];
			
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

