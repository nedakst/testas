<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a1 = $_POST['a1'];
$_SESSION['a1']=$a1;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>2 klausimas</p>
        <p>2 + 8 = ?</p>
        <form action="task3.php" method="POST">
            <input type="text" name="a2" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
