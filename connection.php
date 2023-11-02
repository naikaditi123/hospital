<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "hospital";
      
        $conn = mysqli_connect($servername, $username, $password, $database); //to connect to database;

        if(!$conn){
            die("Failed to connect : ".mysqli_connect_error());
         } 
?>
