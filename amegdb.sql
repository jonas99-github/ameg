-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 02:47 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amegdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(17, 'Masonry: Bricks'),
(18, 'Masonry: Stone'),
(23, 'Wood Finishing Materials'),
(24, 'Roofs'),
(25, 'Ceilings'),
(26, 'Floors'),
(27, 'Walls'),
(28, 'House Painting'),
(29, 'Electrical Systems'),
(30, 'Doors'),
(31, 'Mosaic Protection'),
(32, 'Steel Frames');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `ledger_id` int(100) NOT NULL,
  `date_arrival` varchar(100) NOT NULL,
  `del_order` varchar(100) NOT NULL,
  `po_number` varchar(200) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`ledger_id`, `date_arrival`, `del_order`, `po_number`, `supplier`, `project_name`, `total`) VALUES
(48, '05/22/2019 08:22:50: am', '124', 'PO-24062926', 'Doors Materials Supplier', 'Project Site A', 5325),
(49, '05/22/2019 08:24:16: am', '453535434', 'PO-334222', 'Mosaic Protection', 'Project Site A', 8800),
(50, '05/22/2019 09:10:30: am', '1242', 'PO-33536', 'Electrical Systems Supplier', 'Project Site A', 1600),
(51, '05/22/2019 09:13:52: am', '423423', 'PO-036332', 'Mosaic Protection', 'Project Site A', 4800),
(52, '05/22/2019 09:21:40: am', '342', 'PO-0222433', 'House Painting', 'Project Site A', 1500),
(53, '05/22/2019 09:22:43: am', '555', 'PO-530300', 'Doors Materials Supplier', 'Project Site A', 4800),
(54, '05/22/2019 09:23:19: am', '234', 'PO-323020', 'Mosaic Protection', 'Project Site A', 1150),
(55, '05/22/2019 09:31:30: am', '1112', 'PO-0220723', 'Doors Materials Supplier', 'Project Site A', 275),
(56, '05/22/2019 09:33:21: am', '213123', 'PO-3223067', 'Doors Materials Supplier', 'Project Site A', 600),
(57, '05/22/2019 09:36:10: am', '2552', 'PO-23722302', 'Mosaic Protection', 'Project Site A', 4800),
(58, '05/22/2019 09:38:22: am', '768', 'PO-0533063', 'Electrical Systems Supplier', 'Project Site A', 4800),
(59, '05/22/2019 09:39:53: am', '134', 'PO-22332', 'Electrical Systems Supplier', 'Project Site A', 1500),
(60, '05/22/2019 09:51:51: am', '7476777', 'PO-2553222', 'House Painting', 'Project Site A', 1050),
(61, '05/22/2019 10:09:17: am', '412', 'PO-67222', 'Doors Materials Supplier', 'Project Site A', 140375),
(62, '05/22/2019 10:11:27: am', '332', 'PO-0320332', 'Electrical Systems Supplier', 'Project Site A', 250),
(63, '05/22/2019 10:13:24: am', '21', 'PO-2352', 'Doors Materials Supplier', 'Project Site A', 400),
(64, '05/22/2019 10:15:39: am', '234', 'PO-06332', 'House Painting', 'Warehouse', 10650),
(65, '05/22/2019 10:16:18: am', '344', 'PO-2389233', 'Wood Finishing Materials', 'Project Site GSFW', 600),
(66, '05/22/2019 10:21:12: am', '243', 'PO-222338', 'Doors Materials Supplier', 'Project Site A', 300),
(67, '05/22/2019 10:21:54: am', '124', 'PO-54232023', 'Doors Materials Supplier', 'Project Site A', 4800),
(68, '05/22/2019 11:48:37: am', '7878778', 'PO-22920260', 'Doors Materials Supplier', 'Project Site A', 15500),
(69, '05/22/2019 11:56:57: am', 'm-8888', 'PO-8293032', 'Mosaic Protection', 'Project Site A', 275),
(70, '05/22/2019 12:00:12: pm', 'm-999', 'PO-22220', 'Doors Materials Supplier', 'Warehouse', 5000),
(71, '05/22/2019 03:31:09: pm', 'm-8888', 'PO-060323', 'House Painting', 'Project Site B', 15450),
(72, '05/22/2019 03:32:48: pm', 'uuuy', 'PO-903335', 'Doors Materials Supplier', 'Warehouse', 49950),
(73, '05/23/2019 11:34:01: am', '213', 'PO-2352779', 'Doors Materials Supplier', 'Project Site B', 4000),
(74, '05/23/2019 11:34:07: am', '321', 'PO-0323032', 'Electrical Systems Supplier', 'Project Site B', 49200),
(75, '05/23/2019 12:17:07: pm', 'h-6564', 'PO-43234', 'Doors Materials Supplier', 'Project Site A', 2147483647),
(76, '05/23/2019 01:00:51: pm', 'm-8767', 'PO-6273023', 'Doors Materials Supplier', 'Project Site B', 5850),
(77, '05/23/2019 01:02:31: pm', '45223', 'PO-332602', 'Mosaic Protection', 'Warehouse', 35100),
(78, '05/23/2019 01:02:39: pm', '324', 'PO-332602', 'Mosaic Protection', 'Warehouse', 35100),
(79, '05/23/2019 01:05:38: pm', '123', 'PO-33092730', 'Steel Frames Supplier', 'Project Site A', 600),
(80, '05/23/2019 01:10:42: pm', '1312', 'PO-332602', 'Mosaic Protection', 'Warehouse', 35100),
(81, '05/23/2019 01:11:05: pm', '423', 'PO-332602', 'Mosaic Protection', 'Warehouse', 35100),
(82, '05/23/2019 01:11:18: pm', '423', 'PO-332602', 'Mosaic Protection', 'Warehouse', 35100),
(83, '05/23/2019 01:12:02: pm', '123', 'PO-477063', 'Mosaic Protection', 'Project Site A', 49200),
(84, '05/23/2019 01:13:04: pm', 'm-9292', 'PO-332602', 'Mosaic Protection', 'Warehouse', 35100),
(85, '05/23/2019 01:27:13: pm', 'test', 'PO-2332009', 'Steel Frames Supplier', 'Warehouse', 500),
(86, '05/23/2019 01:36:33: pm', 'wqe', 'PO-232233', 'Electrical Systems Supplier', 'Warehouse', 49200),
(87, '05/24/2019 01:40:48: pm', '878', 'PO-22543893', '', 'Project Site GSFW', 0),
(88, '05/25/2019 07:36:55: pm', 'iuii', 'PO-302330', 'Doors Materials Supplier', 'Project Site A', 4849200),
(89, '05/25/2019 08:24:19: pm', '324', 'PO-82209322', 'Steel Frames Supplier', 'Warehouse', 2800),
(90, '05/25/2019 08:54:43: pm', 'J-787878', 'PO-8822233', 'Mosaic Protection', 'Project Site D', 9200),
(91, '05/25/2019 09:49:42: pm', '67676', 'PO-2332423', 'Doors Materials Supplier', 'Project Site A', 39000),
(92, '05/25/2019 09:52:10: pm', '43132', 'PO-33332052', 'Doors Materials Supplier', 'Project Site A', 1800),
(93, '05/25/2019 09:52:44: pm', 'rrr', 'PO-2600797', 'Doors Materials Supplier', 'Project Site A', 49200),
(94, '05/25/2019 09:53:17: pm', 'jkh', 'PO-0730383', 'Mosaic Protection', 'Project Site A', 30800),
(95, '05/25/2019 09:53:58: pm', 'kj', 'PO-840223', 'Doors Materials Supplier', 'Project Site A', 50),
(96, '05/25/2019 11:37:04: pm', '123', 'PO-30232303', 'Doors Materials Supplier', 'Warehouse', 12),
(97, '05/25/2019 11:38:10: pm', '134', 'PO-2203020', 'Doors Materials Supplier', 'Project Site A', 1476),
(98, '05/25/2019 11:52:55: pm', '32', 'PO-3020233', 'Mosaic Protection', 'Warehouse', 12),
(99, '05/25/2019 11:54:06: pm', 'm-8888', 'PO-8303900', 'Doors Materials Supplier', 'Warehouse', 12),
(100, '05/26/2019 12:01:09: am', 'x', 'PO-2332352', 'Mosaic Protection', 'Warehouse', 12),
(101, '05/26/2019 12:01:24: am', '23', 'PO-233303', 'Mosaic Protection', 'Project Site B', 18),
(102, '05/26/2019 12:01:37: am', '23', 'PO-33227', 'Mosaic Protection', 'Project Site D', 468),
(103, '05/26/2019 12:02:59: am', '23', 'PO-3323', 'Doors Materials Supplier', 'Warehouse', 24),
(104, '05/26/2019 12:07:27: am', '324', 'PO-493008', 'Doors Materials Supplier', 'Project Site A', 24),
(105, '05/27/2019 12:16:37: am', '122', 'PO-380203', 'Mosaic Protection', 'Project Site A', 156),
(106, '05/27/2019 02:56:20: pm', '555555', 'PO-2326323', 'Steel Frames Supplier', 'Project Site C', 9),
(107, '05/27/2019 11:38:44: pm', '2131', 'PO-0073822', 'Doors Materials Supplier', 'Project Site A', 6660);

