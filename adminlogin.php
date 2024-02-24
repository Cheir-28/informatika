<?php
session_start();

        $_SESSION['name'] = 'admin';        
        unset($_SESSION['backURL']);
        header('Location: login.php');

?>
