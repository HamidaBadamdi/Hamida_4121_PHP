<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Parsing For Batch Evaluation</title>
</head>
<body>
    
<center>
        <h1>CSV Parsing For Batch Evaluation</h1>
           
<?php

    // Sample input (multiple students)
    $csvData = [
        "Hamida,85,90,78",
        "Meera,92,88,95",
        "Hasnain,70,75,80"
    ];
    
    echo "<h3>Batch Evaluation Results</h3>";

    foreach ($csvData as $line) {

         // Split the CSV string into array
        $parts = explode("," , $line);

        // First element is student name
        $name = $parts  [0];

        // Remaining elements are scores
        $scores = array_slice($parts , 1);

        
        // Calculate average score
        $avg = array_sum($scores) / count($scores);

        // Create summary string
        $summary = implode(" - " , [$name , "Avg : ".number_format($avg,2)]);

        // Display formatted output
        echo "<h3>".$summary . "</h3>";
    
    }

    ?>
</body>
</html>