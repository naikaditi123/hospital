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
  <a class="active" href="home.php">Doctors</a>
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

</script>
<div class="content">
<form action="bill.php">
  <div class="container">
    <h1>Patient Registeration</h1>
    <hr>

    <label for="id"><b>Patient id</b></label>
    <div class="col-sm-10">
    <input type="id" placeholder="patient id" name="id" id="id" required>
    <br>
    <br>

    <label for="reason"><b>Reason</b></label>
    <div class="col-sm-10">
    <input type="reason" placeholder="Reason" name="reason" id="reason" required>
    <br>
    <br>

    <label for="date"><b>Admit Date</b></label>
    <div class="col-sm-10">
    <input type="date" placeholder="Date" name="date" id="date" required>
    <br>
    <br>

    <label for="date"><b>Discharge Date</b></label>
    <div class="col-sm-10">
    <input type="date" placeholder="Date" name="date" id="date" required>
    <br>
    <br>

    <label for="remarks"><b>Remarks</b></label>
    <div class="col-sm-10">
    <textarea class="form-control" placeholder="Remarks" rows="5"  columns="5" id="remarks" name="remarks"></textarea>
    <br>
    <br>
  
    <button type="submit" class="registerbtn">Submit</button>
    <hr>
  </div>
</form>
</div>
</body>
</html>