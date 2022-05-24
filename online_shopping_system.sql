-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 08:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shopping_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `admin_name` varchar(70) NOT NULL,
  `admin_contact_number` varchar(70) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `category_name` varchar(70) NOT NULL,
  `att1` varchar(255) DEFAULT NULL,
  `att2` varchar(255) DEFAULT NULL,
  `att3` varchar(255) DEFAULT NULL,
  `att4` varchar(255) DEFAULT NULL,
  `att5` varchar(255) DEFAULT NULL,
  `att6` varchar(255) DEFAULT NULL,
  `att7` varchar(255) DEFAULT NULL,
  `att8` varchar(255) DEFAULT NULL,
  `att9` varchar(255) DEFAULT NULL,
  `att10` varchar(255) DEFAULT NULL,
  `att11` varchar(255) DEFAULT NULL,
  `att12` varchar(255) DEFAULT NULL,
  `att13` varchar(255) DEFAULT NULL,
  `att14` varchar(255) DEFAULT NULL,
  `att15` varchar(255) DEFAULT NULL,
  `att16` varchar(255) DEFAULT NULL,
  `att17` varchar(255) DEFAULT NULL,
  `att18` varchar(255) DEFAULT NULL,
  `att19` varchar(255) DEFAULT NULL,
  `att20` varchar(255) DEFAULT NULL,
  `att21` varchar(255) DEFAULT NULL,
  `att22` varchar(255) DEFAULT NULL,
  `att23` varchar(255) DEFAULT NULL,
  `att24` varchar(255) DEFAULT NULL,
  `att25` varchar(255) DEFAULT NULL,
  `att26` varchar(255) DEFAULT NULL,
  `att27` varchar(255) DEFAULT NULL,
  `att28` varchar(255) DEFAULT NULL,
  `att29` varchar(255) DEFAULT NULL,
  `att30` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_id`, `category_name`, `att1`, `att2`, `att3`, `att4`, `att5`, `att6`, `att7`, `att8`, `att9`, `att10`, `att11`, `att12`, `att13`, `att14`, `att15`, `att16`, `att17`, `att18`, `att19`, `att20`, `att21`, `att22`, `att23`, `att24`, `att25`, `att26`, `att27`, `att28`, `att29`, `att30`) VALUES
(1, 'C#001', 'Smart watch', 'Display', 'Battery ', 'Connectivity ', 'Matterial', 'Dimensions', 'Weight', 'Colour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'C#002', 'Computer', 'Processor', 'Display', 'Memory', 'Storage', 'Graphics', 'Battery', 'USB', 'Webcam', 'Weight', 'Colour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'C#003', 'Desktop', 'Processor', 'Motherboard', 'RAM', 'Graphics Card', 'Storage', 'Casing', 'PSU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'C#004', 'Processor', 'Brand', 'Model', 'Base Frequency', 'Maximum Turbo Frequency', 'Cache', 'Cores', 'Threads', 'Supported Technology', 'Maximum Speed', 'Memory Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'C#005', 'Graphics Card', 'Type', 'Size', 'Resolution', 'Core Clock', 'Memory Clock', 'Connectors', 'Stream Processor', 'Cuda Core', 'Display Port', 'Recommended PSU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'C#006', 'Headphone', 'Type', 'Weight', 'Colour', 'Cable Length', 'System Requirements', 'Frequency', 'Microphone Size', 'Pick-up Pattern', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'C#007', 'Keyboard', 'Type', 'Wired/Wireless', 'Keys', 'Cable Length', 'Interface', 'Others', 'Colour ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'C#008', 'Mouse', 'Connector', 'Dimension', 'Others', 'Switch Life Cycle', 'Weight', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'C#009', 'Camera', 'Type', 'Pixels', 'Aspect Ratio', 'Features', 'AF Point', 'ISO Sensitivity', 'Shutter Speed', 'Image Type', 'Shutter Speed', 'Display Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'C#010', 'Accessories', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `customer_name` varchar(70) NOT NULL,
  `customer_contact_number` varchar(70) DEFAULT NULL,
  `customer_address` varchar(70) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_id`, `customer_name`, `customer_contact_number`, `customer_address`, `user_id`) VALUES
