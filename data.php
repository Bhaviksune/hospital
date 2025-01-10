<?php 

                    $firstname=$_POST['firstname'];
                     $lastname=$_POST['lastname'];
                     $email=$_POST['email'];
                   $address=$_POST['address'];
                   $blood_group=$_POST['blood_group'];
                   $phone_no=$_POST['phone_no'];


                    
                    $conn=mysqli_connect("localhost", "root" ,"", "blood_bank") or die("unsucessful");
                    $sql= "INSERT INTO user_info (First_name,Last_name,Email,Address,blood_group,phone_no) VALUES('{$firstname}','{$lastname}','{$email}','{$address}','{$blood_group}','{$phone_no}')";
                    $result=mysqli_query($conn,$sql) or die("unsucessfull");
                    
                    header("Location: http://localhost/bloodbank/index.php");
                    
                    mysqli_close($conn);

                    ?>  