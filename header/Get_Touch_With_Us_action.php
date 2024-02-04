<?php
  
                    
         
include("../Admin/connection/config.php");
error_reporting(0);
session_start();
$jsonData = file_get_contents('php://input');
// Decode the JSON data into a PHP associative array
$data = json_decode($jsonData, true);
$response = array('message' => $data['message']);


    $name = $data['name'];
    $phone =$data['phone'];
    $message = $data['message'];
    $response['message']=$message;
    $sql = "INSERT INTO footer_contact VALUE('','$name','$phone','$message')";
    if (mysqli_query($con, $sql)) {
        $response['message'] = 'Added Successfully.';
  } else {
        $response['message'] = 'Error adding data.';
    }


echo json_encode($response);

        
        ?>

        