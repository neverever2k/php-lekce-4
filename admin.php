<?php
session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {

}
else {
    echo "<h1>pristup zamitnut</h1>";
    exit();
}

?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>
<body>
<div class="jumbotron" style="background-color: white;"></div>
<div class="container" style="background-color: #fffafd;">

    <?php
    echo "Vitejte, ", $_SESSION['login'];
       echo "<p></p>";


       foreach($_SESSION['data'] as $hodnota => $popis) {
           echo  "
        <p>$hodnota $popis</p> ";
       }
    ?>

    <a href="logout.php">Odhlasit</a>
    </div>
</div>
</body>