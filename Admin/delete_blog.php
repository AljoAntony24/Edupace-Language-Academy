<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "DELETE FROM blog WHERE id='".$_GET['blog']."'";
mysqli_query($con, $sql);
header("location:blog.php"); 

?>