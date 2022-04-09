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
    $uemail=$_REQUEST['email'];
    $uphone=$_REQUEST['phone'];

    echo "Data recieved<br>";
    echo "USERNAME= ",$uname,"<br>EMAIL= ",$uemail,"<br>PHONE= ",$uphone;

    $prepare_query=$connect->prepare("INSERT INTO contactlist (contactname,phone,email) VALUES (?,?,?)");
    $prepare_query->bind_param("sis",$uname,$uphone,$uemail);

    $check_query="SELECT contactname FROM contactlist WHERE phone='$uphone' or contactname='$uname'";
    $result=$connect->query($check_query);
    $rowcount=$result->num_rows;
    if($rowcount>0){
        echo "<br><h1>Contact with this phone number or contact name already exist</h1>";
    }
    else{
    if($prepare_query->execute()) echo "<br><h1>Contact registered SUCCESFULLY</h1><br>";
    else echo "<br>UNSUCCESSFULL REGISTRATION!!!";
    }

   ?>

   
   <a href="../home.html"><button>HOME</button></a>
</body>
</html>