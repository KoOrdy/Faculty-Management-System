<?php
include '../models/DatabaseClass.php';
$db = new database();
$numrows = 0;
$result = [];
$CourseID = ' ';
$CourseID2 = " ";
if (isset($_POST["submit"])) {
    $CourseID = $_POST['courseId'];
    $sql = "SELECT answers.StudentID ,enrollments.Name,  answers.AnswerFile from answers  join enrollments on answers.StudentID=enrollments.StudentID WHERE enrollments.CourseID='$CourseID'";
    $result = $db->display($sql);
    $numrows = $db->check($sql);
}
if (isset($_POST["submit2"])) {
    $StudentID = $_GET['id'];
    $CourseID2 = $_POST['courseId'];
    $Grade = $_POST['grade'];
    $sql2 = "INSERT INTO `transcript`( `StudentID`, `CourseID`, `Grade`) VALUES ('$StudentID','$CourseID','$Grade')";
    $db->insert($sql2);


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Assignment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-top: 0;
            color: #3498db;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        textarea {
            width: 100%;
            height: 50px;
            margin-bottom: 16px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 10px;
        }

        .actions {
            text-align: center;
            margin-top: 20px;
        }

        .actions button {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .actions button:hover {
            background-color: #2980b9;
        }

        .button {

            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Grade Assignment</h2>
        <form method="post">
            <label for="courseId">Course ID:</label>
            <textarea id="courseId" name="courseId" placeholder="Enter Course ID"></textarea>
            <input type="submit" name="submit" value="Load Students">
        </form>

        <?php if ($numrows) { ?>
            <form method="post">
                <table>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Answer</th>
                        <th>Grade</th>
                    </tr>
                    <?php foreach ($result as $index => $row) { ?>
                        <tr>
                            <td>
                                <?= $row['StudentID'] ?>
                            </td>
                            <td>
                                <?= $row['Name'] ?>
                            </td>
                            <td>
                                <?= $row['AnswerFile'] ?>
                            </td>
                            <td>
                                <input type="number" name="grades" placeholder="Enter grade" required>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <input type="submit" name="submitAll" value="Add Grades">
            </form>
        <?php } else { ?>
            <h1>No results found</h1>
        <?php } ?>
    </div>
</body>

</html>