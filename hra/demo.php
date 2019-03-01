<form method="POST">
    Jmeno: <input type="text"name="jmeno"><br>
    Heslo: <input type="password"name="heslo"><br>
    <input type="checkbox"name="checkBox"> Souhlasim<br>
    <input type="submit"><br>
</form>
<?php
echo 'ahoj' . $_POST['jmeno'];
?>
