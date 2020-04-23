<?php
session_start();
include ('db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Prisijungimas</h2>
        <form action="pasirinkimas.php" method="POST">
            Vartotojo kodas: <input type="text" name="user" placeholder="Jūsų vartotojo kodas" required><br>
            Slaptažodis: <input type="password" name="pass" placeholder="Įveskite slaptažodį" required><br>
            <input type="hidden" name="act" value="act">
            <button type="submit" name="login">Prisijungti</button>
    </body>
</html>
