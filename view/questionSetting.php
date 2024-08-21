<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if ($_SESSION['type'] == "professor") {



    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Question Setting</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
                color: #333;
            }

            section {
                padding: 20px;
                background-color: #fff;
                margin: 20px auto;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                max-width: 600px;
            }

            h2 {
                color: #007BFF;
            }

            form {
                margin-top: 20px;
            }

            label {
                display: block;
                font-weight: bold;
                margin-bottom: 8px;
            }

            input,
            textarea {
                width: 100%;
                padding: 10px;
                box-sizing: border-box;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
            }

            button {
                background-color: #007BFF;
                color: #fff;
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            button:hover {
                background-color: #0056b3;
            }
        </style>
        </style>
    </head>

    <body>
        <section>
            <h2>Question Setting</h2>
            <form action="../controllers/addQuestion.php" method="post">
                <label for="course-text">Enter Course:</label>
                <input class="textarea" id="course-text" name="course" rows="4" required>

                <label for="question-text">Enter Question:</label>
                <textarea id="question-text" name="question" rows="4" required></textarea>
                <button type="submit" name="submit">Add Question</button>
            </form>
        </section>
    </body>

    </html>
    <?php
} else {
    header("location: ../view/login.php");

}
?>