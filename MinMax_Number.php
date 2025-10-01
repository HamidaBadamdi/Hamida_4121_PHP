<!--2.PHP program to find out maximum and minimum number -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum | Minimum Number</title>
</head>
<body>
    <center><h1>Maximum | Minimum Number</h1><hr>
    <?php
       //Here total 3 variable with values are declared...
        $num1 = 10;
        $num2 = 20;
        $num3 = 30;

        //Print these 3 numbers...
        echo "<h2>Numbers Are : " , $num1 , ", " , $num2 , ", " , $num3 ,"</h2>";  

        //Uses max() built-in function to find the maximum number...
        echo "<br><h3>Maximum Number : " ,  max($num1 , $num2 , $num3), "</h3>";

        //Uses min() built-in function to find the manimum number...
        echo "<br><h3>Minimum Number : " ,  min($num1 , $num2 , $num3), "</h3>";
       

    ?>
</body>

</html>


