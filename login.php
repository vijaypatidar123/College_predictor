

<!DOCTYPE html>
<head>
<html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="wpcst.css">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <style>
        
            html{
                 
                font-size:x-large;
                font-weight: 100;
                
            }
           
            .white-text {
            color:goldenrod;
        }
      
        .imglogo {
        height: 40px;
        width: auto; 
        margin-right: 10px; 
      }
      html {
      font-size: x-large;
      font-weight: 100;
      position: relative;
      min-height: 100%;
    } 
     body {
            display: flex;
            flex-direction: column;
            margin: 0;
            min-height: 100vh;
        }
 

    .white-text {
      color: goldenrod;
    }

   
    footer { 
      width: 100%;
      height: 120px; 
      background-color: black;
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 14px;
    }   
       
    .wrapper{
      position:relative;
      top:100px;
    }
    </style>
</head>
<body>
    <header>
        <nav class="navigation">
           <a >
           <img src="vijay.jpg" alt="logo" class="imglogo">
            </a>
            <a href="#">Home</a>
            <a href="FAQ.html">FAQs</a>
            <a href="wppt4.php">College Predictor</a>
            <button class="btnLogin-popup">Login</button>
           
        </nav>
    </header>

 
    
 <div class="wrapper">
   <span class="icon-close"><ion-icon name="close"></ion-icon></span> 
    <div class="form-box login">
        <h2>Login</h2>
        <form method="post" action="loginaction.php"> 
       
            <div class="input-box">
                <span class="icon"><ion-icon name="person-circle"></ion-icon>
                    </span>
                <input type="text" class="form-control" id="username" name="username" required>
                <label for="username">Username</label>
            </div> 

            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
              <label><input type="checkbox">Remember me</label> 
              <a href="#">Forgot Password</a> 
            </div>
            <input type="submit" class="btn" value="Login" name="loginsubmit">
            
            <div class="login-register">
                <p>Don't have an account?<a
                 href="#"
                class="register-link">Register</a></p>
            </div>
    
        </form>
    </div>
    
    <div class="form-box register"> 
        <h2>Registration</h2>
        <form method="post" action="registrationaction.php">
            <div class="input-box">
                <span class="icon"><ion-icon name="person-circle"></ion-icon>
                    </span>
                <input type="text" class="form-control" id="username" name="username" required>
                <label for="username">Username</label>
                <p class="username-error error" style="color: #af4242;
    background-color: #fde8ec;
    padding-top: 5px;
    margin-bottom:0;
    display: none;
    font-size: small;
    transform: translateY(-20px);"></p>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" class="form-control" id="email"  name="email"  required>
                <label for="email">Email</label>
                <p class="email-error error" style="color: #af4242;
    background-color: #fde8ec;
    padding-top: 5px;
    margin-bottom:0;
    display: none;
    font-size: small;
    transform: translateY(-20px);"></p>
            </div>
      
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" class="form-control" id="password" name="password" required>
                <label for="password">Password</label>
                <p class="password-error error" style="color: #af4242;
    background-color: #fde8ec;
    padding-top: 5px;
    margin-bottom:0;
    display: none;
    font-size: small;
    transform: translateY(-20px);"></p>
            </div>

            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                <label for="cpassword">Confirm Password</label>
                <p class="cpassword-error error" style="color: #af4242;
    background-color: #fde8ec;
    padding-top: 5px;
    margin-bottom:0;
    display: none;
    font-size: small;
    transform: translateY(-20px);"></p>
            </div>

            <div class="remember-forgot" >
              <label><input type="checkbox">I agree to the terms & conditions</label> 
             
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signup" onclick="return validateForm()">
           
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
 <script src="signup.js"></script>

  
      <footer class="footer">
        <div class="cover">
          <div class="col-md-12">
            <div class="row">
              <!-- Footer Social Icons-->
              <div class="col-lg-12 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="https://instagram.com/vijaypatidar_77?igshid=OGQ5ZDc2ODk2ZA==">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-light btn-social mx-1" href="https://instagram.com/khushal_iiitian?igshid=MTI1ZDU5ODQ3Yw==">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
                  <i class="fab fa-fw fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mt-2">
              <p>© 2023 College Predictor. All rights reserved.</p>
               
                <p class="list-inline-item"><a class="text-light" href="https://collegepredictor.in/privacy-policy.html">Privacy Policy</a></li>
                <p class="list-inline-item"><a class="text-light" href="https://collegepredictor.in/terms-and-conditions.html">Terms and Conditions</a>
                </p>
              
            </div>
          </div>
        </div>
      </footer>
</body>

</html>
