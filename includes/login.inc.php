<?php

if(isset($_POST["submit"])){
$korisnickoIme = $_POST["korisnickoIme"];
$zaporka = $_POST["zaporka"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(emptyInputLogin($korisnickoIme, $zaporka) !== false){
    header("location: ../prijava.php?error=emptyinput");
    exit();
  }

  loginUser($conn, $korisnickoIme, $zaporka);

}
else{
   header("location: ../prijava.php?error=krivilogin");
   exit(); 
}
