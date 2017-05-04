<?php
	require_once('config.php');
	if(isset($_POST)){
		$announcement = $_POST['announcement'];


		if(!empty($announcement)){
			$insert = "INSERT INTO announcement(announcements) VALUES('$announcement')";
			$insert_query=mysqli_query($DBC, $insert);
			//header('Location: messages.php');
			header('Location: announcement.php');
		}else{
			echo "Announcement does't send";
		}

	}
?>