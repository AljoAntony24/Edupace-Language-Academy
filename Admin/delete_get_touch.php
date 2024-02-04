<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "DELETE FROM footer_contact WHERE id='".$_GET['get']."'";
mysqli_query($con, $sql);
header("location:get_in_touch.php"); 

?>