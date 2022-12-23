SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nickname`, `role`) VALUES
(1, 'admin', 'admin', 'Administrator', 'Admin'),
(2, 'guest', 'guest', 'Tamu', 'Guest');

-- --------------------------------------------------------

--
-- Table structure for table `korban`
--

CREATE TABLE `korban` (
  `idx` int(11) NOT NULL,
  `nama_korban` varchar(30) NOT NULL,
  `hubungan` varchar(10) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `alasan_hilang` varchar(30) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `nama_pelapor` varchar(30) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `nama_gambar` varchar(255),
  `file_gambar` longblob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korban`
--

INSERT INTO `korban` (`idx`, `nama_korban`, `hubungan`, `lokasi`, `tanggal`, `alasan_hilang`, `detail`, `nama_pelapor`, `telepon`, `email`, `status`, `nama_gambar`, `file_gambar`) VALUES
(1, 'Asep', 'Ayah', 'XXX', '2022-12-05', 'Gempa', 'Berpakaian Lengkap', 'Andi', '087829383635', 'email@gmail.com', 'Hilang', NULL, NULL),
(2, 'Budi', 'Saudara', 'XXX', '2022-12-05', 'Gempa', 'Berpakaian Lengkap', 'Andi', '087829383635', 'email@gmail.com', 'Hilang', NULL, NULL),
(3, 'Ani', 'Istri', 'XXX', '2022-12-05', 'Gempa', 'Berpakaian Lengkap', 'Andi', '087829383635', 'email@gmail.com', 'Ditemukan', NULL, NULL),
(4, 'Ami', 'Istri', 'XXX', '2022-12-05', 'Gempa', 'Berpakaian Lengkap', 'Andi', '087829383635', 'email@gmail.com', 'Hilang', NULL, NULL),
(5, 'Ana', 'Anak', 'XXX', '2022-12-05', 'Gempa', 'Berpakaian Lengkap', 'Andi', '087829383635', 'email@gmail.com', 'Ditemukan', NULL, NULL),
(6, 'Ari', 'Anak', 'XXX', '2022-12-05', 'Gempa', 'Berpakaian Lengkap', 'Andi', '087829383635', 'email@gmail.com', 'Ditemukan', NULL, NULL),
(7, 'Ayu', 'Anak', 'XXX', '2022-12-05', 'Gempa', 'Berpakaian Lengkap', 'Andi', '087829383635', 'email@gmail.com', 'Hilang', NULL, NULL)
;

-- --------------------------------------------------------

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `korban`
  ADD PRIMARY KEY (`idx`);

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `korban`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;