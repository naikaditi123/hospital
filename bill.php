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
  alert("Bill saved");
}

functionprint(){
  alert("Bill printed");
}

</script>

<?php
            $Query = "SELECT * FROM inpatient join labpat on labpat.pat_id = inpatient.pat_id join patients on inpatient.pat_id=patients.pat_id join room on inpatient.room_no=room.room_no where inpatient.pat_id = 102";
            $result = mysqli_query($conn, $Query);

            // mysqli_fetch_assoc($res) this function returns the next row in table 
            $row = mysqli_fetch_assoc($result);
            $adate = strtotime($row['admit_date']);
            $ddate = strtotime(date ("Y-m-d"));
            $rcharge = $row['room_charge'];
            $tcharge = ($ddate - $adate)/60/60/24 * $rcharge;
            $total=$tcharge;
            ?>
<div class="content">
<form action="billlist.php">
  <div class="container">
    <h1>Bill</h1>
    <hr>

    <label for="patid" ><b>Patient id: <?php echo $row['pat_id'];?></b></label>

    <label for="billno" style="margin-left:300px;"><b>Bill No. : 2357964</b></label>
   
    <br>
    <br>

    <label for="name"><b>Patient Name: <?php echo $row['pat_name'];?></b></label>

    <label for="name" style="margin-left:247px;"><b>Doctor Name:  DK Bose </b></label>
    <br>
    <br>

    <label for="date"><b>Admission date <?php echo $row['admit_date'];?></b></label>
   
    <label for="date" style="margin-left:210px"><b>Discharge date : <?php echo date("Y/m/d"); ?></b></label>
    <br>
    <br>
    <hr>
    <div class="tab">
    <table style="width:100%">
      <tr>
        <td><label for="number"><b>Room charges: <?php echo $tcharge ?> </b></label></td>
      </tr>
      <tr>
         <td><label for="number"><b>Lab charges:</b></label></td>
         <?php
            $Query1 = "SELECT * FROM inpatient join labpat on labpat.pat_id = inpatient.pat_id join patients on inpatient.pat_id=patients.pat_id join room on inpatient.room_no=room.room_no join labtests on labtests.lab_id=labpat.lab_id where inpatient.pat_id =102";
            $result1 = mysqli_query($conn, $Query1);

            $num1 = mysqli_num_rows($result1);   //to fetch the number of rows in table

            // mysqli_fetch_assoc($res) this function returns the next row in table 
            if($num1>0){
            while($row1 = mysqli_fetch_assoc($result1)){ ?>
              <tr>
                <td><label style="margin-left:60px;"> <?php echo"  "; echo $row1['test_name']; echo " : "; echo $row1['charges']; $total=$total+$row1['charges'] ?> </label></td>
              </tr>  
            <?php } 
          }?>
         <td><label for="number" style="margin-left:348px;"><b>Total Amount: <?php echo $total ?></b></label></td>
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