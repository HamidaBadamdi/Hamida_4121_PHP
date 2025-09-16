<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
</head>
<body>
    <center>
        <h1>User Login</h1>
        <?php


            function CheckCredentials($userName , $pass)
            {
                $valid_usrName = "Ruhi_1215";
                $valid_pass = "@1312";
                
                if($userName == $valid_usrName && $pass == $valid_pass)
                {
                    echo "<h2>Login Successfully...</h2><br>Welcome, $userName...";
                }
                else
                {
                    echo "<h2>Inavlid Username or Password !</h2>";
                }

            }


            CheckCredentials("Ruhi_1215" , "@1312");
        ?>

    </center>

</body>
</html>