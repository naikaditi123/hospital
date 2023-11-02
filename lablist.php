<?php include './connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="styles.css">
    <title>Hospital management system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
</head>
<body>
<style>
body {
  font-family: "Garamond", serif;
}
</style>
<div class="sidenav">
<a class="active">WELLNESS</a><br><br>
  <a class="" href="home.php">Doctors</a>
  <button class="dropdown-btn">Patients 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="addpatient.php">Add Patients</a>
    <a href="patientlist.php">Patient List</a>
  </div>
  <a class="" href="appointmentlist.php">Appointments</a>
  <a class="" href="billlist.php">Bills</a>
  <button class="dropdown-btn1">Rooms 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="room.php">Roominfo</a>
  </div>
  <button class="dropdown-btn2">Labtest 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a class="active" href="labtest.php">Add labtest</a>
    <a href="lablist.php">Labtest List</a>
  </div>
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

function Test(testname,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(testname).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<div class= 'content'>
<?php
            $Query = "SELECT * FROM `labtests`";
            $result = mysqli_query($conn, $Query);

            $num = mysqli_num_rows($result);   //to fetch the number of rows in table

            // mysqli_fetch_assoc($res) this function returns the next row in table 
            if($num>0){
            while($row = mysqli_fetch_assoc($result)){ $testid= $row['lab_id']; ?>
                
    <hr>
<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Patient id</th>
        <th>Patient Name</th>
        <th>Recommended Doctor</th>
        <th>Token number</th>
      </tr>
    </thead>
    <tbody><h2><?php echo $row['test_name']; ?></h2><?php  echo " "; echo "Lab ID: "; echo $row['lab_id']; ?>
    <?php 
            $Query1 = "SELECT * FROM patients join labpat on patients.pat_id =labpat.pat_id where labpat.lab_id=$testid;";
            $result1 = mysqli_query($conn, $Query1);

            $num1 = mysqli_num_rows($result1);   //to fetch the number of rows in table

            // mysqli_fetch_assoc($res) this function returns the next row in table 
            if($num1>0){
            while($row1 = mysqli_fetch_assoc($result1)){ ?>
              <tr>
                <td> <?php echo $row1['pat_id'];  ?> </td>
                <td> <?php echo $row1['pat_name'];  ?> </td>
                <td> <?php echo $row1['doc_rec'];  ?> </td>
                <td> <?php echo $row1['token_no'];  ?> </td>
              </tr>  
            <?php } 
          }?>
    </tbody> 
            <?php } 
          }?>
  </table>
</div>




        </div>
</body>
</html>