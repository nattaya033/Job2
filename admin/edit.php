<?php
include __DIR__ . '/../config/db.php';
$id=(int)($_GET['id'] ?? 0);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$stmt=$conn->prepare('UPDATE highlights SET title=?, image_url=?, link_url=?, start_date=?, end_date=? WHERE id=?');
$stmt->bind_param('sssssi',$_POST['title'],$_POST['image_url'],$_POST['link_url'],$_POST['start_date'],$_POST['end_date'],$id);
$stmt->execute(); header('Location: index.php'); exit;
}
$stmt=$conn->prepare('SELECT * FROM highlights WHERE id=?'); $stmt->bind_param('i',$id); $stmt->execute(); $data=$stmt->get_result()->fetch_assoc();
?><!doctype html><html lang="th"><head><meta charset="UTF-8"><link rel="stylesheet" href="/assets/css/style.css"></head><body><div class="container section"><h1>แก้ไขกิจกรรม</h1><?php include 'form.php'; ?></div></body></html>
