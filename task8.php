<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a7 = $_POST['a7'];
$_SESSION['a7'] = $a7;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>8 klausimas</p>
        <p>15 / 5 = ?</p>
        <form action="task9.php" method="POST">
            <input type="text" name="a8" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
