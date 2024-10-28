<?php

$server = "localhost";
$username ="root";
$password="";
$database= "project";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("  Error".mysqli_connect_error());
}

if(isset($_POST['signup'])){
     
     $showAlert=false; 
     $showError=false;

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$hash=password_hash($password, PASSWORD_DEFAULT);
$exists=false;
if(($password==$cpassword) && $exists===false){
$sql ="INSERT INTO `userdata` ( `username`, `email`, `password`) VALUES ( '$username', '$email', '$hash')";
$result = mysqli_query($conn,$sql);
if($result){
    $showAlert=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$row['username'];
    header("location: welcome.php");
   }
  }
else{
    $showError = "Passsword do not match";
} 
$conn->close();
 } 
 ?>