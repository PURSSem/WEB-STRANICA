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
         <?php
         $conn = mysqli_connect("localhost","root","","PURSprojekt");

         $sql = 'SELECT usersName FROM users';
         $results = mysqli_query($conn,$sql);
 
         $users= mysqli_fetch_all($results,MYSQLI_ASSOC);
      if(isset($_SESSION["username"])){
         if(($_SESSION["username"])=="admin"){
          echo "<li><a href='registracija.php'>Registracija</a></li>";
          echo "<li><a href='includes/logout.inc.php'>Odjava</a></li>";
        }else if(($_SESSION["username"])!="admin"){
          echo "<li><a href='upravljanje.php'>Upravljanje</a></li>";
          echo "<li><a href='includes/logout.inc.php'>Odjava</a></li>";
        }
        }else{
          echo "<li><a href='prijava.php'>Prijava</a></li>";
        }
        ?>

        <?php
include_once 'footer.php';
?>