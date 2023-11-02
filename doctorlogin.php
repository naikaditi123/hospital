<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <style>
body {
  font-family: "Garamond", serif;
}
</style>
<script>
function validateForm() {
  var x = document.forms["myForm"]["email"].value;
  var y = document.forms["myForm"]["password"].value;
  if (x == "" || x == null) {
    alert("Email must be filled out");
    return false;
  }
  if (y == "" || y == null) {
    alert("password must be filled out");
    return false;
  }
  }
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    <title>Hospital management system</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand navbar-dark  ">
        <div class="container-fluid">
        <img src="https://thumbs.dreamstime.com/b/hospital-logo-template-hospital-logo-template-117487677.jpg" class="logo">
          <a class="navbar-brand" href="#"><h2> WELLNESS HOSPITAL</h2></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="top">
          <ul>
      <li><a href="index.php">Receptionist</a></li>
      <li><a href="doctorlogin.php">Doctors</a></li>
    </ul>
</div>
          </div>
        </div>
    </nav>
    <div class="bg-image" 
    style="background-image: url('https://img.freepik.com/premium-photo/long-hospital-corridor-with-empty-seats_117023-1679.jpg?w=2000');
           height: 100vh">
    <div class="container vh-100">
      <div class="row justify-content-center h-100">
          <div class="card  w-25 my-auto shadow" style="width:50%">
          <div class="card-header">
              Doctor Login
          </div>
          <div class="card-body">
              <form name="myForm" action="login2.php" onsubmit="return validateForm()" method="post" required>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" class="form-control" name="email"/>
                  </div>
                  
                  <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" id="myInput" class="form-control" name="password"/>
                      <input type="checkbox" onclick="myFunction()">Show Password

                  </div>
          </div>
          <div class="text-center">
          <button class="button">Login</button>
          </div>
              </form>
              <div class="card-footer">
                  <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
              </div>
          </div>
      </div>
    </div>
</div>
</body>
</html>