<?php
include_once '../models/Professor.php';
$pf = new professor();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $courseId = $_POST["course"];
    $questionText = $_POST["question"];

    if (empty($courseId) || empty($questionText)) {
        echo "Please fill in all fields.";
        exit;
    }
    $pf->addQuestion($courseId, $questionText);


} else {
    echo "Invalid request.";
}
?>