<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a12 = $_POST['a12'];
$_SESSION['a12'] = $a12;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>13 klausimas</p>
        <p>2 * 8 = ?</p>
        <form action="task14.php" method="POST">
            <input type="text" name="a13" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
