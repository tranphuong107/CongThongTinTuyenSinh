-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 09, 2022 lúc 04:05 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `admissions_portal`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `PostID` int(10) UNSIGNED NOT NULL,
  `Category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `CreatedAt` date NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`PostID`, `Category`, `Title`, `Content`, `CreatedAt`, `Image`, `UserID`) VALUES
(1, 'Giới thiệu', 'Chiến lược phát triển Trường Đại học Thuỷ Lợi giai đoạn 2016 – 2020 tầm nhìn 2030', 'I. Sứ mệnh, tầm nhìn, giá trị cốt lõi, triết lý giáo dục:\r\n\r\n1. Sứ mệnh:\r\n\r\n Trường Đại học Thuỷ lợi là trường đại học công lập có sứ mệnh đào tạo nguồn nhân lực chất lượng cao, nghiên cứu khoa học, phát triển và chuyển giao công nghệ tiên tiến trong các ngành khoa học, kỹ thuật, kinh tế và quản lý, đặc biệt trong lĩnh vực thuỷ lợi, môi trường, phòng chống và giảm nhẹ thiên tai; góp phần thúc đẩy nhanh quá trình công nghiệp hoá, hiện đại hoá và phát triển bền vững Tổ quốc Việt Nam.', '2022-01-19', ' 1', 1),
(2, 'Thông tin tuyển sinh', 'Các ngành tuyển sinh đại học chính quy năm 2020', 'Năm 2020, Trường Đại học Thủy lợi tuyển sinh 23 ngành và nhóm ngành, trong đó có 2 ngành Chương trình tiên tiến giảng dạy bằng Tiếng Anh. Trường tuyển sinh tại 3 cơ sở với tổng chỉ tiêu là 3700.', '2022-01-22', '2', 1),
(3, 'Ngành đào tạo', 'Logistics và Quản lý chuỗi cung ứng', 'MÃ TRƯỜNG ĐẠI HỌC Thủy Lợi: TLA112\r\nMÃ NGÀNH: 7510605\r\nCHỈ TIÊU: 90\r\nHỌC PHÍ TRUNG BÌNH MỖI KỲ: ~5 triệu\r\n4 MÃ TỔ HỢP MÔN XÉT TUYỂN:\r\nToán, Vật lý, Hóa học (A00)\r\nToán, Vật lý, Tiếng Anh (A01)\r\nToán, Ngữ văn, Tiếng Anh (D01)\r\nToán, Ngữ văn, KHXH (C15)', '2022-01-10', '3', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `UserID` int(10) UNSIGNED NOT NULL,
  `UserName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNumber` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Types` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Thành viên',
  `Status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Đang hoạt động'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `Password`, `FullName`, `Email`, `PhoneNumber`, `Types`, `Status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '035782747533', 'Quản trị viên', 'Đang hoạt động');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`PostID`),
  ADD KEY `UserID` (`UserID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `PostID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
