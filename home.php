<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="title" content="">
    <meta name="author" content="Irina Tiron">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
   <?php 
    require('sec.php');
    session_start();
    echo $_SESSION["user"];
    ?>
    <a href="logout.php">Log out</a>
</body>

</html>
