-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 09:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pns`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` varchar(6) NOT NULL,
  `n_pegawai` varchar(30) NOT NULL,
  `j_pegawai` varchar(30) NOT NULL,
  `d_pegawai` varchar(30) NOT NULL,
  `n_proyek` varchar(30) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `status` text NOT NULL,
  `ket_petugas` varchar(100) NOT NULL,
  `tgl_lapor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `n_pegawai`, `j_pegawai`, `d_pegawai`, `n_proyek`, `ket`, `status`, `ket_petugas`, `tgl_lapor`) VALUES
('NP0001', 'tim 1', 'Perencana', 'Pengairan', 'Perbaikan fungsi saluran air', 'Perbaikan', 'Selesai dikerjakan', '2', '2023-01-04'),
('NP0002', 'tim 1', 'Perencana', 'Perumahan', 'Renovasi Rumah Kampung Gadang', 'Hancur diakibatkan oleh bencana', 'Selesai dikerjakan', '-', '2023-05-09'),
('NP0003', 'tim 2', 'Pelaksana', 'Pertamanan', 'Pelestarian Taman Kota', 'Diperlukan Tambahan Pot Bunga', 'Selesai dikerjakan', '-', '2023-01-11'),
('NP0004', 'tim 2', 'Perencana', 'Bina Marga', 'Proyek Penyelenggaraan Jalan A', 'Jln A. Yani 1 - Jln A. Yani 10', 'Selesai dikerjakan', 'bye', '2023-01-11'),
('NP0005', 'tim 2', 'Fungsional', 'Bina Marga', 'Jembatan', 'Keusakan rel jembatan', 'Selesai dikerjakan', 'asdadsasddsa\r\ns', '2023-05-02'),
('NP0006', 'tim 1', 'Fungsional', 'Bina Marga', 'project team 1', 'team 1 test', 'Selesai dikerjakan', 'team 1 test', '2023-01-18'),
('NP0007', 'tim 2', 'Fungsional', 'Bina Marga', 'project team 2', 'project team 2 test', 'Selesai dikerjakan', 'team 2saja\r\n', '2023-01-18'),
('NP0008', 'tim 1', 'Fungsional', 'Bina Marga', 'proyek team 1', 'test team 1', 'Selesai dikerjakan', 'selesai\r\n', '2023-01-18'),
('NP0009', 'tim 2', 'Fungsional', 'Bina Marga', 'Test tim 2', 'test tiim 2', 'Selesai dikerjakan', 'adawada', '2023-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(16) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `img`, `status`) VALUES
('1', 'admin', '$2y$10$PKICRYAC5nQGKRPL/i8ll.oB3Axxtmlkj7nY3GFyXNE1SoDEcCynq', 'Admin', '1791963659_avatar.png', 1),
('2', 'tim 1', '$2y$10$XhBPjwZKJSuU9Tto9RB/7.Dd69Mbxg3KB/KJG87f4CfM1jw1OlvA6', 'Taurus', 'default.jpg', 1),
('3', 'tim 2', '$2y$10$qnihee8lHt0RHEe6CwN6Ee1xJBoq3GLlrxfRmnYBhUkYb3NLnWE6y', 'Sagitarius', 'default.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
