-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2021 at 02:45 AM
-- Server version: 10.4.17-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u940802667_db_pwdregister`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_delete_nadalumandram` (IN `nid` INT)  DELETE FROM tbl_mnadalumandram WHERE id = nid$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_delete_sattamandram` (IN `e_id` INT)  DELETE FROM tbl_msattamandram WHERE id = e_id$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_delete_taluk` (IN `id` INT)  DELETE FROM tbl_mtaluk WHERE id = id$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_insert_nadalumandram` (IN `nadalumandramcode` VARCHAR(5), IN `nadalumandramname` VARCHAR(255), IN `enadalumandramname` VARCHAR(255), IN `active` INT)  INSERT INTO tbl_mnadalumandram(nadalumandramcode, nadalumandramname, enadalumandramname, active) VALUES(nadalumandramcode,
nadalumandramname, enadalumandramname, active)$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_insert_sattamandram` (IN `sattamandramcode` VARCHAR(5), IN `sattamandramname` VARCHAR(255), IN `esattamandramname` VARCHAR(255), IN `active` INT)  INSERT INTO tbl_msattamandram(sattamandramcode, sattamandramname, esattamandramname, active) VALUES(sattamandramcode,
sattamandramname, esattamandramname, active)$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_insert_taluk` (IN `talukid` INT, IN `talukcode` VARCHAR(5), IN `talukname` VARCHAR(255), IN `etalukname` VARCHAR(255), IN `districtid` INT, IN `stateid` INT, IN `countryid` INT, IN `active` INT)  INSERT INTO tbl_mtaluk(talukid, talukcode, talukname, etalukname, districtid, stateid, countryid, active) VALUES(talukid, talukcode, talukname, etalukname, districtid, stateid, countryid, active)$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_readarow` (IN `tid` INT(11))  select *  from tbl_mtaluk where id = tid$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_readarow_nadalumandram` (IN `nid` INT(11))  select * from tbl_mnadalumandram where id = nid$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_readarow_sattamandram` (IN `sid` INT(11))  select * from tbl_msattamandram where id = sid$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_read_nadalumandram` ()  select * from tbl_mnadalumandram$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_read_sattamandram` ()  select * from tbl_msattamandram$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_read_taluk` ()  select t.*, d.districtcode, d.districtname, d.edistrictname  from tbl_mtaluk t left join tbl_mdistrict d on d.id=t.districtid$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_update_nadalumandram` (IN `nid` INT, IN `nadalumandramid` INT, IN `nadalumandramcode` VARCHAR(5), IN `nadalumandramname` VARCHAR(255), IN `enadalumandramname` VARCHAR(255), IN `active` INT)  update tbl_mnadalumandram set nadalumandramid = nadalumandramid, nadalumandramcode = nadalumandramcode, nadalumandramname =
nadalumandramname, enadalumandramname = enadalumandramname, active = active where id = nid$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_update_sattamandram` (IN `sid` INT, IN `sattamandramid` INT, IN `sattamandramcode` VARCHAR(5), IN `sattamandramname` VARCHAR(255), IN `esattamandramname` VARCHAR(255), IN `active` INT)  update tbl_msattamandram set sattamandramid = sattamandramid, sattamandramcode = sattamandramcode, sattamandramname =
sattamandramname, esattamandramname = esattamandramname, active = active where id = sid$$

CREATE DEFINER=`u940802667_pwdregister`@`127.0.0.1` PROCEDURE `usp_update_taluk` (IN `tid` INT, IN `talukid` INT, IN `talukcode` VARCHAR(5), IN `talukname` VARCHAR(255), IN `etalukname` VARCHAR(255), IN `districtid` INT, IN `stateid` INT, IN `countryid` INT, IN `active` INT)  update tbl_mtaluk set talukid = talukid, talukcode = talukcode, talukname = talukname, etalukname = etalukname, districtid = districtid, stateid = stateid, countryid = countryid, active = active where id = tid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `ucode` char(10) NOT NULL,
  `salutation` char(10) NOT NULL,
  `efirstname` char(50) NOT NULL,
  `elastname` char(50) NOT NULL,
  `tfirstname` varchar(50) NOT NULL,
  `tlastname` text NOT NULL,
  `dob` date DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `phone2` varchar(10) DEFAULT NULL,
  `profilePic` longblob NOT NULL,
  `profilePicpath` varchar(100) NOT NULL,
  `pdffile` varchar(50) NOT NULL,
  `gardiantype` varchar(15) DEFAULT NULL,
  `gardianname` char(50) NOT NULL,
  `egardianname` char(50) NOT NULL,
  `gardiancontact1` varchar(10) DEFAULT NULL,
  `gardiancontact2` varchar(10) DEFAULT NULL,
  `maritalstatus` int(11) DEFAULT NULL,
  `religion` int(11) DEFAULT NULL,
  `caste` int(11) DEFAULT NULL,
  `edu` int(11) DEFAULT NULL,
  `business` int(11) DEFAULT NULL,
  `tpstreet_addres` varchar(50) NOT NULL,
  `tpstreet_landmark` varchar(100) NOT NULL,
  `tpvartno` varchar(50) NOT NULL,
  `tpvillage` varchar(50) NOT NULL,
  `tppost` varchar(50) NOT NULL,
  `pertamiltaluk` int(11) DEFAULT NULL,
  `pertamildistrict` int(11) DEFAULT NULL,
  `pertamilstate` int(11) DEFAULT NULL,
  `pertamilzip` varchar(10) DEFAULT NULL,
  `epstreet_addres` varchar(50) NOT NULL,
  `epstreet_landmark` varchar(100) NOT NULL,
  `epvartno` varchar(50) NOT NULL,
  `epvillage` varchar(50) NOT NULL,
  `eppost` varchar(50) NOT NULL,
  `perengtaluk` int(11) DEFAULT NULL,
  `perengdistrict` int(11) DEFAULT NULL,
  `perengstate` int(11) DEFAULT NULL,
  `perengzip` varchar(10) DEFAULT NULL,
  `ttstreet_addres` varchar(50) NOT NULL,
  `ttstreet_landmark` varchar(100) NOT NULL,
  `ttvartno` varchar(50) NOT NULL,
  `ttvillage` varchar(50) NOT NULL,
  `ttpost` varchar(50) NOT NULL,
  `temptamiltaluk` int(11) DEFAULT NULL,
  `temptamildistrict` int(11) DEFAULT NULL,
  `temptamilstate` int(11) DEFAULT NULL,
  `temptamilzip` varchar(10) DEFAULT NULL,
  `etstreet_addres` varchar(50) NOT NULL,
  `etaddress_landmark` varchar(100) NOT NULL,
  `etvartno` varchar(50) NOT NULL,
  `etvillage` varchar(50) NOT NULL,
  `etpost` varchar(50) NOT NULL,
  `tempengtaluk` int(11) DEFAULT NULL,
  `tempengdistrict` int(11) DEFAULT NULL,
  `tempengstate` int(11) DEFAULT NULL,
  `tempengzip` varchar(10) DEFAULT NULL,
  `udidno` varchar(15) NOT NULL,
  `nalavariyano` varchar(20) NOT NULL,
  `familycard` varchar(15) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `voterid` varchar(10) NOT NULL,
  `empregno` varchar(10) NOT NULL,
  `empregdate` date NOT NULL,
  `sattamandram` int(11) DEFAULT NULL,
  `nadalumandram` int(11) DEFAULT NULL,
  `dftype` int(11) DEFAULT NULL,
  `dftypenew` varchar(30) NOT NULL,
  `dftype1` int(11) DEFAULT NULL,
  `dftype2` varchar(10) NOT NULL,
  `dfvehicleusage` int(11) DEFAULT NULL,
  `dfvehicleusage1` int(11) DEFAULT NULL,
  `dfsupportmatrialusing` int(11) DEFAULT NULL,
  `dfsupportmatrialusing1` int(11) DEFAULT NULL,
  `dfhappendby` int(11) DEFAULT NULL,
  `dfpercentage` int(11) DEFAULT NULL,
  `walkingwithoutsupportmaterial` int(11) DEFAULT NULL,
  `havingmembership` int(11) DEFAULT NULL,
  `membershipnumber` varchar(10) NOT NULL,
  `membershipdate` date NOT NULL,
  `membershipfeespaid` int(11) DEFAULT NULL,
  `membershipreceiptno` varchar(10) NOT NULL,
  `membershipreceiptdate` date NOT NULL,
  `helpfromtrust` varchar(100) NOT NULL,
  `otherhelpfromtrust` varchar(100) NOT NULL,
  `otherhelpfromtrusteng` varchar(100) NOT NULL,
  `ipaddress` varchar(100) DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `createddate` date NOT NULL,
  `modifieddate` date NOT NULL,
  `active` int(11) DEFAULT NULL,
  `hobbies` varchar(50) NOT NULL,
  `detdata` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `ucode`, `salutation`, `efirstname`, `elastname`, `tfirstname`, `tlastname`, `dob`, `age`, `email`, `gender`, `phone`, `phone2`, `profilePic`, `profilePicpath`, `pdffile`, `gardiantype`, `gardianname`, `egardianname`, `gardiancontact1`, `gardiancontact2`, `maritalstatus`, `religion`, `caste`, `edu`, `business`, `tpstreet_addres`, `tpstreet_landmark`, `tpvartno`, `tpvillage`, `tppost`, `pertamiltaluk`, `pertamildistrict`, `pertamilstate`, `pertamilzip`, `epstreet_addres`, `epstreet_landmark`, `epvartno`, `epvillage`, `eppost`, `perengtaluk`, `perengdistrict`, `perengstate`, `perengzip`, `ttstreet_addres`, `ttstreet_landmark`, `ttvartno`, `ttvillage`, `ttpost`, `temptamiltaluk`, `temptamildistrict`, `temptamilstate`, `temptamilzip`, `etstreet_addres`, `etaddress_landmark`, `etvartno`, `etvillage`, `etpost`, `tempengtaluk`, `tempengdistrict`, `tempengstate`, `tempengzip`, `udidno`, `nalavariyano`, `familycard`, `aadhar`, `voterid`, `empregno`, `empregdate`, `sattamandram`, `nadalumandram`, `dftype`, `dftypenew`, `dftype1`, `dftype2`, `dfvehicleusage`, `dfvehicleusage1`, `dfsupportmatrialusing`, `dfsupportmatrialusing1`, `dfhappendby`, `dfpercentage`, `walkingwithoutsupportmaterial`, `havingmembership`, `membershipnumber`, `membershipdate`, `membershipfeespaid`, `membershipreceiptno`, `membershipreceiptdate`, `helpfromtrust`, `otherhelpfromtrust`, `otherhelpfromtrusteng`, `ipaddress`, `createdby`, `modifiedby`, `createddate`, `modifieddate`, `active`, `hobbies`, `detdata`) VALUES
(1, 'ERD1', '', 'Anu', 'Priya', 'mD', 'gphpah', '2000-10-26', 20, 'csrdeepa@gmail.com', 'female', '7305360309', '', '', '432432890780.jpg', '', 'hname', 'mUz;', 'Arun', '9876543215', '', 1, 2, 3, 2, 2, 'fdsf', 'dsfds', 'fdsf', 'fsdf', 'csdfsd', 0, 0, 1, '636584', 'No.3 New Street', 'Near AVR Circle', '25', 'Suramangalam', 'Meyanuur', 0, 0, 1, '636004', 'fdsf', 'dsfds', 'fdsf', 'fsdf', 'csdfsd', 0, 0, 1, '0', 'No.3 New Street', 'Near AVR Circle', '25', 'Suramangalam', 'Meyanuur', 0, 0, 1, '636004', '565656565', '545454', '43434', '432432890780', '34343', '77777', '2013-05-26', 1, 1, 10, '', 1, '1', 3, 1, 3, 1, 2, 45, NULL, 1, '121212', '2015-10-28', 0, '3434', '2016-10-29', 'selfemp,eduhelp', 'sfds', 'fdsfdsf', '223.182.242.162', NULL, NULL, '2021-03-28', '0000-00-00', 1, 'chess,books,music', '[{\"faname\":\"nutjp\",\"fagender\":\"fafemale\",\"faage\":\"25\",\"farelationship\":\"famother\",\"fabusiness\":\"fdfsaff\"},{\"faname\":\"fz;zd;\",\"fagender\":\"famale\",\"faage\":\"30\",\"farelationship\":\"fafather\",\"fabusiness\":\"fafsa\"}]'),
(3, 'ERD3', '', 'sd', 'asd', 'as', 'das', '2011-10-30', 9, 'msrdeepa@gmail.com', 'male', '7305360309', '', '', '432483590780.jpg', '', 'fname', '', '', '9632587415', '', 0, 0, 0, 0, 0, 'fsdfsd', 'fsdfsd', '', '', '', 1, 1, 1, '54353', 'dsad', 'dsad', '', '', '', 1, 1, 1, '0', 'fsdfsd', 'fsdfsd', '', '', '', 1, 1, 1, '54353', 'dsad', 'dsad', '', '', '', 1, 1, 1, '0', '1212222', 'dasd', '333333', '432483590780', '', '', '0000-00-00', 2, 1, 21, '', 2, '1', 0, 0, 0, 0, 0, 45, 0, 1, '121212', '2016-11-28', 0, '', '0000-00-00', 'selfemp,eduhelp', 'dfg', 'dfgdf', '223.182.242.162', NULL, NULL, '2021-03-28', '0000-00-00', 1, 'music,cooking', '[{\"faname\":\"sad\",\"fagender\":\"fafemale\",\"faage\":\"34\",\"farelationship\":\"famother\",\"fabusiness\":\"asdas\"}]'),
(4, 'ERD4', '', 'Deepa', 'R', 'தீபா', 'ராமகிருஷ்ணன்', '2002-03-29', 19, 'msrdeepa@gmail.com', 'female', '7305360309', '', '', '432487907654.jpg', '', 'hname', 'அருண்', '', '9632587415', '', 1, 1, 5, 3, 1, '', '', '', '', '', 1, 1, 1, '0', 'dsad', 'dsad', '', '', '', 4, 1, 1, '0', '', '', '', '', '', 1, 1, 1, '0', 'dsad', 'dsad', '', '', '', 4, 1, 1, '0', '', '', '', '432487907654', '', '', '0000-00-00', 2, 1, 0, '', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', 0, '', '0000-00-00', 'selfemp', 'Fghhhj', 'Cfghh', '106.198.117.153', NULL, NULL, '2021-03-29', '0000-00-00', 1, 'books,music', '[]'),
(5, 'ERD5', '', 'Hemalatha', 'Test', 'deko', 'Test', '2021-04-03', 0, 'test@gmail.com', 'female', '9876543210', '9876543210', '', '', '', 'fname', 'grdgfd', 'Test', '5435567890', '4353456789', 2, 1, 5, 2, 3, 'Sbi Colony', 'vxvdxb', '241', 'dhfdf', 'dhdh', 0, 8, 1, '636004', 'Sbi Colony', 'Afavas', '241', 'dhdfh', 'dfhdf', 0, 8, 1, '636004', 'Sbi Colony', 'vxvdxb', '241', 'dhfdf', 'dhdh', 0, 8, 1, '636004', 'Sbi Colony', 'Afavas', '241', 'dhdfh', 'dfhdf', 0, 8, 1, '636004', 'dhfhdfh', 'dbhh', 'cbnfn', '987654321012', 'cvncv', 'ncvn', '2021-04-03', 1, 1, 7, '', 0, '0', 1, 2, 1, 1, 3, 0, NULL, 0, '', '0000-00-00', 0, '', '0000-00-00', 'freemarriage', 'afdaGsag', 'sfsafsgs', '223.182.244.94', NULL, NULL, '2021-04-04', '0000-00-00', 1, 'chess,books', '[{\"faname\":\"afsg\",\"fagender\":\"fafemale\",\"faage\":\"21\",\"farelationship\":\"famother\",\"fabusiness\":\"xbdx\"}]'),
(6, 'ERD6', '', 'sdg', 'dsg', 'sdgsd', 'gsdg', '2018-02-21', 3, 'msrdeepa@gmail.com', 'male', '7305360309', '', '', '987645344544.jpg', '', 'fname', '', '', '7896547569', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, 12, 1, '0', 'dsad', 'dsad', '', '', '', 0, 12, 1, '0', '', '', '', '', '', 0, 12, 1, '0', 'dsad', 'dsad', '', '', '', 0, 12, 1, '0', '454545', '', '', '987645344544', '', '', '0000-00-00', 0, 0, 0, '', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', 0, '', '0000-00-00', '', '', '', '223.182.244.94', NULL, NULL, '2021-04-04', '0000-00-00', 1, '', '[{\"faname\":\"fdf\",\"fagender\":\"fafemale\",\"faage\":\"34\",\"farelationship\":\"famother\",\"fabusiness\":\"vzv\"}]'),
(7, 'ERD7', '', 'dfsd', 'fdsf', 'dfsd', 'fdsf', '0000-00-00', 0, 'sdsdsa@gmail.com', '', '7896541236', '', '', '', '', 'fname', '', '', '9632587415', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, '0', 'fsdfsd', 'fsdfsd', '', '', '', 0, 0, 0, '0', '', '', '', '', '', 0, 0, 0, '0', '', '', '', '', '', 0, 0, 0, '0', '87', '', '', '432432568780', '', '', '0000-00-00', 0, 0, 0, '', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', 0, '', '0000-00-00', '', '', '', '223.182.244.94', NULL, NULL, '2021-04-04', '0000-00-00', 1, '', '[]'),
(8, 'ERD8', '', 'dfsd', 'fdsf', 'dfsd', 'fdsf', '0000-00-00', 0, 'sdsdsa@gmail.com', '', '7896541236', '', '', '432432891234.jpg', '', 'fname', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, '', 'fsdfsd', 'fsdfsd', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '3434', '', '', '432432891234', '', '', '0000-00-00', 0, 0, 0, '', 0, '0', 0, 0, 0, 0, 0, 45, NULL, 0, '', '0000-00-00', 0, '', '0000-00-00', '', '', '', '106.198.101.167', NULL, NULL, '2021-04-05', '0000-00-00', 1, '', '[]'),
(9, 'ERD9', '', 'dsadas', 'Ramesh', 'sadas', '', '0000-00-00', 0, 'msrdeepa@gmail.com', 'male', '7305360309', '', '', '', '', 'fname', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, 8, 1, '', 'dsad', 'dsad', '', '', '', 0, 8, 1, 'chennampat', '', '', '', '', '', 0, 8, 1, '', 'dsad', 'dsad', '', '', '', 0, 8, 1, 'chennampat', '', '', '', '987654321586', '', '', '0000-00-00', 1, 1, 0, '', 0, '0', 0, 0, 0, 0, 0, 55, 0, 0, '', '0000-00-00', 0, '', '0000-00-00', '', '', '', '106.198.101.167', NULL, NULL, '2021-04-05', '0000-00-00', 1, '', '[{\"faname\":\"bcbc\",\"fagender\":\"fafemale\",\"faage\":\"44\",\"farelationship\":\"famother\",\"fabusiness\":\"vxvz\"}]'),
(10, 'ERD10', '', 'Hemalatha', 'Test', 'Hemalatha', 'Test', '0000-00-00', 0, 'test@gmail.com', '', '9876543210', '', '', '', '', 'fname', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, 0, 1, '', 'Sbi Colony', 'Afavas', '', '', '', 0, 0, 1, '636004', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '987654321099', '', '', '0000-00-00', 0, 0, 0, '', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', 0, '', '0000-00-00', '', '', '', '106.198.101.167', NULL, NULL, '2021-04-05', '0000-00-00', 1, '', '[]'),
(11, 'ERD11', '', 'dsadas', 'Ramesh', '', '', '2003-03-28', 18, 'msrdeepa@gmail.com', '', '7305360309', '', '', '', '', 'fname', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, '', 'dsad', 'dsad', '', '', '', 0, 0, 0, 'chennampat', '', '', '', '', '', 0, 0, 0, '', 'dsad', 'dsad', '', '', '', 0, 0, 0, 'chennampat', '', '', '', '561232890780', '', '', '0000-00-00', 0, 0, 0, '', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', 0, '', '0000-00-00', '', '', '', '106.198.101.167', NULL, NULL, '2021-04-05', '0000-00-00', 1, '', '[]'),
(12, 'ERD12', '', 'dsfsdf', 'fdsf', 'sfsdf', '', '2014-04-23', 6, 'sdsdsa@gmail.com', 'male', '7896541236', '', '', '', '', 'fname', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, '', 'fsdfsd', 'fsdfsd', '', '', '', 0, 0, 0, 'gfdg', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '963852741536', '', '', '0000-00-00', 0, 0, 0, '', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', 0, '', '0000-00-00', '', '', '', '106.198.101.167', NULL, NULL, '2021-04-05', '0000-00-00', 1, '', '[]'),
(13, 'ERD13', '', 'dsfsdf', 'fdsf', 'sfsdf', '', '2012-04-23', 8, 'sdsdsa@gmail.com', 'male', '7896541236', '', '', '', '', 'fname', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, '', 'fsdfsd', 'fsdfsd', '', '', '', 0, 0, 0, 'gfdg', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '963852651536', '', '', '0000-00-00', 0, 0, 0, '', 0, '0', 0, 0, 0, 0, 0, 0, NULL, 0, '', '0000-00-00', 0, '', '0000-00-00', '', '', '', '106.198.101.167', NULL, NULL, '2021-04-05', '0000-00-00', 1, '', '[]'),
(18, 'ERD18', '', 'dasd', 'asdas', 'Ndwdasda', 'Nasdas', '0000-00-00', 0, '', '', '9876543214', '', '', '', '', 'fname', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '789456123654', '', '', '0000-00-00', 0, 0, 0, '', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', 0, '', '0000-00-00', '', '', '', '223.182.228.191', NULL, NULL, '2021-04-06', '0000-00-00', 1, '', '[]'),
(19, 'ERD19', '', 'Hema', '', 'Nஹேமா', 'Nராஜேஷ்', '1998-05-02', 22, 'hemasri1598@gmail.com', 'female', '9976021110', '9677432392', '', '', '', 'fname', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '214536987251', '', '', '0000-00-00', 0, 0, 0, '', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', 0, '', '0000-00-00', '', '', '', '223.182.228.193', NULL, NULL, '2021-04-07', '0000-00-00', 1, 'cooking', '[]'),
(20, 'ERD20', '', 'vcxv', 'vxc', 'xcvcxvc', 'vcx', '0000-00-00', 0, '', 'male', '5893624785', '', '', '', '', 'fname', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '856985475222', '', '', '0000-00-00', 0, 0, 0, '', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', 0, '', '0000-00-00', '', '', '', '106.198.101.189', NULL, NULL, '2021-04-07', '0000-00-00', 1, '', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `register_det`
--

CREATE TABLE `register_det` (
  `id` int(11) NOT NULL,
  `detuid` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `dname` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dgender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `dage` int(11) NOT NULL,
  `drelationship` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `djob` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mdftype`