-- --------------------------------------------------------

--
-- Table structure for table `materials_history`
--

CREATE TABLE `materials_history` (
  `history_id` int(50) NOT NULL,
  `date_deleted` varchar(200) NOT NULL,
  `inv_code` varchar(200) NOT NULL,
  `qty` int(200) NOT NULL,
  `mat_name` varchar(200) NOT NULL,
  `pt_origin` varchar(200) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials_history`
--

INSERT INTO `materials_history` (`history_id`, `date_deleted`, `inv_code`, `qty`, `mat_name`, `pt_origin`, `price`) VALUES
(13, '05/22/2019 10:16:30: am', 'AMEG-901d', 1, 'Plaster Board', 'Wood Finishing Materials', 600),
(14, '05/22/2019 10:22:00: am', 'AMEG-a2be', 12, 'Rail', 'Doors Materials Supplier', 400),
(15, '05/22/2019 11:48:46: am', 'AMEG-b129', 124, 'Circuit Breaker', 'Doors Materials Supplier', 125),
(16, '05/22/2019 11:57:59: am', 'AMEG-b545', 11, 'Mezzanine Floors', 'Mosaic Protection', 25),
(17, '05/22/2019 03:31:40: pm', 'AMEG-25a6', 94, 'Switches', 'Electrical Systems Supplier', 150),
(18, '05/23/2019 11:34:29: am', 'AMEG-3335', 700, 'Stile', 'Doors Materials Supplier', 75),
(19, '05/23/2019 11:35:01: am', 'AMEG-a2be', 133, 'Rail', 'Doors Materials Supplier', 400),
(20, '05/23/2019 12:20:06: pm', 'AMEG-a2be', 2147483647, 'Rail', 'Doors Materials Supplier', 400),
(21, '05/23/2019 01:01:18: pm', 'AMEG-f7c4', 213, 'Purlin', 'House Painting', 50),
(22, '05/24/2019 01:41:25: pm', 'AMEG-901d', 1, 'Plaster Board', 'Doors Materials Supplier', 600),
(23, '05/25/2019 09:45:29: pm', 'AMEG-a2be', 12269, 'Rail', 'Mosaic Protection', 400),
(24, '05/25/2019 09:50:35: pm', 'AMEG-901d', 65, 'Plaster Board', 'Doors Materials Supplier', 600),
(25, '05/25/2019 09:52:04: pm', 'AMEG-f7c4', 1431, 'Purlin', 'Steel Frames Supplier', 50),
(26, '05/25/2019 11:35:16: pm', 'AMEG-a2be', 203, 'Rail', 'Doors Materials Supplier', 400),
(27, '05/27/2019 01:44:58: am', 'AMEG-1fab', 138, 'steel2', 'Doors Materials Supplier', 12),
(28, '05/27/2019 01:48:10: am', 'AMEG-655a', 2, 'gjh', 'Mosaic Protection', 9),
(29, '05/27/2019 03:28:26: am', 'AMEG-f7c4', 36, 'Purlin', 'Doors Materials Supplier', 50);

-- --------------------------------------------------------

--
-- Table structure for table `mat_expenses`
--

CREATE TABLE `mat_expenses` (
  `matexpenses_id` int(100) NOT NULL,
  `date_paid` varchar(200) NOT NULL,
  `del_order` varchar(200) NOT NULL,
  `supplier` varchar(200) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mat_expenses`
--

INSERT INTO `mat_expenses` (`matexpenses_id`, `date_paid`, `del_order`, `supplier`, `project_name`, `total`) VALUES
(1, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(2, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(3, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(4, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(5, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(6, '', '453535434', 'Mosaic Protection', 'Project Site A', 8800),
(7, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(8, '', '342', 'House Painting', 'Project Site A', 1500),
(9, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(10, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(11, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(12, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(13, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(14, '', '342', 'House Painting', 'Project Site A', 1500),
(15, '', '234', 'Mosaic Protection', 'Project Site A', 1150),
(16, '', '234', 'Mosaic Protection', 'Project Site A', 1150),
(17, '', '555', 'Doors Materials Supplier', 'Project Site A', 4800),
(18, '', '234', 'Mosaic Protection', 'Project Site A', 1150),
(19, '', '555', 'Doors Materials Supplier', 'Project Site A', 4800),
(20, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(21, '', '234', 'Mosaic Protection', 'Project Site A', 1150),
(22, '', '234', 'Mosaic Protection', 'Project Site A', 1150),
(23, '', '423423', 'Mosaic Protection', 'Project Site A', 4800),
(24, '', '423423', 'Mosaic Protection', 'Project Site A', 4800),
(25, '', '423423', 'Mosaic Protection', 'Project Site A', 4800),
(26, '', '423423', 'Mosaic Protection', 'Project Site A', 4800),
(27, '', '342', 'House Painting', 'Project Site A', 1500),
(28, '', '1242', 'Electrical Systems Supplier', 'Project Site A', 1600),
(29, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(30, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(31, '', '234', 'Mosaic Protection', 'Project Site A', 1150),
(32, '', '234', 'Mosaic Protection', 'Project Site A', 1150),
(33, '', '234', 'Mosaic Protection', 'Project Site A', 1150),
(34, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(35, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(36, '', '122', 'Mosaic Protection', 'Project Site A', 156),
(37, '', 'm-8888', 'House Painting', 'Project Site B', 15450),
(38, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(39, '', '124', 'Doors Materials Supplier', 'Project Site A', 5325),
(40, '', 'J-787878', 'Mosaic Protection', 'Project Site D', 9200),
(41, '', 'm-8888', 'House Painting', 'Project Site B', 15450);

-- --------------------------------------------------------

--
-- Table structure for table `mat_inv`
--

CREATE TABLE `mat_inv` (
  `inv_id` int(11) NOT NULL,
  `inv_code` varchar(200) NOT NULL,
  `mat_name` varchar(200) NOT NULL,
  `cat` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `supplier` varchar(200) NOT NULL,
  `qty` int(15) NOT NULL,
  `date_arrival` varchar(500) NOT NULL,
  `deliv_no` varchar(200) NOT NULL,
  `comments` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mat_inv`
--

INSERT INTO `mat_inv` (`inv_id`, `inv_code`, `mat_name`, `cat`, `price`, `supplier`, `qty`, `date_arrival`, `deliv_no`, `comments`) VALUES
(53, 'AMEG-655a', 'gjh', 'Masonry: Bricks', 9, 'Mosaic Protection', 70, '', '', ''),
(55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, 'Steel Frames Supplier', 129, '', '', ''),
(56, 'AMEG-09c2', 'Hollow Blocks', 'Masonry: Stone', 234, 'Steel Frames Supplier', 2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `oh_id` int(200) NOT NULL,
  `po_number` varchar(200) NOT NULL,
  `date_ordered` varchar(200) NOT NULL,
  `suplier_name` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `total_amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`oh_id`, `po_number`, `date_ordered`, `suplier_name`, `destination`, `total_amount`) VALUES
(24, 'PO-02394327', '2019-05-01', 'Tiles-A Supplier ', 'Project Site A', 26199),
(25, 'PO-02302', '2019-05-03', 'Plywood Supplier', 'Project Site A', 660),
(26, 'PO-0322820', '2019-05-02', 'Plywood Supplier', 'Warehouse', 12300),
(27, 'PO-0027073', '2019-05-04', 'Boysen', 'Warehouse', 1230),
(28, 'PO-0332320', '2019-05-15', 'Plywood Supplier', 'Project Site kalsw', 151782),
(29, 'PO-2342232', '2019-05-01', 'Steel Frames Supplier', 'Project Site A', 500),
(30, 'PO-292302', '2019-05-02', 'Doors Materials Supplier', 'Project Site B', 3000),
(31, 'PO-2389233', '2019-05-03', 'Wood Finishing Materials', 'Project Site GSFW', 600),
(32, 'PO-2933375', '2019-05-04', 'Electrical Systems Supplier', 'Project Site B', 9000),
(33, 'PO-0023028', '2019-05-07', 'Electrical Systems Supplier', 'Project Site A', 32000),
(34, 'PO-233029', '2019-05-16', 'Electrical Systems Supplier', 'Warehouse', 15000),
(35, 'PO-332339', '2019-05-17', 'Steel Frames Supplier', 'Warehouse', 4000),
(36, 'PO-2305203', '2019-05-04', 'Walls Supplier', 'Warehouse', 7200),
(37, 'PO-73380200', '2019-05-22', 'Doors Materials Supplier', 'Project Site A', 60000),
(38, 'PO-73380200', '2019-05-22', 'Doors Materials Supplier', 'Project Site A', 60000),
(39, 'PO-73380200', '2019-05-22', 'Doors Materials Supplier', 'Project Site A', 60000),
(40, 'PO-3520320', '2019-05-22', 'Electrical Systems Supplier', 'Warehouse', 2250),
(41, 'PO-000325', '2019-05-10', 'Wood Finishing Materials', 'Project Site GSFW', 30600),
(42, 'PO-3330234', '2019-05-03', 'Steel Frames Supplier', 'Project Site A', 300),
(43, 'PO-30000034', '2019-05-02', 'Steel Frames Supplier', 'Project Site A', 9225),
(44, 'PO-72320067', '2019-05-03', 'Mosaic Protection', 'Project Site A', 3025),
(45, 'PO-2262023', '2019-05-04', 'Mosaic Protection', 'Project Site A', 6150),
(46, 'PO-0802302', '2019-05-02', 'Doors Materials Supplier', 'Project Site A', 15600),
(47, 'PO-0835222', '2019-05-02', 'Doors Materials Supplier', 'Project Site A', 1050),
(48, 'PO-66355533', '2019-05-01', 'Steel Frames Supplier', 'Project Site A', 85200),
(49, 'PO-3232233', '2019-05-10', 'Steel Frames Supplier', 'Project Site A', 2706800),
(50, 'PO-235002', '2019-05-08', 'House Painting', 'Project Site A', 800),
(51, 'PO-3336232', '2019-05-03', 'Doors Materials Supplier', 'Project Site A', 24300),
(52, 'PO-32930', '2019-05-03', 'Doors Materials Supplier', 'Project Site A', 11600),
(53, 'PO-2326206', '2016-02-18', 'Steel Frames Supplier', 'Project Site A', 15975),
(54, 'PO-2528223', '2019-05-21', 'Doors Materials Supplier', 'Project Site A', 9200),
(55, 'PO-0833452', '2019-05-08', 'House Painting', 'Warehouse', 4800),
(56, 'PO-23322339', '2019-05-08', 'Electrical Systems Supplier', 'Warehouse', 15375),
(57, 'PO-3342422', '2019-05-17', 'House Painting', 'Warehouse', 40000),
(58, 'PO-072033', '2019-03-21', 'Electrical Systems Supplier', 'Project Site A', 85200),
(59, 'PO-3430833', '2019-05-22', 'Electrical Systems Supplier', 'Project Site A', 4849200),
(60, 'PO-3430833', '2019-05-22', 'Electrical Systems Supplier', 'Project Site A', 4849200),
(61, 'PO-3286263', '2019-05-17', 'Doors Materials Supplier', 'Project Site A', 49200),
(62, 'PO-24062926', '2019-05-01', 'Doors Materials Supplier', 'Project Site A', 5325),
(63, 'PO-06332', '2019-05-09', 'House Painting', 'Warehouse', 10650),
(64, 'PO-334222', '2019-05-09', 'Mosaic Protection', 'Project Site A', 8800),
(65, 'PO-33536', '2019-05-02', 'Electrical Systems Supplier', 'Project Site A', 1600),
(66, 'PO-036332', '2019-05-17', 'Mosaic Protection', 'Project Site A', 4800),
(67, 'PO-0222433', '2019-05-08', 'House Painting', 'Project Site A', 1500),
(68, 'PO-530300', '2019-05-08', 'Doors Materials Supplier', 'Project Site A', 4800),
(69, 'PO-323020', '2019-05-09', 'Mosaic Protection', 'Project Site A', 1150),
(70, 'PO-0220723', '2019-05-03', 'Doors Materials Supplier', 'Project Site A', 275),
(71, 'PO-3223067', '2019-05-15', 'Doors Materials Supplier', 'Project Site A', 600),
(72, 'PO-22023', '2019-05-10', 'Electrical Systems Supplier', 'Project Site GSFW', 1500),
(73, 'PO-23722302', '2019-05-10', 'Mosaic Protection', 'Project Site A', 4800),
(74, 'PO-0533063', '2019-05-03', 'Electrical Systems Supplier', 'Project Site A', 4800),
(75, 'PO-22332', '2019-05-10', 'Electrical Systems Supplier', 'Project Site A', 1500),
(76, 'PO-2553222', '2019-05-02', 'House Painting', 'Project Site A', 1050),
(77, 'PO-03233300', '2019-05-03', 'Doors Materials Supplier', 'Project Site GSFW', 49200),
(78, 'PO-67222', '2019-05-17', 'Doors Materials Supplier', 'Project Site A', 140375),
(79, 'PO-0320332', '2019-05-10', 'Electrical Systems Supplier', 'Project Site A', 250),
(80, 'PO-2352', '2019-05-11', 'Doors Materials Supplier', 'Project Site A', 400),
(81, 'PO-222338', '2019-05-03', 'Doors Materials Supplier', 'Project Site A', 300),
(82, 'PO-54232023', '2019-05-09', 'Doors Materials Supplier', 'Project Site A', 4800),
(83, 'PO-22920260', '2019-05-02', 'Doors Materials Supplier', 'Project Site A', 15500),
(84, 'PO-8293032', '2019-05-10', 'Mosaic Protection', 'Project Site A', 275),
(85, 'PO-22220', '2019-05-02', 'Doors Materials Supplier', 'Warehouse', 5000),
(86, 'PO-05032022', '2019-05-09', 'Doors Materials Supplier', 'Warehouse', 48800),
(87, 'PO-060323', '2019-05-04', 'House Painting', 'Project Site B', 15450),
(88, 'PO-2352779', '2019-05-09', 'Doors Materials Supplier', 'Project Site B', 4000),
(89, 'PO-903335', '2019-05-03', 'Doors Materials Supplier', 'Warehouse', 49950),
(90, 'PO-0323032', '2019-05-08', 'Electrical Systems Supplier', 'Project Site B', 49200),
(91, 'PO-43234', '2019-05-10', 'Doors Materials Supplier', 'Project Site A', 2147483647),
(92, 'PO-3303037', '2019-05-16', 'Electrical Systems Supplier', 'Warehouse', 6150),
(93, 'PO-6273023', '2019-05-02', 'Doors Materials Supplier', 'Project Site B', 5850),
(94, 'PO-332602', '2019-05-08', 'Mosaic Protection', 'Warehouse', 35100),
(95, 'PO-33092730', '2019-05-10', 'Steel Frames Supplier', 'Project Site A', 600),
(96, 'PO-477063', '2019-05-10', 'Mosaic Protection', 'Project Site A', 49200),
(97, 'PO-3630233', '2019-05-17', 'Electrical Systems Supplier', 'Warehouse', 73800),
(98, 'PO-33332', '2019-05-03', 'House Painting', 'Warehouse', 73800),
(99, 'PO-2332009', '2019-05-02', 'Steel Frames Supplier', 'Warehouse', 500),
(100, 'PO-232233', '2019-05-03', 'Electrical Systems Supplier', 'Warehouse', 49200),
(101, 'PO-22543893', '2019-05-24', 'Doors Materials Supplier', 'Project Site GSFW', 600),
(102, 'PO-8822233', '2019-05-02', 'Mosaic Protection', 'Project Site D', 9200),
(104, 'PO-302330', '2019-05-02', 'Doors Materials Supplier', 'Project Site A', 4849200),
(105, 'PO-82209322', '2019-05-03', 'Steel Frames Supplier', 'Warehouse', 2800),
(106, 'PO-2332423', '2019-05-03', 'Doors Materials Supplier', 'Project Site A', 39000),
(107, 'PO-33332052', '2019-05-03', 'Doors Materials Supplier', 'Project Site A', 1800),
(108, 'PO-2600797', '2019-05-02', 'Doors Materials Supplier', 'Project Site A', 49200),
(109, 'PO-0730383', '2019-05-01', 'Mosaic Protection', 'Project Site A', 30800),
(110, 'PO-840223', '2019-05-09', 'Doors Materials Supplier', 'Project Site A', 50),
(111, 'PO-0247023', '2019-05-09', 'Doors Materials Supplier', 'Warehouse', 31200),
(112, 'PO-252223', '2019-05-08', 'Doors Materials Supplier', 'Project Site A', 14808),
(113, 'PO-30228025', '2019-05-03', 'Mosaic Protection', 'Project Site B', 408),
(114, 'PO-33227', '2019-05-25', 'Mosaic Protection', 'Project Site D', 468),
(115, 'PO-30232303', '2019-05-25', 'Doors Materials Supplier', 'Warehouse', 12),
(116, 'PO-2203020', '2019-05-03', 'Doors Materials Supplier', 'Project Site A', 1476),
(117, 'PO-3020233', '2019-05-25', 'Mosaic Protection', 'Warehouse', 12),
(118, 'PO-8303900', '2019-05-03', 'Doors Materials Supplier', 'Warehouse', 12),
(119, 'PO-233303', '2019-05-26', 'Mosaic Protection', 'Project Site B', 18),
(120, 'PO-2332352', '2019-05-26', 'Mosaic Protection', 'Warehouse', 12),
(121, 'PO-3323', '2019-05-26', 'Doors Materials Supplier', 'Warehouse', 24),
(122, 'PO-493008', '2019-05-26', 'Doors Materials Supplier', 'Project Site A', 24),
(123, 'PO-29392340', '2019-05-27', 'Mosaic Protection', 'Project Site A', 207),
(124, 'PO-380203', '2019-05-03', 'Mosaic Protection', 'Project Site A', 156),
(125, 'PO-0073822', '2019-05-03', 'Doors Materials Supplier', 'Project Site A', 6660),
(126, 'PO-2326323', '2019-05-11', 'Steel Frames Supplier', 'Project Site C', 9),
(127, 'PO-0000320', '2020-11-20', 'Steel Frames Supplier', 'Project Site B', 252);

-- --------------------------------------------------------

--
-- Table structure for table `po_tracking`
--

CREATE TABLE `po_tracking` (
  `tracking_id` int(50) NOT NULL,
  `po_number` varchar(200) NOT NULL,
  `date_ordered` varchar(200) NOT NULL,
  `suplier_name` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `total_amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_tracking`
--

INSERT INTO `po_tracking` (`tracking_id`, `po_number`, `date_ordered`, `suplier_name`, `destination`, `total_amount`) VALUES
(1, 'PO-0000320', '2020-11-20', 'Steel Frames Supplier', 'Project Site B', 252);

-- --------------------------------------------------------

--
-- Table structure for table `projectsite_inv`
--

CREATE TABLE `projectsite_inv` (
  `mat_id` int(11) NOT NULL,
  `inv_code` varchar(200) NOT NULL,
  `site_name` varchar(200) NOT NULL,
  `date_arrival` varchar(500) NOT NULL,
  `qty` int(20) NOT NULL,
  `mat_name` varchar(200) NOT NULL,
  `cat` varchar(200) NOT NULL,
  `pt_origin` varchar(200) NOT NULL,
  `delivery_no` varchar(200) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `mngr_engr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectsite_inv`
--

INSERT INTO `projectsite_inv` (`mat_id`, `inv_code`, `site_name`, `date_arrival`, `qty`, `mat_name`, `cat`, `pt_origin`, `delivery_no`, `comments`, `price`, `mngr_engr`) VALUES
(36, 'AMEG-b545', 'Project Site B', '', 44, 'Mezzanine Floors', '', 'Doors Materials Supplier', '', '', '25     ', ''),
(44, 'AMEG-ffdd', 'Project Site D', '', 6, 'jhk', '', 'Mosaic Protection', '', '', '78', ''),
(45, 'AMEG-655a', 'Project Site C', '', 1, 'gjh', '', 'Steel Frames Supplier', '', '', '9', ''),
(46, 'AMEG-1fab', 'Project Site A', '', 555, 'steel2', '', 'Doors Materials Supplier', '', '', '12', '');

-- --------------------------------------------------------

--
-- Table structure for table `projectsite_table`
--

CREATE TABLE `projectsite_table` (
  `site_id` int(11) NOT NULL,
  `project_site_id` varchar(100) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `project_manager` varchar(200) NOT NULL,
  `location` varchar(300) NOT NULL,
  `budget` int(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectsite_table`
--

INSERT INTO `projectsite_table` (`site_id`, `project_site_id`, `project_name`, `project_manager`, `location`, `budget`, `status`) VALUES
(43, 'AMEG-f41a8a', 'Project Site B', 'Mr. K', 'Sorsogon, City', 15000000, 'IN PROGRESS'),
(45, 'AMEG-0e4473', 'Project Site D', 'Mr. X', 'Guinobatan, Albay', 20000000, 'CLEAR'),
(46, 'AMEG-378eec', 'Project Site GS', 'Mr. Y', 'Ligao City', 6832098, 'IN PROGRESS'),
(47, 'AMEG-5b706f', 'Project Site C', 'Mr. A', 'Daraga, Albay', 20000000, 'PENDING'),
(48, 'AMEG-60a380', 'Project Site A', 'Mr. Kk', 'Legazpi, City', 1212413, 'IN PROGRESS');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `po_id` int(200) NOT NULL,
  `po_number` varchar(200) NOT NULL,
  `mat_name1` int(100) NOT NULL,
  `inv_code` varchar(200) NOT NULL,
  `mat_name` varchar(500) NOT NULL,
  `cat` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `supplier_name` varchar(400) NOT NULL,
  `suplier_name` varchar(500) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `date_ordered` varchar(500) NOT NULL,
  `qty` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `total_amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_orders`
--

INSERT INTO `purchase_orders` (`po_id`, `po_number`, `mat_name1`, `inv_code`, `mat_name`, `cat`, `price`, `supplier_name`, `suplier_name`, `comments`, `destination`, `date_ordered`, `qty`, `amount`, `total_amount`) VALUES
(106, 'PO-232700', 28, 'AMEG-c475', 'nail', 'Wood', 123, '2', 'Boysen', '`12', 'Warehouse', '2019-05-02', 1, 123, 0),
(107, 'PO-06428302', 28, 'AMEG-c475', 'nail', 'Wood', 123, '2', 'Boysen', '213', 'Warehouse', '2019-05-09', 123, 15129, 0),
(108, 'PO-30322', 31, 'AMEG-4251', 'jonas', 'Scafolding', 1000, '3', 'Plywood Supplier', 'test1', 'Project Site A', '2019-05-08', 1000000, 1000000000, 0),
(109, 'PO-02033', 31, 'AMEG-4251', 'jonas', 'Scafolding', 1000, '2', 'Boysen', 'test1', 'Project Site A', '2019-05-01', 123, 123000, 0),
(110, 'PO-03224329', 31, 'AMEG-4251', 'jonas', 'Scafolding', 1000, '1', 'Nail Supplier', 'qwe', 'Project Site B', '2019-05-20', 12, 12000, 0),
(111, 'PO-2942002', 31, 'AMEG-4251', 'jonas', 'Scafolding', 1000, '3', 'Plywood Supplier', '12', 'Project Site A', '2019-05-03', 4, 4000, 0),
(112, 'PO-948233', 32, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '2', 'Boysen', '12', 'Project Site A', '2019-05-02', 3, 369, 0),
(113, 'PO-08283352', 32, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '3', 'Plywood Supplier', '342', 'Project Site kalsw', '2019-05-02', 234, 28782, 0),
(114, 'PO-08283352', 31, 'AMEG-4251', 'jonas', 'Scafolding', 1000, '1', 'Nail Supplier', '234', 'Project Site B', '2019-05-09', 234, 234000, 0),
(115, 'PO-3238222', 31, 'AMEG-4251', 'jonas', 'Scafolding', 1000, '2', 'Boysen', '213', 'Warehouse', '2019-05-01', 123, 123000, 0),
(116, 'PO-3332523', 32, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '1', 'Nail Supplier', '123', 'Project Site Cld', '2019-05-02', 123, 15129, 0),
(117, 'PO-4324338', 32, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '3', 'Plywood Supplier', 'qwr', 'Project Site kalsw', '2019-05-04', 12, 1476, 0),
(118, 'PO-5302072', 32, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '3', 'Plywood Supplier', '12w', 'Project Site Cld', '2019-05-09', 12, 1476, 0),
(119, 'PO-8227304', 32, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '2', 'Boysen', '21', 'Project Site kalsw', '2019-05-02', 2, 246, 0),
(120, 'PO-8227304', 32, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '4', 'Cement Corp.', '21', 'Project Site kalsw', '2019-05-03', 2, 246, 0),
(121, 'PO-2500372', 31, 'AMEG-4251', 'jonas', 'Scafolding', 1000, '2', 'Boysen', '34', 'Project Site kalsw', '2019-05-09', 2, 2000, 0),
(122, 'PO-2500372', 32, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '3', 'Plywood Supplier', '213', 'Project Site Cld', '2019-05-02', 112, 13776, 0),
(123, 'PO-32390', 32, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '2', 'Boysen', 'wq', 'Project Site kalsw', '2019-05-01', 2, 246, 0),
(124, 'PO-32390', 31, 'AMEG-4251', 'jonas', 'Scafolding', 1000, '3', 'Plywood Supplier', 'wad', 'Project Site kalsw', '2019-05-02', 2, 2000, 0),
(125, 'PO-38000', 31, 'AMEG-4251', 'jonas', 'Scafolding', 1000, '3', 'Plywood Supplier', '21', 'Project Site Cld', '2019-05-10', 12, 12000, 0),
(126, 'PO-822260', 31, 'AMEG-4251', 'jonas', 'Scafolding', 1000, '1', 'Nail Supplier', 'qe1', 'Project Site A', '2019-05-01', 2, 2000, 0),
(127, 'PO-5300330', 31, 'AMEG-4251', 'jonas', 'Scafolding', 1000, '1', 'Nail Supplier', '12', 'Project Site A', '2019-05-10', 12, 12000, 0),
(129, 'PO-938020', 32, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '4', 'Cement Corp.', '213', 'Project Site A', '2019-05-02', 123, 15129, 0),
(132, 'PO-2232050', 34, 'AMEG-a8fb', 'qe2', 'Paint', 213, '4', 'Cement Corp.', '123', 'Warehouse', '2019-05-09', 123, 26199, 0),
(133, 'PO-2359303', 32, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '3', 'Plywood Supplier', 'we', 'Warehouse', '2019-05-02', 12, 1476, 0),
(136, 'PO-03232232', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '2', 'Boysen', '123', 'Warehouse', '2019-05-21', 10, 1230, 0),
(137, 'PO-32023003', 39, 'AMEG-e00f', 'new', 'Nail', 55, '1', 'Nail Supplier', 'teew', 'Warehouse', '2019-05-21', 19, 1045, 0),
(138, 'PO-2363922', 39, 'AMEG-e00f', 'new', 'Nail', 55, '2', 'Boysen', '213', 'Project Site A', '2019-05-03', 67, 3685, 0),
(140, 'PO-02443', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '4', 'Cement Corp.', '123', 'Warehouse', '2019-05-03', 20000, 2460000, 0),
(141, 'PO-2320', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '2', 'Boysen', '32', 'Warehouse', '2019-05-21', 200, 24600, 0),
(142, 'PO-9332', 39, 'AMEG-e00f', 'new', 'Nail', 55, '1', 'Nail Supplier', '21', 'Warehouse', '2019-05-02', 23, 1265, 0),
(143, 'PO-6272330', 39, 'AMEG-e00f', 'new', 'Nail', 55, '3', 'Plywood Supplier', '123', 'Warehouse', '2019-05-21', 100, 5500, 0),
(144, 'PO-282909', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '1', 'Nail Supplier', '213', 'Warehouse', '2019-05-01', 20, 2460, 0),
(145, 'PO-2252208', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '1', 'Nail Supplier', '123', 'Warehouse', '2019-05-21', 10, 1230, 0),
(146, 'PO-22720', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '1', 'Nail Supplier', '3213', 'Project Site A', '2019-05-03', 10, 1230, 0),
(147, 'PO-2283022', 39, 'AMEG-e00f', 'new', 'Nail', 55, '3', 'Plywood Supplier', '12', 'Project Site A', '2019-05-10', 10, 550, 0),
(148, 'PO-503432', 39, 'AMEG-e00f', 'new', 'Nail', 55, '4', 'Cement Corp.', '123', 'Project Site A', '2019-05-02', 10, 550, 0),
(150, 'PO-02272032', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '4', 'Cement Corp.', '132', 'Project Site A', '2019-05-21', 10, 1230, 0),
(151, 'PO-320038', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '1', 'Nail Supplier', '132', 'Project Site A', '2019-05-21', 10, 1230, 0),
(152, 'PO-2322223', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '2', 'Boysen', '123', 'Project Site A', '2019-05-01', 10, 1230, 0),
(153, 'PO-23633322', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '3', 'Plywood Supplier', '123', 'Project Site A', '2019-05-03', 10, 1230, 0),
(154, 'PO-87032', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '2', 'Boysen', '123', 'Project Site A', '2019-04-30', 12, 1476, 0),
(155, 'PO-3730532', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '1', 'Nail Supplier', '21', 'Project Site A', '2019-05-01', 10, 1230, 0),
(156, 'PO-23303573', 40, 'AMEG-c7f4', 'plywood', 'Plywood', 123, '3', 'Plywood Supplier', 'Test', 'Project Site A', '2019-05-01', 14, 1722, 0),
(157, 'PO-203932', 39, 'AMEG-e00f', 'new', 'Nail', 55, '1', 'Nail Supplier', 'teqw', 'Project Site A', '2019-06-01', 24, 1320, 0),
(158, 'PO-2283522', 40, 'AMEG-c7f4', 'plywood', 'Plywood', 123, '5', 'Tiles-A Supplier ', 'ewq', 'Project Site B', '2019-05-21', 12, 1476, 0),
(159, 'PO-303200', 39, 'AMEG-e00f', 'new', 'Nail', 55, '3', 'Plywood Supplier', '21', 'Project Site Cld', '2019-05-02', 123, 6765, 0),
(160, 'PO-0032333', 39, 'AMEG-e00f', 'new', 'Nail', 55, '2', 'Boysen', '123', 'Project Site kalsw', '2019-05-16', 213, 11715, 0),
(161, 'PO-22402302', 39, 'AMEG-e00f', 'new', 'Nail', 55, '3', 'Plywood Supplier', '123', 'Project Site Cld', '2019-05-09', 123, 6765, 0),
(162, 'PO-333360', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '4', 'Cement Corp.', '123', 'Project Site B', '2019-05-03', 213, 26199, 0),
(163, 'PO-3032303', 39, 'AMEG-e00f', 'new', 'Nail', 55, '3', 'Plywood Supplier', '123', 'Project Site A', '2019-05-04', 123, 6765, 0),
(164, 'PO-822232', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '1', 'Nail Supplier', '412', 'Project Site A', '2019-05-04', 123, 15129, 0),
(165, 'PO-323027', 39, 'AMEG-e00f', 'new', 'Nail', 55, '3', 'Plywood Supplier', 'dsf', 'Project Site A', '2019-05-04', 234, 12870, 0),
(166, 'PO-3305772', 39, 'AMEG-e00f', 'new', 'Nail', 55, '2', 'Boysen', '123', 'Project Site A', '2019-05-09', 23, 1265, 0),
(167, 'PO-0676350', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '3', 'Plywood Supplier', '123', 'Project Site A', '2019-05-09', 1, 123, 0),
(168, 'PO-8207002', 40, 'AMEG-c7f4', 'plywood', 'Plywood', 123, '2', 'Boysen', '123', 'Project Site A', '2019-05-03', 12, 1476, 0),
(169, 'PO-02233266', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '4', 'Cement Corp.', '123', 'Project Site A', '2019-05-03', 23, 2829, 0),
(170, 'PO-93309357', 39, 'AMEG-e00f', 'new', 'Nail', 55, '3', 'Plywood Supplier', '213', 'Project Site B', '2019-05-01', 12, 660, 0),
(171, 'PO-2229303', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '4', 'Cement Corp.', '312', 'Project Site A', '2019-05-02', 123, 15129, 0),
(172, 'PO-33030392', 39, 'AMEG-e00f', 'new', 'Nail', 55, '3', 'Plywood Supplier', '21', 'Project Site A', '2019-05-16', 123, 6765, 0),
(173, 'PO-732532', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '3', 'Plywood Supplier', '123', 'Project Site A', '2019-05-08', 213, 26199, 0),
(174, 'PO-034', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '1', 'Nail Supplier', '123', 'Project Site A', '2019-05-21', 123, 15129, 0),
(175, 'PO-83308', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '3', 'Plywood Supplier', '123', 'Project Site A', '2019-05-21', 123, 15129, 0),
(176, 'PO-983292', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '4', 'Cement Corp.', 'dqw', 'Project Site A', '2019-05-08', 123, 15129, 0),
(177, 'PO-393832', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '2', 'Boysen', '213', 'Project Site A', '2019-05-02', 123, 15129, 0),
(178, 'PO-02233', 39, 'AMEG-e00f', 'new', 'Nail', 55, '3', 'Plywood Supplier', '21', 'Project Site B', '2019-05-01', 123, 6765, 0),
(179, 'PO-023092', 39, 'AMEG-e00f', 'new', 'Nail', 55, '3', 'Plywood Supplier', 'we', 'Project Site A', '2019-05-01', 1, 55, 0),
(180, 'PO-8220', 40, 'AMEG-c7f4', 'plywood', 'Plywood', 123, '1', 'Nail Supplier', 'test', 'Project Site B', '2019-05-03', 7, 861, 0),
(181, 'PO-020436', 40, 'AMEG-c7f4', 'plywood', 'Plywood', 123, '2', 'Boysen', '134', 'Project Site A', '2019-05-21', 123, 15129, 0),
(182, 'PO-02394327', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '5', 'Tiles-A Supplier ', '23', 'Project Site A', '2019-05-01', 213, 26199, 0),
(183, 'PO-02302', 39, 'AMEG-e00f', 'new', 'Nail', 55, '3', 'Plywood Supplier', '1', 'Project Site A', '2019-05-03', 12, 660, 0),
(184, 'PO-0322820', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '3', 'Plywood Supplier', 'test', 'Warehouse', '2019-05-02', 100, 12300, 0),
(185, 'PO-0027073', 38, 'AMEG-0b33', 'Hollow Blocks', 'Scafolding', 123, '2', 'Boysen', 'test', 'Warehouse', '2019-05-04', 10, 1230, 0),
(186, 'PO-0332320', 40, 'AMEG-c7f4', 'plywood', 'Plywood', 123, '3', 'Plywood Supplier', 'qw', 'Project Site kalsw', '2019-05-15', 1234, 151782, 0),
(187, 'PO-2342232', 42, 'AMEG-b545', 'Mezzanine Floors', 'Steel Frames', 25, '10', 'Steel Frames Supplier', 'Test', 'Project Site A', '2019-05-01', 20, 500, 0),
(188, 'PO-292302', 44, 'AMEG-3335', 'Stile', 'Doors', 75, '12', 'Doors Materials Supplier', 'Test', 'Project Site B', '2019-05-02', 40, 3000, 0),
(189, 'PO-2389233', 48, 'AMEG-901d', 'Plaster Board', 'Wood Finishing Materials', 600, '19', 'Wood Finishing Materials', 'Test', 'Project Site GSFW', '2019-05-03', 1, 600, 0),
(191, 'PO-2933375', 47, 'AMEG-25a6', 'Switches', 'Electrical Systems', 150, '13', 'Electrical Systems Supplier', 'Test', 'Project Site B', '2019-05-04', 60, 9000, 0),
(192, 'PO-0023028', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '13', 'Electrical Systems Supplier', 'Test', 'Project Site A', '2019-05-07', 80, 32000, 0),
(193, 'PO-233029', 47, 'AMEG-25a6', 'Switches', 'Electrical Systems', 150, '13', 'Electrical Systems Supplier', 'Test', 'Warehouse', '2019-05-16', 100, 15000, 0),
(194, 'PO-332339', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '10', 'Steel Frames Supplier', 'Test', 'Warehouse', '2019-05-17', 80, 4000, 0),
(195, 'PO-2305203', 48, 'AMEG-901d', 'Plaster Board', 'Wood Finishing Materials', 600, '15', 'Walls Supplier', 'Test', 'Warehouse', '2019-05-04', 12, 7200, 0),
(196, 'PO-73380200', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', 'test', 'Project Site A', '2019-05-22', 150, 60000, 0),
(197, 'PO-3520320', 47, 'AMEG-25a6', 'Switches', 'Electrical Systems', 150, '13', 'Electrical Systems Supplier', 'Send to Warehouse', 'Warehouse', '2019-05-22', 15, 2250, 0),
(198, 'PO-000325', 48, 'AMEG-901d', 'Plaster Board', 'Wood Finishing Materials', 600, '19', 'Wood Finishing Materials', '', 'Project Site GSFW', '2019-05-10', 51, 30600, 0),
(199, 'PO-3330234', 42, 'AMEG-b545', 'Mezzanine Floors', 'Steel Frames', 25, '10', 'Steel Frames Supplier', '', 'Project Site A', '2019-05-03', 12, 300, 0),
(200, 'PO-30000034', 44, 'AMEG-3335', 'Stile', 'Doors', 75, '10', 'Steel Frames Supplier', '213', 'Project Site A', '2019-05-02', 123, 9225, 0),
(201, 'PO-72320067', 42, 'AMEG-b545', 'Mezzanine Floors', 'Steel Frames', 25, '11', 'Mosaic Protection', 'q', 'Project Site A', '2019-05-03', 121, 3025, 0),
(202, 'PO-2262023', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '11', 'Mosaic Protection', '132', 'Project Site A', '2019-05-04', 123, 6150, 0),
(203, 'PO-0802302', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '12', 'Doors Materials Supplier', '123', 'Project Site A', '2019-05-02', 312, 15600, 0),
(204, 'PO-0835222', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '12', 'Doors Materials Supplier', '34', 'Project Site A', '2019-05-02', 21, 1050, 0),
(205, 'PO-66355533', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '10', 'Steel Frames Supplier', '123', 'Project Site A', '2019-05-01', 213, 85200, 0),
(206, 'PO-3232233', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '10', 'Steel Frames Supplier', '123', 'Project Site A', '2019-05-10', 6767, 2706800, 0),
(207, 'PO-235002', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '14', 'House Painting', '123', 'Project Site A', '2019-05-08', 2, 800, 0),
(208, 'PO-3336232', 44, 'AMEG-3335', 'Stile', 'Doors', 75, '12', 'Doors Materials Supplier', '123', 'Project Site A', '2019-05-03', 324, 24300, 0),
(209, 'PO-32930', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '12', 'Doors Materials Supplier', '21424', 'Project Site A', '2019-05-03', 232, 11600, 0),
(210, 'PO-2326206', 44, 'AMEG-3335', 'Stile', 'Doors', 75, '10', 'Steel Frames Supplier', '213', 'Project Site A', '2016-02-18', 213, 15975, 0),
(211, 'PO-2528223', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', '123', 'Project Site A', '2019-05-21', 23, 9200, 0),
(212, 'PO-0833452', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '14', 'House Painting', '2', 'Warehouse', '2019-05-08', 12, 4800, 0),
(213, 'PO-23322339', 46, 'AMEG-b129', 'Circuit Breaker', 'Electrical Systems', 125, '13', 'Electrical Systems Supplier', '213', 'Warehouse', '2019-05-08', 123, 15375, 0),
(214, 'PO-3342422', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '14', 'House Painting', 'tttttttt', 'Warehouse', '2019-05-17', 100, 40000, 0),
(215, 'PO-072033', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '13', 'Electrical Systems Supplier', '123', 'Project Site A', '2019-03-21', 213, 85200, 0),
(216, 'PO-3430833', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '13', 'Electrical Systems Supplier', 'test', 'Project Site A', '2019-05-22', 12123, 4849200, 0),
(218, 'PO-3286263', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', '213', 'Project Site A', '2019-05-17', 123, 49200, 0),
(219, 'PO-24062926', 42, 'AMEG-b545', 'Mezzanine Floors', 'Steel Frames', 25, '12', 'Doors Materials Supplier', '124', 'Project Site A', '2019-05-01', 213, 5325, 0),
(220, 'PO-06332', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '14', 'House Painting', '1231', 'Warehouse', '2019-05-09', 213, 10650, 0),
(221, 'PO-334222', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '11', 'Mosaic Protection', '41234', 'Project Site A', '2019-05-09', 22, 8800, 0),
(222, 'PO-33536', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '13', 'Electrical Systems Supplier', '1', 'Project Site A', '2019-05-02', 32, 1600, 0),
(223, 'PO-036332', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '11', 'Mosaic Protection', '123', 'Project Site A', '2019-05-17', 12, 4800, 0),
(224, 'PO-0222433', 46, 'AMEG-b129', 'Circuit Breaker', 'Electrical Systems', 125, '14', 'House Painting', '1231', 'Project Site A', '2019-05-08', 12, 1500, 0),
(225, 'PO-530300', 47, 'AMEG-25a6', 'Switches', 'Electrical Systems', 150, '12', 'Doors Materials Supplier', '123', 'Project Site A', '2019-05-08', 32, 4800, 0),
(226, 'PO-323020', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '11', 'Mosaic Protection', '123', 'Project Site A', '2019-05-09', 23, 1150, 0),
(227, 'PO-0220723', 42, 'AMEG-b545', 'Mezzanine Floors', 'Steel Frames', 25, '12', 'Doors Materials Supplier', 'dqw', 'Project Site A', '2019-05-03', 11, 275, 0),
(228, 'PO-3223067', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '12', 'Doors Materials Supplier', '213', 'Project Site A', '2019-05-15', 12, 600, 0),
(229, 'PO-22023', 46, 'AMEG-b129', 'Circuit Breaker', 'Electrical Systems', 125, '13', 'Electrical Systems Supplier', '12', 'Project Site GSFW', '2019-05-10', 12, 1500, 0),
(230, 'PO-23722302', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '11', 'Mosaic Protection', '21', 'Project Site A', '2019-05-10', 12, 4800, 0),
(231, 'PO-0533063', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '13', 'Electrical Systems Supplier', '21', 'Project Site A', '2019-05-03', 12, 4800, 0),
(232, 'PO-22332', 46, 'AMEG-b129', 'Circuit Breaker', 'Electrical Systems', 125, '13', 'Electrical Systems Supplier', '123', 'Project Site A', '2019-05-10', 12, 1500, 0),
(233, 'PO-2553222', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '14', 'House Painting', '4e1q', 'Project Site A', '2019-05-02', 21, 1050, 0),
(234, 'PO-03233300', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', '21', 'Project Site GSFW', '2019-05-03', 123, 49200, 0),
(235, 'PO-67222', 46, 'AMEG-b129', 'Circuit Breaker', 'Electrical Systems', 125, '12', 'Doors Materials Supplier', '123', 'Project Site A', '2019-05-17', 1123, 140375, 0),
(236, 'PO-0320332', 46, 'AMEG-b129', 'Circuit Breaker', 'Electrical Systems', 125, '13', 'Electrical Systems Supplier', 'dwa', 'Project Site A', '2019-05-10', 2, 250, 0),
(237, 'PO-2352', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', '121', 'Project Site A', '2019-05-11', 1, 400, 0),
(238, 'PO-222338', 47, 'AMEG-25a6', 'Switches', 'Electrical Systems', 150, '12', 'Doors Materials Supplier', '21', 'Project Site A', '2019-05-03', 2, 300, 0),
(239, 'PO-54232023', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', '213', 'Project Site A', '2019-05-09', 12, 4800, 0),
(240, 'PO-22920260', 46, 'AMEG-b129', 'Circuit Breaker', 'Electrical Systems', 125, '12', 'Doors Materials Supplier', 'Test', 'Project Site A', '2019-05-02', 124, 15500, 0),
(241, 'PO-8293032', 42, 'AMEG-b545', 'Mezzanine Floors', 'Steel Frames', 25, '11', 'Mosaic Protection', 'yj', 'Project Site A', '2019-05-10', 11, 275, 0),
(242, 'PO-22220', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '12', 'Doors Materials Supplier', 'test', 'Warehouse', '2019-05-02', 100, 5000, 0),
(243, 'PO-05032022', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', 'q3e', 'Warehouse', '2019-05-09', 122, 48800, 0),
(244, 'PO-060323', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '11', 'Mosaic Protection', '213', 'Project Site D', '2019-05-02', 12, 4800, 0),
(245, 'PO-060323', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '14', 'House Painting', '12', 'Project Site B', '2019-05-04', 213, 10650, 0),
(246, 'PO-2352779', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', 'Test', 'Project Site B', '2019-05-09', 10, 4000, 0),
(247, 'PO-903335', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '12', 'Doors Materials Supplier', 'oopp', 'Warehouse', '2019-05-03', 999, 49950, 0),
(248, 'PO-0323032', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '13', 'Electrical Systems Supplier', 'test', 'Project Site B', '2019-05-08', 123, 49200, 0),
(250, 'PO-43234', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', 'qweq', 'Project Site A', '2019-05-10', 54444443, 2147483647, 0),
(251, 'PO-3303037', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '13', 'Electrical Systems Supplier', '123', 'Warehouse', '2019-05-16', 123, 6150, 0),
(252, 'PO-6273023', 42, 'AMEG-b545', 'Mezzanine Floors', 'Steel Frames', 25, '12', 'Doors Materials Supplier', '123', 'Project Site B', '2019-05-02', 234, 5850, 0),
(253, 'PO-332602', 47, 'AMEG-25a6', 'Switches', 'Electrical Systems', 150, '11', 'Mosaic Protection', 'yyyy', 'Warehouse', '2019-05-08', 234, 35100, 0),
(254, 'PO-33092730', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '10', 'Steel Frames Supplier', '123', 'Project Site A', '2019-05-10', 12, 600, 0),
(255, 'PO-477063', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '11', 'Mosaic Protection', '123', 'Project Site A', '2019-05-10', 123, 49200, 0),
(256, 'PO-3630233', 48, 'AMEG-901d', 'Plaster Board', 'Wood Finishing Materials', 600, '13', 'Electrical Systems Supplier', '123', 'Warehouse', '2019-05-17', 123, 73800, 0),
(258, 'PO-33332', 48, 'AMEG-901d', 'Plaster Board', 'Wood Finishing Materials', 600, '14', 'House Painting', '213', 'Warehouse', '2019-05-03', 123, 73800, 0),
(259, 'PO-2332009', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '10', 'Steel Frames Supplier', 'rrrrr', 'Warehouse', '2019-05-02', 10, 500, 0),
(260, 'PO-232233', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '13', 'Electrical Systems Supplier', '123', 'Warehouse', '2019-05-03', 123, 49200, 0),
(261, 'PO-22543893', 48, 'AMEG-901d', 'Plaster Board', 'Wood Finishing Materials', 600, '12', 'Doors Materials Supplier', '', 'Project Site GSFW', '2019-05-24', 1, 600, 0),
(263, 'PO-8822233', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '11', 'Mosaic Protection', '123', 'Project Site D', '2019-05-02', 23, 9200, 0),
(264, 'PO-302330', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', 'test', 'Project Site A', '2019-05-02', 12123, 4849200, 0),
(265, 'PO-82209322', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '10', 'Steel Frames Supplier', 'test', 'Warehouse', '2019-05-03', 56, 2800, 0),
(266, 'PO-2332423', 48, 'AMEG-901d', 'Plaster Board', 'Wood Finishing Materials', 600, '12', 'Doors Materials Supplier', 'test', 'Project Site A', '2019-05-03', 65, 39000, 0),
(267, 'PO-33332052', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '11', 'Mosaic Protection', '123', 'Project Site A', '2019-05-03', 12, 600, 0),
(268, 'PO-33332052', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', '123', 'Project Site A', '2019-05-03', 3, 1200, 0),
(269, 'PO-2600797', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', '234', 'Project Site A', '2019-05-02', 123, 49200, 0),
(270, 'PO-0730383', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '11', 'Mosaic Protection', 'h', 'Project Site A', '2019-05-01', 77, 30800, 0),
(271, 'PO-840223', 43, 'AMEG-f7c4', 'Purlin', 'Steel Frames', 50, '12', 'Doors Materials Supplier', 'hk', 'Project Site A', '2019-05-09', 1, 50, 0),
(272, 'PO-0247023', 45, 'AMEG-a2be', 'Rail', 'Doors', 400, '12', 'Doors Materials Supplier', 'j', 'Warehouse', '2019-05-09', 78, 31200, 0),
(273, 'PO-252223', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '12', 'Doors Materials Supplier', '324', 'Project Site A', '2019-05-08', 1234, 14808, 0),
(274, 'PO-30228025', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '11', 'Mosaic Protection', '2', 'Project Site B', '2019-05-03', 34, 408, 0),
(275, 'PO-730330', 53, 'AMEG-655a', 'gjh', 'Masonry: Bricks', 9, '10', 'Steel Frames Supplier', 'uuu', 'Project Site B', '2019-05-01', 2, 18, 0),
(276, 'PO-33227', 54, 'AMEG-ffdd', 'jhk', 'Masonry: Stone', 78, '11', 'Mosaic Protection', 'te', 'Project Site D', '2019-05-25', 6, 468, 0),
(277, 'PO-30232303', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '12', 'Doors Materials Supplier', '223', 'Warehouse', '2019-05-25', 1, 12, 0),
(278, 'PO-2203020', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '12', 'Doors Materials Supplier', '2341', 'Project Site A', '2019-05-03', 123, 1476, 0),
(279, 'PO-3020233', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '11', 'Mosaic Protection', '2', 'Warehouse', '2019-05-25', 1, 12, 0),
(280, 'PO-8303900', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '12', 'Doors Materials Supplier', '', 'Warehouse', '2019-05-03', 1, 12, 0),
(281, 'PO-233303', 53, 'AMEG-655a', 'gjh', 'Masonry: Bricks', 9, '11', 'Mosaic Protection', '', 'Project Site B', '2019-05-26', 2, 18, 0),
(282, 'PO-2332352', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '11', 'Mosaic Protection', '', 'Warehouse', '2019-05-26', 1, 12, 0),
(283, 'PO-3323', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '12', 'Doors Materials Supplier', '', 'Warehouse', '2019-05-26', 2, 24, 0),
(284, 'PO-493008', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '12', 'Doors Materials Supplier', '', 'Project Site A', '2019-05-26', 2, 24, 0),
(285, 'PO-29392340', 53, 'AMEG-655a', 'gjh', 'Masonry: Bricks', 9, '11', 'Mosaic Protection', '123', 'Project Site A', '2019-05-27', 23, 207, 0),
(286, 'PO-380203', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '11', 'Mosaic Protection', '123', 'Project Site A', '2019-05-03', 13, 156, 0),
(287, 'PO-0073822', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '12', 'Doors Materials Supplier', '12341', 'Project Site A', '2019-05-03', 555, 6660, 0),
(288, 'PO-2326323', 53, 'AMEG-655a', 'gjh', 'Masonry: Bricks', 9, '10', 'Steel Frames Supplier', '234', 'Project Site C', '2019-05-11', 1, 9, 0),
(289, 'PO-0000320', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '10', 'Steel Frames Supplier', 'remarks', 'Project Site B', '2020-11-20', 21, 252, 0),
(290, 'PO-02286259', 55, 'AMEG-1fab', 'steel2', 'Masonry: Stone', 12, '11', 'Mosaic Protection', 'test', 'Project Site GS', '2021-03-26', 3, 36, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE `supliers` (
  `suplier_id` int(11) NOT NULL,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`suplier_id`, `suplier_name`, `suplier_address`, `suplier_contact`, `contact_person`, `note`) VALUES
(10, 'Steel Frames Supplier', 'Legazpi City', 'Mr A.', '09***********', 'Test'),
(11, 'Mosaic Protection', 'Daraga, Albay', 'Mr. B', '09**************', 'Test'),
(12, 'Doors Materials Supplier', 'Legazpi City', 'Mr. C', '09***********', 'Test'),
(13, 'Electrical Systems Supplier', 'Daraga, Albay', 'Mr. D', '09**************', 'Test'),
(14, 'House Painting', 'Legazpi City', 'Mr. E', '09***********', 'Test'),
(15, 'Walls Supplier', 'Daraga, Albay', 'Mr. F', '09***********', 'Test'),
(16, 'Floors Supplier', 'Daraga, Albay', 'Mr. G', '09***********', 'Test'),
(17, 'Ceilings materials Supplier', 'Daraga, Albay', 'Mr. H', '09**************', 'Test'),
(18, 'Roofs Materials Supplier', 'Legazpi City', 'Mr. I', '09***********', 'Test\r\n'),
(20, 'j', 'h', 'j', 'j', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `proj_site` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `position`, `proj_site`) VALUES
(12, 'QS', '1', 'QS', 'Quantity Surveyor', ''),
(13, 'generalmanager', '1', 'General Manager', 'General Manager', ''),
(14, 'engr1', '1', 'John Dela Cruz', 'Project Site Manager', 'Project Site A'),
(15, 'accounting', '1', 'Accounting Supervisorbbb', 'Accounting Supervisor', '--'),
(16, 'warehouse', '1', 'Warehouse Manager', 'Warehouse Manager', ''),
(17, 'engr2', '1', 'engr2', 'Project Site Manager', 'Project Site B'),
(19, 'engr3', '1', 'engr3', 'Project Site Manager', 'Project Site C'),
(20, 'engr4', '1', 'Mr. XY', 'Project Site Manager', 'Project Site GSFW'),
(21, 'engr5', '1', 'Mr. P', 'Project Site Manager', 'Project Site C'),
(22, 'jonas', '1', 'Mr Jonas', 'Project Site Manager', 'Project Site D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
  ADD PRIMARY KEY (`ledger_id`);

--
-- Indexes for table `materials_history`
--
ALTER TABLE `materials_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `mat_expenses`
--
ALTER TABLE `mat_expenses`
  ADD PRIMARY KEY (`matexpenses_id`);

--
-- Indexes for table `mat_inv`
--
ALTER TABLE `mat_inv`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`oh_id`);

--
-- Indexes for table `po_tracking`
--
ALTER TABLE `po_tracking`
  ADD PRIMARY KEY (`tracking_id`);

--
-- Indexes for table `projectsite_inv`
--
ALTER TABLE `projectsite_inv`
  ADD PRIMARY KEY (`mat_id`);

--
-- Indexes for table `projectsite_table`
--
ALTER TABLE `projectsite_table`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `supliers`
--
ALTER TABLE `supliers`
  ADD PRIMARY KEY (`suplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ledger`
--
ALTER TABLE `ledger`
  MODIFY `ledger_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `materials_history`
--
ALTER TABLE `materials_history`
  MODIFY `history_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `mat_expenses`
--
ALTER TABLE `mat_expenses`
  MODIFY `matexpenses_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `mat_inv`
--
ALTER TABLE `mat_inv`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `oh_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `po_tracking`
--
ALTER TABLE `po_tracking`
  MODIFY `tracking_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projectsite_inv`
--
ALTER TABLE `projectsite_inv`
  MODIFY `mat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `projectsite_table`
--
ALTER TABLE `projectsite_table`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `po_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT for table `supliers`
--
ALTER TABLE `supliers`
  MODIFY `suplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
