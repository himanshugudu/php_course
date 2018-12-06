-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 10, 2018 at 12:19 PM
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
-- Table structure for table `resourcemgt`
--

DROP TABLE IF EXISTS `resourcemgt`;
CREATE TABLE IF NOT EXISTS `resourcemgt` (
  `BPCI_Pillar` varchar(60) NOT NULL,
  `Project Name` varchar(70) NOT NULL,
  `id` int(10) NOT NULL,
  `project_type` varchar(100) NOT NULL,
  `Request_type` int(11) NOT NULL,
  `Business_Owner` varchar(40) NOT NULL,
  `Executive_Sponsor` varchar(40) NOT NULL,
  `Approval_Status` varchar(20) NOT NULL,
  `Project_Start_Date` varchar(12) NOT NULL,
  `Target_Completion` varchar(12) NOT NULL,
  `Total_Project_Hrs` varchar(8) NOT NULL,
  `Project_Status` varchar(10) NOT NULL,
  `Lead` varchar(40) NOT NULL,
  `Multiple_Resouce_Project` varchar(10) NOT NULL,
  `Assigned_First_Name` varchar(40) NOT NULL,
  `Resource_PM1_Start_Date` varchar(12) NOT NULL,
  `Resource_PM1_End_Date` varchar(12) NOT NULL,
  `Assigned_First_Total_Hrs` varchar(10) NOT NULL,
  `Assigned_Second_Name` varchar(30) NOT NULL,
  `Resource_PM2_Start_Date` varchar(12) NOT NULL,
  `Resource_PM2_End_date` varchar(12) NOT NULL,
  `Assigned_Second_Total_Hrs` varchar(12) NOT NULL,
  `Assigned_Third_Name` varchar(30) NOT NULL,
  `Resource_PM3_Start_Date` varchar(12) NOT NULL,
  `Resource_PM3_End_Date` varchar(12) NOT NULL,
  `Assigned_Third_Total_Hrs` varchar(14) NOT NULL,
  `Project_Investment_Category` varchar(40) NOT NULL,
  `Project_Investment_(Manhours)` varchar(40) NOT NULL,
  `Project_Investment_(Dollar)` varchar(40) NOT NULL,
  `Return_on_Investment_Category` varchar(40) NOT NULL,
  `Requestor_ Name` varchar(40) NOT NULL,
  `Requestor_ emailid` varchar(40) NOT NULL,
  `Team` varchar(40) NOT NULL,
  `Business_Problem` varchar(100) NOT NULL,
  `Goals_Outcomes` varchar(100) NOT NULL,
  `Benefits` varchar(100) NOT NULL,
  `RAD` varchar(200) NOT NULL,
  `Comments_Addtionalinfo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resourcemgt`
--

INSERT INTO `resourcemgt` (`BPCI_Pillar`, `Project Name`, `id`, `project_type`, `Request_type`, `Business_Owner`, `Executive_Sponsor`, `Approval_Status`, `Project_Start_Date`, `Target_Completion`, `Total_Project_Hrs`, `Project_Status`, `Lead`, `Multiple_Resouce_Project`, `Assigned_First_Name`, `Resource_PM1_Start_Date`, `Resource_PM1_End_Date`, `Assigned_First_Total_Hrs`, `Assigned_Second_Name`, `Resource_PM2_Start_Date`, `Resource_PM2_End_date`, `Assigned_Second_Total_Hrs`, `Assigned_Third_Name`, `Resource_PM3_Start_Date`, `Resource_PM3_End_Date`, `Assigned_Third_Total_Hrs`, `Project_Investment_Category`, `Project_Investment_(Manhours)`, `Project_Investment_(Dollar)`, `Return_on_Investment_Category`, `Requestor_ Name`, `Requestor_ emailid`, `Team`, `Business_Problem`, `Goals_Outcomes`, `Benefits`, `RAD`, `Comments_Addtionalinfo`) VALUES
('Business Performanc & Analytic', 'DD Capacity Planning Phase II', 1, 'FIT', 0, 'Various', 'Various', 'Submitted', '2018-02-08', '2018-09-12', '100', 'Dropped', 'Sudhish Vyas', 'N', 'Sudhish Vyas', '2018-02-08', '2018-09-12', '100', '', '2018-09-14', '2018-09-14', '0', '', '2018-09-14', '2018-09-15', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
('Business Transformation', 'EMEA Payroll Implementation\r\n', 16, '', 0, 'Clive Kinsella', 'Tracy Hanson', 'Leadership Approved', '04/03/2015', '04/07/2019', '400', 'Active', 'Rohit Talwar', 'N', 'Carlotta Musu', '04/03/2015', '04/07/2019', '400', '', '', '', '', '', '', '', '', 'efficiency improvement', '400', '', '', '', '', '', '', '', '', '', ''),
('Business Transformation', 'EMEA Payroll Implementation\r\n', 16, '', 0, 'Clive Kinsella', 'Tracy Hanson', 'Leadership Approved', '04/03/2015', '04/07/2019', '400', 'Active', 'Rohit Talwar', 'N', 'Carlotta Musu', '04/03/2015', '04/07/2019', '400', '', '', '', '', '', '', '', '', 'efficiency improvement', '400', '', '', '', '', '', '', '', '', '', ''),
('Business Transformation', 'Revenue Operations CMS\r\n', 18, 'Others', 0, 'Various', 'John Murphy', 'Leadership Approved', 'TBD', 'TBD', 'TBD', 'Backlog', 'Sudhish Vyas', 'No', 'Sudhish Vyas', 'TBD', 'TBD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Business Transformation', 'Revenue Operations CMS\r\n', 19, '', 0, 'Various', 'John Murphy', 'Leadership Approved', 'TBD', 'TBD', 'TBD', 'Backlog', 'Sudhish Vyas', 'No', 'Sudhish Vyas', 'TBD', 'TBD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Business Transformation', 'Revenue Operations CMS\r\n', 19, '', 0, 'Various', 'John Murphy', 'Leadership Approved', 'TBD', 'TBD', 'TBD', 'Backlog', 'Sudhish Vyas', 'No', 'Sudhish Vyas', 'TBD', 'TBD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Business Transformation', 'Revenue Operations CMS\r\n', 4, 'M&A', 0, 'Various', 'John Murphy', 'Leadership Approved', 'TBD', 'TBD', 'TBD', 'Backlog', 'Sudhish Vyas', 'No', 'Sudhish Vyas', 'TBD', 'TBD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Business Transformation', 'Revenue Operations CMS\r\n', 18, 'Others', 0, 'Various', 'John Murphy', 'Leadership Approved', 'TBD', 'TBD', 'TBD', 'Backlog', 'Sudhish Vyas', 'N', 'Sudhish Vyas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Business Transformation', 'Revenue Operations CMS\r\n', 18, 'Others', 0, 'Various', 'John Murphy', 'Leadership Approved', 'TBD', 'TBD', 'TBD', 'Backlog', 'Sudhish Vyas', 'N', 'Sudhish Vyas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
