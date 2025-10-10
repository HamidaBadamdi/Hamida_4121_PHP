<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        //create 'uploads' directory....
        $path = "uploads/";

        
        $path = $path.basename($_FILES['fnm']['name']);

        if(move_uploaded_file($_FILES['fnm']['tmp_name'] , $path))
        {   
            echo "<center><h3 style = 'color : green'; >File Uploaded Successfully...</h3></center>";

        }
        else
        {
            echo "<center><h3 style = 'color : red'; >Sorry, File not Uploaded ! , Try again....</h3></center>";
        }

    

    }
?>