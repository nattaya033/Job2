<?php
include __DIR__ . '/../config/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$stmt=$conn->prepare('INSERT INTO highlights(title,image_url,link_url,start_date,end_date) VALUES (?,?,?,?,?)');
$stmt->bind_param('sssss',$_POST['title'],$_POST['image_url'],$_POST['link_url'],$_POST['start_date'],$_POST['end_date']);
$stmt->execute();
header('Location: index.php'); exit;
}
$data=[];
?><!doctype html><html lang="th"><head><meta charset="UTF-8"><link rel="stylesheet" href="/assets/css/style.css"></head><body><div class="container section"><h1>เพิ่มกิจกรรม</h1><?php include 'form.php'; ?></div></body></html>
