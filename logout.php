<?php
session_start();

unset($_SESSION['login']);
unset($_SESSION['data']);
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>logout</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>
<div>
<div class="jumbotron" style="background-color: white;"></div>
<div class="container" style="background-color: #fffafd;">
    <p>Jste uspesne odhlasen</p>
    <p><a href="login.php">Zpet na prihlaseni</a></p>
</div>
</div>
</body>
</html>