(1, 'C#001', 'rony', NULL, NULL, 'U#003'),
(10, 'C#0010', 'Saif', '01733333308', 'rajshahi', 'U#0022'),
(2, 'C#002', 'Sony', '01733333301', 'motijhil,dhaka', 'U#0014'),
(3, 'C#003', 'Bony', '01733333302', 'dhaka', 'U#0015'),
(4, 'C#004', 'Goni', '01733333303', 'Barishal', 'U#0016'),
(5, 'C#005', 'Pritam', '01733333304', 'Barishal', 'U#0017'),
(6, 'C#006', 'Raju', '01733333305', 'sylhet', 'U#0018'),
(7, 'C#007', 'Mina', '01733333306', 'sylhet', 'U#0019'),
(8, 'C#008', 'Toma', '01733333307', 'khulna', 'U#0020'),
(9, 'C#009', 'Sifu', '01733333307', 'sylhet', 'U#0021');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` int(11) NOT NULL,
  `description_id` varchar(255) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `att_val_1` varchar(255) DEFAULT NULL,
  `att_val_2` varchar(255) DEFAULT NULL,
  `att_val_3` varchar(255) DEFAULT NULL,
  `att_val_4` varchar(255) DEFAULT NULL,
  `att_val_5` varchar(255) DEFAULT NULL,
  `att_val_6` varchar(255) DEFAULT NULL,
  `att_val_7` varchar(255) DEFAULT NULL,
  `att_val_8` varchar(255) DEFAULT NULL,
  `att_val_9` varchar(255) DEFAULT NULL,
  `att_val_10` varchar(255) DEFAULT NULL,
  `att_val_11` varchar(255) DEFAULT NULL,
  `att_val_12` varchar(255) DEFAULT NULL,
  `att_val_13` varchar(255) DEFAULT NULL,
  `att_val_14` varchar(255) DEFAULT NULL,
  `att_val_15` varchar(255) DEFAULT NULL,
  `att_val_16` varchar(255) DEFAULT NULL,
  `att_val_17` varchar(255) DEFAULT NULL,
  `att_val_18` varchar(255) DEFAULT NULL,
  `att_val_19` varchar(255) DEFAULT NULL,
  `att_val_20` varchar(255) DEFAULT NULL,
  `att_val_21` varchar(255) DEFAULT NULL,
  `att_val_22` varchar(255) DEFAULT NULL,
  `att_val_23` varchar(255) DEFAULT NULL,
  `att_val_24` varchar(255) DEFAULT NULL,
  `att_val_25` varchar(255) DEFAULT NULL,
  `att_val_26` varchar(255) DEFAULT NULL,
  `att_val_27` varchar(255) DEFAULT NULL,
  `att_val_28` varchar(255) DEFAULT NULL,
  `att_val_29` varchar(255) DEFAULT NULL,
  `att_val_30` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `description_id`, `product_id`, `category_id`, `att_val_1`, `att_val_2`, `att_val_3`, `att_val_4`, `att_val_5`, `att_val_6`, `att_val_7`, `att_val_8`, `att_val_9`, `att_val_10`, `att_val_11`, `att_val_12`, `att_val_13`, `att_val_14`, `att_val_15`, `att_val_16`, `att_val_17`, `att_val_18`, `att_val_19`, `att_val_20`, `att_val_21`, `att_val_22`, `att_val_23`, `att_val_24`, `att_val_25`, `att_val_26`, `att_val_27`, `att_val_28`, `att_val_29`, `att_val_30`) VALUES
(6, 'DESC#001', 'PROD#001', 'C#003', 'AMD Athlon 3000G Processor ', 'MSI A320M-A Pro Max AMD Motherboard', 'Adata 4 GB DDR4 2666 BUS Desktop Ram', 'AMD Ryzen', 'Seagate Internal 1TB SATA Barracuda HDD', 'Value Top VT-E190 Mid Tower ATX Casing', 'Included with Casing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'DESC#0010', 'PROD#0033', 'C#002', 'Intel Celeron Processor N3350 (1.10 GHz-2.40 GHz 2 MB Cache Cores: 2 Threads: 2)', '12.2\" TFT, (1920 x 1200) IPS Touch Screen', '4GB RAM', '64GB eMMC', 'Intel HD Graphics 500', 'Li-ion Battery', 'USB 3.0 x 1', '2 MP', 'Overall weight : 1.41kg / Tablet weight: 1.07kg / Keyboard weight: 0.34kg', 'Steel Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'DESC#0011', 'PROD#0034', 'C#002', 'Intel Celeron Processor N3350 (1.10 GHz-2.40 GHz 2 MB Cache Cores: 2 Threads: 2)', '12.2\" TFT, (1920 x 1200) IPS Touch Screen', '4GB RAM', '64GB eMMC', 'Intel HD Graphics 500', 'Li-ion Battery', 'USB 3.0 x 1', '2 MP', 'Overall weight : 1.41kg / Tablet weight: 1.07kg / Keyboard weight: 0.34kg', 'Seashell Pink', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'DESC#0012', 'PROD#0035', 'C#002', 'Intel Celeron Processor N4020 (4M Cache, 1.10 GHz up to 2.80 GHz)', '14\" FHD (1920 x 1080) IPS Display', '4GB LPDDR4 RAM', '128GB SATA M.2 SSD', 'Intel UHD Graphics 600', 'Battery: 7.6V 4830mAh', 'USB 3.0 Type-A x 2', '2M WebCam', 'Starting from 1.377kg', 'Concrete Grey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'DESC#0013', 'PROD#0036', 'C#002', 'Intel Celeron Processor N4000 (4M Cache, 1.10 GHz up to 2.60 GHz)', '14\" FHD (1920 x 1080) IPS Display', '4GB LPDDR4 RAM', '128GB SATA M.2 SSD', 'Intel UHD Graphics 600', 'Battery: 7.6V 4830mAh', 'USB 3.0 Type-A x 2', '2M WebCam', 'Starting from 1.377kg', 'Matt Black', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'DESC#0014', 'PROD#0037', 'C#002', 'Intel Celeron Processor J3455 (2M Cache, 1.50 GHz up to 2.3 GHz)', '13.3\" 3K (3200 x1800), 16:9 Display', '8GB LPDDR4 RAM', '128GB eMMC + 128 GB SSD Total 256GB', 'Intel HD Graphics 500 , 250-750MHz', '38Wh (7.6V/5000mAh)', 'USB3.0 x 2', '2M WebCam', 'About 1.16kg', 'space gray', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'DESC#0015', 'PROD#0038', 'C#002', 'Intel Celeron Processor N4000 (4M Cache, 1.10 GHz up to 2.60 GHz)', '14\" FHD (1920 x 1080) IPS Display', '4GB LPDDR4 RAM', '256GB SATA M.2 SSD', 'Intel UHD Graphics 600', 'Battery: 7.6V 4830mAh', 'USB 3.0 Type-A x 2', '2M WebCam', 'Starting from 1.377kg', 'Matt Black', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'DESC#0016', 'PROD#0039', 'C#002', 'Intel Celeron Processor N4020 (4M Cache, up to 2.80 GHz)', '15.6\" diagonal FHD backlit (1920 x 1080) Display,', '4GB DDR4 RAM', '1TB HDD', 'Intel UHD Graphics 605', '38Wh (7.6V/5000mAh)', 'USB3.0 x 2', '720p HD camera', 'About 1.16kg', 'Silver', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'DESC#0017', 'PROD#0040', 'C#002', 'Intel Celeron N4020 (1.1 GHz base frequency, up to 2.8 GHz burst frequency, 4 MB L2 cache, 2 cores)', '15.6\" diagonal, HD (1366 x 768), micro-edge, BrightView, 220 nits, 45% NTSC', '4 GB DDR4-2400 MHz RAM (1 x 4 GB)', '1 TB 5400 rpm SATA HDD', 'Intel UHD Graphics 600', '3-cell, 41 Wh Li-ion', '1 SuperSpeed USB Type-C 5Gbps signaling rate; 2 SuperSpeed USB Type-A 5Gbps signaling rate;', 'HP True Vision 720p HD camera with integrated dual array digital microphones', 'Starting at 1.74 kg', 'Silver', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'DESC#0018', 'PROD#0041', 'C#002', 'Intel Celeron Processor N4020 (4M Cache, 1.10 GHz up to 2.80 GHz)', '14\" FHD (1920 x 1080) IPS Display', '4GB LPDDR4 RAM', '256GB SATA M.2 SSD', 'Intel UHD Graphics 600', 'Battery: 7.6V 4830mAh', 'USB 3.0 Type-A x 2', '2M WebCam', 'Starting from 1.377kg', 'Matt White', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'DESC#0019', 'PROD#0042', 'C#003', 'Intel Celeron J4005 Processor ( 2.00 GHz Up to 2.70 GHz, Cache 4 MB )', '', 'DDR4 at 2400MHz Up to 8 GB supported', 'Intel UHD Graphics 600', '2.5\" Up to 1TB Hard Drive SATA or Up to 256GB M.2 (NGFF) SSD) supported', '', '65 W Power adapter', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'DESC#0020', 'PROD#0043', 'C#003', 'Supports 10th/11th Gen Intel Core Processors (LGA1200) (Max. TDP 65W)', 'Intel H470 Chipset', 'Supports 2 x SO-DIMM DDR4-2933MHz, Max. 64GB (non-ECC)', 'HDMI (4K@30Hz) DisplayPort 1.4 DisplayPort 1.4 (with USB Type-C Alt Mode) D-Sub', '2 x SATA 6Gb 2.5-inch 7mm/9.5mm Hard Drive (RAID 0/1)', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'DESC#0021', 'PROD#0044', 'C#003', 'Intel Pentium Gold G5420 8th gen Coffee Lake Processor (03 years warranty)', 'ASRock H370M-HDV 8th and 9th Gen Micro ATX Motherboard (03 years warranty)', 'PATRIOT Signature Line 4GB DDR4 2666MHZ HEATSINK Desktop RAM (Lifetime warranty)', 'PNY CS900 120GB 2.5\" SATA III Internal SSD (03 years warranty)', '', 'MaxGreen G563BL Window ATX Casing', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'DESC#0023', 'PROD#0045', 'C#003', 'Intel Core i3-10100 10th Gen Processor', 'ASRock H470M-HDV 10th and 11th Gen Intel M-ATX Motherboard', 'Adata 4 GB DDR4 2666 BUS Desktop RAM', '', 'Toshiba P300 1TB Desktop PC Internal Hard Drive', ' MaxGreen 5909BB Casing', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'DESC#0024', 'PROD#0046', 'C#004', 'Intel', 'i3-10100F', '3.60 GHz', '4.30 GHz', '6 MB SmartCache', '4', '8', '', '41.6 GB/s', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'DESC#0025', 'PROD#0047', 'C#004', 'Intel', 'i3-10100', '3.60 GHz', '4.30 GHz', '6 MB SmartCache', '4', '8', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'DESC#0026', 'PROD#0048', 'C#005', 'GDDR3', '2GB', '', '954Mhz', '1000Mhz', '', '', '192', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'DESC#0027', 'PROD#0049', 'C#006', 'G20', '', 'Black', '8.2 ft', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'DESC#0030', 'PROD#0050', 'C#007', 'MT-C500', '', '19 keys anti-ghosting', '180cm', 'USB', 'More than 10 million times (Error-free running time)', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'DESC#0031', 'PROD#0051', 'C#007', 'Mechanical', 'wired', '84 Keys Color Coded', '1.5±0.01m', 'USB', '', 'Green, Blue, White, Red, Purple, Yellow', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'DESC#0032', 'PROD#0052', 'C#009', 'Viltrox EF-EOS M', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'DESC#007', 'PROD#0030', 'C#008', 'USB ', 'approx:131 x 68 x 42mm', 'LED light', '5 million times', '60 gm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'DESC#008', 'PROD#0031', 'C#006', 'gaming', 'light', 'black', '1.5m', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'DESC#009', 'PROD#0032', 'C#002', 'Intel Celeron Processor N3350 (1.10 GHz-2.40 GHz 2 MB Cache Cores: 2 Threads: 2)', '12.2\" TFT, (1920 x 1200) IPS Touch Screen', '4GB RAM', '64GB eMMC', 'Intel HD Graphics 500', 'Li-ion Battery', 'USB 3.0 x 1', '2 MP', 'Overall weight : 1.41kg / Tablet weight: 1.07kg / Keyboard weight: 0.34kg', 'Charcoal Grey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `order_quantity` bigint(20) NOT NULL,
  `order_price` decimal(10,2) NOT NULL,
  `order_payment_method` varchar(70) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `seller_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `order_date`, `order_quantity`, `order_price`, `order_payment_method`, `product_id`, `customer_id`, `seller_id`) VALUES
