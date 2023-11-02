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
    <a class="active" href="patientlist.php">Patient List</a>
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
    <h2>Patient List</h2>
    <hr>
    <form action="patsearch.php" method="GET">
<div class="input-group mb-3">
  <input style="width=30%" type="text"  name="search"  value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>" class="form-control" placeholder="Search">
  <button type="submit" class="registerbtn">Search</button>
</div>
</form>

<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Patient ID</th>
        <th>Name</th>
        <th>Mobile No.</th>
        <th>Email</th>
        <th>Address</th>
        <th>Admitted</th>
      </tr>
      <tbody>
          <?php
            $Query = "SELECT * FROM `patients`";
            $result = mysqli_query($conn, $Query);

            $num = mysqli_num_rows($result);   //to fetch the number of rows in table

            // mysqli_fetch_assoc($res) this function returns the next row in table 
            if($num>0){
            while($row = mysqli_fetch_assoc($result)){ ?>
              <tr>
                <td> <?php echo $row['pat_id'];  ?> </td>
                <td> <?php echo $row['pat_name'];  ?> </td>
                <td> <?php echo $row['pat_mobile'];  ?> </td>
                <td> <?php echo $row['pat_email'];  ?> </td>
                <td> <?php echo $row['pat_addr'];  ?> </td>
                <td> <?php echo $row['admitted'];  ?> </td>
              </tr>  
            <?php } 
          }?>
           
      </tbody>
    </thead>
  </table>
</div>
</body>
</html>