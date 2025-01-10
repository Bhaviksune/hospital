<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Patient Card</title>
    <style>
        body{
            text-align: center;
    
        }
        select {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 10px;
        }
        #city{
            margin-right: 70px;
        }
        .page{
            display: flex;
            flex-wrap: wrap;
            /* justify-content: space-between; */
        }
        .patient-card {
            width: 300px;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 60px;
    
        }

        
        .patient-name {
            font-size: 24px;
            font-weight: bold;
        }

        
        .patient-info {
            margin-top: 10px;
            font-size: 16px;
        }

        
        .blood-group {
            background-color: #f44336;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            margin-top: 10px;
        }
        .logo {
            width: 200px;
            height: 200px;
            font-size: 170px;
            /* background-color: #ccc; */
            border-radius: 50%;
            margin: 0 55px 10px;
            
        }
        .heading{
            width: 100%;
            /* height: 20px; */
            border: 1px solid black;
            text-align: center;
            font-size: 30px;
            color: red;
            background-color:darkgrey;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <div class="heading"><b>OUR DONORS</b></div>
   <div class="page">
    <?php
           $conn=mysqli_connect("localhost","root","" ,"blood_bank");
           $sql="select First_name,Last_name,Email,phone_no,blood_group,Address from user_info";
           $result=mysqli_query($conn,$sql) or die("query unsucessfull");
           if(mysqli_num_rows($result)> 0){
            while($row=mysqli_fetch_assoc($result)){
                ?>
            <div class="patient-card">
                <div class="logo">
                    <i class="ri-user-fill"></i> 
                </div>
                <div class="patient-name"> <?php echo $row['First_name'];?> </div>
                <div class="patient-info">
                    <p>Email:<?php echo $row['Email'];?></p>
                    <p>Phone: <?php echo $row['phone_no'];?></p>
                    <p>Address: <?php echo $row['Address'];?></p>

                </div>
                <div class="blood-group"><?php echo $row['blood_group'];?></div>
            </div>
            <?php
            }
        }
            ?>

            
    </div>
</body>
</html> 

<!-- final code card cha -->