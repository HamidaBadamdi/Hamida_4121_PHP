<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keyword Search</title>
</head>
<body>
    <center>
        <h1>Keyword Search in Research Abstract</h1><hr>

        <?php
            function keywordSearch($abstract , $keyword)
            {
                $lower_abstract = strtolower($abstract);
                $lower_keyword = strtolower($keyword);

                $pos = strpos($lower_abstract , $lower_keyword);

                if($pos !== false)
                {
                    //Extract Context (30 chars before and after kwyword)
                    $start = max(0 , $pos - 30);
                    $length = strlen($keyword) + 60;
                    $contecxt = substr($abstract , $start , $length);
                    
                    //Highlights all occurences of the keyword...
                    $highlighted = preg_replace(
                    "/($keyword)/i",
                    "<span style = 'background-color : yellow;'>$1</span>",
                    $contecxt
                    );

                    return "<h2>Keyword found!<br> Conext: ...$highlighted...</h2>";
                }

                
            
                else{
                return "<h3>Keyword '$keyword' not found in the context.</h3>";
            }
            }
            
            

            $abstract = "Technology is rapidly advancing, transforming industries 
            and creating innovative solutions. 
            The impact of Technology on education, healthcare, and 
            communication is enormous, making life more efficient and 
            connected.";
        
            $keyword  = "Technology";

            echo keywordSearch($abstract , $keyword);
        ?>
</center>
</body>
</html>