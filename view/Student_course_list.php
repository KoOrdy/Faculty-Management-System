<?php
include '../controllers/listCoursesController.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Course List</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
            margin-top: 25px;
            padding: 15px;
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

        }
    </style>
</head>

<body>
    <h1>Course List</h1>
    <table>
        <thead>
            <tr>
                <th>StudentID</th>
                <th>Name</th>
                <th>CourseID</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $num = $_SESSION['numbers'];
            for ($i = 0; $i < $num; $i++) {
                ?>

                <tr>
                    <td>
                        <?php echo $_SESSION['Studens'][$i]['StudentID'] ?>
                    </td>
                    <td>
                        <?php echo $_SESSION['Studens'][$i]['Name'] ?>
                    </td>
                    <td>
                        <?php echo $_SESSION['Studens'][$i]['CourseID'] ?>
                    </td>
                </tr>
            <?php } ?>

        </tbody>

    </table>

</body>

</html>