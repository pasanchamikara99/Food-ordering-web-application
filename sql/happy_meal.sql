-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 10, 2021 at 05:11 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happy_meal`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `food_image` varchar(255) NOT NULL,
  `food_id` int(11) NOT NULL,
  `food_item` varchar(255) NOT NULL,
  `food_catagory` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `user_name`, `food_image`, `food_id`, `food_item`, `food_catagory`, `price`, `qty`) VALUES
(45, 61, 'anura', 'beefburger.jpg', 14, 'Beef Burger', 'Burger', 850, 1),
(46, 61, 'anura', 'crispychicken.jpg', 15, 'Chicken Burger', 'Burger', 800, 1),
(47, 61, 'anura', 'veggieburger.jpg', 16, 'Veggie Burger', 'Burger', 650, 2),
(54, 57, 'pasan', 'devilledchicken.png', 28, 'Chicken Pizza', 'Pizza', 1699, 1),
(55, 57, 'pasan', 'vegitablepizza.png', 29, 'Veggie Pizza', 'Pizza', 1499, 1),
(56, 57, 'pasan', 'seafoodpizza.png', 27, 'SeaFood Pizza', 'Pizza', 1699, 1),
(57, 57, 'pasan', 'cheesepizza.png', 26, 'Cheese Pizza', 'Pizza', 1699, 1),
(58, 62, 'samantha', 'devilledchicken.png', 28, 'Chicken Pizza', 'Pizza', 1699, 1),
(59, 62, 'samantha', 'seafoodpizza.png', 27, 'SeaFood Pizza', 'Pizza', 1699, 1);

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `deal_id` int(11) NOT NULL,
  `deal_name` varchar(255) NOT NULL,
  `deal_price` int(11) NOT NULL,
  `deal_image` varchar(255) NOT NULL,
  `catagory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`deal_id`, `deal_name`, `deal_price`, `deal_image`, `catagory_name`) VALUES
(16, 'Family Combo', 2500, 'combopack.jpeg', 'family'),
(17, 'Crunchy Combo', 950, 'crunchycombo.jpeg', 'Couple'),
(18, 'Kids Combo', 1299, 'kidsdeal.jpeg', 'Kids'),
(20, 'Combo Deal', 1499, 'combodeal.jpeg', 'Couple');

-- --------------------------------------------------------

--
-- Table structure for table `food_catagory`
--

