<?php
include 'korban.php';
if (isset($_POST['submit_simpan'])) {
    $idx = $_POST['idx'];
    $nama_korban = $_POST['nama_korban'];
    $hubungan = $_POST['hubungan'];
    $lokasi = $_POST['lokasi'];
    $tanggal = $_POST['tanggal'];
    $alasan_hilang = $_POST['alasan_hilang'];
    $detail = $_POST['detail'];
    // $foto = $_POST['foto'];
    $nama_pelapor = $_POST['nama_pelapor'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    $model = new Model();
    $model->insert($idx, $nama_korban, $hubungan, $lokasi, $tanggal, $alasan_hilang, $detail, $nama_pelapor, $telepon, $email);
    header('location:..\views\datahilang.php');
}