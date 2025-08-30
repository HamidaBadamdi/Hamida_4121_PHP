<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conatct Form</title>
</head>
<body>
        <center>
            <h1>Conatct Form</h1>
            <!-- HTML Form -->
            <form method="post" action="">
            <div style="background-color:lightblue; width:40%; padding-top:20px; 
            padding-bottom: 20px; border:1px solid navy; border-radius:8px; ">
            Name : <input type="text" placeholder="Enter Your Name" name = "name"/><br><br>
            Email ID : <input type="email" placeholder="Enter Your Email ID" name = "email"/><br><br>
            Message : <textarea name="mssg" placeholder="Enter Your Message Here..."></textarea><br><br>

            
            <input type="submit" value="Submit">
            
            </div>
</form>
            <?php

                if($_SERVER["REQUEST_METHOD"] == "POST")
                {

                     // Accept user input
                    $name = trim($_POST["name"]);
                    $email = trim($_POST["email"]);
                    $mssg = trim($_POST["mssg"]);

                   
                    $email = strtolower($email);  //Convert to lowercase

                    $mssg = htmlspecialchars($mssg);  // Prevent XSS 

                    
                echo "<h3>";
                 // Display sanitized output
                echo ".....Sanitized Outputs.....<br>";   
               
                echo "Name : ".htmlspecialchars($name)."<br>";
                echo "Email : ".htmlspecialchars($email)."<br>";
                echo "Message : ".nl2br($mssg)."<br>";
                echo "</h3>";

                }


            ?>
            
</center>
</body>

</html>
