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
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                background-color: #f4f4f4;
            }

            .admin-panel {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 400px;
            }

            label {
                display: block;
                margin-bottom: 8px;
            }

            input {
                width: 100%;
                padding: 8px;
                margin-bottom: 16px;
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
        <title>Admin Dashboard</title>
    </head>

    <body>
        <div class="admin-panel">
            <h2>Add Levels</h2>
            <form action="../controllers/addLevel.php" method="post">
                <label for="levelInput">Enter Level:</label>
                <input type="text" id="levelInput" placeholder="Enter level" name="LevelID" required>
                <input type="submit" value="Add Level" name="submit" class="button" required>
            </form>

        </div>
        <!-- 
    <script>
        function addLevel() {
            var levelInput = document.getElementById('levelInput');
            var levelList = document.getElementById('levelList');

            // Check if the input is not empty
            if (levelInput.value.trim() !== '') {
                var levelName = levelInput.value.trim();

                // Create a new list item and append it to the list
                var li = document.createElement('li');
                li.textContent = levelName;
                levelList.appendChild(li);

                // Clear the input field
                levelInput.value = '';
            }
        }
    </script> -->
    </body>

    </html>
    <?php
} else {
    header("location: ../view/login.php");

}