(13, 'Order#001', '2021-12-08', 3, '4500.00', 'cash_on_delivery', 'PROD#0030', 'C#0010', 'S#001'),
(14, 'Order#0014', '2021-12-08', 4, '84000.00', 'cash_on_delivery', 'PROD#001', 'C#0010', 'S#001'),
(15, 'Order#0015', '2021-12-08', 1, '1500.00', 'cash_on_delivery', 'PROD#0030', 'C#0010', 'S#001'),
(16, 'Order#0016', '2021-12-08', 2, '42000.00', 'cash_on_delivery', 'PROD#001', 'C#0010', 'S#001'),
(17, 'Order#0017', '2021-12-08', 2, '3000.00', 'cash_on_delivery', 'PROD#0030', 'C#0010', 'S#001'),
(18, 'Order#0018', '2021-12-08', 2, '4000.00', 'cash_on_delivery', 'PROD#0031', 'C#0010', 'S#001'),
(19, 'Order#0019', '2021-12-08', 3, '4500.00', 'cash_on_delivery', 'PROD#0030', 'C#0010', 'S#001'),
(20, 'Order#0020', '2021-12-08', 3, '6000.00', 'cash_on_delivery', 'PROD#0031', 'C#0010', 'S#001'),
(21, 'Order#0021', '2021-12-14', 2, '4000.00', 'cash_on_delivery', 'PROD#0031', 'C#0010', 'S#001'),
(22, 'Order#0022', '2021-12-14', 1, '1500.00', 'cash_on_delivery', 'PROD#0030', 'C#002', 'S#001');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_unit_price` decimal(10,2) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_quanity` bigint(20) NOT NULL,
  `upload_date` date NOT NULL,
  `product_image_1` varchar(255) DEFAULT NULL,
  `product_image_2` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `seller_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_id`, `product_name`, `product_unit_price`, `product_description`, `product_quanity`, `upload_date`, `product_image_1`, `product_image_2`, `category_id`, `seller_id`) VALUES
