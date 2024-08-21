<?php
include_once '../models/DatabaseClass.php';
$db = new database();
$sql = "SELECT * FROM students";
$result = $db->display($sql);
$numrows = $db->check($sql);


?>