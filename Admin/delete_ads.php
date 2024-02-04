<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "DELETE FROM ads WHERE id='".$_GET['ads']."'";
mysqli_query($con, $sql);
header("location:ads.php"); 

?>