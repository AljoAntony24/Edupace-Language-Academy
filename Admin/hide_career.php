<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "Update career_abroad set status=0 WHERE id='".$_GET['career']."'";
mysqli_query($con, $sql);
header("location:career_abroad.php");
?>