<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cookie</title>
    <style>
        body{
           background-color: <?php echo $_COOKIE['color']?>;
        }
    </style>
</head>


<body>
    <h1>Cookie Example</h1>
    <h3>Time zone:Asia/Dhaka </h3>

    <hr>
    <h1>Set Cookie</h1>
    <hr>

    <form action="cookieColor.php" method="POST">
        <label>Select a color: </label>
        <input type="color" name ="color" value="<?php echo $_COOKIE['color']?>"><br><br>
        <label>Expire on: </label>
        <input type="datetime-local" name"expire"><br><br>
        <input type="submit" value="Set cookie">
    </form>

    <hr>

    <h1>Destroy Cookie</h1>

    <hr>
    <button id=>Destroy Cookie</button>




</body>
</html>