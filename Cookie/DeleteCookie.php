<?php

    setcookie("usrName" , "" , time() - 3600); //delete cookie by expire-
    echo "Cookie deleted...";
?>