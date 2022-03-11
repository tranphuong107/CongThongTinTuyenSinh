-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 11, 2022 lúc 08:58 AM
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
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`PostID`, `Category`, `Title`, `Content`, `CreatedAt`, `Image`, `UserID`) VALUES
(2, 'Thông tin tuyển sinh', 'Các ngành tuyển sinh đại học chính quy năm 2020', 'Năm 2020, Trường Đại học Thủy lợi tuyển sinh 23 ngành và nhóm ngành, trong đó có 2 ngành Chương trình tiên tiến giảng dạy bằng Tiếng Anh. Trường tuyển sinh tại 3 cơ sở với tổng chỉ tiêu là 3700.', '2022-01-21 17:00:00', '2', 1),
(14, 'Giới thiệu', 'Chiến lược phát triển Trường Đại học Thuỷ Lợi giai đoạn 2016 – 2020 tầm nhìn 2030', '<h2><strong>Chiến lược phát triển Trường Đại học Thuỷ Lợi giai đoạn 2016 – 2020 tầm nhìn 2030</strong></h2><p><strong>I. Sứ mệnh, tầm nhìn, giá trị cốt lõi, triết lý giáo dục:</strong></p><p><strong>1. Sứ mệnh:</strong></p><p><i>&nbsp;</i>Trường Đại học Thuỷ lợi là trường đại học công lập có sứ mệnh đào tạo nguồn nhân lực chất lượng cao, nghiên cứu khoa học, phát triển và chuyển giao công nghệ tiên tiến trong các ngành khoa học, kỹ thuật, kinh tế và quản lý, đặc biệt trong lĩnh vực thuỷ lợi, môi trường, phòng chống và giảm nhẹ thiên tai; góp phần thúc đẩy nhanh quá trình công nghiệp hoá, hiện đại hoá và phát triển bền vững Tổ quốc Việt Nam.</p><p><strong>2. Tầm nhìn:</strong></p><p>Trường Đại học Thuỷ lợi là trường đại học số 1 trong lĩnh vực thuỷ lợi, thuỷ điện, tài nguyên, môi trường, phòng chống và giảm nhẹ thiên tai; phấn đấu là một trong các trường đại học đa ngành hàng đầu của Việt Nam, có năng lực hội nhập cao với hệ thống giáo dục đại học khu vực và quốc tế.</p><p><strong>Giá trị cốt lõi:</strong></p><p><i>(1)&nbsp; Đoàn kết</i>: Trong suốt quá trình xây dựng và phát triển, tập thể cán bộ, giảng viên và sinh viên Trường Đại học Thuỷ lợi đã luôn đoàn kết, đồng lòng. Đoàn kết chính là sức mạnh giúp Nhà trường vượt qua mọi khó khăn, thách thức hoàn thành tốt nhiệm vụ được giao và đạt được các mục tiêu phát triển.</p><p><i>(2)&nbsp; Chính trực</i>: Trung thực gắn liền với đạo đức tạo nên sự chính trực – là nguyên tắc sống và làm việc của các thế hệ lãnh đạo, cán bộ, giảng viên và sinh viên Trường Đại học Thuỷ lợi. Nuôi dưỡng và bồi đắp lòng chính trực là điều vô cùng quan trọng tạo nên sự thành công của Nhà trường.</p><p><i>(3)&nbsp; Tôn trọng</i>: Lắng nghe tích cực, tôn trọng sự đa dạng và sự khác biệt của các giá trị cá nhân để phát huy tối đa năng lực mỗi cá nhân, đồng thời tôn trọng tập thể &nbsp;là yếu tố cơ bản tạo dựng môi trường làm việc và học tập thân thiện tại Trường Đại học Thuỷ lợi.</p><p><i>(4)&nbsp; Chất lượng</i>: Chất lượng chứ không phải tên gọi làm nên thương hiệu trường đại học. Phát triển các nguồn lực, đầu tư cho chất lượng – là yếu tố quyết định đẩy mạnh thương &nbsp;hiệu Trường Đại học Thuỷ lợi.</p><p><i>(5)&nbsp; &nbsp;Khát vọng: </i>Chúng tôi nhận thức rõ mình đang ở đâu và cùng nhau quyết tâm bằng những chương trình hành động cụ thể, phấn đấu trở thành một trong những trường đại học hàng đầu trong nước và có vị trí nhất định trong khu vực.</p><p><i><strong>Triết lý giáo dục: “Học tập vì ngày mai lập nghiệp”</strong></i></p><p><strong>II. CHIẾN LƯỢC ĐÀO TẠO</strong></p><p>– Quy mô tuyển sinh trình độ đại học giữ ổn định (đảm bảo quy mô đào tạo là 15.000 sinh viên chính quy theo quy định của Bộ GD&amp;ĐT). Tăng quy mô tuyển sinh trình độ thạc sĩ và tiến sĩ.</p><p>– Tiếp tục phát triển mở rộng ngành nghề đào tạo,ưu tiên mở các ngành nghề mà xã hội có nhu cầu lớn.</p><p>– Tiếp tục rà soát, hoàn chỉnh chương trình đào tạo cho tất cả các bậc, cáchệ.</p><p>– Nâng cao chất lượng dạy và học.</p><p><strong>III. CHIẾN LƯỢC KHOA HỌC CÔNG NGHỆ</strong></p><p>Hợp tác, xây dựng và phát triển một số lĩnh vực khoa học công nghệ mũi nhọn và truyền thống, tạo khả năng thương mại để giải quyết các vấn đề khoa học từ thực tế yêu cầu, phát triển trường ĐHTL thành trường đại học nghiên cứu tiên tiến về lĩnh vực công nghệ thủy lợi, thủy điện, môi trường.</p><p><i><strong>Mục tiêu cụ thể:</strong></i></p><p>– Bám sát các chương trình khoa học công nghệ (KHCN) và chương trình phát triển kinh tế xã hội của Trung ương và địa phương, liên kết với các nước và các tổ chức quốc tế để giải quyết các vấn đề KHCN có yêu cầu cấp thiết từ thực tế.</p><p>– Phát triển một số lĩnh vực KHCN mũi nhọn truyền thống trong tính toán, dự báo, thiết kế, ứng dụng công nghệ và vật liệu mới, tạo khả năng thương mại và hợp tác quốc tế.</p><p>– Phấn đấu tăng nguồn thu từ hoạt động KHCN so với giai đoạn trước.</p><p>– Tăng cường hội nhập và công bố quốc tế.</p><p><strong>IV. CHIẾN LƯỢC PHÁT TRIỂN NGUỒN NHÂN LỰC</strong></p><p>Bộ máy tổ chức của Trường được rà soát, kiện toàn theo hướng tinh gọn, hiệu quả, phù hợp với sứ mệnh và tầm nhìn của Trường, đáp ứng tốt yêu cầu hội nhập quốc tế.</p><p>Hệ thống các văn bản thể chế của Nhà trường đầy đủ, đúng pháp luật, khoa học, được rà soát, cập nhật thường xuyên, đáp ứng tốt yêu cầu công tác lãnh đạo và quản lý.</p><p>Đội ngũ CBVC có số lượng và cơ cấu hợp lý, phù hợp khi Trường được giao tự chủ; đội ngũ cán bộ giảng dạy và nghiên cứu đáp ứng tốt yêu cầu của một trường đại học đa ngành.</p><p><strong>V. CHIẾN LƯỢC CƠ SỞ VẬT CHẤT</strong></p><p>Chiến lược phát triển cơ sở vật chất được đề ra cụ thể các công việc, hạng mục trọng tâm đáp ứng sự phát triển mở rộng ngành nghề đào tạo, điều chỉnh cơ cấu ngành nghề và nâng cao chất lượng đào tạo đủ đáp ứng xã hội có nhu cầu lớn trong lộ trình thực hiện tiến tới mục tiêu:&nbsp; “Cơ sở hạ tầng của Trường Đại học Thủy lợi sẽ được xây dựng theo các tiêu chuẩn của Việt Nam”.</p><p>Phát triển cơ sở vật chất phù hợp với lộ trình thực hiện cơ chế tự chủ đại học và việc phân cấp, phân quyền đang được đẩy mạnh trong giáo dục; cơ hội thuận lợi cho các hoạt động của trường.</p><p><strong>VI. CHIẾN LƯỢC NGUỒN TÀI CHÍNH VÀ TIỀN LƯƠNG</strong></p><p>–&nbsp; Xây dựng phương thức quản lý để tăng cường phát triển, thu hút, sử dụng hiệu quả các nguồn lực tài chính và tiến tới cơ chế tự chủ về tài chính song song với xu thế mở rộng quyền tự chủ cho các Trường đại học.</p><p>– Thực hiện đa dạng hóa nguồn tài chính bao gồm các nguồn từ đào tạo, nghiên cứu khoa học, nguồn dự án, nguồn phát triển các hoạt động dịch vụ hỗ trợ cộng đồng, nguồn từ giáo trình, tài liệu và cung cấp thông tin, nguồn hỗ trợ từ các doanh nghiệp, tổ chức tín dụng, cựu sinh viên và từ ngân sách.</p><p>– Xây dựng cơ chế tài chính hợp lý, có khả năng khai thác, thu hút nguồn nhân lực, đáp ứng yêu cầu phát triển của cơ sở đào tạo cả về quy mô và chất lượng một cách bền vững.</p><p>– Đảm bảo thu nhập của người lao động tăng hàng năm, đáp ứng nhu cầu ngày càng cao của người lao động.</p><p><strong>VII. CHIẾN LƯỢC HỢP TÁC QUỐC TẾ</strong></p><p>Tăng cường hội nhập quốc tế, đa dạng hóa các hoạt động hợp tác trong tất cả các lĩnh vực, gồm: đào tạo, nghiên cứu khoa học, phát triển công nghệ và dịch vụ tư vấn ở Việt Nam và khu vực phù hợp với bối cảnh nguồn ODA không hoàn lại cho Việt Nam sẽ giảm đáng kể trong thời gian tới, đồng thời giúp tăng cường uy tín của Nhà trường trong cộng đồng quốc tế.</p><p><strong>VII. CHIẾN LƯỢC CÔNG NGHỆ THÔNG TIN</strong></p><p>Chiến lược phát triển sẽ đưa trường Đại học Thủy lợi thành một trường tiên tiến trong khu vực tận dụng các ứng dụng công nghệ thông tin tiên tiến trong giảng dạy, khoa học và công nghệ theo xu thế chuyển đổi số đáp ứng cuộc cách mạng công nghiệp lần thứ tư. Việc đầu tư sẽ được thực hiện và kế hoạch nâng cấp sẽ được áp dụng cho từng khoa, viện, trung tâm để các đơn vị này có thể tự xây dựng chiến lược phát triển công nghệ thông tin của đơn vị mình.</p><p><strong>VIII. CHIẾN LƯỢC CÔNG TÁC SINH VIÊN</strong></p><p>– Thu hút thí sinh đăng ký vào Trường ngày càng tăng cả về số lượng và chất lượng.</p><p>– Nâng cao chất lượng của sinh viên trong học tập, rèn luyện, nghiên cứu khoa học và hoạt động tập thể để sinh viên phát triển phát triển toàn diện, có đạo đức, tri thức, sức khoẻ, thẩm mỹ và nghề nghiệp đáp ứng tốt yêu cầu của các đơn vị tuyển dụng.</p><p>– Sinh viên ra trường có việc làm.</p><p><strong>XII. CHIẾN LƯỢC ĐẢM BẢO VÀ KIỂM ĐỊNH CHẤT LƯỢNG GIÁO DỤC</strong></p><p>Chiến lược Đảm bảo và Kiểm định chất lượng giáo dục giai đoạn 2016-2020 với quan điểm&nbsp; “<i>chất lượng đào tạo là mục tiêu hàng đầu và phải luôn tự đánh giá, kiểm tra chất lượng bằng nhiều phương pháp, nhiều nguồn thông tin để có giải pháp điều chỉnh cho thích hợp, nhằm mục đích ngày càng nâng cao chất lượng đào tạo. Kiểm định chất lượng cần tập trung vào kiểm tra mục tiêu đào tạo, kết quả thực hiện, về nguồn nhân lực, vật lực và sự chuẩn bị cho giai đoạn kế tiếp để đảm bảo thực hiện thành công toàn bộ chiến lược phát triển</i>”.</p><p>Kế hoạch chiến lược phát triển Trường Đại học Thủy lợi chi tiết cho giai đoạn 2016 – 2020, tầm nhìn đến năm 2030 được xây dựng trước hết dựa trên khung chiến lược cho cả giai đoạn 2006 – 2020; Dựa trên những văn bản pháp lý được cập nhật mới nhất, dựa trên những bài học kinh nghiệm đúc kết được trong quá trình thực hiện Chiến lược phát triển Trường Đại học Thủy lợi giai đoạn trước. Với quan điểm coi trọng khả năng thực thi, những mục tiêu và kế hoạch chiến lược phát triển giai đoạn 2016-2020 đã được xây dựng có tính hiện thực hóa tương đối cao.</p>', '2022-03-11 03:56:00', '', 1),
(23, 'Ngành đào tạo', 'Logistics và Quản lý chuỗi cung ứng', '<p>MÃ TRƯỜNG ĐẠI HỌC THỦY LỢI: TLA112</p><p>MÃ NGÀNH: 7510605</p><p>CHỈ TIÊU: 90</p><p>HỌC PHÍ TRUNG BÌNH MỖI KỲ: ~5 triệu</p><p>4 MÃ TỔ HỢP MÔN XÉT TUYỂN:</p><p>Toán, Vật lý, Hóa học (A00)</p><p>Toán, Vật lý, Tiếng Anh (A01)</p><p>Toán, Ngữ văn, Tiếng Anh (D01)</p><p>Toán, Ngữ văn, KHXH (C15)</p><p>CƠ HỘI VIỆC LÀM NGÀNH LOGISTICS VÀ QUẢN LÝ CHUỖI CUNG ỨNG</p><p>Cử nhân ngành Logistics và Quản lý Chuỗi cung ứng có cơ hội việc làm đa dạng và thu nhập cao, đặc biệt trong bối cảnh Việt Nam ngày càng hội nhập kinh tế quốc tế và tham gia chuỗi giá trị và cung ứng toàn cầu. Cử nhân ngành này có thể đảm nhận&nbsp; các công việc cụ thể như: Chuyên viên, trưởng bộ phận, trưởng phòng quản lý logistics và chuỗi cung ứng đầu vào và đầu ra cho các doanh nghiệp và đơn vị hành chính sự nghiệp; Lập kế hoạch và kinh doanh kho vận và các thủ tục hàng hóa xuất nhập khẩu trong các tập đoàn, doanh nghiệp và cơ quan quản lý nhà nước như hải quan, thuế, cảng biển, sân bay, khu chế xuất, đặc khu kinh tế…</p>', '2022-03-11 04:24:15', '', 1);

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
  `Status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Hoạt động'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `Password`, `FullName`, `Email`, `PhoneNumber`, `Types`, `Status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '035782747533', 'Quản trị viên', 'Hoạt động');

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
  MODIFY `PostID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
