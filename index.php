<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Hotel PaKoPa</h1>
    <h1>Dobrodošli</h1>
        <form action="index.php">
        <input type="submit" value="Početna">
        </form>
        <form action="onama.php">
        <input type="submit" value="O nama">
        </form>
        <form action="kontakt.php">
        <input type="submit" value="Kontakt">
        </form>
        <form action="prijava.php">
        <input type="submit" value="Prijava">
        </form>
        <form action="registracija.php">
        <input type="submit" value="Registracija">
        </form>

        <?php
include_once 'footer.php';
?>