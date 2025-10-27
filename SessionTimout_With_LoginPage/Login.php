<?php
session_start(); 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST['usrName'];
    $pwd = $_POST['password'];
    
    if($username == 'admin' && $pwd == 'admin@123')
    {
       
        $_SESSION['username'] = $username;
        $_SESSION['last_activity'] = time(); //Track Login Time
        header('Location: dashboard.php'); //Redirect to dashboard
        exit;
    }
    else
    {
        header('Location: LoginForm.php?error=1');
        exit;
    }
}


?>
