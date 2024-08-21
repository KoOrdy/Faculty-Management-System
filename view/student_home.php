<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .button-container {
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #2980b9;
        }
    </style>
    <title>Button Page</title>
</head>

<body>


    <div class="button-container">
        <h1>student list</h1>
        <a href="Student courses.php" class="button">course list</a>
        <a href="transcript.php" class="button">Ttanscript</a>
        <a href="Exam.php" class="button">Exam</a>
        <!-- <a href="page4.html" class="button">Button 4</a> -->
        <form action="../controllers/logout.php" method="post">
            <button class="button" name="logout" class="button2">Log Out</button>
        </form>
    </div>

</body>

</html>