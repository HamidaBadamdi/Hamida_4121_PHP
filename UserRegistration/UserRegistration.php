<?php
        if($_SERVER["REQUEST_METHOD"] == "GET")
        {
           
            if(isset($_GET["usrName"]) != "")
                {
                    $usrName = $_GET["usrName"];
                    echo "<center><h2>Welcome , ".$usrName."</h2></center>";
                }
        }
    ?>
