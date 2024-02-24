<?php
include_once ("connection.php");
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM TblUsers WHERE surname =:username");
$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    if($row['Password'] == $_POST['Pword']){
        
        $_SESSION['name'] = $_POST["Username"];

        if (isset($_SESSION['backURL'])){
            $backURL = $_SESSION['backURL'];
        }else{
            $backURL= '/informatika/login.php';
        }
        header('Location: ' . $backURL);
        unset($_SESSION['backURL']);
    }else{
        header('Location: login_znovu.php');
    }
}
$conn=null;
?>
