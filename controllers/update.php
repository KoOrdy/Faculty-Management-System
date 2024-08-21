<?php
include '../models/Admin.php';
$admin = new Admin();
if (isset($_POST["submit"])) {
    $ProfessorID = $_GET['id'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Degree = $_POST['Degree'];
    $Gender = $_POST['Gender'];
    $NationalID = $_POST['NationalID'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $Department = $_POST['Department'];
    $admin->UpdateProf($ProfessorID, $FirstName, $LastName, $Degree, $Gender, $NationalID, $DateOfBirth, $Department);
    header('Location: ../view/admin_profList.php');
    exit;
}

?>