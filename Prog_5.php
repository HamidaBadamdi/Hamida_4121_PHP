<?php

    //Using for loop to print 5 to 10...
    echo "<center><h1>Using for loop print(5 To 10) ...<br></h1>";
    for($i=5; $i<=10; $i++)
    {
        echo "<h3>" ,$i ,"</h3>";
    }

    echo "<hr><br><h1>Using foreach loop print(5 To 10) ...</h1><br>";
    //Using for loop to print 5 to 10...
    foreach(range(15,20) as $num)
    {
        echo "<h3>" ,$num , "</h3>";
    }
    echo "</center><hr>";

?>