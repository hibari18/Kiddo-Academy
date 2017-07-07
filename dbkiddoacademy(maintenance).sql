-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 12:37 PM
-- Server version: 5.5.29
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkiddoacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcurriculum`
--

CREATE TABLE `tblcurriculum` (
  `tblCurriculumId` int(11) NOT NULL,
  `tblCurriculumName` varchar(50) DEFAULT NULL,
  `tblCurriculumFlag` tinyint(1) NOT NULL DEFAULT '1',
  `tblCurriculumActive` varchar(10) DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcurriculum`
--

INSERT INTO `tblcurriculum` (`tblCurriculumId`, `tblCurriculumName`, `tblCurriculumFlag`, `tblCurriculumActive`) VALUES
(4, 'BECKY!', 0, 'INACTIVE'),
(5, 'RBEC', 1, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `tblcurriculumdetail`
--

CREATE TABLE `tblcurriculumdetail` (
  `tblCurriculumDetailId` int(11) NOT NULL,
  `tblCurriculumDetail_tblCurriculumId` int(11) DEFAULT NULL,
  `tblCurriculumDetail_tblDivisionId` int(11) DEFAULT NULL,
  `tblCurriculumDetail_tblLevelId` int(11) DEFAULT NULL,
  `tblCurriculumDetail_tblSubjectId` varchar(8) DEFAULT NULL,
  `tblCurriculumFlag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcurriculumdetail`
--

INSERT INTO `tblcurriculumdetail` (`tblCurriculumDetailId`, `tblCurriculumDetail_tblCurriculumId`, `tblCurriculumDetail_tblDivisionId`, `tblCurriculumDetail_tblLevelId`, `tblCurriculumDetail_tblSubjectId`, `tblCurriculumFlag`) VALUES
(1, 5, 1, 2, 'ENGL1', 0),
(2, 5, 1, 2, 'MATH1', 1),
(3, 5, 1, 2, 'ENGL1', 1),
(4, 5, 1, 3, 'MATH2', 1),
(5, 5, 2, 4, 'ENGL1', 1),
(6, 5, 3, 6, 'MATH2', 0),
(7, 5, 1, 3, 'ENGL2', 1),
(8, 4, 1, 1, 'ENGL1', 1),
(9, 5, 1, 2, 'FILI1', 1),
(10, 5, 1, 2, 'SCIE1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbldivision`
--

CREATE TABLE `tbldivision` (
  `tblDivisionId` int(11) NOT NULL,
  `tblDivisionName` varchar(50) NOT NULL,
  `tblDivisionFlag` tinyint(1) NOT NULL DEFAULT '1',
  `tblDivisionActive` varchar(10) DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldivision`
--

INSERT INTO `tbldivision` (`tblDivisionId`, `tblDivisionName`, `tblDivisionFlag`, `tblDivisionActive`) VALUES
(1, 'PRESCHOOL', 1, 'ACTIVE'),
(2, 'ELEMENTARY', 1, 'ACTIVE'),
(3, 'HIGHSCHOOL', 1, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `tblfaculty`
--

CREATE TABLE `tblfaculty` (
  `tblFacultyId` varchar(5) NOT NULL DEFAULT '',
  `tblFacultyFname` varchar(50) NOT NULL,
  `tblFacultyLname` varchar(50) NOT NULL,
  `tblFacultyMname` varchar(50) DEFAULT NULL,
  `tblFacultyGender` varchar(50) NOT NULL,
  `tblFacultyEmail` varchar(50) DEFAULT NULL,
  `tblFaculty_tblUserId` int(11) DEFAULT NULL,
  `tblFacultyFlag` tinyint(1) NOT NULL DEFAULT '1',
  `tblFaculty_tblFacultyPositionId` int(11) DEFAULT NULL,
  `tblFacultyContact` varchar(11) DEFAULT NULL,
  `tblFacultyAddress` varchar(225) DEFAULT NULL,
  `tblFacultyBplace` varchar(225) DEFAULT NULL,
  `tblFacultyBday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfaculty`
--

INSERT INTO `tblfaculty` (`tblFacultyId`, `tblFacultyFname`, `tblFacultyLname`, `tblFacultyMname`, `tblFacultyGender`, `tblFacultyEmail`, `tblFaculty_tblUserId`, `tblFacultyFlag`, `tblFaculty_tblFacultyPositionId`, `tblFacultyContact`, `tblFacultyAddress`, `tblFacultyBplace`, `tblFacultyBday`) VALUES
('00001', 'Adrian', 'Ivashkov', 'Sage', 'F', 'jetsteele@gmail.com', NULL, 1, NULL, '09655764570', 'Palm Spring', 'Montana', '1998-08-09'),
('00002', 'Aaron', 'Warner', 'Ferrar', 'M', 'aaronwarner@gmail.com', NULL, 1, NULL, '09747738829', 'Omega  Point', 'Omega Point', '1994-03-02'),
('00003', 'Draco', 'Malfoy', 'Granger', 'M', 'dracomalfoy@gmail.com', NULL, 1, NULL, '09763638289', 'Malfoy Manor', 'Malfoy Manor', '1990-11-11'),
('00004', 'Lazarus', 'Mace', 'Christian', 'M', 'lazarus@gmail.com', NULL, 1, NULL, '09357729173', 'The Keep', 'The Cretch', '1993-02-16'),
('00005', 'Nico', 'di Angelo', 'Solace', 'M', 'diAngelo@gmail.com', 1, 1, 1, '09362727363', 'Camp Half-Blood Long Island, New York', 'Underworld', '1988-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `tblfacultyposition`
--

CREATE TABLE `tblfacultyposition` (
  `tblFacultyPosId` int(11) NOT NULL,
  `tblFacultyPosName` varchar(25) DEFAULT NULL,
  `tblFacultyPosFlag` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfacultyposition`
--

INSERT INTO `tblfacultyposition` (`tblFacultyPosId`, `tblFacultyPosName`, `tblFacultyPosFlag`) VALUES
(1, 'TEACHER', 1),
(2, 'REGISTRAR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblfee`
--

CREATE TABLE `tblfee` (
  `tblFeeId` int(11) NOT NULL,
  `tblFeeName` varchar(100) NOT NULL,
  `tblFeeFlag` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfee`
--

INSERT INTO `tblfee` (`tblFeeId`, `tblFeeName`, `tblFeeFlag`) VALUES
(1, 'TUITION FEE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeeamount`
--

CREATE TABLE `tblfeeamount` (
  `tblFeeAmountId` int(11) NOT NULL,
  `tblFeeAmountAmount` float DEFAULT '0',
  `tblFeeAmount_tblFeeId` int(11) DEFAULT NULL,
  `tblFeeAmount_tblLevelId` int(11) DEFAULT NULL,
  `tblFeeAmountFlag` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfeeamount`
--

INSERT INTO `tblfeeamount` (`tblFeeAmountId`, `tblFeeAmountAmount`, `tblFeeAmount_tblFeeId`, `tblFeeAmount_tblLevelId`, `tblFeeAmountFlag`) VALUES
(1, 1232, 1, 1, 1),
(2, 4142, 1, 2, 1),
(3, 2342, 1, 3, 1),
(4, 5435, 1, 4, 1),
(5, 2342, 1, 5, 1),
(6, 5432, 1, 6, 1),
(7, 6132, 1, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedetail`
--

CREATE TABLE `tblfeedetail` (
  `tblFeeDetailId` int(11) NOT NULL,
  `tblFeeDetailName` varchar(100) NOT NULL,
  `tblFeeDetailAmount` float NOT NULL,
  `tblFeeDetail_tblFee` int(11) DEFAULT NULL,
  `tblFeeDetail_tblLevelId` int(11) DEFAULT NULL,
  `tblFeeDetailFlag` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfeedetail`
--

INSERT INTO `tblfeedetail` (`tblFeeDetailId`, `tblFeeDetailName`, `tblFeeDetailAmount`, `tblFeeDetail_tblFee`, `tblFeeDetail_tblLevelId`, `tblFeeDetailFlag`) VALUES
(1, 'food', 1232, 1, 1, 1),
(2, 'food', 4142, 1, 2, 1),
(3, 'food', 2342, 1, 3, 1),
(4, 'food', 5435, 1, 4, 1),
(5, 'food', 2342, 1, 5, 1),
(6, 'food', 5432, 1, 6, 1),
(7, 'food', 6132, 1, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblgradecomponent`
--

CREATE TABLE `tblgradecomponent` (
  `tblgradeId` int(11) NOT NULL,
  `tblGradeName` varchar(100) DEFAULT NULL,
  `tblGradePercent` float DEFAULT NULL,
  `tblGradeNo` int(11) DEFAULT NULL,
  `tblGradeFlag` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgradecomponent`
--

INSERT INTO `tblgradecomponent` (`tblgradeId`, `tblGradeName`, `tblGradePercent`, `tblGradeNo`, `tblGradeFlag`) VALUES
(1, 'QUIZZES', 0.2, 4, 1),
(2, 'RECITATION', NULL, NULL, 1),
(3, 'PERFORMANCE', NULL, NULL, 1),
(4, 'EXAMINATION', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbllevel`
--

CREATE TABLE `tbllevel` (
  `tblLevelId` int(11) NOT NULL,
  `tblLevelName` varchar(50) NOT NULL,
  `tblLevel_tblDivisionId` int(11) DEFAULT NULL,
  `tblLevelFlag` tinyint(1) NOT NULL DEFAULT '1',
  `tblLevelActive` varchar(10) DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllevel`
--

INSERT INTO `tbllevel` (`tblLevelId`, `tblLevelName`, `tblLevel_tblDivisionId`, `tblLevelFlag`, `tblLevelActive`) VALUES
(1, 'NURSERY', 1, 1, 'ACTIVE'),
(2, 'KINDER 1', 1, 1, 'ACTIVE'),
(3, 'KINDER 2', 1, 1, 'ACTIVE'),
(4, 'GRADE 1', 2, 1, 'ACTIVE'),
(5, 'GRADE 2', 2, 1, 'ACTIVE'),
(6, 'FIRST YEARS', 3, 1, 'ACTIVE'),
(7, 'SECOND YEAR', 3, 1, 'INACTIVE'),
(8, 'GRADE 3', 2, 0, 'ACTIVE'),
(9, 'GRADE 4', 2, 0, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `tblnumberclass`
--

CREATE TABLE `tblnumberclass` (
  `tblNumClassid` int(11) NOT NULL,
  `tblNumClassMonth` varchar(15) DEFAULT NULL,
  `tblNumClass_tblSy` int(11) DEFAULT NULL,
  `tblNumClassFlag` int(11) DEFAULT '1',
  `tblNumClassDay` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnumberclass`
--

INSERT INTO `tblnumberclass` (`tblNumClassid`, `tblNumClassMonth`, `tblNumClass_tblSy`, `tblNumClassFlag`, `tblNumClassDay`) VALUES
(1, 'June', 1, 1, 12),
(2, 'July', 1, 1, 0),
(3, 'August', 1, 1, 0),
(4, 'September', 1, 1, 0),
(5, 'October', 1, 1, 0),
(6, 'November', 1, 1, 0),
(7, 'December', 1, 1, 0),
(8, 'January', 1, 1, 0),
(9, 'February', 1, 1, 0),
(10, 'March', 1, 1, 0),
(11, 'June', 2, 1, 0),
(12, 'July', 2, 1, 0),
(13, 'August', 2, 1, 0),
(14, 'September', 2, 1, 0),
(15, 'October', 2, 1, 0),
(16, 'November', 2, 1, 0),
(17, 'December', 2, 1, 0),
(18, 'January', 2, 1, 0),
(19, 'February', 2, 1, 0),
(20, 'March', 2, 1, 0),
(21, 'June', 3, 1, 0),
(22, 'July', 3, 1, 0),
(23, 'August', 3, 1, 0),
(24, 'September', 3, 1, 0),
(25, 'October', 3, 1, 0),
(26, 'November', 3, 1, 0),
(27, 'December', 3, 1, 0),
(28, 'January', 3, 1, 0),
(29, 'February', 3, 1, 0),
(30, 'March', 3, 1, 0),
(31, 'June', 4, 1, 0),
(32, 'July', 4, 1, 0),
(33, 'August', 4, 1, 0),
(34, 'September', 4, 1, 0),
(35, 'October', 4, 1, 0),
(36, 'November', 4, 1, 0),
(37, 'December', 4, 1, 0),
(38, 'January', 4, 1, 0),
(39, 'February', 4, 1, 0),
(40, 'March', 4, 1, 0),
(41, 'June', 5, 1, 0),
(42, 'July', 5, 1, 0),
(43, 'August', 5, 1, 0),
(44, 'September', 5, 1, 0),
(45, 'October', 5, 1, 0),
(46, 'November', 5, 1, 0),
(47, 'December', 5, 1, 0),
(48, 'January', 5, 1, 0),
(49, 'February', 5, 1, 0),
(50, 'March', 5, 1, 0),
(51, 'June', 6, 1, 0),
(52, 'July', 6, 1, 0),
(53, 'August', 6, 1, 0),
(54, 'September', 6, 1, 0),
(55, 'October', 6, 1, 0),
(56, 'November', 6, 1, 0),
(57, 'December', 6, 1, 0),
(58, 'January', 6, 1, 0),
(59, 'February', 6, 1, 0),
(60, 'March', 6, 1, 0),
(61, 'June', 7, 1, 0),
(62, 'July', 7, 1, 0),
(63, 'August', 7, 1, 0),
(64, 'September', 7, 1, 0),
(65, 'October', 7, 1, 0),
(66, 'November', 7, 1, 0),
(67, 'December', 7, 1, 0),
(68, 'January', 7, 1, 0),
(69, 'February', 7, 1, 0),
(70, 'March', 7, 1, 0),
(71, 'June', 8, 1, 0),
(72, 'July', 8, 1, 0),
(73, 'August', 8, 1, 0),
(74, 'September', 8, 1, 0),
(75, 'October', 8, 1, 0),
(76, 'November', 8, 1, 0),
(77, 'December', 8, 1, 0),
(78, 'January', 8, 1, 0),
(79, 'February', 8, 1, 0),
(80, 'March', 8, 1, 0),
(81, 'June', 9, 1, 0),
(82, 'July', 9, 1, 0),
(83, 'August', 9, 1, 0),
(84, 'September', 9, 1, 0),
(85, 'October', 9, 1, 0),
(86, 'November', 9, 1, 0),
(87, 'December', 9, 1, 0),
(88, 'January', 9, 1, 0),
(89, 'February', 9, 1, 0),
(90, 'March', 9, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblparent`
--

CREATE TABLE `tblparent` (
  `tblParentId` int(11) NOT NULL,
  `tblParentFname` varchar(50) NOT NULL,
  `tblParentLname` varchar(50) NOT NULL,
  `tblParentMname` varchar(50) DEFAULT NULL,
  `tblParentRelation` varchar(50) NOT NULL,
  `tblParentEmail` varchar(50) DEFAULT NULL,
  `tblParent_tblStudentId` int(11) DEFAULT NULL,
  `tblParentFlag` tinyint(1) NOT NULL DEFAULT '1',
  `tblParentAdd` varchar(225) DEFAULT NULL,
  `tblParentTelNo` varchar(11) DEFAULT NULL,
  `tblParentCpNo` varchar(9) DEFAULT NULL,
  `tblParentOccupation` varchar(100) DEFAULT NULL,
  `tblParentCompany` varchar(100) DEFAULT NULL,
  `tblParentCompanyAdd` varchar(225) DEFAULT NULL,
  `tblParentWorkNo` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblparent`
--

INSERT INTO `tblparent` (`tblParentId`, `tblParentFname`, `tblParentLname`, `tblParentMname`, `tblParentRelation`, `tblParentEmail`, `tblParent_tblStudentId`, `tblParentFlag`, `tblParentAdd`, `tblParentTelNo`, `tblParentCpNo`, `tblParentOccupation`, `tblParentCompany`, `tblParentCompanyAdd`, `tblParentWorkNo`) VALUES
(1, 'Romeosds', 'Galangs', 'Dayrit', 'Father', 'romeogalang@yahoo.coms', 12345, 1, '2026 G. Gen T. de Leon, Valenzuela Citys', '6564880', '092564620', 'Trainers', 'Sports Hubs', 'Marikinas', '4577550'),
(2, 'Mary Claired', 'Galangd', 'Sumampongd', 'Mother', 'mcg@yahoo.coms', 12345, 1, 'Valenzuelad', '0976573', '097866449', 'Offices', 'Makatis', 'Dunnos', '0988s');

-- --------------------------------------------------------

--
-- Table structure for table `tblpreviousschool`
--

CREATE TABLE `tblpreviousschool` (
  `tblPrevSchoolId` int(11) NOT NULL,
  `tblPrevSchoolName` varchar(100) NOT NULL,
  `tblPrevSchoolFlag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblrequirement`
--

CREATE TABLE `tblrequirement` (
  `tblReqId` int(11) NOT NULL,
  `tblReqName` varchar(50) NOT NULL,
  `tblReqDescription` varchar(200) DEFAULT NULL,
  `tblReq_tblStudentId` int(11) DEFAULT NULL,
  `tblRequirementFlag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrequirement`
--

INSERT INTO `tblrequirement` (`tblReqId`, `tblReqName`, `tblReqDescription`, `tblReq_tblStudentId`, `tblRequirementFlag`) VALUES
(1, 'FORM-137', 'STUDENT GRADES DS', NULL, 0),
(2, 'I.D.', 'IDENTIFICATION CARDS', NULL, 0),
(3, 'INFORMATION SHEET', 'STUDENT INFORMATION', NULL, 1),
(4, 'OFFICIAL RECEIPT', 'TUITION RECEIPT', NULL, 1),
(5, 'LALALALALA', 'HAHAHAHA', NULL, 0),
(6, 'MEDICAL HISTORY', 'MEDICAL BACKGROUND', NULL, 0),
(7, 'DUH', 'LOL', NULL, 0),
(8, 'I.D.', 'IDENTIFICATION CARDS', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblrole`
--

CREATE TABLE `tblrole` (
  `tblRoleId` int(11) NOT NULL,
  `tblRoleName` varchar(50) NOT NULL,
  `tblRoleFlag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrole`
--

INSERT INTO `tblrole` (`tblRoleId`, `tblRoleName`, `tblRoleFlag`) VALUES
(1, 'SCHOOLHEAD', 1),
(2, 'TEACHER', 1),
(3, 'PARENT', 1),
(4, 'REGISTRAR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsched`
--

CREATE TABLE `tblsched` (
  `tblSchedId` int(11) NOT NULL,
  `tblSchedStartOfSubj` time DEFAULT NULL,
  `tblSchedEndOfSubj` time DEFAULT NULL,
  `tblSched_tblSubjectId` varchar(8) DEFAULT NULL,
  `tblSched_tblSectionId` int(11) DEFAULT NULL,
  `tblSchedFlag` tinyint(4) DEFAULT '1',
  `tblSchedDay` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsched`
--

INSERT INTO `tblsched` (`tblSchedId`, `tblSchedStartOfSubj`, `tblSchedEndOfSubj`, `tblSched_tblSubjectId`, `tblSched_tblSectionId`, `tblSchedFlag`, `tblSchedDay`) VALUES
(187, '12:30:00', '13:30:00', 'MATH1', 1, 1, 'MONDAY'),
(188, '09:30:00', '10:30:00', 'ENGL1', 1, 1, 'MONDAY'),
(189, '12:00:00', '13:00:00', 'FILI1', 1, 1, 'MONDAY'),
(190, '11:30:00', '12:30:00', 'SCIE1', 1, 1, 'MONDAY'),
(191, NULL, NULL, 'MATH1', 1, 1, 'TUESDAY'),
(192, '07:30:00', '16:30:00', 'ENGL1', 1, 1, 'TUESDAY'),
(193, NULL, NULL, 'FILI1', 1, 1, 'TUESDAY'),
(194, NULL, NULL, 'SCIE1', 1, 1, 'TUESDAY'),
(195, NULL, NULL, 'MATH1', 1, 1, 'WEDNESDAY'),
(196, NULL, NULL, 'ENGL1', 1, 1, 'WEDNESDAY'),
(197, NULL, NULL, 'FILI1', 1, 1, 'WEDNESDAY'),
(198, NULL, NULL, 'SCIE1', 1, 1, 'WEDNESDAY'),
(199, NULL, NULL, 'MATH1', 1, 1, 'THURSDAY'),
(200, NULL, NULL, 'ENGL1', 1, 1, 'THURSDAY'),
(201, NULL, NULL, 'FILI1', 1, 1, 'THURSDAY'),
(202, NULL, NULL, 'SCIE1', 1, 1, 'THURSDAY'),
(203, NULL, NULL, 'MATH1', 1, 1, 'FRIDAY'),
(204, '10:30:00', '14:30:00', 'ENGL1', 1, 1, 'FRIDAY'),
(205, NULL, NULL, 'FILI1', 1, 1, 'FRIDAY'),
(206, NULL, NULL, 'SCIE1', 1, 1, 'FRIDAY'),
(207, NULL, NULL, 'MATH1', 2, 1, 'MONDAY'),
(208, NULL, NULL, 'ENGL1', 2, 1, 'MONDAY'),
(209, NULL, NULL, 'FILI1', 2, 1, 'MONDAY'),
(210, NULL, NULL, 'SCIE1', 2, 1, 'MONDAY'),
(211, NULL, NULL, 'MATH1', 2, 1, 'TUESDAY'),
(212, NULL, NULL, 'ENGL1', 2, 1, 'TUESDAY'),
(213, NULL, NULL, 'FILI1', 2, 1, 'TUESDAY'),
(214, NULL, NULL, 'SCIE1', 2, 1, 'TUESDAY'),
(215, NULL, NULL, 'MATH1', 2, 1, 'WEDNESDAY'),
(216, NULL, NULL, 'ENGL1', 2, 1, 'WEDNESDAY'),
(217, NULL, NULL, 'FILI1', 2, 1, 'WEDNESDAY'),
(218, NULL, NULL, 'SCIE1', 2, 1, 'WEDNESDAY'),
(219, NULL, NULL, 'MATH1', 2, 1, 'THURSDAY'),
(220, NULL, NULL, 'ENGL1', 2, 1, 'THURSDAY'),
(221, NULL, NULL, 'FILI1', 2, 1, 'THURSDAY'),
(222, NULL, NULL, 'SCIE1', 2, 1, 'THURSDAY'),
(223, NULL, NULL, 'MATH1', 2, 1, 'FRIDAY'),
(224, NULL, NULL, 'ENGL1', 2, 1, 'FRIDAY'),
(225, NULL, NULL, 'FILI1', 2, 1, 'FRIDAY'),
(226, NULL, NULL, 'SCIE1', 2, 1, 'FRIDAY');

-- --------------------------------------------------------

--
-- Table structure for table `tblscheme`
--

CREATE TABLE `tblscheme` (
  `tblSchemeId` int(11) NOT NULL,
  `tblSchemeType` varchar(100) NOT NULL,
  `tblSchemeNoOfPayment` int(11) DEFAULT NULL,
  `tblScheme_tblFeeId` int(11) DEFAULT NULL,
  `tblSchemeFlag` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblscheme`
--

INSERT INTO `tblscheme` (`tblSchemeId`, `tblSchemeType`, `tblSchemeNoOfPayment`, `tblScheme_tblFeeId`, `tblSchemeFlag`) VALUES
(1, 'SEMESTRAL', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblschemedetail`
--

CREATE TABLE `tblschemedetail` (
  `tblSchemeDetailId` int(11) NOT NULL,
  `tblSchemeDetailName` varchar(100) NOT NULL,
  `tblSchemeDetailDueDate` date DEFAULT NULL,
  `tblSchemeDetailAmount` float NOT NULL,
  `tblSchemeDetail_tblLevel` int(11) DEFAULT NULL,
  `tblSchemeDetail_tblScheme` int(11) DEFAULT NULL,
  `tblSchemeDetailFlag` tinyint(4) DEFAULT '1',
  `tblSchedDetailCtr` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblschemedetail`
--

INSERT INTO `tblschemedetail` (`tblSchemeDetailId`, `tblSchemeDetailName`, `tblSchemeDetailDueDate`, `tblSchemeDetailAmount`, `tblSchemeDetail_tblLevel`, `tblSchemeDetail_tblScheme`, `tblSchemeDetailFlag`, `tblSchedDetailCtr`) VALUES
(1, '1', '0000-12-24', 0, 1, 1, 1, 0),
(2, '2', NULL, 0, 1, 1, 1, 0),
(3, '1', NULL, 0, 2, 1, 1, 1),
(4, '2', NULL, 0, 2, 1, 1, 1),
(5, '1', NULL, 0, 3, 1, 1, 0),
(6, '2', NULL, 0, 3, 1, 1, 0),
(7, '1', NULL, 0, 4, 1, 1, 0),
(8, '2', NULL, 0, 4, 1, 1, 0),
(9, '1', NULL, 0, 5, 1, 1, 0),
(10, '2', NULL, 0, 5, 1, 1, 0),
(11, '1', NULL, 0, 6, 1, 1, 0),
(12, '2', NULL, 0, 6, 1, 1, 0),
(13, '1', NULL, 0, 7, 1, 1, 0),
(14, '2', NULL, 0, 7, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblschoolyear`
--

CREATE TABLE `tblschoolyear` (
  `tblSchoolYrId` int(11) NOT NULL DEFAULT '1',
  `tblSchoolYrYear` varchar(14) DEFAULT NULL,
  `tblSchoolYr_tblCurriculum` int(11) DEFAULT NULL,
  `tblSchoolYearFlag` tinyint(1) NOT NULL DEFAULT '1',
  `tblSchoolYrActive` varchar(8) DEFAULT 'ACTIVE',
  `tblSchoolYrStart` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblschoolyear`
--

INSERT INTO `tblschoolyear` (`tblSchoolYrId`, `tblSchoolYrYear`, `tblSchoolYr_tblCurriculum`, `tblSchoolYearFlag`, `tblSchoolYrActive`, `tblSchoolYrStart`) VALUES
(1, 'S.Y. 2020-2021', 4, 1, 'INACTIVE', 2020),
(2, 'S.Y. 2017-2018', 4, 1, 'INACTIVE', 2017),
(3, 'S.Y. 2018-2019', 5, 1, 'INACTIVE', 2018),
(4, 'S.Y. 2010-2011', 4, 1, 'INACTIVE', 2010),
(5, 'S.Y. 2008-2009', 4, 1, 'INACTIVE', 2008),
(6, 'S.Y. 2019-2020', 4, 1, 'INACTIVE', 2019),
(7, 'S.Y. 2021-2022', 5, 1, 'INACTIVE', 2021),
(8, 'S.Y. 2022-2023', 5, 0, 'INACTIVE', 2022),
(9, 'S.Y. 2023-2024', 5, 1, 'ACTIVE', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `tblsection`
--

CREATE TABLE `tblsection` (
  `tblSectionId` int(11) NOT NULL,
  `tblSectionName` varchar(50) NOT NULL,
  `tblSectionMaxCap` int(11) DEFAULT '10',
  `tblSection_tblLevelId` int(11) DEFAULT NULL,
  `tblSection_tblSchedId` int(11) DEFAULT NULL,
  `tblSectionFlag` tinyint(1) NOT NULL DEFAULT '1',
  `tblSectionMinCap` int(11) DEFAULT '5',
  `tblSection_tblFacultyId` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsection`
--

INSERT INTO `tblsection` (`tblSectionId`, `tblSectionName`, `tblSectionMaxCap`, `tblSection_tblLevelId`, `tblSection_tblSchedId`, `tblSectionFlag`, `tblSectionMinCap`, `tblSection_tblFacultyId`) VALUES
(1, 'LOVE', 10, 2, NULL, 1, 5, NULL),
(2, 'HOPE', 10, 2, NULL, 1, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `tblStudentId` int(11) NOT NULL,
  `tblStudentFname` varchar(50) NOT NULL,
  `tblStudentLname` varchar(50) NOT NULL,
  `tblStudentMname` varchar(50) DEFAULT NULL,
  `tblStudent_tblSectionId` int(11) DEFAULT NULL,
  `tblStudent_tblPrevSchoolId` int(11) DEFAULT NULL,
  `tblStudentFlag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`tblStudentId`, `tblStudentFname`, `tblStudentLname`, `tblStudentMname`, `tblStudent_tblSectionId`, `tblStudent_tblPrevSchoolId`, `tblStudentFlag`) VALUES
(12345, 'Camiile', 'Galang', 'Sumampong', NULL, NULL, 1),
(23456, 'Gwyneth', 'Albania', 'Albania', NULL, NULL, 1),
(34567, 'Diana', 'Comia', 'Comia', NULL, NULL, 1),
(45678, 'Christian', 'Grey', 'Trevylan', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentinfo`
--

CREATE TABLE `tblstudentinfo` (
  `tblStudInfoId` int(11) NOT NULL,
  `tblStudInfoBday` date DEFAULT NULL,
  `tblStudInfoBplace` varchar(225) DEFAULT NULL,
  `tblStudInfoGender` char(1) DEFAULT NULL,
  `tblStudInfoAddress` varchar(225) DEFAULT NULL,
  `tblStudInfo_tblStudentId` int(11) DEFAULT NULL,
  `tblStudInfoFlag` tinyint(4) DEFAULT '1',
  `tblStudInfoSiblingNo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudentinfo`
--

INSERT INTO `tblstudentinfo` (`tblStudInfoId`, `tblStudInfoBday`, `tblStudInfoBplace`, `tblStudInfoGender`, `tblStudInfoAddress`, `tblStudInfo_tblStudentId`, `tblStudInfoFlag`, `tblStudInfoSiblingNo`) VALUES
(1, '1998-03-18', 'Valenzuela', 'F', 'Valenzuela Citydfs', 12345, 1, 2),
(2, '1983-06-18', 'Detroitoo', 'M', 'South', 45678, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentlanguage`
--

CREATE TABLE `tblstudentlanguage` (
  `tblStudLangId` int(11) NOT NULL,
  `tblStudLang_tblStudentId` int(11) DEFAULT NULL,
  `tblStudLangName` varchar(50) DEFAULT NULL,
  `tblStudLangFlag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblstudhealth`
--

CREATE TABLE `tblstudhealth` (
  `tblStudHealthId` int(11) NOT NULL,
  `tblStudHealthAllergies` varchar(225) DEFAULT NULL,
  `tblStudHealthIllness` varchar(225) DEFAULT NULL,
  `tblStudHealthMedication` varchar(225) DEFAULT NULL,
  `tblStudHealthBloodType` varchar(3) DEFAULT NULL,
  `tblStudHealthHospitalized` char(1) DEFAULT NULL,
  `tblStudHealthReason` varchar(225) DEFAULT NULL,
  `tblStudHealthDoctor` varchar(50) DEFAULT NULL,
  `tblStudHealthHospital` varchar(100) DEFAULT NULL,
  `tblStudHealthHospitalNo` varchar(11) DEFAULT NULL,
  `tblStudHealthHospitalAdd` varchar(225) DEFAULT NULL,
  `tblStudHealthFlag` int(11) DEFAULT '1',
  `tblStudHealth_tblStudentId` int(11) DEFAULT NULL,
  `tblStudHealthEmergency` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudhealth`
--

INSERT INTO `tblstudhealth` (`tblStudHealthId`, `tblStudHealthAllergies`, `tblStudHealthIllness`, `tblStudHealthMedication`, `tblStudHealthBloodType`, `tblStudHealthHospitalized`, `tblStudHealthReason`, `tblStudHealthDoctor`, `tblStudHealthHospital`, `tblStudHealthHospitalNo`, `tblStudHealthHospitalAdd`, `tblStudHealthFlag`, `tblStudHealth_tblStudentId`, `tblStudHealthEmergency`) VALUES
(1, 'Peanuts', 'Awesomenesssdasd', 'Biogesicsdas', 'AB', 'Y', 'Too Awesomesd', 'Dr. Stinsonsda', 'Stinson General Hospitalsad', '00001', 'East Sidesdas', 1, 12345, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudsiblings`
--

CREATE TABLE `tblstudsiblings` (
  `tblStudSibId` int(11) NOT NULL,
  `tblStudSibFname` varchar(50) DEFAULT NULL,
  `tblStudSibLname` varchar(50) DEFAULT NULL,
  `tblStudSibMname` varchar(50) DEFAULT NULL,
  `tblStudSibAge` varchar(2) DEFAULT NULL,
  `tblStudSib_tblStudId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudsiblings`
--

INSERT INTO `tblstudsiblings` (`tblStudSibId`, `tblStudSibFname`, `tblStudSibLname`, `tblStudSibMname`, `tblStudSibAge`, `tblStudSib_tblStudId`) VALUES
(1, 'Janelle', 'Galang', 'Sumampong', '17', 12345),
(2, 'Clarisse', 'Galang', 'Sumampong', '16', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `tblSubjectId` varchar(8) NOT NULL,
  `tblSubjectDesc` varchar(100) DEFAULT NULL,
  `tblSubjectFlag` tinyint(1) NOT NULL DEFAULT '1',
  `tblSubjectActive` varchar(10) DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`tblSubjectId`, `tblSubjectDesc`, `tblSubjectFlag`, `tblSubjectActive`) VALUES
('ENGL1', 'ENGLISH 1', 1, 'ACTIVE'),
('ENGL2', 'ENGLISH 2', 1, 'ACTIVE'),
('FILI1', 'FILIPINO 1', 1, 'ACTIVE'),
('MATH1', 'MATHEMATICS 1', 1, 'ACTIVE'),
('MATH2', 'MATHEMATICS 2', 1, 'ACTIVE'),
('SCIE1', 'SCIENCE 1', 1, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `tblUserId` int(11) NOT NULL,
  `tblUserName` varchar(50) NOT NULL,
  `tblUserPassword` varchar(20) NOT NULL,
  `tblUser_tblRoleId` int(11) DEFAULT NULL,
  `tblUserFlag` tinyint(1) NOT NULL DEFAULT '1',
  `tblUser_tblParentId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`tblUserId`, `tblUserName`, `tblUserPassword`, `tblUser_tblRoleId`, `tblUserFlag`, `tblUser_tblParentId`) VALUES
(1, 'Nicodi Angelo', '', 2, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcurriculum`
--
ALTER TABLE `tblcurriculum`
  ADD PRIMARY KEY (`tblCurriculumId`);

--
-- Indexes for table `tblcurriculumdetail`
--
ALTER TABLE `tblcurriculumdetail`
  ADD PRIMARY KEY (`tblCurriculumDetailId`),
  ADD KEY `fk_tblCurriculumDetail_tblDivisionId` (`tblCurriculumDetail_tblDivisionId`),
  ADD KEY `fk_tblCurriculumDetail_tblLevelId` (`tblCurriculumDetail_tblLevelId`),
  ADD KEY `fk_tblCurriculumDetail_tblSubjectId` (`tblCurriculumDetail_tblSubjectId`),
  ADD KEY `fk_tblCurriculumDetail_tblCurriculumId` (`tblCurriculumDetail_tblCurriculumId`);

--
-- Indexes for table `tbldivision`
--
ALTER TABLE `tbldivision`
  ADD PRIMARY KEY (`tblDivisionId`);

--
-- Indexes for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  ADD PRIMARY KEY (`tblFacultyId`),
  ADD KEY `fk_tblFaculty_tblUserId` (`tblFaculty_tblUserId`),
  ADD KEY `tblFaculty_tblFacultyPositionId` (`tblFaculty_tblFacultyPositionId`);

--
-- Indexes for table `tblfacultyposition`
--
ALTER TABLE `tblfacultyposition`
  ADD PRIMARY KEY (`tblFacultyPosId`);

--
-- Indexes for table `tblfee`
--
ALTER TABLE `tblfee`
  ADD PRIMARY KEY (`tblFeeId`);

--
-- Indexes for table `tblfeeamount`
--
ALTER TABLE `tblfeeamount`
  ADD PRIMARY KEY (`tblFeeAmountId`),
  ADD KEY `fk_tblFeeAmount_tblFeeId` (`tblFeeAmount_tblFeeId`),
  ADD KEY `fk_tblFeeAmount_tblLevelId` (`tblFeeAmount_tblLevelId`);

--
-- Indexes for table `tblfeedetail`
--
ALTER TABLE `tblfeedetail`
  ADD PRIMARY KEY (`tblFeeDetailId`),
  ADD KEY `fk_tblFeeDetail_tblFee` (`tblFeeDetail_tblFee`),
  ADD KEY `fk_tblFeeDetail_tblLevelId` (`tblFeeDetail_tblLevelId`);

--
-- Indexes for table `tblgradecomponent`
--
ALTER TABLE `tblgradecomponent`
  ADD PRIMARY KEY (`tblgradeId`);

--
-- Indexes for table `tbllevel`
--
ALTER TABLE `tbllevel`
  ADD PRIMARY KEY (`tblLevelId`),
  ADD KEY `fk_tblLevel_tblDivisionId` (`tblLevel_tblDivisionId`);

--
-- Indexes for table `tblnumberclass`
--
ALTER TABLE `tblnumberclass`
  ADD PRIMARY KEY (`tblNumClassid`),
  ADD KEY `fk_numclass_sy` (`tblNumClass_tblSy`);

--
-- Indexes for table `tblparent`
--
ALTER TABLE `tblparent`
  ADD PRIMARY KEY (`tblParentId`),
  ADD KEY `fk_tblParent_tblStudentId` (`tblParent_tblStudentId`);

--
-- Indexes for table `tblpreviousschool`
--
ALTER TABLE `tblpreviousschool`
  ADD PRIMARY KEY (`tblPrevSchoolId`);

--
-- Indexes for table `tblrequirement`
--
ALTER TABLE `tblrequirement`
  ADD PRIMARY KEY (`tblReqId`),
  ADD KEY `fk_tblReq_tblStudentId` (`tblReq_tblStudentId`);

--
-- Indexes for table `tblrole`
--
ALTER TABLE `tblrole`
  ADD PRIMARY KEY (`tblRoleId`);

--
-- Indexes for table `tblsched`
--
ALTER TABLE `tblsched`
  ADD PRIMARY KEY (`tblSchedId`),
  ADD KEY `fk_tblSched_tblSubjectId` (`tblSched_tblSubjectId`),
  ADD KEY `fk_tblSched_tblSectionId` (`tblSched_tblSectionId`);

--
-- Indexes for table `tblscheme`
--
ALTER TABLE `tblscheme`
  ADD PRIMARY KEY (`tblSchemeId`),
  ADD KEY `fk_tblScheme_tblFeeId` (`tblScheme_tblFeeId`);

--
-- Indexes for table `tblschemedetail`
--
ALTER TABLE `tblschemedetail`
  ADD PRIMARY KEY (`tblSchemeDetailId`),
  ADD KEY `fk_tblSchemeDetail_tblLevel` (`tblSchemeDetail_tblLevel`),
  ADD KEY `fk_tblSchemeDetail_tblScheme` (`tblSchemeDetail_tblScheme`);

--
-- Indexes for table `tblschoolyear`
--
ALTER TABLE `tblschoolyear`
  ADD PRIMARY KEY (`tblSchoolYrId`),
  ADD KEY `fk_tblSchoolYr_tblCurriculum` (`tblSchoolYr_tblCurriculum`);

--
-- Indexes for table `tblsection`
--
ALTER TABLE `tblsection`
  ADD PRIMARY KEY (`tblSectionId`),
  ADD KEY `fk_tblSection_tblLevelId` (`tblSection_tblLevelId`),
  ADD KEY `tblSection_tblFacultyId` (`tblSection_tblFacultyId`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`tblStudentId`),
  ADD KEY `fk_tblStudent_tblSectionId` (`tblStudent_tblSectionId`),
  ADD KEY `fk_tblStudent_tblPrevSchoolId` (`tblStudent_tblPrevSchoolId`);

--
-- Indexes for table `tblstudentinfo`
--
ALTER TABLE `tblstudentinfo`
  ADD PRIMARY KEY (`tblStudInfoId`),
  ADD KEY `fk_tblStudInfo_tblStudentId` (`tblStudInfo_tblStudentId`);

--
-- Indexes for table `tblstudentlanguage`
--
ALTER TABLE `tblstudentlanguage`
  ADD PRIMARY KEY (`tblStudLangId`),
  ADD KEY `fk_tblStudLang_tblStudentId` (`tblStudLang_tblStudentId`);

--
-- Indexes for table `tblstudhealth`
--
ALTER TABLE `tblstudhealth`
  ADD PRIMARY KEY (`tblStudHealthId`),
  ADD KEY `fk_tblStudHealth_tblStudentId` (`tblStudHealth_tblStudentId`);

--
-- Indexes for table `tblstudsiblings`
--
ALTER TABLE `tblstudsiblings`
  ADD PRIMARY KEY (`tblStudSibId`),
  ADD KEY `fk_tblStudSib_tblStudId` (`tblStudSib_tblStudId`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`tblSubjectId`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`tblUserId`),
  ADD KEY `fk_tblUser_tblRoleId` (`tblUser_tblRoleId`),
  ADD KEY `fk_tblUser_tblParentId` (`tblUser_tblParentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcurriculumdetail`
--
ALTER TABLE `tblcurriculumdetail`
  MODIFY `tblCurriculumDetailId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbldivision`
--
ALTER TABLE `tbldivision`
  MODIFY `tblDivisionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblfacultyposition`
--
ALTER TABLE `tblfacultyposition`
  MODIFY `tblFacultyPosId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblfee`
--
ALTER TABLE `tblfee`
  MODIFY `tblFeeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblfeeamount`
--
ALTER TABLE `tblfeeamount`
  MODIFY `tblFeeAmountId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblgradecomponent`
--
ALTER TABLE `tblgradecomponent`
  MODIFY `tblgradeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbllevel`
--
ALTER TABLE `tbllevel`
  MODIFY `tblLevelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblnumberclass`
--
ALTER TABLE `tblnumberclass`
  MODIFY `tblNumClassid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `tblparent`
--
ALTER TABLE `tblparent`
  MODIFY `tblParentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblpreviousschool`
--
ALTER TABLE `tblpreviousschool`
  MODIFY `tblPrevSchoolId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblrequirement`
--
ALTER TABLE `tblrequirement`
  MODIFY `tblReqId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblrole`
--
ALTER TABLE `tblrole`
  MODIFY `tblRoleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblsched`
--
ALTER TABLE `tblsched`
  MODIFY `tblSchedId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;
--
-- AUTO_INCREMENT for table `tblsection`
--
ALTER TABLE `tblsection`
  MODIFY `tblSectionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `tblStudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45679;
--
-- AUTO_INCREMENT for table `tblstudentinfo`
--
ALTER TABLE `tblstudentinfo`
  MODIFY `tblStudInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblstudentlanguage`
--
ALTER TABLE `tblstudentlanguage`
  MODIFY `tblStudLangId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblstudhealth`
--
ALTER TABLE `tblstudhealth`
  MODIFY `tblStudHealthId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblstudsiblings`
--
ALTER TABLE `tblstudsiblings`
  MODIFY `tblStudSibId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `tblUserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcurriculumdetail`
--
ALTER TABLE `tblcurriculumdetail`
  ADD CONSTRAINT `fk_tblCurriculumDetail_tblCurriculumId` FOREIGN KEY (`tblCurriculumDetail_tblCurriculumId`) REFERENCES `tblcurriculum` (`tblCurriculumId`),
  ADD CONSTRAINT `fk_tblCurriculumDetail_tblDivisionId` FOREIGN KEY (`tblCurriculumDetail_tblDivisionId`) REFERENCES `tbldivision` (`tblDivisionId`),
  ADD CONSTRAINT `fk_tblCurriculumDetail_tblLevelId` FOREIGN KEY (`tblCurriculumDetail_tblLevelId`) REFERENCES `tbllevel` (`tblLevelId`),
  ADD CONSTRAINT `fk_tblCurriculumDetail_tblSubjectId` FOREIGN KEY (`tblCurriculumDetail_tblSubjectId`) REFERENCES `tblsubject` (`tblSubjectId`);

--
-- Constraints for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  ADD CONSTRAINT `tblfaculty_ibfk_1` FOREIGN KEY (`tblFaculty_tblFacultyPositionId`) REFERENCES `tblfacultyposition` (`tblFacultyPosId`),
  ADD CONSTRAINT `fk_tblFaculty_tblUserId` FOREIGN KEY (`tblFaculty_tblUserId`) REFERENCES `tbluser` (`tblUserId`);

--
-- Constraints for table `tblfeeamount`
--
ALTER TABLE `tblfeeamount`
  ADD CONSTRAINT `fk_tblFeeAmount_tblFeeId` FOREIGN KEY (`tblFeeAmount_tblFeeId`) REFERENCES `tblfee` (`tblFeeId`),
  ADD CONSTRAINT `fk_tblFeeAmount_tblLevelId` FOREIGN KEY (`tblFeeAmount_tblLevelId`) REFERENCES `tbllevel` (`tblLevelId`);

--
-- Constraints for table `tblfeedetail`
--
ALTER TABLE `tblfeedetail`
  ADD CONSTRAINT `fk_tblFeeDetail_tblFee` FOREIGN KEY (`tblFeeDetail_tblFee`) REFERENCES `tblfee` (`tblFeeId`),
  ADD CONSTRAINT `fk_tblFeeDetail_tblLevelId` FOREIGN KEY (`tblFeeDetail_tblLevelId`) REFERENCES `tbllevel` (`tblLevelId`);

--
-- Constraints for table `tbllevel`
--
ALTER TABLE `tbllevel`
  ADD CONSTRAINT `fk_tblLevel_tblDivisionId` FOREIGN KEY (`tblLevel_tblDivisionId`) REFERENCES `tbldivision` (`tblDivisionId`);

--
-- Constraints for table `tblnumberclass`
--
ALTER TABLE `tblnumberclass`
  ADD CONSTRAINT `fk_numclass_sy` FOREIGN KEY (`tblNumClass_tblSy`) REFERENCES `tblschoolyear` (`tblSchoolYrId`);

--
-- Constraints for table `tblparent`
--
ALTER TABLE `tblparent`
  ADD CONSTRAINT `fk_tblParent_tblStudentId` FOREIGN KEY (`tblParent_tblStudentId`) REFERENCES `tblstudent` (`tblStudentId`);

--
-- Constraints for table `tblrequirement`
--
ALTER TABLE `tblrequirement`
  ADD CONSTRAINT `fk_tblReq_tblStudentId` FOREIGN KEY (`tblReq_tblStudentId`) REFERENCES `tblstudent` (`tblStudentId`);

--
-- Constraints for table `tblsched`
--
ALTER TABLE `tblsched`
  ADD CONSTRAINT `fk_tblSched_tblSectionId` FOREIGN KEY (`tblSched_tblSectionId`) REFERENCES `tblsection` (`tblSectionId`),
  ADD CONSTRAINT `fk_tblSched_tblSubjectId` FOREIGN KEY (`tblSched_tblSubjectId`) REFERENCES `tblsubject` (`tblSubjectId`);

--
-- Constraints for table `tblscheme`
--
ALTER TABLE `tblscheme`
  ADD CONSTRAINT `fk_tblScheme_tblFeeId` FOREIGN KEY (`tblScheme_tblFeeId`) REFERENCES `tblfee` (`tblFeeId`);

--
-- Constraints for table `tblschemedetail`
--
ALTER TABLE `tblschemedetail`
  ADD CONSTRAINT `fk_tblSchemeDetail_tblLevel` FOREIGN KEY (`tblSchemeDetail_tblLevel`) REFERENCES `tbllevel` (`tblLevelId`),
  ADD CONSTRAINT `fk_tblSchemeDetail_tblScheme` FOREIGN KEY (`tblSchemeDetail_tblScheme`) REFERENCES `tblscheme` (`tblSchemeId`);

--
-- Constraints for table `tblschoolyear`
--
ALTER TABLE `tblschoolyear`
  ADD CONSTRAINT `fk_tblSchoolYr_tblCurriculum` FOREIGN KEY (`tblSchoolYr_tblCurriculum`) REFERENCES `tblcurriculum` (`tblCurriculumId`);

--
-- Constraints for table `tblsection`
--
ALTER TABLE `tblsection`
  ADD CONSTRAINT `fk_tblSection_tblFacultyId` FOREIGN KEY (`tblSection_tblFacultyId`) REFERENCES `tblfaculty` (`tblFacultyId`),
  ADD CONSTRAINT `fk_tblSection_tblLevelId` FOREIGN KEY (`tblSection_tblLevelId`) REFERENCES `tbllevel` (`tblLevelId`);

--
-- Constraints for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD CONSTRAINT `fk_tblStudent_tblPrevSchoolId` FOREIGN KEY (`tblStudent_tblPrevSchoolId`) REFERENCES `tblpreviousschool` (`tblPrevSchoolId`),
  ADD CONSTRAINT `fk_tblStudent_tblSectionId` FOREIGN KEY (`tblStudent_tblSectionId`) REFERENCES `tblsection` (`tblSectionId`);

--
-- Constraints for table `tblstudentinfo`
--
ALTER TABLE `tblstudentinfo`
  ADD CONSTRAINT `fk_tblStudInfo_tblStudentId` FOREIGN KEY (`tblStudInfo_tblStudentId`) REFERENCES `tblstudent` (`tblStudentId`);

--
-- Constraints for table `tblstudentlanguage`
--
ALTER TABLE `tblstudentlanguage`
  ADD CONSTRAINT `fk_tblStudLang_tblStudentId` FOREIGN KEY (`tblStudLang_tblStudentId`) REFERENCES `tblstudent` (`tblStudentId`);

--
-- Constraints for table `tblstudhealth`
--
ALTER TABLE `tblstudhealth`
  ADD CONSTRAINT `fk_tblStudHealth_tblStudentId` FOREIGN KEY (`tblStudHealth_tblStudentId`) REFERENCES `tblstudent` (`tblStudentId`);

--
-- Constraints for table `tblstudsiblings`
--
ALTER TABLE `tblstudsiblings`
  ADD CONSTRAINT `fk_tblStudSib_tblStudId` FOREIGN KEY (`tblStudSib_tblStudId`) REFERENCES `tblstudent` (`tblStudentId`);

--
-- Constraints for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD CONSTRAINT `fk_tblUser_tblParentId` FOREIGN KEY (`tblUser_tblParentId`) REFERENCES `tblparent` (`tblParentId`),
  ADD CONSTRAINT `fk_tblUser_tblRoleId` FOREIGN KEY (`tblUser_tblRoleId`) REFERENCES `tblrole` (`tblRoleId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
