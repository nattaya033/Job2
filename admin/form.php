<?php
$id = $data['id'] ?? '';
$title = $data['title'] ?? '';
$image = $data['image_url'] ?? '';
$link = $data['link_url'] ?? '';
$start = $data['start_date'] ?? date('Y-m-d');
$end = $data['end_date'] ?? date('Y-m-d', strtotime('+30 days'));
?>
<form method="post" class="form">
<label>หัวข้อ<input name="title" value="<?= htmlspecialchars($title) ?>" required></label>
<label>URL รูปภาพ<input name="image_url" value="<?= htmlspecialchars($image) ?>" required></label>
<label>URL ลิงก์ปลายทาง<input name="link_url" value="<?= htmlspecialchars($link) ?>" required></label>
<label>วันแสดง<input type="date" name="start_date" value="<?= $start ?>" required></label>
<label>วันสิ้นสุด<input type="date" name="end_date" value="<?= $end ?>" required></label>
<button class="btn" type="submit">บันทึก</button>
</form>