(29, 'PROD#001', 'Star PC AMD Athlon 3000G', '21000.00', 'The latest price of Star PC AMD Athlon 3000G in Bangladesh.It has 1 years warranty.', 16, '2021-12-07', 'PIMG-61afc2cf1bcb8.jpg', 'PIMG-61afc2cf1d79e.jpg', 'C#003', 'S#001'),
(30, 'PROD#0030', 'Meetion MT-GM22 Dazzling Gaming Mouse', '1500.00', 'The Meetion MT-GM22 has been ergonomically designed for a comfortable  use.It has 6 months warranty.', 23, '2021-12-07', 'PIMG-61afcbdc60619.jpg', 'PIMG-61afcbdc621c1.jpg', 'C#008', 'S#001'),
(31, 'PROD#0031', 'Corsair HS80 RGB Wireless Gaming Headphone', '2000.00', 'Corsair HS80 RGB Wireless Gaming Headphone for long time game playing with 1 years usage warranty.', 31, '2021-12-08', 'PIMG-61b09cb1dac04.jpg', 'PIMG-61b09cb1dc2fa.jpg', 'C#006', 'S#001'),
(32, 'PROD#0032', 'Avita Magus Celeron N3350 12.2\" FHD Laptop Charcoal Grey', '30000.00', 'Avita Magus Laptop comes with Intel Celeron Processor N3350 (1.10 GHz- 2.5 GHz). Long battery life and durable laptop with 1 years warranty. ', 28, '2021-12-14', 'PIMG-61b88c6712f78.jpg', 'PIMG-61b88c6714a6f.jpg', 'C#002', 'S#001'),
(33, 'PROD#0033', 'Avita Magus Celeron N3350 12.2\" FHD Laptop Steel Blue', '33000.00', 'Avita Magus Laptop comes with Intel Celeron Processor N3350 (1.10 GHz- 2.5 GHz). Long battery life and durable laptop with 1 years warranty. ', 40, '2021-12-14', 'PIMG-61b88d78d6abc.jpg', 'PIMG-61b88d78d794f.jpg', 'C#002', 'S#001'),
(34, 'PROD#0034', 'Avita Magus Celeron N3350 12.2\" FHD Laptop Seashell Pink', '40500.00', 'Avita Magus Laptop comes with Intel Celeron Processor N3350 (1.10 GHz-', 38, '2021-12-14', 'PIMG-61b88e4b0ea65.jpg', 'PIMG-61b88e4b100c3.jpg', 'C#002', 'S#001'),
(35, 'PROD#0035', 'AVITA Essential 14 Celeron N4020 14\" Full HD Laptop Concrete Grey Colo', '40700.00', 'AVITA Essential 14 Celeron N4020 14\" Full HD Laptop come with Intel Celeron N4020 . This laptop comes with 1 year warranty. ', 40, '2021-12-14', 'PIMG-61b88f2298758.jpg', 'PIMG-61b88f2299752.jpg', 'C#002', 'S#001'),
(36, 'PROD#0036', 'AVITA Essential 14 Celeron N4000 14\" Full HD Laptop Matt Black Color', '24000.00', 'AVITA Essential 14 Celeron N4000 14\" Full HD Laptop come with Intel Ce', 50, '2021-12-14', 'PIMG-61b890097c5b9.jpg', 'PIMG-61b890097d75d.jpg', 'C#002', 'S#001'),
(37, 'PROD#0037', 'Chuwi HeroBook Pro+ intel Celeron 13.3\" 3K Laptop', '30000.00', 'Chuwi HeroBook Pro+ Laptop comes with Intel Celeron Processor J3455. It has 1 year service warranty.', 47, '2021-12-14', 'PIMG-61b8912704a6a.jpg', 'PIMG-61b8912705b6c.jpg', 'C#002', 'S#001'),
(38, 'PROD#0038', 'AVITA Essential 14 Celeron N4000 256GB SSD 14\" Full HD Laptop Matt Bla', '30700.00', 'AVITA Essential 14 Celeron N4000 14\" Full HD Laptop come with Intel Celeron', 40, '2021-12-14', 'PIMG-61b892039b1c0.jpg', 'PIMG-61b892039ce21.jpg', 'C#002', 'S#001'),
(39, 'PROD#0039', 'HP 15s-du1087TU Intel Celeron N4020 15.6 inch FHD Laptop with Win 10', '35700.00', 'HP P15s-du1087TU Laptop comes with Intel Celeron Processor N4020 (4M C', 48, '2021-12-14', 'PIMG-61b8930248d9a.jpg', 'PIMG-61b8930249d64.jpg', 'C#002', 'S#001'),
(40, 'PROD#0040', 'HP 15s-du1115TU Celeron N4020 15.6\" HD Laptop', '35800.00', 'The 15s-du1115TU powered by Intel Celeron N4020 (1.1 GHz up to 2.8 GHz', 50, '2021-12-14', 'PIMG-61b894118da45.jpg', 'PIMG-61b894118f505.jpg', 'C#002', 'S#001'),
(41, 'PROD#0041', 'AVITA Essential 14 Celeron N4020 256GB SSD 14\" Full HD Laptop Matt Whi', '31500.00', 'AVITA Essential 14 Celeron N4020 14\" Full HD Laptop come with Intel Ce', 40, '2021-12-14', 'PIMG-61b894cdb06f6.jpg', 'PIMG-61b894cdb1d5d.jpg', 'C#002', 'S#001'),
(42, 'PROD#0042', 'Asus PN40 Celeron Dual Core Mini PC', '16800.00', 'The new ASUS Mini PC PN40 is the ideal solution for both home entertai', 36, '2021-12-14', 'PIMG-61b8962faeab6.jpg', 'PIMG-61b8962fb0234.jpg', 'C#003', 'S#001'),
(43, 'PROD#0043', 'ASRock DeskMini H470 Portable Mini PC', '18000.00', 'The new ASRock DeskMini H470 Portable Mini PC adopts an LGA1200 CPU so', 40, '2021-12-14', 'PIMG-61b8977ace0ea.jpg', 'PIMG-61b8977acf1fe.jpg', 'C#003', 'S#001'),
(44, 'PROD#0044', 'Flash Sale Pentium Gold G5420 8th Gen Special PC', '21500.00', 'The Flash Sale Pentium Gold G5420 8th Gen Special PC features Intel Pe', 38, '2021-12-14', 'PIMG-61b89899680ee.jpg', 'PIMG-61b898996937f.jpg', 'C#003', 'S#001'),
(45, 'PROD#0045', 'Star PC 10th Gen Core i3 10100', '31500.00', 'The customized Star PC 10th Gen Core i3 10100 comes with Intel Core i3', 40, '2021-12-14', 'PIMG-61b89913b5ee5.jpg', 'PIMG-61b89913b6ea0.jpg', 'C#003', 'S#001'),
(46, 'PROD#0046', 'Intel 10th Gen Core i3 10100F Processor', '88000.00', 'This processor comes with a new breed that come without an integrated ', 40, '2021-12-14', 'PIMG-61b89f7078d2a.jpg', 'PIMG-61b89f707a69b.jpg', 'C#004', 'S#0010'),
(47, 'PROD#0047', 'Intel 10th Gen Core i3 10100 Processor (Tray)', '11500.00', 'This processor comes with a new breed that come with an enabled integr', 40, '2021-12-14', 'PIMG-61b8a08d08b22.jpg', 'PIMG-61b8a08d0a60b.jpg', 'C#004', 'S#0010'),
(48, 'PROD#0048', 'Deepcool GH-01 A-RGB Graphics Card Holder', '1570.00', 'Deepcool GH-01 A-RGB Graphics Card Holder is a gaming accessory focuse', 40, '2021-12-14', 'PIMG-61b8b34667011.jpg', 'PIMG-61b8b34668700.jpg', 'C#005', 'S#0011'),
(49, 'PROD#0049', 'Edifier G20 7.1 Surround Sound Wired Gaming Headset (Black)', '5000.00', 'Edifier G20 is a 7.1 Surround Sound supported Wired Gaming Headset ava', 38, '2021-12-14', 'PIMG-61b8b78553af3.jpg', 'PIMG-61b8b78554a4e.jpg', 'C#006', 'S#006'),
(50, 'PROD#0050', 'MeeTion MT-C500 4 in 1 Backlit Gaming Combo', '10000.00', 'MeeTion MT-C500 comes with 4 in 1 Backlit Gaming Combo. This Combo has', 10, '2021-12-14', 'PIMG-61b8b88555814.jpg', 'PIMG-61b8b88556865.jpg', 'C#007', 'S#007'),
(51, 'PROD#0051', 'Meetion MT-K800 Colored Big Keys Kids Keyboard', '3000.00', 'The Meetion MT-K800 comes with 84 Keys Color Coded. It has green, blue', 40, '2021-12-14', 'PIMG-61b8b93a4ee6a.jpg', 'PIMG-61b8b93a50152.jpg', 'C#007', 'S#007'),
(54, 'PROD#0052', 'Viltrox EF-EOS M Lens Mount Adapter for Canon Cameras', '7000.00', 'Test Test', 118, '2021-12-14', 'PIMG-61b8d208c930f.jpg', 'PIMG-61b8d208caa77.jpg', 'C#009', 'S#002');

