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


  $patid = $_POST["patid"];
  $docid = $_POST["docid"];
  $date = $_POST["date"];
  $tno = $_POST["tno"];

    $sql = "INSERT INTO `appointments`(`date`, `doc_id`, `pat_id`, `token_no`) VALUES ( '$date','$docid','$patid', '$tno')";
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

  

}
header("location: addappointment.php");

?>
