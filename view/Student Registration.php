<!DOCTYPE html>
<html class="html">

<head>
   <meta charset="UTF-8">
   <title>Student Registration</title>
   <link rel="stylesheet" href="header .css">
   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         display: flex;
         align-items: center;
         justify-content: center;
         min-height: 100vh;
      }

      .bodyy {
         padding: 50px;
         border-radius: 8px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      form {
         width: 500px;
      }

      label {
         display: block;
         margin-bottom: 8px;
      }

      input,
      select {
         width: 100%;
         padding: 8px;
         margin-bottom: 10px;
         box-sizing: border-box;
      }

      input[type="submit"] {
         background-color: #3498db;
         color: #fff;
         cursor: pointer;
      }

      .button {
         background-color: #3498db;
         color: #fff;
         padding: 10px 15px;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         font-size: 16px;
         transform: translate(-1px, 13px);
      }

      button:hover {
         background-color: #45a049;
      }

      button:active {
         background-color: #3d8e41;
      }

      button:focus {
         outline: none;
      }

      .error {
         color: red;
      }

      input[type="submit"]:hover {
         background-color: #4580a0;
      }
   </style>
</head>

<body>
   <div class="bodyy">
      <form action="../controllers/RegisterController.php" method="post">
         <h1 class="h1"> Student Registration </h1>
         <p><label for="name">Name:</label><input type="text" id="name" name="name" required
               placeholder="enter your name">
         </p>
         <p> <label for="age">Age:</label><input type="age" id="age" name="age" required placeholder="enter your age">
         </p>
         <p><label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="enter your email">
         </p>
         <p><label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="enter your password">
         </p>
         <p><label for="text">number:</label>
            <input type="text" id="number" name="number" required placeholder="enter your phone.number">
         </p>
         <p><label for="level">levels:</label>
            <select id="level" name="levels" required>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
            </select>
         </p>

         <input type="submit" name="submit" class="button">
         <br>
      </form>
   </div>
   <script>
      function validateForm() {
         var name = document.getElementById(" name").value; var email = document.getElementById("email").value; if (name == ""
         ) { alert("Name must be filled out"); return false; } if (email == "") {
            alert("Emailmust be filled out");
            return false;
         }
         emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; if (!email.match(emailRegex)) {
            alert("Invalid email format"); return
            false;
         } alert("Form submitted successfully!");
         return true;
      } </script>
</body>

</html>