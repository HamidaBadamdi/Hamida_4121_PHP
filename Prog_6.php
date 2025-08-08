<?php

    $i=15;
     //Using for loop to print 15 to 20...
     echo "<center><h1>Using While loop print(15 To 20) ...<br></h1>";
    while($i <= 20)
    {
        echo "<h3>" ,$i ,"</h3>";
        $i++;
    }

    echo "<hr><br><h1>Using do..while loop print(15 To 20) ...</h1><br>";

    $j=15;
    do
    {
        echo "<h3>" ,$j ,"</h3>";
        $j++;
        
    }while($j <=20);
    echo "</center><hr>";
?>