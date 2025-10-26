<?php
    //Get client IP address...
    $ip = $_SERVER['REMOTE_ADDR'];

    //Get request method (GET, POST , etc.)
    $req_method = $_SERVER['REQUEST_METHOD'];
    
    //Get requested URI
    $uri =  $_SERVER['REQUEST_URI']; 
    
    //Get Server Name
    $server_name = $_SERVER['SERVER_NAME'];
    
    //Create a log message
    $log_mssg =  "<h3>IP Address: $ip | Method : $req_method | URI : $uri | Server : $server_name | Time : ".date('dd-MM-yyyy H:i:s')."</h3><br>";

    //Log into a file (create 'requests.log' if not exists)
    file_put_contents('requests.log' , $log_mssg , FILE_APPEND);

    //Display the information on the web Page.
    echo "<center>";
    echo "<h1>Request Information</h1><hr>";
    echo "<h3>";
    echo "Client IP : $ip<br>";
    echo "Requested Method : $req_method<br>";
    echo "Requested URI : $uri<br>";
    echo "Server Name : $server_name<br>";
    echo "Logged at :".date('d-M-Y H:i:s');
    echo "</h3>";
    echo "</center>";


?>