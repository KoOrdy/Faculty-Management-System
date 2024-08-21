<?php
$num = [];
if (isset($_POST["submit"])) {
    include("../models/Student.php");
    if (!empty($_POST["id"]) && !empty($_POST["fullName"]) && !empty($_POST["Course_Code"])) {
        $student_id = $_POST["id"];
        $name = $_POST["fullName"];
        $course_code = $_POST["Course_Code"];
        $register = new Student();
        $num = $std->count();
        $true = $register->RegisterCourse($student_id, $name, $course_code);

        // header("location:");

    }
}

?>