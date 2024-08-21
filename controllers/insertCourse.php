<?php

include '../models/Admin.php';

$admin = new Admin();
if (isset($_POST["submit"])) {


    $course = $_POST['course'];
    $Subject = $_POST['Subject'];
    $Professor = $_POST['Professor'];
    $Room = $_POST['Room'];
    $Day = $_POST['Day'];
    $Time = $_POST['Time'];
    $hours = $_POST['hours'];

    $admin->addcorse($course, $Subject, $Professor, $Room, $Day, $Time, $hours);


    header('Location: ../view/adminCourse.php');
    exit;
}
?>