<?php

session_start();
// if(isset($_SESSION['StudentID'])){
include "../models/Student.php";
$id = $_SESSION["id"];
$list = new Student();
$row = $list->listCourse($id);
$num = $list->count();
$_SESSION['Studens'] = $row;
$_SESSION['numbers'] = $num;
// header("location :");
// }
?>