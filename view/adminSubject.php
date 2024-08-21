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
        <title>Add Subject</title>
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
                width: 500px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        <form id="subjectForm" action="../controllers/insertsubject.php" method="post">
            <h2>Add Subject</h2>
            <label for="subjectName">Subject Name:</label>
            <input type="text" id="subjectName" name="subjectName" required>

            <label for="subjectCode">Subject ID:</label>
            <input type="text" id="subjectCode" name="subID" required>

            <label for="description">Description:</label>
            <textarea id="description" rows="4" required name="Description"></textarea>

            <label for="level">Level:</label>
            <select id="level" name="Level" required>
                <option value="1"> 1</option>
                <option value="2"> 2</option>
                <option value="3"> 3</option>
                <option value="4"> 4</option>
            </select>

            <label for="semester">Semester:</label>
            <select id="semester" name="Semester" required>
                <option value="1">1</option>
                <option value="2">2</option>

                <input id="button" type="submit" value="Add subject" onclick="addSubject()" name="submit" class="button">
        </form>

        <script>
            function addSubject() {
                var subjectName = document.getElementById("subjectName").value;
                var subjectCode = document.getElementById("subjectCode").value;
                var description = document.getElementById("description").value;
                var level = document.getElementById("level").value;
                var semester = document.getElementById("semester").value;

                alert("Subject Added:\nName: " + subjectName + "\nCode: " + subjectCode +
                    "\nDescription: " + description + "\nLevel: " + level + "\nSemester: " + semester);
            }
        </script>
    </body>

    </html>
    <?php
} else {
    header("location: ../view/login.php");

}