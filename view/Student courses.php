<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Student courses</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            align-items: center;
            justify-content: center;
            display: flex;
            height: 100vh;

        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form1 {
            max-width: 400px;
            margin: 0 auto;
        }

        .form2 {
            max-width: 400px;
            margin: 0 auto;
        }

        h2 {
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
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transform: translate(20px, 5px);

        }

        button:hover {
            background-color: #3498db;
        }

        .s {
            transform: translate(-1px, 0px);
        }
    </style>
</head>

<body>
    <div class="courses">
        <h1 class="s">Student courses</h1>
        <form class="form2" action="Student_course_list.php">
            <p><button type="submit">Courses List</button></p>
        </form>
        <form class="form1" action="Regiser Course.php">
            <p><button type="submit">Register Course</button></p>
            <link href="Regiser Course.php">
        </form>
    </div>
</body>

</html>