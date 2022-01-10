<?php
include_once 'header.php';
?>

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
        Prijavite se podacima dobivenima od hotela.
    </p>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="korisnickoIme" placeholder="Korisničko ime"><br>
        <input type="password" name="zaporka" placeholder="Zaporka"><br><br>
        <button type="submit" name="submit">Prijava</button>
   </form>
<?php
 if(isset($_GET["error"]))
     if($_GET["error"] == "emptyinput") {
        echo "<p>Popunite sva polja</p>";
        }else if($_GET["error"] == "wronglogin"){
        echo "<p>Netočno ime/broj sobe ili zaporka</p>";
        }
?>
        <?php
include_once 'footer.php';
?>