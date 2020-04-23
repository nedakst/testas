<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a8 = $_POST['a8'];
$_SESSION['a8'] = $a8;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>9 klausimas</p>
        <p>20 / 4 = ?</p>
        <form action="task10.php" method="POST">
            <input type="text" name="a9" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
