<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  1  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>BCA MarkSheet</title>
</head>
<body style="background-color:lightblue;">
<?php
    // PHP code to assign the marks for each subject...
    $asp = 75;
    $android = 81;
    $ml = 93;
    $proj = 90;
    $pract1 = 89;
    $pract2 = 89;

?>

    <center>
    <h1><i>BCA MarkSheet</i></h1>
<!--HTML Table code to diplay the marksheet in tabular format -->
    <table class='table table bordered' >
        <tr>

        
        <h3><th>Subject</th>
        <th>Marks</th></h3>
        </tr>
            
           <tr>
            <td>ASP.NET</td>
            <td><?php echo $asp ?></td>
            
</tr>
        <tr>
        <td>ANDROID</td>
        <td><?php echo $android ?></td>
        </tr>
          
        <tr>
        <td>MACHINE LEARNING</td>
        <td><?php echo $ml ?></td>
        </tr>
        
        <tr>
        <td>PRACTICAL-1</td>
        <td><?php echo $pract1 ?></td>
        </tr>
        
        <tr>
        <td>PRACTICAL-2</td>
        <td><?php echo $pract2 ?></td>
        </tr>
        
        <tr>
        <td>PROJECT</td>
        <td><?php echo $proj ?></td>
        </tr>

        <tr>
        <td><b>Total : </b></td>
        <!--Count the total marks... -->
        <td><?php echo $asp + $android + $ml + $pract1 + $pract2 + $proj ?></td>
        </tr>

        <tr>
        <td><b>Percentage : </b></td>
        <!--Count the percentahe... -->
        <td><?php echo ($asp + $android + $ml + $pract1 + $pract2 + $proj) / 6 ?></td>
        </tr>


      
            

        

</table>
</center>
</body>
</html>
