-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 09:55 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uet_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `council`
--

CREATE TABLE `council` (
  `councilId` int(11) NOT NULL,
  `teacherId` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `note` mediumtext COLLATE utf8_unicode_ci,
  `facultyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `council`
--

INSERT INTO `council` (`councilId`, `teacherId`, `position`, `note`, `facultyId`) VALUES
(2, '5', 3, '', 100),
(3, '6', 2, '', 100),
(8, '2', 3, '', 100),
(10, '1', 1, '', 100),
(12, '3', 3, '', 100),
(13, '4', 2, 'oo', 100);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `departmentId` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `departmentName` varchar(100) NOT NULL,
  `departmentHead` varchar(11) NOT NULL,
  `departmentAddress` varchar(200) NOT NULL,
  `departmentPhone` varchar(50) NOT NULL,
  `departmentWeb` varchar(100) NOT NULL,
  `departmentDescription` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Bảng các bộ môn (departmentHead: trưởng bộ môn)';

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`departmentId`, `facultyId`, `departmentName`, `departmentHead`, `departmentAddress`, `departmentPhone`, `departmentWeb`, `departmentDescription`) VALUES
(101, 100, 'Các Hệ thống thông tin', '0', '305 – E3 – 144 Xuân Thuỷ – Cầu Giấy – Hà Nội', '84 4 37547813', 'http://uet.vnu.edu.vn/httt/', NULL),
(102, 100, 'Công nghệ phần mềm', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;">\n</div>'),
(103, 100, 'Khoa học máy tính', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;">\n</div>'),
(104, 100, 'Khoa học và kỹ thuật tính toán', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;">\n</div>'),
(105, 100, 'Mạng và truyền thông máy tính', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;">\n</div>'),
(201, 200, 'Hệ thống viễn thông', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;"><p style="text-align: justify;">Bộ môn có nhiệm vụ giảng dạy lý thuyết và thực hành các môn học cơ sở và chuyên ngành Điện tử – Viễn thông thuộc các bậc Đại học và Sau Đại học (Cao học và Nghiên cứu sinh); tham gia các hoạt động nghiên cứu của Khoa học cơ bản và công nghệ trong lĩnh vực liên quan tới Hệ thống Viễn thông, mạng truyền dữ liệu, thông tin di động,…. Tham gia và chủ trì các đề tài nghiên cứu, các hoạt động ứng dụng cấp Nhà nước, cấp Đại học Quốc Gia và cấp Trường Đại học Công nghệ cũng như các hoạt động khoa học hợp tác quốc tế.</p>\r\n<p style="text-align: justify;">Các hướng nghiên cứu của bộ môn bao gồm:</p>\r\n<ul>\r\n<li>Kỹ thuật truyền thông số và ứng dụng trong hệ thống Viễn thông hiện đại.</li>\r\n<li>Các công nghệ chuyển mạch tiên tiến: ATM, IP/ATM, MPLS,…</li>\r\n<li>Hệ thống thông tin quang với công nghệ ghép kênh theo bước sóng (WDM) và ghép kênh theo bước sóng mật độ cao (DWDM)</li>\r\n<li>Các hệ thống viễn thông thông minh, hội tụ băng rộng cả hữu tuyến và vô tuyến: IN, NGN, Adhoc, Sensor,…</li>\r\n<li>Bài toán định tuyến trong các hệ thống Viễn thông hiện đại.</li>\r\n<li>Công nghệ FPGA và ứng dụng trong phát triển các mạch điện tử tích hợp chương trình hóa cỡ trung bình và lớn dùng cho các mục đích xử lý tín hiệu trong điện tử và viễn thông.</li>\r\n</ul></div>'),
(202, 200, 'Thông tin vô tuyến', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;"><p>Về giảng dậy, bộ môn thông tin vô tuyến phụ trách các môn học lien quan đế lý thuyết truyền dẫn, lý thuyết anten, thông tin di động và mạng vô tuyến. Các môn giảng dậy bao gồm: Trường điện từ và truyền song (ĐH), Kỹ thuật Siêu cao tần (ĐH), Thông tin số (ĐH và CH), Thông tin di động (ĐH và CH), Thông tin vệ tinh (ĐH), Kỹ thuật anten (ĐH và CH), Mạng vô tuyến WLAN (ĐH), Kỹ thuật Video truyền hình (ĐH).</p><p style="text-align: justify;">&nbsp;<span style="color: #993300;">Các môn giảng dạy chính như sau:</span></p><ul style="text-align: justify;">\r\n<li>Công nghệ truyền dẫn đa song mang</li>\r\n<li>Lý thuyết và kỹ thuật mã hóa</li>\r\n<li>Kỹ thuật siêu cao tần</li>\r\n<li>Anten</li>\r\n<li>Thông tin di động tốc độ cao</li>\r\n<li>Thiết kế FPGA</li>\r\n<li>Mạng không dây</li>\r\n</ul>\r\n</div>'),
(203, 200, 'Điện tử và kỹ thuật máy tính', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;"><p>Tham gia giảng dạy lý thuyết và thực hành các môn học cơ sở và chuyên ngành Điện tử – Viễn thông thuộc các bậc Đại học và Sau Đại học (Cao học và Nghiên cứu sinh) và các hoạt động nghiên cứu của Khoa học cơ bản và công nghệ trong lĩnh vực liên quan tới Điện tử và Kỹ thuật máy tính. Tham gia và chủ trì các đề tài nghiên cứu, các hoạt động ứng dụng cấp Nhà nước, cấp Đại học Quốc Gia và cấp Trường Đại học Công nghệ cũng như các hoạt động khoa học hợp tác quốc tế.</p><h4><span style="color: #993300;">Các lĩnh vực nghiên cứu trong bộ môn:</span></h4><ul>\n<li>Điện tử ứng dụng trong y sinh và quản lý môi trường.</li>\n<li>Các công nghệ mạch điện tử tích hợp VLSI, FPGA, ASIC,…</li>\n<li>Ứng dụng của sensor, sensor MEMS cho các thiết bị Điện tử – Viễn thông.</li>\n<li>Các thiết bị điện tử cho nghiên cứu ứng dụng Vật lý.</li>\n<li>Các hệ thống điều khiển tự động và ROBOTICs</li>\n</ul><h4><span style="color: #993300;">Phòng thí nghiệm của bộ môn:</span></h4><ul>\n<li>Phòng thí nghiệm điều khiển tự động và robotics: <a href="http://fet.uet.vnu.edu.vn/wp-content/uploads/2012/05/Robotics_Lab_Introduction_2013.pdf" target="_blank">Download giới thiệu về phòng thí nghiệm</a></li>\n</ul>\n</div>'),
(204, 200, 'Vi cơ điện tử và vi cơ hệ thống', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;"><p>Bộ môn MEMS đảm nhận các môn học liên quân đến các hệ vi cơ điện tử và ứng dụng. Bên cạnh công tác giảng dậy và nghiên cứu, bộ môn còn thiết kế, chế tạo và ứng dụng các hệ vi cơ và hệ thông nhúng.</p><h3><span style="color: #993300;">Hướng nghiên cứu chính của bộ môn là:</span></h3><ul>\n<li>Nghiên cứu thiết kế và tối ưu hoá thiết kế các linh kiện MEMS với tính năng và nguyên lý mới.</li>\n<li>Nghiên cứu chế tạo trong nước hoặc phối hợp với nước ngoài chế tạo các linh kiện MEMS đã được nhóm nghiên cứu tự thiết kế</li>\n<li>Nghiên cứu ứng dụng các linh kiện MEMS trong các lĩnh vực sản xuất, y tế và quốc phòng trên cơ sở phối hợp các linh kiện này với sản phẩm mới nhất của Công nghệ Vi điện tử (các bộ vi xử lý, FPGA, DSP, DsPIC…). và các thuật toán xử lý tín hiệu. Các nghiên cứu ứng dụng này có thể tiến hành đồng thời với các nghiên cứu thiết kế và chế tạo nói trên và chia thành 2 giai đoạn: trước hết sử dụng các vật liệu và linh kiên nhập ngoại, sau đó dần thay thế bằng các kinh kiên tự sản xuất.</li>\n<li>Tiếp cận các hướng nghiên cứu hiện đại của thế giới như MEMS trên cơ sở polymer và các vật liệu mới khác, nano cơ điện tử (NEMS)..v..v.</li>\n</ul>\n</div>'),
(301, 300, 'Vật liệu và linh kiện từ tính Nano', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;">\r\n<p style="text-align: justify;">Bộ môn Vật liệu và linh kiện từ tính nano của Khoa VLKT&amp;CNNN có nhiệm vụ đào tạo và nghiên cứu khoa học theo những chuyên ngành mới về KHCN nano, theo các hướng nghiên cứu sau:</p>\r\n<div style="text-align: justify; padding-left: 30px;">- Các hiệu ứng bề mặt trong các vật liệu có cấu trúc Nanô</div>\r\n<div style="text-align: justify; padding-left: 30px;">- Tính chất chuyển trong các hệ thấp chiều</div>\r\n<div style="text-align: justify; padding-left: 30px;">- Kỹ thuật lưu trữ thông tin</div>\r\n<div style="text-align: justify; padding-left: 30px;">- Vi cơ và ứng dụng</div>\r\n<div style="text-align: justify; padding-left: 30px;">- Linh kiện Nano ( linh kiện đơn điện tử, linh kiện spintronics, …)</div>\r\n<p style="text-align: justify;">Sinh viên đăng ký học chuyên ngành Vật liệu và Linh kiện từ tính nano, ngoài các kiến thức chuyên môn bắt buộc như các sinh viên của khoa VLKT-CNNN còn được học các môn chuyên sâu về vật liệu và linh kiện từ tính cấu trúc nano, kỹ thuật lưu trữ thông tin, thiết kế các chip dựa trên nguyên lý ứng dụng vật liệu từ… và thực tập chuyên đề luôn được cập nhật từ nước ngoài.</p>\r\n<p style="text-align: justify;">Kết thúc quá trình học tập, sinh viên được làm khóa luận tốt nghiệp hoặc học các môn học tương đương.</p>\r\n</div>'),
(302, 300, 'Vật liệu và linh kiện bán dẫn Nano', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;">\r\n<p style="text-align: justify;">Bộ môn VL&amp;LK BDNN của Khoa VLKT &amp; CNNN đang đào tạo và nghiên cứu khoa học theo những chuyên ngành mới về KHCN nano, trong đó có nano bán dẫn và quang tử.<span id="more-275"></span></p>\r\n<p style="text-align: justify;">Sinh viên đăng ký học chuyên ngành Vật liệu &amp; Linh kiện bán dẫn nano, ngoài các kiến thức chuyên môn bắt buộc như các sinh viên của khoa VLKT-CNNN còn được học các môn chuyên sâu về vật liệu &amp; linh kiện bán dẫn cấu trúc nano, nano quang tử, cấu trúc điện tử của các hệ nano, thông tin quang, … và thực tập chuyên đề luôn được cập nhật từ nước ngoài.</p>\r\n<p style="text-align: justify;">Kết thúc quá trình học tập, sinh viên được làm khóa luận tốt nghiệp hoặc học các môn học tương đương.</p>\r\n</div>'),
(303, 300, 'Công nghệ Nano sinh học', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;">\r\n<p style="text-align: justify;">Chuyên ngành đào tạo</p>\r\n<p style="text-align: justify;">- Tên chuyên ngành</p>\r\n<p style="text-align: justify;">+ Tiếng Việt: Công nghệ Nanô Sinh học</p>\r\n<p style="text-align: justify;">+ Tiếng Anh: Nanobiotechnology</p>\r\n<p style="text-align: justify;">-&nbsp; Mã số chuyên ngành: Chuyên ngành đào tạo thí điểm</p>\r\n<p style="text-align: justify;">- Bậc đào tạo: Thạc sĩ</p>\r\n<p style="text-align: justify;">- Tên văn bằng</p>\r\n<p style="text-align: justify;">+ Tiếng Việt: Thạc sĩ chuyên ngành Công nghệ Nanô Sinh học</p>\r\n<p style="text-align: justify;">+ Tiếng Anh: Master in Nanobiotechnology</p>\r\n<p style="text-align: justify;">- Đơn vị đào tạo: Trường Đại học Công nghệ, Đại học Quốc gia Hà Nội</p>\r\n</div>'),
(304, 300, 'Công nghệ quang tử', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;">\r\n<p style="text-align: justify;">Sinh viên đăng ký Bộ môn CNQT, ngoài các kiến thức chuyên môn bắt buộc như: Kiến thức về toán lý (Xác suất thống kê, các phương pháp toán lý, phương pháp số, vật lý lượng tử), kiến thức về tin học (Tin học vật lý, cấu trúc máy vi tính và kỹ thuật ghép nối , mô phỏng và mô hình hóa…), các kiến thức về điện tử (nguyên lý kỹ thuật điện tử và đô lường, kỹ thuật số, thông tin quang, quang điện tử, thực tập kỹ thuật điện tử, thực tập kỹ thuật số …), kỹ thuật màng mỏng và <span id="more-112"></span>Công nghệ Nano, Đại cương khoa học vật liệu, Vật lý bán dẫn và linh kiện, Từ học siêu dẫn, các phương pháp phân tích, kỹ thuật hóa học, thực tập chuyên đề và thực hành công nghệ, sinh viên còn được học thêm các kiến thức chuyên sâu bắt bược về Bộ môn CNQT như: Vật lý và công nghệ laser, quang phổ chất rắn, thực, thực tập chuyên đề.</p>\r\n<p style="text-align: justify;">Để hoàn thành chương trình đào tạo, sinh viên cần học thêm một số môn học tự chọn như: Quang phi tuyến, quang tử nano, thiết bị quang tử, quang phổ các vật liệu cấu trúc nano, vật liệu quang tử hữu cơ cấu trúc nano và quang tử học lý thuyết.</p>\r\n<p style="text-align: justify;">Kết thúc quá trình học tập, sinh viên phải hoàn thành bài khóa luận hoặc tương đương.</p>\r\n</div>'),
(401, 400, 'Công nghệ biển và môi trường', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;">\n</div>'),
(402, 400, 'Công nghệ cơ điện tử', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;">\n</div>'),
(403, 400, 'Công nghệ hàng không vũ trụ', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;">\n</div>'),
(404, 400, 'Thủy khí công nghiệp và môi trường', '0', '', '', '', '<div style="margin-left:10px; margin-right:10px;">\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `facultyId` int(11) NOT NULL,
  `facultyName` varchar(100) NOT NULL,
  `facultyDean` varchar(11) NOT NULL,
  `facultyDepartment` varchar(200) NOT NULL,
  `facultyPhone` varchar(50) NOT NULL,
  `facultyUsername` varchar(45) NOT NULL,
  `facultyPassword` varchar(45) DEFAULT NULL,
  `avatar` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `facultyDescription` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Bảng Khoa (facultyDean: trưởng khoa: lấy id từ giáo viên; facultyDeparment:văn phòng khoa)';

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`facultyId`, `facultyName`, `facultyDean`, `facultyDepartment`, `facultyPhone`, `facultyUsername`, `facultyPassword`, `avatar`, `facultyDescription`) VALUES
(100, 'Khoa Công nghệ Thông tin', '1', 'Văn phòng Khoa Công nghệ thông tin – Trường Đại học Công nghệ – ĐHQGHN', '(04)37547064', 'CNTT', '11111111', 'upload/avatar/toneri.jpg', 'Được thành lập vào năm 1995 nhưng Khoa CNTT có truyền thống hơn 50 năm phát triển từ năm 1965 với việc đào tạo chuyên ngành Máy tính tại Khoa Toán Cơ thuộc Trường Đại học Tổng hợp Hà Nội. Với sự nỗ lực cố gắng của tập thể các cán bộ giảng viên, các thế hệ sinh viên, học viên và nghiên cứu sinh; dưới sự chỉ đạo sát sao, ủng hộ và tạo điều kiện của các thế hệ lãnh đạo Trường ĐHCN và ĐHQGHN, Khoa CNTT ngày hôm nay đã đạt được nhiều thành tích nổi bật trong hoạt động đào tạo, bồi dưỡng nhân tài và nghiên cứu khoa học tiếp cận trình độ tiên tiến trong khu vực và thế giới.'),
(200, 'Khoa Điện tử Viễn thông', '2', 'Văn phòng khoa Điện tử – Viễn thông', '(84-4) 3754 9338', 'DTVT', '11111111', 'upload/avatar/toneri.jpg', 'Khoa Điện tử – Viễn thông (ĐTVT), Trường ĐHCN được thành lập ngày 3 tháng 01 năm 1996 tại Trường Đại học Khoa học Tự nhiên (ĐHKHTN) và được tái thành lập ngày 9 tháng 9 năm 2004. Trải qua các giai đoạn phát triển với nhiều khó khăn, thử thách từ Khoa Công nghệ Điện tử – Viễn thông thuộc Trường ĐHKHTN (giai đoạn 1996-1999), ngành Điện tử – Viễn thông thuộc Khoa Công nghệ – ĐHQGHN (giai đoạn 1999-2004) đến Khoa Điện tử – Viễn thông ngày nay, Khoa đã sớm khẳng định được vị thế là một địa chỉ có uy tín về đào tạo, nghiên cứu, chuyển giao công nghệ thuộc lĩnh vực điện tử  – viễn thông trong cả nước, đang vững bước hội nhập với khu vực và thế giới. Ngành Công nghệ Điện tử Viễn thông là một trong những ngành đào tạo đại học được ĐHQGHN lựa chọn đầu tư chiến lược để phát triển đạt trình độ quốc tế (nhiệm vụ chiến lược của ĐHQGHN – từ 2008).'),
(300, 'Khoa Vật lý Kỹ thuật và Công nghệ Nano', '3', 'Khoa Vật lý kỹ thuật và Công nghệ nano, Phòng E2.2 – Nhà E4 144 đường Xuân Thủy, quận Cầu Giấy, Hà Nội', '(04) 3754 9429', 'VLCN', '11111111', 'upload/avatar/toneri.jpg', 'Khoa Vật lý kỹ thuật và Công nghệ nano (Khoa VLKT&CNNN) thuộc trường Đại học Công nghệ được thành lập ngày 09/09/2004 theo Quyết định số 556/QĐ-TCCB của Giám đốc Đại học Quốc gia Hà Nội, trên cơ sở Bộ môn Vật lý kỹ thuật và Quang tử của Khoa Công nghệ (nay là Trường Đại học Công nghệ) thuộc ĐHQGHN do GS.VS. Nguyễn Văn Hiệu, Hiệu trưởng đầu tiên của Nhà trường sáng lập. Khoa VLKT&CNNN có nhiệm vụ đào tạo cử nhân ngành Vật lý kỹ thuật, đào tạo thạc sĩ và tiến sĩ chuyên ngành Vật liệu và linh kiện nano và đào tạo thạc sĩ chuyên ngành Công nghệ nano sinh học nhằm đáp ứng nhu cầu về nhân lực khoa học công nghệ chất lượng cao cho các trường đại học, viện nghiên cứu về khoa học tự nhiên, kỹ thuật và công nghệ, cho các doanh nghiệp sản xuất vật liệu tiên tiến, linh kiện và thiết bị điện tử, truyền thông, y tế.'),
(400, 'Khoa Cơ học kỹ thuật và Tự động hóa', '4', 'Văn phòng khoa Cơ học kỹ thuật và Tự động hóa, Trường Đại học Công Nghệ, ĐHQGHN', '04.37549431', 'CHTD', '11111111', 'upload/avatar/toneri.jpg', 'Khoa Cơ học Kỹ thuật và Tự động hóa được thành lập theo Quyết định số 1279/QĐ-TCCB ngày 04 tháng 7 năm 2005 của Giám đốc Đại học Quốc Gia Hà Nội.');

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `fieldId` int(11) NOT NULL,
  `fieldName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng các lĩnh vực';

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`fieldId`, `fieldName`, `description`) VALUES
(1000, 'Hardware', 'The new Hardware branch combines several types of modern hardware for computing and communications with emerging technologies, and methodologies for hardware design, validation and test. Key concerns in hardware design are represented by dedicated nodes for robustness (reliability, fault-tolerance, manufacturability, safety-critical systems) , power and energy.'),
(2000, 'Computer systems organization', '<div style="margin-left:10px; margin-right:10px;">Processor architectures (C.1) became the more broadly named Architectures, and we reorganized some concepts within. The 1998 classification had one 2nd-level concept called Special-purpose and application-based systems (C.3). We split this into four discrete concepts at the 2nd level:<ul><li>Application-based systems</li><li>Embedded systems</li><li>Multicore systems</li><li>Real-time systems</li></ul>The majority of the terms found under these four concepts are new. Perhaps the largest change to this branch is that network-related concepts were pulled out into the new, top-level Networks branch of the classification. Almost everything under the old Computer-communication networks (C.2) was moved to the new branch, except for Distributed systems, which became a 2nd-level concept here. Finally, the 2nd-level concept Computer system implementation (C.5) seemed out of place so it was moved to the Social and professional topics branch and is currently parented by Management of computing and information systems. Terms underneath C.5 were distributed to other places in the hierarchy.\n</div>'),
(3000, 'Networks', 'This new top-level branch contains a mixture of brand-new terms and existing concepts pulled from Computer-communication networks (C.2) in the 1998 classification. Because most network-related concepts were buried at the 3rd and 4th levels of the old CCS, moving Networks to a top-level branch allowed us to achieve greater specificity with 3rd- and 4th-level terms. These 2nd-level concepts existed in the 1998 CCS: Network protocols, Internet, Data communications, Distributed architectures, and Network topologies. New 2nd-level concepts include: Network hardware, Network performance and reliability, Network scale, and Wireless networks. Both the existing and new 2nd-level concepts contain many new 3rd- and 4th-level terms.'),
(4000, 'Software and its engineering', '<div style="margin-left:10px; margin-right:10px;"><ol type="I">\n<li>\nSoftware Organization and Properties: This is the software itself — what it does, how it''s organized, its properties.  The software is the stuff that actually persists after the people and development tools are gone.  Software, by the way, is more than just code — it includes the design, the specification, the rationale, the test suites, etc.</li>\n<li>Software Notations and Tools: What is used to make software — not only for the code, but for the whole system.</li>\n<li>Software Creation and Management: The human activities of developing the software — Software engineering is not localized in this scheme.  In particular, this recognizes that software management is not the same thing as software engineering. The bits having to do with the actual engineering knowledge are largely in "Software organization and properties", except for doing the engineering analysis, which is in "Designing software".  The bits having to do with managing software projects are in "Software development process management".  This distinction addresses a major source of confusion about what software engineering actually is.  To keep software engineering in the scheme, the whole area has been named "Software and its Engineering".</li>\n</ol>\n</div>'),
(5000, 'Theory of computation', 'Because we needed specificity in the concepts related to design and analysis of algorithms, we split this into two concepts: Analysis of algorithms, and Design of algorithms. Analysis of algorithms contains asymptotic, numerical, and non-numerical analysis methods. Many of the terms describing algorithm design techniques and patterns are new to the classification. A new 2nd-level term, Computational complexity, organizes the concepts of complexity classes and complexity measures. In the 1998 classification, these concepts were found in F.1 Computation by abstract devices along with models and modes of computation. Models and modes of computation is now a 2nd-level term. Formal languages and mathematical logic were combined in the 1998 classification (F.4) but were split here to allow for greater precision in sub-terms. Logics and meanings of programs remain largely unchanged in its organization and its concepts.'),
(6000, 'Mathematics of computing', 'The biggest change in this branch is the use of the broader concept Mathematical analysis as a 2nd-level term. This was felt to more accurately reflect the concepts located within this sub-branch. In this scheme, Numerical analysis becomes a 3rd-level term and is also located under Analysis of algorithms in the Theory of computation branch. Granular terms include some concepts formerly located under Numerical algorithms and problems (F.2.1). Information theory was felt to fit best in this branch and streamlines aspects of Coding and information theory (E.4) from the old Data branch. The new 2nd-level term Continuous mathematics was developed with new concepts and shares the term Calculus with Mathematical analysis. Similar to the Computing methodologies branch, "Applications" terms were eliminated.'),
(7000, 'Information systems', 'The overall structure of Information systems remained largely the same with two major changes. Much of section H.5, Information interfaces and presentation, was moved to the new Human-centered computing branch. And with the dissolution of the old Data (E.) branch, many data-related terms ended up within Information systems. The 2nd-level concept Information systems applications now reflects a larger variety of applications, including Data warehouses, Decision support systems, Enterprise information systems, and Geographic information systems. A new 2nd-level concept now houses terms related to the Web: applications, languages, searching, and web services. And multimedia devices and databases are now collected here in the new 2nd-level concept Multimedia information systems, including sound and music computing along with video and animation terms.'),
(8000, 'Security and privacy', 'This new branch incorporates concepts scattered in the old classification as well as numerous new terms. Data encryption (E.3) is now Cryptography and is more fully developed with additional concepts. Re-worked terms from Security and protection (D.4.6 and K.6.5) are included in various locations of this branch. The new terms Privacy policies and Security policies were deemed to fit best under Usable security and privacy, although relevance to other areas of this branch is recognized. Among the 2nd-level terms are: Hardware security; Operating systems, distributed systems, and network security; and Database and storage security. These sub-branches are not included with the respective topical main branches. For example, Hardware security is not also included in the Hardware branch.'),
(9000, 'Human-centered computing', '<div style="margin-left:10px; margin-right:10px;">Human-centered computing (HCC) has become a discipline in its own right since the last iteration of the classification. Because of its increasing importance in the literature, HCC was made a top-level branch. New 2nd-level concepts were added and we also pulled together existing terms related to interfaces, usability, and personal computing. Collaborative and social computing was parented here in addition to its location within Social and professional topics. Three of the four remaining 2nd-level concepts below are new:\n<ul><li>Human-computer interaction</li>\n<li>Information visualization</li>\n<li>Personal computing</li>\n<li>Ubiquitous and mobile computing</li>\n</ul>\nMany of the existing terms related to interface design — primarily those found in H.5 Information interfaces and presentation — are now collected here under Human-computer interaction. Visualization appeared somewhat frequently within author-supplied keywords and so we now have 3rd- and 4th-level terms for various visualization tools and techniques. Ubiquitous and mobile computing contains 3rd-and 4th-level terms related to applications and devices for both mobile and ubiquitous computing — which are sometimes but not always the same.\n\n</div>'),
(10000, 'Computing methodologies', 'This branch includes major changes necessitated by the elimination of Image processing and computer vision (I.4). The terms under this former 2nd-level term were relocated to either the new 3rd-level term Computer vision (under Artificial intelligence) or Computer graphics. Computer vision also includes a re-working of Vision and scene understanding (I.2.10). Consideration was given to eliminating Parallel computing as a 2nd-level term in this branch. Perhaps the concept is covered adequately by Parallel architectures, a term within the Computer systems organization branch, and the lower-level terms can be relocated or eliminated. Within this branch, the old classification included many instances of "Applications" (e.g., I.1.4). These terms were eliminated. It is envisioned that content or resources about an application of a computing methodology will be classified with the specific methodology term and an additional term from elsewhere in the classification. However, under Artificial intelligence, Applications and expert systems (I.2.1) was retained and renamed Artificial intelligence applications. Gathered here are major types of applications (e.g., Expert systems); broad 4th-level terms (e.g., Law) are not included but can be found in the Applied computing branch.'),
(11000, ' Applied computing', 'This branch, previously Computer applications, includes the reorganization of many concepts found under the former 2nd-level terms Administrative data processing (J.1) and Computers in other systems (J.7). Education is now a 2nd-level term, with concepts related to the use of computers in education located here. A number of concepts such as Command and control are now located under Operations research; this new sub-branch was fleshed out with additional new terms. Computers in other systems (J.7) was renamed Computers in other domains to gather subject areas/disciplines that do not fit conceptually under the other 2nd-level terms. Electronic commerce is now located in Applied computing as well as within the Social and professional topics branch. The new term Enterprise information systems also has two locations: within Applied computing and within the Information systems branch. Document management and text processing is largely a reworking of concepts from Document and text processing (I.7) in the old Computing methodologies branch.'),
(12000, 'Social and professional topics', 'This branch was renamed from 1998¿s Computing Mileux (K.). Many existing 2nd-level concepts were carried over to the new classification, including Computing industry; History of computing; Computers and society; Computing profession, and Management of computing and information systems. The 1998 classification combined in K.3 Computers and Education terms related to learning about computers (K.3.2) and using computers in education (K.3.1). We split these concepts and moved all terms related to the use of computers in education to the Applied computing branch. Computer and information science education remained here as a 2nd-level concept. Personal computing was moved to the newly created Human-centered computing (HCC) top-level branch, since the concept had stronger relationships to other HCC concepts than to Social and professional topics. A new 3rd-level term — Collaborative and social computing — organizes concepts pertaining to tools and uses for social computing. And additional 4th-level terms were added under Electronic commerce since the field has grown since the 1998 classification.'),
(13000, 'Proper nouns: People, technologies and companies', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laboratories`
--

CREATE TABLE `laboratories` (
  `laboratoryId` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `laboratoryName` varchar(100) NOT NULL,
  `laboratoryHead` varchar(11) NOT NULL,
  `laboratoryAddress` varchar(200) NOT NULL,
  `laboratoryPhone` varchar(50) NOT NULL,
  `laboratoryWeb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Bảng các phòng thí nghiệm (tương tự bảng departments)';

--
-- Dumping data for table `laboratories`
--

INSERT INTO `laboratories` (`laboratoryId`, `facultyId`, `laboratoryName`, `laboratoryHead`, `laboratoryAddress`, `laboratoryPhone`, `laboratoryWeb`) VALUES
(101, 100, 'Phòng Thí nghiệm An toàn thông tin', '0', '', '', ''),
(102, 100, 'Phòng Thí nghiệm Công nghệ Tri thức', '0', '', '', ''),
(103, 100, 'Phòng Thí nghiệm Hệ thống Nhúng', '0', '', '', ''),
(104, 100, 'Phòng Thí nghiệm Tương tác Người – Máy', '0', '', '', ''),
(201, 200, 'Phòng Thí nghiệm Tín hiệu và hệ thống', '0', '', '', ''),
(202, 200, 'Phòng Thực hành Điện tử viễn thông', '0', '', '', ''),
(401, 400, 'Phòng Thí nghiệm Vật liệu và kết cấu tiên tiến', '0', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `thesisId` int(11) NOT NULL,
  `reviewerMark` int(11) DEFAULT '0',
  `councilMark` int(11) DEFAULT '0',
  `teacherMark` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`thesisId`, `reviewerMark`, `councilMark`, `teacherMark`) VALUES
(2, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `relative_fields`
--

CREATE TABLE `relative_fields` (
  `researchDirectionId` int(11) NOT NULL,
  `fieldId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng các lĩnh vực liên quan của các hướng nghiên cứu của giáo viên';

--
-- Dumping data for table `relative_fields`
--

INSERT INTO `relative_fields` (`researchDirectionId`, `fieldId`) VALUES
(17, 2000),
(17, 1000),
(18, 4000),
(18, 8000),
(19, 1000),
(20, 1000),
(20, 11000);

-- --------------------------------------------------------

--
-- Table structure for table `relative_subfields`
--

CREATE TABLE `relative_subfields` (
  `researchDirectionId` int(11) NOT NULL,
  `fieldId` int(11) NOT NULL,
  `subfieldId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `relative_subfields`
--

INSERT INTO `relative_subfields` (`researchDirectionId`, `fieldId`, `subfieldId`) VALUES
(17, 2000, 2002),
(17, 1000, 1001),
(18, 4000, 4001),
(18, 8000, 8005),
(19, 1000, 1001),
(20, 1000, 1001),
(20, 1000, 1005),
(20, 11000, 11003);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `requestType` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `thesisId` int(11) NOT NULL,
  `thesisName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `teacherId` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coteacherId` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thesisDescription` longtext COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestId`, `studentId`, `requestType`, `facultyId`, `created_at`, `thesisId`, `thesisName`, `teacherId`, `coteacherId`, `thesisDescription`, `status`) VALUES
(8, 14020752, 2, 100, '2016-12-02 15:50:42', 1, '', '0', '0', '', 3),
(9, 14020752, 1, 100, '2016-12-02 15:51:55', 2, 'Test', '1', '0', '1', 3),
(10, 14020752, 1, 100, '2016-12-02 15:52:38', 2, 'Test', '1', '5', '1', 2),
(11, 14020752, 2, 100, '2016-12-02 15:52:56', 1, '', '0', '0', '', 3),
(12, 14020752, 2, 100, '2016-12-03 08:10:31', 1, '', '0', '0', '', 3),
(13, 14020752, 1, 100, '2016-12-03 15:15:14', 2, 'Changed Name', '1', '5', '1', 2),
(14, 14020752, 2, 100, '2016-12-03 15:21:27', 9, '', '0', '0', '', 2),
(15, 14020116, 2, 100, '2016-12-06 12:48:50', 7, '', '0', '0', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `research_directions`
--

CREATE TABLE `research_directions` (
  `researchDirectionId` int(11) NOT NULL,
  `teacherId` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `researchDirectionName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `researchDirectionsDescription` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng các hướng nghiên cứu của các giáo viên';

--
-- Dumping data for table `research_directions`
--

INSERT INTO `research_directions` (`researchDirectionId`, `teacherId`, `researchDirectionName`, `researchDirectionsDescription`) VALUES
(17, '1', 'Đồng ngu', NULL),
(18, '5', 'hihi', NULL),
(19, '1', 'Web Development', NULL),
(20, '1', 'Game Design', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `reviewerId` int(11) NOT NULL,
  `thesisId` int(11) NOT NULL,
  `teacherId` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`reviewerId`, `thesisId`, `teacherId`, `reviewer`, `created_at`) VALUES
(1, 2, '5', 'ngu', '2016-12-07 15:45:09'),
(2, 2, '2', '', '2016-12-07 16:19:42'),
(4, 10, '5', NULL, '2016-12-07 16:20:44'),
(5, 10, '2', NULL, '2016-12-07 16:21:09'),
(9, 2, '6', NULL, '2016-12-14 16:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentId` int(11) NOT NULL,
  `studentName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `studentBirthday` date NOT NULL,
  `studentGender` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT 'nam',
  `studentClass` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `studentPhone` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `consultant` int(11) NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facultyId` int(11) NOT NULL,
  `studentMail` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thesisAllowed` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentId`, `studentName`, `studentBirthday`, `studentGender`, `studentClass`, `studentPhone`, `avatar`, `consultant`, `password`, `facultyId`, `studentMail`, `thesisAllowed`) VALUES
(14020022, 'Nguyễn Hoàng Biên', '1996-05-02', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B2,"@vnu.edu.vn")', 1),
(14020025, 'Nguyễn Thanh Bình', '0000-00-00', 'nu', 'K59-CB', '', 'upload/avatar/none.png', 0, '11111111', 200, '14020025@vnu.edu.vn', 0),
(14020042, 'Nguyễn Thành Công', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B3,"@vnu.edu.vn")', 0),
(14020056, 'Nguyễn Mạnh Cường', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B5,"@vnu.edu.vn")', 1),
(14020066, 'Hà Hồng Duyên', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B6,"@vnu.edu.vn")', 0),
(14020084, 'Trần Đình Dương', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B7,"@vnu.edu.vn")', 1),
(14020091, 'Nguyễn Văn Đại', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B8,"@vnu.edu.vn")', 0),
(14020102, 'Trần Xuân Đạt', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B9,"@vnu.edu.vn")', 0),
(14020116, 'Dương Xuân Đồng', '0000-00-00', '', 'K59-CB', '', 'upload/avatar/toneri.jpg', 0, '11111111', 100, '14020116@vnu.edu.vn', 1),
(14020123, 'Phạm Minh Đức', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B10,"@vnu.edu.vn")', 0),
(14020131, 'Đàm Thị Hà', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B11,"@vnu.edu.vn")', 0),
(14020139, 'Hoàng Văn Hải', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B12,"@vnu.edu.vn")', 0),
(14020169, 'Nguyễn Minh Hiếu', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B14,"@vnu.edu.vn")', 0),
(14020170, 'Nguyễn Quang Hiếu', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B15,"@vnu.edu.vn")', 0),
(14020180, 'Tô Mạnh Hiệp', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B13,"@vnu.edu.vn")', 0),
(14020225, 'Phạm Quang Hưng', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B16,"@vnu.edu.vn")', 0),
(14020234, 'Nguyễn Đức Khanh', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B17,"@vnu.edu.vn")', 0),
(14020266, 'Tô Hiến Long', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B21,"@vnu.edu.vn")', 0),
(14020268, 'Đinh Tiến Lộc', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B22,"@vnu.edu.vn")', 0),
(14020303, 'Nguyễn Văn Minh', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B24,"@vnu.edu.vn")', 0),
(14020335, 'Nguyễn Văn Nhật', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B26,"@vnu.edu.vn")', 0),
(14020337, 'Hoàng Ngọc Như', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B28,"@vnu.edu.vn")', 0),
(14020340, 'Nguyễn Đình Phi', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B29,"@vnu.edu.vn")', 0),
(14020341, 'Dương Quốc Phong', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B30,"@vnu.edu.vn")', 0),
(14020411, 'Trần Minh Thanh', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B33,"@vnu.edu.vn")', 0),
(14020424, 'Vũ Tiến Thành', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B34,"@vnu.edu.vn")', 0),
(14020426, 'Phan Thế Thảo', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B35,"@vnu.edu.vn")', 0),
(14020436, 'Trần Việt Thắng', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B36,"@vnu.edu.vn")', 0),
(14020450, 'Đỗ Ngọc Hoài Thu', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B37,"@vnu.edu.vn")', 0),
(14020452, 'Nguyễn Đức Thuần', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B39,"@vnu.edu.vn")', 0),
(14020470, 'Trần Viết Tiệp', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B40,"@vnu.edu.vn")', 0),
(14020477, 'Trần Đức Toàn', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B41,"@vnu.edu.vn")', 0),
(14020485, 'Nguyễn Văn Tranh', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B43,"@vnu.edu.vn")', 0),
(14020513, 'Lý Văn Tuấn', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B46,"@vnu.edu.vn")', 0),
(14020515, 'Ngô Phương Tuấn', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B47,"@vnu.edu.vn")', 0),
(14020520, 'Trần Minh Tuấn', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B48,"@vnu.edu.vn")', 0),
(14020521, 'Vũ Minh Tuấn', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B49,"@vnu.edu.vn")', 0),
(14020525, 'Trần Thị Ánh Tuyết', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B50,"@vnu.edu.vn")', 0),
(14020538, 'Nguyễn Bá Tú', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B45,"@vnu.edu.vn")', 0),
(14020549, 'Lại Thị Thảo Vân', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B52,"@vnu.edu.vn")', 0),
(14020557, 'Nguyễn Huy Vinh', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B53,"@vnu.edu.vn")', 0),
(14020560, 'Chu Thừa Vũ', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B54,"@vnu.edu.vn")', 0),
(14020562, 'Lê Tuấn Vũ', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B55,"@vnu.edu.vn")', 0),
(14020568, 'Lê Thị Xuân', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B56,"@vnu.edu.vn")', 0),
(14020577, 'Bùi Quang Cường', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B4,"@vnu.edu.vn")', 0),
(14020598, 'Trần Hữu Minh', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B25,"@vnu.edu.vn")', 0),
(14020601, 'Trương Thị Nhung', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B27,"@vnu.edu.vn")', 0),
(14020611, 'Bạch Văn Thuần', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B38,"@vnu.edu.vn")', 0),
(14020613, 'Phan Thị Hà Trang', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B42,"@vnu.edu.vn")', 0),
(14020614, 'Nguyễn Ngọc Trung', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B44,"@vnu.edu.vn")', 0),
(14020629, 'Vũ Thùy Linh', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B19,"@vnu.edu.vn")', 0),
(14020630, 'Dương Tiến Mạnh', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B23,"@vnu.edu.vn")', 0),
(14020633, 'Đỗ Văn Quang', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B31,"@vnu.edu.vn")', 0),
(14020669, 'Nguyễn Việt Long', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B20,"@vnu.edu.vn")', 0),
(14020675, 'Trần Minh Quân', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B32,"@vnu.edu.vn")', 0),
(14020685, 'Vũ Nam Tước', '0000-00-00', '', 'K59-CLC', '', 'upload/avatar/none.png', 0, '11111111', 100, '=CONCATENATE(B51,"@vnu.edu.vn")', 0),
(14020752, 'Phạm Minh Hoàng Linh', '1996-11-04', 'nam', 'K59-CLC', '01665327771', 'upload/avatar/none.png', 5, '1', 100, '14020752@vnu.edu.vn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subfields`
--

CREATE TABLE `subfields` (
  `subfieldId` int(11) NOT NULL,
  `subfieldName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `subfieldDescription` longtext COLLATE utf8_unicode_ci,
  `fieldId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng Các lĩnh vực con của các lĩnh vực khoa học(bảng fields): Mình chỉ xác định 2 mức trong lĩnh vực. Trong cách chia của ACM có chia nhỏ hơn cơ mà chắc không cần.';

--
-- Dumping data for table `subfields`
--

INSERT INTO `subfields` (`subfieldId`, `subfieldName`, `subfieldDescription`, `fieldId`) VALUES
(1001, 'Printed circuit boards', NULL, 1000),
(1002, 'Communication hardware, interfaces and storage', NULL, 1000),
(1003, 'Integrated circuits', NULL, 1000),
(1004, 'Very large scale integration design', NULL, 1000),
(1005, 'Power and energy', NULL, 1000),
(1006, 'Electronic design automation', NULL, 1000),
(1007, 'Hardware validation', NULL, 1000),
(1008, 'Hardware test', NULL, 1000),
(1009, 'Robustness', NULL, 1000),
(1010, 'Emerging technologies', NULL, 1000),
(2001, 'Architectures', NULL, 2000),
(2002, 'Embedded and cyber-physical systems', NULL, 2000),
(2003, 'Real-time systems', NULL, 2000),
(2004, 'Dependable and fault-tolerant systems and networks', NULL, 2000),
(3001, 'Network architectures', NULL, 3000),
(3002, 'Network protocols', NULL, 3000),
(3003, 'Network components', NULL, 3000),
(3004, 'Network algorithms', NULL, 3000),
(3005, 'Network performance evaluation', NULL, 3000),
(3006, 'Network properties', NULL, 3000),
(3007, 'Network services', NULL, 3000),
(3008, 'Network types', NULL, 3000),
(4001, 'Software organization and properties', NULL, 4000),
(4002, 'Software notations and tools', NULL, 4000),
(4003, 'Software creation and management', NULL, 4000),
(5001, 'Models of computation', NULL, 5000),
(5002, 'Formal languages and automata theory', NULL, 5000),
(5003, 'Computational complexity and cryptography', NULL, 5000),
(5004, 'Logic', NULL, 5000),
(5005, 'Design and analysis of algorithms', NULL, 5000),
(5006, 'Randomness, geometry and discrete structures', NULL, 5000),
(5007, 'Theory and algorithms for application domains', NULL, 5000),
(5008, 'Algorithmic game theory and mechanism design', NULL, 5000),
(5009, 'Semantics and reasoning', NULL, 5000),
(6001, 'Discrete mathematics', NULL, 6000),
(6002, 'Probability and statistics', NULL, 6000),
(6003, 'Mathematical software', NULL, 6000),
(6004, 'Information theory', NULL, 6000),
(6005, 'Mathematical analysis', NULL, 6000),
(6006, 'Continuous mathematics', NULL, 6000),
(7001, 'Data management systems', NULL, 7000),
(7002, 'Information storage systems', NULL, 7000),
(7003, 'Information systems applications', NULL, 7000),
(7004, 'World Wide Web', NULL, 7000),
(7005, 'Information retrieval', NULL, 7000),
(8001, 'Cryptography', NULL, 8000),
(8002, 'Formal methods and theory of security', NULL, 8000),
(8003, 'Security services', NULL, 8000),
(8004, 'Intrusion/anomaly detection and malware mitigation', NULL, 8000),
(8005, 'Security in hardware', NULL, 8000),
(8006, 'Systems security', NULL, 8000),
(8007, 'Network security', NULL, 8000),
(8008, 'Database and storage security', NULL, 8000),
(8009, 'Software and application security', NULL, 8000),
(8010, 'Human and societal aspects of security and privacy', NULL, 8000),
(9001, 'Human computer interaction (HCI)', NULL, 9000),
(9002, 'Interaction design', NULL, 9000),
(9003, 'Collaborative and social computing', NULL, 9000),
(9004, 'Ubiquitous and mobile computing', NULL, 9000),
(9005, 'Visualization', NULL, 9000),
(9006, 'Accessibility', NULL, 9000),
(10001, 'Symbolic and algebraic manipulation', NULL, 10000),
(10002, 'Parallel computing methodologies', NULL, 10000),
(10003, 'Artificial intelligence', NULL, 10000),
(10004, 'Machine learning', NULL, 10000),
(10005, 'Modeling and simulation', NULL, 10000),
(10006, 'Computer graphics', NULL, 10000),
(10007, 'Distributed computing methodologies', NULL, 10000),
(10008, 'Concurrent computing methodologies', NULL, 10000),
(11001, 'Electronic commerce', NULL, 11000),
(11002, 'Enterprise computing', NULL, 11000),
(11003, 'Physical sciences and engineering', NULL, 11000),
(11004, 'Life and medical sciences', NULL, 11000),
(11005, 'Law, social and behavioral sciences', NULL, 11000),
(11006, 'Computer forensics', NULL, 11000),
(11007, 'Arts and humanities', NULL, 11000),
(11008, 'Computers in other domains', NULL, 11000),
(11009, 'Operations research', NULL, 11000),
(11010, 'Education', NULL, 11000),
(11011, 'Document management and text processing', NULL, 11000),
(12001, 'Professional topics', NULL, 12000),
(12002, 'Computing / technology policy', NULL, 12000),
(12003, 'User characteristics', NULL, 12000),
(13001, 'Companies', NULL, 13000),
(13002, 'Organizations', NULL, 13000),
(13003, 'People in computing', NULL, 13000),
(13004, 'Technologies', NULL, 13000);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherId` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `teacherName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `teacherMail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `departmentId` int(11) DEFAULT NULL,
  `teacherInfo` longtext COLLATE utf8_unicode_ci,
  `avatar` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `teacherPhone` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facultyId` int(11) NOT NULL,
  `laboratoryId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherId`, `teacherName`, `teacherMail`, `departmentId`, `teacherInfo`, `avatar`, `teacherPhone`, `password`, `facultyId`, `laboratoryId`) VALUES
('1', 'Phạm Minh Hoàng Linh', 'hlinh0411hd@gmail.com', 101, 'Linh Thông Minh quá', 'upload/avatar/hl.jpg', '01665327771', '11111111', 100, 101),
('2', 'Phạm Linh', '14020752@vnu.edu.vn', 101, NULL, 'upload/avatar/none.png', '', '11111111', 100, NULL),
('3', 'Phạm Minh Linh', '14020752@vnu.edu.vn', 101, NULL, 'upload/avatar/none.png', '', '11111111', 100, NULL),
('4', 'Phạm Minh Hoàng', '14020752@vnu.edu.vn', 201, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('5', 'Dương Xuân Đồng', 'dongdx96@gmail.com', 301, NULL, 'upload/avatar/toneri.jpg', '', '11111111', 300, NULL),
('6', 'Nguyễn Thanh Bình', 'thanhbinh7099@gmail.com', 401, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('7', 'Phạm Quang Hưng', '14020225@vnu.edu.vn', 101, NULL, 'upload/avatar/none.png', '', '11111111', 100, NULL),
('8', 'Nguyễn Huy Vinh', '14020557@vnu.edu.vn', 101, NULL, 'upload/avatar/none.png', '', '11111111', 100, NULL),
('FEMA401', 'Nguyễn Đông Anh', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA402', 'Nguyễn Thị Việt Liên', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA403', 'Nguyễn Đình Đức', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA404', 'Đào Như Mai', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA405', 'Đinh Văn Mạnh', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA406', 'Nguyễn Tiến Khiêm', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA407', 'Bùi Hồng Sơn', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA408', 'Lã Đức Việt', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA409', 'Nguyễn Trường Giang', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA410', 'Phạm Mạnh Thắng', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA411', 'Trần Dương Trí', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA412', 'Trần Ngọc Hưng', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA413', 'Trần Anh Quân', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA414', 'Nguyễn Chỉ Sáng', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA415', 'Phan Đăng Phong', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA416', 'Nguyễn Ngọc Linh', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA417', 'Đing Trần Hiệp', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA418', 'Nguyễn Cao Sơn', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA419', 'Nguyễn Thị Cẩm Lai', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA420', 'Vũ Thị Thùy Anh', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA421', 'Hoàng Văn Mạnh', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA422', 'Nguyễn Ngọc Việt', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA423', 'Phạm Anh Tuấn', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA424', 'Lê Thái Hòa', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA425', 'Dương Ngọc Hải', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA426', 'Đặng Thế Ba', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA427', 'Nguyễn Hoàng Quân', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA428', 'Hà Ngọc Hiến', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA429', 'Bùi Đình Trí', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA430', 'Trần Thu Hà', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA431', 'Đoàn Viết Phan', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA432', 'Nguyễn Đình Đức', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA433', 'Đoàn Hồng Đức', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEMA434', 'Trần Quốc Quân', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 400, NULL),
('FEPN301', 'Nguyễn Văn Hiệu', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN302', 'Lê Trần Bình', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN303', 'Nguyễn Năng Định', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN304', 'Nguyễn Hữu Đức', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN305', 'Nguyễn Đại Hưng', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN306', 'Phan Văng Chi', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN307', 'Nông Văn Hải', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN308', 'Lê Thanh Hòa', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN309', 'Nguyễn Thế Hiện', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN310', 'Phạm Văn Hội', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN311', 'Nguyễn Quang Liên', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN312', 'Vũ Doãn Miên', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN313', 'Lê Quốc Minh', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN314', 'Phạm Thu Nga', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN315', 'Nguyễn Thị Bảo Ngọc', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN316', 'Trần Thị Tâm', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN317', 'Nguyễn Kiên Cường', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN318', 'Trần Mậu Danh', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN319', 'Đỗ Thị Hương Giang', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN320', 'Chu Hoàng Hà', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN321', 'Trần Đăng Khoa', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN322', 'Nguyễn Phương Hoài Nam', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN323', 'Hà Thị Quyến', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN324', 'Phạm Đức Thắng', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN325', 'Hoàng Nam Nhật', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN326', 'Lê Thị Hiên', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN327', 'Nguyễn Đức Quang', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FEPN328', 'Nguyên Quốc Trình', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 300, NULL),
('FET201', 'Chử Đức Trình', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET202', 'Trần Đức Tân', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET203', 'Đinh Triều Dương', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET204', 'Bạch Gia Dương', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET205', 'Trương Vũ Bằng Giang', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET206', 'Nguyễn Linh Trung', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET207', 'Trần Xuân Tú', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET208', 'Trần Quang Vinh ', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET209', 'Trịnh Anh Vũ', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET210', 'Nguyễn Quốc Toàn', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET211', 'Lê Vũ Hà', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET212', 'Nguyễn Nam Hoàng', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET213', 'Nguyễn Thăng Long', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET214', 'Trần Cao Quyền', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET215', 'Bùi Thanh Tùng', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET216', 'Phùng Mạnh Dương', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET217', 'Nguyễn Hồng Thịnh', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET218', 'Vũ Tuấn Anh', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET219', 'Hoàng Văn Xiêm', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET220', 'Chu Thị Phương Dung', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET221', 'Đinh Thị Thai Mai', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET222', 'Bùi Trung Ninh', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET223', 'Nguyễn Vinh Quang', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET224', 'Trần Thị Thúy Quỳnh', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET225', 'Nguyễn Thị Thanh Vân', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET226', 'Đặng Anh Việt', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET227', 'Phạm Đình Tuấn', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET228', 'Tạ Đức Tuyền', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FET229', 'Nguyễn Việt Dũng', 'dongdx96@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 200, NULL),
('FIT101', 'Phạm Minh Hoàng Linh', 'hlinh0411hd@gmail.com', 101, NULL, 'upload/avatar/none.png', '', '11111111', 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `thesisId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `thesisName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `teacherId` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `coteacherId` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thesisDescription` longtext COLLATE utf8_unicode_ci,
  `accepted` int(11) DEFAULT '0',
  `facultyId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `printed` int(11) DEFAULT '0',
  `isSuccess` int(11) DEFAULT '0',
  `protectionFile` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`thesisId`, `studentId`, `thesisName`, `teacherId`, `coteacherId`, `thesisDescription`, `accepted`, `facultyId`, `created_at`, `printed`, `isSuccess`, `protectionFile`) VALUES
(2, 14020752, 'Changed Name', '1', '5', '1', 1, 100, '2016-11-30 15:13:35', 1, 0, 1),
(9, 14020025, 'Binh ngu qua', '1', '5', 'Ahihi', 1, 200, '2016-12-06 12:45:56', 0, 0, 1),
(10, 14020116, 'Dong ngu', '1', '6', 'ahihi', 1, 100, '2016-12-06 12:49:19', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thesisregistertime`
--

CREATE TABLE `thesisregistertime` (
  `facultyId` int(11) NOT NULL,
  `startDate` date DEFAULT '0000-00-00',
  `startTime` time DEFAULT '00:00:00',
  `endDate` date DEFAULT '0000-00-00',
  `endTime` time DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thesisregistertime`
--

INSERT INTO `thesisregistertime` (`facultyId`, `startDate`, `startTime`, `endDate`, `endTime`) VALUES
(100, '2016-12-15', '00:00:00', '2016-12-17', '00:00:00'),
(200, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00'),
(300, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00'),
(400, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `council`
--
ALTER TABLE `council`
  ADD PRIMARY KEY (`councilId`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`departmentId`),
  ADD KEY `fk_faculty` (`facultyId`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`facultyId`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`fieldId`);

--
-- Indexes for table `laboratories`
--
ALTER TABLE `laboratories`
  ADD PRIMARY KEY (`laboratoryId`),
  ADD KEY `fk_l_faculty` (`facultyId`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`thesisId`);

--
-- Indexes for table `relative_fields`
--
ALTER TABLE `relative_fields`
  ADD KEY `fk_rrd` (`researchDirectionId`);

--
-- Indexes for table `relative_subfields`
--
ALTER TABLE `relative_subfields`
  ADD KEY `fk_rd` (`researchDirectionId`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `research_directions`
--
ALTER TABLE `research_directions`
  ADD PRIMARY KEY (`researchDirectionId`),
  ADD KEY `fk_rd_teacher_idx` (`teacherId`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`reviewerId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentId`),
  ADD KEY `fd_s_faculty_idx` (`facultyId`);

--
-- Indexes for table `subfields`
--
ALTER TABLE `subfields`
  ADD PRIMARY KEY (`subfieldId`),
  ADD KEY `fk_field_idx` (`fieldId`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherId`),
  ADD KEY `fk_d_teacher_idx` (`departmentId`),
  ADD KEY `fk_d_faculty_idx` (`facultyId`);

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`thesisId`);

--
-- Indexes for table `thesisregistertime`
--
ALTER TABLE `thesisregistertime`
  ADD PRIMARY KEY (`facultyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `council`
--
ALTER TABLE `council`
  MODIFY `councilId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `research_directions`
--
ALTER TABLE `research_directions`
  MODIFY `researchDirectionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `reviewerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `thesis`
--
ALTER TABLE `thesis`
  MODIFY `thesisId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `fk_faculty` FOREIGN KEY (`facultyId`) REFERENCES `faculties` (`facultyId`) ON UPDATE CASCADE;

--
-- Constraints for table `laboratories`
--
ALTER TABLE `laboratories`
  ADD CONSTRAINT `fk_l_faculty` FOREIGN KEY (`facultyId`) REFERENCES `faculties` (`facultyId`) ON UPDATE CASCADE;

--
-- Constraints for table `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `fk_thesis` FOREIGN KEY (`thesisId`) REFERENCES `thesis` (`thesisId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `relative_fields`
--
ALTER TABLE `relative_fields`
  ADD CONSTRAINT `fk_rrd` FOREIGN KEY (`researchDirectionId`) REFERENCES `research_directions` (`researchDirectionId`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `relative_subfields`
--
ALTER TABLE `relative_subfields`
  ADD CONSTRAINT `fk_rd` FOREIGN KEY (`researchDirectionId`) REFERENCES `research_directions` (`researchDirectionId`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `research_directions`
--
ALTER TABLE `research_directions`
  ADD CONSTRAINT `fk_rd_teacher` FOREIGN KEY (`teacherId`) REFERENCES `teacher` (`teacherId`) ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fd_s_faculty` FOREIGN KEY (`facultyId`) REFERENCES `faculties` (`facultyId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subfields`
--
ALTER TABLE `subfields`
  ADD CONSTRAINT `fk_field` FOREIGN KEY (`fieldId`) REFERENCES `fields` (`fieldId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `fk_d_faculty` FOREIGN KEY (`facultyId`) REFERENCES `faculties` (`facultyId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_d_teacher` FOREIGN KEY (`departmentId`) REFERENCES `departments` (`departmentId`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
