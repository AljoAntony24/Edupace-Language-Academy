<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "Update video_reel set status=0 WHERE id='".$_GET['reel']."'";
mysqli_query($con, $sql);
header("location:reel.php");
?>