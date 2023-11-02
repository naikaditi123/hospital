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
    <a  class="active" href="labtest.php">Add labtest</a>
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
  alert("Bill saved");
}

functionprint(){
  alert("Bill printed");
}


</script>
<div class="content">
<form action="">
  <div class="container">
    <h1>Bill</h1>
    <hr>

    <label for="patid" ><b>Patient id</b></label>
    <input type="patid" placeholder="Patient id" name="patid" id="patid" required>

    <label for="billno" style="margin-left:30%;"><b>Bill No.</b></label>
   
    <input type="billno" placeholder="Bill No" name="billno" id="billno" required>
    <br>
    <br>

    <label for="name"><b>Patient Name</b></label>
    <input type="name" placeholder="Full Name" name="name" id="name" required>

    <label for="name" style="margin-left:354px;"><b>Doctor Name</b></label>
    <input type="name" placeholder="Doctor Name" name="name" id="name" required>
    <br>
    <br>

    <label for="labid"><b>Lab id</b></label>
    <input type="labid" placeholder="Lab id" name="labid" id="labid" required>

    <label for="testname" style="margin-left:402px;"><b>Test name</b></label>
    <input type="testname" placeholder="Testname" name="testname" id="testname" required>
    <br>
    <br>
    <hr>
    <div class="tab">
    <table style="width:100%">
      <tr>
        <td><label for="number"><b>Lab Charges</b></label></td>
    <td><input type="charges" placeholder="Lab Charges" name="number" id="number" required></td>
      </tr>
      </table>  
</div> 
<br>
<br>
    <button type="submit" class="registerbtn" onclick="return done()">Save</button>
    <button type="submit" class="registerbtn" onclick="return print()">Print</button>
  </div>
</form>

</body>
</html>