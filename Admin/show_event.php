<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "Update event set status=1 WHERE id='".$_GET['event']."'";
mysqli_query($con, $sql);
header("location:event.php");
?>