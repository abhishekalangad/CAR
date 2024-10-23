-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2023 at 12:15 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookcar`
--

DROP TABLE IF EXISTS `bookcar`;
CREATE TABLE IF NOT EXISTS `bookcar` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `bo_id` int(3) NOT NULL,
  `br_id` int(3) NOT NULL,
  `b_day1` varchar(100) NOT NULL,
  `b_day2` varchar(40) NOT NULL,
  `b_status` varchar(20) NOT NULL,
  `payment` int(11) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookcar`
--

INSERT INTO `bookcar` (`b_id`, `bo_id`, `br_id`, `b_day1`, `b_day2`, `b_status`, `payment`) VALUES
(1, 5, 7, '2023-02-16', '2023-02-19', 'confirmed', 4500),
(2, 5, 7, '2023-02-16', '2023-03-03', 'confirmed', 22500),
(4, 5, 7, '2023-02-15', '2023-02-18', 'confirmed', 4500),
(5, 7, 7, '2023-02-17', '2023-02-24', 'confirmed', 10500),
(6, 7, 15, '2023-02-17', '2023-03-03', 'Booked', NULL),
(7, 5, 7, '2023-02-16', '2023-02-17', 'confirmed', 1500),
(8, 7, 7, '2023-02-09', '2023-03-03', 'confirmed', 33000),
(9, 5, 7, '2023-03-01', '2023-03-04', 'confirmed', 4500),
(10, 8, 7, '2023-02-26', '2023-02-28', 'confirmed', 3000),
(11, 13, 7, '2023-02-24', '2023-02-26', 'confirmed', 3000),
(12, 18, 18, '2023-02-20', '2023-02-20', 'confirmed', 0),
(13, 5, 23, '2023-03-21', '2023-03-22', 'confirmed', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookdriver`
--

DROP TABLE IF EXISTS `bookdriver`;
CREATE TABLE IF NOT EXISTS `bookdriver` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `dr_id` int(10) NOT NULL,
  `dd_id` int(10) NOT NULL,
  `d_day1` varchar(50) NOT NULL,
  `d_day2` varchar(50) NOT NULL,
  `d_status` varchar(50) NOT NULL,
  `payment` int(11) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdriver`
--

INSERT INTO `bookdriver` (`d_id`, `dr_id`, `dd_id`, `d_day1`, `d_day2`, `d_status`, `payment`) VALUES
(1, 5, 6, '2023-02-15', '2023-02-25', 'confirmed', 8000),
(2, 7, 10, '2023-03-09', '2023-02-23', 'confirmed', 8400),
(3, 8, 9, '2023-03-11', '2023-03-12', 'confirmed', 750),
(4, 8, 9, '2023-03-11', '2023-03-12', 'confirmed', NULL),
(5, 18, 10, '2023-02-24', '2023-02-24', 'confirmed', 0),
(6, 23, 24, '2023-03-10', '2023-03-11', 'confirmed', 200),
(10, 23, 24, '2023-03-21', '2023-03-22', 'confirmed', 200),
(13, 23, 6, '2023-03-22', '2023-03-23', 'confirmed', 800),
(12, 23, 6, '2023-03-21', '2023-03-21', 'confirmed', 0),
(14, 23, 6, '2023-03-21', '2023-03-22', 'confirmed', 800),
(15, 23, 24, '2023-03-22', '2023-03-23', 'confirmed', 200);

-- --------------------------------------------------------

--
-- Table structure for table `bookservice`
--

DROP TABLE IF EXISTS `bookservice`;
CREATE TABLE IF NOT EXISTS `bookservice` (
  `b_id` int(5) NOT NULL AUTO_INCREMENT,
  `br_id` int(5) NOT NULL,
  `bs_id` int(5) NOT NULL,
  `b_date` varchar(30) NOT NULL,
  `b_status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`b_id`),
  UNIQUE KEY `b_status` (`b_date`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookservice`
--

INSERT INTO `bookservice` (`b_id`, `br_id`, `bs_id`, `b_date`, `b_status`) VALUES
(8, 23, 1, '2023-03-21', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `bservice`
--

DROP TABLE IF EXISTS `bservice`;
CREATE TABLE IF NOT EXISTS `bservice` (
  `cs_id` int(10) NOT NULL AUTO_INCREMENT,
  `cs_date` varchar(100) NOT NULL,
  `cs_uid` int(10) NOT NULL,
  `cs_cid` int(10) NOT NULL,
  `cs_ureview` varchar(100) NOT NULL,
  `cs_edate` varchar(20) DEFAULT NULL,
  `cs_ereview` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bservice`
--

INSERT INTO `bservice` (`cs_id`, `cs_date`, `cs_uid`, `cs_cid`, `cs_ureview`, `cs_edate`, `cs_ereview`) VALUES
(1, '2023-02-17', 5, 4, 'full body checkup', '2023-02-25', 'done'),
(2, '2023-02-17', 7, 12, 'full checkup', '2023-02-24', 'selected '),
(3, '2023-03-10', 8, 12, 'nhf', '2023-02-24', 'it will take  around 1 week'),
(4, '2023-02-24', 5, 12, 'latest', '2023-03-03', 'hgcgvhv'),
(5, '2023-03-21', 23, 21, 'abc', '2023-03-21', 'abc'),
(6, '2023-03-21', 23, 4, 'asdfghj', '2023-03-21', 'jhgftr');

-- --------------------------------------------------------

--
-- Table structure for table `drating`
--

DROP TABLE IF EXISTS `drating`;
CREATE TABLE IF NOT EXISTS `drating` (
  `re_id` int(3) NOT NULL AUTO_INCREMENT,
  `rating` text NOT NULL,
  `review` text NOT NULL,
  `i_id` int(3) NOT NULL,
  `ld_id` int(3) NOT NULL,
  PRIMARY KEY (`re_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drating`
--

INSERT INTO `drating` (`re_id`, `rating`, `review`, `i_id`, `ld_id`) VALUES
(1, '5', 'hchvj', 5, 6),
(2, '5', 'ujhvyuv', 5, 9),
(3, '5', 'fsgfdf', 7, 6),
(4, '5', '', 18, 9);

-- --------------------------------------------------------

--
-- Table structure for table `driver_reg`
--

DROP TABLE IF EXISTS `driver_reg`;
CREATE TABLE IF NOT EXISTS `driver_reg` (
  `d_id` int(50) NOT NULL AUTO_INCREMENT,
  `dl_id` int(50) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_email` varchar(50) NOT NULL,
  `d_password` varchar(50) NOT NULL,
  `d_address` varchar(100) NOT NULL,
  `d_pincode` int(6) NOT NULL,
  `d_phone` varchar(100) NOT NULL,
  `d_licence` varchar(150) NOT NULL,
  `d_proof` varchar(150) NOT NULL,
  `d_amount` int(100) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_reg`
--

INSERT INTO `driver_reg` (`d_id`, `dl_id`, `d_name`, `d_email`, `d_password`, `d_address`, `d_pincode`, `d_phone`, `d_licence`, `d_proof`, `d_amount`) VALUES
(1, 6, 'driver1', 'driver1@gmail.com', 'driver1123', 'rsfffc', 680503, '6567878987', 'licence.jfif', 'th.jfif', 800),
(2, 9, 'driver2', 'driver2@gmail.com', 'driver2123', 'ytfyfjvy', 680506, '2345673456', 'licence.jfif', 'driverii.jfif', 750),
(3, 10, 'driver3', 'driver3@gmail.com', 'driver3123', 'tdyfuvv', 680507, '5678865345', 'licence 2.jfif', 'driverii.jfif', 600),
(4, 20, 'Abhi', 'driver@gmail.com', '123', 'Palakkad', 678633, '1234567890', 'licence.jpeg', 't3.jpg', 1200),
(5, 24, 'Abhishek.k', 'abhishekalangad@gmail.com', '0123', 'Kulangara,Alangad,Katampazhipuram,Alangad.P.O,678633,Palakkad', 678633, '8606243568', '', '', 200);

-- --------------------------------------------------------

--
-- Table structure for table `emp_reg`
--

DROP TABLE IF EXISTS `emp_reg`;
CREATE TABLE IF NOT EXISTS `emp_reg` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `el_id` int(11) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_email` varchar(100) NOT NULL,
  `e_password` varchar(100) NOT NULL,
  `e_address` varchar(100) NOT NULL,
  `e_pincode` varchar(100) NOT NULL,
  `e_phone` varchar(100) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_reg`
--

INSERT INTO `emp_reg` (`e_id`, `el_id`, `e_name`, `e_email`, `e_password`, `e_address`, `e_pincode`, `e_phone`) VALUES
(1, 2, 'employee 1', 'employee1@gmail.com', 'eployee123', 'thrissur \r\nP O thrissur\r\n680500', '680500', '1233211243'),
(2, 19, 'Alan1', 'employee@gmail.com', '123', 'Kulangara,Alangad,Katampazhipuram,Alangad.P.O,678633,Palakkad1', '678631', '8606243561');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `l_id` int(50) NOT NULL AUTO_INCREMENT,
  `l_uname` varchar(50) NOT NULL,
  `l_password` varchar(50) NOT NULL,
  `l_type` varchar(50) NOT NULL,
  `l_approve` varchar(50) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `l_uname`, `l_password`, `l_type`, `l_approve`) VALUES
(1, 'admin@gmail.com', '123', 'admin', 'approve'),
(2, 'employee1@gmail.com', 'eployee123', 'employe', 'approve'),
(5, 'user1@gmail.com', 'user1123', 'user', 'approve'),
(4, 'service1@gmail.com', 'service1123', 'service center', 'approve'),
(6, 'driver1@gmail.com', 'driver1123', 'driver', 'approve'),
(7, 'user2@gmail.com', 'user2123', 'user', 'approve'),
(8, 'user3@gmail.com', 'user3123', 'user', 'approve'),
(9, 'driver2@gmail.com', 'driver2123', 'driver', 'approve'),
(10, 'driver3@gmail.com', 'driver3123', 'driver', 'approve'),
(11, 'service2@gmail.com', 'service2123', 'service center', 'approve'),
(12, 'service3@gmail.com', 'service3123', 'service center', 'approve'),
(21, 'abhishekalangad@gmail.com', '123', 'service center', 'approve'),
(20, 'driver@gmail.com', '123', 'driver', 'approve'),
(19, 'employee@gmail.com', '123', 'employe', 'approve'),
(18, 'abhishekalangad@gmail.com', '123', 'user', 'approve'),
(22, 'user@gmail.com', '123', 'user', 'approve'),
(23, 'abhishekalangad@gmail.com', '1234', 'user', 'approve'),
(24, 'abhishekalangad@gmail.com', '0123', 'driver', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `re_id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` int(11) DEFAULT NULL,
  `review` text,
  `l_id` int(11) DEFAULT NULL,
  `ur_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`re_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`re_id`, `rating`, `review`, `l_id`, `ur_id`) VALUES
(3, 1, 'fsgfdf', 5, 5),
(4, 4, 'c adbcj', 5, 2),
(5, 4, 'good service from your side', 5, 2),
(6, 3, 'qwerty', 7, 5),
(7, 5, '', 18, 2),
(8, 5, 'super confort', 23, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

DROP TABLE IF EXISTS `rent`;
CREATE TABLE IF NOT EXISTS `rent` (
  `r_id` int(50) NOT NULL AUTO_INCREMENT,
  `rl_id` int(50) NOT NULL,
  `r_company` varchar(100) NOT NULL,
  `r_mname` varchar(100) NOT NULL,
  `r_year` varchar(100) NOT NULL,
  `r_number` varchar(100) NOT NULL,
  `r_amt` int(11) DEFAULT NULL,
  `r_addinfo` varchar(100) NOT NULL,
  `r_custatus` varchar(250) NOT NULL,
  `r_acchistory` varchar(250) NOT NULL,
  `r_car` varchar(250) NOT NULL,
  `r_tax` varchar(250) NOT NULL,
  `r_insurance` varchar(250) NOT NULL,
  `r_polution` varchar(250) NOT NULL,
  `r_ppkm` varchar(100) NOT NULL,
  `r_status` varchar(50) NOT NULL DEFAULT '0',
  `r_seat` int(20) NOT NULL,
  `r_pincode` int(6) NOT NULL,
  `r_phone` bigint(10) NOT NULL,
  `rent_amt` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`r_id`, `rl_id`, `r_company`, `r_mname`, `r_year`, `r_number`, `r_amt`, `r_addinfo`, `r_custatus`, `r_acchistory`, `r_car`, `r_tax`, `r_insurance`, `r_polution`, `r_ppkm`, `r_status`, `r_seat`, `r_pincode`, `r_phone`, `rent_amt`) VALUES
(1, 5, 'tata', 'indica', '2016', '7907428411', NULL, 'good', 'good', 'none', 'th.jfif', 'licence 2.jfif', 'licence.jfif', 'Emission1.JPG', '50', 'approved', 5, 678633, 9846118844, 700),
(2, 7, 'suzuki', 'gimny', '2022', '7907428411', NULL, 'good', 'good', 'good', 'Large-4282-NewJimny.webp', 'maxresdefault (1).jpg', 'insurance.jfif', 'Emission1.JPG', '40', 'approved', 6, 678636, 4564564565, 1500),
(3, 13, 'tata', 'nexon', '2002', '7907428411', NULL, 'good', 'good', 'good', 'Large-4282-NewJimny.webp', 'Large-4282-NewJimny.webp', 'Large-4282-NewJimny.webp', 'Large-4282-NewJimny.webp', '50', 'approved', 5, 678633, 9865538968, 700),
(4, 14, 'audi', 'q2', '2016', '160', NULL, 'gfdgdfgd', 'hgdfghgh', 'hgfhghgh', 'center.jfif', 'center.jfif', 'center.jfif', 'center.jfif', '56', 'approved', 5, 678630, 3455565656, 555),
(5, 15, 'suzuki', 'zedire', '2021', '20', NULL, 'hgvkjb', 'fvfdv', 'fvvfd', 'th.jfif', 'licence.jfif', 'licence.jfif', 'licence.jfif', '50', 'approved', 6, 678632, 7867668888, 1500),
(6, 16, 'ety54', 'fbfd', 'gvfdg', '9846118844', NULL, 'good', 'good', 'good', 'Large-4282-NewJimny.webp', 'Large-4282-NewJimny.webp', 'Large-4282-NewJimny.webp', 'Large-4282-NewJimny.webp', '56', 'approved', 6, 678644, 4565434565, 1500),
(7, 18, 'Ambasedor', 'new', '1988', 'kL-51-A1234', NULL, '', 'good', 'no', 'car pic 2.jfif', 'RC Book.jpg', 'insurence certificate.png', 'pollution certificate.jpeg', '30', 'approved', 5, 678633, 1234567890, 800),
(8, 23, 'Thar', 'new', '1988', 'kL-51-A1233', NULL, 'qwertyui', 'qwertyu', 'no', '2314.jpg', 'insurance.jfif', 'insurence certificate.png', 'Emission1.JPG', '30', 'approved', 4, 678633, 8606243568, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

DROP TABLE IF EXISTS `service_details`;
CREATE TABLE IF NOT EXISTS `service_details` (
  `se_id` int(50) NOT NULL AUTO_INCREMENT,
  `sel_id` int(50) NOT NULL,
  `se_name` varchar(100) NOT NULL,
  `se_details` varchar(100) NOT NULL,
  `se_price` varchar(50) NOT NULL,
  PRIMARY KEY (`se_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`se_id`, `sel_id`, `se_name`, `se_details`, `se_price`) VALUES
(1, 4, 'full wash', 'full washing', '800'),
(2, 4, 'full repair', 'dghcghhg', '3000'),
(3, 4, 'tyre checking', 'full tyre checking', '500'),
(4, 11, 'Worn Brake Pads', 'Worn Brake Pads', '500'),
(5, 11, 'Excessive Oil Consumption', 'Excessive Oil Consumption', '970'),
(6, 11, 'Malfunctioning Sensors', 'Malfunctioning Sensors', '1000'),
(7, 12, 'INTERIM CAR SERVICE', 'INTERIM CAR SERVICE\r\n', '800'),
(8, 12, 'Emission System', 'Emission System\r\n', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `service_reg`
--

DROP TABLE IF EXISTS `service_reg`;
CREATE TABLE IF NOT EXISTS `service_reg` (
  `s_id` int(50) NOT NULL AUTO_INCREMENT,
  `sl_id` varchar(50) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_password` varchar(50) NOT NULL,
  `s_address` varchar(100) NOT NULL,
  `s_phone` varchar(10) NOT NULL,
  `s_pincode` varchar(6) NOT NULL,
  `s_licence` varchar(100) NOT NULL,
  `s_rc` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_reg`
--

INSERT INTO `service_reg` (`s_id`, `sl_id`, `s_name`, `s_email`, `s_password`, `s_address`, `s_phone`, `s_pincode`, `s_licence`, `s_rc`) VALUES
(1, '4', 'service center1', 'service1@gmail.com', 'service1123', 'sdfghj456', '9606765456', '678633', 'licence.jfif', 'th.jfif'),
(2, '11', 'service center2', 'service2@gmail.com', 'service2123', '345674', '4646675765', '680508', 'licence 2.jfif', 'center.jfif'),
(3, '12', 'service3', 'service3@gmail.com', 'service3123', 'gchgchgvhjv', '3456788765', '680509', 'licence 2.jfif', 'th.jfif'),
(4, '21', 'service', 'service@gmail.com', '123', 'Palakkad', '7896541230', '678633', 'Emission1.JPG', 'maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `srating`
--

DROP TABLE IF EXISTS `srating`;
CREATE TABLE IF NOT EXISTS `srating` (
  `se_id` int(3) NOT NULL AUTO_INCREMENT,
  `rating` text NOT NULL,
  `review` text NOT NULL,
  `u_id` int(3) NOT NULL,
  `sl_id` int(3) NOT NULL,
  PRIMARY KEY (`se_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `srating`
--

INSERT INTO `srating` (`se_id`, `rating`, `review`, `u_id`, `sl_id`) VALUES
(1, '5', 'jhvuyfuy', 5, 4),
(2, '4', 'vvyuv', 5, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

DROP TABLE IF EXISTS `user_reg`;
CREATE TABLE IF NOT EXISTS `user_reg` (
  `u_id` int(50) NOT NULL AUTO_INCREMENT,
  `ul_id` int(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `u_pincode` int(6) NOT NULL,
  `u_phone` varchar(11) NOT NULL,
  `u_licence` varchar(100) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`u_id`, `ul_id`, `u_name`, `u_email`, `u_password`, `u_address`, `u_pincode`, `u_phone`, `u_licence`) VALUES
(1, 5, 'user1', 'user1@gmail.com', '123', 'user \r\n', 680502, '3456783456', 'licence.jfif'),
(2, 7, 'user2', 'user2@gmail.com', '123', 'uyfyuvhjvh', 680504, '6785434566', 'licence 2.jfif'),
(3, 8, 'user3', 'user3@gmail.com', '123', 'dgcjhvjhv', 680505, '6758787698', 'licence 2.jfif'),
(11, 23, 'Abhishek k', 'abhishekalangad@gmail.com', '1234', 'Kulangara,Alangad,Katampazhipuram,Alangad.P.O,678633,Palakkad', 678633, '8606243568', ''),
(9, 18, 'Abhishek ', 'abhishekalangad@gmail.com', '1234', 'Thrissur', 678633, '1234567890', 'team2.jpg'),
(10, 22, 'Abhishek.k', 'user@gmail.com', '123', 'Kulangara,Alangad,Katampazhipuram,Alangad.P.O,678633,Palakkad', 678633, '8606243568', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
