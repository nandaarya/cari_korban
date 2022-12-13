<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function insert($idx, $nama_korban, $hubungan, $lokasi, $tanggal, $alasan_hilang, $detail, $nama_pelapor, $telepon, $email)
    {
        $sql = "INSERT INTO korban (idx, nama_korban, hubungan, lokasi, tanggal, alasan_hilang, detail, nama_pelapor, telepon, email) VALUES ('$idx', '$nama_korban', '$hubungan', '$lokasi', '$tanggal', '$alasan_hilang', '$detail', '$nama_pelapor', '$telepon', '$email')";
        $this->conn->query($sql);
    }

}