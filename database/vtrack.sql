-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2022 at 09:50 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vtrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fdbk_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` text NOT NULL,
  `cntno` text NOT NULL,
  `subj` text NOT NULL,
  `sdate` text NOT NULL,
  `reply` text NOT NULL,
  `rdate` text NOT NULL,
  PRIMARY KEY (`fdbk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fdbk_id`, `Log_Id`, `name`, `cntno`, `subj`, `sdate`, `reply`, `rdate`) VALUES
(1, 'LOG839292330', 'Mahendran M', '8590519172', 'It is easy to handle.', '2022-03-06', 'Thank you.', '2022-03-06'),
(2, 'LOG1059916395', 'Platinumfuels', '9400706739', 'It is easy to maintain.', '2022-03-06', 'Thank you!!!', '2022-03-06'),
(3, 'LOG695437005', 'Autoparts', '9947908934', 'Convenient to use', '2022-03-06', 'Thank you....', '2022-03-06'),
(4, 'LOG66699300', 'Anusha', '9988776655', 'good', '2022-03-06', 'Thanks.', '2022-03-06'),
(5, 'LOG66699300', 'Anusha', '9988776655', 'hi', '2022-03-06', '', ''),
(6, 'LOG839292330', 'Mahendran M', '8590519172', 'hi', '2022-03-06', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feulrest`
--

