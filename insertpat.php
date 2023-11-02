<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "hospital";

 $conn = mysqli_connect($servername, $username, $password, $database); //to connect to database;

 if(!$conn){
     die("Failed to connect : ".mysqli_connect_error());
  } 
if (isset($_POST['submit'])) {

  $id = $_POST["id"];
  $name = $_POST["name"];
  $contact = $_POST["contact"];
  $address = $_POST["address"];
  $opt = $_POST["optradio"];

    $sql = "INSERT INTO `patients`(`pat_id`, `pat_name`, `pat_email`, `pat_mobile`, `pat_addr`, `admitted`) VALUES ( '$id','$name', 'pat5@gmail.com', '$contact', '$address', '$opt')";
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    if($res){
        echo "Patient added";
    }
    else{
        echo "Patient not added";
    }
    
}

?>
