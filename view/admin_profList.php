<?php
include '../controllers/AprofList.php';
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if ($_SESSION['type'] == "admin") {
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search Professors by Department</title>
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
                margin: 16px 0 8px;
            }

            input[type="text"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 16px;
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
                text-align: left;
            }

            th {
                background-color: #4caf50;
                color: white;
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

        <div class="container">
            <h2>Search Professors by Department</h2>
            <form id="searchForm" method="post">
                <label for="department">Department:</label>
                <input type="text" id="department" name="department" placeholder="Enter department name">

                <input type="submit" value="Search" name="search" class="buttons">
            </form>

            <div id="searchResults"></div>
            <?php
            if (!$numrows) {
                echo '<p>No results found.</p>';
            } else {
                ?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Degree</th>
                        <th>Gender</th>
                        <th>National ID</th>
                        <th>Date Of Birth</th>
                        <th>Department</th>
                        <th>Opreation</th>
                    </tr>


                    <?php for ($x = 0; $x < $numrows; $x++) { ?>
                        <tr>

                            <td>
                                <?php echo $result[$x]['ProfessorID']; ?>

                            </td>
                            <td>
                                <?php echo $result[$x]['FirstName']; ?>

                            </td>
                            <td>
                                <?php echo $result[$x]['LastName']; ?>

                            </td>
                            <td>
                                <?php echo $result[$x]['Degree']; ?>

                            </td>
                            <td>
                                <?php echo $result[$x]['Gender']; ?>

                            </td>
                            <td>
                                <?php echo $result[$x]['NationalID']; ?>

                            </td>
                            <td>
                                <?php echo $result[$x]['DateOfBirth']; ?>

                            </td>
                            <td>
                                <?php echo $result[$x]['Department']; ?>

                            </td>

                            <td class="actions">


                                <a href="admin_updateprof.php?id=<?= $result[$x]['ProfessorID']; ?>">Update</a>
                                <a href="../controllers/delete.php?id=<?= $result[$x]['ProfessorID']; ?>">Delete</a>


                            </td>

                        </tr>

                    <?php } ?>

                </table>

                <?php
            }
            ?>
        </div>
    </body>

    </html>
    <?php
} else {
    header("location: ../view/login.php");
}
?>