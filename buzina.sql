-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 10:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buzina`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit_employees`
--

CREATE TABLE `audit_employees` (
  `id` int(11) NOT NULL,
  `employees_name` varchar(200) NOT NULL,
  `action_performed` varchar(400) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_employees`
--

INSERT INTO `audit_employees` (`id`, `employees_name`, `action_performed`, `date_added`) VALUES
(1, 'mwangi joyce mulama', 'Inserted a new employee', '2019-11-13 20:35:33'),
(2, 'nancy', 'Inserted a new employee', '2019-11-13 20:37:13'),
(3, 'nancy', 'Deleted a employee', '2019-11-13 20:46:58'),
(4, 'mwangi joyce mulama', 'updated an employee', '2019-11-13 21:17:50'),
(5, 'Brain ouma', 'Deleted a employee', '2019-11-14 08:01:59'),
(6, 'kiute', 'Inserted a new employee', '2019-11-14 08:20:22'),
(7, 'jackson', 'Inserted a new employee', '2019-11-28 11:47:39'),
(8, 'jackson', 'Deleted a employee', '2019-11-28 11:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(20) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `grade` int(50) NOT NULL,
  `salesman_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `cust_name`, `city`, `grade`, `salesman_id`) VALUES
('3001', 'Brad Guzan', 'London', 200, '5005'),
('3002', 'NickRimando', 'New York', 100, '500'),
('3003', 'Jozy Altidor', 'Moscow ', 200, '5007'),
('3004', 'Fabian Johnson', 'Paris', 300, '5006'),
('3005', 'Graham Zusi', 'California', 200, '5002'),
('3007', ' Brad Davis', 'New York', 200, '5001'),
('3008', 'Julian Green', 'London', 300, '5002'),
('3009', 'Geoff Cameron', ' Berlin', 100, ' 5003');

-- --------------------------------------------------------

--
-- Stand-in structure for view `customer_vs_saleman`
-- (See below for the actual view)
--
CREATE TABLE `customer_vs_saleman` (
`name` varchar(20)
,`customer_id` varchar(20)
,`cust_name` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `salary`) VALUES
(3, 'mwangi joyce', '12 kisumu', 100000),
(4, 'alice kamande', '34 mombasa', 80000),
(5, 'Brain ouma', '500 busia', 50000),
(6, 'edward mukami', '55 embu', 80000),
(8, 'jacton mulagi', '500 nairobi', 16000),
(9, 'mwangi alicia', '500 mombasa', 8000000),
(10, 'kiute', '225646', 130000);

--
-- Triggers `employees`
--
DELIMITER $$
CREATE TRIGGER `after_employee_edit` AFTER UPDATE ON `employees` FOR EACH ROW INSERT INTO audit_employees SET action_performed = 'updated an employee', employees_name = OLD.name
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_employees_delete` AFTER DELETE ON `employees` FOR EACH ROW INSERT INTO audit_employees
    SET action_performed  = 'Deleted a employee',
    employees_name      =  OLD.name
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_employees_insert` BEFORE INSERT ON `employees` FOR EACH ROW INSERT INTO audit_employees
    SET action_performed  = 'Inserted a new employee',
    employees_name       =  new.name
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `emp_department`
--

