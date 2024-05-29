-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 08:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayush`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `testid` varchar(50) NOT NULL,
  `cans` varchar(100) NOT NULL,
  `userid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`testid`, `cans`, `userid`) VALUES
('t10', 'D', 'shravan'),
('t10', 'C', 'shravan'),
('t10', 'D', 'shravan'),
('t10', 'B', 'rohit'),
('t1', 'B', 'manju'),
('t1', 'B', 'manju'),
('t10', 'B', 'bmb'),
('t101', 'A', 'manju'),
('t01', 'C', 'manju'),
('test01', 'A', 'manju'),
('test01', 'A', 'manju'),
('test02', 'A', 'manju');

-- --------------------------------------------------------

--
-- Table structure for table `blob`
--

CREATE TABLE `blob` (
  `id` int(110) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `businessinfo`
--

CREATE TABLE `businessinfo` (
  `firstname` varchar(20) NOT NULL,
  `seccondname` varchar(201) NOT NULL,
  `phonenumber` varchar(13) NOT NULL,
  `email` varchar(15) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `btype` varchar(20) NOT NULL,
  `about_business` varchar(1000) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `nob` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `businessinfo`
--

INSERT INTO `businessinfo` (`firstname`, `seccondname`, `phonenumber`, `email`, `longitude`, `latitude`, `btype`, `about_business`, `userID`, `nob`, `address`) VALUES
('meghana', 'megha', '7090225253', 'babu@gmail.com', '77.06794769999999', '12.5696885', 'MEDICAL STORE', 'medical store', 'megha', 'dream buzz', 'Mandya, Karnataka, India'),
('Hemanth', 'Kumar', '9845077585', 'pintu@gmail.com', '76.620028', '12.320803', 'LAB', 'Open 24/7', 'pintu', 'Pintu Diagnostics', 'VVMoholla'),
('pradee', 'pradeep', '9900124563', 'pradee@gmail.co', '75.7138884', '15.3172775', 'LAB', '12 hours working', 'pradee', 'medicial shop', 'Mysore, Karnataka, India'),
('rahul', 'm p', '9002856954', 'rahul@gmail.com', '76.609178', '12.323266', 'HOSPITAL', 'we provide 24/7 servise', 'rahul', 'aishwarya hospital', 'aishwarya hospital mysore'),
('rohith', 'ganesh', '8197930070', 'rohi@gmail.com', '76.620028', '12.320803', 'BLOOD BANK', 'we have all type of blood 24/7', 'rohith', 'SIRI bloodbank', 'siri blood bank hunsur road mysore'),
('sachin', 'sachin sachin', '9900856329', 'sachin@gmail.co', '76.644352', '12.2454016', 'MEDICAL STORE', 'All type of medicine available', 'sachin', 'medical shop', 'Kuvempu Nagara, Mysuru, Karnataka, India');

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE `companyinfo` (
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_type` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `companyinfo`
--

INSERT INTO `companyinfo` (`first_name`, `second_name`, `phone`, `user_id`, `company_name`, `company_type`, `address`, `position`) VALUES
('SACHIN', 'SIMHA', '9170902253', 'sachin', 'DREAMBUZZ', 'A+', 'Kuvempu Nagar, Stage 2, BTM Layout, Bengaluru, Karnataka, India', 'FEMALE');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(26, 'rohit', 'rohit@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-06-26 06:46:15'),
(27, 'suresh', 'suri@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-07-24 08:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `doctorprofile`
--

CREATE TABLE `doctorprofile` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `clinicname` varchar(100) NOT NULL,
  `phonenumber` varchar(13) NOT NULL,
  `doctorid` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `workexperience` varchar(20) NOT NULL,
  `tfrom` varchar(20) NOT NULL,
  `tto` varchar(20) NOT NULL,
  `specilisation` varchar(20) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctorprofile`
--

INSERT INTO `doctorprofile` (`id`, `firstname`, `lastname`, `clinicname`, `phonenumber`, `doctorid`, `address`, `workexperience`, `tfrom`, `tto`, `specilisation`, `city`) VALUES
(17, 'Rohit', 'rohit G', 'dreambuzz', '9900456987', 'Rohit', 'Gokulam 3rd Stage, Gokulam, Mysuru, Karnataka, India', '2', '05:30', '08:30', 'SPEECH/HEARING', 'vijaynagar');

-- --------------------------------------------------------

--
-- Table structure for table `emmergencynoti`
--

CREATE TABLE `emmergencynoti` (
  `id` int(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `messege` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emmergencynoti`
--

INSERT INTO `emmergencynoti` (`id`, `userid`, `latitude`, `longitude`, `messege`, `phone`) VALUES
(12, 'manju', '15.3172775', '75.7138884', 'i need some information', '9900124563');

-- --------------------------------------------------------

--
-- Table structure for table `entrepreneur`
--

CREATE TABLE `entrepreneur` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entrepreneur`
--

INSERT INTO `entrepreneur` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(18, 'sachin', 'sachin123@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-06-10 13:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `send_arequest`
--

CREATE TABLE `send_arequest` (
  `sender_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_arequest`
--

INSERT INTO `send_arequest` (`sender_id`, `user_id`) VALUES
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `send_mess`
--

CREATE TABLE `send_mess` (
  `sender_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `mess` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_mess`
--

INSERT INTO `send_mess` (`sender_id`, `user_id`, `mess`) VALUES
('rahul', 'ravikumar', 'we need emergency service '),
('rahul', 'ravikumar', 'i need some information'),
('sachin', 'manju', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `send_request`
--

CREATE TABLE `send_request` (
  `sender_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_request`
--

INSERT INTO `send_request` (`sender_id`, `user_id`) VALUES
('', ''),
('8884644589', 'madusudan'),
('', ''),
('', ''),
('8884644589', 'madusudan'),
('', ''),
('', '8884644589'),
('', 'b'),
('', ''),
('madusudan', 'madusudan'),
('arpitha', 'vishal'),
('madusudan', 'suvarna'),
('arpitha', 'roja'),
('arpitha', 'roja'),
('gokul', 'roja'),
('mahadeva', 'shravan'),
('kushal', 'rohit12');

-- --------------------------------------------------------

--
-- Table structure for table `send_request1`
--

CREATE TABLE `send_request1` (
  `sender_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `timeslot` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_request1`
--

INSERT INTO `send_request1` (`sender_id`, `user_id`, `timeslot`) VALUES
('madusudan', 'roja', NULL),
('madusudan', 'roja', NULL),
('madusudan', 'roja', NULL),
('arpitha', 'roja', NULL),
('sandya', 'roja', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', NULL),
('madusudan', 'manjunath', ''),
('madusudan', 'manjunath', '16:01'),
('madusudan', 'ravikumar', '14:00'),
('madusudan', 'ravikumar', '12:00'),
('madusudan', 'suvarna', '12:00'),
('mahadeva', 'shravan', '14:00'),
('kushal', 'rohit12', '01:12'),
('Rohit', 'manju', '06:45'),
('rohit', 'manju', '17:30'),
('rohit', 'manju', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`phonenumber`, `email`, `password`) VALUES
('9884644589', 'mpresh@gmail.com', '13456'),
('8884644589', 'mpsuresh@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tenderinfo`
--

CREATE TABLE `tenderinfo` (
  `tender_name` varchar(50) NOT NULL,
  `tender_number` varchar(50) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `bid_closing` varchar(50) NOT NULL,
  `tender_issuer` varchar(50) NOT NULL,
  `dept_id` varchar(50) NOT NULL,
  `tender_type` varchar(50) NOT NULL,
  `valuesrs` varchar(50) NOT NULL,
  `tender_details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tenderinfo`
--

INSERT INTO `tenderinfo` (`tender_name`, `tender_number`, `dept_name`, `bid_closing`, `tender_issuer`, `dept_id`, `tender_type`, `valuesrs`, `tender_details`) VALUES
('hihash', 'ohffow', 'oisjchos', '2018-11-16', 'lijhodci', 'sachin', 'ORIGINAL-GT', '35431546', 'uchacn huachasc hacuis scj hiuscxSOC U OSUAYCOASC  UYSCUA S64 68731S '),
('road construction', '123', 'pwd', '2018-11-24', 'sachin', 'praveen', 'ORIGINAL-BC', '25452054', 'Mysore Road Satellite Bus Station, Telecom Colony, Srinagar, Banashankari, Bengaluru, Karnataka, India'),
('building construction', '8654', 'bcm', '2018-11-29', 'kumaraswamy', 'praveen', 'ORIGINAL-GENERAL', '25460165', 'B-35, Adichunchanagiri Road, Jayanagar, Kuvempu Nagara, Mysuru, Karnataka, India');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(50) NOT NULL,
  `testid` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `ob1` varchar(50) NOT NULL,
  `ob2` varchar(100) NOT NULL,
  `ob3` varchar(200) NOT NULL,
  `ob4` varchar(100) NOT NULL,
  `cans` varchar(500) NOT NULL,
  `about` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `testid`, `subject`, `img`, `ob1`, `ob2`, `ob3`, `ob4`, `cans`, `about`) VALUES
(6, 'test02', 'BASIC', 'A.jpg', 'a', 'b', 'c', 'd', 'a', 'Choose one'),
(4, 't01', 'PHYSICS', 'C.jpg', 'a', 'b', 'c', 'd', 'c', 'Choose Right one');

-- --------------------------------------------------------

--
-- Table structure for table `treatmentinfo`
--

CREATE TABLE `treatmentinfo` (
  `pid` varchar(50) NOT NULL,
  `doctorid` varchar(20) NOT NULL,
  `pstatus` varchar(50) NOT NULL,
  `treatmentdetails` varchar(500) NOT NULL,
  `m1` varchar(100) NOT NULL,
  `m3` varchar(100) NOT NULL,
  `nextdate` varchar(50) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `tdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `treatmentinfo`
--

INSERT INTO `treatmentinfo` (`pid`, `doctorid`, `pstatus`, `treatmentdetails`, `m1`, `m3`, `nextdate`, `filename`, `tdate`) VALUES
('ravikumar', 'ravikumar', 'NORMAL', 'suffering from fever', 'Chlorhexidine_Gluconate_0.2%_Mouth_Wash', 'j', '10/05/2018', 'Screenshot (7).png', '2018-05-09 16:02:59.000000'),
('ravikumar', '', 'NORMAL', 'suffering from fever', 'Chlorhexidine_Gluconate_0.2%_Mouth_Wash', 'dolo 650', '10/05/2018', 'Screenshot (9).png', '2018-05-09 16:06:02.000000'),
('ravikumar', 'madusudan', 'NORMAL', 'he suffering from fever \r\nantibody injection injected patient need to take rest.', 'Chlorhexidine_Gluconate_0.2%_Mouth_Wash', 'dolo 650', '10/05/2018', 'Screenshot (6).png', '2018-05-09 18:02:42'),
('suvarna', 'madusudan', 'NORMAL', 'user suffering from fever antibody injected', 'Aceclofenac_+_Paracetamol(100mg+325mg)', 'dolo 650', '', '', '2018-05-10 06:33:50'),
('shravan', 'mahadeva', 'CRITICAL', 'asass', 'Aceclofenac_+_Paracetamol(100mg+325mg)', 'assa', '25/02/2019', 'jewelry_PNG6765.png', '2019-02-22 16:12:24'),
('rohit12', 'kushal', 'NORMAL', 'good', 'Chlorhexidine_Gluconate_0.2%_Mouth_Wash', 'dolo650', '27/11/2019', '0.jfif', '2019-11-20 16:51:22'),
('manju', 'Rohit', 'NORMAL', 'nothing', 'Diclofenac_Sodium_50_mg_Tab', 'dart', '20/06/2020', 'D.jpg', '2020-06-10 13:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `firstname` varchar(50) NOT NULL,
  `seccondname` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`firstname`, `seccondname`, `phonenumber`, `email`, `longitude`, `latitude`, `address`, `gender`, `bloodgroup`) VALUES
('manju', 'manjunath', '9900125334', 'manju', '75.7138884', '15.3172775', 'Mandya, Karnataka, India', 'MALE', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(54, 'manju', 'manju@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-06-26 06:39:10'),
(55, 'rahul', 'rahul@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-07-24 07:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `suject` varchar(50) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `about` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `suject`, `url`, `about`) VALUES
(9, 'BASIC', 'https://www.youtube.com/embed/IhQt_fxGOcw', 'Watch this video'),
(7, 'BASIC', 'https://www.youtube.com/embed/CCLHQe8fETs', 'Watch this video');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businessinfo`
--
ALTER TABLE `businessinfo`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorprofile`
--
ALTER TABLE `doctorprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emmergencynoti`
--
ALTER TABLE `emmergencynoti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrepreneur`
--
ALTER TABLE `entrepreneur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`,`phonenumber`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`phonenumber`,`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `doctorprofile`
--
ALTER TABLE `doctorprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `emmergencynoti`
--
ALTER TABLE `emmergencynoti`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `entrepreneur`
--
ALTER TABLE `entrepreneur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
