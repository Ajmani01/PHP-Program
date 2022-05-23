<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=<?php echo $_SERVER['PHP_SELF']?> method= POST>
     Name:<input type="text" name ="fname">
     RollNo:<input type="text" name="roll">
     <input type="submit" name="submit">
    </html>
    <?php
    if(isset($_POST['submit']))
    {

        echo $_POST['fname'];
        echo $_POST['roll'];
    }
    ?>

    </form>
    
</body>