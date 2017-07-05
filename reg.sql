-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2017 at 05:55 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cust_id` int(20) NOT NULL,
  `cust_rank` varchar(50) NOT NULL,
  `cust_fname` varchar(50) NOT NULL,
  `cust_lname` varchar(50) NOT NULL,
  `cust_type` varchar(50) NOT NULL,
  `cust_add1` varchar(50) NOT NULL,
  `cust_add2` varchar(50) NOT NULL,
  `cust_add3` varchar(50) NOT NULL,
  `cust_city` varchar(50) NOT NULL,
  `cust_pin` int(50) NOT NULL,
  `cust_contact` int(50) NOT NULL,
  `cust_mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dispatchdetails`
--

CREATE TABLE `tbl_dispatchdetails` (
  `regid2` int(11) NOT NULL,
  `Item_name` varchar(30) NOT NULL,
  `Item_quantity` int(30) NOT NULL,
  `Dispatch_to` varchar(30) NOT NULL,
  `Dispatch_date` date NOT NULL,
  `Dispatch_address` varchar(60) NOT NULL,
  `Dispatch_medium` varchar(30) NOT NULL,
  `Serial_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dispatchdetails`
--

INSERT INTO `tbl_dispatchdetails` (`regid2`, `Item_name`, `Item_quantity`, `Dispatch_to`, `Dispatch_date`, `Dispatch_address`, `Dispatch_medium`, `Serial_no`) VALUES
(6, 'nbrsn', 0, 'trt', '2017-06-03', 'trwhjyt', '', 'brgtn'),
(7, 'nbrsn', 0, 'trt', '2017-06-03', 'trwhjyt', '', 'brgtn'),
(8, 'q', 2, 'r', '2017-06-09', 'edwfgrew', '', 'fdsbg545'),
(9, 'q', 2, 'r', '2017-06-09', 'edwfgrew', '', 'fdsbg545'),
(10, '', 0, '', '0000-00-00', '', '', ''),
(11, 'rrr', 6, 'ttt', '2017-06-02', 'gtrehyt', '', '4334'),
(12, 'rrr', 8, 'lll', '2017-06-01', 'ktuuijt', 'check', '543y6'),
(13, 'aaa', 5, 'ppp', '2017-06-01', 'grtwege', 'check', '654'),
(14, 'ttt', 7, 'ooo', '2017-06-02', 'eruyt', 'regdparcel', '546');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp_det`
--

CREATE TABLE `tbl_emp_det` (
  `emp_id` int(50) NOT NULL,
  `emp_fname` varchar(25) NOT NULL,
  `emp_lname` varchar(25) NOT NULL,
  `emp_desg` varchar(50) NOT NULL,
  `emp_gender` varchar(6) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_mobile` bigint(10) NOT NULL,
  `emp_doj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_emp_det`
--

INSERT INTO `tbl_emp_det` (`emp_id`, `emp_fname`, `emp_lname`, `emp_desg`, `emp_gender`, `emp_dob`, `emp_mobile`, `emp_doj`) VALUES
(1, 'sumit', 'pal', 'aise', 'M', '0000-00-00', 1234567891, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exhibition_detail`
--

CREATE TABLE `tbl_exhibition_detail` (
  `exbt_id` int(50) NOT NULL,
  `exbt_name` varchar(50) NOT NULL,
  `exbt_venue` varchar(50) NOT NULL,
  `exbt_strt_date` date NOT NULL,
  `exbt_end_date` date NOT NULL,
  `exbt_organiser` varchar(50) NOT NULL,
  `exbt_year` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publication`
--

CREATE TABLE `tbl_publication` (
  `pub_id` int(50) NOT NULL,
  `pub_title` varchar(50) NOT NULL,
  `pub_author` varchar(50) NOT NULL,
  `pub_isbn` varchar(40) NOT NULL,
  `pub_year` int(10) NOT NULL,
  `fk_type_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pub_type`
--

CREATE TABLE `tbl_pub_type` (
  `type_id` int(50) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `discount_rate` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_details`
--

CREATE TABLE `tbl_purchase_details` (
  `purchase_id` int(50) NOT NULL,
  `fk_cust_id` int(50) NOT NULL,
  `fk_pub_id` int(50) NOT NULL,
  `mono_qnty` int(50) NOT NULL,
  `purchase_date` date NOT NULL,
  `fk_user_id` int(50) NOT NULL,
  `fk_fk_type_id` int(50) NOT NULL,
  `fk_exbt_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(50) NOT NULL,
  `fk_emp_id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tbl_dispatchdetails`
--
ALTER TABLE `tbl_dispatchdetails`
  ADD PRIMARY KEY (`regid2`);

--
-- Indexes for table `tbl_emp_det`
--
ALTER TABLE `tbl_emp_det`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `doj` (`emp_doj`);

--
-- Indexes for table `tbl_exhibition_detail`
--
ALTER TABLE `tbl_exhibition_detail`
  ADD PRIMARY KEY (`exbt_id`);

--
-- Indexes for table `tbl_publication`
--
ALTER TABLE `tbl_publication`
  ADD PRIMARY KEY (`pub_id`),
  ADD KEY `fk_type_id_idx` (`fk_type_id`);

--
-- Indexes for table `tbl_pub_type`
--
ALTER TABLE `tbl_pub_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_purchase_details`
--
ALTER TABLE `tbl_purchase_details`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `fk_cust_id_idx` (`fk_cust_id`),
  ADD KEY `fk_pub_id_idx` (`fk_pub_id`),
  ADD KEY `fk_user_id_idx` (`fk_user_id`),
  ADD KEY `fk_fk_type_id_idx` (`fk_fk_type_id`),
  ADD KEY `fk_exbt_id_idx` (`fk_exbt_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_emp_id_idx` (`fk_emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cust_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_dispatchdetails`
--
ALTER TABLE `tbl_dispatchdetails`
  MODIFY `regid2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_emp_det`
--
ALTER TABLE `tbl_emp_det`
  MODIFY `emp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_exhibition_detail`
--
ALTER TABLE `tbl_exhibition_detail`
  MODIFY `exbt_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_publication`
--
ALTER TABLE `tbl_publication`
  MODIFY `pub_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pub_type`
--
ALTER TABLE `tbl_pub_type`
  MODIFY `type_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_purchase_details`
--
ALTER TABLE `tbl_purchase_details`
  MODIFY `purchase_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_publication`
--
ALTER TABLE `tbl_publication`
  ADD CONSTRAINT `fk_type_id` FOREIGN KEY (`fk_type_id`) REFERENCES `tbl_pub_type` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_purchase_details`
--
ALTER TABLE `tbl_purchase_details`
  ADD CONSTRAINT `fk_cust_id` FOREIGN KEY (`fk_cust_id`) REFERENCES `tbl_customer` (`cust_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_exbt_id` FOREIGN KEY (`fk_exbt_id`) REFERENCES `tbl_exhibition_detail` (`exbt_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fk_type_id` FOREIGN KEY (`fk_fk_type_id`) REFERENCES `tbl_pub_type` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pub_id` FOREIGN KEY (`fk_pub_id`) REFERENCES `tbl_publication` (`pub_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`fk_user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_emp_id` FOREIGN KEY (`fk_emp_id`) REFERENCES `tbl_emp_det` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
