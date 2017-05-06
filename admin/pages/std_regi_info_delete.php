<?php 
    require_once('config.php');
    $id = $_REQUEST['stddid'];
    $delete = "DELETE FROM std_regi_info WHERE std_id='$id'";
    $qre=mysqli_query($DBC, $delete);
    header('Location: std_regi_info.php');
?>