<?php
session_start();
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
     
        echo "<li><a href='includes/logout.inc.php'>Odjava</a></li>";
        
        ?>
    <p>
        Registracija korisnika.
    </p>
<form action="includes/registracija.inc.php" method="post">
        <input type="text" name="korisnickoIme"
        placeholder="Korisničko ime"><br>
        <input type="text" name="brojSobe"
        placeholder="Broj sobe"><br>
       <!-- <input type="text" id="rfid" name="rfid"
        placeholder="RFID"><br>--->
        <input type="password" name="zaporka" placeholder="Zaporka"><br><br>
        <input type="password" name="ponovizaporka" placeholder="Ponovi zaporku"><br><br>
        <!-- <form action="pocetnaStudent.html">-->
        <button type="submit" name="submit">Registriraj korisnika</button>
        </form>
<?php
if(isset($_GET["error"]))
if($_GET["error"] == "emptyinput") {
    echo "<p>Popunite sva polja</p>";
}else if($_GET["error"] == "invalidname"){
    echo "<p>Upišite ime bez znakova</p>";
}else if($_GET["error"] == "invalidbrojsobe"){
    echo "<p>Upišite postojeći broj sobe</p>";
}else if($_GET["error"] == "zaporkesenepoklapaju"){
    echo "<p>Zaporke se ne poklapaju</p>";
}else if($_GET["error"] == "stmtfailed"){
    echo "<p>Nešto nije uredu, pokušajte ponovno!</p>";
}
?>

<?php
include_once 'footer.php';
?>