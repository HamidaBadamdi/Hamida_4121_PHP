<?php
session_start();

//If not logged in -> redirect to login page
if(!isset($_SESSION['username']))
{
    header('Location: LoginForm.php');
    exit;
}

//Session Timeout Duration (5 Minutes)
$timeout = 60;

if(isset($_SESSION['last_activity']) && 
(time() - $_SESSION['last_activity']) > $timeout)
{
    session_unset();
    session_destroy();
    echo "<center><h2 style = 'color : indianred;'>
    Session expired due to inactivity.Please Login Agin.</h2>";
    echo "<a href = 'LoginForm.php'>Login Again</a></center>";
    exit;

}
// Update last activity time
    $_SESSION['last_activity'] = time();

    echo "<center>";
    echo "<h2>Welcome, ".$_SESSION['username']."!</h2>";
    echo "<h3>Your session is active.</h3>";
    echo "<a href='logout.php'>Logout</a>";
    echo "</center>";
?>
