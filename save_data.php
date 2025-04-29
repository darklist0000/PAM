<?php
require_once 'config.php'; // เรียกใช้ไฟล์เชื่อมต่อฐานข้อมูล

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $code = $_POST['code'];
    $material_id = $_POST['material_id'];
    $house_number = $_POST['house_number'];
    // รับค่าจากฟิลด์อื่นๆ ในฟอร์มของคุณ

    // คำสั่ง SQL สำหรับเพิ่มข้อมูล
    $sql = "INSERT INTO your_table (code, material_id, house_number)
            VALUES (?, ?, ?)"; // ใช้ Prepared Statement เพื่อป้องกัน SQL Injection

    // เตรียม Statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // ผูกตัวแปรกับ Placeholder
        $stmt->bind_param("sss", $code, $material_id, $house_number); // "sss" หมายถึงข้อมูลเป็น string ทั้งหมด

        // Execute Statement
        if ($stmt->execute()) {
            echo "บันทึกข้อมูลสำเร็จ";
            // คุณอาจจะ Redirect ไปยังหน้าอื่น หรือแสดงข้อความสำเร็จที่สวยงามกว่านี้
        } else {
            echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $stmt->error;
        }

        // ปิด Statement
        $stmt->close();
    } else {
        echo "เกิดข้อผิดพลาดในการเตรียมคำสั่ง SQL: " . $conn->error;
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    $conn->close();
} else {
    echo "ไม่ได้รับข้อมูลผ่าน method POST";
}
?>