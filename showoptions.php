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
    <title>User Options</title>
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


</form>
</body>
</html>

<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT TblSubjects.Subjectname as sn FROM TblPupilstudies 
INNER JOIN TblSubjects 
ON TblSubjects.SubjectID=TblPupilstudies.SubjectID 
WHERE UserID=:selecteduser");

$stmt->bindParam(':selecteduser', $_POST["Name"]);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
        echo($row["sn"]."<br>");
}
?>


