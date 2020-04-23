<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>1 klausimas</p>
        <p>2 + 2 = ?</p>
        <form action="task2.php" method="POST">
            <input type="text" name="a1" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
