<?php
    //Set Cookie for 1 hour
    setcookie("user_ID" , "usr@123" , time() + 3600 , "/"); //valid for 1 hour
    header("Location: dashboard.php");
    exit();
    


?>