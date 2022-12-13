<?php
$idx = $_GET['idx'];
include '..\models\korban.php';
$model = new Model();
$data = $model->edit($idx);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Edit Data</title>
</head>

<body>
    <h1>Ubah Data Korban</h1>
    <a href="datahilang.php">Kembali</a>
    <br><br>
    <form action="..\models\process.php" method="post">
        <label>Nama Korban</label>
        <br>
        <input type="text" name="nama_korban" value="<?= $data->nama_korban ?>">
        <br>
        <label>Hubungan</label>
        <br>
        <input type="text" name="hubungan" value="<?= $data->hubungan ?>">
        <br>
        <label>Lokasi</label>
        <br>
        <input type="text" name="lokasi" value="<?= $data->lokasi ?>">
        <br>
        <label>Tanggal</label>
        <br>
        <input type="date" name="tanggal" value="<?= $data->tanggal ?>">
        <br>
        <label>Alasan Hilang</label>
        <br>
        <input type="text" name="alasan_hilang" value="<?= $data->alasan_hilang ?>">
        <br>
        <label>Detail Korban</label>
        <br>
        <input type="text" name="detail" value="<?= $data->detail ?>">
        <br>
        <label>Nama Pelapor</label>
        <br>
        <input type="text" name="nama_pelapor" value="<?= $data->nama_pelapor ?>">
        <br>
        <br>
        <button type="submit" name="submit_edit">Submit</button>
        <input type="hidden" name="idx" value="<?= $data->idx ?>">
    </form>
</body>

</html>