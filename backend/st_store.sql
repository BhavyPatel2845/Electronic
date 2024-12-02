-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 03:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `st_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `quantity` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`cart_id`, `product_id`, `userEmail`, `quantity`) VALUES
(3, 4, 'ram@gmail.com', 1),
(5, 7, 'shyam@gmail.com', 1),
(6, 4, 'ram@gmail.com', 1),
(21, 5, 'shyam@gmail.com', 1),
(22, 5, 'utsavp377@gmail.com', 1),
(36, 13, 'patelbhavy2837@gmail.com', 1),
(37, 14, 'patelbhavy2837@gmail.com', 1),
(38, 9, 'patelbhavy2837@gmail.com', 1),
(41, 6, 'dhruvpatel@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminEmail` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminEmail`, `password`) VALUES
('bhavypatel@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `categoryName` varchar(20) NOT NULL,
  `categoryDetail` varchar(100) NOT NULL,
  `categoryImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `categoryName`, `categoryDetail`, `categoryImage`) VALUES
(1, 'Mobile', 'A portable electronic device for personal telecommunications over long distances, often supplemented', 'IMG-6740895d50de01.73511669.png'),
(3, 'Laptop', 'laptop computer, portable personal computer that features a screen, touch pad, and alphanumeric keyb', 'IMG-6740a409a53109.97283499.png'),
(4, 'Air burds', 'Airbuds is a free app that makes listening to music social.', 'IMG-6740a3fbaa4fe2.75121127.png'),
(5, 'smart watch', 'Smartwatches are capable of collecting personal health data such as activity levels, heart rate, sle', 'IMG-6740a3e8077cd3.61106563.png');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkout_id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `state` varchar(20) NOT NULL,
  `phoneNumber` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`checkout_id`, `firstName`, `lastName`, `address`, `city`, `pincode`, `state`, `phoneNumber`, `email`) VALUES
