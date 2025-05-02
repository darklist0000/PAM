<?php
session_start();

if (isset($_SESSION['user_id'])) {
  header("Location: index.php"); // ถ้าล็อกอินแล้ว ให้ไปที่หน้า index
  exit();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
  include 'config.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM employees WHERE Username = '$username' AND PASSWORD = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['Username']; // เก็บข้อมูลผู้ใช้ใน session
    header("Location: index.php"); // ล็อกอินสำเร็จ ไปที่หน้า index
    exit();
  } else {
    $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
  }

  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Login</title>
</head>
<body class="center-content"; style="background-color:#ffffcd ;">
<form method="post">
        <h2 style="text-align:left;">Login</h2> <div class="input-group">
            <label for="username">ชื่อผู้ใช้:</label>  <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">รหัสผ่าน:</label> <input type="password" id="password" name="password" required>
         </div>
         <div class="checkbox-container">
            <input type="checkbox" onclick="myFunction()"> แสดงรหัสผ่าน </div>
            <button type="submit" name="login_btn" class="btn">เข้าสู่ระบบ</button> <button type="button" class = "btn" onclick="location.href='register.php'">ยกเลิก</button>
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