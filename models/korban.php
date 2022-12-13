<?php
include '..\connection.php';
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

    public function tampil_data()
    {
        $sql = "SELECT * FROM korban";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

}