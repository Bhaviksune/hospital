<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        
        }

        .login-container {
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px;
            text-align: center;
       
        }

        .login-container h2 {
            margin: 0 0 20px;
        }

        .login-container label {
            display: block;
            margin: 10px 0;
        }

        .login-container input {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-right: 50px;
        }

        .login-container button 
        {
            background-color: blue;
             text-transform: capitalize;
            font-size: 15px;
            text-align: center;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 30px;
            
        }
        .login-container button a{
            text-decoration: none;
            color: #fff;
        }

        .login-container button:hover {
            background-color: darkblue;
        }
        .adminButton{
            text-decoration: none;
            display: block;
            margin-top: 15px;
            color: #199FD9;
            margin-left: 10px;
        }
        .user{
            display: flex;
            position: absolute;
            top: 70%;
            left: 40%;
            
        
        /* z-index: 999; */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="admin_data.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
          
            <button type="submit"> Login</button>
            

        </form>
    </div>
    <!-- <div class="user"><p>Want to be a user! </p><a href="login.php" class="adminButton">User Login</a></div> -->
</body>
</html>

