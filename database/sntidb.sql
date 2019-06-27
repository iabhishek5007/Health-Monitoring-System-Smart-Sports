-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 09:29 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sntidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'snti'),
('samrat', '9431951416');

-- --------------------------------------------------------

--
-- Table structure for table `cadet_reg_details`
--

CREATE TABLE `cadet_reg_details` (
  `PlayerID` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobno` int(13) NOT NULL,
  `caddr` varchar(255) NOT NULL,
  `paddr` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `achievements` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `bgroup` varchar(10) NOT NULL,
  `idfmark` varchar(255) NOT NULL,
  `weight` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `allergy` varchar(10) NOT NULL,
  `disability` varchar(10) NOT NULL,
  `cpic` varbinary(350) NOT NULL,
  `csign` varbinary(350) NOT NULL,
  `idtype` varchar(25) NOT NULL,
  `cid` varbinary(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cadet_reg_details`
--

INSERT INTO `cadet_reg_details` (`PlayerID`, `name`, `fname`, `mname`, `dob`, `gender`, `email`, `mobno`, `caddr`, `paddr`, `qualification`, `occupation`, `achievements`, `interest`, `bgroup`, `idfmark`, `weight`, `height`, `allergy`, `disability`, `cpic`, `csign`, `idtype`, `cid`) VALUES
(1, 'fadfadfa', 'jfkldsklf', 'jdsklajfklsjdf', '2018-12-01', 'MALE', 'nis8302@gmail.com', 2147483647, '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', 'metric', 'stud', 'fsdfjklsjdlfl', 'sfjlskdfkds', 'AB+', 'fdskhfldsf', 56, 175, 'NO', 'NO', 0x7069632075706c6f61642e6a7067, 0x7069632075706c6f61642e6a7067, 'AADHAR CARD', 0x4161646861722e6a7067),
(2, '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(3, 'hkjhkh', 'hkjhkjhk', 'gkjgkjgh', '2005-02-23', 'MALE', 'nis8302@gmail.com', 2147483647, '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', 'metric', 'stud', 'hkhkjhkjhkh', 'hjgfjhjghgj', 'AB+', 'hjgjgj', 56, 175, 'NO', 'NO', 0x7069632075706c6f61642e6a7067, 0x7069632075706c6f61642e6a7067, 'AADHAR CARD', 0x7069632075706c6f61642e6a7067),
(4, 'hkjhkh', 'hkjhkjhk', 'gkjgkjgh', '2005-02-23', 'MALE', 'nis8302@gmail.com', 2147483647, '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', 'metric', 'stud', 'hkhkjhkjhkh', 'hjgfjhjghgj', 'AB+', 'hjgjgj', 56, 175, 'NO', 'NO', 0x7069632075706c6f61642e6a7067, 0x7069632075706c6f61642e6a7067, 'AADHAR CARD', 0x7069632075706c6f61642e6a7067),
(5, 'hkjhkh', 'hkjhkjhk', 'gkjgkjgh', '2005-02-23', 'MALE', 'nis8302@gmail.com', 2147483647, '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', 'metric', 'stud', 'hkhkjhkjhkh', 'hjgfjhjghgj', 'AB+', 'hjgjgj', 56, 175, 'NO', 'NO', 0x7069632075706c6f61642e6a7067, 0x7069632075706c6f61642e6a7067, 'AADHAR CARD', 0x7069632075706c6f61642e6a7067),
(6, 'hkjhkh', 'hkjhkjhk', 'gkjgkjgh', '2005-02-23', 'MALE', 'nis8302@gmail.com', 2147483647, '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', 'metric', 'stud', 'hkhkjhkjhkh', 'hjgfjhjghgj', 'AB+', 'hjgjgj', 56, 175, 'NO', 'NO', 0x7069632075706c6f61642e6a7067, 0x7069632075706c6f61642e6a7067, 'AADHAR CARD', 0x7069632075706c6f61642e6a7067),
(7, 'hkjhkh', 'hkjhkjhk', 'gkjgkjgh', '2005-02-23', 'MALE', 'nis8302@gmail.com', 2147483647, '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', 'metric', 'stud', 'hkhkjhkjhkh', 'hjgfjhjghgj', 'AB+', 'hjgjgj', 56, 175, 'NO', 'NO', 0x7069632075706c6f61642e6a7067, 0x7069632075706c6f61642e6a7067, 'AADHAR CARD', 0x7069632075706c6f61642e6a7067),
(8, 'hkjhkh', 'hkjhkjhk', 'gkjgkjgh', '2005-02-23', 'MALE', 'nis8302@gmail.com', 2147483647, '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', 'metric', 'stud', 'hkhkjhkjhkh', 'hjgfjhjghgj', 'AB+', 'hjgjgj', 56, 175, 'NO', 'NO', 0x7069632075706c6f61642e6a7067, 0x7069632075706c6f61642e6a7067, 'AADHAR CARD', 0x7069632075706c6f61642e6a7067),
(9, 'elfjlewkj', 'jklejrkl', 'jrkejfkl', '2017-04-30', 'MALE', 'nis8302@gmail.com', 2147483647, '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', 'Metriculation', 'Student', 'gdrgdfgd', 'fgdsg', 'AB+', 'gresgr', 56, 175, 'NO', 'NO', 0x636f6c6c6567652e6a7067, 0x4161646861722e6a7067, 'PAN-CARD', 0x636f6c6c6567652e6a7067),
(11, '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(12, '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(13, '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(14, '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(15, '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(16, 'FGJLDFJGL', 'GIODPOGIDP', 'KG;DOG', '2018-07-25', 'FEMALE', 'nis8302@gmail.com', 2147483647, '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', 'Metriculation', 'Student', 'THTRHYTRHYTRY', 'JGILDJFLGJD', 'AB+', 'GJDKFLGJD', 45, 143, 'NO', 'NO', 0x4e657720446f6320323031382d30332d31332e6a7067, 0x4e657720446f6320323031382d30332d31332e6a7067, 'PAN-CARD', 0x4e657720446f6320323031382d30332d31332e6a7067),
(17, 'FGJLDFJGL', 'GIODPOGIDP', 'KG;DOG', '2018-07-25', 'FEMALE', 'nis8302@gmail.com', 2147483647, '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', 'Metriculation', 'Student', 'THTRHYTRHYTRY', 'JGILDJFLGJD', 'AB+', 'GJDKFLGJD', 45, 143, 'NO', 'NO', 0x4e657720446f6320323031382d30332d31332e6a7067, 0x4e657720446f6320323031382d30332d31332e6a7067, 'PAN-CARD', 0x4e657720446f6320323031382d30332d31332e6a7067),
(18, 'Samrat Nishant', 'hkfhsk', 'efhrklesfh', '2018-07-10', 'MALE', 'nis8302@gmail.com', 2147483647, '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', '90/92 Binodini Bhawan , Jheel Park Maidan\r\nTarulia 2nd Lane , New Town', 'Metriculation', 'Student', 'jrgljreljg', 'hefwkjehfh', 'AB+', 'gyjjh', 45, 143, 'NO', 'NO', 0x4e657720446f6320323031382d30332d31332e6a7067, 0x4e657720446f6320323031382d30332d31332e6a7067, 'AADHAR CARD', 0x4e657720446f6320323031382d30332d31332e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `poms`
--

CREATE TABLE `poms` (
  `PlayerID` varchar(8) NOT NULL,
  `Date` date NOT NULL,
  `Active` int(2) NOT NULL,
  `Happy` int(2) NOT NULL,
  `CDM` int(2) NOT NULL,
  `Composeed` int(2) NOT NULL,
  `Energetic` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poms`
--

INSERT INTO `poms` (`PlayerID`, `Date`, `Active`, `Happy`, `CDM`, `Composeed`, `Energetic`) VALUES
('1', '2018-06-24', 4, 4, 4, 4, 4),
('2', '2018-07-09', 4, 5, 5, 5, 5),
('3', '2018-07-09', 32, 3, 6, 2, 3),
('4', '2018-07-09', 4, 5, 5, 5, 5),
('3', '2018-07-09', 32, 3, 6, 2, 3),
('5', '2018-07-09', 1, 2, 3, 4, 5),
('4', '2018-07-09', 4, 5, 5, 5, 5),
('8', '2018-07-09', 4, 5, 5, 5, 5),
('90', '2018-07-09', 8, 8, 9, 8, 8),
('6', '2018-07-09', 6, 6, 6, 6, 6),
('9', '2018-07-09', 1, 3, 3, 5, 8),
('6', '2018-07-10', 3, 43, 4, 5, 5),
('55', '2018-11-24', 2, 3, 5, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `regform`
--

CREATE TABLE `regform` (
  `Name` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Weight` int(2) NOT NULL,
  `Height` int(5) NOT NULL,
  `FathersName` varchar(30) NOT NULL,
  `Mothers Name` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `CurrentAddress` varchar(30) NOT NULL,
  `PermanentAddress` varchar(30) NOT NULL,
  `Qualification` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `AreaOFInterest` varchar(20) NOT NULL,
  `Achievment` varchar(20) NOT NULL,
  `PreviousExperiences` varchar(30) NOT NULL,
  `IdentificationMark` varchar(20) NOT NULL,
  `Occupation` varchar(30) NOT NULL,
  `PlayerID` int(10) NOT NULL,
  `AnyDisability` varchar(20) NOT NULL,
  `Photo` varbinary(350) NOT NULL,
  `Signature` varbinary(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regform`
--

INSERT INTO `regform` (`Name`, `DOB`, `Weight`, `Height`, `FathersName`, `Mothers Name`, `Gender`, `BloodGroup`, `PhoneNumber`, `CurrentAddress`, `PermanentAddress`, `Qualification`, `Email`, `AreaOFInterest`, `Achievment`, `PreviousExperiences`, `IdentificationMark`, `Occupation`, `PlayerID`, `AnyDisability`, `Photo`, `Signature`) VALUES
('Samrat', '0000-00-00', 0, 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', 82, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Name` text NOT NULL,
  `UniqueID` int(9) NOT NULL,
  `EmailID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Name`, `UniqueID`, `EmailID`) VALUES
('Abhi', 3, 'abhi25@gmail.com'),
('hvvjvhk', 4, 'cghvm@gmail.com'),
('Abhi', 5, 'bittu@gmail.com'),
('Nirjoo', 6, 'anhsf@gmail.com'),
('pds', 7, 'pds32@gmail.com'),
('dfsgdgvdfg', 8, 'dbvfd@gmail.com'),
('mayank', 9, 'mayank@gmail.com'),
('abhi25121996@gmail.com', 10, 'abhi22@gmail.com'),
('mmmm', 11, 'mmmm@gmail.com'),
('Abhi', 12, 'aads@gmail.com'),
('Anhi', 13, 'sadkjsj@gmail.com'),
('ssfsfd', 14, 'hhjiiii@gmail.com'),
('hhhhh', 15, 'zzzzz@gmail.com'),
('yyyy', 16, 'yyy@gmail.com'),
('qqqq', 17, 'qqq@gmail.com'),
('aaaa', 18, 'aaaa@gmail.com'),
('bbbb', 19, 'abhi25121@gmail.com'),
('lllll', 20, 'llll@gmail.com'),
('acdvd', 21, 'nnnn@gmail.com'),
('acdvd', 22, 'nnnn@gmail.com'),
('Abhi', 23, 'bbbb@gmail.com'),
('mmmmmmm', 24, 'mm@gmail.com'),
('aaaaaaaa', 25, 'aaaaaaaa@gmail.com'),
('gggg', 26, 'gggg@gmail.com'),
('vvvvv', 27, 'vvvv@gmail.com'),
('llllllll', 28, 'abhsdfsdfi@gmail.com'),
('web', 29, 'webd@gmail.com'),
('webdd', 30, 'webddd@gmail.com'),
('fjkjgnfhnfgj', 31, 'fhtsgh@gmail.com'),
('esdrtfty', 32, 'gvvvhnbbnm@gmail.com'),
('sads', 33, 'dcvdvdsvdsv@gmail.com'),
('hhhhh', 34, '222@gmail.com'),
('werewrewf', 35, '222@gmail.com'),
('Abhi', 36, 'cdsvhfdskfgs@gmail.com'),
('Abhi', 37, 'safdsdsds@gmail.com'),
('asfsdfdsfds', 38, 'safdsdsds@gmail.com'),
('asfsdfdsfds', 39, 'safdsdsds@gmail.com'),
('asfsdfdsfds', 40, 'safdsdsds@gmail.com'),
('gccghhg', 41, 'ccg@gmail.com'),
('ghgchgmvj', 42, 'hvjvhjh@gmail.com'),
('Abhi', 43, 'dxhjghv@gmail.com'),
('Abhi', 44, 'dxhjghv@gmail.com'),
('Abhi', 45, 'dxhjghv@gmail.com'),
('hkuygkiu', 46, 'dxhjghv@gmail.com'),
('dfdgdgdg', 47, 'dgedg@gmail.com'),
('sfdsg', 48, 'dfsg@gmail.com'),
('fxsgh', 49, 'xsg@gmail.com'),
('dfxdfgf', 50, 'ccgf@gmail.com'),
('gcfgcfgh', 51, 'nbgvvhj@hgh'),
('sxfggchm', 52, 'gccghvj@ghjh'),
('sxfg', 53, 'gccghvj@g'),
('sxfg', 54, 'gccghvj@g'),
('sxfg', 55, 'gccghvj@g'),
('dgdfhdthdt', 56, 'dfhfgjt@gmail.com'),
('cxbfcvncvn', 57, 'cbcvngcv@dsgf'),
('Abhi', 58, 'cbcvngcv@dsgf'),
('Abhi', 59, 'cbcvngcv@dsgf'),
('kumar', 60, 'kumar21@dsgf'),
('dsfugesgyd', 61, 'shvdashj@gmail.com'),
('sssassss', 62, 'slsfss@gmail.com'),
('rdytrjt', 63, 'rdytruh@gmfsf'),
('jyo', 64, 'yo@vjgk'),
('Abhi', 65, 'abhi25121@gmail.com'),
('abhi25121996@gmail.com', 66, 'sadsfd@fhf'),
('dgfdh', 67, 'ghfdgfd@gmail.com'),
('cbfcb', 68, 'dgfdhb@gfhf'),
('Szdfxgc', 69, 'dfxcgv@gmail.com'),
('dvdfv', 70, 'vdg@fhgf'),
('asfds', 71, 'dgds@hdg'),
('ad', 72, 'abhi@gmail.com'),
('gg', 73, 'abhi25121996@gmail.com'),
('vbn', 74, 'abhi25121996@gmail.com'),
('cvb', 75, 'abhi25121996@gmail.com'),
('dsfe', 76, 'abhi25121@gmail.com'),
('dsfe', 77, 'abhi25121996@gmail.com'),
('dfgh', 78, 'bbbb@gmail.com'),
('ghj', 79, 'cvbn@hj'),
('aaa', 80, 'adfgh@gmail.com'),
('fgsdfsd', 81, 'abhi25121996@gmail.com'),
('Abhi', 82, 'abhi25121996@gmail.com'),
('Abhi', 83, 'abhi25121996@gmail.com'),
('Abhi', 84, 'abhi25121996@gmail.com'),
('aaa', 85, 'abhi@gmail.com'),
('cgh', 86, 'abhi@gmail.com'),
('haha', 87, 'haha@gmail.com'),
('abhi25121996', 88, 'abhi251219962@gmail.com'),
('Abhi', 89, 'adcsc@gmail.com'),
('asd', 90, 'abhi2512199622@gmail.com'),
('asd', 91, 'sdsf@ggd'),
('erwtfer', 92, 'deg@gmail.com'),
('dsfd', 93, 'dsfrdg@hjjsdes'),
('Abhishek Kumar', 94, 'abhi2512@gmail.com'),
('Ronaldo', 95, 'Ronaldo07@gmail.com'),
('Abhi', 96, 'dfggh@gmail.com'),
('Abhi', 97, 'dfggh1@gmail.com'),
('test', 98, 'test@gmail.com'),
('test1', 99, 'test1@gmail.com'),
('ddgdf', 100, ''),
('aaaajj', 101, ''),
('hj', 102, ''),
('cvbdfyghy', 103, ''),
('gyyug', 104, ''),
('jjk', 105, ''),
('yugiu', 106, ''),
('yugygu', 107, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cadet_reg_details`
--
ALTER TABLE `cadet_reg_details`
  ADD PRIMARY KEY (`PlayerID`);

--
-- Indexes for table `regform`
--
ALTER TABLE `regform`
  ADD PRIMARY KEY (`PlayerID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`UniqueID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadet_reg_details`
--
ALTER TABLE `cadet_reg_details`
  MODIFY `PlayerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `regform`
--
ALTER TABLE `regform`
  MODIFY `PlayerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `UniqueID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