CREATE TABLE IF NOT EXISTS `feulrest` (
  `wrkid` int(11) NOT NULL AUTO_INCREMENT,
  `CLog_Id` varchar(200) NOT NULL,
  `WLog_Id` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `wname` varchar(200) NOT NULL,
  `ccntno` varchar(200) NOT NULL,
  `wcntno` varchar(200) NOT NULL,
  `prblm` text NOT NULL,
  `date` date NOT NULL,
  `stats` varchar(200) NOT NULL,
  `tme` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`wrkid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feulrest`
--

INSERT INTO `feulrest` (`wrkid`, `CLog_Id`, `WLog_Id`, `cname`, `wname`, `ccntno`, `wcntno`, `prblm`, `date`, `stats`, `tme`, `photo`) VALUES
(1, 'LOG66699300', 'LOG1059916395', 'Anusha', 'Platinumfuels', '9988776655', '9400706739', 'Run out of petrol', '2022-03-06', 'Accept', '18:00', 'IMG-20210222-WA0012.jpg'),
(2, 'LOG66699300', 'LOG1059916395', 'Anusha', 'Platinumfuels', '9988776655', '9400706739', 'aaa', '2022-03-22', 'Pending', '11:11', 'IMG-20210222-WA0006.jpg'),
(3, 'LOG66699300', 'LOG1059916395', 'Anusha', 'Platinumfuels', '9988776655', '9400706739', 's', '2022-03-22', 'Pending', '11:11', 'IMG-20210222-WA0007.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fltrack`
--

CREATE TABLE IF NOT EXISTS `fltrack` (
  `ftrk_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `kmeter` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `amt` double NOT NULL,
  `desp` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ftrk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE IF NOT EXISTS `fuel` (
  `fuel_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `cntno1` text NOT NULL,
  `cntno2` text NOT NULL,
  `location` text NOT NULL,
  `desp` text NOT NULL,
  `date` date NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`fuel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`fuel_id`, `Log_Id`, `name`, `cntno1`, `cntno2`, `location`, `desp`, `date`, `photo`) VALUES
(1, 'LOG1059916395', 'Platinumfuels', '9400706739', '9400706739', 'Melamuri', 'This fuel station provide petrol,Diesel,LPG,CNG.', '2022-03-06', 'IMG-20210222-WA0009.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE IF NOT EXISTS `insurance` (
  `insr_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `ndate` date NOT NULL,
  `fname` varchar(200) NOT NULL,
  `amt` double NOT NULL,
  `desp` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`insr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`insr_id`, `Log_Id`, `aadharno`, `vno`, `vname`, `vtype`, `ndate`, `fname`, `amt`, `desp`, `date`) VALUES
(1, 'LOG66699300', '8118 1461 8405', 'KL50B3406', 'Maestro', 'Two Wheeler', '2022-03-10', 'LIC', 7660, 'no description', '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `pollution`
--

CREATE TABLE IF NOT EXISTS `pollution` (
  `pls_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `ndate` date NOT NULL,
  `fname` varchar(200) NOT NULL,
  `amt` double NOT NULL,
  `desp` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`pls_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pollution`
--

INSERT INTO `pollution` (`pls_id`, `Log_Id`, `aadharno`, `vno`, `vname`, `vtype`, `ndate`, `fname`, `amt`, `desp`, `date`) VALUES
(1, 'LOG66699300', '8118 1461 8405', 'KL50B3406', 'Maestro', 'Two Wheeler', '2022-03-27', 'Das mechanics', 1000, 'no description', '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `prd_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` text NOT NULL,
  `qty` double NOT NULL,
  `price` double NOT NULL,
  `tax` double NOT NULL,
  `location` text NOT NULL,
  `photo` text NOT NULL,
  `desp` text NOT NULL,
  PRIMARY KEY (`prd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prd_id`, `Log_Id`, `name`, `qty`, `price`, `tax`, `location`, `photo`, `desp`) VALUES
(1, 'LOG695437005', 'Side Mirror', 999, 299, 10, 'Koothuparambu', 'IMG-20210222-WA0013.jpg', 'Rear view mirror,Dual mirror,Blind spot mirror,Driver side,Passenger side\r\nPlacement:Exterior,Right,Left,Interior\r\nOperation:Manual\r\nConvex mirror surface\r\nBest suited for cars ,heavy vehicles,bikes'),
(2, 'LOG695437005', 'CHAIN', 25, 250, 10, 'MELAMURAI', 'IMG-20210222-WA0010.jpg', 'SSS');

-- --------------------------------------------------------

--
-- Table structure for table `productorder`
--

CREATE TABLE IF NOT EXISTS `productorder` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `BLog_Id` text,
  `SLog_Id` text,
  `cname` text,
  `ccontact_no` text,
  `clocation` text,
  `pname` text,
  `qty` text,
  `price` double DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `photo` text,
  `tot` double DEFAULT NULL,
  `stat` text,
  PRIMARY KEY (`ord_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `productorder`
--

INSERT INTO `productorder` (`ord_id`, `BLog_Id`, `SLog_Id`, `cname`, `ccontact_no`, `clocation`, `pname`, `qty`, `price`, `dat`, `photo`, `tot`, `stat`) VALUES
(1, 'LOG66699300', 'LOG695437005', 'Anusha', '9988776655', 'Kulakkattukurussi', 'Side Mirror', '1', 299, '2022-03-06', 'IMG-20210222-WA0013.jpg', 299, 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `taxtest`
--

CREATE TABLE IF NOT EXISTS `taxtest` (
  `txtst_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `ndate` date NOT NULL,
  `fname` varchar(200) NOT NULL,
  `txtst` varchar(200) NOT NULL,
  `amt` double NOT NULL,
  `desp` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`txtst_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `taxtest`
--

INSERT INTO `taxtest` (`txtst_id`, `Log_Id`, `aadharno`, `vno`, `vname`, `vtype`, `ndate`, `fname`, `txtst`, `amt`, `desp`, `date`) VALUES
(1, 'LOG66699300', '8118 1461 8405', 'KL50B3406', 'Maestro', 'Two Wheeler', '2022-03-31', 'Malappuram', 'tax', 5000, 'no description', '2022-03-06'),
(2, 'LOG66699300', '8118 1461 8405', 'KL50B3406', 'Maestro', 'Two Wheeler', '2022-07-21', 'Palakkad', 'test', 2000, 'no description', '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE IF NOT EXISTS `track` (
  `trkid` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` varchar(200) NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vhno` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `bdaye` date NOT NULL,
  `amt` double NOT NULL,
  `date` date NOT NULL,
  `st` varchar(200) NOT NULL,
  PRIMARY KEY (`trkid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`trkid`, `Log_Id`, `aadharno`, `vname`, `vhno`, `model`, `bdaye`, `amt`, `date`, `st`) VALUES
(1, 'LOG66699300', '8118 1461 8405', 'Maestro', 'KL50B3406', 'Maestro125', '2007-07-07', 80000, '2022-03-06', ''),
(2, 'LOG66699300', '8118 1461 8405', 'Maestro', 'KL50B3406', 'Maestro125', '2007-07-07', 7660, '2022-03-06', 'Insurance'),
(3, 'LOG66699300', '8118 1461 8405', 'Maestro', 'KL50B3406', 'Maestro125', '2007-07-07', 1000, '2022-03-06', 'Pollution'),
(4, 'LOG66699300', '8118 1461 8405', 'Maestro', 'KL50B3406', 'Maestro125', '2007-07-07', 5000, '2022-03-06', 'tax'),
(5, 'LOG66699300', '8118 1461 8405', 'Maestro', 'KL50B3406', 'Maestro125', '2007-07-07', 2000, '2022-03-06', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE IF NOT EXISTS `tracking` (
  `vtrack_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` text NOT NULL,
  `vehicle_no` text NOT NULL,
  `vehicle_type` text NOT NULL,
  `subject` text NOT NULL,
  `amount` double NOT NULL,
  `next_date` date NOT NULL,
  `vdescription` text NOT NULL,
  `vdate` date NOT NULL,
  `klmt` text NOT NULL,
  PRIMARY KEY (`vtrack_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` text NOT NULL,
  `contact_no` text NOT NULL,
  `email` text NOT NULL,
  `location` text NOT NULL,
  `password` text NOT NULL,
  `utype` text NOT NULL,
  `stat` text NOT NULL,
  `liceno` text,
  `adharno` text,
  `photo` text,
  `date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Log_Id`, `name`, `contact_no`, `email`, `location`, `password`, `utype`, `stat`, `liceno`, `adharno`, `photo`, `date`) VALUES
(4, 'LOG81876615123', 'Administrator', '9979756467', 'vtrack@gmail.com', 'Mercy', 'vtrack', 'Admin', 'Active', '', '', 'IMG-20210222-WA0010.jpg', '2021-12-11'),
(10, 'LOG839292330', 'Mahendran M', '8590519172', 'mahendramech@gmail.com', 'parali', 'Mahendran9172', 'Workshop', 'Active', '12345678', NULL, NULL, '2022-03-06'),
(11, 'LOG1059916395', 'Platinumfuels', '9400706739', 'platinumfuels@gmail.com', 'Melamuri', 'Platinum6739', 'Fuel', 'Active', '01234567', NULL, 'IMG-20210222-WA0012.jpg', '2022-03-06'),
(12, 'LOG695437005', 'Autoparts', '9947908934', 'Autoparts@gmail.com', 'Munnar', 'Autoparts8934', 'Spare_Parts', 'Active', '1123456', NULL, 'IMG-20210222-WA0009.jpg', '2022-03-06'),
(13, 'LOG66699300', 'Anusha', '9988776655', 'anuammu@gmail.com', 'Kulakkattukurussi', 'Anuammu27', 'User', 'Active', '4567890', '8118 1461 8405', 'IMG-20210222-WA0007.jpg', '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehi_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `oname` text NOT NULL,
  `ocnto` text NOT NULL,
  `vname` text NOT NULL,
  `vno` text NOT NULL,
  `brnd` varchar(200) NOT NULL,
  `vmodel` text NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `vcolor` varchar(200) NOT NULL,
  `vengno` text NOT NULL,
  `vbdate` text NOT NULL,
  `vtdate` text NOT NULL,
  `amt` double NOT NULL,
  `photo` text NOT NULL,
  `vdescrpt` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`vehi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehi_id`, `Log_Id`, `aadharno`, `oname`, `ocnto`, `vname`, `vno`, `brnd`, `vmodel`, `vtype`, `vcolor`, `vengno`, `vbdate`, `vtdate`, `amt`, `photo`, `vdescrpt`, `date`) VALUES
(1, 'LOG66699300', '8118 1461 8405', 'Anusha', '9988776655', 'Maestro', 'KL50B3406', 'HONDA', 'Maestro125', 'Two Wheeler', 'Black', '123', '2007-07-07', '2020-06-03', 80000, 'IMG-20210222-WA0012.jpg', 'Fuel economy/Mileage:65Km/l\r\nEngine capacity:110.9cc\r\n', '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `vservice`
--

CREATE TABLE IF NOT EXISTS `vservice` (
  `ftrk_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  PRIMARY KEY (`ftrk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE IF NOT EXISTS `workshop` (
  `wrk_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `cntno` text NOT NULL,
  `wtype` text NOT NULL,
  `location` text NOT NULL,
  `srvce` text NOT NULL,
  `date` date NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`wrk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`wrk_id`, `Log_Id`, `name`, `cntno`, `wtype`, `location`, `srvce`, `date`, `photo`) VALUES
(1, 'LOG839292330', 'Mahendramech', '8590519172', 'Motorcycle Workshop', 'Parali,Palakkad.', 'Maintaining,Repairing and Diagnosing all motorcycle systems to include the engine,breaks,suspension,lights,indication and fuel', '2022-03-06', 'IMG-20210222-WA0011.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `workshoprest`
--

CREATE TABLE IF NOT EXISTS `workshoprest` (
  `wrkid` int(11) NOT NULL AUTO_INCREMENT,
  `CLog_Id` varchar(200) NOT NULL,
  `WLog_Id` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `wname` varchar(200) NOT NULL,
  `ccntno` varchar(200) NOT NULL,
  `wcntno` varchar(200) NOT NULL,
  `prblm` text NOT NULL,
  `date` date NOT NULL,
  `stats` varchar(200) NOT NULL,
  `tme` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`wrkid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `workshoprest`
--

INSERT INTO `workshoprest` (`wrkid`, `CLog_Id`, `WLog_Id`, `cname`, `wname`, `ccntno`, `wcntno`, `prblm`, `date`, `stats`, `tme`, `photo`) VALUES
(1, 'LOG66699300', 'LOG839292330', 'Anusha', 'Mahendramech', '9988776655', '8590519172', 'Breakdown', '2022-03-06', 'Accept', '10:00', 'IMG-20210222-WA0011.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wtrack`
--

CREATE TABLE IF NOT EXISTS `wtrack` (
  `wtrk_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `vno` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `kmeter` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `amt` double NOT NULL,
  `desp` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`wtrk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
