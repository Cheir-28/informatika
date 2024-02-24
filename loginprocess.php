<?php
session_start(); 
include_once ("connection.php");
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM TblUsers WHERE surname = :username");
$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    $hashed= $hashed_password;
    $attempt= $_POST['Pword'];
    $_SESSION['heslo_zadany'] = $attempt;
    $_SESSION['heslo_fetched'] = $hashed;

    if (password_verify($attempt,$hashed)) {
        $_SESSION["fuj"]="gr";
      } else {
        $_SESSION['ble'] = 'sajk';
      }
    
    if(password_verify($attempt,$hashed)){
        $_SESSION["name"]=$row["Surname"];
        if (!isset($_SESSION['backURL'])){
            $backURL= "/"; 
        }else{
            $backURL=$_SESSION['backURL'];
        }
        unset($_SESSION['backURL']);
        header('Location: ' . $backURL);

    }else{
        header('Location: login.php');
    }
}

$conn=null;
