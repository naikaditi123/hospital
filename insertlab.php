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


  $patid = $_POST["id"];
  $labid= $_POST["labid"];
  $tname = $_POST["tno"];
  $tno = $_POST["tokenno"];
  $docname = $_POST["name"];

    $sql = "INSERT INTO `labpat`(`lab_id`, `pat_id`, `doc_rec`, `token_no`) VALUES ('$labid','$patid','$docname','$tno')";
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

  

}
header("location: labtest.php");

?>
