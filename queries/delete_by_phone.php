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
    //we are connecting php to phpmyadmin mySQL
    $s="localhost";
    $u="root";
    $p="";
    $d="ca3db";
 
    //establishing connection using object oriented method
    $connect=new mysqli($s,$u,$p,$d); //object method
    if($connect) echo "connection successfull<br>";
    else echo "error!<br>";
    

    $uphone=$_REQUEST['phone'];
    

    $my_query="DELETE FROM contactlist WHERE phone='$uphone'";
    $result=$connect->query($my_query);
 
?>

<form action="../home.html">
    <input type="submit" value="Home">
</form>
    </body>
</html>