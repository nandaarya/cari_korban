<?php
include '..\models\korban.php';
$model = new Korban();

$idx = $_GET['idx'];
// show the image
$result = $model->tampil_data();
if (!empty($result)) {
  foreach ($result as $data):
    if ($data->idx == $idx) {
      if ($data->file_gambar == null) {?>
        <?Php echo "<h2>Tidak ada foto tersedia</h2>" ?><?php
        echo '<img src="..\assets\images\foto_kosong.jpg" width="200px" height="200px"/>';
      } else {?>
        <?Php echo"<h2>Foto $data->nama_korban</h2>" ?><?php
        echo '<img src="data:image/jpeg;base64,' . base64_encode($data->file_gambar) . '" width="200px" height="200px"/>';
      }
    }
  endforeach;
}

?>