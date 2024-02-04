<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "Update news set status=0 WHERE id='".$_GET['news']."'";
mysqli_query($con, $sql);
header("location:news.php");
?>