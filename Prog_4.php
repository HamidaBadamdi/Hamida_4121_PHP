<?php
    //4. PHP program to find the current month.
    $month = date("F"); //uses built-in function date() , it returns the current month.

    //Using if-else statement...
    //Using if-else 
    echo "<center><h1>Using if-else to find the current month...</h1>";
    if($month == "August")
    {
        echo "<h2>Current Month is : " , $month , "</h2>";
    }
    else
    {
        echo "It is not current month (  " , $month , " )";

    }

    //Usinng switch-case...
    echo "<hr>";
     echo "<h1>Using switch-case to find the current month...</h1>";
    switch($month)
    {
        case "August":
            echo "<h2>Current Month is : " , $month ,"</h2>";
            break;
        default:
        echo "It is not current month (  " , $month , " )";

        

    

            
    }
    echo "</center>";
/*$i=range(1,5);
    foreach($i as $num )
    {
        echo $num,"<br>";
    }*/
?>