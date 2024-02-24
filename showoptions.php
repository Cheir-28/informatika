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
