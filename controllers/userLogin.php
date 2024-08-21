<?php
if (isset($_POST["submit"])) {
    include '../models/user.php';

    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = new users();
        $true = $user->login($username, $password);

        if ($true == true) {
            @$type = $_SESSION['type'];
            if ($type == 'admin') {
                header("location:../view/admin_home.php");
            } elseif ($type == 'student') {
                header("location:../view/student_home.php");
            } elseif ($type == 'professor') {
                header("location:../view/professorHome.php");
            }

        } else {
            header("location: ../view/login.php");
        }
    } else {
        header("location: ../view/login.php");
    }
}

?>