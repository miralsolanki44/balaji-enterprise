-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 05:28 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(70) NOT NULL,
  `a_desc` varchar(500) NOT NULL,
  `a_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`a_id`, `a_name`, `a_desc`, `a_img`) VALUES
(1, 'abc', 'njn', 'images/18.jpg'),
(2, 'sdnn', 'denfcndsnm', 'images/19.jpg'),
(3, 'nfdjn', 'mdfmksdmfksm', 'images/b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `u_name`, `u_pass`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_nm` varchar(20) NOT NULL,
  `f_email` varchar(20) NOT NULL,
  `f_contact` varchar(20) NOT NULL,
  `f_message` longtext NOT NULL,
  `f_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_nm`, `f_email`, `f_contact`, `f_message`, `f_date`) VALUES
(36, 'Raj', 'raj@gmail.com', '9876543120', 'sdlfnjskdf', '2018-07-26'),
(39, 'uidsuifds', 'dc@gmail.com', '5364635', 'hwduhudijdsdkd', '2018-07-26'),
(40, '', '', '', '', '2018-09-13'),
(41, 'aaliya', 'aaliya@gmail.com', '51526223', 'c,d,l,ckmckmsá¹£', '2018-09-13'),
(42, 'midxs', 'cnjdm34@gmail.com', '', 'cmd,.s,', '2018-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_decs` varchar(60) NOT NULL,
  `p_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_decs`, `p_img`) VALUES
(2, 'Shaving mandril', 'kl', 'images/IMG-20180828-WA0003.jpg'),
(3, 'Jelly shaving mandril ', 'grinding and turning', 'images/13.jpg'),
(5, 'berring con', 'jo type an d bering con turning.', 'images/IMG-20180701-WA0006.jpg'),
(15, 'Hobbing fixture', 'SKJDcjkzxc\r\nbalaji', 'images/IMG-20180828-WA0007.jpg'),
(16, 'cnc turning collate', ';lxmckmn', 'images/IMG-20180828-WA0002.jpg'),
(17, 'hydraulic shaping fixture', 'jkj', 'images/IMG-20180828-WA0009.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(20) NOT NULL,
  `u_lname` varchar(20) NOT NULL,
  `u_gen` varchar(6) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_mno` varchar(10) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`u_id`, `u_fname`, `u_lname`, `u_gen`, `u_email`, `u_mno`, `u_pass`, `u_date`) VALUES
(1, 'a', 'b', 'female', 'miral@gmail.com', '12345678', '123456', '2018-08-10 15:48:19'),
(3, 'janvi', 'solanki', '', 'janvi@gmail.com', '9824759325', '12345678', '2018-08-10 16:07:46'),
(4, 'mahi', 'sharma', '', 'mahi@gmail.com', '956245635', '224234', '2018-08-13 07:09:02'),
(6, '', '123456', 'female', '', '566565655', '', '2018-08-16 14:44:09'),
(7, '', 'mehta', 'female', '', 'f', '224234', '2018-08-20 05:10:18'),
(8, '', 'masnx', 'male', '', '+36', '224234', '2018-08-20 05:13:41'),
(9, '', 'masnx', 'male', '', '5695+6', '1234589', '2018-08-20 05:13:48'),
(15, 'mital', 'sharma', 'female', 'mital@gmail.com', '15656565', '12345678', '2018-08-22 07:56:19'),
(16, 'fdfddf', 'dfdsfdf', '', 'sdfsd', '32232e', 'dfsfsdf', '2018-09-14 12:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `v_id` int(11) NOT NULL,
  `v_nm` varchar(60) NOT NULL,
  `v_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`v_id`, `v_nm`, `v_video`) VALUES
(29, 'abc', 'video/VID-20180907-WA0005-1.mp4'),
(36, 'bb', 'video/VID-20180914-WA0062.mp4'),
(37, 'cc', 'video/VID-20180914-WA0058.mp4'),
(38, 'dd', 'video/VID-20180914-WA0069.mp4'),
(39, 'ee', 'video/VID-20180914-WA0056.mp4'),
(40, 'fff', 'video/VID-20180914-WA0055.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
