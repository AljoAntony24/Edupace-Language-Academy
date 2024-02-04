<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "Update banner set status=0 WHERE id='".$_GET['banner_del']."'";
mysqli_query($con, $sql);
header("location:banner.php");
?>