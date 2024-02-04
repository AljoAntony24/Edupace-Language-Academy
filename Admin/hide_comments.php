<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "Update comments set status=0 WHERE id='".$_GET['banner_del']."'";
mysqli_query($con, $sql);
header("location:comments.php");
?>