-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 07:26 PM
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
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'piyush', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `txnid` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `proinfo` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mihpayid` varchar(255) NOT NULL,
  `transtatus` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `username`, `password`, `txnid`, `amount`, `proinfo`, `fname`, `email`, `mihpayid`, `transtatus`, `message`) VALUES
(14, 'piyush', '81dc9bdb52d04dc20036dbd8313ed055', 'Txn55327497', '599.00', 'Slim Men Blue Jeans', 'ahhsh', 'jivendhakad08@gmail.com', '324904', 'success', 'Transaction Successful...'),
(15, 'piyush', '81dc9bdb52d04dc20036dbd8313ed055', 'Txn69986487', '599.00', 'Slim Men Blue Jeans', 'piyush', 'piyushjidhakad08@gmail.com', '324907', 'success', 'Transaction Successful...'),
(16, 'piyush', '81dc9bdb52d04dc20036dbd8313ed055', 'Txn80086012', '854.00', 'Regular Men Dark Blue J', 'piyush', 'abc@gmail.com', '325059', 'success', 'Transaction Successful...'),
(17, 'piyush', '81dc9bdb52d04dc20036dbd8313ed055', 'Txn32602922', '497.00', 'Running Shoes For Men', 'haRSHal', 'harshal@gmail.com', '325061', 'success', 'Transaction Successful...'),
(18, 'Ujjval', '202cb962ac59075b964b07152d234b70', 'Txn18636226', '385.00', 'Combo(BR)-1077-349 Sneakers For Men', 'ujjval', 'ujjval@gmai.com', '325898', 'success', 'Transaction Successful...'),
(19, 'Ujjval', '202cb962ac59075b964b07152d234b70', 'Txn18636226', '385.00', 'Combo(BR)-1077-349 Sneakers For Men', 'ujjval', 'ujjval@gmai.com', '325898', 'success', 'Transaction Successful...'),
(20, 'piyush', '202cb962ac59075b964b07152d234b70', 'Txn48649755', '499.00', 'Combo Pack of 2 Casual Shoes Loafers For Men', 'Ujjval', 'jivendhakad08@gmail.com', '339231', 'success', 'Transaction Successful...');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `rs` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `offer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `desc`, `rs`, `category`, `offer`) VALUES
(1, 'Wrangler', 'jeans1.jpg', 'Slim Men Blue Jeans', '599', 'mens', '1'),
(2, 'Ben Martin', 'jeans2.jpg', 'Regular Men Dark Blue J', '854', 'mens', '1'),
(3, 'Minaro', 'jeans4 (1).jpg', 'Skinny Women\'s Light Blue Jeans', '649', 'womens', '1'),
(4, 'Tokyo Talkies', 'jeans3.jpg', 'Skinny Women\'s Black Jeans', '875', 'womens', '1'),
(6, 'Metronaut', 'css.jpg', 'Men Solid Casual Shirt', '279', 'mens', '1'),
(7, 'Chevit', 'gg.jpg', 'Combo Pack of 2 Casual Shoes Loafers For Men', '499', 'mens', '1'),
(9, 'Highlander', 'cs.jpg', 'Men\'s Checkered Casual Regular Shirt', '499', 'mens', '1'),
(10, 'MAXEOM', 'b.jpg', 'Girls Midi/Knee Length Casual Dress', '232', 'womens', '1'),
(11, 'Bersache', 'red&blackshshoes.jpeg', 'Combo(BR)-1077-349 Sneakers For Men', '385', 'mens', '1'),
(12, 'TR', 'shoes-black.jpeg', 'Derby For Men  (Black)', '378', 'mens', '1'),
(14, 'Adza', 'military-1-8-adza-khaki-original-imaf68ffwq4eyszy.jpeg', 'Running Shoes For Men', '497', 'mens', '1'),
(15, 'Asus Laptop', 'asus-na-gaming-laptop-original-imaf9phauskc5guc.jpeg', 'Asus TUF Core i5 8th Gen - (8 GB/1 TB HDD/128 GB 4 GB Graphics) FX504GD-E4363T Gaming Laptop ', '64990', 'electronic', '0'),
(17, 'Electric Kettle ', 'prestige-1-5-original-imaf9czcjzfueh9r.jpeg', 'Prestige PKOSS Electric Kettle  (1.5 L, Silver)', '760', 'electronic', '0'),
(18, 'Mixer Grinder', 'maharaja-whiteline-mg-neo-neo-mx-147-original-imaewdgj2ma62s8m.jpeg', 'Maharaja Whiteline Neo (MX-147) 500 W Mixer Grinder  (White, 3 Jars)', '1649', 'electronic', '0'),
(19, 'Electric Sewing Machine', 'fm-promise-1409-singer-original-imaf8a4gdhyfnmzh.jpeg', 'Singer FM Promise 1409 Electric Sewing Machine  ( Built-in Stitches 9)', '6649', 'electronic', '0'),
(20, 'UZEE T-Shirt', 'l-25rwn-lewel-original-imafbbjwskwhtamw.jpeg', 'Color block Men Hooded Multicolor T-Shirt', '440', 'mens', '0'),
(21, 'Nike Track Pants', 'm-805155-091black-nike-original-imaf9crpqgwmyzhy.jpeg', 'Solid Men Grey Track Pants PriceGet extra 15% ', '1567', 'mens', '0'),
(22, 'Gant Sweater', 'abccccc.jpeg', 'Striped V-neck Casual Men Red Sweater', '1999', 'mens', '0'),
(23, 'Gesture Watch', '61-bond-blue-gesture-original-imaeyag6fyhffxn9.jpg', '61 Bond Blue Collection Watch - For Men', '150', 'mens', '0'),
(24, 'Hair Shaver', 'profiline-gv-715-cordless-pro-super-power-professional-hair-original-imafabqhxecdqkgy.jpeg', 'Profiline Cordless PRO SUPER POWER Professional Hair Shaver For Men  (Multicolor)', '363', 'mens', '0'),
(25, 'Monte Carlo ', 'l-nehru-coat-mazenta-black-l-hardys-original-imaf9uvhttxguduq.jpeg', 'Women Button Solid Cardigan ', '920', 'womens', '0'),
(26, 'DARZI ', 'l-darzi-9647-darzi-original-imafarjt6tbhtsdd.jpeg', 'Sleeveless Solid Women Jacket Women Button Solid Cardigan ', '398', 'womens', '0'),
(27, 'Miss Chase ', 's-mcss18den02-29-62-miss-chase-original-imafdpn7auzwb6rg.jpeg', 'Slim Women Black Jeans Sleeveless Solid Women ', '999', 'womens', '0'),
(28, 'Aqua Gel', '50-9-to-5-naturale-aloe-aqua-gel-lakme-original-imafcthtjyfmxzfg.jpeg', 'Lakme 9 to 5 Naturale Aloe Aqua Gel Primer - 50 g  (Transparent)', '169', 'womens', '0'),
(29, 'Asian Casual Shoe', 'vl11cpnk-amy23cpnk-6-asian-multicolor-original-imaf68htedxtynsh.jpeg', 'Running Shoes,Gym Shoes,Canvas Shoes,Casual Shoes,Loafers,Sneakers, Sneakers For Women  (Multicolor)', '552', 'womens', '0'),
(30, 'Aks Kurti', 'ezgif.com-gif-maker.gif', 'Casual Printed Women Kurti  (Green)Special price', '623', 'womens', '0');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `image`, `desc`) VALUES
(10, 'banner_image', 'banner2.jpg', '20% sell on Colmbus'),
(13, 'new', 'Home-Products._CB454409463_.jpg', 'new img'),
(17, 'Mobiles', 'mobile.jpg', 'offes on mobiles and accessories'),
(18, 'Home store ', 'yingcht_2017-06-30T08-40_948d7c_Amazon_GW_DesktopHero_Template_1500x300_02.jpg', 'Offes on home produucts'),
(19, 'Leptops', '_D9144767_A-CEPC_PC_Laptop_Buying_Guide_gaming-laptops_Contentgrid_tile_993x507-2.jpg', 'Gameing Laptops'),
(20, 'Bloototh Speaker', 'aShop-India-Echo-Dot._CB453473884_.jpg', 'Bloototh Speaker on mega offers');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `uploadimage` varchar(255) NOT NULL,
  `cameraimage` varchar(255) NOT NULL,
  `orderid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mobile`, `dob`, `gender`, `city`, `state`, `pincode`, `address`, `uploadimage`, `cameraimage`, `orderid`) VALUES
(33, 'Ujjval', 'ujjval@gmai.com', '81dc9bdb52d04dc20036dbd8313ed055', '9755178521', '2019-04-03', 'Male', 'ujjain', 'M.P.', '456001', 'ujjain', '88888-526-Business-inRed.jpg', '5cbc11d6b56b3.png', 'Txn18636226'),
(38, 'piyush', 'piyushdhakad@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '2019-05-01', 'Male', 'ujjain', 'M.P.', '456001', 'ujjain', 'Dark-Modern-Office-Background1.png', '5ccec11ba544b.png', 'Txn48649755');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
