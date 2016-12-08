-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2016 at 09:44 AM
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
  `facultyPassword` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Bảng Khoa (facultyDean: trưởng khoa: lấy id từ giáo viên; facultyDeparment:văn phòng khoa)';

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`facultyId`, `facultyName`, `facultyDean`, `facultyDepartment`, `facultyPhone`, `facultyUsername`, `facultyPassword`) VALUES
(100, 'Khoa Công nghệ Thông tin', 1, 'Văn phòng Khoa Công nghệ thông tin – Trường Đại học Công nghệ – ĐHQGHN', '(04)37547064', 'CNTT', '11111111'),
(200, 'Khoa Điện tử Viễn thông', 2, 'Văn phòng khoa Điện tử – Viễn thông', '(84-4) 3754 9338', 'DTVT', '11111111'),
(300, 'Khoa Vật lý Kỹ thuật và Công nghệ Nano', 3, 'Khoa Vật lý kỹ thuật và Công nghệ nano, Phòng E2.2 – Nhà E4 144 đường Xuân Thủy, quận Cầu Giấy, Hà Nội', '(04) 3754 9429', 'VLCN', '11111111'),
(400, 'Khoa Cơ học kỹ thuật và Tự động hóa', 4, 'Văn phòng khoa Cơ học kỹ thuật và Tự động hóa, Trường Đại học Công Nghệ, ĐHQGHN', '04.37549431', 'CHTD', '11111111');

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

INSERT INTO `relative_fields` (`researchDirectionId`, `fieldId`) VALUES
(8, 2000),
(8, 10000),
(9, 2000),
(9, 1000),
(1, 4000),
(1, 1000),
(2, 5000),
(2, 1000);

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

INSERT INTO `research_directions` (`researchDirectionId`, `teacherId`, `researchDirectionName`, `researchDirectionsDescription`) VALUES
(1, 1, 'Web Development', NULL),
(2, 1, 'Game Design', NULL),
(7, 1, 'Computer Science', NULL),
(8, 1, 'Computer Science', NULL),
(9, 1, 'Web Development', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentId` int(11) NOT NULL,
  `studentName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `studentBirthday` date NOT NULL,
  `studentGender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `studentClass` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `studentPhone` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `studentImage` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `consultant` int(11) NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facultyId` int(11) NOT NULL,
  `studentMail` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thesisAllowed` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentId`, `studentName`, `studentBirthday`, `studentGender`, `studentClass`, `studentPhone`, `studentImage`, `consultant`, `password`, `facultyId`, `studentMail`, `thesisAllowed`) VALUES
(14020042, 'Nguyễn Thành Công', '0000-00-00', '', 'K59-CLC', '', '', 0, '11111111', 400, '14020042@vnu.edu.vn', 0),
(14020116, 'Dương Xuân Đồng', '0000-00-00', '', 'K59-CB', '', '', 0, '11111111', 300, '14020116@vnu.edu.vn', 1),
(14020266, 'Tô Hiến Long', '1996-03-21', 'Nam', 'K59-CLC', '', '', 0, '11111111', 100, '14020266@vnu.edu.vn', 0),
(14020752, 'Phạm Minh Hoàng Linh', '0000-00-00', 'Nam', 'K59-CLC', '', '', 0, '11111111', 100, '14020752@vnu.edu.vn', 1);

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
  `laboratoryId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherId`, `teacherName`, `teacherMail`, `departmentId`, `teacherInfo`, `teacherImage`, `teacherPhone`, `password`, `facultyId`, `laboratoryId`) VALUES
(1, 'Phạm Minh Hoàng Linh', 'hlinh0411hd@gmail.com', 101, NULL, '', '', '', 100, NULL),
(2, 'Phạm Linh', '14020752@vnu.edu.vn', 101, NULL, '', '', '11111111', 100, NULL),
(3, 'Phạm Minh Linh', '14020752@vnu.edu.vn', 101, NULL, '', '', '11111111', 100, NULL),
(4, 'Phạm Minh Hoàng', '14020752@vnu.edu.vn', 201, NULL, '', '', '11111111', 200, NULL),
(5, 'Dương Xuân Đồng', 'dongdx96@gmail.com', 301, NULL, '', '', '11111111', 300, NULL);

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
  `facultyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`thesisId`, `studentId`, `thesisName`, `teacherId`, `coteacherId`, `thesisDescription`, `accepted`, `facultyId`) VALUES
(1, 14020752, 'Day lmht', 1, 0, 'day', 1, 100),
(2, 14020752, 'Test', 1, 0, '1', 1, 100),
(7, 14020116, 'Test Đồng ngu', 1, 0, 'Đồng rất ngu', 1, 300);

--
-- Indexes for dumped tables
--

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
  ADD KEY `fk_f_teacher_idx` (`fieldId`);

--
-- Indexes for table `research_directions`
--
ALTER TABLE `research_directions`
  ADD PRIMARY KEY (`researchDirectionId`),
  ADD KEY `fk_rd_teacher_idx` (`teacherId`);

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
-- AUTO_INCREMENT for table `research_directions`
--
ALTER TABLE `research_directions`
  MODIFY `researchDirectionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `thesis`
--
ALTER TABLE `thesis`
  MODIFY `thesisId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  ADD CONSTRAINT `fk_f_teacher` FOREIGN KEY (`fieldId`) REFERENCES `fields` (`fieldId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
