<?php 
    require_once('config.php');
    $id = $_REQUEST['adid'];
    $delete = "DELETE FROM announcement WHERE id='$id'";
    $qre=mysqli_query($DBC, $delete);
    header('Location: announcement.php');
?>