<?php
session_start(); 
include_once ("connection.php");
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM tblusers WHERE surname = :username");
$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    $hashed= $row['Pword'];
    $attempt= $_POST['passwd'];
    if(password_verify($attempt,$hashed)){
        $_SESSION['name']=$row["surname"];
        if (!isset($_SESSION['backURL'])){
            $backURL= "/"; 
        }else{
            $backURL=$_SESSION['backURL'];
        }
        header('Location: ' . $backURL);
        unset($_SESSION['backURL']);
        
    }else{
        header('Location: login.php');
    }
}
$conn=null;
?>


