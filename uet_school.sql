-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2016 at 04:20 PM
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
  `teacherId` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `note` mediumtext COLLATE utf8_unicode_ci,
  `facultyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `council`
--

INSERT INTO `council` (`councilId`, `teacherId`, `position`, `note`, `facultyId`) VALUES
(2, 5, 3, '', 100),
(3, 6, 2, '', 100),
(10, 1, 1, '', 100),
(12, 3, 3, '', 100),
(14, 9, 3, 'Boss', 100);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `departmentId` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `departmentName` varchar(100) NOT NULL,
  `departmentHead` int(11) NOT NULL,
  `departmentAddress` varchar(200) NOT NULL,
  `departmentPhone` varchar(50) NOT NULL,
  `departmentWeb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Bảng các bộ môn (departmentHead: trưởng bộ môn)';

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`departmentId`, `facultyId`, `departmentName`, `departmentHead`, `departmentAddress`, `departmentPhone`, `departmentWeb`) VALUES
(101, 100, 'Các Hệ thống thông tin', 0, '305 – E3 – 144 Xuân Thuỷ – Cầu Giấy – Hà Nội', '84 4 37547813', 'http://uet.vnu.edu.vn/httt/'),
(102, 100, 'Công nghệ phần mềm', 0, '', '', ''),
(103, 100, 'Khoa học máy tính', 0, '', '', ''),
(104, 100, 'Khoa học và kỹ thuật tính toán', 0, '', '', ''),
(105, 100, 'Mạng và truyền thông máy tính', 0, '', '', ''),
(201, 200, 'Hệ thống viễn thông', 0, '', '', ''),
(202, 200, 'Thông tin vô tuyến', 0, '', '', ''),
(203, 200, 'Điện tử và kỹ thuật máy tính', 0, '', '', ''),
(204, 200, 'Vi cơ điện tử và vi cơ hệ thống', 0, '', '', ''),
(301, 300, 'Vật liệu và linh kiện từ tính Nano', 0, '', '', ''),
(302, 300, 'Vật liệu và linh kiện bán dẫn Nano', 0, '', '', ''),
(303, 300, 'Công nghệ Nano sinh học', 0, '', '', ''),
(304, 300, 'Công nghệ quang tử', 0, '', '', ''),
(401, 400, 'Công nghệ biển và môi trường', 0, '', '', ''),
(402, 400, 'Công nghệ cơ điện tử', 0, '', '', ''),
(403, 400, 'Công nghệ hàng không vũ trụ', 0, '', '', ''),
(404, 400, 'Thủy khí công nghiệp và môi trường', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `facultyId` int(11) NOT NULL,
  `facultyName` varchar(100) NOT NULL,
  `facultyDean` int(11) NOT NULL,
  `facultyDepartment` varchar(200) NOT NULL,
  `facultyPhone` varchar(50) NOT NULL,
  `facultyUsername` varchar(45) NOT NULL,
  `facultyPassword` varchar(45) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Bảng Khoa (facultyDean: trưởng khoa: lấy id từ giáo viên; facultyDeparment:văn phòng khoa)';

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`facultyId`, `facultyName`, `facultyDean`, `facultyDepartment`, `facultyPhone`, `facultyUsername`, `facultyPassword`, `avatar`) VALUES
(100, 'Khoa Công nghệ Thông tin', 1, 'Văn phòng Khoa Công nghệ thông tin – Trường Đại học Công nghệ – ĐHQGHN', '(04)37547064', 'CNTT', '11111111', NULL),
(200, 'Khoa Điện tử Viễn thông', 2, 'Văn phòng khoa Điện tử – Viễn thông', '(84-4) 3754 9338', 'DTVT', '11111111', NULL),
(300, 'Khoa Vật lý Kỹ thuật và Công nghệ Nano', 3, 'Khoa Vật lý kỹ thuật và Công nghệ nano, Phòng E2.2 – Nhà E4 144 đường Xuân Thủy, quận Cầu Giấy, Hà Nội', '(04) 3754 9429', 'VLCN', '11111111', NULL),
(400, 'Khoa Cơ học kỹ thuật và Tự động hóa', 4, 'Văn phòng khoa Cơ học kỹ thuật và Tự động hóa, Trường Đại học Công Nghệ, ĐHQGHN', '04.37549431', 'CHTD', '11111111', NULL);

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
(1000, 'Hardware', NULL),
(2000, 'Computer systems organization', NULL),
(3000, 'Networks', NULL),
(4000, 'Software and its engineering', NULL),
(5000, 'Theory of computation', NULL),
(6000, 'Mathematics of computing', NULL),
(7000, 'Information systems', NULL),
(8000, 'Security and privacy', NULL),
(9000, 'Human-centered computing', NULL),
(10000, 'Computing methodologies', NULL),
(11000, ' Applied computing', NULL),
(12000, 'Social and professional topics', NULL),
(13000, 'Proper nouns: People, technologies and companies', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laboratories`
--

CREATE TABLE `laboratories` (
  `laboratoryId` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `laboratoryName` varchar(100) NOT NULL,
  `laboratoryHead` int(11) NOT NULL,
  `laboratoryAddress` varchar(200) NOT NULL,
  `laboratoryPhone` varchar(50) NOT NULL,
  `laboratoryWeb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Bảng các phòng thí nghiệm (tương tự bảng departments)';

--
-- Dumping data for table `laboratories`
--

INSERT INTO `laboratories` (`laboratoryId`, `facultyId`, `laboratoryName`, `laboratoryHead`, `laboratoryAddress`, `laboratoryPhone`, `laboratoryWeb`) VALUES
(101, 100, 'Phòng Thí nghiệm An toàn thông tin', 0, '', '', ''),
(102, 100, 'Phòng Thí nghiệm Công nghệ Tri thức', 0, '', '', ''),
(103, 100, 'Phòng Thí nghiệm Hệ thống Nhúng', 0, '', '', ''),
(104, 100, 'Phòng Thí nghiệm Tương tác Người – Máy', 0, '', '', ''),
(201, 200, 'Phòng Thí nghiệm Tín hiệu và hệ thống', 0, '', '', ''),
(202, 200, 'Phòng Thực hành Điện tử viễn thông', 0, '', '', ''),
(401, 400, 'Phòng Thí nghiệm Vật liệu và kết cấu tiên tiến', 0, '', '', '');

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
  `teacherId` int(11) DEFAULT NULL,
  `coteacherId` int(11) DEFAULT NULL,
  `thesisDescription` longtext COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestId`, `studentId`, `requestType`, `facultyId`, `created_at`, `thesisId`, `thesisName`, `teacherId`, `coteacherId`, `thesisDescription`, `status`) VALUES
(8, 14020752, 2, 100, '2016-12-02 15:50:42', 1, '', 0, 0, '', 3),
(9, 14020752, 1, 100, '2016-12-02 15:51:55', 2, 'Test', 1, 0, '1', 3),
(10, 14020752, 1, 100, '2016-12-02 15:52:38', 2, 'Test', 1, 5, '1', 2),
(11, 14020752, 2, 100, '2016-12-02 15:52:56', 1, '', 0, 0, '', 3),
(12, 14020752, 2, 100, '2016-12-03 08:10:31', 1, '', 0, 0, '', 3),
(13, 14020752, 1, 100, '2016-12-03 15:15:14', 2, 'Changed Name', 1, 5, '1', 2),
(14, 14020752, 2, 100, '2016-12-03 15:21:27', 9, '', 0, 0, '', 2),
(15, 14020116, 2, 100, '2016-12-06 12:48:50', 7, '', 0, 0, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `research_directions`
--

CREATE TABLE `research_directions` (
  `researchDirectionId` int(11) NOT NULL,
  `teacherId` int(11) NOT NULL,
  `researchDirectionName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `researchDirectionsDescription` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng các hướng nghiên cứu của các giáo viên';

--
-- Dumping data for table `research_directions`
--


-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `reviewerId` int(11) NOT NULL,
  `thesisId` int(11) NOT NULL,
  `teacherId` int(11) NOT NULL,
  `reviewer` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`reviewerId`, `thesisId`, `teacherId`, `reviewer`, `created_at`) VALUES
