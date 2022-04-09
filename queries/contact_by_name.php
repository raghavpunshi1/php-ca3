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
    

    $uname=$_REQUEST['contactname'];
    echo "Contact details:<br>";

    $my_query="SELECT contactname,phone,email FROM contactlist WHERE contactname='$uname'";
    if($result=$connect->query($my_query)->fetch_assoc()){
       echo "<h1>Contact name: ".$result['contactname']."<br>Phone number: ".$result['phone']."<br>Email: ".$result['email']."</h1>";
    }
?>

<form action="../home.html">
    <input type="submit" value="Home">
</form>
    </body>
</html>