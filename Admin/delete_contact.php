<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "DELETE FROM contact WHERE id='".$_GET['contact']."'";
mysqli_query($con, $sql);
header("location:contact.php"); 

?>