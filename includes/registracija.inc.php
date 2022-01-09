<?php

if(isset($_POST["submit"])){

  $name = $_POST["korisnickoIme"];
  $brojsobe = $_POST["brojSobe"];
  $zaporka = $_POST["zaporka"];
  $ponovizaporka = $_POST["ponovizaporka"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(emptyInputSignup($name, $brojsobe, $zaporka, $ponovizaporka) !== false){
    header("location: ../registracija.php?error=emptyinput");
    exit();
  }
  if(invalidName($name) !== false){
    header("location: ../registracija.php?error=invalidname");
    exit();
  }
  if(invalidBrojSobe($brojsobe) !== false){
    header("location: ../registracija.php?error=invalidbrojsobe");
    exit();
  }
  if(pwdMatch($zaporka, $ponovizaporka) !== false){
    header("location: ../registracija.php?error=zaporkesenepoklapaju");
    exit();
  }
 

  createUser($conn, $name, $brojsobe, $zaporka);
}

else {
     header("location: ../registracija.php");
     exit();
}
