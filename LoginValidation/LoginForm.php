<?php

session_start();

$valid_userName = "User_123";
$valid_pwd = "#123";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
        $username = $_POST['usrName'];
        $password = $_POST['password'];

        if($username == $valid_userName && $password == $valid_pwd)
        {
            $_SESSION['loggeIn'] =  true;
            $_SESSION['userName'] = $username;  

            echo  "<center><h1 style = 'color : green';>Welcome , ".$username."</h1></center>";
        }
        else
        {
            echo "Invalid Username or Password !";
        }

    
        

}
?>