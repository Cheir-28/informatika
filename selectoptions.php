<?php
/*session_start(); 
if (!isset($_SESSION['name']))
{   
    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
    header("Location:login.php");
}*/
?>


<!DOCTYPE html>
<html>
<head>
    <h1>User Options</h1>
</head>
<body>

<form action="showoptions.php"  method = "post">

  Student:<select name="Name">
    <?php
	include_once('connection.php');
	$stmt = $conn->prepare("SELECT * FROM TblUsers WHERE role=0 ORDER BY Surname ASC");
	$stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo('<option value = '. $row["UserID"].'> '.$row["Forename"]." ".$row["Surname"]."</option>");
	}
   ?>	
</select>

  <input type="submit" value="View options">
</form>

</body>
</html>

