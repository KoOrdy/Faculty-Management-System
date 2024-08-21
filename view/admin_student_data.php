<?php
include '../controllers/AstudentData.php';
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if ($_SESSION['type'] == "admin") {

    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Document</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                min-height: 100vh;
            }

            table {
                width: 80%;
                margin-top: 20px;
                border-collapse: collapse;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                background: #ffffff;
                border-radius: 10px;
            }

            th,
            td {
                padding: 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            th {
                background-color: #3498db;
                color: #fff;
                font-weight: bold;
            }

            tr:nth-child(even) {
                background-color: #e0e0e0;
            }

            tr:nth-child(odd) {
                background-color: #1565c0;
                color: #fff;
            }

            tr:first-child {
                background-color: #0D47A1;
                color: #fff;
            }

            .actions {
                text-align: center;
            }

            .actions a {
                display: inline-block;
                margin: 5px;
                padding: 8px 12px;
                text-decoration: none;
                color: #fff;
                background-color: #3498db;
                border-radius: 4px;
                font-size: 14px;
            }

            .actions a:hover {
                background-color: #2980b9;
            }
        </style>
    </head>

    <body>
        <?php
        if (!$numrows) {
            echo '<p>No results found.</p>';
        } else {
            ?>
            <table class="wp-table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>PhoneNumber</th>
                    <th>Level</th>
                    <th>Delete</th>

                </tr>

                <?php for ($x = 0; $x < $numrows; $x++) { ?>
                    <tr>
                        <td>
                            <?php echo $result[$x]['StudentID']; ?>
                        </td>
                        <td>
                            <?php echo $result[$x]['Name']; ?>
                        </td>
                        <td>
                            <?php echo $result[$x]['Age']; ?>
                        </td>
                        <td>
                            <?php echo $result[$x]['Email']; ?>
                        </td>
                        <td>
                            <?php echo $result[$x]['PhoneNumber']; ?>
                        </td>
                        <td>
                            <?php echo $result[$x]['LevelID']; ?>
                        </td>
                        <td class="actions">

                            <a href="../controllers/deleteStudent.php?id=<?= $result[$x]['StudentID']; ?>">Delete</a>
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
    header("location: ../view/login.php");
}
?>