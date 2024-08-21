<?php
if (isset($_POST["logout"])) {
    include '../models/user.php';
    $user = new users();

    $user->logout();
    header("location: ../view/login.php");
}
?>