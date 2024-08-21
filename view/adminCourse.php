<?php
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
        <title>Create Course</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            form {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 400px;
                /* Adjusted width */
            }

            label {
                display: block;
                margin-bottom: 8px;
            }

            input,
            select {
                width: 100%;
                padding: 8px;
                margin-bottom: 16px;
                box-sizing: border-box;
            }

            .button {
                background-color: #007bff;
                color: #fff;
                padding: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                padding: 8px;
                font-size: 14px;
                width: 100px;
            }
        </style>
    </head>

    <body>
        <form action="../controllers/insertCourse.php" id="courseForm" method="post">
            <h2>Create Course</h2>
            <label for="subject">Course ID:</label>
            <input type="text" id="subject" name="course" required>

            <label for="subject">Subject ID:</label>
            <input type="text" id="subject" name="Subject" required>

            <label for="professor">Professor ID:</label>
            <input type="text" id="professor" name="Professor" required>

            <label for="room">Room:</label>
            <input type="text" id="room" name="Room" required>

            <label for="day">Day of the Week:</label>
            <select id="day" name="Day" required>
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
            </select>

            <label for="time">Time:</label>
            <input type="time" id="time" name="Time" required>

            <label for="duration">Duration (hours):</label>
            <input type="number" id="duration" min="2" max="2" name="hours" required>

            <input type="submit" value="Add Course" name="submit" onclick="createCourse()" class="button">
        </form>

        <script>
            function createCourse() {
                var subject = document.getElementById("subject").value;
                var professor = document.getElementById("professor").value;
                var room = document.getElementById("room").value;
                var day = document.getElementById("day").value;
                var time = document.getElementById("time").value;
                var duration = document.getElementById("duration").value;


                alert("Course Created:\nSubject: " + subject + "\nProfessor: " + professor +
                    "\nRoom: " + room + "\nDay: " + day + "\nTime: " + time + "\nDuration: " + duration + " hours");
            }
        </script>
    </body>

    </html>
    <?php
} else {
    header("location: ../view/login.php");

}
?>