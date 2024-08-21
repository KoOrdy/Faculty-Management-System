<?php
include '../models/Admin.php';
$admin = new Admin();
if (isset($_POST["submit"])) {
    $subjectName = $_POST['subjectName'];
    $subID = $_POST['subID'];
    $Description = $_POST['Description'];
    $Level = $_POST['Level'];
    $Semester = $_POST['Semester'];
    $admin->addSubject($subjectName, $subID, $Description, $Level, $Semester);
    header('Location: ../view/adminsubject.php');
    exit;

}

?>