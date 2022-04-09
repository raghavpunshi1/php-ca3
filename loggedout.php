<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<h1>Goodbye, ".$_SESSION['user']."</h1>";

        session_unset();

// destroy the session
    session_destroy();

    echo "Session closed";

    echo "<h3><a href='index.php'>Log In!</a></h3>";
    
    ?>
</body>
</html>