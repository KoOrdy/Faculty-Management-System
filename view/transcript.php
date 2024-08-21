<?php
include '../controllers/transcriptcontroller.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ttanscript list</title>
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
    <h1>Ttanscript list</h1>
    <table>
        <thead>
            <tr>
                <th>CourseID</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // session_start();
            $num = $_SESSION['nummm'];
            for ($i = 0; $i < $num; $i++) {
                ?>
                <tr>
                    <td>
                        <?php echo $_SESSION['transcript'][$i]['CourseID'] ?>
                    </td>
                    <td>
                        <?php echo $_SESSION['transcript'][$i]['Grade'] ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>