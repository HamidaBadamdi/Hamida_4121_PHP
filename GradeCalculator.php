<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade calcultor</title>
</head>
<body>
    <!--Grade Calculator Demonstrating Variable Scope -->
    <center>
        <h1>Grade Calculator</h1>
        <?php
        $passing_Marks = 40;

        function calculateGrade($marks)
        {
            global $passing_Marks;
            
            $grade='';

            if($marks >= 90)
            {
                $grade='A+';
                
            }
            elseif ($marks >=75)
            {
                $grade = 'A';
            }
            elseif($marks >=  60)
            {
                $grade = 'B';
            }
            elseif($marks >= $passing_Marks)
            {
                $grade = 'C';
            }
            else
            {
                $grade = 'Fail';
            }


            return $grade;
        }
        // ----Main Program---
        $stud_marks = 78;
        echo "<h2>Student Marks : ".$stud_marks;
        echo "<br>Passing Marks : ".$passing_Marks;
        echo "<br>Final Grade : ".calculateGrade($stud_marks)."</h2>";
         
        ?>
</center>
</body>
</html>