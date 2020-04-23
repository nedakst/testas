<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a4 = $_POST['a4'];
$_SESSION['a4'] = $a4;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>5 klausimas</p>
        <p>8 / 2 = ?</p>
        <form action="task6.php" method="POST">
            <input type="text" name="a5" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
