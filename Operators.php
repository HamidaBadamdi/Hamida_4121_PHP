<!--3.PHP program for operators in PHP. -->
<?php

    $a = 10;
    $b = 5;
    $c = "10";

    //3.PHP Program For Operators.

    //1.Arithmatic Operators(+,-,*,/,%)...
    echo "<center><h1>Arithmatic Operators</h1><hr>";
    
    
    echo "Addition : " , $a + $b;
    echo "<br>Substraction : " , $a - $b;
    echo "<br>Multiplication : " , $a * $b;
    echo "<br>Division : " , $a / $b;
    echo "<br>Modulo Division : " , $a % $b , "<hr>";

    //2.Comparision Operators...
    echo "<center><h1>Comparision Operators</h1>";
    echo $a , " == " , $c , " : " , var_export($a ==  $c) , "<br>"; 
    echo $a , " === " , $c , " : " , var_export($a ===  $c) , "<br>";
    echo $a , " > " , $b , " : " , var_export($a >  $b) , "<br>";  
    echo $a , " < " , $b , " : " , var_export($a <  $b) , "<br>";  
    echo $a , " != " , $b , " : " , var_export($a !=  $b) , "<br>";  

     //3.Increment and  Decrement Operators...
    echo "<hr><center><h1>Increment and Decrement Operators</h1></center>";
    echo  $a++ , "<br>"; //post-increment...
    echo  ++$a , "<br>"; //pre-increment...

    echo  $b-- , "<br>"; //post-decrement...
    echo  --$b , "<br>"; //pre-increment...

   

    //4.Logical Operators... (&& , ||)
    echo "<hr><center><h1>Logical Operators</h1></center>";

    $usrname = "Hamida";
    $pass = "123";

    if($usrname == "Hamida" && $pass == 123)
    {
        echo "Welcome, " , $usrname;
    }

    $roll = "admin";  
    if($roll == "admin" || $roll == "sysadmin")
    {
        echo "<br>Permission Granted...";
    }

      //5.String Operators...
    echo "<hr><center><h1>String Operators</h1></center>";

    $str1 = "Hello, ";
    $str2 = "World!";

    echo $str1.$str2 , "<br>";
    echo $str1.=$str2 ,"</center>";


?>
