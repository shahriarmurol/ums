<?php 
    require_once('config.php');
    $id = $_REQUEST['did'];
    $delete = "DELETE FROM comments WHERE com_id='$id'";
    $qre=mysqli_query($DBC, $delete);
    header('Location:messages.php');
?>