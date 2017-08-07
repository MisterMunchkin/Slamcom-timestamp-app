-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 07:36 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slamcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timeIn` datetime NOT NULL,
  `timeOut` datetime NOT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timeIn`, `timeOut`, `userID`) VALUES
('2017-08-03 16:03:46', '2017-08-03 16:03:49', 17),
('2017-08-04 17:06:34', '2017-08-04 17:06:39', 18),
('2017-08-04 17:06:51', '2017-08-04 17:06:56', 18),
('2017-08-04 20:39:56', '2017-08-04 20:45:33', 18),
('2017-08-04 21:03:24', '2017-08-04 21:32:06', 18);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `emailadd` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstname`, `lastname`, `emailadd`, `password`) VALUES
(15, 'Jesus', 'Ramos', 'jesusramos@gmail.com', '$2y$10$ue21do0pW4EGgejQCdVEreG9Q7t.LIOtNXFeAk32zDdRuln8bbosa'),
(16, 'Voltaire', 'De Guia', 'slamcom.vjay@gmail.com', '$2y$10$LSuq9JmGKsI/WiyLbS7.qO.yeyjqv09yCo78YiF5ULzNRm0XWGsXi'),
(17, 'Robin', 'Tubungbanua', 'dalmiet@gmail.com', '$2y$10$NSW9xcUV1P4lI..4IwCiXOFwJKwjkkFJ2YJ49EFxpTUikKgq77Cby'),
(18, 'Neil', 'Llenes', 'neilllenes@gmail.com', '$2y$10$U.kGm04u5eyxo6KV4IXP8OvHpD0IBUrTd7lsOUTwHpb8wuLm6kxPW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD KEY `FK_UserTimetable` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `FK_UserTimetable` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
