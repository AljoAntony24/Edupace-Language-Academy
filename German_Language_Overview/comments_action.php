<?php 
  include("Admin/connection/config.php");
    error_reporting(0);
    session_start();
  if(isset($_POST['submit']))          
      { 
        $name=$_POST['name'];
        $email_id=$_POST['email'];
        $message=$_POST['message'];
        $status=0;
        $sql = "INSERT INTO comments VALUE('','$name','$email_id','$message','$status')";

        mysqli_query($con, $sql); 
          $success = '<div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 Added Successfully.
                      </div>';
                      header("Location: blog.php");
      }
      else {
        echo "Error";
      }
?>