-- --------------------------------------------------------

--
-- Table structure for table `sales_report`
--

CREATE TABLE `sales_report` (
  `id` int(11) NOT NULL,
  `sales_report_id` varchar(255) NOT NULL,
  `quantity_sold` bigint(20) NOT NULL,
  `quantity_left` bigint(20) NOT NULL,
  `sold_date` date NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `seller_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `seller_id` varchar(255) NOT NULL,
  `seller_name` varchar(70) NOT NULL,
  `seller_contact_number` varchar(70) DEFAULT NULL,
  `seller_address` varchar(70) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `seller_id`, `seller_name`, `seller_contact_number`, `seller_address`, `user_id`) VALUES
(1, 'S#001', 'abdul', '01892783788', 'Malibagh,dhaka', 'U#002'),
(10, 'S#0010', 'Akhtar', NULL, NULL, 'U#0012'),
(11, 'S#0011', 'Parvin', NULL, NULL, 'U#0013'),
(3, 'S#002', 'Kamal', NULL, NULL, 'U#004'),
(4, 'S#004', 'Jamal', NULL, NULL, 'U#006'),
(5, 'S#005', 'Hossain', NULL, NULL, 'U#007'),
(6, 'S#006', 'Karim', NULL, NULL, 'U#008'),
(7, 'S#007', 'Rohim', NULL, NULL, 'U#009'),
(8, 'S#008', 'Rokeya Akter', '', '', 'U#0010'),
(9, 'S#009', 'Jaman', NULL, NULL, 'U#0011');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `upload_id` varchar(255) NOT NULL,
  `upload_date` date NOT NULL,
  `upload_product_quanity` bigint(20) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `seller_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  `user_password` varchar(70) DEFAULT NULL,
  `user_role` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_email`, `user_password`, `user_role`) VALUES
(1, 'U#001', 'nafis@gmail.com', 'gmail_pass_nafis', 'admin'),
(10, 'U#0010', 'rokeya@gmail.com', '$2y$10$qhAPzc5248L/iZX8Q9qSOOZ34STDac57s3pAvgf4kJakuoY/gQMWS', 'seller'),
(11, 'U#0011', 'jaman@gmail.com', '$2y$10$9ETOviZv9KfGYSMwLK5m.egjMq58DLowcYTS9Uwk7NKCpUlB2ewkG', 'seller'),
(12, 'U#0012', 'akhtar@gmail.com', '$2y$10$hFvcAJQ0XOkrut9vBHRfk.FfQ9YCxAb38sIm0ZssqseWcu.GRchku', 'seller'),
(13, 'U#0013', 'parvin@gmail.com', '$2y$10$dyntY08HsOfOI01meCJehO94g1rcB1wSElGDAjghxzaeY1zSTgd9i', 'seller'),
(14, 'U#0014', 'sony@gmail.com', '$2y$10$Okj.SGcFB3yyBLx/BDMNa.39QgGJtf.il71p2PGybcwiUzn4omJwi', 'customer'),
(15, 'U#0015', 'bony@gmail.com', '$2y$10$sP/iP6WAm2S4Sp2ia4kieOnD4eTsV1pXdJPF07CHKYupZDQOfRbdG', 'customer'),
(16, 'U#0016', 'goni@gmail.com', '$2y$10$rNX5hVNg2acjh0OeWJ7UH.N/vHeYFBLbkQmRoQTVZtEpFSwOUM0YW', 'customer'),
(17, 'U#0017', 'pritam@gmail.com', '$2y$10$Q7tlXI855IeMWaQb4unoneJ8KPJxzMDn.8gJbMRzE1VQ1D2ora35W', 'customer'),
(18, 'U#0018', 'raju@gmail.com', '$2y$10$aaXruaYk9MsJ7DdCaw7y9.6Yn/FoN2DJjjT/94zYAxw4I8.Br/tPC', 'customer'),
(19, 'U#0019', 'mina@gmail.com', '$2y$10$G4vUHfd2H9s0moz9pU.uSuheQ8bC3nQQ5xbhrLnzCj5c3Ghm4Lua.', 'customer'),
(2, 'U#002', 'abdul@gmail.com', '$2y$10$mzsBpUdMNbeT9QZjyzYN0.kaXXx0p3FONRZgtOTG2mjIa4cb.3U4S', 'seller'),
(20, 'U#0020', 'toma@gmail.com', '$2y$10$45RwsknKhlc/3OfILfc3tenF4yXYSxUJRFGDB/IK6KPPDGrICdsHK', 'customer'),
(21, 'U#0021', 'sifu@gmail.com', '$2y$10$UYwUtSNC.3MqYzTMLWt0p.5SqlLCl5dk8FTkzlVfMEwdNdnlUBFzW', 'customer'),
(22, 'U#0022', 'saif@gmail.com', '$2y$10$8UED41LBA/wRDuMck3zqDui7oNqUTdRbb0iqVcvbLucs2yzNxolWO', 'customer'),
(3, 'U#003', 'rony@gmail.com', '$2y$10$pMmynLEUo16L6uPgn1O7SOsKQsdPPvQZFOVwn6.cCfnqnse4u54HC', 'customer'),
(5, 'U#004', 'kamal@gmail.com', '$2y$10$yn4jQs0bOkOhtGCpSXuIueCktkg.XeeH.2pbH1E9F0PaiLBP5YHsa', 'seller'),
(6, 'U#006', 'jamal@gmail.com', '$2y$10$em60v4ZV55hhEM3CQyVo5.1W1yoqE.lSUICsihs4Dlz.RYeiRHRGW', 'seller'),
(7, 'U#007', 'hossain@gmail.com', '$2y$10$KwTftGNs7odqy3eImV8Ytu2d9e9OZJqbZahnLJzKl28EAzzyg/SHS', 'seller'),
(8, 'U#008', 'karim@gmail.com', '$2y$10$0zHehF4ccDjKDbZnJAoMZe4NCETBaV3I/JKGc152hYJzto69Q6/ji', 'seller'),
(9, 'U#009', 'rohim@gmail.com', '$2y$10$BlJJq8hE358HGsNaJrK5LOxJQFEHO7vbGgs.PyE1saJicuvFMbX9e', 'seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`description_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `sales_report`
--
ALTER TABLE `sales_report`
  ADD PRIMARY KEY (`sales_report_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`upload_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `sales_report`
--
ALTER TABLE `sales_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `description`
--
ALTER TABLE `description`
  ADD CONSTRAINT `description_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `description_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`);

--
-- Constraints for table `sales_report`
--
ALTER TABLE `sales_report`
  ADD CONSTRAINT `sales_report_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `sales_report_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `sales_report_ibfk_3` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `upload_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
