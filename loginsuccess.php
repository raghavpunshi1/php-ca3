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
            $name=$_REQUEST['name'];
            $adminkey=$_REQUEST['adminkey'];

            if($adminkey==12345){
                echo "<h1>Welcome, $name<br>";
                echo "<h1>You are verified.</h1>";
                $_SESSION['user']=$name;
                echo "<a href='home.html'><h1>Go Ahead!</h1></a>";
            }
            else{
                echo "<h1>Wrong Admin Key!</h1>";
            }
?>

</body>
</html>