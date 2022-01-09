<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylesprijava.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        ::placeholder {
          color: black;
          opacity: 0.6;
        }
        
        </style>
    <title>PAKOPA Prijava</title>
</head>
<body>
    <h1>Prijava</h1>
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
    <p>
        Registracija korisnika.
    </p>
<form action="includes/registracija.inc.php" method="post">
        <input type="text" id="korisnickoIme" name="korisnickoIme"
        placeholder="Korisničko ime"><br>
        <input type="text" id="brojSobe" name="brojSobe"
        placeholder="Broj sobe"><br>
       <!-- <input type="text" id="rfid" name="rfid"
        placeholder="RFID"><br>--->
        <input type="password" id="zaporka" name="zaporka" placeholder="Zaporka"><br><br>
        <input type="password" id="zaporkaponovi" name="zaporkaponovi" placeholder="Ponovi zaporku"><br><br>
        <!-- <form action="pocetnaStudent.html">-->
        <button type="submit" name="submit">Registriraj korisnika</button>
        </form>
        <?php
include_once 'footer.php';
?>