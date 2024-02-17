<!DOCTYPE html>
<html>
<head>
    
    <h1>LOGIN pls lol</h1>
    
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

    <form action="addusers.php" method = "post">
        First name:<input type="text" name="forename"><br>
        Last name:<input type="text" name="surname"><br>
        Password:<input type="password" name="passwd"><br>
        House:<input type="text" name="house"><br>
        Year:<input type="text" name="year"><br>
        
        Gender:<select name="gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        <br>
        
        <input type="radio" name="role" value="Pupil" checked> Pupil<br>
        <input type="radio" name="role" value="Teacher"> Teacher<br>
        <input type="radio" name="role" value="Admin"> Admin<br>
        <input type="submit" value="Add User">
    </form> 


</body>
</html>


<?php
//session_start(); 
//if (!isset($_SESSION['name']))
//{   
  //  $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
    //header("Location:login.php");
//}
?>

<?php
    include_once('connection.php');
    $stmt = $conn->prepare("SELECT * FROM TblUsers");
    $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
            echo($row["Forename"]." ".$row["Surname"]. " - ". $row["House"]. "<br>");
            }


?>

