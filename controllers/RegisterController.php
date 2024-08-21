<?php

include("../models/Student.php");
if (isset($_POST["submit"])) {
  if (!empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['levels']) && (!empty($_POST['age']))) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $phone = $_POST['number'];
    $level = $_POST['levels'];
    $age = $_POST['age'];
    $std = new Student();

    $std->register($name, $age, $email, $pass, $phone, $level);
    header("Location:../view/login.php");


  }
}