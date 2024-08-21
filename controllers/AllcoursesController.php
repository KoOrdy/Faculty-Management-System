<?php
session_start();
include("../models/Student.php");
$courses = new Student();
$result = $courses->allCourses();
$num = $courses->count();
$_SESSION['course'] = $result;
$_SESSION['num'] = $num;
// header('location:');


?>