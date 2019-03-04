<?php
session_start();
$prihlaseni = 'admin';
$heslo = 'top-secret';
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>programing</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>
<form method="POST">
    <div class="jumbotron" style="background-color: white;"></div>
    <div class="container" style="background-color: #fffafd;">
        <div style="font-size: 16px">
        <p>Login:</p>
            <div class="input-group mb-3" style="width:250px">
            <input type="text" name='Jmeno' class="form-control" placeholder="Login" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        <p>Heslo:</p>
            <div class="input-group mb-3" style="width:250px">
                <input type="password" name='Heslo' class="form-control" placeholder="Heslo" aria-label="Username" aria-describedby="basic-addon1">
            </div>
                <button class="btn btn-primary" type="submit">Přihlásit</button>
        </div>
</form>

        <?php
        
        if (($_POST['Jmeno']== $prihlaseni) && ($_POST['Heslo'] == $heslo)){
            $_SESSION['login'] = $_POST['Jmeno'];
            $_SESSION['data'] = ['Datum registrace:' => '2.4.2018', 'Souhlas s podmínkami:' => 'ANO', 'Počet objednávek:' => 23];
            echo "<a href='admin.php'>Prihlasit se jako Admin</a>";
        }
        else {
            echo 'Spatny Login nebo Heslo ';
        }
        ?>

    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
