<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resigter</title>
</head>
<body>
    <form action "registerdb.php" method="post">
        <h2>Register</h2>
        <div class="input-group">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        </div>
        <div class="input-group">
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password_1" required>
        <input type="checkbox" onclick="myFunction()">Show Password
        <script>
            function myFunction() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        </div>
        <div class="input-group">
        <label for="password2">Confirm Password:</label><br>
        <input type="password" id="password2" name="password_2" required>
        <input type="checkbox" onclick="myFunction2()">Show Password
        <script>
            function myFunction2() {
                var x = document.getElementById("password2");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        </div>
        <div class="input-group">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        </div>
        <div class="action-buttons">
        <button type="submit" name="reg_btn" class="action-buttons">Register</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
        </form>
</body>
</html>