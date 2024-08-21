<?php
session_start();
include("../models/Student.php");
$cid = $_SESSION['CourseID'];
$exam = new Student();
$result = $exam->viewQuestions($cid);
$_SESSION['question'] = $result;
// header('location:');