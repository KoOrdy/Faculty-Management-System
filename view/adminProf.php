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
        <title>Add Professor</title>
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
                width: 550px;
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
        <form action="../controllers/insertProf.php" id="professorForm" method="post">
            <h2>Add Professor</h2>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="FirstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="LastName" required>

            <label for="degree">Degree:</label>
            <input type="text" id="degree" name="Degree" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="Gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <label for="nationalId">National ID:</label>
            <input type="text" id="nationalId" name="NationalID" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="DateOfBirth" required>

            <label for="department">Department:</label>
            <input type="text" id="department" name="Department" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="Username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="Password" required>

            <input type="submit" value="Add Professor" name="submit" onclick="addProfessor()" class="button">


        </form>

        <script>
            function addProfessor() {
                var firstName = document.getElementById("firstName").value;
                var lastName = document.getElementById("lastName").value;
                var degree = document.getElementById("degree").value;
                var gender = document.getElementById("gender").value;
                var nationalId = document.getElementById("nationalId").value;
                var dob = document.getElementById("dob").value;
                var department = document.getElementById("department").value;
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;


                alert("Professor Added:\nName: " + firstName + " " + lastName + "\nDegree: " + degree +
                    "\nGender: " + gender + "\nNational ID: " + nationalId + "\nDOB: " + dob +
                    "\nDepartment: " + department + "\nUsername: " + username);
            }
        </script>
    </body>

    </html>
    <?php
} else {
    header("location: ../view/login.php");

}