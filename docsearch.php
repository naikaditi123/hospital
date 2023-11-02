<?php include './connection.php'?>
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
    <a href="roomlist.php">Roomlist</a>
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
                <div class="container">
                <form action="" method="GET">
<div class="input-group mb-3">
  <input style="width=30%" type="text"  name="search"  value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>" class="form-control" placeholder="Search">
  <button type="submit" class="registerbtn">Search</button>
</div>
</form>
                     
                        
<?php
           
           $search= $_GET['search'];
           $Query = "SELECT * FROM `doctors` WHERE doc_name like '%$search%'";
            $result = mysqli_query($conn, $Query);

            $num = mysqli_num_rows($result);   //to fetch the number of rows in table

            // mysqli_fetch_assoc($res) this function returns the next row in table 
            if($num>0){
            while($row = mysqli_fetch_assoc($result)){
                ?>
                         
                             <div class="card">
                                 <img class="card-img-top" src="<?php echo $row['image'];?>" alt="">
               
                                 <div class="card-body">
                                     <h5 class="card-title"><?php echo $row['doc_spec']; ?></h5>
                                     <p class="card-text">
                                     <?php echo $row['doc_name']; ?><br>
                                     <?php echo $row['doc_mobile']; ?><br>
                                     <?php echo $row['doc_addr']; ?>
                                     </p>
                                     <?php echo "<a href='addappointment.php ?docid=$row[doc_id]'><button class='btn btn-outline-primary btn-sm'> Add Appointment</button></a>";?>
                                        
                                 </div>
                             </div>
                         
                        <?php } 
          }?>

             </div>
        </div>


</body>
</html>