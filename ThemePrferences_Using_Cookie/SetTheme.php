<?php
    if(isset($_POST['theme']))
    {
        $theme = htmlspecialchars($_POST['theme'], ENT_QUOTES ,'UTF-8');
        //save cookie for 10 days...

        setcookie("theme" , $theme , time() + (86400 * 10), "/");
    }
    else
    {
        $theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Applied</title>
</head>
<body style = "background-color : 
    <?= ($theme === 'dark') ? '#222' : '#fff'; ?>;
        color : <?= ($theme === 'dark') ? '#fff' : '#000'; ?>
    ">
    <center>
    <h1>Current Theme : <?=  ucfirst($theme); ?></h2>
    <h2><a href = 'ThemeSelection.html'>Change Theme</a></h2>
     <center>
</body>
</html>