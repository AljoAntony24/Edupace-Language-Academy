<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "DELETE FROM video_reel WHERE id='".$_GET['reel']."'";
mysqli_query($con, $sql);
header("location:reel.php"); 

?>