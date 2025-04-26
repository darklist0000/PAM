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

  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['role'] = $row['role'];
    header("Location: index.php"); // ล็อกอินสำเร็จ ไปที่หน้า index
    exit();
  } else {
    $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
  }

  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>

  <h2>Login</h2>

  <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>

  <form method="post">
    <label for="username">ชื่อผู้ใช้:</label><br>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">รหัสผ่าน:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Login">
  </form>

</body>
</html>