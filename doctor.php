<?php include './connection.php'?>
<?php session_start();
error_reporting(0);?>
<?php $docid= $_SESSION['docid'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <style>
</style>
      <link rel="stylesheet" href="styles.css">
    <title>Hospital management system</title>
    
</head>
<body>
<div class="sidenav">
  <a class="active">WELLNESS</a><br><br>
  <a class="active" href="appointmentlist.php">Appointments</a>
  <a class="" href="logout.php">Logout</a>
</div>

<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

</script>
<style>
body {
  font-family: "Garamond", serif;
}
</style>
<?php
  $Query = "SELECT doc_name from doctors WHERE doc_id=$docid";
  $result = mysqli_query($conn, $Query);
   //to fetch the number of rows in table
  $row = mysqli_fetch_assoc($result);?>

<div class="content">
<p><?php echo "Doctor Id: ".$_SESSION['docid'];  ?></p><br>
<p><?php echo "Doctor Name: ".$row['doc_name'];  ?></p><br>

<div class="sidenav">
  <a class="active">WELLNESS</a><br><br>
  <a class="active" href="appointmentlist.php">Appointments</a>
  <a class="" href="logout.php">Logout</a>
</div>
    <h2>Appointment List</h2>
<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Token No.</th>
        <th>Patient id</th>
        <th>Patient Name</th>
        <th>Patient Mobile</th>
        <th>Admitted</th>
      </tr>
</thead>
<tbody>
  <?php
  $Query1 = "SELECT doc_name,patients.pat_id,token_no,image,pat_name,pat_mobile,admitted from appointments join doctors on appointments.doc_id=doctors.doc_id join patients on appointments.pat_id=patients.pat_id WHERE appointments.doc_id=$docid";
  $result1 = mysqli_query($conn, $Query1);

  $num = mysqli_num_rows($result1);   //to fetch the number of rows in table
            if($num>0){
            while($row2 = mysqli_fetch_assoc($result1)){ ?>
              <tr>
                <td> <?php echo $row2['token_no'];  ?> </td>
                <td> <?php echo $row2['pat_id'];  ?> </td>
                <td> <?php echo $row2['pat_name'];  ?> </td>
                <td> <?php echo $row2['pat_mobile'];  ?> </td>
                <td> <?php echo $row2['admitted'];  ?> </td>
              </tr>  
            <?php } 
          }?>
</table>
</div>
</body>
</html>