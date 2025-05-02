<?php 
session_start(); // เริ่ม session เพื่อใช้ในการจัดการ session
include 'config.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Login</title>
</head>
<body style="background-color: #FFF4C7">
<form method="post">
        <h2 style="text-align:left;">Login</h2> <div class="input-group">
            <label for="username">ชื่อผู้ใช้:</label>  <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">รหัสผ่าน:</label> <input type="password" id="password" name="password" required>
         </div>
         <div class="checkbox-container">
            <input type="checkbox" onclick="myFunction()"> แสดงรหัสผ่าน </div>
        <div class="action-buttons">
            <button type="submit" name="login_btn" class="btn">เข้าสู่ระบบ</button> <button type="button" class = "btn" onclick="location.href='register.php'">ยกเลิก</button>
        </div>
        <p>หากยังไม่เป็นสมาชิก? <a href="register.php">สมัครสมาชิก</a></p> </form>

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
</body>
</html>