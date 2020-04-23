<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a13 = $_POST['a13'];
$_SESSION['a13'] = $a13;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>14 klausimas</p>
        <p>25 / 5 = ?</p>
        <form action="task15.php" method="POST">
            <input type="text" name="a14" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