CREATE TABLE `emp_department` (
  `Dpt_Code` varchar(20) NOT NULL,
  `DPT_NAME` decimal(20,0) NOT NULL,
  `DPT_ALLOTMENT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_department`
--

INSERT INTO `emp_department` (`Dpt_Code`, `DPT_NAME`, `DPT_ALLOTMENT`) VALUES
(' 47', '0', '240000'),
(' 63', '0', '15000'),
('27', '0', '55000'),
('57', '0', '65000'),
('89', '0', '75000');

-- --------------------------------------------------------

--
-- Table structure for table `item_mast`
--

CREATE TABLE `item_mast` (
  `Pro_Id` varchar(20) NOT NULL,
  `PRO_NAME` varchar(50) NOT NULL,
  `PRO_PRICE` double NOT NULL,
  `PRO_COM` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_mast`
--

INSERT INTO `item_mast` (`Pro_Id`, `PRO_NAME`, `PRO_PRICE`, `PRO_COM`) VALUES
(' 106', 'DVD drive ', 900, 12),
('101', 'Mother Board', 3200, 15),
('102', 'Key Board', 450, 16),
('103', 'ZIP drive', 250, 14),
('104', 'Speaker', 550, 16),
('105', 'Monitor', 5000, 11),
('107', 'CD drive ', 800, 12),
('108', ' Printer', 2600, 13),
('109', ' Refill', 350, 13),
('110', ' Mouse', 250, 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ord_No` varchar(50) NOT NULL,
  `purch_amt` int(11) NOT NULL,
  `ord_date` date NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `salesman_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_No`, `purch_amt`, `ord_date`, `customer_id`, `salesman_id`) VALUES
('70001', 150, '0000-00-00', '3005', '5002'),
('70002', 65, '0000-00-00', '3002', '5001'),
('70003', 2480, '0000-00-00', '3009', '5003'),
('70004', 110, '0000-00-00', '3009', '5003'),
('70008', 5760, '0000-00-00', '3002', '5001'),
('70009', 271, '0000-00-00', '3001', '5005'),
('70010', 1983, '0000-00-00', '3004', '5006'),
('70011', 75, '0000-00-00', '3003', '5007'),
('70012', 250, '0000-00-00', '3008', '5002'),
('70013', 3046, '0000-00-00', '3002', '5001');

-- --------------------------------------------------------

--
-- Table structure for table `salesman`
--

CREATE TABLE `salesman` (
  `Salesman_ID` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `commission` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salesman`
--

INSERT INTO `salesman` (`Salesman_ID`, `name`, `city`, `commission`) VALUES
('5001', 'James Hoog', 'New York', 0.15),
('5002', 'Nail Knite', 'Paris', 0.13),
('5003', 'Lauson Hen', 'San Jose', 0.12),
('5005', 'Pit Alex', 'London', 0.11),
('5006', 'Mc Lyon', 'Paris', 0.14),
('5007', ' Paul Adam', 'Rome', 0.13);

-- --------------------------------------------------------

--
-- Stand-in structure for view `salesman_details`
-- (See below for the actual view)
--
CREATE TABLE `salesman_details` (
`salesman_ID` varchar(20)
,`Name` varchar(20)
,`city` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(2, 'jacton mulagi', 'otingajacton@gmail.c', '0700309590'),
(3, 'mwangi joyce', 'otingajacton@gmail.c', '0700309590'),
(4, 'mwangi joyce', '17g01acs021@anu.ac.k', '00000'),
(5, 'Brain ouma', 'oumabrain@gmail.com', '0700309590'),
(6, 'Dennis', 'DENNIS@GMAIL.COM', 'SAS'),
(7, 'FAITH', 'FAITH@GMAIL.COM', 'DAS'),
(8, 'jackson', 'jdgyjyr8iakduhqwei3', 'gyrhjdo[q3riupy'),
(9, 'jackson', 'jacksonkbui@gmail.co', '1234556'),
(10, 'jackson', 'jacksonkbui@gmail.co', '1234556'),
(11, 'jackson', 'DVHBJNXKML,.', 'HBFDNSKML,;');

-- --------------------------------------------------------

--
-- Structure for view `customer_vs_saleman`
--
DROP TABLE IF EXISTS `customer_vs_saleman`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customer_vs_saleman`  AS  select `salesman`.`name` AS `name`,`customer`.`customer_id` AS `customer_id`,`customer`.`cust_name` AS `cust_name` from (`salesman` join `customer`) ;

-- --------------------------------------------------------

--
-- Structure for view `salesman_details`
--
DROP TABLE IF EXISTS `salesman_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `salesman_details`  AS  select `salesman`.`Salesman_ID` AS `salesman_ID`,`salesman`.`name` AS `Name`,`salesman`.`city` AS `city` from `salesman` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_employees`
--
ALTER TABLE `audit_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `salesman_id` (`salesman_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_department`
--
ALTER TABLE `emp_department`
  ADD PRIMARY KEY (`Dpt_Code`);

--
-- Indexes for table `item_mast`
--
ALTER TABLE `item_mast`
  ADD PRIMARY KEY (`Pro_Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ord_No`);

--
-- Indexes for table `salesman`
--
ALTER TABLE `salesman`
  ADD PRIMARY KEY (`Salesman_ID`),
  ADD KEY `Salesman_ID` (`Salesman_ID`),
  ADD KEY `Salesman_ID_2` (`Salesman_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit_employees`
--
ALTER TABLE `audit_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
