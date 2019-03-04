<?php
session_start();

if (isset($_SESSION['loggedIn'])) {
    echo "Prihlasen";}
else if(unset($_SESSION['loggedIn'])){
    echo "neprihlasen";}
}
?>