<?php
include '../models/Admin.php';
$admin = new Admin();
$StudentID = $_GET['id'];

$admin->DeleteStudent($StudentID);
header('Location: ../view/admin_student_data.php');





?>