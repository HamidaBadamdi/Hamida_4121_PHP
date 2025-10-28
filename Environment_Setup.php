<?php
    //Example: set environment variable manually
    $_ENV['APP_ENV'] = 'development';  // can be 'production' or 'development'

    //Load configuration based on environment
    if($_ENV['APP_ENV'] == 'development')
    {
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '123';
        $db_name = 'db_app_test';

    }
    else
    {
        $db_host = 'db.myserver.com';
        $db_user = 'admin';
        $db_pass = 'admin@123';
        $db_name = 'db_app_live';
    }
    
    //Display which configuration is loaded
    echo "<center>";
    echo "<h2>Environment : ".$_ENV['APP_ENV']."</h2>";
    echo "<h2>Database Host : ".$db_host."</h2>";
    echo "<h2>Database User : ".$db_user."</h2>";
    echo "</center>";

?>