<?php
include '..\models\korban.php';
$model = new Model();
$index = 1;
?>

<!doctype html>
<html lang="en">

<head>
    <title>Data Hilang</title>
</head>

<body>
    <div>
        <h1>Data Hilang</h1>
        <!-- <a href="create.php">Tambah Data</a> -->
        <br><br>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Korban Hilang</th>
                    <th>Hubungan</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                    <th>Alasan Hilang</th>
                    <th>Detail Korban</th>
                    <th>Nama Pelapor</th>
                    <th>Operasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
$result = $model->tampil_data();
if (!empty($result)) {
    foreach ($result as $data): ?>
                <tr>
                    <td>
                        <?= $index++ ?>
                    </td>
                    <td><?= $data->nama_korban ?></td>
                    <td><?= $data->hubungan ?></td>
                    <td><?= $data->lokasi ?></td>
                    <td><?= $data->tanggal ?></td>
                    <td><?= $data->alasan_hilang ?></td>
                    <td><?= $data->detail ?></td>
                    <td><?= $data->nama_pelapor ?></td>
                    <td>
                        <a name="edit" id="edit" href="edit.php?nim=<?= $data->nim ?>">Edit</a>
                        <a name="hapus" id="hapus" href="process.php?nim=<?= $data->nim ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach;
} else { ?>
                <tr>
                    <td colspan="9">Belum ada data korban hilang.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>