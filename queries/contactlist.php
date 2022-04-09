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
        $s='localhost';
        $u='root';
        $p='';
        $d='ca3db';
        $connect=new mysqli($s,$u,$p,$d);
        if($connect) echo "connected to the database<br><br>";

        $my_query='SELECT * FROM contactlist';
        $result=$connect->query($my_query);

        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "Username: <b>".$row['contactName']."</b>  Email: <b>".$row['email']."</b>  Phone: <b>".$row['phone']."</b><br><br>";
            }
        }
    ?>
    <a href="../home.html"><button>HOME</button></a>
</body>
</html>