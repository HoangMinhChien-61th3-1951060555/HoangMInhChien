-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 03:02 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060555_employees`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phongban` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luong` float DEFAULT NULL,
  `ngayvaolam` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `hovaten`, `chucvu`, `phongban`, `luong`, `ngayvaolam`) VALUES
(1, 'Phạm Anh A', 'Quản lý', 'Nhân Sự', 500000, '0000-00-00'),
(2, 'Phạm Nan B', 'Quản lý', 'Nhân Sự', 500000, '0000-00-00'),
(3, 'Nguyễn Đình Ân', 'Nhân Viên', 'Nhân Sự', 200000, '0000-00-00'),
(4, 'Vương  Quyên', 'Nhân Viên', 'Nhân Sự', 200000, '0000-00-00'),
(5, 'Phạm Cường ', 'Nhân Viên', 'Nhân Sự', 200000, '0000-00-00'),
(6, 'Vũ Mạnh Cường', 'Nhân Viên', 'Nhân Sự', 200000, '0000-00-00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `maNV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
