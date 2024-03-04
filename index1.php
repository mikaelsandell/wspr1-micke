<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> 
    <a href="<?php echo $_SERVER['PHP_SELF']?>?name=Micke">Who am I?</a>
    
    <?php
    
    if ( !empty($_GET['name']) )
    {
        echo $_GET['name'];
    }
     ?>
    
    
</body>
</html>