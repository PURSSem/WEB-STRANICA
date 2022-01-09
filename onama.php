<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylesonama.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAKOPA: O nama</title>
</head>
<body>
    <h1>O nama</h1>
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
        Hotel PaKoPa je sustav razvijen od strane studenata specijalističkog studija 
        Mehatronike i Robotike. Web stranica komunicira s bazom podataka i udaljenim hardware-om.
        Prijavom na sustav moguće je otključavati vrata, upravljati rasvjetom, roletama i temperaturom. 
         
        </p>
        <?php
include_once 'footer.php';
?>