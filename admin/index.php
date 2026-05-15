<?php
include __DIR__ . '/../config/db.php';
$result = $conn->query('SELECT * FROM highlights ORDER BY id DESC');
?>
<!doctype html><html lang="th"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="/assets/css/style.css"><title>หลังบ้านกิจกรรมเด่น</title></head><body>
<div class="container section">
<h1>หลังบ้าน: จัดการกิจกรรมเด่น</h1>
<a class="btn" href="create.php">+ เพิ่มรายการ</a>
<table><tr><th>หัวข้อ</th><th>วันแสดง</th><th>วันสิ้นสุด</th><th>ลิงก์</th><th>จัดการ</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr>
<td><?= htmlspecialchars($row['title']) ?></td><td><?= $row['start_date'] ?></td><td><?= $row['end_date'] ?></td><td><a href="<?= htmlspecialchars($row['link_url']) ?>" target="_blank">ลิงก์</a></td>
<td><a href="edit.php?id=<?= $row['id'] ?>">แก้ไข</a> | <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('ยืนยันลบ?')">ลบ</a></td>
</tr>
<?php endwhile; ?>
</table></div></body></html>
