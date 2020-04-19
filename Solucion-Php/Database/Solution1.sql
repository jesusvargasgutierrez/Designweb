-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2020 at 05:13 PM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Solucion1`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Cli_Consultar`()
    NO SQL
select * from Op_Customer$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Cli_ins`(IN `Equivalence` VARCHAR(200), IN `Names` VARCHAR(200), IN `FirstName` VARCHAR(200), IN `SecondName` VARCHAR(200), IN `FullName` VARCHAR(200), IN `DateBird` DATE, IN `idGender` INT, IN `idMaritalStatus` INT)
    NO SQL
INSERT INTO `Op_Customer`(`Equivalence`, `Names`, `FirstName`, `SecondName`, `FullName`, `DateBird`, `idGender`, `idMaritalStatus`) VALUES (Equivalence,Names,FirstName,SecondName,FullName,DateBird,idGender,idMaritalStatus)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Op_Customer`
--

CREATE TABLE IF NOT EXISTS `Op_Customer` (
  `idCustomer` int(11) NOT NULL AUTO_INCREMENT,
  `Equivalence` varchar(200) NOT NULL,
  `Names` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `SecondName` varchar(200) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `DateBird` date NOT NULL,
  `idGender` int(11) NOT NULL,
  `idMaritalStatus` int(11) NOT NULL,
  PRIMARY KEY (`idCustomer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `Op_Options`
--

CREATE TABLE IF NOT EXISTS `Op_Options` (
  `idOption` int(11) NOT NULL AUTO_INCREMENT,
  `Equivalence` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `idParentOption` int(11) NOT NULL,
  `idOptionChild` int(11) NOT NULL,
  `idOptionMain` int(11) NOT NULL,
  `idModule` int(11) NOT NULL,
  `idState` int(11) NOT NULL,
  PRIMARY KEY (`idOption`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
