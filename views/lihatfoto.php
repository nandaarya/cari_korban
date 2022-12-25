<?php
include '..\models\korban.php';
$model = new Korban();

$idx = $_GET['idx'];
// show the image
$result = $model->tampil_data();
if (!empty($result)) {
    foreach ($result as $data):
        if ($data->idx == $idx) {
            echo '<img src="data:image/jpeg;base64,'.base64_encode($data->file_gambar).'"/>';
        }
    endforeach;
}