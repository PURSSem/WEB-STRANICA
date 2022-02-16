<?php
session_start();
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styleskontakt.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAKOPA: Kontakt</title>
</head>
<body>
    <h1>Kontakt</h1>
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
        Tin Panadić tpanadic@tvz.hr
    </p>
    <p>
        Hrvoje Kolar hkolar@tvz.hr

    </p>
    <p>
        Ante Pavković apavkovic@tvz.hr
    </p>
    <?php
include_once 'header.php';
?>