(1, 2, 5, 'Đồng ngu nhỉ?  ', '2016-12-07 15:45:09'),
(4, 10, 5, 'Bình ngu =))', '2016-12-07 16:20:44'),
(9, 10, 9, 'T cũng thế', '2016-12-08 07:58:23'),
(10, 2, 3, 'Ukm', '2016-12-08 16:43:25');

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
  `avatar` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
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
(14020022, 'Nguyễn Hoàng Biên', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B2,"@vnu.edu.vn")', 0),
(14020025, 'Nguyễn Thanh Bình', '0000-00-00', '', 'K59-CB', '', NULL, 0, '11111111', 200, '14020025@vnu.edu.vn', 0),
(14020042, 'Nguyễn Thành Công', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B3,"@vnu.edu.vn")', 0),
(14020056, 'Nguyễn Mạnh Cường', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B5,"@vnu.edu.vn")', 0),
(14020066, 'Hà Hồng Duyên', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B6,"@vnu.edu.vn")', 0),
(14020084, 'Trần Đình Dương', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B7,"@vnu.edu.vn")', 0),
(14020091, 'Nguyễn Văn Đại', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B8,"@vnu.edu.vn")', 0),
(14020102, 'Trần Xuân Đạt', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B9,"@vnu.edu.vn")', 0),
(14020116, 'Dương Xuân Đồng', '0000-00-00', '', 'K59-CB', '', NULL, 0, '11111111', 100, '14020116@vnu.edu.vn', 1),
(14020123, 'Phạm Minh Đức', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B10,"@vnu.edu.vn")', 0),
(14020131, 'Đàm Thị Hà', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B11,"@vnu.edu.vn")', 0),
(14020139, 'Hoàng Văn Hải', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B12,"@vnu.edu.vn")', 0),
(14020169, 'Nguyễn Minh Hiếu', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B14,"@vnu.edu.vn")', 0),
(14020170, 'Nguyễn Quang Hiếu', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B15,"@vnu.edu.vn")', 0),
(14020180, 'Tô Mạnh Hiệp', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B13,"@vnu.edu.vn")', 0),
(14020225, 'Phạm Quang Hưng', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B16,"@vnu.edu.vn")', 0),
(14020234, 'Nguyễn Đức Khanh', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B17,"@vnu.edu.vn")', 0),
(14020266, 'Tô Hiến Long', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B21,"@vnu.edu.vn")', 0),
(14020268, 'Đinh Tiến Lộc', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B22,"@vnu.edu.vn")', 0),
(14020303, 'Nguyễn Văn Minh', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B24,"@vnu.edu.vn")', 0),
(14020335, 'Nguyễn Văn Nhật', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B26,"@vnu.edu.vn")', 0),
(14020337, 'Hoàng Ngọc Như', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B28,"@vnu.edu.vn")', 0),
(14020340, 'Nguyễn Đình Phi', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B29,"@vnu.edu.vn")', 0),
(14020341, 'Dương Quốc Phong', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B30,"@vnu.edu.vn")', 0),
(14020411, 'Trần Minh Thanh', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B33,"@vnu.edu.vn")', 0),
(14020424, 'Vũ Tiến Thành', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B34,"@vnu.edu.vn")', 0),
(14020426, 'Phan Thế Thảo', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B35,"@vnu.edu.vn")', 0),
(14020436, 'Trần Việt Thắng', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B36,"@vnu.edu.vn")', 0),
(14020450, 'Đỗ Ngọc Hoài Thu', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B37,"@vnu.edu.vn")', 0),
(14020452, 'Nguyễn Đức Thuần', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B39,"@vnu.edu.vn")', 0),
(14020470, 'Trần Viết Tiệp', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B40,"@vnu.edu.vn")', 0),
(14020477, 'Trần Đức Toàn', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B41,"@vnu.edu.vn")', 0),
(14020485, 'Nguyễn Văn Tranh', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B43,"@vnu.edu.vn")', 0),
(14020513, 'Lý Văn Tuấn', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B46,"@vnu.edu.vn")', 0),
(14020515, 'Ngô Phương Tuấn', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B47,"@vnu.edu.vn")', 0),
(14020520, 'Trần Minh Tuấn', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B48,"@vnu.edu.vn")', 0),
(14020521, 'Vũ Minh Tuấn', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B49,"@vnu.edu.vn")', 0),
(14020525, 'Trần Thị Ánh Tuyết', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B50,"@vnu.edu.vn")', 0),
(14020538, 'Nguyễn Bá Tú', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B45,"@vnu.edu.vn")', 0),
(14020549, 'Lại Thị Thảo Vân', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B52,"@vnu.edu.vn")', 0),
(14020557, 'Nguyễn Huy Vinh', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B53,"@vnu.edu.vn")', 0),
(14020560, 'Chu Thừa Vũ', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B54,"@vnu.edu.vn")', 0),
(14020562, 'Lê Tuấn Vũ', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B55,"@vnu.edu.vn")', 0),
(14020568, 'Lê Thị Xuân', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B56,"@vnu.edu.vn")', 0),
(14020577, 'Bùi Quang Cường', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B4,"@vnu.edu.vn")', 0),
(14020598, 'Trần Hữu Minh', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B25,"@vnu.edu.vn")', 0),
(14020601, 'Trương Thị Nhung', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B27,"@vnu.edu.vn")', 0),
(14020611, 'Bạch Văn Thuần', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B38,"@vnu.edu.vn")', 0),
(14020613, 'Phan Thị Hà Trang', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B42,"@vnu.edu.vn")', 0),
(14020614, 'Nguyễn Ngọc Trung', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B44,"@vnu.edu.vn")', 0),
(14020629, 'Vũ Thùy Linh', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B19,"@vnu.edu.vn")', 0),
(14020630, 'Dương Tiến Mạnh', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B23,"@vnu.edu.vn")', 0),
(14020633, 'Đỗ Văn Quang', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B31,"@vnu.edu.vn")', 0),
(14020669, 'Nguyễn Việt Long', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B20,"@vnu.edu.vn")', 0),
(14020675, 'Trần Minh Quân', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B32,"@vnu.edu.vn")', 0),
(14020685, 'Vũ Nam Tước', '0000-00-00', '', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B51,"@vnu.edu.vn")', 0),
(14020752, 'Phạm Minh Hoàng Linh', '1996-11-04', 'nam', 'K59-CLC', '', NULL, 0, '11111111', 100, '=CONCATENATE(B18,"@vnu.edu.vn")', 0);

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
  `teacherId` int(11) NOT NULL,
  `teacherName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `teacherMail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `departmentId` int(11) DEFAULT NULL,
  `teacherInfo` longtext COLLATE utf8_unicode_ci,
  `teacherImage` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `teacherPhone` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facultyId` int(11) NOT NULL,
  `laboratoryId` int(11) DEFAULT NULL,
  `avatar` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherId`, `teacherName`, `teacherMail`, `departmentId`, `teacherInfo`, `teacherImage`, `teacherPhone`, `password`, `facultyId`, `laboratoryId`, `avatar`) VALUES
