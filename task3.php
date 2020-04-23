<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a2 = $_POST['a2'];
$_SESSION['a2']= $a2;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>3 klausimas</p>
        <p>2 + 13 = ?</p>
        <form action="task4.php" method="POST">
            <input type="text" name="a3" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
