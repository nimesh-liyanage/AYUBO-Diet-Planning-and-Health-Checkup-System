-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayubo_dphcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(6) NOT NULL,
  `Username` varchar(25) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Fname` varchar(25) DEFAULT NULL,
  `Lname` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Username`, `Password`, `Fname`, `Lname`) VALUES
(1, 'admin1', 'Password%1', 'James', 'Smith'),
(2, 'admin2', 'Password%2', 'Emma', 'Johnson'),
(3, 'admin3', 'Password%3', 'William', 'Brown'),
(4, 'admin4', 'Password%4', 'Olivia', 'Davis'),
(5, 'admin5', 'Password%5', 'Sophia', 'Wilson');

-- --------------------------------------------------------

--
-- Table structure for table `dietplan`
--

CREATE TABLE `dietplan` (
  `PlanID` int(6) NOT NULL,
  `Height` float DEFAULT NULL,
  `Weight` float DEFAULT NULL,
  `Age` int(3) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `GeneratedDate` date DEFAULT NULL,
  `UserID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dietplan`
--

INSERT INTO `dietplan` (`PlanID`, `Height`, `Weight`, `Age`, `Gender`, `GeneratedDate`, `UserID`) VALUES
(1, 170.5, 75.2, 30, 'Male', '2023-05-01', 1),
(2, 162.3, 62.7, 28, 'Female', '2023-05-02', 2),
(3, 180, 90.5, 35, 'Male', '2023-05-03', 3),
(4, 155.8, 55, 24, 'Female', '2023-05-04', 4),
(5, 175.2, 80.3, 42, 'Male', '2023-05-05', 5);

-- --------------------------------------------------------

--
-- Table structure for table `healthcheckorder`
--

CREATE TABLE `healthcheckorder` (
  `OrderID` int(6) NOT NULL,
  `OrderDate` date DEFAULT NULL,
  `PreferredDateTime` datetime DEFAULT NULL,
  `UserID` int(6) DEFAULT NULL,
  `PackageID` int(6) DEFAULT NULL,
  `PaymentID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `healthcheckorder`
--

INSERT INTO `healthcheckorder` (`OrderID`, `OrderDate`, `PreferredDateTime`, `UserID`, `PackageID`, `PaymentID`) VALUES
(1, '2023-05-15', '2023-06-15 09:00:00', 1, 1, 1),
(2, '2023-05-16', '2023-06-16 10:30:00', 2, 2, 2),
(3, '2023-05-17', '2023-06-17 14:00:00', 3, 3, 3),
(4, '2023-05-18', '2023-06-18 11:15:00', 4, 4, 4),
(5, '2023-05-19', '2023-06-19 13:45:00', 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `healthcheck_package`
--

CREATE TABLE `healthcheck_package` (
  `PackageID` int(6) NOT NULL,
  `PackageName` varchar(25) DEFAULT NULL,
  `Description` varchar(250) DEFAULT NULL,
  `Price` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `healthcheck_package`
--

INSERT INTO `healthcheck_package` (`PackageID`, `PackageName`, `Description`, `Price`) VALUES
(1, 'Starter Health Check', 'Comprehensive health checkup including basic tests', 4500),
(2, 'Essential Health Check', 'Extensive health checkup including advanced tests', 10450),
(3, 'Executive Health Check', 'Specialized cardiac health checkup', 15000),
(4, 'Premium Health Check', 'Diabetes-specific screening tests and consultation', 30500),
(5, 'Full Body Checkup', 'Thorough examination and tests for overall well-being', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `healthcheck_resultsreport`
--

CREATE TABLE `healthcheck_resultsreport` (
  `OrderID` int(6) NOT NULL,
  `ReportID` char(6) NOT NULL,
  `ReportDate` date DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `AssistantID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `healthcheck_resultsreport`
--

INSERT INTO `healthcheck_resultsreport` (`OrderID`, `ReportID`, `ReportDate`, `Description`, `AssistantID`) VALUES
(1, 'RPT001', '2023-05-15', 'Normal test results', 1),
(2, 'RPT002', '2023-05-16', 'Abnormal test results', 2),
(3, 'RPT003', '2023-05-17', 'Test results pending analysis', 3),
(4, 'RPT004', '2023-05-18', 'Normal test results', 4),
(5, 'RPT005', '2023-05-19', 'Abnormal test results', 5);

-- --------------------------------------------------------

--
-- Table structure for table `labassistant`
--

CREATE TABLE `labassistant` (
  `AssistantID` int(6) NOT NULL,
  `Username` varchar(25) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Fname` varchar(25) DEFAULT NULL,
  `Lname` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `labassistant`
--

INSERT INTO `labassistant` (`AssistantID`, `Username`, `Password`, `Fname`, `Lname`) VALUES
(1, 'labass1', 'Password%1', 'James', 'Smith'),
(2, 'labass2', 'Password%2', 'Emma', 'Johnson'),
(3, 'labass3', 'Password%3', 'William', 'Brown'),
(4, 'labass4', 'Password%4', 'Olivia', 'Davis'),
(5, 'labass5', 'Password%5', 'Sophia', 'Wilson');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(6) NOT NULL,
  `Amount` int(6) DEFAULT NULL,
  `Payment_Method` varchar(25) DEFAULT NULL,
  `PaymentDate` date DEFAULT NULL,
  `UserID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `Amount`, `Payment_Method`, `PaymentDate`, `UserID`) VALUES
(1, 25000, 'Credit Card', '2023-05-15', 1),
(2, 50000, 'Debit Card', '2023-05-16', 2),
(3, 40000, 'Cash', '2023-05-17', 3),
(4, 30000, 'PayPal', '2023-05-18', 4),
(5, 75000, 'Credit Card', '2023-05-19', 5);

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE `reg_user` (
  `UserID` int(6) NOT NULL,
  `Username` varchar(25) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Fname` varchar(25) DEFAULT NULL,
  `Lname` varchar(25) DEFAULT NULL,
  `AddressNo` varchar(10) DEFAULT NULL,
  `Lane` varchar(100) DEFAULT NULL,
  `Town` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `ContactNo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`UserID`, `Username`, `Password`, `Fname`, `Lname`, `AddressNo`, `Lane`, `Town`, `Email`, `Gender`, `DOB`, `ContactNo`) VALUES
(1, 'user1', 'Password%1', 'John', 'Doe', '123', 'Main Street', 'Ward Place', 'john.doe@example.com', 'Male', '1990-01-01', 713485970),
(2, 'user2', 'Password%2', 'Jane', 'Smith', '456', 'Elm Avenue', 'Kandy', 'jane.smith@example.com', 'Female', '1985-05-10', 728047893),
(3, 'user3', 'Password%3', 'Michael', 'Johnson', '789', 'Oak Drive', ' Nugegoda', 'michael.j@example.com', 'Male', '1995-07-15', 774739604),
(4, 'user4', 'Password%4', 'Emily', 'Davis', '111', 'Maple Lane', 'Jaffna', 'emily.davis@example.com', 'Female', '1988-11-20', 783050768),
(5, 'user5', 'Password%5', 'David', 'Brown', '222', 'Pine Street', 'Ratnapura', 'david.b@example.com', 'Male', '1992-03-05', 759508704);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `dietplan`
--
ALTER TABLE `dietplan`
  ADD PRIMARY KEY (`PlanID`),
  ADD KEY `WorkoutPlan_fk1` (`UserID`);

--
-- Indexes for table `healthcheckorder`
--
ALTER TABLE `healthcheckorder`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `HealthCheckOrder_fk1` (`UserID`),
  ADD KEY `HealthCheckOrder_fk2` (`PackageID`),
  ADD KEY `HealthCheckOrder_fk3` (`PaymentID`);

--
-- Indexes for table `healthcheck_package`
--
ALTER TABLE `healthcheck_package`
  ADD PRIMARY KEY (`PackageID`);

--
-- Indexes for table `healthcheck_resultsreport`
--
ALTER TABLE `healthcheck_resultsreport`
  ADD PRIMARY KEY (`OrderID`,`ReportID`),
  ADD KEY `HealthCheck_ResultsReport_fk2` (`AssistantID`);

--
-- Indexes for table `labassistant`
--
ALTER TABLE `labassistant`
  ADD PRIMARY KEY (`AssistantID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `Payment_fk1` (`UserID`);

--
-- Indexes for table `reg_user`
--
ALTER TABLE `reg_user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dietplan`
--
ALTER TABLE `dietplan`
  MODIFY `PlanID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `healthcheckorder`
--
ALTER TABLE `healthcheckorder`
  MODIFY `OrderID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `healthcheck_package`
--
ALTER TABLE `healthcheck_package`
  MODIFY `PackageID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `labassistant`
--
ALTER TABLE `labassistant`
  MODIFY `AssistantID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `UserID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dietplan`
--
ALTER TABLE `dietplan`
  ADD CONSTRAINT `WorkoutPlan_fk1` FOREIGN KEY (`UserID`) REFERENCES `reg_user` (`UserID`);

--
-- Constraints for table `healthcheckorder`
--
ALTER TABLE `healthcheckorder`
  ADD CONSTRAINT `HealthCheckOrder_fk1` FOREIGN KEY (`UserID`) REFERENCES `reg_user` (`UserID`),
  ADD CONSTRAINT `HealthCheckOrder_fk2` FOREIGN KEY (`PackageID`) REFERENCES `healthcheck_package` (`PackageID`),
  ADD CONSTRAINT `HealthCheckOrder_fk3` FOREIGN KEY (`PaymentID`) REFERENCES `payment` (`PaymentID`);

--
-- Constraints for table `healthcheck_resultsreport`
--
ALTER TABLE `healthcheck_resultsreport`
  ADD CONSTRAINT `HealthCheck_ResultsReport_fk1` FOREIGN KEY (`OrderID`) REFERENCES `healthcheckorder` (`OrderID`),
  ADD CONSTRAINT `HealthCheck_ResultsReport_fk2` FOREIGN KEY (`AssistantID`) REFERENCES `labassistant` (`AssistantID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `Payment_fk1` FOREIGN KEY (`UserID`) REFERENCES `reg_user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
