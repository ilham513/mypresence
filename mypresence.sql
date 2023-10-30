-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 04:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypresence`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(255) NOT NULL,
  `id_kelas` int(255) NOT NULL,
  `id_pelajaran` int(255) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `kode_absen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `id_kelas`, `id_pelajaran`, `nama_guru`, `tanggal`, `jam_mulai`, `jam_selesai`, `kode_absen`) VALUES
(2, 3, 1, 'Amandah, S.Si', '1999-09-09', '08:00:00', '09:30:00', '19700');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(255) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `jumlah_murid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jumlah_murid`) VALUES
(1, 'X IPA 1', 30),
(2, 'X IPA 2', 34),
(3, 'X IPA 3', 37);

-- --------------------------------------------------------

--
-- Table structure for table `log_absen`
--

CREATE TABLE `log_absen` (
  `id_log_absen` int(255) NOT NULL,
  `id_siswa` int(255) NOT NULL,
  `id_kelas` int(255) NOT NULL,
  `id_absen` int(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `lokasi_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id_pelajaran` int(255) NOT NULL,
  `nama_pelajaran` varchar(255) NOT NULL,
  `nama_guru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id_pelajaran`, `nama_pelajaran`, `nama_guru`) VALUES
(1, 'IPA', 'Amandah, S.Si'),
(2, 'MTK', 'Amalia');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nama_siswa`, `jenis_kelamin`, `agama`) VALUES
(212210001, '0067316947', 'Advent Fadly Simanullang', 'L', 'kristen'),
(212210002, '0064555354', 'Adzkia Ramadhani Ardian', 'L', 'Islam'),
(212210003, '3144250827', 'Ajwah Nur Fakihah', 'P', 'Islam'),
(212210004, '0068341210', 'Alfi Al Faiq', 'L', 'Islam'),
(212210005, '0063756052', 'Anggita Puspa Royanita', 'P', 'Islam'),
(212210006, '0062925025', 'Anita Ludiya', 'P', 'Islam'),
(212210008, '0061486649', 'Azka Bimo Nugroho', 'L', 'Islam'),
(212210009, '0069303348', 'Chantika Ramadhaniara', 'P', 'Islam'),
(212210010, '0059981457', 'Christian Adinata Lumban Gaol', 'L', 'kristen'),
(212210011, '0061456175', 'Christian Rivaldo', 'L', 'kristen'),
(212210012, '0062549736', 'Dea Isabella Br Tarigan', 'P', 'kristen'),
(212210013, '0057516649', 'Devi Purnamasari', 'P', 'Islam'),
(212210015, '0058024463', 'Ferdie Darmawan', 'L', 'Islam'),
(212210016, '0064346785', 'Indah Islami Putri', 'P', 'Islam'),
(212210017, '0073440172', 'Indra Maulana Rizkiyanto', 'L', 'Islam'),
(212210018, '0064949693', 'Keysha Tri Eka Putri Pratiwi', 'P', 'Islam'),
(212210019, '0065368092', 'Moreno Astrando', 'L', 'Hindu'),
(212210020, '0065109850', 'Muhammad Fahri Iskandar', 'L', 'Islam'),
(212210021, '0053760072', 'Muhammad Fuad Wimar Putra', 'L', 'Islam'),
(212210022, '0055558486', 'Nayla Marsya Putri', 'P', 'Islam'),
(212210023, '0068971642', 'Nazwa Ramadani', 'P', 'Islam'),
(212210024, '0061619318', 'Nur Indah Fajriyanti', 'P', 'Islam'),
(212210025, '0068574550', 'Pakpahan, Dea Nuroin Margaretta', 'P', 'kristen'),
(212210026, '0069601646', 'Putri Astiana Azahra', 'P', 'Islam'),
(212210027, '0065538530', 'Raelyn Adia Neva', 'P', 'Islam'),
(212210028, '0061410529', 'Rayya Anastasya Ramadhani', 'P', 'Islam'),
(212210029, '0066949793', 'Rizaldi Juniawan', 'L', 'Islam'),
(212210030, '0068263756', 'Rocky Juansyah', 'L', 'Islam'),
(212210031, '0062300822', 'Sausan Naailah Diyani', 'P', 'Islam'),
(212210032, '0067606318', 'Sebastian Cesar Kirono Sitompul', 'L', 'kristen'),
(212210033, '0062918309', 'Shandisyah Aryaki Himawan', 'L', 'Islam'),
(212210034, '0066570744', 'Vincensius Vikario Ventura', 'L', 'Katholik'),
(212210035, '0063920797', 'Zahra Cantika Dealova', 'P', 'Islam'),
(212210036, '0064321531', 'Andi Muhammad Qohar Mudzakir', 'L', 'Islam'),
(212210037, '0049756876', 'Andre Yonatan Tarigan', 'L', 'kristen'),
(212210038, '0061854608', 'Angelica Yzreel Juliana', 'P', 'kristen'),
(212210039, '0058826310', 'Annisa', 'P', 'Islam'),
(212210040, '0068948824', 'Ashila Dhiya Ramadhani ', 'P', 'Islam'),
(212210041, '0059611410', 'Aura Islami Syawal', 'P', 'Islam'),
(212210042, '0056785873', 'Bagas Nofiyanto', 'L', 'Islam'),
(212210043, '0058332854', 'Calvin Zefanya Natanael', 'L', 'kristen'),
(212210044, '0068105590', 'Catrine Sabrina ', 'P', 'Katholik'),
(212210045, '0055949428', 'Chairatul Adelia Simanjuntak', 'P', 'Islam'),
(212210046, '0053566002', 'Faisal Ridwan Syachputra', 'L', 'Islam'),
(212210047, '0062773876', 'Galih Raka Lijonki', 'L', 'kristen'),
(212210048, '0062555471', 'George Joeniver Marbun', 'L', 'kristen'),
(212210049, '0062493966', 'Hanessya Noer Rahmadani', 'P', 'Islam'),
(212210050, '0058147595', 'Kristian Focus Hutabarat', 'L', 'kristen'),
(212210051, '0064540611', 'Melinda Putri', 'P', 'Islam'),
(212210052, '0066457614', 'Mesya Dwi Maulida', 'P', 'Islam'),
(212210053, '0062121239', 'Muhammad Fakhri Akbar', 'L', 'Islam'),
(212210054, '0062072750', 'Nadya Clarissa Salsabilla', 'P', 'Islam'),
(212210055, '0063216804', 'Naswa Leisa Aufaa Putri Arli', 'P', 'Islam'),
(212210056, '0067487544', 'Pander Martian Parhusip', 'L', 'kristen'),
(212210057, '0052818020', 'Prawadi Samuel Sihombing', 'L', 'kristen'),
(212210058, '0066190457', 'Ramadhan Adisusanto', 'L', 'Islam'),
(212210059, '0063385347', 'Rizky Amelia', 'P', 'Islam'),
(212210060, '0055013034', 'Rofi Ramadhan', 'L', 'Islam'),
(212210061, '3061941977', 'Rosita', 'P', 'Islam'),
(212210062, '0062681609', 'Rullyansyah Ahmad Zahiruddin', 'L', 'Islam'),
(212210063, '0056797835', 'Salsabila Anggraeni ', 'P', 'Islam'),
(212210064, '0067243629', 'Syadeta Abid Taqwa', 'L', 'Islam'),
(212210065, '0069329718', 'Valencia Gouwtama', 'P', 'kristen'),
(212210066, '0068695049', 'Zephaniah Putri Nababan', 'P', 'kristen'),
(212210068, '0051127604', 'Adriel Saron Purba', 'L', 'kristen'),
(212210069, '0053519919', 'Alin Dhiya Faiz', 'P', 'Islam'),
(212210070, '0063251056', 'Alipah Septiani', 'P', 'Islam'),
(212210071, '0064859574', 'Alya Tri Faryanti', 'P', 'Islam'),
(212210072, '0064935971', 'Clara Ardiani', 'P', 'Islam'),
(212210073, '0065331446', 'Cornelius Reynard Geovanni', 'L', 'kristen'),
(212210074, '0068969436', 'Daniel Lawrensius Aditya', 'L', 'kristen'),
(212210076, '0064712988', 'Farida  Aishabela Putri', 'P', 'Islam'),
(212210077, '0055617707', 'Fauzi Ramadhan', 'L', 'Islam'),
(212210078, '0063611583', 'Gabriela Inri Angelin Lape', 'P', 'kristen'),
(212210079, '0057153877', 'Haikal Ballad Abimayu', 'L', 'Islam'),
(212210081, '0051984822', 'Lunna Novellya Putri', 'P', 'Islam'),
(212210082, '0062400130', 'Made Chaterina Wiryanti', 'P', 'kristen'),
(212210083, '0052307944', 'Maya Anggraeni Nur Latifah', 'P', 'Islam'),
(212210084, '0062569696', 'Meisya Adinda Putri', 'P', 'Islam'),
(212210085, '0066558089', 'Muhammad Iqbal Wijaya', 'L', 'Islam'),
(212210086, '0067072013', 'Muhammad Fathul Aziz', 'L', 'Islam'),
(212210088, '0066145710', 'Nazwa Lidwina Fikri', 'P', 'Islam'),
(212210089, '0068742521', 'Oktario Prasojo Mulyo Prayogi', 'L', 'kristen'),
(212210090, '0065557995', 'Pradipta Raditya Wismaya', 'L', 'Islam'),
(212210092, '0053067276', 'Rio Aldyansyah Jamal', 'L', 'kristen'),
(212210093, '0058542664', 'Rivaldo Rizky Simbolon', 'L', 'kristen'),
(212210097, '0062789413', 'Yanuar Sadewo', 'L', 'Islam'),
(212210098, '0055071295', 'Ziyad Nasyid Nurdiansyah', 'L', 'Islam'),
(212210222, '0054078783', 'Akmal Khoirun Nas', 'L', 'Islam'),
(212210226, '0067218704', 'Anggun Sherlika S. Limbong', 'P', 'kristen'),
(212210229, '0061061036', 'Abdul Rohim Prayogi', 'L', 'Islam'),
(212210230, '0051167086', 'Putri Amanda Febriyanti', 'P', 'Islam'),
(222311236, '0065359566', 'Muhammad Jahsy Destarkan', 'L', 'Islam'),
(222311237, '0061289097', 'Ina Inri Wacanno', 'P', 'kristen'),
(222311242, '0069278949', 'Fiqi Ayubi', 'L', 'Islam'),
(222311243, '08889998', 'Budi Santoso', 'l', 'Islam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_kelas` (`id_kelas`,`id_pelajaran`),
  ADD KEY `id_pelajaran` (`id_pelajaran`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `log_absen`
--
ALTER TABLE `log_absen`
  ADD PRIMARY KEY (`id_log_absen`),
  ADD KEY `id_siswa` (`id_siswa`,`id_kelas`,`id_absen`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_absen` (`id_absen`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_absen`
--
ALTER TABLE `log_absen`
  MODIFY `id_log_absen` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id_pelajaran` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222311244;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `absen_ibfk_2` FOREIGN KEY (`id_pelajaran`) REFERENCES `pelajaran` (`id_pelajaran`);

--
-- Constraints for table `log_absen`
--
ALTER TABLE `log_absen`
  ADD CONSTRAINT `log_absen_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `log_absen_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `log_absen_ibfk_3` FOREIGN KEY (`id_absen`) REFERENCES `absen` (`id_absen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
