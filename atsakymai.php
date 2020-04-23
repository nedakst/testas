<?php
session_start();
include ('db.php');
include ('funkcijos.php');

if (isset($_SESSION['user'])) {
    
} else {
    header("Location:index.php");
}

$a15 = $_POST['a15'];
$_SESSION['a15'] = $a15;

$a1 = $_SESSION['a1'];
$a2 = $_SESSION['a2'];
$a3 = $_SESSION['a3'];
$a4 = $_SESSION['a4'];
$a5 = $_SESSION['a5'];
$a6 = $_SESSION['a6'];
$a7 = $_SESSION['a7'];
$a8 = $_SESSION['a8'];
$a9 = $_SESSION['a9'];
$a10 = $_SESSION['a10'];
$a11 = $_SESSION['a11'];
$a12 = $_SESSION['a12'];
$a13 = $_SESSION['a13'];
$a14 = $_SESSION['a14'];
$a15 = $_SESSION['a15'];

$count = 0;
$arr1 = array();

if ($a1 == 4) {
    $count = $count + 1;
    $var1 = array("1. " => $a1);
    array_push($arr1, $a1);
} else {
    echo "1 klausimas atsakytas neteisingai, ats yra 4, o atsakyta: $a1<br>";
}
if ($a2 == 10) {
    $count = $count + 1;
    array_push($arr1, $a2);
} else {
    echo "2 klausimas atsakytas neteisingai, ats yra 10, o atsakyta: $a2<br>";
}
if ($a3 == 15) {
    $count = $count + 1;
    array_push($arr1, $a3);
} else {
    echo "3 klausimas atsakytas neteisingai, ats yra 15, o atsakyta: $a3<br>";
}
if ($a4 == 18) {
    $count = $count + 1;
    array_push($arr1, $a4);
} else {
    echo "4 klausimas atsakytas neteisingai, ats yra 18, o atsakyta: $a4<br>";
}
if ($a5 == 4) {
    $count = $count + 1;
    array_push($arr1, $a5);
} else {
    echo "5 klausimas atsakytas neteisingai, ats yra 4, o atsakyta: $a5<br>";
}
if ($a6 == 4) {
    $count = $count + 1;
    array_push($arr1, $a6);
} else {
    echo "6 klausimas atsakytas neteisingai, ats yra 4, o atsakyta: $a6<br>";
}
if ($a7 == 8) {
    $count = $count + 1;
    array_push($arr1, $a7);
} else {
    echo "7 klausimas atsakytas neteisingai, ats yra 8, o atsakyta: $a7<br>";
}
if ($a8 == 3) {
    $count = $count + 1;
    array_push($arr1, $a8);
} else {
    echo "8 klausimas atsakytas neteisingai, ats yra 3, o atsakyta: $a8<br>";
}
if ($a9 == 5) {
    $count = $count + 1;
    array_push($arr1, $a9);
} else {
    echo "9 klausimas atsakytas neteisingai, ats yra 5, o atsakyta: $a9<br>";
}
if ($a10 == 6) {
    $count = $count + 1;
    array_push($arr1, $a10);
} else {
    echo "10 klausimas atsakytas neteisingai, ats yra 6, o atsakyta: $a10<br>";
}
if ($a11 == 50) {
    $count = $count + 1;
    array_push($arr1, $a11);
} else {
    echo "11 klausimas atsakytas neteisingai, ats yra 50, o atsakyta: $a11<br>";
}
if ($a12 == 16) {
    $count = $count + 1;
    array_push($arr1, $a12);
} else {
    echo "12 klausimas atsakytas neteisingai, ats yra 16, o atsakyta: $a12<br>";
}
if ($a13 == 16) {
    $count = $count + 1;
    array_push($arr1, $a13);
} else {
    echo "13 klausimas atsakytas neteisingai, ats yra 16, o atsakyta: $a13<br>";
}
if ($a14 == 5) {
    $count = $count + 1;
    array_push($arr1, $a14);
} else {
    echo "14 klausimas atsakytas neteisingai, ats yra 5, o atsakyta: $a14<br>";
}
if ($a15 == 2) {
    $count = $count + 1;
    array_push($arr1, $a15);
} else {
    echo "15 klausimas atsakytas neteisingai, ats yra 2, o atsakyta: $a15<br>";
}

$pazymys = ($count / 15) * 10;
echo"Gautas pažymys: " . $pazymys;

$string = arraytostring($arr1);

$sql = 'INSERT INTO pazymiai (ID, user, pazymys, atsakymai) VALUES ( "' . '", "' . $_SESSION['user'] . '", "' . $pazymys . '", "' . $string . '")';
$res = mysqli_query($db, $sql);
if ($res == TRUE) {
    echo "<br> Sėkmingai užbaigėte testą!";
} else {
    printf("Įvyko klaida: %s\n", mysqli_error($db));
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
