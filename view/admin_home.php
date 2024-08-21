<?php
session_start();
if ($_SESSION['username'] && $_SESSION['type'] == "admin") {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                color: #fff;
            }


            .container {
                text-align: center;
                margin-bottom: 20px;
            }

            .button,
            .button2,
            .button3 {
                display: inline-block;
                padding: 15px 30px;
                margin: 10px;
                font-size: 18px;
                font-weight: bold;
                text-decoration: none;
                color: #fff;
                background-color: #3498db;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }

            .button:hover,
            .button2:hover,
            .button3:hover {
                background-color: #2980b9;
            }

            .h1 {
                margin-top: 0;
                color: black;
                font-size: 40px;
                transform: translate(0px, -85px);

            }

            .h2 {
                margin-top: 0;
                color: black;
            }
        </style>
    </head>

    <body>


        <h1 class="h1">Admin list</h1>
        <h2 class="h2">
            <?php echo 'Welcome  ' . $_SESSION['username'] . ';)'; ?>
        </h2>
        <div class="container">
            <a href="admin_AddLevel.php" class="button">Add level</a>
            <a href="adminSubject.php" class="button">Managing Subject</a>
            <a href="adminProf.php" class="button">Managing Doctors</a>
            <a href="adminCourse.php" class="button">Managing Courses</a>
            <a href="admin_profList.php" class="button">professor list</a>
            <a href="admin_student_data.php" class="button3">Student’s data</a>


        </div>
        <form action="../controllers/logout.php" method="post">
            <button name="logout" class="button2">Log Out</button>
        </form>

    </body>

    </html>
    <?php
} else {
    header("location:login.php");
    die();
}
?>