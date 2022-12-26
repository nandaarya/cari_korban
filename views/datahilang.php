<?php
include '..\models\korban.php';
session_start();
$model = new Korban();
$model2 = new KorbanHilang();
$index = 1;

if (!isset($_SESSION['role'])) {
    $_SESSION['role'] = 'Guest';
}
?>

<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Data Hilang</title>
</head>

<body>
    <div>
        <h1>Data Korban Hilang</h1>
        <h3>Tidak bisa menghubungi orang yang anda kenal ? Laporkan sekarang !</h3>
        <a href="lapor.php"><button type="button">Lapor</button></a>
        <a href="datahilang.php"><button type="button">Data Hilang</button></a>
        <a href="dataditemukan.php"><button type="button">Data Ditemukan</button></a>
        <?php
        if ($_SESSION['role'] == 'Admin') { ?>
        <a href="logout.php"><button type="button">Logout</button></a>
        <?php
        } else { ?>
        <a href="login.php"><button type="button">Login</button></a>
        <?php
        } ?>
        <br><br>
        <form action="datahilang.php" method="get">
            <label>Cari Dalam Data Korban Hilang</label>
            <br>
            <input type="text" name="cari" placeholder="Masukkan nama...">
            <input type="submit" value="cari">
        </form>
        <br><br>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Korban</th>
                    <th>Hubungan</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                    <th>Alasan Hilang</th>
                    <th>Detail Korban</th>
                    <th>Nama Pelapor</th>
                    <th>Status</th>
                    <th>Operasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET['cari'])) {
                    $cari = $_GET['cari'];
                    $result = $model2->search($cari);
                } else {
                    $result = $model2->tampil_data();
                }
                if (!empty($result)) {
                    foreach ($result as $data): ?>
                <tr>
                    <td>
                        <?= $index++ ?>
                    </td>
                    <td>
                        <?= $data->nama_korban ?>
                    </td>
                    <td>
                        <?= $data->hubungan ?>
                    </td>
                    <td>
                        <?= $data->lokasi ?>
                    </td>
                    <td>
                        <?= $data->tanggal ?>
                    </td>
                    <td>
                        <?= $data->alasan_hilang ?>
                    </td>
                    <td>
                        <?= $data->detail ?>
                    </td>
                    <td>
                        <?= $data->nama_pelapor ?>
                    </td>
                    <td>
                        <?= $data->status ?>
                    </td>
                    <td>
                        <?php if ($_SESSION['role'] == 'Admin') { ?>
                        <a title="Lihat Foto" name="foto" id="foto" target="_blank" rel="noopener noreferrer"
                            href="lihatfoto.php?idx=<?= $data->idx ?>"><i
                                class="fa fa-picture-o" style="font-size:14px;color:blue"></i></a>
                        |
                        <a title="Ubah" name="edit" id="edit" href="edit.php?idx=<?= $data->idx ?>"><i
                                class="fa fa-edit" style="font-size:14px;color:orange"></i></a>
                        |
                        <a title="Hapus" name="hapus" id="hapus" href="..\models\process.php?idx=<?= $data->idx ?>"><i
                                class="fa fa-trash-o" style="font-size:14px;color:red"></i></a>
                        <?php } else {
                                echo "Tidak ada akses";
                            } ?>
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