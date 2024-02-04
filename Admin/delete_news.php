<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "DELETE FROM news WHERE id='".$_GET['news']."'";
mysqli_query($con, $sql);
header("location:news.php"); 

?>