<?php
include '../models/Admin.php';
$admin = new Admin();
if (isset($_POST["submit"])) {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Degree = $_POST['Degree'];
    $Gender = $_POST['Gender'];
    $NationalID = $_POST['NationalID'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $Department = $_POST['Department'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $type = 'professor';

    $admin->addprofessor($FirstName, $LastName, $Degree, $Gender, $NationalID, $DateOfBirth, $Department, $Username, $Password, $type, $ProfessorID);

    header('Location: ../view/adminProf.php');
    exit;
}
?>