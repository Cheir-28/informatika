<?php
//session_start(); 
//if (!isset($_SESSION['name']))
//{   
   //$_SESSION['backURL'] = $_SERVER['REQUEST_URI']; 
   //header("Location:login.php");
//}
?>

<!DOCTYPE html>
<html>
<head>
  
   <title>Login</title>
  
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
    </ul>
  </div>
</nav>

<form action="loginprocess.php" method= "post">
 User name:<input type="text" name="Username"><br>
 Password:<input type="password" name="Pword"><br>
  <input type="submit" value="Login">
</form>

<h1><?php echo $_SESSION["name"] ?></h1>

</body>
</html>

