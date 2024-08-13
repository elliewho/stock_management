-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 09:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `receivedQuantity` int(255) NOT NULL,
  `utilization` int(255) NOT NULL,
  `balance_end` int(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `quantity`, `description`, `receivedQuantity`, `utilization`, `balance_end`, `category`) VALUES
(1, 'Acetate', 6, '', 0, 0, 6, 'Office Supply'),
(2, 'ADHESIVE TAPE WITH FOAM', 28, '', 0, 0, 28, 'Office Supply'),
(3, 'ADHESIVE TAPE WITHOUT FOAM', 25, '', 0, 0, 25, 'Office Supply'),
(4, 'ALCOHOL', 13, 'GALLON', 0, 0, 13, 'Office Supply'),
(5, 'BATTERY 9V', 10, '9V', 0, 0, 10, 'Office Supply'),
(6, 'BATTERY AA', 64, 'AA', 0, 0, 64, 'Office Supply'),
(7, 'BATTERY AAA', 49, 'AAA', 0, 0, 49, 'Office Supply'),
(8, 'BLADE CUTTER', 21, '', 0, 0, 21, 'Office Supply'),
(9, 'CASH BOOK', 20, '', 0, 0, 20, 'Office Supply'),
(10, 'CCF 1 PLY 11X14- 7/8 2 PLY', 110, '1 PLY 11X14- 7/8 2 PLY', 0, 0, 110, 'Office Supply'),
(11, 'FUJI XEROX TONER DOCUPRINT P 455D', 185, '', 0, 0, 185, 'IT Supply'),
(12, 'FUJI XEROX DRUMKIT 455D', 106, '', 0, 0, 106, 'IT Supply'),
(13, 'FUJI TONER CART DP - P 205', 39, '', 0, 0, 39, 'IT Supply'),
(14, 'HP INK CART.  BLACK M-1120', 14, '', 0, 0, 14, 'IT Supply'),
(15, 'INK FOR LASER JET M274N, BLACK', 4, 'BLACK', 8, 0, 12, 'IT Supply'),
(16, 'INK FOR LASER JET M274N, CYAN', 8, 'CYAN', 8, 0, 16, 'IT Supply'),
(17, 'INK FOR LASER JET M274N, MAGENTA', 19, 'MAGENTA', 8, 0, 27, 'IT Supply'),
(18, 'INK FOR LASER JET M274N, YELLOW', 13, 'YELLOW', 8, 0, 21, 'IT Supply'),
(19, 'MAINTENANCE KIT FOR KYOCERA TK 3165', 8, '', 20, 0, 28, 'IT Supply'),
(20, 'MAINTENANCE KIT FOR KYOCERA TK 3175', 18, '', 0, 0, 18, 'IT Supply'),
(21, 'RIBBON EPSON LQ 2180', 226, '', 0, 0, 226, 'IT Supply'),
(22, 'RIBBON OKI DOT MATRIX', 996, '', 0, 0, 996, 'IT Supply'),
(23, 'TONER FOR KYOCERA FS 4100 DN', 41, '', 0, 0, 41, 'IT Supply'),
(24, 'TONER FOR KYOCERA  ECOSYS P3060 DN TK 3165', 105, '', 0, 0, 105, 'IT Supply'),
(25, 'TONER FOR KYOCERA  ECOSYS TK 3195', 77, '', 0, 0, 77, 'IT Supply'),
(26, 'TONER FOR HP PRINTER 37A', 0, '', 27, 0, 27, 'IT Supply'),
(27, 'TONER HP 1100', 4, '', 0, 0, 4, 'IT Supply'),
(28, 'PREMIUM TONER CT202033, BLACK', 2, 'BLACK', 0, 0, 2, 'IT Supply'),
(29, 'PREMIUM TONER CT202034, CYAN', 4, 'CYAN', 0, 0, 4, 'IT Supply'),
(30, 'PREMIUM TONER CT202035, MAGENTA', 4, 'MAGENTA', 0, 0, 4, 'IT Supply'),
(31, 'PREMIUM TONER CT202036, YELLOW', 2, 'YELLOW', 0, 0, 2, 'IT Supply'),
(33, 'CLIP BACKFOLD 25MM', 149, '25MM', 0, 0, 149, 'Office Supply'),
(36, 'CLIP BACKFOLD 32MM', 204, '32MM', 0, 0, 204, 'Office Supply'),
(37, 'CLIP BACKFOLD 50MM', 110, '50MM', 0, 0, 110, 'Office Supply'),
(38, 'CLIP PAPER 50M', 437, '50M BIG', 0, 0, 437, 'Office Supply'),
(39, 'CORRECTION TAPE', 50, '', 0, 0, 50, 'Office Supply'),
(40, 'CORRUGATED BOX', 2051, '', 0, 0, 2051, 'Office Supply'),
(41, 'CUTTER', 4, '', 0, 0, 4, 'Office Supply'),
(42, 'DATA FILE FOLDER', 160, '', 0, 0, 160, 'Office Supply'),
(43, 'ENVELOPE WINDOW TYPE WITH PHIC LOGO', 250, 'WINDOW TYPE WITH PHIC LOGO', 0, 0, 250, 'Office Supply'),
(44, 'ENVELOPE BROWN, LEGAL SIZE', 28, 'BROWN, LEGAL SIZE', 0, 0, 28, 'Office Supply'),
(45, 'ENVELOPE, BROWN, A4', 26, 'BROWN, A4', 0, 0, 26, 'Office Supply'),
(46, 'ENVELOPE, EXPANDING', 9, 'EXPANDING', 0, 0, 9, 'Office Supply'),
(47, 'FASTENER, METAL', 237, 'METAL', 0, 0, 237, 'Office Supply'),
(48, 'FOLDER, TAGBOARD, A4', 60, 'TAGBOARD, A4', 0, 0, 60, 'Office Supply'),
(49, 'FOLDER, TAGBOARD, LEGAL SIZE', 35, 'TAGBOARD, LEGAL SIZE', 0, 0, 35, 'Office Supply'),
(50, 'GLUE', 136, '', 0, 0, 136, 'Office Supply'),
(51, 'GLUE STICK', 25, '', 0, 0, 25, 'Office Supply'),
(52, 'HAND SANITIZER GEL', 17, '', 0, 0, 17, 'Office Supply'),
(53, 'INK FOR BROTHER FAX  LC57BK', 26, '', 0, 0, 26, 'Office Supply'),
(54, 'INK, FOR STAMP PAD, VIOLET', 1256, 'VIOLET', 0, 0, 1256, 'Office Supply'),
(55, 'MARKER, FLOURESCENT', 19, 'FLOURESCENT', 0, 0, 19, 'Office Supply'),
(56, 'MARKER, PERMANENT, BLACK', 149, 'BLACK', 0, 0, 149, 'Office Supply'),
(57, 'MARKER, WHITEBOARD, BLACK', 58, 'BLACK', 0, 0, 58, 'Office Supply'),
(58, 'MARKER, WHITEBOARD, BLUE', 73, 'WHITEBOARD, BLUE', 0, 0, 73, 'Office Supply'),
(59, 'NOTEBOOK STENO', 25, '', 0, 0, 25, 'Office Supply'),
(60, 'NOTEPAD 3X4', 14, '', 0, 0, 14, 'Office Supply'),
(62, 'PAPER MULTI COPY A4 80 GSM (box)', 888, 'A4 80 GSM (BOX)', 0, 0, 888, 'Office Supply'),
(63, 'PAPER MULTI COPY LEGAL SIZE (REAMS)', 253, 'LEGAL SIZE (reams)', 0, 0, 253, 'Office Supply'),
(64, 'PAPER, PARCHMENT A4 (PACK)', 20, 'PARCHMENT A4 (PACK)', 0, 0, 20, 'Office Supply'),
(65, 'PITNEY BOWES INK', 10, '', 0, 0, 10, 'Office Supply'),
(66, 'PITNEY BOWES TAPE', 5, '', 0, 0, 5, 'Office Supply'),
(67, 'POST-IT FLAG STANDARD', 74, '', 0, 0, 74, 'Office Supply'),
(68, 'RECORD BOOK, 300 PAGES', 12, '300 PAGES', 0, 0, 12, 'Office Supply'),
(69, 'RECORD BOOK, 500 PAGES', 32, '500 PAGES', 0, 0, 32, 'Office Supply'),
(70, 'SIGN PEN, BLUE 0.7 MM', 427, 'BLUE 0.7 MM', 0, 0, 427, 'Office Supply'),
(71, 'SODIUM HYPOCLORITE', 102, '', 0, 0, 102, 'Office Supply'),
(72, 'STAMP PAD FELT PAD', 76, '', 0, 0, 76, 'Office Supply'),
(73, 'STAPLE WIRE', 548, '', 0, 0, 548, 'Office Supply'),
(74, 'STAPLER W/ REMOVER', 50, '', 0, 0, 50, 'Office Supply'),
(75, 'STICKER PAPER', 44, '', 0, 0, 44, 'Office Supply'),
(76, 'TACKER WIRE', 5, '', 0, 0, 5, 'Office Supply'),
(77, 'TAPE ADDING MACHINE', 6, '', 0, 0, 6, 'Office Supply'),
(80, 'TAPE PACKAGING', 751, '', 0, 0, 751, 'Office Supply'),
(81, 'TAPE TRANSPARENT #1', 77, '', 0, 0, 77, 'Office Supply'),
(82, 'TAPE TRANSPARENT #2', 376, '', 0, 0, 376, 'Office Supply'),
(83, 'TAPE TRANSPARENT #3', 81, '', 0, 0, 81, 'Office Supply'),
(84, 'TAPE DISPENSER #1', 2, '', 0, 0, 2, 'Office Supply'),
(85, 'TWINE', 0, '', 70, 0, 70, 'Office Supply'),
(86, 'WRAPPING PAPER', 3, '', 0, 0, 3, 'Office Supply'),
(87, 'BALLAST 40 W', 53, '40W', 0, 0, 53, 'Office Supply'),
(88, 'BULB 2U 15 W', 25, '15W', 0, 0, 25, 'Office Supply'),
(89, 'BULB 40 Watts', 8, '40 WATTS', 0, 0, 8, 'Office Supply'),
(90, 'LED Bulb 15w 220v', 8, '15w 220v', 0, 0, 8, 'Office Supply'),
(91, 'PIN Light 13w plug in', 50, '13w plug in', 0, 0, 50, 'Office Supply'),
(92, 'Bulb for incandescent compact fluorescent (CFL) halogen', 25, '', 0, 0, 25, 'Office Supply'),
(93, 'BALLPEN BLUE ', 4691, 'BLUE', 0, 0, 4691, 'Office Supply'),
(94, 'CASH BOX', 5, '', 0, 0, 5, 'Office Supply'),
(95, 'FLOURESCENT STARTER 40 WATTS', 12, '40 WATTS', 0, 0, 12, 'Office Supply'),
(96, 'FLOURESCENT TUBE 18W LED', 200, '18W LED', 0, 0, 200, 'Office Supply'),
(97, 'PHILHEALTH ID NUMBER CARD', 433334, '', 0, 0, 433334, 'Office Supply'),
(98, 'PHILHEALTH Lifetime member laminating film', 138, '', 0, 0, 138, 'Office Supply'),
(99, 'THERMAL PAPER', 28, '', 0, 0, 28, 'Office Supply'),
(100, 'INK FOR DUPLO PRINTING MACHINE', 68, '', 0, 0, 68, 'Office Supply'),
(101, 'MASTER FOR DUPLO PRINTING MACHINE', 24, '', 0, 0, 24, 'Office Supply'),
(102, 'AUTO SUPPLY CAR SHAMPOO', 8, '', 0, 0, 8, 'Office Supply'),
(103, 'AUTO SUPPLY CAR FRESHNER DEHUMIDIFIER', 32, '', 0, 0, 32, 'Office Supply'),
(104, 'AUTO SUPPLY EMERGENCY WORK LIGHT', 2, '', 0, 0, 2, 'Office Supply'),
(105, 'DISINFECTANT CLEANER', 15, '', 0, 0, 15, 'Office Supply'),
(106, 'DTR HARDBOUND', 0, '', 1000, 0, 1000, 'Office Supply'),
(107, 'RUBBER BAND', 624, '', 0, 0, 624, 'Office Supply'),
(108, 'SCISSOR', 21, '', 0, 0, 21, 'Office Supply'),
(109, 'SCISSORS', 6, '', 0, 0, 6, 'Office Supply'),
(110, 'BROTHER DRUMKIT DR2355', 11, '', 0, 0, 11, 'Office Supply'),
(111, 'BROTHER DRUMKIT DR 2255', 10, '', 0, 0, 10, 'Office Supply'),
(112, 'BROTHER DRUMKIT TN 2025', 3, '', 0, 0, 3, 'Office Supply'),
(113, 'BROTHER TONER TN2280', 6, '', 0, 0, 6, 'Office Supply'),
(114, 'BROTHER DR 3355 DRUMKIT', 2, '', 0, 0, 2, 'Office Supply'),
(115, 'BROTHER TONER TN 2260', 4, '', 0, 0, 4, 'Office Supply'),
(116, 'BROTHER TONER TN 2380', 4, '', 0, 0, 4, 'Office Supply'),
(117, 'PRE-PRINTED CERT. FOR MEMBERSHIP REGISTRATION', 8, '', 0, 0, 8, 'Office Supply'),
(124, 'TAPE, MASKING 2 INCH', 182, 'MASKING 2 INCH', 0, 0, 182, 'Office Supply'),
(125, 'TAPE, MASKING 1 INCH', 121, 'MASKING 1 INCH', 0, 0, 121, 'Office Supply');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `request_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
