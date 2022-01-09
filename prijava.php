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
        Prijavite se podacima dobivenima od hotela.
    </p>

        <input type="text" name="korisnickoIme"
        placeholder="Korisničko ime"><br>
        <input type="password" name="zaporka" placeholder="Zaporka"><br><br>
        <form action="pocetnaStudent.html">
        <input type="submit" value="Prijava kao student">
        </form>
        <?php
include_once 'footer.php';
?>