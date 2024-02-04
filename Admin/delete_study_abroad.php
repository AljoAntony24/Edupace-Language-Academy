<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "DELETE FROM study_abroad WHERE id='".$_GET['study']."'";
mysqli_query($con, $sql);
header("location:study_abroad.php"); 

?>