<?php
$showAlert=false; 
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
   
include 'db_connect_1.php';
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$hash=password_hash($password,PASSWORD_DEFAULT);
// $exists=false;
// check wheter this username Exists
$existSql = "SELECT * FROM `userdata` WHERE username = '$username'";
$result = mysqli_query($conn,$existSql);
$numExistRows = mysqli_num_rows($result); 
 
if($numExistRows > 0){
    // $exists=true;
    $showError = "Username Already Exists";
    echo "Username Already Exists";
}
// else $exists=false;
else{
if(($password==$cpassword)){
$sql ="INSERT INTO `userdata` ( `username`, `email`, `password`) VALUES ( '$username', '$email', '$hash')";
$result = mysqli_query($conn,$sql);
if($result){
    $showAlert=true;
    header("location:welcome.php");
   }
  } 

else{
    $showError = "Passsword do not match";
} 
}
} 
 ?>

<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="wpcst.css">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
           
        </nav>
    </header>

 <div class="wrapper">
   <span class="icon-close"><ion-icon name="close"></ion-icon></span> 
    <div class="form-box login">
        <h2>Login</h2>
        <form action="#" >  
 
          <div class="input-box">
                <span class="icon"><ion-icon name="person-circle"></ion-icon>
                    </span>
                <input type="text" class="form-control" id="username" name="username" required>
                <label for="username">Username</label>
            </div> 

            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
              <label><input type="checkbox">Remember me</label> 
              <a href="#">Forgot Password</a> 
            </div>
            <button type="submit" class="btn">Login </button>
           
            <div class="login-register">
                <p>Don't have an account?<a
                 href="#"
                class="register-link">Register</a></p>
            </div>
    
        </form>
    </div>
    
    <div class="form-box register">
        <h2>Registration</h2>
        <form action="/phpt/loginsystem/registration.php" method="post">
            <div class="input-box">
                <span class="icon"><ion-icon name="person-circle"></ion-icon>
                    </span>
                <input type="text" class="form-control" id="username" name="username" required>
                <label for="username">Username</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" class="form-control" id="email" name="email"  required>
                <label for="email">Email</label>
            </div>
      
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" class="form-control" id="password" name="password" required>
                <label for="password">Password</label>
            </div>

            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                <label for="cpassword">Confirm Password</label>
            </div>

            <div class="remember-forgot" >
              <label><input type="checkbox">I agree to the terms & conditions</label> 
             
            </div>
            <button type="submit" class="btn">Register</button>
           
            <div class="login-register">
                <p>Already have an account?<a
                 href="#"
                class="login-link">login</a>
                </p>
            </div>
             <?php
        // if($showAlert){
        //  echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        //   <strong>Success!</strong> Your account is now created and you can login
        //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        // </div>';
        // }
        // else if($showError){
        //     echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        //      <strong>Error!</strong>'.$showError.'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //    </div>';
        //    }
        ?> 
        </form>
    </div>
 </div>
 
 <script src="wpjp.js"></script>
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


 
</body>
</html> -->
