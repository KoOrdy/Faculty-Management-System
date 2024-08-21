<?php
include_once '../models/Admin.php';
$admin = new Admin();
if (isset($_POST["submit"])) {
    if (!empty($_POST['LevelID']))
        $LevelID = $_POST['LevelID'];
    $admin->addLevel($LevelID);
    header('Location: ../view/admin_AddLevel.php');


    exit;

}

?>