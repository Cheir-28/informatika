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

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="users.php">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="users.php">Home(users)</a></li>
      <li><a href="subjects.php">subjects</a></li>
      <li><a href="login.php">login</a></li>
      <li><a href="pupildoessubject.php">pupildoessubject</a></li>
      <li><a href="selectoptions.php">selectoptions</a></li>
      <li><a href="showoptions.php">showoptions</a></li>
    </ul>
  </div>
</nav>

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

