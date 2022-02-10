-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 08:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `antiqueproducts`
--

CREATE TABLE `antiqueproducts` (
  `id` int(11) NOT NULL,
  `items` varchar(20) CHARACTER SET utf8 NOT NULL,
  `start_price` varchar(10) CHARACTER SET utf8 NOT NULL,
  `pic` varchar(30) CHARACTER SET utf8 NOT NULL,
  `details` varchar(200) CHARACTER SET utf8 NOT NULL,
  `type` text CHARACTER SET utf8 NOT NULL,
  `owner` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `h` varchar(20) CHARACTER SET utf8 NOT NULL,
  `m` varchar(20) CHARACTER SET utf8 NOT NULL,
  `s` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antiqueproducts`
--

INSERT INTO `antiqueproducts` (`id`, `items`, `start_price`, `pic`, `details`, `type`, `owner`, `email`, `date`, `h`, `m`, `s`) VALUES
(1, 'Antique watch1', '500', 'watch1.jpg', 'Royal Gold Gola Clock Dial - Brass Antique Pocket Gandhi Watch Royal Look Indian Handicraft Gift Item', 'watch', 'Pinki Rathore', '', '2022-01-12', '14', '17', '00'),
(2, 'Antique watch2', '1000', 'watch2.jpg', 'Royal Gold Brass Queen Elizabeth Dial - Antique Pocket Gandhi Watch Royal Look Indian Handicraft Gift Item', 'watch', 'Supriti Kamillya', '', '0000-00-00', '', '', ''),
(3, 'Antique watch3', '800', 'watch3.jpg', 'Royal Brass Antique Pocket Gandhi Watch Royal Look Indian Handicraft Gift Item', 'watch', 'Asif Jalal', '', '0000-00-00', '', '', ''),
(4, 'Antique compass1', '600', 'compass1.jpg', 'Quba Solid Brass Flat Pocket Compass with Chain Maritime Collectible Hiking Best Gift Chain Great Antique Item', 'compass', 'Ayan Pandab', '', '0000-00-00', '', '', ''),
(5, 'Antique compass2', '300', 'compass2.jpg', 'M/S Pearl Crafts Brass Antique Push Button 1\" Compass with Chain Great Antique Item', 'compass', 'Sayan Pandab', '', '0000-00-00', '', '', ''),
(6, 'Antique compass3', '600', 'compass3.jpg', 'Trishakti Stainless Steel Directional Pocket Magnetic Compass', 'compass', 'Sudip Sen', '', '0000-00-00', '', '', ''),
(7, 'Antique Idol1', '400', 'idol1.jpg', 'Global Grabbers Polyresin Idol Statue Showpiece for Home Decor Decoration and Gifting, Antique Silver, 24CM, 1Piece', 'idol', 'Sudip Jana', '', '0000-00-00', '', '', ''),
(9, ' Antique watch4', '3500', 'watch4.JPG', 'Artshai Antique Look Pocket watch with Sheesham wood box -Artshai355', 'watch', 'Santanu Mondal', '', '2022-01-16', '23', '59', '59'),
(12, 'idol2', '1500', 'idol2.jpg', 'Global Grabbers Polyresin Sitting Buddha Idol Statue Showpiece for Home Decor Diwali Decoration and Gifting, Orange and Black, 24CM, 1Piece ', 'idol', 'SAYAN', 'spandab.ee@gmail.com', '2022-01-18', '12', '59', '59');

-- --------------------------------------------------------

--
-- Table structure for table `antique_products_categories`
--

CREATE TABLE `antique_products_categories` (
  `id` int(11) NOT NULL,
  `category` text CHARACTER SET utf8 NOT NULL,
  `type` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antique_products_categories`
--

INSERT INTO `antique_products_categories` (`id`, `category`, `type`) VALUES
(1, 'Watch', 'watch'),
(2, 'Compass', 'compass'),
(3, 'Idol', 'idol');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(11) NOT NULL,
  `customer` text NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_image` varchar(20) NOT NULL,
  `start_price` varchar(20) NOT NULL,
  `customer_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `customer`, `item_name`, `item_image`, `start_price`, `customer_price`) VALUES
