<!doctype html>
<html lang="en">

<head>
    <title>Lapor</title>
</head>

<body>
    <h2>Laporan Korban Hilang</h2>
    <h4>Mohon mengisi form berikut untuk melaporkan kerabat atau teman Anda yang hilang atau belum diketahui
        keberadaannya.</h4>
    <br>
    <form action="..\models\process.php" method="post">
        <label>Nama teman atau kerabat yang hilang</label>
        <br>
        <input type="text" name="nama_korban" placeholder="Masukkan Nama Korban" required>

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
        <input type="text" name="lokasi" placeholder="Masukkan Lokasi Korban" required>
        <br>

        <label for="tanggal_hilang">Tanggal hilang</label>
        <br>
        <input type="date" id="tanggal_hilang" name="tanggal" required>
        <br>

        <label for="hilang">Hilang karena</label>
        <br>
        <select name="alasan_hilang" id="hilang" required>
            <option value="">Pilih Alasan Hilang</option>
            <option value="gempa">Gempa Bumi XXX</option>
            <option value="banjir">Banjir XXX</option>
            <option value="longsor">Tanah Longsor XXX</option>
            <option value="tsunami">Tsunami XXX</option>
        </select>
        <br>

        <label>Detail informasi yang dapat disampaikan</label>
        <br>
        <input type="text" name="detail" placeholder="Masukkan Ciri Khas Korban" required>
        <br>

        <label>Foto kerabat atau teman Anda yang hilang</label>
        <br>
        <input type="file" name="foto" accept="image/*" >
        <br>

        <label>Nama pelapor</label>
        <br>
        <input type="text" name="nama_pelapor" placeholder="Masukkan Nama Pelapor">
        <br>

        <label for="phone">No handphone pelapor</label>
        <br>
        <input type="tel" id="phone" name="telepon" pattern="[0]{1}[8]{1}[0-9]{2}[0-9]{4}[0-9]{4}" placeholder="08XXXXXXXXXX" required>
        <br>

        <label for="email">Email pelapor</label>
        <br>
        <input type="email" id="email" name="email" placeholder="Masukkan Email">
        <br><br>

        <input type="hidden" name="status" value="Hilang">
        <button type="submit" name="submit_simpan">Laporkan Korban Hilang</button>
    </form>
</body>

</html>