CREATE TABLE `food_catagory` (
  `catagory_ID` int(11) NOT NULL,
  `catagory_name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_catagory`
--

INSERT INTO `food_catagory` (`catagory_ID`, `catagory_name`, `image_name`) VALUES
(29, 'Rice', 'rice.jpg'),
(31, 'Burger', 'burger.jpg'),
(34, 'Pizza', 'pizzacatagory.jpg'),
(35, 'Kottu', 'kottu.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_image` varchar(255) NOT NULL,
  `food_catagory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`food_id`, `food_name`, `food_price`, `food_image`, `food_catagory`) VALUES
(12, 'Fish Burger', 500, 'fishburger.jpg', 'Burger'),
(14, 'Beef Burger', 700, 'beefburger.jpg', 'Burger'),
(15, 'Chicken Burger', 800, 'crispychicken.jpg', 'Burger'),
(16, 'Veggie Burger', 650, 'veggieburger.jpg', 'Burger'),
(22, 'Veggie Kottu', 500, 'veggiekottu.png', 'Kottu'),
(23, 'Cheese Kottu', 650, 'cheesekottu.png', 'Kottu'),
(24, 'SeaFood Kottu', 650, 'seafoodkottu.png', 'Kottu'),
(25, 'Chicken Kottu', 550, 'chickenkottu.png', 'Kottu'),
(26, 'Cheese Pizza', 1699, 'cheesepizza.png', 'Pizza'),
(27, 'SeaFood Pizza', 1699, 'seafoodpizza.png', 'Pizza'),
(28, 'Chicken Pizza', 1699, 'devilledchicken.png', 'Pizza'),
(29, 'Veggie Pizza', 1499, 'vegitablepizza.png', 'Pizza'),
(31, 'SeaFood Fried Rice', 700, 'seafoodrice.png', 'Rice'),
(34, 'Chicken Fried Rice', 500, 'chickenrice.png', 'Rice'),
(35, 'Egg Fried Rice', 450, 'eggrice.png', 'Rice'),
(37, 'Mix Fried Rice', 700, 'mixrice.png', 'Rice');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `quentity` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `food_name`, `quentity`, `Address`, `phone_no`, `payment_method`, `amount`, `date`) VALUES
(11, 'iman', 'Chicken Pizza', 1, 'Galle', 1004785236, 'cash on delivery', 1699, '2021-10-10 11:08:20'),
(12, 'pasan', 'Cheese Pizza', 1, 'Ahangama', 774852369, 'cash on delivery', 1699, '2021-10-10 11:08:20'),
(13, 'pasan', 'Beef Burger', 1, 'Gampaha', 774852369, 'cash on delivery', 850, '2021-10-10 11:08:20'),
(14, 'pasan', 'Chicken Burger', 3, 'Gampaha', 774852369, 'cash on delivery', 2400, '2021-10-10 11:08:20'),
(15, 'pasan', 'Crunchy Combo', 1, 'Ahangama', 774852369, 'cash on delivery', 950, '2021-10-10 11:08:20'),
(17, 'samantha', 'Cheese Pizza', 1, 'Galle', 748596345, 'cash on delivery', 1699, '2021-10-10 11:20:25'),
(18, 'admin', 'Family Combo', 1, 'Hittatiya Matara', 412536987, 'card', 2500, '2021-10-10 14:15:35'),
(20, 'admin', 'SeaFood Fried Rice', 1, 'Hittatiya', 412536987, 'cash on delivery', 700, '2021-10-10 14:44:15'),
(21, 'admin', 'Crunchy Combo', 1, 'Matale', 412536987, 'cash on delivery', 950, '2021-10-10 14:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `ID` int(10) NOT NULL,
  `U_name` varchar(50) NOT NULL,
  `U_mail` varchar(50) NOT NULL,
  `Sub` varchar(150) NOT NULL,
  `Msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phoneNo`, `email`, `password`, `userType`) VALUES
(37, 'saman', 415623147, 'samaan@gmail.com', '202cb962ac59075b964b07152d234b70', 'customer'),
(38, 'saman', 112545789, 'samaan1@gmail.com', '0c74b7f78409a4022a2c4c5a5ca3ee19', 'customer'),
(39, 'saman77', 114525789, 'samaan99@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'customer'),
(42, 'admin', 412536987, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(43, 'sachin', 774585963, 'sachin@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'customer'),
(44, 'Nimal De sliva', 745689321, 'nimalde@gmail.com', '2e65f2f2fdaf6c699b223c61b1b5ab89', 'customer'),
(45, 'kalum', 784512369, 'kalum@gmail.com', '1c1d4df596d01da60385f0bb17a4a9e0', 'customer'),
(46, 'sunimal', 415623147, 'saman@gmail.com', '1ce927f875864094e3906a4a0b5ece68', 'customer'),
(47, 'kasun', 714582369, 'kasun@gmail.com', 'ab233b682ec355648e7891e66c54191b', 'customer'),
(48, 'suni', 415823698, 'suni98@gmail.com', '1ce927f875864094e3906a4a0b5ece68', 'customer'),
(50, 'bigun', 778542369, 'bigun@gmail.com', '1ce927f875864094e3906a4a0b5ece68', 'customer'),
(51, 'kalunJaye', 114785236, 'kalum33@gmail.com', '202cb962ac59075b964b07152d234b70', 'customer'),
(52, 'krishantha', 417825369, 'krish@gmail.com', '202cb962ac59075b964b07152d234b70', 'customer'),
(54, 'iman', 1004785236, 'iman@gmail.com', '202cb962ac59075b964b07152d234b70', 'customer'),
(55, 'yasiru', 784512369, 'yasiru@gmail.com', '202cb962ac59075b964b07152d234b70', 'customer'),
(56, 'sirisena', 748521369, 'siril@gmail.com', '1ce927f875864094e3906a4a0b5ece68', 'customer'),
(57, 'pasan', 774852369, 'pasan@gmail.com', '2e65f2f2fdaf6c699b223c61b1b5ab89', 'customer'),
(60, 'samira', 714523698, 'samira98@gmail.com', 'df6d2338b2b8fce1ec2f6dda0a630eb0', 'customer'),
(61, 'anura', 748596321, 'anura89@gmail.com', 'ab233b682ec355648e7891e66c54191b', 'customer'),
(62, 'samantha', 748596345, 'samantha@gmail.com', 'ab233b682ec355648e7891e66c54191b', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `food_catagory`
--
ALTER TABLE `food_catagory`
  ADD PRIMARY KEY (`catagory_ID`);

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `deal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `food_catagory`
--
ALTER TABLE `food_catagory`
  MODIFY `catagory_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
