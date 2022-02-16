<?php

function emptyInputSignup($name, $brojsobe, $zaporka, $ponovizaporka){
$result;
if(empty($name) || empty($brojsobe) || empty($zaporka) || empty($ponovizaporka)){
    $result = true;
}
else{
    $result = false;
}
return $result;
}

function invalidName($name){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $name)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidBrojSobe($brojsobe){
    $result;
    if(!filter_var($brojsobe,FILTER_VALIDATE_INT)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($zaporka, $ponovizaporka){
    $result;
    if($zaporka != $ponovizaporka){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $name, $brojsobe){
    $sql = "SELECT * FROM users WHERE usersName = ? OR usersBrojSobe =?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../registracija.php?error=imevecpostoji");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss",$name, $brojsobe);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $brojsobe, $zaporka){
    $sql = "INSERT INTO users (usersName, usersBrojSobe, usersZaporka) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../registracija.php?error=stmtfailed");
        exit();
    }

    $hashedZaporka = password_hash($zaporka, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "sss", $name, $brojsobe, $hashedZaporka);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../registracija.php?error=none");
    exit();
}
function emptyInputLogin($korisnickoIme, $zaporka){
    $result;
    if(empty($korisnickoIme)|| empty($zaporka)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
    }

function loginUser($conn, $korisnickoIme, $zaporka){
    $uidExists = uidExists($conn, $korisnickoIme, $korisnickoIme);

    if($uidExists == false){
        header("location: ../prijava.php?error=wronglogin");
        exit();
    }

    $zaporkaHashed = $uidExists["usersZaporka"];
    $checkZaporka = password_verify($zaporka, $zaporkaHashed);

    if($checkZaporka == false){
        header("location: ../prijava.php?error=wronglogin");
        exit();
    }
    else if($checkZaporka == true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["username"] = $uidExists["usersName"];
        $_SESSION["brSobe"] = $uidExists["usersBrojSobe"];
        header("location: ../index.php?error=none");
        exit();
    }
}