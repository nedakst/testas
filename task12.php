<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a11 = $_POST['a11'];
$_SESSION['a11'] = $a11;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>12 klausimas</p>
        <p>4 * 4 = ?</p>
        <form action="task13.php" method="POST">
            <input type="text" name="a12" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
