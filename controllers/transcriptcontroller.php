<?php
session_start();
include("../models/Student.php");
$stdid = $_SESSION['id'];
$transcript = new Student();
$result = $transcript->viewtranscript($stdid);
$num = $transcript->count();
$_SESSION['transcript'] = $result;
$_SESSION['nummm'] = $num;
// header('location:');


?>