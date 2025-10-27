<?php
    session_start();  // resume the session
    session_unset();  // clear all session variables
    session_destroy(); // delete session file (logout)

    header('Location: LoginForm.php');
?>