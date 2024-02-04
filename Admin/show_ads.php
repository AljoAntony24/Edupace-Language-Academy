<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "Update ads set status=1 WHERE id='".$_GET['ads']."'";
mysqli_query($con, $sql);
header("location:ads.php");
?>