(1, 'Phạm Minh Hoàng Linh', 'hlinh0411hd@gmail.com', 102, 'ahihi', '', '', '', 100, 0, 'upload/avatar/hl.jpg'),
(2, 'Phạm Linh', '14020752@vnu.edu.vn', 101, NULL, '', '', '11111111', 100, NULL, NULL),
(3, 'Phạm Minh Linh', '14020752@vnu.edu.vn', 101, NULL, '', '', '11111111', 100, NULL, NULL),
(4, 'Phạm Minh Hoàng', '14020752@vnu.edu.vn', 201, NULL, '', '', '11111111', 200, NULL, NULL),
(5, 'Dương Xuân Đồng', 'dongdx96@gmail.com', 301, NULL, '', '', '11111111', 300, NULL, NULL),
(6, 'Nguyễn Thanh Bình', 'thanhbinh7099@gmail.com', 401, NULL, '', '', '11111111', 400, NULL, NULL),
(7, 'Phạm Quang Hưng', '14020225@vnu.edu.vn', 101, NULL, '', '', '11111111', 100, NULL, NULL),
(8, 'Nguyễn Huy Vinh', '14020557@vnu.edu.vn', 101, NULL, '', '', '11111111', 100, NULL, NULL),
(9, 'Phan Thị Hà Trang', 'trangcute@gmail.com', 101, NULL, '', '', '11111111', 100, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `thesisId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `thesisName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `teacherId` int(11) NOT NULL,
  `coteacherId` int(11) DEFAULT NULL,
  `thesisDescription` longtext COLLATE utf8_unicode_ci,
  `accepted` int(11) DEFAULT '0',
  `facultyId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isClosed` int(11) NOT NULL DEFAULT '0',
  `isSuccess` int(11) DEFAULT '0',
  `protectionFile` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`thesisId`, `studentId`, `thesisName`, `teacherId`, `coteacherId`, `thesisDescription`, `accepted`, `facultyId`, `created_at`, `isClosed`, `isSuccess`, `protectionFile`) VALUES
