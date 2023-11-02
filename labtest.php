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
      <style>
body {
  font-family: "Garamond", serif;
}
</style>
    <title>Hospital management system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
</head>
<body>
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

<div class="content">
<form action="insertlab.php" method = "POST">
  <div class="container">
    <h1>Labtest form</h1>
    <hr>

    <label for="id"><b>Patient id</b></label>
    <div class="col-sm-10">
    <input type="id" placeholder="Patient id" name="id" id="id" required>
    <br>
    <br>

    <label for="name"><b>Recommended Doctor</b></label>
    <div class="col-sm-10">
    <input type="name" placeholder="Full Name" name="name" id="name" required>
    <br>
    <br>

    <label for="tno"><b>Test Name</b></label>
    <div class="col-sm-10">
    <div class="custom-select" style="width:200px;">
  <select name = "tno">
    <option value="0">Select test</option>
    <?php
            $Query = "SELECT * FROM `labtests`";
            $result = mysqli_query($conn, $Query);

            $num = mysqli_num_rows($result);   //to fetch the number of rows in table

            // mysqli_fetch_assoc($res) this function returns the next row in table 
            if($num>0){
            while($row = mysqli_fetch_assoc($result)){ $tname = $row['test_name']; ?> 
               <option value="<?php $tname  ?>"><?php echo $tname;   ?> </option> 
            <?php } 
          }?>
    </select>
</div>
<br>
<label for="labid"><b>Lab ID: </b></label>
    <div class="col-sm-10">
    <input type="labid" placeholder="Full Name" name="labid" id="name" required>
    <br>
    <br>
<label for="tno"><b>Token number</b></label>
    <div class="col-sm-10">
    <div class="custom-select" style="width:200px;">
  <select name = "tokenno">
    <option value="0">Select number:</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
  </select>
</div>
<br>

    <button type="submit" class="registerbtn" name="submit" onclick="return done()">Submit</button>
    <button type="submit" class="registerbtn" name="submit"><form action="labbill.php">Generarte bill</form></button>
  </div>
</form>
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
  alert("Submitted");
}

</script>

</body>
</html>