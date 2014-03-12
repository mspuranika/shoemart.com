-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2014 at 06:53 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--
CREATE DATABASE IF NOT EXISTS `admin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `admin`;

-- --------------------------------------------------------

--
-- Table structure for table `admintab`
--

CREATE TABLE IF NOT EXISTS `admintab` (
  `name` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phoneno` int(12) DEFAULT NULL,
  `product` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintab`
--

INSERT INTO `admintab` (`name`, `address`, `phoneno`, `product`) VALUES
('a', 'aa', 12, 'sandals1'),
('test', 'test', 123, 'boot1'),
('checking', 'if this works', 1234, 'sandals4'),
('Shantharam M Puranik', 'bangalore', 123, 'canvas3'),
('naveen hegde', 'nallk kamba', 12345, 'canvas4'),
('sharda', 'bangalore', 1234, 'canvas2'),
('this is working', 'kengeri satellite town', 12345, 'loafer5'),
('Sahanakka', 'kunigal', 123456, '	'),
('Sahanakka', 'kunigal', 123, 'canvas3'),
('dude', 'duduedue', 352, 'loafer1'),
('ashwini akka', 'bangalore', 1234, 'canvas4');
--
-- Database: `boots`
--
CREATE DATABASE IF NOT EXISTS `boots` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `boots`;

-- --------------------------------------------------------

--
-- Table structure for table `boot`
--

CREATE TABLE IF NOT EXISTS `boot` (
  `name` varchar(10) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `discount` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boot`
--

INSERT INTO `boot` (`name`, `price`, `gender`, `discount`) VALUES
('boot1', 1450, 'male', 'no'),
('boot2', 750, 'male', 'no'),
('boot3', 2450, 'female', 'no'),
('boot4', 1990, 'female', 'yes'),
('boot5', 1470, 'female', 'no'),
('boot6', 1450, 'male', 'yes'),
('boot7', 3500, 'male', 'no'),
('boot8', 999, 'female', 'no'),
('boot9', 899, 'male', 'yes');
--
-- Database: `canvas`
--
CREATE DATABASE IF NOT EXISTS `canvas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `canvas`;

-- --------------------------------------------------------

--
-- Table structure for table `canvasshoe`
--

CREATE TABLE IF NOT EXISTS `canvasshoe` (
  `name` varchar(10) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `discount` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canvasshoe`
--

INSERT INTO `canvasshoe` (`name`, `price`, `gender`, `discount`) VALUES
('canvas1', 450, 'male', 'no'),
('canvas2', 750, 'female', 'yes'),
('canvas3', 1450, 'male', 'yes'),
('canvas4', 1750, 'male', 'no'),
('canvas5', 470, 'male', 'yes'),
('canvas6', 2450, 'male', 'yes'),
('canvas7', 3500, 'male', 'no'),
('canvas8', 2200, 'female', 'yes'),
('canvas9', 312, 'female', 'no');
--
-- Database: `cart`
--
CREATE DATABASE IF NOT EXISTS `cart` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cart`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `loafers`
--
CREATE DATABASE IF NOT EXISTS `loafers` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loafers`;

-- --------------------------------------------------------

--
-- Table structure for table `loafer`
--

CREATE TABLE IF NOT EXISTS `loafer` (
  `name` varchar(10) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `discount` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loafer`
--

INSERT INTO `loafer` (`name`, `price`, `gender`, `discount`) VALUES
('loafer1', 499, 'male', 'no'),
('loafer2', 390, 'male', 'no'),
('loafer3', 650, 'male', 'yes'),
('loafer4', 499, 'male', 'no'),
('loafer5', 599, 'male', 'no'),
('loafer6', 1000, 'male', 'yes'),
('loafer7', 350, 'male', 'no'),
('loafer8', 599, 'male', 'yes'),
('loafer9', 2000, 'male', 'yes');
--
-- Database: `office`
--
CREATE DATABASE IF NOT EXISTS `office` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `office`;

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE IF NOT EXISTS `office` (
  `name` varchar(10) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `discount` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`name`, `price`, `gender`, `discount`) VALUES
('office1', 799, 'male', 'no'),
('office2', 999, 'male', 'no'),
('office3', 1200, 'male', 'yes'),
('office4', 2400, 'male', 'yes'),
('office5', 599, 'female', 'no'),
('office6', 990, 'female', 'yes'),
('office7', 350, 'female', 'no'),
('office8', 999, 'female', 'yes'),
('office9', 1250, 'male', 'no');
--
-- Database: `sandals`
--
CREATE DATABASE IF NOT EXISTS `sandals` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sandals`;

-- --------------------------------------------------------

--
-- Table structure for table `sandal`
--

CREATE TABLE IF NOT EXISTS `sandal` (
  `name` varchar(10) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `discount` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sandal`
--

INSERT INTO `sandal` (`name`, `price`, `gender`, `discount`) VALUES
('sandals1', 990, 'male', 'no'),
('sandals2', 450, 'male', 'no'),
('sandals3', 999, 'male', 'yes'),
('sandals4', 1999, 'male', 'yes'),
('sandals5', 200, 'female', 'no'),
('sandals6', 250, 'female', 'yes'),
('sandals7', 350, 'female', 'no'),
('sandals8', 999, 'female', 'yes'),
('sandals9', 1450, 'male', 'no');
--
-- Database: `sports`
--
CREATE DATABASE IF NOT EXISTS `sports` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sports`;

-- --------------------------------------------------------

--
-- Table structure for table `sportsshoe`
--

CREATE TABLE IF NOT EXISTS `sportsshoe` (
  `name` varchar(10) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `discount` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sportsshoe`
--

INSERT INTO `sportsshoe` (`name`, `price`, `gender`, `discount`) VALUES
('sports1', 2990, 'male', 'yes'),
('sports2', 1750, 'male', 'no'),
('sports3', 750, 'male', 'no'),
('sports4', 2750, 'female', 'yes'),
('sports5', 670, 'female', 'no'),
('sports6', 2450, 'male', 'no'),
('sports7', 350, 'female', 'no'),
('sports8', 4999, 'male', 'yes'),
('sports9', 1000, 'male', 'yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