(2, 14020752, 'Changed Name', 1, 5, '1', 1, 100, '2016-11-30 15:13:35', 0, 0, 1),
(8, 14020025, 'Ngu quá', 5, 0, 'Ngu', 0, 200, '2016-11-30 15:14:23', 0, 0, 0),
(9, 14020025, 'Binh ngu qua', 1, 5, 'Ahihi', 1, 200, '2016-12-06 12:45:56', 0, 0, 0),
(10, 14020116, 'Dong ngu', 1, 6, 'ahihi', 1, 100, '2016-12-06 12:49:19', 0, 0, 1);

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
-- Indexes for table `relative_fields`
--
ALTER TABLE `relative_fields`
  ADD KEY `fk_f_teacher_idx` (`fieldId`),
  ADD KEY `fk_rd_idx` (`researchDirectionId`);

--
-- Indexes for table `relative_subfields`
--
ALTER TABLE `relative_subfields`
  ADD KEY `fk_field_idx` (`fieldId`),
  ADD KEY `fk_rd_idx` (`researchDirectionId`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `council`
--
ALTER TABLE `council`
  MODIFY `councilId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `research_directions`
--
ALTER TABLE `research_directions`
  MODIFY `researchDirectionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `reviewerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `thesis`
--
ALTER TABLE `thesis`
  MODIFY `thesisId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  ADD CONSTRAINT `fk_field` FOREIGN KEY (`fieldId`) REFERENCES `fields` (`fieldId`) ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `fk_d_faculty` FOREIGN KEY (`facultyId`) REFERENCES `faculties` (`facultyId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_d_teacher` FOREIGN KEY (`departmentId`) REFERENCES `departments` (`departmentId`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
