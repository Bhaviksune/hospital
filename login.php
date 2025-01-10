<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Doctor Form</title>
</head>
<body>
    <div class="user-container">
        <div class="image-and-form">
            <div class="doctor-image">
                <div class="image-background">
                    <img src="doctor1.png" alt="Doctor Image">
                </div>
            </div>
            
                <!-- <div class="vertical-line"></div> -->
                <div class="form-section">
                    <form class="signup-form" action="data.php" method="post">
                        <h2>Registration</h2>
                        <div class="form-group">
                            <label for="firstname">First Name </label>
                            <input type="text" id="firstname" name="firstname" >
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name </label>
                            <input type="text" id="lastname" name="lastname" >
                        </div>
                    
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email"  required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address *</label>
                            <input type="text" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="blood_group">Blood Group* </label>
                            <input type="text" id="firstname" name="blood_group" >
                        </div>
                        <div class="form-group">
                            <label for="firstname">Phone No </label>
                            <input type="tel" id="firstname" name="phone_no" >
                        </div>
                        <button type="submit" class="submit" style="background-color: blue; color: white; ">Submit</button>    
                    </form>
                </div>
                  
            </div>
        </div>
    </div>
        <!-- <div class="not_user"><p>Not the User! </p><a href="admin.html" class="adminButton">Admin Login</a></div> -->
   
 
  
</body>
</html>
