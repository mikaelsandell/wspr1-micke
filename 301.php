<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.01</title>
</head>

<?php
    /* if (time() % 2 == 0) {
        $color = "blue";
    } else {
        $color = "yellow";
    }   */

    if ( empty($_POST['color']) )
    {
        // Default value if user has not chosen a color
        $color = "white";
    }
    else
    {
        // Set the chosen color
        $color = $_POST['color'];
    }
    
    
?>

<body style="background-color:  <?php echo $color;?>"> 
    <h1>What a nice color :-)</h1>
    <a href="301.php?color=yellow">I choose yellow</a><br>
    <a href="301.php?color=blue">I choose blue</a>

    <form action="301.php" method="POST">
        <label>Choose your background color ... preetty please</label>
        <input type="text" name="color">
        <input type="submit" name="Submit" value="submit">

    </form>

    
    
</body>
</html>