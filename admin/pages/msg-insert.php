<?php
	require_once('config.php');
		if(isset($_POST)){
			$msg_name = $_REQUEST['msg_name'];
			$msg_email = $_REQUEST['msg_email'];
			$msg_subject = $_REQUEST['msg_subject'];
			$msg_message = $_REQUEST['msg_message']; 
			
		//insert data
		if(!empty($msg_name AND $msg_email AND $msg_subject AND $msg_message  )){
			//$insert = "INSERT INTO comments(com_name, com_email, com_subject, com_message) VALUES('$msg_name', '$msg_email', '$msg_subject', '$msg_message')";
			//$insert_query=mysqli_query($DBC, $insert);
			//header('Location: messages.php');
			//email
			//php mail
					$emaiLTo="shahriarmurolcse@gmail.com";
					$subject = $_POST['msg_subject'];
					$body = "A person Name: ".$_POST["msg_name"]." With the Eemail : ".$_POST["msg_email"]." have website: ".$_POST["website"]." Added Comment: ".$_POST["comment"];
					$sender ="From:{$_POST['email']}";
						if(mail($emaiLTo,$subject,$body,$sender)){
							echo "Mail sent successfully!";
						}else{
							echo "Mail not sent!";
						}
				//end of php mail
			header('Location: ../../../ims/contact.php');
		}else{
			echo "Message does't send";
		}
}

