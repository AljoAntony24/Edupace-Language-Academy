<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "DELETE FROM career_abroad WHERE id='".$_GET['career']."'";
mysqli_query($con, $sql);
header("location:career_abroad.php"); 

?>