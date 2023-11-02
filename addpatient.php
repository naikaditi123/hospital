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
    <a class="active" href="addpatient.php">Add Patients</a>
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
    <a href="labtest.php">Add labtest</a>
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

var dropdown = document.getElementsByClassName("dropdown-btn1");
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

var dropdown = document.getElementsByClassName("dropdown-btn2");
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

function done(){
  alert("Patient added");
}
</script>

<div class="content">
<form action="insertpat.php" method = "POST">
  <div class="container">
    <h1>Patient Registeration</h1>
    <hr>


    <label for="name"><b>Patient Name</b></label>
    <div class="col-sm-10">
    <input type="name" placeholder="Full Name" name="name" id="name" required>
    <br>
    <br>

    <label for="address"><b>Patient Address</b></label>
    <div class="col-sm-10">
    <textarea type="address" class="form-control" placeholder="Address" rows="5"  columns="5" id="address" name="address"></textarea>
    <br>

    <label for="contact"><b>Patient Contact</b></label>
    <div class="col-sm-10">
    <input type="contact" placeholder="Contact" name="contact" id="contact" required>
    <br>
    <br>
   
    <label for="contact"><b>Status</b></label>
    <br>
    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="No" checked>
      <label class="form-check-label" for="radio1">Not-Admitted</label>

  
      <input type="radio" class="form-check-input" id="radio2" name="optradio" value="Yes">
      <label class="form-check-label" for="radio2">Admitted</label>
      <br>

      <hr>

    <button type="submit" class="registerbtn" name="submit" onclick="return done()" >Submit</button>
  </div>
</form>
</div>
</body>
</html>