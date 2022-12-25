<?php
$idx = $_GET['idx'];
include '..\models\korban.php';
$model = new Korban();
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
        
        <label for="hubungan">Hubungan dengan Anda</label>
        <br>
        <select name="hubungan" id="hubungan" required>
            <option value="">Pilih hubungan</option>
            <option value="suami">Suami</option>
            <option value="istri">Istri</option>
            <option value="ayah">Ayah</option>
            <option value="ibu">Ibu</option>
            <option value="anak">Anak</option>
            <option value="saudara">Saudara</option>
            <option value="teman">Teman</option>
        </select>
        <br>

        <label>Lokasi terakhir dilihat</label>
        <br>
        <input type="text" name="lokasi" value="<?= $data->lokasi ?>">
        <br>

        <label>Tanggal Hilang</label>
        <br>
        <input type="date" name="tanggal" value="<?= $data->tanggal ?>">
        <br>

        <label for="hilang">Alasan Hilang</label>
        <br>
        <select name="alasan_hilang" id="hilang" required>
            <option value="">Pilih Alasan Hilang</option>
            <option value="gempa">Gempa Bumi XXX</option>
            <option value="banjir">Banjir XXX</option>
            <option value="longsor">Tanah Longsor XXX</option>
            <option value="tsunami">Tsunami XXX</option>
        </select>
        <br>

        <label>Detail Korban</label>
        <br>
        <input type="text" name="detail" value="<?= $data->detail ?>">
        <br>

        <label>Nama Pelapor</label>
        <br>
        <input type="text" name="nama_pelapor" value="<?= $data->nama_pelapor ?>">
        <br>

        <label for="status">Status</label>
        <br>
        <select name="status" id="status" required>
            <option value="">Pilih Status Korban</option>
            <option value="Hilang">Hilang</option>
            <option value="Ditemukan">Ditemukan</option>
        </select>
        <br>

        <button type="submit" name="submit_edit">Submit</button>
        <input type="hidden" name="idx" value="<?= $data->idx ?>">
    </form>
</body>

</html>