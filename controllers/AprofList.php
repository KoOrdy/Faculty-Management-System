<?php
include_once '../models/DatabaseClass.php';
$db = new database;
$numrows = 0;

if (isset($_POST["search"])) {
    $department = $_POST['department'];

    $sql = "SELECT * FROM `prof` WHERE Department='$department'";
    $result = $db->display($sql);
    $numrows = $db->check($sql);


}

?>