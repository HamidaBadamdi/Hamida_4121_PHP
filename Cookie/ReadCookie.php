<?php
if(isset($_COOKIE['usrName']))
    {
        echo "<h2>Welcome back, ".$_COOKIE['usrName']."</h2>";
    }
    else
    {
        echo "Cookie not set !";
    }
?>