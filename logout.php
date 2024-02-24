
<?php
session_start();
if(isset($_SESSION['ble']) OR isset($_SESSION['heslo_zadany']) OR isset($_SESSION['heslo_fetched']) OR isset($_SESSION['name']) OR isset($_SESSION['b']))
{
    unset($_SESSION['ble']);
    unset($_SESSION['heslo_zadany']);
    unset($_SESSION['heslo_fetched']);
    unset($_SESSION['name']);
    unset($_SESSION['b']);
}
header("Location: login.php");
?>

    
    