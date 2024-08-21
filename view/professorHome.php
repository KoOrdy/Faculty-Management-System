<?php
session_start();
if ($_SESSION['username'] && $_SESSION['type'] == "professor") {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Professor Dashboard</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
            }

            h1 {
                margin-bottom: 20px;
            }

            a {
                text-decoration: none;
            }

            button {
                padding: 10px 20px;
                font-size: 16px;
                margin: 5px;
                cursor: pointer;
                border: none;
                border-radius: 5px;
                color: #fff;
                background-color: #3498db;
            }

            form {
                margin-top: 20px;
            }
        </style>
    </head>

    <body>

        <h1>Professor List</h1>
        <a href="courseView.php"><button>Course Overview</button></a>
        <a href="questionSetting.php"><button>Question Setting</button></a>
        <a href="profGrades.php"><button>Grade Management</button></a>
        <form action="../controllers/logout.php" method="post">
            <button name="logout">Log Out</button>
        </form>

    </body>

    </html>

    <?php
} else {
    header("location:login.php");
    die();
}
?>