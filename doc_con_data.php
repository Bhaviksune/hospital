<?php 
 
                $Symptom= $_POST['textarea'];
              $Mobile_no= $_POST['mobile_no'];
                    
                    
                    $conn=mysqli_connect("localhost", "root" ,"", "blood_bank") or die("unsucessful");
                    $sql= "INSERT INTO video_info(symptom,mobile_no) VALUES('{$Symptom}','{$Mobile_no}')";
                    $result=mysqli_query($conn,$sql) or die("unsucessfull");
                    
                    header("Location: http://localhost/bloodbank/video.html");

                    mysqli_close($conn);

                    ?>  