<?php 
    require_once('config.php');
    $id = $_REQUEST['ndid'];
    $delete = "DELETE FROM notices WHERE id='$id'";
    $qre=mysqli_query($DBC, $delete);
    header('Location: notices.php');
?>