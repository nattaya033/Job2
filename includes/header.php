<?php if (!isset($pageTitle)) { $pageTitle = 'คณะครุศาสตร์ มรภ.สงขลา'; } ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="topbar">
  <div class="container nav-wrap">
    <div class="brand">🎓 คณะครุศาสตร์ มหาวิทยาลัยราชภัฏสงขลา <span class="orchid">✿</span></div>
    <nav>
      <a href="/index.php">หน้าหลัก</a>
      <a href="/about.php">เกี่ยวกับคณะ</a>
      <a href="/management.php">การบริหาร</a>
      <a href="/staff.php">บุคลากร</a>
      <a href="/contact.php">ติดต่อเรา</a>
    </nav>
  </div>
</header>
<main>
