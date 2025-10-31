<?php

    if(isset($_COOKIE['user_ID']))
    {
        echo "<h2>User ID from Cookie : ".$_COOKIE['user_ID']."</h2>";
    }
    else
    {
        echo "Cookie not found ! ";
    }

?>