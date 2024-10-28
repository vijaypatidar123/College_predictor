<?php
$server = "localhost";
$username ="root";
$password="";
$database= "project";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("  Error".mysqli_connect_error());
}

$showError="";
if(isset($_POST['loginsubmit'])){
    $login=false; 
    
$username = $_POST['username'];
$password = $_POST['password'];
 
 
$sql ="SELECT * FROM userdata WHERE username = '$username' ";  
$result = $conn->query($sql);
$num = $result->num_rows;

header("Location: welcome.php");
if($num==1 ){
    while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])){
            echo "<br><br><br><br><br><br><br><br><br><br>";
            echo "login successfull";

    $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$row['username'];
    exit;
}
}
}
else{
    echo "<br><br><br><br><br><br><br><br><br><br>";
    $showError = "Invalid Credentials";
    echo "Wrong password or Username";
} 
$conn->close();
 } 
?>