<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>รับพัสดุ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ปุ่มเปิด Modal -->
<button id="openModalBtn">+ เพิ่ม</button>

<!-- Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="submit.php" method="POST">
      <h3>รับพัสดุ</h3>

      <label>วันที่รับ:</label><br>
      <input type="date" name="date" required><br><br>

      <label>เวลา:</label><br>
      <input type="time" name="time" required><br><br>

      <label>ชื่อผู้รับ:</label><br>
      <input type="text" name="receiver" required><br><br>

      <label>หมายเหตุ:</label><br>
      <textarea name="note"></textarea><br><br>

      <button type="submit">ยืนยัน</button>
      <button type="button" onclick="closeModal()">ยกเลิก</button>
    </form>
  </div>
</div>

<script>
  const modal = document.getElementById("myModal");
  const btn = document.getElementById("openModalBtn");
  const span = document.getElementsByClassName("close")[0];

  btn.onclick = () => modal.style.display = "block";
  span.onclick = () => modal.style.display = "none";
  function closeModal() { modal.style.display = "none"; }

  window.onclick = (e) => { if (e.target == modal) modal.style.display = "none"; }
</script>

</body>
</html>
