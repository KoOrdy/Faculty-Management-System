<?php

include_once '../models/DatabaseClass.php';
include_once '../models/user.php';
$db = new database();
session_start();
if ($_SESSION['username'] && $_SESSION['type'] == "professor") {
    $ProfessorID = $_SESSION['id'];

    $sql = "SELECT * FROM course where ProfessorID='$ProfessorID'";

    $result = $db->display($sql);
    $numrows = $db->check($sql);

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Document</title>
    </head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f8f8f8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border-radius: 8px;
            margin-top: 20px;
            background-color: #fff;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>

    <body>
        <?php
        if (!$numrows) {
            echo '<p>No results found.</p>';
        } else {
            ?>
            <table>
                <tr>
                    <th>Course ID</th>
                    <th>SubjectID</th>
                    <th>Room</th>
                    <th>Day</th>
                    <th>Time</th>
                </tr>

                <?php for ($x = 0; $x < $numrows; $x++) { ?>
                    <tr>
                        <td>
                            <?php echo $result[$x]['CourseID']; ?>
                        </td>
                        <td>
                            <?php echo $result[$x]['SubjectID']; ?>
                        </td>
                        <td>
                            <?php echo $result[$x]['Room']; ?>
                        </td>
                        <td>
                            <?php echo $result[$x]['Day']; ?>
                        </td>
                        <td>
                            <?php echo $result[$x]['Time']; ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <?php
        }
        ?>
    </body>

    </html>
    <?php
} else {
    header("location:login.php");
    die();
}
?>