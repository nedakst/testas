<?php
session_start();
include ('db.php');

if (isset($_POST['act'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Vartotojo patikrinimas, slaptažodžio sutapimas
    $sql = "SELECT * FROM users WHERE user ='$user' AND pass='$pass'";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    $_SESSION['user'] = $user;

    if ($count == 1) {
        echo 'Sveiki.<br>';
    } else {
        echo "Neteisingi prisijungimo duomenys.";
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="task1.php">Testas</a>
        <a href="pazymiai.php">Pažymiai</a>
    </body>
</html>
