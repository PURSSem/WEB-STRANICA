
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylesupravljanje.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAKOPA Upravljanje</title>
</head>

<body>
    <center>
 
        <h3>Stanje temperature</h3>
        <?php
        
session_start();

        echo $_SESSION['variable'];

        ?>
    </center>
    <div>
        <br>
        <br>
        <form action="index.php">
            <input type="submit" value="POČETNA">
        </form>
    </div>
</body>