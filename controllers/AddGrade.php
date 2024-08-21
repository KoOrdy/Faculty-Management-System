<?php
include '../models/DatabaseClass.php';
include '../view/ProfGrades.php';
$db = new database();
$student_id = $_GET['id'];
// $CourseID=[]
$grade = $_POST['grade'];
$sql = "INSERT INTO `transcript`(`StudentID`, `CourseID`, `Grade`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";


?>