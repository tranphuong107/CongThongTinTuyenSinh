-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 17, 2022 lúc 03:04 PM
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
-- Cấu trúc bảng cho bảng `aspirations`
--

CREATE TABLE `aspirations` (
  `AspID` int(10) UNSIGNED NOT NULL,
  `Majors` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Subject` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CanID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `candidates`
--

CREATE TABLE `candidates` (
  `CanID` int(10) UNSIGNED NOT NULL,
  `CanName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DateOfBirth` date NOT NULL,
  `BirthPlace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IC` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNumber` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SchoolAddress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SchoolName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GraduationYear` int(4) NOT NULL,
  `SumScore` decimal(4,2) NOT NULL,
  `Conduct` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Maths` decimal(4,2) NOT NULL,
  `Literature` decimal(4,2) NOT NULL,
  `English` decimal(4,2) NOT NULL,
  `Physics` decimal(4,2) NOT NULL,
  `Chemistry` decimal(4,2) NOT NULL,
  `Biology` decimal(4,2) NOT NULL,
  `History` decimal(4,2) NOT NULL,
  `Geography` decimal(4,2) NOT NULL,
  `ImgSchoolPro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FrontPhotoIC` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `BackPhotoIC` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(14, 'Giới thiệu', 'Chiến lược phát triển Trường Đại học Thuỷ Lợi giai đoạn 2016 – 2020 tầm nhìn 2030', '<h2><strong>Chiến lược phát triển Trường Đại học Thuỷ Lợi giai đoạn 2016 – 2020 tầm nhìn 2030</strong></h2><p><strong>I. Sứ mệnh, tầm nhìn, giá trị cốt lõi, triết lý giáo dục:</strong></p><p><strong>1. Sứ mệnh:</strong></p><p><i>&nbsp;</i>Trường Đại học Thuỷ lợi là trường đại học công lập có sứ mệnh đào tạo nguồn nhân lực chất lượng cao, nghiên cứu khoa học, phát triển và chuyển giao công nghệ tiên tiến trong các ngành khoa học, kỹ thuật, kinh tế và quản lý, đặc biệt trong lĩnh vực thuỷ lợi, môi trường, phòng chống và giảm nhẹ thiên tai; góp phần thúc đẩy nhanh quá trình công nghiệp hoá, hiện đại hoá và phát triển bền vững Tổ quốc Việt Nam.</p><p><strong>2. Tầm nhìn:</strong></p><p>Trường Đại học Thuỷ lợi là trường đại học số 1 trong lĩnh vực thuỷ lợi, thuỷ điện, tài nguyên, môi trường, phòng chống và giảm nhẹ thiên tai; phấn đấu là một trong các trường đại học đa ngành hàng đầu của Việt Nam, có năng lực hội nhập cao với hệ thống giáo dục đại học khu vực và quốc tế.</p><p><strong>Giá trị cốt lõi:</strong></p><p><i>(1)&nbsp; Đoàn kết</i>: Trong suốt quá trình xây dựng và phát triển, tập thể cán bộ, giảng viên và sinh viên Trường Đại học Thuỷ lợi đã luôn đoàn kết, đồng lòng. Đoàn kết chính là sức mạnh giúp Nhà trường vượt qua mọi khó khăn, thách thức hoàn thành tốt nhiệm vụ được giao và đạt được các mục tiêu phát triển.</p><p><i>(2)&nbsp; Chính trực</i>: Trung thực gắn liền với đạo đức tạo nên sự chính trực – là nguyên tắc sống và làm việc của các thế hệ lãnh đạo, cán bộ, giảng viên và sinh viên Trường Đại học Thuỷ lợi. Nuôi dưỡng và bồi đắp lòng chính trực là điều vô cùng quan trọng tạo nên sự thành công của Nhà trường.</p><p><i>(3)&nbsp; Tôn trọng</i>: Lắng nghe tích cực, tôn trọng sự đa dạng và sự khác biệt của các giá trị cá nhân để phát huy tối đa năng lực mỗi cá nhân, đồng thời tôn trọng tập thể &nbsp;là yếu tố cơ bản tạo dựng môi trường làm việc và học tập thân thiện tại Trường Đại học Thuỷ lợi.</p><p><i>(4)&nbsp; Chất lượng</i>: Chất lượng chứ không phải tên gọi làm nên thương hiệu trường đại học. Phát triển các nguồn lực, đầu tư cho chất lượng – là yếu tố quyết định đẩy mạnh thương &nbsp;hiệu Trường Đại học Thuỷ lợi.</p><p><i>(5)&nbsp; &nbsp;Khát vọng: </i>Chúng tôi nhận thức rõ mình đang ở đâu và cùng nhau quyết tâm bằng những chương trình hành động cụ thể, phấn đấu trở thành một trong những trường đại học hàng đầu trong nước và có vị trí nhất định trong khu vực.</p><p><i><strong>Triết lý giáo dục: “Học tập vì ngày mai lập nghiệp”</strong></i></p><p><strong>II. CHIẾN LƯỢC ĐÀO TẠO</strong></p><p>– Quy mô tuyển sinh trình độ đại học giữ ổn định (đảm bảo quy mô đào tạo là 15.000 sinh viên chính quy theo quy định của Bộ GD&amp;ĐT). Tăng quy mô tuyển sinh trình độ thạc sĩ và tiến sĩ.</p><p>– Tiếp tục phát triển mở rộng ngành nghề đào tạo,ưu tiên mở các ngành nghề mà xã hội có nhu cầu lớn.</p><p>– Tiếp tục rà soát, hoàn chỉnh chương trình đào tạo cho tất cả các bậc, cáchệ.</p><p>– Nâng cao chất lượng dạy và học.</p><p><strong>III. CHIẾN LƯỢC KHOA HỌC CÔNG NGHỆ</strong></p><p>Hợp tác, xây dựng và phát triển một số lĩnh vực khoa học công nghệ mũi nhọn và truyền thống, tạo khả năng thương mại để giải quyết các vấn đề khoa học từ thực tế yêu cầu, phát triển trường ĐHTL thành trường đại học nghiên cứu tiên tiến về lĩnh vực công nghệ thủy lợi, thủy điện, môi trường.</p><p><i><strong>Mục tiêu cụ thể:</strong></i></p><p>– Bám sát các chương trình khoa học công nghệ (KHCN) và chương trình phát triển kinh tế xã hội của Trung ương và địa phương, liên kết với các nước và các tổ chức quốc tế để giải quyết các vấn đề KHCN có yêu cầu cấp thiết từ thực tế.</p><p>– Phát triển một số lĩnh vực KHCN mũi nhọn truyền thống trong tính toán, dự báo, thiết kế, ứng dụng công nghệ và vật liệu mới, tạo khả năng thương mại và hợp tác quốc tế.</p><p>– Phấn đấu tăng nguồn thu từ hoạt động KHCN so với giai đoạn trước.</p><p>– Tăng cường hội nhập và công bố quốc tế.</p><p><strong>IV. CHIẾN LƯỢC PHÁT TRIỂN NGUỒN NHÂN LỰC</strong></p><p>Bộ máy tổ chức của Trường được rà soát, kiện toàn theo hướng tinh gọn, hiệu quả, phù hợp với sứ mệnh và tầm nhìn của Trường, đáp ứng tốt yêu cầu hội nhập quốc tế.</p><p>Hệ thống các văn bản thể chế của Nhà trường đầy đủ, đúng pháp luật, khoa học, được rà soát, cập nhật thường xuyên, đáp ứng tốt yêu cầu công tác lãnh đạo và quản lý.</p><p>Đội ngũ CBVC có số lượng và cơ cấu hợp lý, phù hợp khi Trường được giao tự chủ; đội ngũ cán bộ giảng dạy và nghiên cứu đáp ứng tốt yêu cầu của một trường đại học đa ngành.</p><p><strong>V. CHIẾN LƯỢC CƠ SỞ VẬT CHẤT</strong></p><p>Chiến lược phát triển cơ sở vật chất được đề ra cụ thể các công việc, hạng mục trọng tâm đáp ứng sự phát triển mở rộng ngành nghề đào tạo, điều chỉnh cơ cấu ngành nghề và nâng cao chất lượng đào tạo đủ đáp ứng xã hội có nhu cầu lớn trong lộ trình thực hiện tiến tới mục tiêu:&nbsp; “Cơ sở hạ tầng của Trường Đại học Thủy lợi sẽ được xây dựng theo các tiêu chuẩn của Việt Nam”.</p><p>Phát triển cơ sở vật chất phù hợp với lộ trình thực hiện cơ chế tự chủ đại học và việc phân cấp, phân quyền đang được đẩy mạnh trong giáo dục; cơ hội thuận lợi cho các hoạt động của trường.</p><p><strong>VI. CHIẾN LƯỢC NGUỒN TÀI CHÍNH VÀ TIỀN LƯƠNG</strong></p><p>–&nbsp; Xây dựng phương thức quản lý để tăng cường phát triển, thu hút, sử dụng hiệu quả các nguồn lực tài chính và tiến tới cơ chế tự chủ về tài chính song song với xu thế mở rộng quyền tự chủ cho các Trường đại học.</p><p>– Thực hiện đa dạng hóa nguồn tài chính bao gồm các nguồn từ đào tạo, nghiên cứu khoa học, nguồn dự án, nguồn phát triển các hoạt động dịch vụ hỗ trợ cộng đồng, nguồn từ giáo trình, tài liệu và cung cấp thông tin, nguồn hỗ trợ từ các doanh nghiệp, tổ chức tín dụng, cựu sinh viên và từ ngân sách.</p><p>– Xây dựng cơ chế tài chính hợp lý, có khả năng khai thác, thu hút nguồn nhân lực, đáp ứng yêu cầu phát triển của cơ sở đào tạo cả về quy mô và chất lượng một cách bền vững.</p><p>– Đảm bảo thu nhập của người lao động tăng hàng năm, đáp ứng nhu cầu ngày càng cao của người lao động.</p><p><strong>VII. CHIẾN LƯỢC HỢP TÁC QUỐC TẾ</strong></p><p>Tăng cường hội nhập quốc tế, đa dạng hóa các hoạt động hợp tác trong tất cả các lĩnh vực, gồm: đào tạo, nghiên cứu khoa học, phát triển công nghệ và dịch vụ tư vấn ở Việt Nam và khu vực phù hợp với bối cảnh nguồn ODA không hoàn lại cho Việt Nam sẽ giảm đáng kể trong thời gian tới, đồng thời giúp tăng cường uy tín của Nhà trường trong cộng đồng quốc tế.</p><p><strong>VII. CHIẾN LƯỢC CÔNG NGHỆ THÔNG TIN</strong></p><p>Chiến lược phát triển sẽ đưa trường Đại học Thủy lợi thành một trường tiên tiến trong khu vực tận dụng các ứng dụng công nghệ thông tin tiên tiến trong giảng dạy, khoa học và công nghệ theo xu thế chuyển đổi số đáp ứng cuộc cách mạng công nghiệp lần thứ tư. Việc đầu tư sẽ được thực hiện và kế hoạch nâng cấp sẽ được áp dụng cho từng khoa, viện, trung tâm để các đơn vị này có thể tự xây dựng chiến lược phát triển công nghệ thông tin của đơn vị mình.</p><p><strong>VIII. CHIẾN LƯỢC CÔNG TÁC SINH VIÊN</strong></p><p>– Thu hút thí sinh đăng ký vào Trường ngày càng tăng cả về số lượng và chất lượng.</p><p>– Nâng cao chất lượng của sinh viên trong học tập, rèn luyện, nghiên cứu khoa học và hoạt động tập thể để sinh viên phát triển phát triển toàn diện, có đạo đức, tri thức, sức khoẻ, thẩm mỹ và nghề nghiệp đáp ứng tốt yêu cầu của các đơn vị tuyển dụng.</p><p>– Sinh viên ra trường có việc làm.</p><p><strong>XII. CHIẾN LƯỢC ĐẢM BẢO VÀ KIỂM ĐỊNH CHẤT LƯỢNG GIÁO DỤC</strong></p><p>Chiến lược Đảm bảo và Kiểm định chất lượng giáo dục giai đoạn 2016-2020 với quan điểm&nbsp; “<i>chất lượng đào tạo là mục tiêu hàng đầu và phải luôn tự đánh giá, kiểm tra chất lượng bằng nhiều phương pháp, nhiều nguồn thông tin để có giải pháp điều chỉnh cho thích hợp, nhằm mục đích ngày càng nâng cao chất lượng đào tạo. Kiểm định chất lượng cần tập trung vào kiểm tra mục tiêu đào tạo, kết quả thực hiện, về nguồn nhân lực, vật lực và sự chuẩn bị cho giai đoạn kế tiếp để đảm bảo thực hiện thành công toàn bộ chiến lược phát triển</i>”.</p><p>Kế hoạch chiến lược phát triển Trường Đại học Thủy lợi chi tiết cho giai đoạn 2016 – 2020, tầm nhìn đến năm 2030 được xây dựng trước hết dựa trên khung chiến lược cho cả giai đoạn 2006 – 2020; Dựa trên những văn bản pháp lý được cập nhật mới nhất, dựa trên những bài học kinh nghiệm đúc kết được trong quá trình thực hiện Chiến lược phát triển Trường Đại học Thủy lợi giai đoạn trước. Với quan điểm coi trọng khả năng thực thi, những mục tiêu và kế hoạch chiến lược phát triển giai đoạn 2016-2020 đã được xây dựng có tính hiện thực hóa tương đối cao.</p>', '2022-03-11 10:05:09', 'logo.png', 1),
(23, 'Ngành đào tạo', 'Logistics và Quản lý chuỗi cung ứng', '<p>MÃ TRƯỜNG ĐẠI HỌC THỦY LỢI: TLA112</p><p>MÃ NGÀNH: 7510605</p><p>CHỈ TIÊU: 90</p><p>HỌC PHÍ TRUNG BÌNH MỖI KỲ: ~5 triệu</p><p>4 MÃ TỔ HỢP MÔN XÉT TUYỂN:</p><p>Toán, Vật lý, Hóa học (A00)</p><p>Toán, Vật lý, Tiếng Anh (A01)</p><p>Toán, Ngữ văn, Tiếng Anh (D01)</p><p>Toán, Ngữ văn, KHXH (C15)</p><p>CƠ HỘI VIỆC LÀM NGÀNH LOGISTICS VÀ QUẢN LÝ CHUỖI CUNG ỨNG</p><p>Cử nhân ngành Logistics và Quản lý Chuỗi cung ứng có cơ hội việc làm đa dạng và thu nhập cao, đặc biệt trong bối cảnh Việt Nam ngày càng hội nhập kinh tế quốc tế và tham gia chuỗi giá trị và cung ứng toàn cầu. Cử nhân ngành này có thể đảm nhận&nbsp; các công việc cụ thể như: Chuyên viên, trưởng bộ phận, trưởng phòng quản lý logistics và chuỗi cung ứng đầu vào và đầu ra cho các doanh nghiệp và đơn vị hành chính sự nghiệp; Lập kế hoạch và kinh doanh kho vận và các thủ tục hàng hóa xuất nhập khẩu trong các tập đoàn, doanh nghiệp và cơ quan quản lý nhà nước như hải quan, thuế, cảng biển, sân bay, khu chế xuất, đặc khu kinh tế…</p>', '2022-03-11 10:12:04', 'nganhhoc2.jpg', 1),
(26, 'Thông tin tuyển sinh', 'Phương thức tuyển sinh Đại học Thủy lợi năm 2022', '<h2><strong>Năm 2022, Trường Đại học Thủy lợi tuyển sinh mở 6 ngành học mới gồm: An ninh mạng, Tài chính - ngân hàng, Kiểm toán, Kinh tế số, Luật, Kỹ thuật Robot và điều khiển thông minh.</strong></h2><p><strong>Các ngành xét tuyển vào trường ĐH Thủy lợi năm 2022 dự kiến như sau:</strong></p><figure class=\"table\"><table><tbody><tr><td><strong>STT</strong></td><td><strong>Tên ngành/nhóm ngành</strong></td><td><strong>Tổ hợp xét tuyển</strong></td></tr><tr><td>1</td><td>Kỹ thuật xây dựng công trình thủy</td><td>A00, A01, D01, D07</td></tr><tr><td>2</td><td>Kỹ thuật xây dựng dân dụng và công nghiệp (Kỹ thuật xây dựng) (*)</td><td>A00, A01, D01, D07</td></tr><tr><td>3</td><td>Công nghệ kỹ thuật xây dựng</td><td>A00, A01, D01, D07</td></tr><tr><td>4</td><td>Kỹ thuật xây dựng công trình&nbsp;giao thông</td><td>A00, A01, D01, D07</td></tr><tr><td>5</td><td>Kỹ thuật tài nguyên nước</td><td>A00, A01, D01, D07</td></tr><tr><td>6</td><td>Kỹ thuật cấp thoát nước</td><td>A00, A01, D01, D07</td></tr><tr><td>7</td><td>Kỹ thuật cơ sở hạ tầng</td><td>A00, A01, D01, D07</td></tr><tr><td>8</td><td>Thủy văn học</td><td>A00, A01, D01, D07</td></tr><tr><td>9</td><td>Công nghệ sinh học</td><td>A00, A02, B00, D08</td></tr><tr><td>10</td><td>Kỹ thuật môi trường</td><td>A00, A01, B00, D01</td></tr><tr><td>11</td><td>Kỹ thuật hóa học</td><td>A00, B00, D07</td></tr><tr><td>12</td><td>Công nghệ thông tin (*) (1)</td><td>A00, A01, D01, D07</td></tr><tr><td>13</td><td>Hệ thống thông tin (2)</td><td>A00, A01, D01, D07</td></tr><tr><td>14</td><td>Kỹ thuật phần mềm (3)</td><td>A00, A01, D01, D07</td></tr><tr><td>15</td><td>Trí tuệ nhân tạo và khoa học dữ liệu (4)</td><td>A00, A01, D01, D07</td></tr><tr><td>16</td><td><p>Nhóm ngành Kỹ thuật cơ khí:</p><p>Gồm các ngành: Kỹ thuật cơ khí, Công nghệ chế tạo máy</p></td><td>A00, A01, D01, D07</td></tr><tr><td>17</td><td>Kỹ thuật Ô tô (*)</td><td>A00, A01, D01, D07</td></tr><tr><td>18</td><td>Kỹ thuật cơ điện tử (*)</td><td>A00, A01, D01, D07</td></tr><tr><td>19</td><td>Kỹ thuật điện (*)</td><td>A00, A01, D01, D07</td></tr><tr><td>20</td><td>Kỹ thuật điều khiển và tự động hóa (*)</td><td>A00, A01, D01, D07</td></tr><tr><td>21</td><td>Quản lý xây dựng</td><td>A00, A01, D01, D07</td></tr><tr><td>22</td><td>Kinh tế</td><td>A00, A01, D01, D07</td></tr><tr><td>23</td><td>Quản trị&nbsp;kinh doanh</td><td>A00, A01, D01, D07</td></tr><tr><td>24</td><td>Kế toán</td><td>A00, A01, D01, D07</td></tr><tr><td>25</td><td>Kinh tế xây dựng</td><td>A00, A01, D01, D07</td></tr><tr><td>26</td><td>Logistics và quản lý chuỗi cung ứng</td><td>A00, A01, D01, D07</td></tr><tr><td>27</td><td>Quản trị dịch vụ du lịch và lữ hành</td><td>A00, A01, D01, D07</td></tr><tr><td>28</td><td>Thương mại điện tử</td><td>A00, A01, D01, D07</td></tr><tr><td>29</td><td>Ngôn ngữ Anh</td><td>A01, D01, D07, D08</td></tr><tr><td>30</td><td>Kỹ thuật điện tử - viễn thông</td><td>A00, A01, D01, D07</td></tr><tr><td>31</td><td>An ninh mạng</td><td>A00, A01, D01, D07</td></tr><tr><td>32</td><td>Tài chính - Ngân hàng</td><td>A00, A01, D01, D07</td></tr><tr><td>33</td><td>Kiểm toán</td><td>A00, A01, D01, D07</td></tr><tr><td>34</td><td>Kinh tế số</td><td>A00, A01, D01, D07</td></tr><tr><td>35</td><td>Luật</td><td>A00, A01, C00, D01</td></tr><tr><td>36</td><td>Kỹ thuật Robot và Điều khiển thông minh</td><td>A00, A01, D01, D07</td></tr><tr><td>37</td><td>Chương trình tiên tiến học bằng tiếng Anh ngành&nbsp;Kỹ thuật xây dựng&nbsp;(5)</td><td>A00, A01, D01, D07</td></tr></tbody></table></figure>', '2022-03-11 10:12:25', 'tuyensinh.png', 1),
(27, 'Ngành đào tạo', 'Ngành Kinh doanh thương mại', '<p>MÃ TRƯỜNG ĐẠI HỌC Thủy Lợi: TLA115</p><p>MÃ NGÀNH: 7340121</p><p>CHỈ TIÊU: 120</p><p>HỌC PHÍ TRUNG BÌNH MỖI KỲ: ~5 triệu</p><p>4 MÃ TỔ HỢP MÔN XÉT TUYỂN:</p><p>Toán, Vật lý, Hóa học (A00)</p><p>Toán, Vật lý, Tiếng Anh (A01)</p><p>Toán, Ngữ văn, Tiếng Anh (D01)</p><p>Toán, Ngữ văn, KHXH (C15)</p><p>CƠ HỘI VIỆC LÀM NGÀNH KINH DOANH THƯƠNG MẠI<br>– Sinh viên sau khi tốt nghiệp có khả năng làm việc trong các doanh nghiệp trong nước, các tập đoàn đa quốc gia, các cơ quan quản lí nhà nước, các tổ chức quốc tế. Các vị trí cụ thể: nhân viên và quản lý các bộ phận như bộ phận bán hàng, bộphận kinh doanh xuất nhập khẩu, bộ phận cung ứng, marketing, nghiên cứu đánh giá thị trường.<br>– Sinh viên có thể trở thành nhà khởi nghiệp, chủ các doanh nghiệp vừa và nhỏ<br>– Nghiên cứu viên và giảng viên về QTKD trong các trường đại học, cao đẳng, trung cấp</p>', '2022-03-11 10:10:19', 'nganhhoc1.jpg', 1),
(28, 'Thông tin tuyển sinh', 'Thông báo về việc nhận hồ sơ đăng ký xét tuyển bổ sung đợt 1 theo phương thức xét điểm thi tốt nghiệp THPT năm 2021.', '<p>Trường Đại học Thủy Lợi nhận hồ sơ đăng ký xét tuyển bổ sung đợt 1 theo phương thức xét điểm thi tốt nghiệp THPT năm 2022 gồm những ngành sau:</p><figure class=\"table\"><table><thead><tr><th><strong>TT</strong></th><th><strong>Tên trường, ngành học</strong></th><th><strong>Mã ngành</strong></th><th><strong>Tổ hợp môn xét tuyển</strong></th><th><strong>Mã tổ hợp</strong></th><th><p><strong>Chỉ tiêu</strong></p><p><strong>80</strong></p></th><th><strong>Mức điểm nhận hồ sơ</strong></th></tr></thead><tbody><tr><td>&nbsp;</td><td colspan=\"6\"><strong>Chương trình đại trà</strong></td></tr><tr><td rowspan=\"4\"><strong>1</strong></td><td rowspan=\"4\"><p>Kinh tế nông nghiệp</p><p>&nbsp;</p></td><td rowspan=\"4\">7620115</td><td>Toán, Vật lý, Hóa học;</td><td>A00</td><td rowspan=\"4\"><strong>05</strong></td><td rowspan=\"4\"><strong>16.00</strong></td></tr><tr><td>Toán, Vật lý, Tiếng Anh</td><td>A01</td></tr><tr><td>Toán, Ngữ văn, Tiếng Anh</td><td>D01</td></tr><tr><td>Toán, Ngữ Văn; KHXH</td><td>C15</td></tr><tr><td rowspan=\"4\"><strong>2</strong></td><td rowspan=\"4\"><p>Hệ thống thông tin quản lý, gồm 2 chuyên ngành:</p><p>– Tin học kinh tế;</p><p>– Phân tích dữ liệu Kinh tế – Kinh doanh.</p></td><td rowspan=\"4\">7340405</td><td>Toán, Vật lý, Hóa học;</td><td>A00</td><td rowspan=\"4\"><strong>05</strong></td><td rowspan=\"4\"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>16.00</strong></p></td></tr><tr><td>Toán, Vật lý, Tiếng Anh</td><td>A01</td></tr><tr><td>Toán, Ngữ văn, Tiếng Anh</td><td>D01</td></tr><tr><td>Toán, Ngữ Văn; KHXH</td><td>C15</td></tr><tr><td rowspan=\"4\"><strong>3</strong></td><td rowspan=\"4\"><p>Thống kê kinh tế (Chuyên ngành Thống kê kinh doanh)</p><p>&nbsp;</p></td><td rowspan=\"4\">7310107</td><td>Toán, Vật lý, Hóa học;</td><td>A00</td><td rowspan=\"4\"><strong>10</strong></td><td rowspan=\"4\"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>16.00</strong></p></td></tr><tr><td>Toán, Vật lý, Tiếng Anh</td><td>A01</td></tr><tr><td>Toán, Ngữ văn, Tiếng Anh</td><td>D01</td></tr><tr><td>Toán, Ngữ Văn; KHXH</td><td>C15</td></tr><tr><td rowspan=\"4\"><strong>4</strong></td><td rowspan=\"4\"><p>Kinh tế chính trị</p><p>&nbsp;</p></td><td rowspan=\"4\">7310102</td><td>Toán, Vật lý, Hóa học;</td><td>A00</td><td rowspan=\"4\"><strong>10</strong></td><td rowspan=\"4\"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>16.00</strong></p></td></tr><tr><td>Toán, Vật lý, Tiếng Anh</td><td>A01</td></tr><tr><td>Toán, Ngữ văn, Tiếng Anh</td><td>D01</td></tr><tr><td>Toán, Ngữ Văn; KHXH</td><td>C15</td></tr><tr><td>&nbsp;</td><td colspan=\"6\"><strong>Chương trình liên kết</strong></td></tr><tr><td rowspan=\"4\"><strong>5</strong></td><td rowspan=\"4\"><p>Tài chính – Ngân hàng (Liên kết đồng cấp bằng với trường Đại học Rennes I Cộng hòa Pháp)</p><p>&nbsp;</p></td><td rowspan=\"4\">7349001</td><td>Toán, Vật lý, Hóa học;</td><td>A00</td><td rowspan=\"4\"><strong>10</strong></td><td rowspan=\"4\"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>16.00</strong></p></td></tr><tr><td>Toán, KHXH, Tiếng Anh</td><td>D96</td></tr><tr><td>Toán, Ngữ Văn; Tiếng Anh</td><td>D01</td></tr><tr><td>Toán, Ngữ văn, Tiếng Pháp</td><td>D03</td></tr><tr><td rowspan=\"4\"><strong>6</strong></td><td rowspan=\"4\">Song ngành Kinh tế – Tài chính (Đào tạo bằng tiếng Anh, sử dụng chương trình đào tạo nhập khẩu từ trường Đại học Sysney, Australia)</td><td rowspan=\"4\">7903124</td><td>Toán, Vật lý, Hóa học;</td><td>A00</td><td rowspan=\"4\"><strong>8</strong></td><td rowspan=\"4\"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>16.00</strong></p></td></tr><tr><td>Toán, Vật lý, Tiếng Anh</td><td>A01</td></tr><tr><td>Toán, Ngữ văn, Tiếng Anh</td><td>D01</td></tr><tr><td>Toán, Ngữ Văn; KHXH</td><td>C15</td></tr><tr><td rowspan=\"4\"><strong>7</strong></td><td rowspan=\"4\"><p>Quản trị kinh doanh (Liên kết đào tạo với Đại học Công nghệ Dublin – Ireland)</p><p>&nbsp;</p></td><td rowspan=\"4\">7349002</td><td>Toán, Vật lý, Hóa học;</td><td>A00</td><td rowspan=\"4\"><strong>7</strong></td><td rowspan=\"4\"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>16.00</strong></p></td></tr><tr><td>Toán, Vật lý, Tiếng Anh</td><td>A01</td></tr><tr><td>Toán, Ngữ văn, Tiếng Anh</td><td>D01</td></tr><tr><td>Toán, Ngữ Văn; KHXH</td><td>C15</td></tr><tr><td>&nbsp;</td><td colspan=\"6\"><strong>Chương trình chất lượng cao</strong></td></tr><tr><td rowspan=\"4\"><strong>8</strong></td><td rowspan=\"4\"><p>Kinh tế &nbsp;(chuyên ngành&nbsp; Kế hoạch – Đầu tư)</p><p>&nbsp;</p></td><td rowspan=\"4\">7310101CL</td><td>Toán, Vật lý, Hóa học;</td><td>A00</td><td rowspan=\"4\"><strong>10</strong></td><td rowspan=\"4\"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>18.00</strong></p></td></tr><tr><td>Toán, Vật lý, Tiếng Anh</td><td>A01</td></tr><tr><td>Toán, Ngữ văn, Tiếng Anh</td><td>D01</td></tr><tr><td>Toán, Ngữ Văn; KHXH</td><td>C15</td></tr><tr><td rowspan=\"4\"><strong>9</strong></td><td rowspan=\"4\"><p>Kiểm toán</p><p>&nbsp;</p></td><td rowspan=\"4\">7340302CL</td><td>Toán, Vật lý, Hóa học;</td><td>A00</td><td rowspan=\"4\"><strong>10</strong></td><td rowspan=\"4\"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>17.00</strong></p></td></tr><tr><td>Toán, Vật lý, Tiếng Anh</td><td>A01</td></tr><tr><td>Toán, Ngữ văn, Tiếng Anh</td><td>D01</td></tr><tr><td>Toán, Ngữ Văn; KHXH</td><td>C15</td></tr><tr><td rowspan=\"4\"><strong>10</strong></td><td rowspan=\"4\"><p>Quản trị kinh doanh</p><p>&nbsp;</p></td><td rowspan=\"4\">7340101CL</td><td>Toán, Vật lý, Hóa học;</td><td>A00</td><td rowspan=\"4\"><strong>05</strong></td><td rowspan=\"4\"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>18.00</strong></p></td></tr><tr><td>Toán, Vật lý, Tiếng Anh</td><td>A01</td></tr><tr><td>Toán, Ngữ văn, Tiếng Anh</td><td>D01</td></tr><tr><td>Toán, Ngữ Văn; KHXH</td><td>C15</td></tr></tbody></table></figure><p><strong>I. Điều kiện xét tuyển</strong></p><p>Điểm các môn trong tổ hợp môn xét tuyển là điểm thi của các môn đó trong kỳ thi tốt nghiệp THPT năm 2021. Điều kiện xét tuyển là tổng điểm 3 môn (chưa nhân hệ số, đã cộng điểm ưu tiên) tối thiểu bằng mức điểm nhận hồ sơ ĐKXT.</p><p><strong>II. Đăng ký xét tuyển và công bố kết quả xét tuyển Thí sinh chọn một trong hai hình thức đăng ký sau:</strong></p><p><strong>1. ĐKXT qua đường bưu điện: </strong>Thí sinh nộp hồ sơ ĐKXT bằng cách gửi chuyển phát nhanh (EMS) qua đường bưu điện về Ban Đào tạo và Công tác sinh viên Đại học Huế, số 01 đường Điện Biên Phủ, phường Vĩnh Ninh, thành phố Huế, tỉnh Thừa Thiên Huế.</p><p>&nbsp;Hồ sơ đăng ký xét tuyển gồm có:</p><p>– Phiếu ĐKXT theo mẫu quy định của Đại học Thủy Lợi;</p><p>– Bản chính Giấy chứng nhận kết quả thi tốt nghiệp THPT năm 2022;</p><p>– Lệ phí xét tuyển: Thí sinh được miễn lệ phí xét tuyển.</p><p><strong>2. ĐKXT trực tuyến Thí sinh ĐKXT xét tuyển trực tuyến tại địa chỉ:</strong> Thí sinh trúng tuyển sẽ nộp bản chính các hồ sơ liên quan (ở mục 1) khi làm thủ tục nhập học tại trường)</p><p><strong>3. Thời gian nộp hồ sơ ĐKXT:&nbsp;</strong>Từ ngày 23/9/2021 đến 17g00 ngày 05/10/2021</p><p><strong>4. Công bố kết quả xét tuyển: </strong>Dự kiến trước 17h00 ngày 07 tháng 10 năm 2021.</p>', '2022-03-11 10:14:09', 'tuyensinh.png', 1),
(32, 'Ngành đào tạo', 'Kinh tế quốc tế', '<p>MÃ TRƯỜNG ĐẠI HỌC THỦY LỢI : TLA</p><p>MÃ NGÀNH: 7310106</p><p>CHỈ TIÊU: 70</p><p>HỌC PHÍ TRUNG BÌNH MỖI KỲ: ~5 triệu</p><p>4 MÃ TỔ HỢP MÔN XÉT TUYỂN:</p><p>Toán, Vật lý, Hóa học (A00)</p><p>Toán, Vật lý, Tiếng Anh (A01)</p><p>Toán, Ngữ văn, Tiếng Anh (D01)</p><p>Toán, Ngữ văn, KHXH (C15)</p><p>CƠ HỘI VIỆC LÀM NGÀNH KINH TẾ QUỐC TẾ</p><p>Cử nhân ngành Kinh tế Quốc tế có việc làm đa dạng, thu nhập cao và có cơ hội làm việc trong&nbsp; môi trường quốc tế năng động và hội nhập.&nbsp; Cử nhân ngành Kinh tế Quốc tế có thể đảm nhận các công việc tụ thể như: chuyên viên, trưởng bộ phận, trưởng phòng kế hoạch, phòng kinh doanh trong các tập đoàn, doanh nghiệp; Chuyên viên trong các quỹ đầu tư trong nước và quốc tế; Chuỗi cung ứng toàn cầu; Chuyên viên tại các cơ quan quản lý nhà nước, như hải quan, cửa khẩu, đặc khu kinh tế…</p>', '2022-03-11 14:35:26', 'nganhhoc5.jpg', 1),
(33, 'Ngành đào tạo', 'Ngành Marketing', '<p>MÃ TRƯỜNG ĐẠI HỌC KINH TẾ HUẾ: TLA</p><p>MÃ NGÀNH: 7340115</p><p>CHỈ TIÊU: 150</p><p>HỌC PHÍ TRUNG BÌNH MỖI KỲ: ~5 triệu</p><p>4 MÃ TỔ HỢP MÔN XÉT TUYỂN:</p><p>Toán, Vật lý, Hóa học (A00)</p><p>Toán, Vật lý, Tiếng Anh (A01)</p><p>Toán, Ngữ văn, Tiếng Anh (D01)</p><p>Toán, Ngữ văn, KHXH (C15)</p><p><br>CƠ HỘI VIỆC LÀM NGÀNH MARKETING<br>– Có cơ hội làm việc và trở thành giám đốc các bộ phận marketing, nghiên cứu và đánh giá thị trường, kinh doanh;<br>– Các vị trí công việc cụ thể: nhân viên phòng marketing, phòng kinh doanh, phòng quan hệ công chúng, phòng dịch vụ khách hàng, phòng truyền thông, phòng tổ chức sự kiện…<br>– Nghiên cứu và tổ chức cung cấp dịch vụ tư vấn về marketing, nghiên cứu thị trường, tư vấn chăm sóc khách hàng, truyền thông và quan hệ công chúng…<br>– Trở thành giảng viên, nghiên cứu viên trong các cơ sở đào tạo và nghiên cứu về Marketing;<br>-Có khả năng tiếp tục tham gia các cấp học cao hơn tại các trường đại học trong và ngoài nước.</p>', '2022-03-11 14:38:30', 'nganhhoc4.png', 1),
(34, 'Thông tin tuyển sinh', 'Công bố điểm chuẩn bổ sung đợt 1 và hướng dẫn xác nhận trúng tuyển', '<p>Trường Đại học Thủy Lợi công bố <strong>điểm chuẩn trúng tuyển năm 2021</strong> của các ngành và <strong>hướng dẫn thí sinh 2 bước xác nhận trúng tuyển</strong>. Thí sinh lưu ý đọc kỹ phần 2 để làm đúng yêu cầu.</p><p><strong>ĐIỂM TRÚNG TUYỂN VÀO CÁC NGÀNH/ CHUYÊN NGÀNH BỔ SUNG ĐỢT 1</strong></p><figure class=\"table\"><table><tbody><tr><td><strong>STT</strong></td><td><strong>Ngành/Chuyên ngành</strong></td><td><strong>Điểm chuẩn trúng tuyển</strong></td></tr><tr><td colspan=\"3\"><strong>CHƯƠNG TRÌNH ĐẠI TRÀ</strong></td></tr><tr><td>1</td><td>Kinh tế nông nghiệp</td><td><strong>16</strong></td></tr><tr><td>2</td><td><p>Hệ thống thông tin quản lý gồm 2 chuyên ngành:</p><p>&nbsp;</p><ul><li>Tin học Kinh tế</li><li>Phân tích dữ liệu Kinh tế- Kinh doanh</li></ul></td><td><strong>16</strong></td></tr><tr><td>3</td><td>Thống kê kinh tế (chuyên ngành Thống kê kinh doanh)</td><td><strong>16</strong></td></tr><tr><td>4</td><td>Kinh tế chính trị</td><td><strong>16</strong></td></tr><tr><td colspan=\"3\"><strong>CHƯƠNG TRÌNH LIÊN KẾT</strong></td></tr><tr><td>5</td><td>Tài chính- Ngân hàng (liên kết đại học Rennes 1- Pháp)</td><td><strong>16</strong></td></tr><tr><td>6</td><td>Quản trị kinh doanh (liên kết Đại học Công nghệ Dublin- Ireland)</td><td><strong>16</strong></td></tr><tr><td colspan=\"3\"><strong>CHƯƠNG TRÌNH CHẤT LƯỢNG CAO</strong></td></tr><tr><td>7</td><td>Kinh tế (chuyên ngành Kế hoạch đầu tư)</td><td><strong>18</strong></td></tr><tr><td>8</td><td>Kiểm toán</td><td><strong>17</strong></td></tr><tr><td>9</td><td>Quản trị kinh doanh</td><td><strong>22</strong></td></tr></tbody></table></figure><p><strong>2 BƯỚC HƯỚNG DẪN XÁC NHẬN TRÚNG TUYỂN</strong></p><p>Những bạn có điểm xét tuyển <strong>lớn hơn hoặc bằng điểm chuẩn trúng tuyển</strong> đã công bố ở trên vui lòng đọc kỹ và làm theo đúng hướng dẫn 3 bước sau của nhà trường.</p><p><strong>Bước 1. Xác thực nhập học vào trường Đại học Thủy Lợi</strong></p><p>Làm theo hướng dẫn (Nhập số điện thoại, Số Chứng minh nhân dân/Căn cước công dân và bấm Xác nhận nhập học vào trường Đại học Thủy Lợi.</p><p><strong>Lưu ý:</strong> Lúc thí sinh khai báo, làm hồ sơ thi THPT, thí sinh dùng số CMND hay CCCD để khai báo ban đầu thì khi xác thực nhập lại số CMND hoặc CCCD tương ứng.</p><p><strong>Bước 2</strong> <strong>Hoàn tất thông tin hồ sơ sinh viên để nhập học</strong></p><p>Làm theo quy trình cung cấp thông tin hồ sơ sinh viên theo từng bước hướng dẫn. Thời hạn hoàn thành hồ sơ sinh viên <strong>trước 17h ngày 12.10.2021</strong></p><p><strong>Lưu ý:</strong> <strong>THÍ SINH NỘP PHIẾU KẾT QUẢ THI THPT (BẢN CHÍNH) CÙNG HỒ SƠ NHẬP HỌC</strong></p>', '2022-03-11 14:41:03', 'tuyensinh1.jpg', 1),
(35, 'Thông tin tuyển sinh', 'Chiến lược phát triển Trường Đại học Thuỷ Lợi giai đoạn 2016 – 2020 tầm nhìn 2030', '<p>Chiến lược phát triển Trường Đại học Thuỷ Lợi giai đoạn 2</p>', '2022-03-15 14:58:52', 'tuyensinh3.jpg', 6);

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
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '035782747533', 'Quản trị viên', 'Dừng hoạt động'),
(5, 'admin2', 'd41d8cd98f00b204e9800998ecf8427e', 'admin', 'admin@gmail.com', '0256897547', 'Quản trị viên', 'Dừng hoạt động'),
(6, 'phuong', 'd41d8cd98f00b204e9800998ecf8427e', 'Trần Phương', 'phuong@gmail.com', '0256454547', 'Quản trị viên', 'Hoạt động');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `aspirations`
--
ALTER TABLE `aspirations`
  ADD PRIMARY KEY (`AspID`),
  ADD KEY `CanID` (`CanID`);

--
-- Chỉ mục cho bảng `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`CanID`);

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
-- AUTO_INCREMENT cho bảng `aspirations`
--
ALTER TABLE `aspirations`
  MODIFY `AspID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `candidates`
--
ALTER TABLE `candidates`
  MODIFY `CanID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `PostID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `aspirations`
--
ALTER TABLE `aspirations`
  ADD CONSTRAINT `aspirations_ibfk_1` FOREIGN KEY (`CanID`) REFERENCES `candidates` (`CanID`);

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
