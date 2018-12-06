-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 24, 2018 at 01:41 PM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpci`
--

-- --------------------------------------------------------

--
-- Table structure for table `resourcemgmt`
--

DROP TABLE IF EXISTS `resourcemgmt`;
CREATE TABLE IF NOT EXISTS `resourcemgmt` (
  `ProjectID` varchar(10) DEFAULT NULL,
  `BusinessOwner` varchar(20) NOT NULL,
  `ExecutiveSponsor` varchar(30) NOT NULL,
  `Approval Status` varchar(10) NOT NULL,
  `Lead` varchar(30) NOT NULL,
  `Multiple Resouce Project` varchar(10) NOT NULL,
  `Assigned First Name` char(40) NOT NULL,
  `Resource PM1 Start Date` date NOT NULL,
  `Resource-PM1 End Date` date NOT NULL,
  `Assigned First Total Hrs` int(11) NOT NULL,
  `Assigned Second Name` varchar(30) NOT NULL,
  `Resource PM2 Start Date` date NOT NULL,
  `Resource PM2 End date` date NOT NULL,
  `Assigned Second Total Hrs` int(11) NOT NULL,
  `Assigned Third Name` int(11) NOT NULL,
  `Resource PM3 Start Date` date NOT NULL,
  `Resource PM3 End Date` date NOT NULL,
  `Assigned Third Total Hrs` int(11) NOT NULL,
  `Total Project Hrs` int(11) NOT NULL,
  `Total Start Date` date NOT NULL,
  `Target Completion Date` date NOT NULL,
  `Project Status` varchar(30) NOT NULL,
  `Estimated_Investment_Costindol` varchar(30) NOT NULL,
  `Approved_Investment/Cost_in_$` varchar(20) NOT NULL,
  `Budget Approved by Leadership (Extr/. Reso.)` varchar(20) NOT NULL,
  `External Resource Required` varchar(20) NOT NULL,
  `Actual Spend` char(1) NOT NULL,
  `# of External Resources` int(11) NOT NULL,
  `Investment Category` varchar(20) NOT NULL,
  `Additional Investment required` mediumtext NOT NULL,
  `Investment.Comments` mediumtext NOT NULL,
  `Benefit category` varchar(20) NOT NULL,
  `Benefit category details` varchar(100) NOT NULL,
  `Potential Benefits in $` varchar(30) NOT NULL,
  `Metric used` char(1) NOT NULL,
  `Actual realized - dollar value or number of FTE` int(11) NOT NULL,
  `Signed off by (add an attachment)` mediumtext NOT NULL,
  `Benefit comments` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resourcemgmt`
--

INSERT INTO `resourcemgmt` (`ProjectID`, `BusinessOwner`, `ExecutiveSponsor`, `Approval Status`, `Lead`, `Multiple Resouce Project`, `Assigned First Name`, `Resource PM1 Start Date`, `Resource-PM1 End Date`, `Assigned First Total Hrs`, `Assigned Second Name`, `Resource PM2 Start Date`, `Resource PM2 End date`, `Assigned Second Total Hrs`, `Assigned Third Name`, `Resource PM3 Start Date`, `Resource PM3 End Date`, `Assigned Third Total Hrs`, `Total Project Hrs`, `Total Start Date`, `Target Completion Date`, `Project Status`, `Estimated_Investment_Costindol`, `Approved_Investment/Cost_in_$`, `Budget Approved by Leadership (Extr/. Reso.)`, `External Resource Required`, `Actual Spend`, `# of External Resources`, `Investment Category`, `Additional Investment required`, `Investment.Comments`, `Benefit category`, `Benefit category details`, `Potential Benefits in $`, `Metric used`, `Actual realized - dollar value or number of FTE`, `Signed off by (add an attachment)`, `Benefit comments`) VALUES
('1', 'Various', 'Various', 'Submitted', 'Sudhish Vyas', 'N', 'Sudhish Vyas', '2018-05-01', '2018-09-15', 100, '', '2018-09-15', '2018-09-15', 2, 23, '2018-09-15', '2018-09-15', 2, 2, '2018-09-15', '2018-09-15', 'Dropped', '', '', '', '556', 'a', 12, '', 'ghgf', 'gfhf', '', '', '', '', 12, 'vf', 'ghg');

-- --------------------------------------------------------

--
-- Table structure for table `resourcemgt`
--

DROP TABLE IF EXISTS `resourcemgt`;
CREATE TABLE IF NOT EXISTS `resourcemgt` (
  `BPCI_Pillar` varchar(40) NOT NULL,
  `Project Name` varchar(40) NOT NULL,
  `id` int(10) NOT NULL,
  `Business Owner` varchar(30) NOT NULL,
  `Executive Sponsor` varchar(10) NOT NULL,
  `Approval Status` varchar(10) NOT NULL,
  `Project Start Date` date NOT NULL,
  `Target Completion` date NOT NULL,
  `Total Project Hrs` int(10) NOT NULL,
  `Project Status` varchar(10) NOT NULL,
  `Lead` varchar(40) NOT NULL,
  `Multiple Resouce Project` varchar(10) NOT NULL,
  `Assigned First Name` varchar(40) NOT NULL,
  `Resource PM1 Start Date` date NOT NULL,
  `Resource-PM1 End Date` date NOT NULL,
  `Assigned First Total Hrs` int(10) NOT NULL,
  `Assigned Second Name` varchar(30) NOT NULL,
  `Resource PM2 Start Date` date NOT NULL,
  `Resource PM2 End date` date NOT NULL,
  `Assigned Second Total Hrs` int(10) NOT NULL,
  `Assigned Third Name` varchar(30) NOT NULL,
  `Resource PM3 Start Date` date NOT NULL,
  `Resource PM3 End Date` date NOT NULL,
  `Assigned Third Total Hrs` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resourcemgt`
--

INSERT INTO `resourcemgt` (`BPCI_Pillar`, `Project Name`, `id`, `Business Owner`, `Executive Sponsor`, `Approval Status`, `Project Start Date`, `Target Completion`, `Total Project Hrs`, `Project Status`, `Lead`, `Multiple Resouce Project`, `Assigned First Name`, `Resource PM1 Start Date`, `Resource-PM1 End Date`, `Assigned First Total Hrs`, `Assigned Second Name`, `Resource PM2 Start Date`, `Resource PM2 End date`, `Assigned Second Total Hrs`, `Assigned Third Name`, `Resource PM3 Start Date`, `Resource PM3 End Date`, `Assigned Third Total Hrs`) VALUES
('Business Performanc & Analytics', 'DD Capacity Planning Phase II', 1, 'Various', 'Various', 'Submitted', '2018-02-08', '2018-09-12', 100, 'Dropped', 'Sudhish Vyas', 'N', 'Sudhish Vyas', '2018-02-08', '2018-09-12', 100, '', '2018-09-14', '2018-09-14', 0, '', '2018-09-14', '2018-09-15', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
