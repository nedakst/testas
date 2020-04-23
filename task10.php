<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a9 = $_POST['a9'];
$_SESSION['a9'] = $a9;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>10 klausimas</p>
        <p>18 / 3 = ?</p>
        <form action="task11.php" method="POST">
            <input type="text" name="a10" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
