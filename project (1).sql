-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 12:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(11, 'Anjali', 'anjalikediyal@gmail.com', '4dca9ea6c30fdb1719e21d61b50a22e4'),
(12, 'Siddhi', 'siddhi.singh561@gmail.com', 'a2178d258f532ce27060bcab6cdf69cd'),
(13, 'Rifat', 'rifatmulla7@gmail.com', '865494882dfdb3651eb7737b099baaef');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `datetime`, `status`) VALUES
(48, 'Anjali', 'Kediyal', 'anjall@gmail.com', '9342162244', 'What kind of different different flavors you provide.', '2022-05-01 20:28:55', 1),
(49, 'Siddhi', 'Singh', 'ss@gmail.com', '9023415672', 'How to be a member of this portal.', '2022-05-01 20:30:43', 1),
(50, 'Rifat ', 'Mulla', 'rr@gmail.com', '8923456123', 'What plans you provide for your sellers.', '2022-05-01 20:33:07', 1),
(52, 'Rita', 'Singh', 'rita@gmail.com', '8060809040', 'What kind of quality you provide to your customers.', '2022-05-18 15:43:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`) VALUES
(5, 'What are the delivery and shipping charges ?', '<div>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</div>', '2022-03-12 06:55:40'),
(6, ' How many variesties do you offers ?', '<div>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</div>', '2022-03-12 06:58:13'),
(7, 'Is the food you serve is healthy ?', '<div>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis.</div>', '2022-03-12 06:58:48'),
(9, 'How to order from a specific Baker ?', '<div>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</div>', '2022-03-12 06:59:41'),
(10, 'Do you have return policy ?', '<div>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.</div>', '2022-03-12 07:00:00'),
(27, 'how can i cancel my order', '<div>You can send message through contact form.</div>', '2022-04-30 12:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `customer_username` varchar(50) NOT NULL,
  `supplier_username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `customer_username`, `supplier_username`, `email`, `message`) VALUES
(13, 'Ifra', 'Starbakers', 'ifra@gmail.com', 'Yummy Delights.'),
(14, 'John', 'Starbakers', 'john@gmail.com', 'Thankyou for your service.'),
(15, 'Rita', 'Starbakers', 'rita@gmail.com', 'Tasty product. Thankyou');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `username`, `email`, `password`) VALUES
(12, 'Cakesmith', 'cakesmith@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'Starbakers', 'starbakers@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'Chefdelights', 'chefdelights@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(18, 'Cupcake', 'Food_Category_158.jpg', 'Yes', 'Yes'),
(25, 'Brownie', 'Food_Category_959.jpg', 'Yes', 'Yes'),
(26, 'Cake', 'Food_Category_907.jpg', 'Yes', 'Yes'),
(27, 'Donuts', 'Food_Category_334.jpg', 'Yes', 'Yes'),
(28, 'Ice-Cream', 'Food_Category_828.jpg', 'Yes', 'Yes'),
(29, 'Cookies', 'Food_Category_568.jpg', 'Yes', 'Yes'),
(30, 'Pastries', 'Food_Category_268.jpg', 'Yes', 'Yes'),
(33, 'Chocolates', 'Food_Category_269.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `supplier_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`, `username`, `supplier_location`) VALUES
(36, 'Vanilla delight', 'cripsed sprinkled with Vanilla icing at the top', '90.00', 'Food-Name-5479.jpg', 30, 'Yes', 'Yes', 'Starbakers', 'Mulund'),
(37, 'Crisped Cookies', 'Chocolate flavoured with chocolate syrup cookies.', '200.00', 'Food-Name-6176.jpg', 29, 'Yes', 'Yes', 'Starbakers', 'Mulund'),
(38, 'Chocolate Bites', 'Chocolate brust cake sliced.', '180.00', 'Food-Name-4058.jpg', 25, 'Yes', 'Yes', 'Starbakers', 'Mulund'),
(39, 'Chocolate Cake', 'Chocolate and Vanilla layered cake.', '300.00', 'Food-Name-6945.jpg', 26, 'Yes', 'Yes', 'Cakesmith', 'Thane'),
(40, 'Chocolate sliced', 'Chocolate brust cake sliced.', '200.00', 'Food-Name-8942.jpg', 25, 'Yes', 'Yes', 'Cakesmith', 'Thane'),
(41, 'Pudding', 'Newly arrived metled cream pudding of chocolate flavour.', '120.00', 'Food-Name-1404.jpg', 28, 'Yes', 'Yes', 'Chefdelights', 'Thane'),
(44, 'demo', 'demoo', '10.00', 'Food-Name-541.jpg', 28, 'No', 'No', 'Starbakers', 'thane');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(150) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `supplier_username` varchar(50) DEFAULT NULL,
  `supplier_location` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`, `supplier_username`, `supplier_location`) VALUES
(23, 'Crisped Cookies', '200.00', 2, '400.00', '2022-05-18 12:45:29', 'Delivered', 'John', '7678398398', 'john@gmail.com', 'Rose Villa, R. M. Road, Thane', 'Starbakers', 'Mulund'),
(24, 'Chocolate Bites', '180.00', 1, '180.00', '2022-05-18 12:47:40', 'Delivered', 'Ifra', '7845342146', 'ifra@gmail.com', '401-jahnvi Apartment, Mulund West', 'Starbakers', 'Mulund'),
(25, 'Pudding', '120.00', 1, '120.00', '2022-05-18 12:51:55', 'Ordered', 'Ifra', '7845342146', 'ifra@gmail.com', '401-jahnvi Apartment, Mulund West', 'Chefdelights', 'Thane'),
(26, 'Vanilla delight', '90.00', 1, '90.00', '2022-05-18 12:55:38', 'On Delivery', 'Rita', '8060809040', 'rita@gmail.com', 'Sector 12, Navi Mumbai, Maharashtra', 'Starbakers', 'Mulund');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(15, 'Rita', 'rita@gmail.com', '202cb962ac59075b964b07152d234b70'),
(16, 'John', 'john@gmail.com', '202cb962ac59075b964b07152d234b70'),
(17, 'Ifra', 'ifra@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
