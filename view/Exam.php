<?php
session_start();
if (isset($_POST['submit'])) {
    $_SESSION['idstudent'] = $_POST['IDStudent'];
    $_SESSION['coursecode'] = $_POST['CourseCode'];

} ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Exam</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transform: translate(0px, 20px);
            width: 550px;
            height: 60vh;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4c5faf;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            transform: translate(149px, 18px);
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>


    <div class="container">
        <form method="post">
            <h1>Exam</h1>
            <label for="ID.Student">ID.Student:</label>
            <input type="number" id="ID.Student" name="IDStudent" required>
            <label for="fullName">Name:</label>
            <input type="text" id="fullName" name="Name" required>

            <label for="Course Code">Course Code:</label>
            <input type="number" id="Course Code" name="CourseCode" required>
            <button name="submit">Start</button>

        </form>
    </div>

</body>

</html>