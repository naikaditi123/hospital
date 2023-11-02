<?php include './connection.php'?>
<?php $roomno=$_GET['roomno'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <style>
body {
  font-family: "Garamond", serif;
}
</style>
      <link rel="stylesheet" href="styles.css">
    <title>Hospital management system</title>
    
</head>
<body>
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
    <a class="active" href="room.php">Roominfo</a>
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

<?php
            $Query1 = "SELECT * from room  WHERE room.room_no=$roomno;";
            $result1 = mysqli_query($conn, $Query1);
            $num1 = mysqli_num_rows($result1);

            // mysqli_fetch_assoc($res) this function returns the next row in table 
            $row1 = mysqli_fetch_assoc($result1) ?>
<div class="content">
    <?php if ($row1['room_status']=='occupied'){?>
      <?php
            $Query = "SELECT * from room join inpatient on room.room_no=inpatient.room_no join patients on patients.pat_id=inpatient.pat_id WHERE room.room_no=$roomno;";
            $result = mysqli_query($conn, $Query);
            $num = mysqli_num_rows($result);

            // mysqli_fetch_assoc($res) this function returns the next row in table 
            $row = mysqli_fetch_assoc($result) ?>
    <h2>Room Info</h2>
    <hr>
    <p>Room number: <?php echo $row['room_no'];  ?></p><br>
    <p>Room Type: <?php echo $row['room_type'];  ?></p><br>
    <p>Patient id: <?php echo $row['pat_id'];  ?></p><br>
    <p>Patient Name: <?php echo $row['pat_name'];  ?></p><br>
    <p>Admit Date: <?php echo $row['admit_date'];  ?></p><br>
    <p>Discharge Date: <?php echo $row['discharge_date'];  ?></p><br>
    <form action="bill.php">
    <?php echo "<a href='bill.php ?roomno=$row[room_no]'><button class='btn btn-outline-primary btn-sm'> Generate Bill</button></a>";}
    else {
      ?>
      <h2>Room Info </h2>
    <hr>
    <p>Room number: <?php echo $row1['room_no'];  ?></p><br>
    <p>Room Type: <?php echo $row1['room_type'];  }?></p><br> 
</form>
    <hr>
</div>
</body>
</html>    
