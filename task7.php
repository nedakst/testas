<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a6 = $_POST['a6'];
$_SESSION['a6'] = $a6;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>7 klausimas</p>
        <p>20 - 12 = ?</p>
        <form action="task8.php" method="POST">
            <input type="text" name="a7" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
