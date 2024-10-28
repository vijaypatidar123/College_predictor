<?php
 session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Welcome -<?php echo $_SESSION['username']?></title>
  <link rel="stylesheet" type="text/css" href="wpcst.css">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

  <style>
    /* Center align the tick container and h1 */
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    /* Rest of the CSS styles */
    @keyframes wave-animation {
      0% {
        transform: scale(1);
        opacity: 1;
      }
      50% {
        transform: scale(1.3);
        opacity: 0.5;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    .tick-container {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 200px;
      height: 200px;
      background-color: green;
      border-radius: 50%;
      position: relative;
      overflow: hidden;
    }

    .tick {
      font-size: 120px;
      color: white;
      font-weight: 100;
      line-height: 1;
      text-align: center;
      transform: rotate(15deg);
      animation: wave-animation 6s ease-in-out forwards;
    }
  </style>

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
    <br><br><br><br><br><br>
    <h1>Signup Successful!</h1>
    <div class="tick-container">
    <div class="tick">&#10003;</div>
    </div><br><br><br>
    <b> Welcome -<?php echo $_SESSION['username']?></b>

 <div class="wrapper">
   <span class="icon-close"><ion-icon name="close"></ion-icon></span> 
    <div class="form-box login">
        <h2>Login</h2>
        <form action="#"> 

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
        <form action="#">

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
        if($showAlert){
         echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your account is now created and you can login
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        else if($showError){
            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Error!</strong>'.$showError.'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>';
           }
        ?>
        </form>
    </div>
 </div>

 <script src="wpjp.js"></script>
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 

<script> 
    setTimeout(function () {
            window.location.href = "p1.php";
            window.clearTimeout(tID);		
        }, 6500);
    
</script>
           


 
</body>
</html>
