<?php
include_once 'header.php';
?>
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
        <?php
        if(isset($_SESSION["username"])){
          echo "<li><a href='upravljanje.php'>Upravljanje</a></li>";
          echo "<li><a href='includes/logout.inc.php'>Odjava</a></li>";
      }
      else{
        echo "<li><a href='prijava.php'>Prijava</a></li>";
        echo "<li><a href='registracija.php'>Registracija</a></li>";
      }
        ?>
    <p>
        Hotel PaKoPa je sustav razvijen od strane studenata specijalističkog studija 
        Mehatronike i Robotike. Web stranica komunicira s bazom podataka i udaljenim hardware-om.
        Prijavom na sustav moguće je otključavati vrata, upravljati rasvjetom, roletama i temperaturom. 
         
        </p>
        <?php
include_once 'footer.php';
?>