(1, 'bhavy', 'patel', 'shiv society', 'unjha', 384130, 'gujrat', 9876543211, 'patelbhavy2837@gmail.com'),
(2, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9012345678, 'bhavypatel2845@gmail.com'),
(37, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9012345678, 'bhavypatel2845@gmail.com'),
(38, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9876543211, 'bhavypatel2845@gmail.com'),
(39, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9876543211, 'bhavypatel2845@gmail.com'),
(40, 'raj', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9876543210, 'raj@gmail.com'),
(41, 'raj', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9876543210, 'raj@gmail.com'),
(42, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9898989898, 'bhavypatel2845@gmail.com'),
(43, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9000000000, 'bhavypatel2845@gmail.com'),
(44, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9000000000, 'bhavypatel2845@gmail.com'),
(45, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9090909090, 'bhavypatel2845@gmail.com'),
(46, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9090909090, 'bhavypatel2845@gmail.com'),
(47, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9090909090, 'bhavypatel2845@gmail.com'),
(48, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9090909090, 'bhavypatel2845@gmail.com'),
(49, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9876543212, 'bhavypatel2845@gmail.com'),
(50, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9876543212, 'bhavypatel2845@gmail.com'),
(51, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9876543211, 'bhavypatel2845@gmail.com'),
(52, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9876543211, 'bhavypatel2845@gmail.com'),
(53, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9876543211, 'bhavypatel2845@gmail.com'),
(54, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9012345678, 'bhavypatel2845@gmail.com'),
(55, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9012345678, 'bhavypatel2845@gmail.com'),
(56, 'utsav', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9087654321, 'utsavp377@gmail.com'),
(57, 'dhruv', 'patel', '04 , Pick-up Stand , Maherwada', 'Unjha', 384130, 'GJ', 9922884477, 'dhruvpatel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `userName`, `phoneNumber`, `email`, `message`) VALUES
(1, 'bhavy', 2147483647, 'bhavy@gmail.com', 'very nice website'),
(2, 'ram', 2147483647, 'ram@gmail.com', 'good website'),
(3, 'raj', 2147483647, 'raj@gmail.com', 'add wishlist feature'),
(4, 'Bhavy Patel', 1234567890, 'rajprajapati1234567890@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feddback_id` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feddback_id`, `productName`, `userName`, `userEmail`, `feedback`, `rating`) VALUES
(1, 'Apple iphone 16', 'Bhavy Patel', 'patelbhavy2837@gmail.com', 'very Good Product', 4),
(2, 'Xiaomi Notebook Pro', 'ram', 'shyampatel@gmail.com', 'good', 4),
(3, 'Apple iphone 16', 'Bhavy Patel', 'patelbhavy2837@gmail.com', 'good product', 5),
(4, 'Samsung Galaxy A16 5G ', 'Bhavy Patel', 'patelbhavy2837@gmail.com', 'good', 3),
(5, ' Fire-Boltt', 'Bhavy Patel', 'patelbhavy2837@gmail.com', 'good', 4),
(6, 'one plus nord buds', 'Bhavy Patel', 'patelbhavy2837@gmail.com', 'very good', 4);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `password`) VALUES
(1, 'patelbhavy2837@gmail.com', 'bhavy123'),
(2, 'utsavp377@gmail.com', '222222'),
(3, 'raj@gmail.com', '000000'),
(4, 'shyam@gamil.com', '999999'),
(5, 'ram@gmail.com', '123456'),
(6, 'dhruvpatel@gmail.com', 'dhruv123'),
(7, 'ram1@gmail.com', '098765'),
(8, 'shyampatel@gmail.com', '000000');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `paymentMethod` varchar(10) NOT NULL,
  `orderStatus` varchar(20) DEFAULT 'Pending',
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `userEmail`, `paymentMethod`, `orderStatus`, `price`, `created_at`) VALUES
(12, 9, 'patelbhavy2837@gmail.com', 'COD', 'Delivered', 20000.00, '2024-11-22 06:57:45'),
(13, 5, 'patelbhavy2837@gmail.com', 'COD', 'Delivered', 2000.00, '2024-11-22 06:57:45'),
(14, 9, 'patelbhavy2837@gmail.com', 'COD', 'Delivered', 20000.00, '2024-11-22 06:59:51'),
(15, 5, 'patelbhavy2837@gmail.com', 'COD', 'Rejected', 2000.00, '2024-11-22 06:59:51'),
(16, 9, 'patelbhavy2837@gmail.com', 'COD', 'Delivered', 20000.00, '2024-11-22 07:06:24'),
(17, 5, 'patelbhavy2837@gmail.com', 'COD', 'Delivered', 2000.00, '2024-11-22 07:06:24'),
(18, 7, 'patelbhavy2837@gmail.com', 'COD', 'Rejected', 1000.00, '2024-11-22 07:08:28'),
(21, 9, 'raj@gmail.com', 'COD', 'Delivered', 20000.00, '2024-11-22 09:29:23'),
(22, 9, 'raj@gmail.com', 'COD', 'Delivered', 40000.00, '2024-11-22 09:33:41'),
(23, 6, 'ram@gmail.com', 'UPI', 'Delivered', 97000.00, '2024-11-23 08:32:25'),
(24, 22, 'ram@gmail.com', 'UPI', 'Rejected', 2199.00, '2024-11-23 08:32:25'),
(25, 21, 'ram@gmail.com', 'UPI', 'Delivered', 24900.00, '2024-11-23 08:33:25'),
(26, 5, 'shyampatel@gmail.com', 'UPI', 'Delivered', 159998.00, '2024-11-23 08:56:57'),
(27, 21, 'shyampatel@gmail.com', 'COD', 'Confirmed', 24900.00, '2024-11-23 08:58:28'),
(28, 22, 'shyampatel@gmail.com', 'COD', 'Delivered', 2199.00, '2024-11-23 08:59:52'),
(29, 21, 'ram1@gmail.com', 'UPI', 'Confirmed', 24900.00, '2024-11-25 09:24:41'),
(30, 6, 'dhruvpatel@gmail.com', 'UPI', 'Rejected', 1.00, '2024-12-01 14:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `categoryName` varchar(20) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` int(3) NOT NULL,
  `processor` varchar(30) DEFAULT NULL,
  `memoryStorage` varchar(6) DEFAULT NULL,
  `ram` varchar(5) DEFAULT NULL,
  `frontCamera` varchar(6) DEFAULT NULL,
  `rearCamera` varchar(7) DEFAULT NULL,
  `battery` varchar(7) NOT NULL,
  `productImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `productName`, `detail`, `categoryName`, `price`, `discount`, `processor`, `memoryStorage`, `ram`, `frontCamera`, `rearCamera`, `battery`, `productImage`) VALUES
(5, 'Apple iphone 16', 'A18 chip with 5-core GPU\r\n6.1-inch all-screen OLED display (Super Retina XDR display)', 'Mobile', 79999.00, 0, '', '256gb', '8gb', '12mp', '50mp', '48mp', 'IMG-67408835281632.10964584.png'),
(6, 'sumsange Galaxy S23 Ultra', 'cwenn djjvie kwoepw wwoe', 'Mobile', 1.00, 0, ' Snapdragon 8 Gen 2 (4 nm)', '256gb', '12gb', '20mp', '100mp', '80mp', 'IMG-672c2ffdce3cb2.01488349.png'),
(7, 'nothing 2a 5g', '6.7', 'Mobile', 23999.00, 0, ' MediaTek Dimensity 7350 Pro c', '256gb', '12gb', '12mp', '80mp', '60mp', 'IMG-674087a013cd23.02665372.png'),
(8, 'Vivo v40e 5g', 'Powered by MediaTek Dimensity 7300, the Vivo V40e 6.77-inch 5G Smartphone ensures fast focus and imp', 'Mobile', 28999.00, 0, 'MediaTek Dimensity 7300', '128gb', '8gb', '12mp', '50mp', '5000mah', 'IMG-67408705ddce92.44188134.png'),
(9, 'Apple macbook air', 'The best AI PC is a Mac. Mac is powerful and intuitive, and puts your privacy first, so you can harn', 'Laptop', 59999.00, 0, '1.1GHz quad-core Intel Core i5', '256gb', '8gb', '', '', '18hr', 'IMG-6740864aaeae67.79255682.png'),
(10, 'Samsung Galaxy A16 5G ', 'The phone comes with a 90 Hz refresh rate 6.50-inch touchscreen display offering a resolution of 108', 'Mobile', 18999.00, 0, 'mediatek helio g35', '128gb', '8gb', '12mp', '50mp', '5000mah', 'IMG-6740859c797e03.44733564.png'),
(11, ' ASUS Vivobook 15', 'Light Laptop, Core i5-12500H 12th Gen, 15.6', 'Laptop', 49999.00, 0, 'Intel Pentium Gold 7505 Proces', '512gb', '8gb', '', '', '37WHrs,', 'IMG-674083e4ba2814.34779014.png'),
(12, 'HP processor', '16GB RAM/512GB SSD/FHD/15.6\" (39.6 cm)/Windows 11/MS Office\' 21/Backlit Keyboard/Silver/ 1.59 kg', 'Laptop', 59999.00, 0, 'Core i5 13th Gen ', '512gb', '16gb', '', '', ' 7 hour', 'IMG-67408eeecc4566.92397688.png'),
(13, 'Xiaomi Notebook Pro', 'Xiaomi Notebook Pro 120G 12th Gen Intel i5-12450H Thin & Light (16GB LPDDR5 RAM/512GB SSD/Nvidia MX5', 'Laptop', 61999.00, 0, 'Intel i5 11300H', '512gb', '16gb', '', '', '', 'IMG-674090cc5ee443.00142573.png'),
(14, 'airpods pro 2', 'The new AirPods combine intelligent design with breakthrough technology and crystal clear sound. Pow', 'Air burd', 31999.00, 0, '', '', '', '', '', '40 hour', 'IMG-674091cbb3ad99.87109116.png'),
(15, 'boat airdopes 311', ' 50 HRS Playtime, ASAP Charge(10min=150 Mins), Dual Mics w/ENx Tech, Transparent ID, 50 ms Beast Mod', 'Air burd', 1099.00, 0, '', '', '', '', '', '50 hour', 'IMG-674092e0ae3a62.72050931.png'),
(16, 'mivi', 'Mivi SuperPods Halo [Flagship Launch], True Wireless Earbuds, ANC Earbuds with 3D Soundstage, 60H Pl', 'Air burd', 1999.00, 0, '', '', '', '', '', '60h', 'IMG-67409430eec258.15163170.png'),
(17, 'one plus nord buds', 'True Wireless in Ear Earbuds with Mic, 12.4mm Drivers, Playback:Upto 38hr case,4-Mic Design, IP55 Ra', 'Air burd', 3999.00, 0, '', '', '', '', '', '60hours', 'IMG-67409ddb4f8ca5.74123355.png'),
(20, 'redmi watch 5', 'Lite|1.96\" AMOLED Screen|in-Built GPS|BT Calling 2mic ENC|5 ATM|HyperOS Connectivity|18 Days Battery', 'Samrt Watch', 3399.00, 0, '', '', '', '', '', '', 'IMG-6740a1194897f8.51748342.png'),
(21, 'apple watch se', '[GPS 40mm] Smartwatch with Aluminum Case with Midnight Sport Band. Fitness & Sleep Tracker, Crash De', 'smart watch', 24900.00, 0, '', '', '', '', '', '', 'IMG-6740a1b26e3186.08345810.png'),
(22, ' Fire-Boltt', 'Moonwatch 36.3mm (1.43 inch) AMOLED Display, Wireless Charging, Metallic Frame, Premium Leather Stra', 'smart watch', 2199.00, 0, '', '', '', '', '', '', 'IMG-6740a24290ed35.88474216.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phoneNumber` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `dob`, `city`, `pincode`, `phoneNumber`, `email`) VALUES
(1, 'Bhavy Patel', '2024-09-30', 'unjha', 384130, 9876543210, 'patelbhavy2837@gmail.com'),
(2, 'Utsav', '2024-10-16', 'unjha', 384130, 2147483647, 'utsavp377@gmail.com'),
(3, 'Raj', '2024-12-03', 'unjha', 384130, 2147483647, 'raj@gmail.com'),
(4, 'shyam', '2024-11-13', 'unjha', 123456, 2147483647, 'shyam@gmail.com'),
(24, 'Ram', '2024-11-07', 'surat', 385001, 9900118822, 'ram@gmail.com'),
(25, 'dhruv patel', '2024-11-01', 'Unjha', 384130, 9012345678, 'dhruvpatel@gmail.com'),
(26, 'ram', '2024-11-08', 'surat', 384001, 9090909090, 'ram1@gmail.com'),
(27, 'shyam', '2024-11-07', 'Unjha', 384130, 9087654321, 'shyampatel@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminEmail`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkout_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feddback_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feddback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
