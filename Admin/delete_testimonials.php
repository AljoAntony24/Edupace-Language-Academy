<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "DELETE FROM testimonials WHERE id='".$_GET['test']."'";
mysqli_query($con, $sql);
header("location:testimonials.php"); 

?>