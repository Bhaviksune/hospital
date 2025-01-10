<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .service_content {
            margin-top: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-left: 100px;
            margin-right: 100px;
        }

        .service-card {
            background-color: #96d3bf; /* Light Green */
            color: #1E1E28;
            border-radius: 8px;
            padding: 20px;
            width: 45%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-bottom: 20px;
        }

        .service-card img {
            max-width: 100px;
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .service-card h1 {
            font-size: 36px;
        }
        .service-card:hover {
    transform: translateY(-5px);
}
    </style>
</head>
<body>
<div class="service_content">
    <div class="service-card">
        <?php 
        $conn=mysqli_connect("localhost", "root" ,"", "blood_bank") or die("unsucessful");
        $sql= "SELECT MAX(id) AS total_user
        FROM user_info";
    
        $result=mysqli_query($conn,$sql) or die("unsucessfull");
        if(mysqli_num_rows($result)> 0){
     while( $row=mysqli_fetch_array($result)){
      $total_user=$row['total_user'];
        }
      
        }
      
      ?>
        <img src="./images/health_tracking.png" alt="Video Consultation">
        <h3>Registered Users</h3>
        <h1><?php echo $total_user;?>+</h1>
    </div>
    <div class="service-card">
        <img src="./images/video consultation.jpg" alt="Health Tracking">
        <h3>Doctors</h3>
        <h1>25+</h1>
    </div>
    <div class="service-card" >
        <img src="./images/staff_hos.jpg" alt="Health Tracking">
        <h3>Staff</h3>
        <h1>60+</h1>
    </div>
    <div class="service-card">
    <?php 
        $sql= "SELECT COUNT(id) AS total_user
        FROM video_info;
        ";
        $result=mysqli_query($conn,$sql) or die("unsucessfull");
        if(mysqli_num_rows($result)> 0){
     while( $row=mysqli_fetch_array($result)){
      $total_user=$row['total_user'];
        }
      
        } ?>
        <img src="./images/blood_plates.jpg" alt="Health Tracking">
        <h3>Consult Users</h3>
        <h1><?php echo $total_user;?>+</h1>
        <?php mysqli_close($conn) ?>
    </div>
</div>
</body>
</html>
