<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Smart Garbage Segregation </title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Section: Design Block -->
<section class=" overflow-hidden imgCont">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0 infoCont" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            <span style="color: hsl(119, 98%, 53%)">SMART GARBAGE SEGREGATION </span>
          </h1>
          <p class="mb-4 opacity-100 fs-5" style="color: hsl(0, 0%, 100%);">
            This project aims to present a smart garbage segregation system which segregates garbage into respective types
             (Metallic Waste and Non Metallic Waste) using diffrent types of sensors and Arduino Controller
              which take care of all the task.
          </p>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
  
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form action="./register.php" method="post">
                <h4>REGISTER FORM</h4>
                <br>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" class="form-control" name="fname"/>
                      <label class="form-label" for="form3Example1">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" name="lname"/>
                      <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                  </div>
                </div>
  
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" name="email"/>
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" name="password"/>
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
  
                <!-- Submit button -->
                <button type="submit" name="register" class="btn btn-success btn-block mb-4">
                  REGISTER
                </button>

                <div>
                    Already have an account ? &nbsp;
                    <a style="color:#01ff3c;letter-spacing: 1px;" href="./index.php">LOGIN</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
  <?php
    if(isset($_POST["register"])){
      include("./dbcon.php");

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    
    $querry= "insert into user(fname,lname,email,password) values('".$fname."','".$lname."','".$email."','".$pass."');";
    if(mysqli_query($conn,$querry)){
        echo "<br>New record inserted successfully";
        header("location:./index.php");
    }else {
        echo "Error: " . $querry . "<br>" . mysqli_error($conn);
    }
    }

?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
