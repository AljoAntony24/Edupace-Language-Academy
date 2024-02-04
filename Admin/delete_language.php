<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "DELETE FROM language_training WHERE id='".$_GET['lang']."'";
mysqli_query($con, $sql);
header("location:language_training.php"); 

?>