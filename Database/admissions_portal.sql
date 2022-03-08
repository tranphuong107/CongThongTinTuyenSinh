-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 08, 2022 lúc 04:18 AM
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
  `Title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `CreatedAt` date NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`PostID`, `Title`, `Content`, `CreatedAt`, `Image`, `UserID`) VALUES
(1, 'Chiến lược phát triển Trường Đại học Thuỷ Lợi giai đoạn 2016 – 2020 tầm nhìn 2030', 'I. Sứ mệnh, tầm nhìn, giá trị cốt lõi, triết lý giáo dục:\r\n\r\n1. Sứ mệnh:\r\n\r\n Trường Đại học Thuỷ lợi là trường đại học công lập có sứ mệnh đào tạo nguồn nhân lực chất lượng cao, nghiên cứu khoa học, phát triển và chuyển giao công nghệ tiên tiến trong các ngành khoa học, kỹ thuật, kinh tế và quản lý, đặc biệt trong lĩnh vực thuỷ lợi, môi trường, phòng chống và giảm nhẹ thiên tai; góp phần thúc đẩy nhanh quá trình công nghiệp hoá, hiện đại hoá và phát triển bền vững Tổ quốc Việt Nam.', '2022-01-19', ' ', 1);

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
  MODIFY `PostID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
