<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a3 = $_POST['a3'];
$_SESSION['a3']=$a3;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>4 klausimas</p>
        <p>15 + 3 = ?</p>
        <form action="task5.php" method="POST">
            <input type="text" name="a4" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
