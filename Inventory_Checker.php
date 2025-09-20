<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Checker</title>
</head>
<body>
   
        <center><h1>Inventory Checker</h1> </center>
        <?php

            //----Inventory Data----
            $inventory = [
                "Laptop" => 20,
                "Computer" => 10,
                "Mouse" => 35,
                "Keyboard" => 15,
                "USB Cabel" => 0
            ];

            //----Function to display all inventory----
            function displayInventory($inventory)
            {
                echo "<h1>----Current Inventory----</h1><ul>";
                foreach($inventory as $item => $quantity)
                {
                    echo "<h3><li>$item : $quantity units</li></h3>";
                }
                echo "</ul>";

            }

            //----Function to check stock----
            function checkStock($item , $inventory)
            {
                if(array_key_exists($item , $inventory))
                {
                    $qunatity = $inventory[$item];
                    if($qunatity > 0)
                    {
                        return "<h2 style = 'color : green';>$item is in stock: $qunatity units available.</h2>";
                    }
                    else
                    {
                        return "<h2 style = 'color : IndianRed';> '$item' is out of stock !</h2>";
                    }
                
                    
                }
                else
                {
                    return "<h2 style = 'color : red';>Item '$item' not found in inventory !</h2>";
                }

            }

            displayInventory($inventory);

           echo checkStock('Laptop' , $inventory);
           echo "<br>";
           echo checkStock('Printer' , $inventory);
           echo checkStock('USB Cabel' , $inventory);


         ?>
</body>
</html>