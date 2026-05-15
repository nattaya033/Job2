<?php
$pageTitle = 'หน้าหลัก | คณะครุศาสตร์ มรภ.สงขลา';
include __DIR__ . '/config/db.php';
include __DIR__ . '/includes/header.php';

$newsItems = $conn->query("SELECT * FROM highlights WHERE start_date <= CURDATE() AND end_date >= CURDATE() ORDER BY id DESC LIMIT 10");
?>
<section class="hero">
  <div class="overlay">
    <h1>คณะครุศาสตร์ มหาวิทยาลัยราชภัฏสงขลา</h1>
    <p>ผลิตครูมืออาชีพ สู่การพัฒนาท้องถิ่นอย่างยั่งยืน</p>
  </div>
</section>

<section class="container section">
  <h2>หลักสูตรทั้ง 13 หลักสูตร</h2>
  <div class="grid-4">
    <?php for ($i = 1; $i <= 13; $i++): ?>
      <article class="card"><img src="https://picsum.photos/seed/course<?= $i ?>/500/300" alt="หลักสูตร <?= $i ?>"><h3>หลักสูตรที่ <?= $i ?></h3></article>
    <?php endfor; ?>
  </div>
</section>

<section class="stats">
  <div class="container stats-grid">
    <div><strong>13</strong><span>หลักสูตร</span></div>
    <div><strong>2,850</strong><span>นักศึกษา</span></div>
    <div><strong>120</strong><span>อาจารย์</span></div>
    <div><strong>58</strong><span>บุคลากรสายสนับสนุน</span></div>
  </div>
</section>

<section class="container section">
  <h2>ข่าวสารประชาสัมพันธ์</h2>
  <div class="grid-5 quick-links">
    <?php $links=['ประกาศ','ข่าวสำหรับนักศึกษา','ข่าวสำหรับอาจารย์/บุคลากร','แนวปฏิบัติ','จัดซื้อจัดจ้าง']; foreach($links as $t): ?>
    <a class="tile" href="#"><img src="https://picsum.photos/seed/<?= urlencode($t) ?>/400/250" alt="<?= $t ?>"><span><?= $t ?></span></a>
    <?php endforeach; ?>
  </div>
</section>

<section class="container section two-col">
  <div>
    <h2>กิจกรรมเด่น</h2>
    <div class="slider">
      <?php if ($newsItems && $newsItems->num_rows > 0): while ($item = $newsItems->fetch_assoc()): ?>
        <a class="slide" href="<?= htmlspecialchars($item['link_url']) ?>" target="_blank">
          <img src="<?= htmlspecialchars($item['image_url']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">
          <p><?= htmlspecialchars($item['title']) ?></p>
        </a>
      <?php endwhile; else: ?>
        <p>ยังไม่มีกิจกรรมในช่วงเวลานี้</p>
      <?php endif; ?>
    </div>
  </div>
  <div>
    <h2>ปฏิทินกิจกรรมคณะ</h2>
    <iframe src="https://calendar.google.com/calendar/embed?src=th.th%23holiday%40group.v.calendar.google.com&ctz=Asia%2FBangkok"></iframe>
  </div>
</section>

<section class="container section">
  <h2>EDU Services</h2>
  <div class="grid-3 quick-links">
    <?php $edu=['ภาพกิจกรรม','กิจกรรมความเป็นครู','ระบบฝึกประสบการณ์วิชาชีพครู','วารสารหลักสูตรและการสอน','บทคัดย่อวิจัยในชั้นเรียน','เกียรติบัตรออนไลน์','คำสั่ง','โหลดแบบฟอร์ม','งานประกันคุณภาพ']; foreach($edu as $e): ?>
    <a class="tile" href="#"><img src="https://picsum.photos/seed/<?= urlencode($e) ?>/400/250" alt="<?= $e ?>"><span><?= $e ?></span></a>
    <?php endforeach; ?>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
