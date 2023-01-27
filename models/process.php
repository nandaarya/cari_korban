<?php
include 'korban.php';

// logic for insert data to database
if (isset($_POST['submit_simpan'])) {
    $idx = $_POST['idx'];
    $nama_korban = $_POST['nama_korban'];
    $hubungan = $_POST['hubungan'];
    $lokasi = $_POST['lokasi'];
    $tanggal = $_POST['tanggal'];
    $alasan_hilang = $_POST['alasan_hilang'];
    $detail = $_POST['detail'];
    $nama_pelapor = $_POST['nama_pelapor'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    $tempdir = "../assets/images/"; //Nama folder tempat menyimpan file
    $target_path = $tempdir . basename($_FILES['foto']['name']); //set upload path folder
    $nama_gambar = $_FILES['foto']['name'];
    $fileinfo = @getimagesize($_FILES["foto"]["tmp_name"]);
    $file_gambar = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

    $model = new Korban();
    $model->insert($idx, $nama_korban, $hubungan, $lokasi, $tanggal, $alasan_hilang, $detail, $nama_pelapor, $telepon, $email, $status, $nama_gambar, $file_gambar);
    header('location:..\views\datahilang.php');
}

// logic for edit data
if (isset($_POST['submit_edit'])) {
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
    $status = $_POST['status'];

    $model = new Korban();
    $model->update($idx, $nama_korban, $hubungan, $lokasi, $tanggal, $alasan_hilang, $detail, $nama_pelapor, $telepon, $email, $status);
    header('location:..\views\datahilang.php');
}

// logic for delete data
if (isset($_GET['idx'])) {
    $idx = $_GET['idx'];
    $model = new Korban();
    $model->delete($idx);
    header('location:..\views\datahilang.php');
}