--

CREATE TABLE `tbl_mdftype` (
  `id` int(11) NOT NULL,
  `dfid` int(11) DEFAULT NULL,
  `dfshort` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dftype` varchar(46) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subavailable` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_mdftype`
--

INSERT INTO `tbl_mdftype` (`id`, `dfid`, `dfshort`, `dftype`, `subavailable`, `active`) VALUES
(1, 1, '', 'Blindness', NULL, 1),
(2, 2, '', 'Low vision', NULL, 1),
(3, 3, '', 'Leprosy Cured', NULL, 1),
(4, 4, '', 'Hearing Impairment (Deaf and Hard of Hearing)', NULL, 1),
(5, 5, '', 'Dwarfism', NULL, 1),
(6, 6, '', 'Intellectual Disability', NULL, 1),
(7, 7, '', 'Mental illness', NULL, 1),
(8, 8, '', 'Autism Spectrum Disorder', NULL, 1),
(9, 9, '', 'Cerebral Palsy', NULL, 1),
(10, 10, '', 'Muscular Dystrophy', 1, 1),
(11, 11, '', 'Chronic Neurological Conditions', NULL, 1),
(12, 12, '', 'Specific Learning Disability', NULL, 1),
(13, 13, '', 'Multiple sclerosis', NULL, 1),
(14, 14, '', 'Speech and Language Disability', NULL, 1),
(15, 15, '', 'Thalassemia', NULL, 1),
(16, 16, '', 'Haemophilia', NULL, 1),
(17, 17, '', 'Sickle Cell disease', NULL, 1),
(18, 18, '', 'Multiple Disabilities including Deaf Blindness', NULL, 1),
(19, 19, '', 'Acid attack Victim', NULL, 1),
(20, 20, '', 'Parkinson\'s disease', NULL, 1),
(21, 21, '', 'Locomotor disability', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mdistrict`
--

CREATE TABLE `tbl_mdistrict` (
  `id` int(11) NOT NULL,
  `districtid` int(11) DEFAULT NULL,
  `districtcode` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `districtname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edistrictname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stateid` int(1) DEFAULT NULL,
  `countryid` int(1) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_mdistrict`
--

INSERT INTO `tbl_mdistrict` (`id`, `districtid`, `districtcode`, `districtname`, `edistrictname`, `stateid`, `countryid`, `active`) VALUES
(1, 1, 'AR', 'mhpaY]h;', 'Ariyalur', 1, 1, 1),
(2, 2, 'CGL', 'br\';fy;gl;L', 'Chengalpattu', 1, 1, 1),
(3, 3, 'CH', 'brd;id', 'Chennai', 1, 1, 1),
(4, 4, 'CO', 'nfhak;g[j;J]h;', 'Coimbatore', 1, 1, 1),
(5, 5, 'CU', 'flY]h;', 'Cuddalore', 1, 1, 1),
(6, 6, 'DH', 'jUkg[hp', 'Dharmapuri', 1, 1, 1),
(7, 7, 'DI', 'jpz;Lf;fy;', 'Dindigul', 1, 1, 1),
(8, 8, 'ER', '&lt;nuhL', 'Erode', 1, 1, 1),
(9, 9, 'KL', 'fs;sf;Fwpr;rp', 'Kallakurichi', 1, 1, 1),
(10, 10, 'KC', 'fh\";rpg[uk;', 'Kanchipuram', 1, 1, 1),
(11, 11, 'KK', 'fd;dpahFkhp', 'Kanyakumari', 1, 1, 1),
(12, 12, 'KR', 'f%h;', 'Karur', 1, 1, 1),
(13, 13, 'KRI', 'fpU;zfphp', 'Krishnagiri', 1, 1, 1),
(14, 14, 'MDU', 'kJiu', 'Madurai', 1, 1, 1),
(15, 15, 'MYD', 'kapyhLJiw', 'Mayiladuthurai', 1, 1, 1),
(16, 16, 'NG', 'ehfg;gl;odk;', 'Nagapattinam', 1, 1, 1),
(17, 17, 'NM', 'ehkf;fy;', 'Namakkal', 1, 1, 1),
(18, 18, 'NI', 'ePyfphp', 'Nilgiris', 1, 1, 1),
(19, 19, 'PE', 'bguk;gY]h;', 'Perambalur', 1, 1, 1),
(20, 20, 'PU', 'g[Jf;nfhl;il', 'Pudukkottai', 1, 1, 1),
(21, 21, 'RA', ',uhkehjg[uk;', 'Ramanathapuram', 1, 1, 1),
(22, 22, 'RN', ',ubzpg;ngl;il', 'Ranipet', 1, 1, 1),
(23, 23, 'SA', 'nryk;', 'Salem', 1, 1, 1),
(24, 24, 'SI', 'rptf\';if', 'Sivaganga', 1, 1, 1),
(25, 25, 'TS', 'bjd;fhrp', 'Tenkasi', 1, 1, 1),
(26, 26, 'TJ', 'j\";rht{h;', 'Thanjavur', 1, 1, 1),
(27, 27, 'TH', 'njdp', 'Theni', 1, 1, 1),
(28, 28, 'TK', 'J]j;Jf;Fo', 'Thoothukudi', 1, 1, 1),
(29, 29, 'TC', 'jpUr;rpuhg;gs;sp', 'Tiruchirappalli', 1, 1, 1),
(30, 30, 'TI', 'jpUbey;ntyp', 'Tirunelveli', 1, 1, 1),
(31, 31, 'TU', 'jpUg;gj;J]h;', 'Tirupathur', 1, 1, 1),
(32, 32, 'TP', 'jpUg;g{h;', 'Tirupur', 1, 1, 1),
(33, 33, 'TL', 'jpUts;qh;', 'Tiruvallur', 1, 1, 1),
(34, 34, 'TV', 'jpUtz;zhkiy', 'Tiruvannamalai', 1, 1, 1),
(35, 35, 'TR', 'jpUth%h;', 'Tiruvarur', 1, 1, 1),
(36, 36, 'VE', 'ntY]h;', 'Vellore', 1, 1, 1),
(37, 37, 'VL', 'tpGg;g[uk;', 'Viluppuram', 1, 1, 1),
(38, 38, 'VR', 'tpUJefh;', 'Virudhunagar', 1, 1, 1),
(39, 39, 'blr', 'bg\';fqU', 'Bangalore', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mnadalumandram`
--

CREATE TABLE `tbl_mnadalumandram` (
  `id` int(11) NOT NULL,
  `nadalumandramid` int(11) DEFAULT NULL,
  `nadalumandramcode` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nadalumandramname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enadalumandramname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_mnadalumandram`
--

INSERT INTO `tbl_mnadalumandram` (`id`, `nadalumandramid`, `nadalumandramcode`, `nadalumandramname`, `enadalumandramname`, `active`) VALUES
(1, 1, '', '&lt;nuhL', 'Erode', 1),
(2, 2, '', 'brd;id - bjw;F', 'South Chennai', 1),
(3, 3, '', 'brd;id - tlf;F', 'North Chennai', 1),
(4, 4, '', 'fh\";rpg[uk;', 'Kancheepuram', 1),
(5, 5, '', 'flY]h;', 'Cuddalore', 1),
(6, 6, '', 'fpU;zfphp', 'Krishnagiri', 1),
(7, 7, '', 'fs;sf;Fwpr;rp', 'Kallakurichi', 1),
(8, 8, '', 'jpUts;qh;', 'Tiruvallur', 1),
(9, 9, '', 'jpUtz;zhkiy', 'Tiruvannamalai', 1),
(10, 10, '', 'jpz;Lf;fy;', 'Dindigul', 1),
(11, 11, '', 'jUkg[hp', 'Dharmapuri', 1),
(12, 12, '', 'fd;dpahFkhp', 'Kanniyakumari', 1),
(13, 13, '', 'f%h;', 'Karur', 1),
(14, 14, '', 'kj;jpa brd;id', 'Central Chennai', 1),
(15, 15, '', 'kJiu', 'Madurai', 1),
(16, 16, '', 'kapyhLJiw', 'Mayiladuthurai', 1),
(17, 17, '', 'muf;nfhzk;', 'Arakkonam', 1),
(18, 18, '', 'Muzp', 'Arani', 1),
(19, 19, '', 'ehfg;gl;odk;', 'Nagapattinam', 1),
(20, 20, '', 'ehkf;fy;', 'Namakkal', 1),
(21, 21, '', 'nfhak;g[j;J]h;', 'Coimbatore', 1),
(22, 22, '', 'ePyfphp', 'Nilgiris', 1),
(23, 23, '', 'nryk;', 'Salem', 1),
(24, 24, '', 'ntY]h;', 'Vellore', 1),
(25, 25, '', 'bguk;gY]h;', 'Perambalur', 1),
(26, 26, '', 'bghs;shr;rp', 'Pollachi', 1),
(27, 27, '', ',uhkehjg[uk;', 'Ramanathapuram', 1),
(28, 28, '', 'rpjk;guk;', 'Chidambaram', 1),
(29, 29, '', 'rptf\';if', 'Sivaganga', 1),
(30, 30, '', '$bgUk;g[J]h;', 'Sriperumbudur', 1),
(31, 31, '', 'bjd;fhrp', 'Tenkasi', 1),
(32, 32, '', 'j\";rht{h;', 'Thanjavur', 1),
(33, 33, '', 'njdp', 'Theni', 1),
(34, 34, '', 'J]j;Jf;Fo', 'Thoothukkudi', 1),
(35, 35, '', 'jpUr;rpuhg;gs;sp', 'Tiruchirappalli', 1),
(36, 36, '', 'jpUbey;ntyp', 'Tirunelveli', 1),
(37, 37, '', 'jpUg;g{h;', 'Tiruppur', 1),
(38, 38, '', 'tpGg;g[uk;', 'Viluppuram', 1),
(39, 39, '', 'tpUJefh;', 'Virudhunagar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_msattamandram`
--

CREATE TABLE `tbl_msattamandram` (
  `id` int(11) NOT NULL,
  `sattamandramid` int(11) DEFAULT NULL,
  `sattamandramcode` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sattamandramname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `esattamandramname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_msattamandram`
--

INSERT INTO `tbl_msattamandram` (`id`, `sattamandramid`, `sattamandramcode`, `sattamandramname`, `esattamandramname`, `active`) VALUES
(1, 1, '', 'கும்மிடிப்பூண்டி', 'Gummidipoondi', 0),
(2, 2, '', 'பொன்னேரி', 'Ponneri', 0),
(3, 3, '', 'திருத்தணி', 'Tiruttani', 0),
(4, 4, '', 'திருவள்ளூர்', 'Thiruvallur', 0),
(5, 5, '', 'பூந்தமல்லி', 'Poonamallee', 0),
(6, 6, '', 'ஆவடி', 'Avadi', 0),
(7, 7, '', 'மதுரவாயல்', 'Maduravoyal', 0),
(8, 8, '', 'அம்பத்தூர்', 'Ambattur', 0),
(9, 9, '', 'மாதவரம்', 'Madavaram', 0),
(10, 10, '', 'திருவொற்றியூர்', 'Thiruvottiyur', 0),
(11, 11, '', 'ராதாகிருஷ்ணன் நகர்', 'Radhakrishnan Nagar', 0),
(12, 12, '', 'பெரம்பூர்', 'Perambur', 0),
(13, 13, '', 'கொளத்தூர்', 'Kolathur', 0),
(14, 14, '', 'வில்லிவாக்கம்', 'Villivakkam', 0),
(15, 15, '', 'திரு. வி. க. நகர்', 'Thiru. Vi. Ka. Nagar', 0),
(16, 16, '', 'எழும்பூர்', 'Egmore', 0),
(17, 17, '', 'இராயபுரம்', 'Royapuram', 0),
(18, 18, '', 'துறைமுகம்', 'Harbour', 0),
(19, 19, '', 'சேப்பாக்கம்-திருவல்லிக்கேணி', 'Chepauk-Thiruvallikeni', 0),
(20, 20, '', 'ஆயிரம் விளக்கு', 'Thousand Lights', 0),
(21, 21, '', 'அண்ணா நகர்', 'Anna Nagar', 0),
(22, 22, '', 'விருகம்பாக்கம்', 'Virugambakkam', 0),
(23, 23, '', 'சைதாப்பேட்டை', 'Saidapet', 0),
(24, 24, '', 'தி. நகர்', 'T. Nagar', 0),
(25, 25, '', 'மயிலாப்பூர்', 'Mylapore', 0),
(26, 26, '', 'வேளச்சேரி', 'Velachery', 0),
(27, 27, '', 'சோழிங்கநல்லூர்', 'Sholinganallur', 0),
(28, 28, '', 'ஆலந்தூர்', 'Alandur', 0),
(29, 29, '', 'திருப்பெரும்புதூர்', 'Sriperumbudur', 0),
(30, 30, '', 'பல்லாவரம்', 'Pallavaram', 0),
(31, 31, '', 'தாம்பரம்', 'Tambaram', 0),
(32, 32, '', 'செங்கல்பட்டு', 'Chengalpattu', 0),
(33, 33, '', 'திருப்போரூர்', 'Tirupporur', 0),
(34, 34, '', 'செய்யூர்', 'Cheyyur', 0),
(35, 35, '', 'மதுராந்தகம்', 'Maduranthakam', 0),
(36, 36, '', 'உத்திரமேரூர்', 'Uthiramerur', 0),
(37, 37, '', 'காஞ்சிபுரம்', 'Kancheepuram', 0),
(38, 38, '', 'அரக்கோணம்', 'Arakkonam', 0),
(39, 39, '', 'சோளிங்கர்', 'Sholingur', 0),
(40, 40, '', 'காட்பாடி (வேலூர் வடக்கு)', 'Katpadi', 0),
(41, 41, '', 'இராணிப்பேட்டை', 'Ranipet', 0),
(42, 42, '', 'ஆற்காடு', 'Arcot', 0),
(43, 43, '', 'வேலூர் (வேலூர் தெற்கு)', 'Vellore (Vellore south)', 0),
(44, 44, '', 'அணைக்கட்டு', 'Anaikattu', 0),
(45, 45, '', 'கீழ்வைத்தியனான்குப்பம்', 'K. V. Kuppam', 0),
(46, 46, '', 'குடியாத்தம்', 'Gudiyattam', 0),
(47, 47, '', 'வாணியம்பாடி', 'Vaniyambadi', 0),
(48, 48, '', 'ஆம்பூர்', 'Ambur', 0),
(49, 49, '', 'ஜோலார்பேட்டை', 'Jolarpet', 0),
(50, 50, '', 'திருப்பத்தூர்', 'Tirupattur', 0),
(51, 51, '', 'ஊத்தங்கரை', 'Uthangarai', 0),
(52, 52, '', 'பர்கூர்', 'Bargur', 0),
(53, 53, '', 'கிருஷ்ணகிரி', 'Krishnagiri', 0),
(54, 54, '', 'வேப்பனஹள்ளி', 'Veppanahalli', 0),
(55, 55, '', 'ஓசூர்', 'Hosur', 0),
(56, 56, '', 'தளி', 'Thalli', 0),
(57, 57, '', 'பாலக்கோடு', 'Palacode', 0),
(58, 58, '', 'பென்னாகரம்', 'Pennagaram', 0),
(59, 59, '', 'தருமபுரி', 'Dharmapuri', 0),
(60, 60, '', 'பாப்பிரெட்டிப்பட்டி', 'Pappireddippatti', 0),
(61, 61, '', 'அரூர்', 'Harur', 0),
(62, 62, '', 'செங்கம்', 'Chengam', 0),
(63, 63, '', 'திருவண்ணாமலை', 'Tiruvannamalai', 0),
(64, 64, '', '‎கீழ்பெண்ணாத்தூர்', 'Kilpennathur', 0),
(65, 65, '', 'கலசப்பாக்கம்', 'Kalasapakkam', 0),
(66, 66, '', 'போளூர்', 'Polur', 0),
(67, 67, '', 'ஆரணி', 'Arani', 0),
(68, 68, '', 'செய்யாறு', 'Cheyyar', 0),
(69, 69, '', 'வந்தவாசி', 'Vandavasi', 0),
(70, 70, '', 'செஞ்சி', 'Gingee', 0),
(71, 71, '', 'மயிலம்', 'Mailam', 0),
(72, 72, '', 'திண்டிவனம்', 'Tindivanam', 0),
(73, 73, '', 'வானூர்', 'Vanur', 0),
(74, 74, '', 'விழுப்புரம்', 'Villupuram', 0),
(75, 75, '', 'விக்கிரவாண்டி', 'Vikravandi', 0),
(76, 76, '', 'திருக்கோயிலூர்', 'Tirukkoyilur', 0),
(77, 77, '', 'உளுந்தூர்ப்பேட்டை', 'Ulundurpettai', 0),
(78, 78, '', 'இரிஷிவந்தியம்', 'Rishivandiyam', 0),
(79, 79, '', 'சங்கராபுரம்', 'Sankarapuram', 0),
(80, 80, '', 'கள்ளக்குறிச்சி', 'Kallakurichi', 0),
(81, 81, '', 'கங்கவள்ளி', 'Gangavalli', 0),
(82, 82, '', 'ஆத்தூர்', 'Attur', 0),
(83, 83, '', 'ஏற்காடு', 'Yercaud', 0),
(84, 84, '', 'ஓமலூர்', 'Omalur', 0),
(85, 85, '', 'மேட்டூர்', 'Mettur', 0),
(86, 86, '', 'எடப்பாடி', 'Edappadi', 0),
(87, 87, '', 'சங்ககிரி', 'Sankari', 0),
(88, 88, '', 'சேலம்-மேற்கு', 'Salem (West)', 0),
(89, 89, '', 'சேலம்-வடக்கு', 'Salem (North)', 0),
(90, 90, '', 'சேலம்-தெற்கு', 'Salem (South)', 0),
(91, 91, '', 'வீரபாண்டி', 'Veerapandi', 0),
(92, 92, '', 'இராசிபுரம்', 'Rasipuram', 0),
(93, 93, '', 'சேந்தமங்கலம்', 'Senthamangalam', 0),
(94, 94, '', 'நாமக்கல்', 'Namakkal', 0),
(95, 95, '', 'பரமத்தி-வேலூர்', 'Paramathi Velur', 0),
(96, 96, '', 'திருச்செங்கோடு', 'Tiruchengodu', 0),
(97, 97, '', 'குமாரபாளையம்', 'Kumarapalayam', 0),
(98, 98, '', 'ஈரோடு கிழக்கு', 'Erode (East)', 0),
(99, 99, '', 'ஈரோடு மேற்கு', 'Erode (West)', 0),
(100, 100, '', 'மொடக்குறிச்சி', 'Modakkurichi', 0),
(101, 101, '', 'பெருந்துறை', 'Dharapuram', 0),
(102, 102, '', 'பவானி', 'Kangayam', 0),
(103, 103, '', 'அந்தியூர்', 'Perundurai', 0),
(104, 104, '', 'கோபிச்செட்டிப்பாளையம்', 'Bhavani', 0),
(105, 105, '', 'பவானிசாகர்', 'Anthiyur', 0),
(106, 106, '', 'தாராபுரம்', 'Gobichettipalayam', 0),
(107, 107, '', 'காங்கேயம்', 'Bhavanisagar', 0),
(108, 108, '', 'அவினாசி', 'Udhagamandalam', 0),
(109, 109, '', 'திருப்பூர் வடக்கு', 'Coonoor', 0),
(110, 110, '', 'திருப்பூர் தெற்கு', 'Gudalur', 0),
(111, 111, '', 'பல்லடம்', 'Mettupalayam', 0),
(112, 112, '', 'உடுமலைப்பேட்டை', 'Avanashi', 0),
(113, 113, '', 'மடத்துக்குளம்', 'Tiruppur North', 0),
(114, 114, '', 'உதகமண்டலம்', 'Tiruppur South', 0),
(115, 115, '', 'குன்னூர்', 'Palladam', 0),
(116, 116, '', 'கூடலூர்', 'Sulur', 0),
(117, 117, '', 'மேட்டுப்பாளையம்', 'Kavundampalayam', 0),
(118, 118, '', 'சூலூர்', 'Coimbatore North', 0),
(119, 119, '', 'கவுண்டம்பாளையம்', 'Thondamuthur', 0),
(120, 120, '', 'கோயம்புத்தூர் வடக்கு', 'Coimbatore South', 0),
(121, 121, '', 'தொண்டாமுத்தூர்', 'Singanallur', 0),
(122, 122, '', 'கோயம்புத்தூர் தெற்கு', 'Kinathukadavu', 0),
(123, 123, '', 'சிங்காநல்லூர்', 'Pollachi', 0),
(124, 124, '', 'கிணத்துக்கடவு', 'Valparai', 0),
(125, 125, '', 'பொள்ளாச்சி', 'Udumalaipettai', 0),
(126, 126, '', 'வால்பாறை', 'Madathukulam', 0),
(127, 127, '', 'பழநி', 'Palani', 0),
(128, 128, '', 'ஒட்டன்சத்திரம்', 'Oddanchatram', 0),
(129, 129, '', 'ஆத்தூர்', 'Athoor', 0),
(130, 130, '', 'நிலக்கோட்டை', 'Nilakottai', 0),
(131, 131, '', 'நத்தம்', 'Natham', 0),
(132, 132, '', 'திண்டுக்கல்', 'Dindigul', 0),
(133, 133, '', 'வேடசந்தூர்', 'Vedasandur', 0),
(134, 134, '', 'அரவக்குறிச்சி', 'Aravakurichi', 0),
(135, 135, '', 'கரூர்', 'Karur', 0),
(136, 136, '', 'கிருஷ்ணராயபுரம்', 'Krishnarayapuram', 0),
(137, 137, '', 'குளித்தலை', 'Kulithalai', 0),
(138, 138, '', 'மணப்பாறை', 'Manapaarai', 0),
(139, 139, '', 'திருவரங்கம்', 'Srirangam', 0),
(140, 140, '', 'திருச்சிராப்பள்ளி மேற்கு', 'Tiruchirappalli (West)', 0),
(141, 141, '', 'திருச்சிராப்பள்ளி கிழக்கு', 'Tiruchirappalli (East)', 0),
(142, 142, '', 'திருவெறும்பூர்', 'Thiruverumbur', 0),
(143, 143, '', 'இலால்குடி', 'Lalgudi', 0),
(144, 144, '', 'மண்ணச்சநல்லூர்', 'Manachanallur', 0),
(145, 145, '', 'முசிறி', 'Musiri', 0),
(146, 146, '', 'துறையூர்', 'Thuraiyur', 0),
(147, 147, '', 'பெரம்பலூர்', 'Perambalur', 0),
(148, 148, '', 'குன்னம்', 'Kunnam', 0),
(149, 149, '', 'அரியலூர்', 'Ariyalur', 0),
(150, 150, '', 'ஜெயங்கொண்டம்', 'Jayankondam', 0),
(151, 151, '', 'திட்டக்குடி', 'Tittakudi', 0),
(152, 152, '', 'விருத்தாச்சலம்', 'Virudhachalam', 0),
(153, 153, '', 'நெய்வேலி', 'Neyveli', 0),
(154, 154, '', 'பண்ருட்டி', 'Panruti', 0),
(155, 155, '', 'கடலூர்', 'Cuddalore', 0),
(156, 156, '', 'குறிஞ்சிப்பாடி', 'Kurinjipadi', 0),
(157, 157, '', 'புவனகிரி', 'Bhuvanagiri', 0),
(158, 158, '', 'சிதம்பரம்', 'Chidambaram', 0),
(159, 159, '', 'காட்டுமன்னார்கோயில்', 'Kattumannarkoil', 0),
(160, 160, '', 'சீர்காழி', 'Sirkazhi', 0),
(161, 161, '', 'மயிலாடுதுறை', 'Mayiladuthurai', 0),
(162, 162, '', 'பூம்புகார்', 'Poompuhar', 0),
(163, 163, '', 'நாகப்பட்டினம்', 'Nagapattinam', 0),
(164, 164, '', 'கீழ்வேளூர்', 'Kilvelur', 0),
(165, 165, '', 'வேதாரண்யம்', 'Vedaranyam', 0),
(166, 166, '', 'திருத்துறைப்பூண்டி', 'Thiruthuraipoondi', 0),
(167, 167, '', 'மன்னார்குடி', 'Mannargudi', 0),
(168, 168, '', 'திருவாரூர்', 'Thiruvarur', 0),
(169, 169, '', 'நன்னிலம்', 'Nannilam', 0),
(170, 170, '', 'திருவிடைமருதூர்', 'Thiruvidaimarudur', 0),
(171, 171, '', 'கும்பகோணம்', 'Kumbakonam', 0),
(172, 172, '', 'பாபநாசம்', 'Papanasam', 0),
(173, 173, '', 'திருவையாறு', 'Thiruvaiyaru', 0),
(174, 174, '', 'தஞ்சாவூர்', 'Thanjavur', 0),
(175, 175, '', 'ஒரத்தநாடு', 'Orathanadu', 0),
(176, 176, '', 'பட்டுக்கோட்டை', 'Pattukkottai', 0),
(177, 177, '', 'பேராவூரணி', 'Peravurani', 0),
(178, 178, '', 'கந்தர்வக்கோட்டை', 'Gandharvakottai', 0),
(179, 179, '', 'விராலிமலை', 'Viralimalai', 0),
(180, 180, '', 'புதுக்கோட்டை', 'Pudukkottai', 0),
(181, 181, '', 'திருமயம்', 'Thirumayam', 0),
(182, 182, '', 'ஆலங்குடி', 'Alangudi', 0),
(183, 183, '', 'அறந்தாங்கி', 'Aranthangi', 0),
(184, 184, '', 'காரைக்குடி', 'Karaikudi', 0),
(185, 185, '', 'திருப்பத்தூர்', 'Tiruppattur', 0),
(186, 186, '', 'சிவகங்கை', 'Sivaganga', 0),
(187, 187, '', 'மானாமதுரை', 'Manamadurai', 0),
(188, 188, '', 'மேலூர்', 'Melur', 0),
(189, 189, '', 'மதுரை கிழக்கு', 'Madurai East', 0),
(190, 190, '', 'சோழவந்தான்', 'Sholavandan', 0),
(191, 191, '', 'மதுரை வடக்கு', 'Madurai North', 0),
(192, 192, '', 'மதுரை தெற்கு', 'Madurai South', 0),
(193, 193, '', 'மதுரை மத்தி', 'Madurai Central', 0),
(194, 194, '', 'மதுரை மேற்கு', 'Madurai West', 0),
(195, 195, '', 'திருப்பரங்குன்றம்', 'Thiruparankundram', 0),
(196, 196, '', 'திருமங்கலம்', 'Tirumangalam', 0),
(197, 197, '', 'உசிலம்பட்டி', 'Usilampatti', 0),
(198, 198, '', 'ஆண்டிப்பட்டி', 'Andipatti', 0),
(199, 199, '', 'பெரியகுளம்', 'Periyakulam', 0),
(200, 200, '', 'போடிநாயக்கனூர்', 'Bodinayakanur', 0),
(201, 201, '', 'கம்பம்', 'Cumbum', 0),
(202, 202, '', 'இராஜபாளையம்', 'Rajapalayam', 0),
(203, 203, '', 'திருவில்லிபுத்தூர்', 'Srivilliputhur', 0),
(204, 204, '', 'சாத்தூர்', 'Sattur', 0),
(205, 205, '', 'சிவகாசி', 'Sivakasi', 0),
(206, 206, '', 'விருதுநகர்', 'Virudhunagar', 0),
(207, 207, '', 'அருப்புக்கோட்டை', 'Aruppukkottai', 0),
(208, 208, '', 'திருச்சுழி', 'Tiruchuli', 0),
(209, 209, '', 'பரமக்குடி', 'Paramakudi', 0),
(210, 210, '', 'திருவாடாணை', 'Tiruvadanai', 0),
(211, 211, '', 'இராமநாதபுரம்', 'Ramanathapuram', 0),
(212, 212, '', 'முதுகுளத்தூர்', 'Mudhukulathur', 0),
(213, 213, '', 'விளாத்திகுளம்', 'Vilathikulam', 0),
(214, 214, '', 'தூத்துக்குடி', 'Thoothukudi', 0),
(215, 215, '', 'திருச்செந்தூர்', 'Tiruchendur', 0),
(216, 216, '', 'ஸ்ரீவைகுண்டம்', 'Thiruvaikundam', 0),
(217, 217, '', 'ஓட்டப்பிடாரம்', 'Ottapidaram', 0),
(218, 218, '', 'கோவில்பட்டி', 'Kovilpatti', 0),
(219, 219, '', 'சங்கரன்கோவில்', 'Sankarankovil', 0),
(220, 220, '', 'வாசுதேவநல்லூர்', 'Vasudevanallur', 0),
(221, 221, '', 'கடையநல்லூர்', 'Kadayanallur', 0),
(222, 222, '', 'தென்காசி', 'Tenkasi', 0),
(223, 223, '', 'ஆலங்குளம்', 'Alangulam', 0),
(224, 224, '', 'திருநெல்வேலி', 'Tirunelveli', 0),
(225, 225, '', 'அம்பாசமுத்திரம்', 'Ambasamudram', 0),
(226, 226, '', 'பாளையங்கோட்டை', 'Palayamkottai', 0),
(227, 227, '', 'நாங்குநேரி', 'Nanguneri', 0),
(228, 228, '', 'இராதாபுரம்', 'Radhapuram', 0),
(229, 229, '', 'கன்னியாகுமரி', 'Kanniyakumari', 0),
(230, 230, '', 'நாகர்கோவில்', 'Nagercoil', 0),
(231, 231, '', 'குளச்சல்', 'Colachal', 0),
(232, 232, '', 'பத்மனாபபுரம்', 'Padmanabhapuram', 0),
(233, 233, '', 'விளவங்கோடு', 'Vilavancode', 0),
(234, 234, '', 'கிள்ளியூர்', 'Killiyoor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mstate`
--

CREATE TABLE `tbl_mstate` (
  `id` int(11) NOT NULL,
  `stateid` int(11) DEFAULT NULL,
  `statecode` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statename` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estatename` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countryid` int(1) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_mstate`
--

INSERT INTO `tbl_mstate` (`id`, `stateid`, `statecode`, `statename`, `estatename`, `countryid`, `active`) VALUES
(1, 1, 'TN', 'jkpH;ehL', 'Tamil Nadu', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mtaluk`
--

CREATE TABLE `tbl_mtaluk` (
  `id` int(11) NOT NULL,
  `talukid` int(11) DEFAULT NULL,
  `talukcode` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `talukname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etalukname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `districtid` int(1) DEFAULT NULL,
  `stateid` int(1) DEFAULT NULL,
  `countryid` int(1) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_mtaluk`
--

INSERT INTO `tbl_mtaluk` (`id`, `talukid`, `talukcode`, `talukname`, `etalukname`, `districtid`, `stateid`, `countryid`, `active`) VALUES
(1, 1, 'an', 'me;jpa{h;', 'Andhiyur', 1, 1, 1, 1),
(3, 2, 'mtd', 'nkl;^h;', 'Mettur', 2, 1, 1, 1),
(4, 3, 'GI', 'nfhgp', 'Gopi', 1, 1, 1, 1),
(5, 0, 'bha', 'gthdp', 'Bhavani', 8, 1, 1, 0),
(6, 0, 'slm', 'nryk;', 'Salem', 23, 1, 1, 0),
(7, 0, 'nn', 'nvn', 'nvn', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userrole`
--

CREATE TABLE `tbl_userrole` (
  `id` int(11) NOT NULL,
  `userroleid` int(11) DEFAULT NULL,
  `userrole` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_userrole`
--

INSERT INTO `tbl_userrole` (`id`, `userroleid`, `userrole`, `active`) VALUES
(1, 1, 'super admin', 0),
(2, 2, 'admin', 1),
(3, 3, 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userrole_id` int(11) NOT NULL,
  `userrole` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createddate` timestamp NULL DEFAULT current_timestamp(),
  `modifieddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `user_email`, `user_password`, `userrole_id`, `userrole`, `createddate`, `modifieddate`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$V1GAqWIMIdmm.FzyeXAaPe6UnEaXG1wehrwPCKkZQ7eOYVwTD2QP.', 2, '2', '2021-03-28 05:13:43', '2021-03-28 05:13:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aadhar` (`aadhar`);

--
-- Indexes for table `register_det`
--
ALTER TABLE `register_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mdftype`
--
ALTER TABLE `tbl_mdftype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mdistrict`
--
ALTER TABLE `tbl_mdistrict`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mnadalumandram`
--
ALTER TABLE `tbl_mnadalumandram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_msattamandram`
--
ALTER TABLE `tbl_msattamandram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mstate`
--
ALTER TABLE `tbl_mstate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mtaluk`
--
ALTER TABLE `tbl_mtaluk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_userrole`
--
ALTER TABLE `tbl_userrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `register_det`
--
ALTER TABLE `register_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_mdftype`
--
ALTER TABLE `tbl_mdftype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_mdistrict`
--
ALTER TABLE `tbl_mdistrict`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_mnadalumandram`
--
ALTER TABLE `tbl_mnadalumandram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_msattamandram`
--
ALTER TABLE `tbl_msattamandram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `tbl_mstate`
--
ALTER TABLE `tbl_mstate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_mtaluk`
--
ALTER TABLE `tbl_mtaluk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_userrole`
--
ALTER TABLE `tbl_userrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
