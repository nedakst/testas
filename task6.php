<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a5 = $_POST['a5'];
$_SESSION['a5']=$a5;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>6 klausimas</p>
        <p>12 / 3 = ?</p>
        <form action="task7.php" method="POST">
            <input type="text" name="a6" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
