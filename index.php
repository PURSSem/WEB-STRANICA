<?php
session_start();
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

        <?php
include_once 'footer.php';
?>