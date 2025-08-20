<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>
<body>
<!--8.Array Operations.... -->
    <center>
        <form method="post">
            Enter Your Name : <input type="text" name="name"/> <br><br>
            Enter Your EmailID : <input type="text" name="email"/> <br><br>                 
            Enter Your Contact No. : <input type="number" name="phno"/><br><br> 
            Enter City : <input type="text" name="city"/><br><br> 
            <input type="submit" value ="Submit">

</form>
        <h1>1.Print the values of array...</h1>
        <?php

            //Get values from the user and stores in an array...
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
            $data = array(
                0  => $_POST["name"],
                1 => $_POST["email"],
                2 => $_POST["phno"],
                3 => $_POST["city"]
            );

            //a) Print the values of array.  
            for($i=0; $i<count($data); $i++)
            {
                echo $data[$i] , "<br>";
            }
            //b) Reverse an array.  
                echo "<h1><hr>2. Reverse an array...</h1>";
                for($j=count($data)-1; $j>=0; $j--)
                {
                    echo $data[$j] , "<br>";
                }
            }

            //c) merge two arrays in sorted manner.
            echo "<h1><hr>3.Merge two arrays in sorted manner...</h1>"; 

            $arr1 = [30,20,10];
            $arr2 = [50,60,40];

            echo "<pre>";
            echo "<h2>Array 1 : " , print_r($arr1) ,"</h2>";
            echo "<br><h2>Array 2 : " , print_r($arr2) ,"</h2>";

            $merged_array = array_merge($arr1 , $arr2);
            sort($merged_array);
            echo "<h2>Sorted Merged Array:" , print_r($merged_array) , "</h2>";

            //d) add values of all elements of an array. 
            echo "<h1><hr>4.Sum of array elements...</h1>";
            echo "<h2>Array elements are : <br>";
            
            foreach($arr1 as $val)
            {
                echo $val , "<br>";
            }
     

            $sum = 0;

            foreach($arr1 as $value)
            {
                $sum += $value;
            }
          
            echo "Sum of array elements are : "  , $sum  , "</h2>";
        ?>

        




</center>
</body>
</html>