(9, 'sanu', 'Antique watch1', 'watch1.jpg', '500', 600),
(10, 'sanu', 'Antique Idol2', 'idol2.jpg', '300', 320),
(11, 'SAYAN', 'Antique watch2', 'watch2.jpg', '1000', 1050),
(12, 'sanu', 'Antique watch2', 'watch2.jpg', '1000', 1020),
(13, 'SAYAN', 'Antique Idol2', 'idol2.jpg', '300', 330),
(14, 'SAYAN', 'idol2', 'idol2.jpg', '1500', 1200),
(15, 'sanu', 'idol2', 'idol2.jpg', '1500', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `customer` text NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_image` varchar(30) NOT NULL,
  `item_price` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `customer`, `item_name`, `item_image`, `item_price`, `quantity`) VALUES
(133, 'sanu', 'TRUE HUMAN', 'bag.jpg', '599/-', 6),
(134, 'SAYAN', 'Vellinto', 'shoe.jpg', '671/-', 1),
(135, 'sanu', 'Dennis Lingo', 'shirt.jpg', '679/-', 2),
(136, 'SAYAN', 'Trussardi', 'sunglass.jpg', '2531', 2),
(137, 'SAYAN', 'Dennis Lingo', 'shirt.jpg', '679', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `type`) VALUES
(1, 'Colleges', 'college'),
(2, 'University', 'university');

-- --------------------------------------------------------

--
-- Table structure for table `generalproducts`
--

CREATE TABLE `generalproducts` (
  `id` int(11) NOT NULL,
  `items` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `details` varchar(200) NOT NULL,
  `type` text NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generalproducts`
--

INSERT INTO `generalproducts` (`id`, `items`, `price`, `pic`, `details`, `type`, `email`) VALUES
(1, 'Dennis Lingo', '679', 'shirt.jpg', 'Dennis Lingo Men\'s Checkered Slim fit Casual Shirt ', 'cloth', ''),
(2, 'Vellinto', '671', 'shoe.jpg', 'Royal Look Party Wear Shoes For Men ll Casual Shoes For Men ll Latest Patent Leather Boots for Men ', 'shoe', ''),
(3, 'Trussardi', '2531', 'sunglass.jpg', 'Trussardi Oversized Sunglasses (Black) (TE21131|C11|Free Size) ', 'sunglass', ''),
(4, 'TRUE HUMAN', '599', 'bag.jpg', 'TRUE HUMAN Emperor Anti-Theft backpack with combination lock Laptop bag , office bag , college bag ( Zyden ) ', 'bag', ''),
(5, 'shirt1', '500', 'shirt1.jpg', '\r\n    Care Instructions: Machine Wash\r\n    Fit Type: Regular\r\n    Material - 100% Cotton\r\n    Full sleeve, Collar style - Classic collar; Cuff style - Single cuff\r\n    Pattern - Printed Menâ€™s Formal', 'cloth', 'spandab.ee@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `general_products_categories`
--

CREATE TABLE `general_products_categories` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_products_categories`
--

INSERT INTO `general_products_categories` (`id`, `category`, `type`) VALUES
(1, 'Clothing', 'cloth'),
(2, 'Shoes', 'shoe'),
(3, 'Watches', 'watch'),
(4, 'Jewellery', 'jewellery'),
(5, 'Bags & Luggage', 'bag'),
(6, 'Sunglasses', 'sunglass');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_name` text NOT NULL,
  `menu_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `menu_url`) VALUES
(1, 'Home', 'index.php'),
(2, 'Create Id', 'create_id.php'),
(3, 'Update Details', 'password_for_edit.php'),
(4, 'Id-Cards', 'viewID.php');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `school_name` text NOT NULL,
  `school_pic` varchar(100) NOT NULL,
  `school_link` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `school_name`, `school_pic`, `school_link`, `type`) VALUES
(1, 'JADAVPUR UNIVERSITY', 'jadavpur.jpg', 'http://www.jaduniv.edu.in/', 'university'),
(2, 'SHIBPUR UNIVERSITY', 'shibpur.jpg', 'https://www.iiests.ac.in/', 'university'),
(3, 'Mallabhum Institute of Technology', 'mit.jpg', 'https://www.mitbishnupur.ac.in/', 'college'),
(4, 'Techno India College of Technology', 'techno.jpg', 'https://tint.edu.in/', 'college');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `Class` varchar(12) NOT NULL,
  `Roll_no` int(10) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`Id`, `Name`, `Address`, `Class`, `Roll_no`, `Image`, `Password`) VALUES
(28, 'Sayan Pandab', 'Patnabazar', '12', 1, 'IMG_20190421_080056442.jpg', '8944'),
(29, 'Sk Safiul', 'Patnabazar', '12', 2, '13-meissner2.pdf', '0987');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antiqueproducts`
--
ALTER TABLE `antiqueproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `antique_products_categories`
--
ALTER TABLE `antique_products_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalproducts`
--
ALTER TABLE `generalproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_products_categories`
--
ALTER TABLE `general_products_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antiqueproducts`
--
ALTER TABLE `antiqueproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `antique_products_categories`
--
ALTER TABLE `antique_products_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generalproducts`
--
ALTER TABLE `generalproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `general_products_categories`
--
ALTER TABLE `general_products_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
