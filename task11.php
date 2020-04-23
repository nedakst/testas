<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a10 = $_POST['a10'];
$_SESSION['a10'] = $a10;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>11 klausimas</p>
        <p>10 * 5 = ?</p>
        <form action="task12.php" method="POST">
            <input type="text" name="a11" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
