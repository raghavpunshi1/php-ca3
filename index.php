<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
</head>

<body>
    <div class="container container-box">
        <form action="loginsuccess.php" method="post">
            What's your name?
            <br><input type="text" name="name" required><br><br>
            Please enter the admin key to <br>access the contact list:<br>
            <input type="number" name="adminkey" required><br><br>
            <input type="submit" value="ENTER!" class="btn btn-primary">
        </form>
    


    </div>
       
    
</body>

</html>