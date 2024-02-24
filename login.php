<?php
session_start(); 
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
      <li><a href="selectoptions.php">selectoptions</a></li>
      <li><a href="logout.php">logout</a></li>
    </ul>
  </div>
</nav>

<form action="loginprocess_unhashed.php" method= "post">
 User name:<input type="text" name="Username"><br>
 Password:<input type="password" name="Pword"><br>
  <input type="submit" value="Login">
</form>


</body>
</html>

