<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a14 = $_POST['a14'];
$_SESSION['a14'] = $a14;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>15 klausimas</p>
        <p>14 / 7 = ?</p>
        <form action="atsakymai.php" method="POST">
            <input type="text" name="a15" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
