<?php
include '../controllers/fileexamcontroller.php'
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <h1>Exam</h1>
    <?php session_start();
    echo $_SESSION['question'] ?>

    <form action="sss/insertanswercontroller" method="post">
        <label for="fileInput">Choose a file:</label>
        <input type="file" id="fileInput" name="fileInput" accept=".txt, .pdf, .docx">
        <button type="submit">Submit</button>
    </form>

</body>

</html>