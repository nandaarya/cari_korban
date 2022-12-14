<?php
include '..\connection.php';
class Korban extends Connection
{
    protected $conn;
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

    public function edit($idx)
    {
        $sql = "SELECT * FROM korban WHERE idx = '$idx'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update($idx, $nama_korban, $hubungan, $lokasi, $tanggal, $alasan_hilang, $detail, $nama_pelapor, $telepon, $email)
    {
        $sql = "UPDATE korban SET nama_korban = '$nama_korban', hubungan = '$hubungan', lokasi = '$lokasi', tanggal = '$tanggal', alasan_hilang = '$alasan_hilang', detail = '$detail', nama_pelapor = '$nama_pelapor', telepon = '$telepon', email = '$email' WHERE idx = '$idx'";
        $this->conn->query($sql);
    }

    public function delete($idx)
    {
        $sql = "DELETE FROM korban WHERE idx = '$idx'";
        $this->conn->query($sql);
    }
}