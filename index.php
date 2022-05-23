<?php 
    session_start();
?>
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
              <form action="./index.php" method="post">
                <h4>LOGIN FORM</h4>
                <br>
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
                <button type="submit" name="login" class="btn btn-success btn-block mb-4">
                  LOGIN
                </button>

                <div>
                    Create a new Account ? &nbsp;
                    <a style="color:#01ff3c;letter-spacing: 1px;" href="./register.php">REGISTER</a>
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
    if(isset($_POST["login"])){
      include("./dbcon.php");

      $email = $_POST["email"];
      $pass = $_POST["password"];

      $found = false;
      $querry= "select * from user where email='".$email."' and password='".$pass."';";
      $result = mysqli_query($conn,$querry);
      if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            if($email==$row["email"] && $pass==$row["password"]){
                $_SESSION["uname"]= $row["fname"];
                $_SESSION["uid"]= $row["id"];
                $found = true;
                header("location:./home.html");
            }
        }
        if(!$found){
            echo '<script>alert("Invalid Email or Password.")</script>';
            // echo '<script>window.location.href="../user/login.php"</script>';
        }
           
    }else{
            echo "0 results";
            echo '<script>alert("Invalid Email or Password.")</script>';
            // echo '<script>window.location.href="../user/login.php"</script>';
    }

    }

?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>