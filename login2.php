<?php
     $email = $_POST['email'];
     $password = $_POST['password'];
     error_reporting(0);

     $con = new mysqli("localhost","root","","hospital");
     if($con->connect_error)
     {
      die("Failed to connect : ".$con->connect_error);
     } else{
      $stmt = $con->prepare("select * from login2 where email = ?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $stmt_result = $stmt->get_result();
      if($stmt_result->num_rows > 0){
         $data = $stmt_result->fetch_assoc();
         if($data['Password'] === $password){
          session_start();
          $_SESSION['docid']=  $data['id'];
          include("doctor.php");
         } else{
           include("index.php"); 
         }
      } else{
        include("doctorlogin.php");;
      }
     }
?>