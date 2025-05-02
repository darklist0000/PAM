<?php
session_start(); // เริ่มต้น session
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php"); // ถ้ายังไม่ได้ล็อกอิน ให้ไปที่หน้า login
  exit();
}
if (isset($_get['logout'])) {
    session_destroy(); // ลบ session
    unset($_SESSION['username']); // ลบตัวแปร session
    header("Location: login.php"); // ส่งไปที่หน้า login
  exit();
}

include 'config.php';

// ดึงข้อมูลสินค้าจากฐานข้อมูล
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง Layout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo-area">
                </div>
            <ul class="menu">
                <li class="active">
                    <a href="#">
                        Paperless
                    </a>
                </li>
                <li>
                    <a href="#">
                        Change Project
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        ออกจากระบบ
                    </a>
                </li>
            </ul>
            <div class="collapse-button">
                </div>
        </aside>
        <main class="content">
            <header class="content-header">
                <h1 class="page-title">พัสดุ</h1>
                <div class="controls">
                    <div class="filter-group">
                        <label for="filter1">ค้นหา:</label>
                        <input type="text" id="filter1" placeholder="code เลขที่...">
                        <select id="status">
                            <option value="">สถานะ</option>
                            </select>
                        <input type="date" id="date-filter">
                        <button class="filter-button">
                            </button>
                        <input type="text" id="search-box" placeholder="ค้นหา">
                        <button class="search-button">
                            </button>
                    </div>
                </div>
            </header>
            <div class="table-area">
                <div class="action-buttons">
                    <button class="add-button">+ เพิ่ม</button>
                    <button class="edit-button">แก้ไข</button>
                    <button class="delete-button">ลบ</button>
                    <button class="export-button">ส่งออก</button>
                </div>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>code</th>
                                <th>หมายเลขพัสดุ</th>
                                <th>บ้านเลขที่(แปลงย่อย)</th>
                                <th>สถานะ</th>
                                <th>ชื่อผู้รับผิดชอบ</th>
                                <th>ชื่อผู้สร้าง</th>
                                </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A00005820</td>
                                <td>168/77</td>
                                <td>3</td>
                                <td>ยังไม่ได้...</td>
                                <td>...</td>
                                <td>...</td>
                                </tr>
                            <tr>
                                <td>A00005818</td>
                                <td>J</td>
                                <td>168/...</td>
                                <td>ยังไม่ได้...</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                            </tbody>
                    </table>
                </div>
                <div class="pagination-info">
                    ทั้งหมด ?? รายการ
                </div>
            </div>
        </main>
    </div>
</body>
</html>