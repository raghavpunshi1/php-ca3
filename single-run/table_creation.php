<!DOCTYPE html>
<html>
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
    //we are connecting php to phpmyadmin mySQL 
    $server="localhost";
    $username="root";
    $password="";
    $dbname="ca3db";

    //establishing connection //procesural method
    $connect=new mysqli($server,$username,$password,$dbname);    //$obj=new mysqli($s,$u,$p); //object method
    if($connect){
        echo "connection successfull<br>";
    }else{
        echo "error!<br>";
    }

    $create_table="CREATE TABLE contactlist(contactName VARCHAR(20), phone INT(10), email VARCHAR(30));";
    
    if($connect->query($create_table)) echo "Table created";
    else "Table creation FAILED!!!";

    ?>
</body>
</html>