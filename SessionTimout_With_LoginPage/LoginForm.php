<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
    <h1>Login to your account...</h1>
    
    <form method="post" action="Login.php">
            <div style="background-color:lightblue; width:40%; padding-top:20px; 
            padding-bottom: 20px; border:1px solid navy; border-radius:8px; ">
          
            Username : <input type="text" placeholder="Enter Username" name = "usrName" required/><br><br>
            Password : <input type="password" placeholder="Enter Password" name = "password" required/><br><br>
            <input type="submit" value="Login">
            
            </div>
</form>
   
    <?php
        if(isset($_GET['error']) == 1)
        {
            echo "<center><h2 style = 'color : red;'>Invalid Username or Password!</h2></center>";

        }
    ?>
</center>
</body>
</html>