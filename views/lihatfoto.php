<?php
include '..\models\korban.php';
$model = new Korban();

$idx = $_GET['idx'];
$result = $model->lihat_foto($idx);
foreach ($result as $data) {
    $gambar = $data->file_gambar; ?>
<img src="data:image/jpeg;base64,<?= base64_encode($gambar) ?>" width="100%" height="100%"><?php
}
  ?>