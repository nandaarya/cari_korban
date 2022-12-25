<?php
include '..\connection.php';
class Korban extends Connection
{
    private $conn;
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function insert($idx, $nama_korban, $hubungan, $lokasi, $tanggal, $alasan_hilang, $detail, $nama_pelapor, $telepon, $email, $status, $nama_gambar, $file_gambar)
    {
        $sql = "INSERT INTO korban (idx, nama_korban, hubungan, lokasi, tanggal, alasan_hilang, detail, nama_pelapor, telepon, email, status, nama_gambar, file_gambar) 
        VALUES ('$idx', '$nama_korban', '$hubungan', '$lokasi', '$tanggal', '$alasan_hilang', '$detail', '$nama_pelapor', '$telepon', '$email', '$status', '$nama_gambar', '$file_gambar')";
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

    public function search($cari)
    {
        $sql = "SELECT * FROM korban WHERE nama_korban LIKE '%$cari%'";
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

    public function update($idx, $nama_korban, $hubungan, $lokasi, $tanggal, $alasan_hilang, $detail, $nama_pelapor, $telepon, $email, $status)
    {
        $sql = "UPDATE korban SET nama_korban = '$nama_korban', hubungan = '$hubungan', lokasi = '$lokasi', tanggal = '$tanggal', alasan_hilang = '$alasan_hilang', detail = '$detail', nama_pelapor = '$nama_pelapor', telepon = '$telepon', email = '$email', status = '$status' WHERE idx = '$idx'";
        $this->conn->query($sql);
    }

    public function delete($idx)
    {
        $sql = "DELETE FROM korban WHERE idx = '$idx'";
        $this->conn->query($sql);
    }
}

class KorbanHilang extends Korban
{
    private $conn;
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }
    public function tampil_data()
    {
        $sql = "SELECT * FROM korban WHERE status = 'Hilang'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function search($cari)
    {
        $sql = "SELECT * FROM korban WHERE nama_korban LIKE '%$cari%' AND status = 'Hilang'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
}

class KorbanDitemukan extends Korban
{
    private $conn;
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }
    public function tampil_data()
    {
        $sql = "SELECT * FROM korban WHERE status = 'Ditemukan'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function search($cari)
    {
        $sql = "SELECT * FROM korban WHERE nama_korban LIKE '%$cari%' AND status = 'Ditemukan'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
}