<?php
session_start();
include ('db.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$user = $_SESSION['user'];

$sql = "SELECT pazymys FROM pazymiai WHERE user = '$user'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Vartotojo $user pažymiai: <br>"; 
    while ($row = mysqli_fetch_array($result)) {
        echo $row['pazymys'] . "<br>";
    }
} else {
    echo "Vartotojas $user pažymių neturi.";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <button type="submit" name="logout"><a href="logout.php">Atsijungti</a></button>
    </body>
</html>
