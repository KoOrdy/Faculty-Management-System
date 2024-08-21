<?php
include '../models/Admin.php';
$admin = new Admin();
$ProfessorID = $_GET['id'];

$admin->DeleteProf($ProfessorID);
header('Location: ../view/admin_profList.php');




?>