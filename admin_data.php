<?php 
 
 $username= $_POST['username'];
$passsword= $_POST['password'];
     
     
     $conn=mysqli_connect("localhost", "root" ,"", "blood_bank") or die("unsucessful");
 if($username=="admin" && $passsword=="admin1234"){
     
     header("Location: http://localhost/bloodbank/admin_dash.php");
 }
 else{
     echo"admin does not exist";
 }
     mysqli_close($conn);

     ?>  