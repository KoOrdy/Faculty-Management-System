<?php
include '../controllers/RegisterCourseController.php';
include '../controllers/AllcoursesController.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Register Course</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h1 {
            color: #333;
            transform: translate(20px, -120px)
        }
    </style>
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
            transform: translate(-550px, 475px);
            width: 550px;
            height: 60vh;
        }

        form {
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
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Courses Information</h1>

    <table>
        <thead>
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Doctor</th>
                <th>Room</th>
                <th>Day</th>
                <th>Time</th>
                <th>Credit Hours</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // session_start();
            $num = $_SESSION['num'];
            for ($i = 0; $i < $num; $i++) {

                ?>
                <tr>
                    <td>
                        <?php echo $_SESSION['course'][$i]['SubjectID'] ?>
                    </td>
                    <td>
                        <?php echo $_SESSION['course'][$i]['subjectName'] ?>
                    </td>
                    <td>
                        <?php echo $_SESSION['course'][$i]['ProfessorID'] ?>
                    </td>
                    <td>
                        <?php echo $_SESSION['course'][$i]['Room'] ?>
                    </td>
                    <td>
                        <?php echo $_SESSION['course'][$i]['Day'] ?>
                    </td>
                    <td>
                        <?php echo $_SESSION['course'][$i]['Time'] ?>
                    </td>
                    <td>
                        <?php echo $_SESSION['course'][$i]['hours'] ?>
                    </td>


                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="container">
        <form action="../controller/RegisterCourseController.php" id="registrationForm" method="post">
            <h2>Course Registration</h2>
            <label for="ID.Student">ID.Student:</label>
            <input type="text" id="ID.Student" name="id" required>
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>

            <!-- <label for="email">Email:</label>
            <input type="email" id="email" name="email" required> -->
            <!-- <label for="Password">Password:</label>
            <input type="password" id="Password" name="password" required> -->
            <label for="Course Code">Course Code:</label>
            <input type="text" id="Course Code" name="Course_Code" required>

            <!-- <label for="course">Select Course:</label>
            <select id="course" name="course" required>
                <option value="" disabled selected>Select a course</option>
                <option value="course1">Introduction to Computer Science</option>
                <option value="course2">Calculus II </option>
                <option value="course2">Information System </option>
            </select> -->

            <button type="submit" name="submit" value="submit">Register</button>

        </form>
    </div>

</body>

</html>