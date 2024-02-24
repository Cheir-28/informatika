<?php
session_start(); 
if (!isset($_SESSION['name']))
{   
    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
    header("Location:login.php");
}
?> 

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
        <li class="active"><a href="users.php">users</a></li>
        <li><a href="subjects.php">subjects</a></li>
        <li><a href="login.php">login</a></li>
        <li><a href="pupildoessubject.php">pupildoessubject</a></li>
        <li><a href="selectoptions.php">selectoptions</a></li>
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
            <option value="Agender">Agender</option>
            <option value="Androgyne">Androgyne</option>
            <option value="Androgynous">Androgynous</option>
            <option value="Attack helicopter">Attack helicopter</option>
            <option value="Bigender">Bigender</option>
            <option value="Cis">Cis</option>
            <option value="Cisgender">Cisgender</option>
            <option value="Cis Female">Cis Female</option>
            <option value="Cis Male">Cis Male</option>
            <option value="Cis Man">Cis Man</option>
            <option value="Cis Woman">Cis Woman</option>
            <option value="Cisgender Female">Cisgender Female</option>
            <option value="Cisgender Male">Cisgender Male</option>
            <option value="Cisgender Man">Cisgender Man</option>
            <option value="Cisgender Woman">Cisgender Woman</option>
            <option value="Female to Male">Female to Male</option>
            <option value="FTM">FTM</option>
            <option value="Gender Fluid">Gender Fluid</option>
            <option value="Gender Nonconforming">Gender Nonconforming</option>
            <option value="Gender Questioning">Gender Questioning</option>
            <option value="Gender Variant">Gender Variant</option>
            <option value="Genderqueer">Genderqueer</option>
            <option value="Intersex">Intersex</option>
            <option value="Male to Female">Male to Female</option>
            <option value="MTF">MTF</option>
            <option value="Neither">Neither</option>
            <option value="Neutrois">Neutrois</option>
            <option value="Non-binary">Non-binary</option>
            <option value="Other">Other</option>
            <option value="Pangender">Pangender</option>
            <option value="Trans">Trans</option>
            <option value="Trans*">Trans*</option>
            <option value="Trans Female">Trans Female</option>
            <option value="Trans* Female">Trans* Female</option>
            <option value="Trans Male">Trans Male</option>
            <option value="Trans* Male">Trans* Male</option>
            <option value="Trans Man">Trans Man</option>
            <option value="Trans* Man">Trans* Man</option>
            <option value="Trans Person">Trans Person</option>
            <option value="Trans* Person">Trans* Person</option>
            <option value="Trans Woman">Trans Woman</option>
            <option value="Trans* Woman">Trans* Woman</option>
            <option value="Transfeminine">Transfeminine</option>
            <option value="Transgender">Transgender</option>
            <option value="Transgender Female">Transgender Female</option>
            <option value="Transgender Male">Transgender Male</option>
            <option value="Transgender Man">Transgender Man</option>
            <option value="Transgender Person">Transgender Person</option>
            <option value="Transgender Woman">Transgender Woman</option>
            <option value="Transmasculine">Transmasculine</option>
            <option value="Transsexual">Transsexual</option>
            <option value="Transsexual Female">Transsexual Female</option>
            <option value="Transsexual Male">Transsexual Male</option>
            <option value="Transsexual Man">Transsexual Man</option>
            <option value="Transsexual Person">Transsexual Person</option>
            <option value="Transsexual Woman">Transsexual Woman</option>
            <option value="Two-Spirit">Two-Spirit</option>
            <option value="BTC">BTC</option>
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
    /* include_once('connection.php');
    $stmt = $conn->prepare("SELECT * FROM TblUsers");
    $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
            echo($row["Forename"]." ".$row["Surname"]. " - ". $row["House"]. "<br>");
            }*/
            

?>



    

