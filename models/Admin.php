<?php
include 'user.php';
class Admin extends users
{
    private $db;
    function __construct()
    {
        include_once 'DatabaseClass.php';
        $this->db = new database();
    }

    function addLevel($LevelID)
    {
        $sql = "insert into levels(LevelID) values ('$LevelID')";
        $this->db->insert($sql);
    }

    function addSubject($subjectName, $subID, $Description, $Level, $Semester)
    {
        $sql = "insert into subject(subjectName, subID, Description, Level, Semester) values ('$subjectName', '$subID', '$Description', '$Level', '$Semester')";
        $this->db->insert($sql);


    }

    function addprofessor($FirstName, $LastName, $Degree, $Gender, $NationalID, $DateOfBirth, $Department, $Username, $Password, $type, $ProfessorID)
    {
        $sql2 = "INSERT INTO user(name, Username, Password, type) VALUES ('$FirstName', '$Username', '$Password', '$type')";
        $sql = "INSERT INTO prof(FirstName, LastName, Degree, Gender, NationalID, DateOfBirth, Department, Username, Password, ProfessorID) VALUES ('$FirstName', '$LastName', '$Degree', '$Gender', '$NationalID', '$DateOfBirth', '$Department', '$Username', '$Password', LAST_INSERT_ID())    ";
        $this->db->insert($sql2);
        $this->db->insert($sql);


    }

    function addcorse($course, $Subject, $Professor, $Room, $Day, $Time, $hours)
    {
        $sql = "insert into course(CourseID,SubjectID, ProfessorID, Room, Day, Time, hours) values ('$course','$Subject', '$Professor', '$Room', '$Day', '$Time', '$hours')";
        $this->db->insert($sql);


    }

    function DeleteProf($ProfessorID)
    {
        $sql = "DELETE FROM user WHERE id = '$ProfessorID'";

        $this->db->delete($sql);


    }

    function UpdateProf($ProfessorID, $FirstName, $LastName, $Degree, $Gender, $NationalID, $DateOfBirth, $Department)
    {

        $sql = "UPDATE `prof` SET`FirstName`='$FirstName',`LastName`='$LastName',`Degree`='$Degree',`Gender`='$Gender',`NationalID`='$NationalID',`DateOfBirth`='$DateOfBirth',`Department`='$Department' WHERE ProfessorID='$ProfessorID'";
        $sql2 = "UPDATE `user` SET `name`='$FirstName' WHERE id ='$ProfessorID'";
        $this->db->update($sql);
        $this->db->update($sql2);

    }

    function showProfByDepartment($department)
    {

        $sql = "SELECT * FROM `prof` WHERE Department='$department'";
        $this->db->display($sql);


    }

    function showDataStudent()
    {

        $sql = "SELECT * FROM `students`";
        $this->db->display($sql);


    }

    function DeleteStudent($StudentID)
    {
        $sql = "DELETE FROM user WHERE id = '$StudentID'";

        $this->db->delete($sql);


    }


}
?>