-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2020 at 07:32 AM
-- Server version: 5.7.29-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_items`
--

CREATE TABLE `tbl_cart_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='collection of items';

--
-- Dumping data for table `tbl_cart_items`
--

INSERT INTO `tbl_cart_items` (`id`, `product_id`, `quantity`, `user_id`, `created`, `modified`) VALUES
(78, 40, 1, 1, '2020-04-16 23:01:01', '2020-04-17 13:58:15'),
(79, 36, 3, 1, '2020-04-16 23:01:05', '2020-04-17 14:04:32'),
(80, 31, 1, 1, '2020-04-16 23:01:10', '2020-04-16 15:01:10'),
(81, 29, 1, 1, '2020-04-16 23:01:13', '2020-04-16 15:01:13'),
(82, 28, 1, 1, '2020-04-16 23:01:17', '2020-04-16 15:01:17'),
(83, 30, 1, 1, '2020-04-16 23:01:19', '2020-04-16 15:01:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `description`, `price`, `created`, `modified`) VALUES
(27, 'San Antonio Spurs Kawhi Leonard #2 \nAdidas Black T-Shirt', 'Kawhi Leonard San Antonio Spurs T shirt, made by Adidas the official on court producers of NBA apparel and jerseys.\nLeonard and 2 are printed on the back in authentic font.\n&lt;ul&gt;\n&lt;li&gt;Basic Print&lt;/li&gt;\n&lt;li&gt;Officially licensed NBA Product&lt;/li&gt;\n&lt;li&gt;NBA Hologram Sticker&lt;/li&gt;\n&lt;li&gt;Mens Sizing&lt;/li&gt;\n&lt;li&gt;100% Cotton&lt;/li&gt;\n&lt;li&gt;Adidas &quot;Go To Tee&quot;&lt;/li&gt;\n&lt;/ul&gt;', '99.99', '2016-10-28 20:49:40', '2016-10-28 12:49:40'),
(28, 'LaMarcus Aldridge San Antonio Spurs NBA Adidas Player Black T-Shirt', 'Looks like a jersey, wears like a tee -- this 100% cotton Adidas NBA player name and number t-shirt sports screen prints of your favorite player\'s name and number, plus team graphics on the chest.\r\nOfficially licensed by the NBA.', '49.99', '2016-10-28 20:52:43', '2016-10-28 12:52:43'),
(29, 'Tim Duncan San Antonio Spurs Jersey Name and Number T-Shirt', 'Cheer on Tim Duncan and the Spurs as they begin their road to repeating as NBA champions.\r\nShow your support for Duncan and the San Antonio Spurs in your very own black Spurs Name and Number Tee.', '29.99', '2016-10-28 20:56:23', '2016-10-28 12:56:23'),
(30, 'Women\'s Customized San Antonio Spurs Black Replica Basketball Jersey', 'San Antonio Spurs Custom Jerseys with any name and number.\r\nChoose the style and size.\r\nThere\'s no better way to prove your loyalty than to make this jersey your own.', '29.99', '2016-10-28 20:58:02', '2016-10-28 12:58:02'),
(31, 'Klay Thompson Golden State Warriors Jersey Name and Number T-Shirt', 'It\'s Splash Time!\r\nMake sure to show your support for the second half of the splash bros and get your very own Warriors Name and Number Tee.', '29.99', '2016-10-28 20:59:20', '2016-10-28 12:59:20'),
(32, 'Stephen Curry Golden State Warriors #30 NBA Youth Climalite Player T-Shirt Blue', 'Featuring your favorite player\'s name and number on back with team logo at front, this Climalite polyester t-shirt provides the ultimate display of pride for a die-hard fan!', '29.99', '2016-10-28 21:03:19', '2016-10-28 13:03:19'),
(33, 'Adidas Men\'s NBA Golden State Warriors-Kevin Durant #35-Mesh Logo T-Shirt', 'Show off how excited you are to welcome Kevin Durant to you Golden State Warriors with this Mesh Logo Tee from adidas.\r\nIt features cool graphics made from jersey like mesh and has KD\'s name and number on the back.\r\nA great look, whether you\'re at the game, or a friends house watching the new look Warriors.', '29.99', '2016-10-28 21:05:30', '2016-10-28 13:05:30'),
(34, 'Klay Thompson Golden State Warriors Charcoal Chinese New Year Name and Number T-shirt', 'Cheer on Klay all the way to the NBA Finals in style with this unique Chinese New Year Jersey Name and Number t-shirt by adidas.', '29.99', '2016-10-28 21:06:34', '2016-10-28 13:06:34'),
(35, 'Kevin Durant #35 Women\'s Replica Name and Number Short Sleeve', 'Let everyone know who you will be cheering for this season in the adidas U Series high density name &amp;amp; number tee.\r\nAdidas is the official outfitter of the NBA and this tee is the authentic take down name &amp;amp; number tee of your MVP.\r\nA high density screen print on a soft cotton tee is a must have for every true NBA fan.', '32.24', '2016-10-28 21:08:05', '2016-10-28 13:08:05'),
(36, 'LeBron James Men\'s Navy Cleveland Cavaliers adidas Swingman Jersey', 'Prove you are the #1 LeBron James fan with this Swingman jersey from adidas\r\nThis Swingman is the ultimate Cleveland Cavaliers jersey. Whether it\'s going to the game, spending time with your friends or anything in-between - this jersey does it all.\r\nThe Swingman includes adidas Climacool performance mesh fabrication and one layer twill wordmark, name, number applications.\r\nThe NBA Swingman jersey - the most authentic Swingman ever made.', '109.93', '2016-10-28 21:08:52', '2016-10-28 13:08:52'),
(37, 'NBA Cleveland Cavaliers Kyrie Irving #2 Men\'s Replica Jersey', 'Detailed to look like a real NBA jersey and priced to make you cheer!\r\nThis quality NBA Adidas Replica Revolution Jersey features screen printed team graphic, screen printed player name and number on the front and back, tagless collar, and embroidered Adidas and NBA logo\'s on the front.\r\nThis new style Adidas replica jersey is made of breathable, easy-care 100% polyester with Clima Cool fabrication. Officially licensed by the NBA.', '46.99', '2016-10-28 21:09:44', '2016-10-28 13:09:44'),
(38, 'Kevin Love Cleveland Cavaliers #0 NBA Youth Road Jersey Wine', 'Detailed to look like a real NBA jersey, sized for a youth, and priced to make you cheer!\r\nThis quality NBA Adidas Replica Jersey features screen printed team graphic, screen printed player name and number on the front and back, tagless collar, and embroidered Adidas and NBA logo\'s on the front.\r\nPerfect for your child or for gift giving. Made of breathable, easy-care 100% polyester with Clima Cool fabrication. Officially licensed by the NBA.', '29.99', '2016-10-28 21:46:06', '2016-10-28 13:46:06'),
(40, 'For Mens San Antonio Spurs Kawhi Leonard #2 Cream White Christmas Day Swingman Basketball Jersey', 'This is 100% mesh polyester breathable and quick-dry jersey.\nPlayer name and number graphics deliver classic style. priced to make you cheer.\nIt will be the best gift for you or your friend and family.', '2000.00', '2016-11-02 20:15:38', '2016-11-02 12:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_images`
--

CREATE TABLE `tbl_product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Images files related to products';

--
-- Dumping data for table `tbl_product_images`
--

INSERT INTO `tbl_product_images` (`id`, `product_id`, `name`, `created`, `modified`) VALUES
(77, 27, 'p11.jpg', '2016-10-28 20:49:40', '2016-10-28 00:49:40'),
(78, 27, 'p12.jpg', '2016-10-28 20:49:40', '2016-10-28 00:49:40'),
(79, 28, 'p21.jpg', '2016-10-28 20:52:43', '2016-10-28 00:52:43'),
(80, 28, 'p22.jpg', '2016-10-28 20:52:43', '2016-10-28 00:52:43'),
(81, 29, 'p31.jpg', '2016-10-28 20:56:23', '2016-10-28 00:56:23'),
(82, 29, 'p32.jpg', '2016-10-28 20:56:23', '2016-10-28 00:56:23'),
(83, 30, 'p41.jpg', '2016-10-28 20:58:02', '2016-10-28 00:58:02'),
(84, 31, 'p51.jpg', '2016-10-28 20:59:20', '2016-10-28 00:59:20'),
(85, 31, 'p52.jpg', '2016-10-28 20:59:20', '2016-10-28 00:59:20'),
(86, 32, 'p61.jpg', '2016-10-28 21:03:19', '2016-10-28 01:03:19'),
(87, 32, 'p62.jpg', '2016-10-28 21:03:19', '2016-10-28 01:03:19'),
(89, 33, 'p71.jpg', '2016-10-28 21:05:30', '2016-10-28 01:05:30'),
(90, 33, 'p72.jpg', '2016-10-28 21:05:30', '2016-10-28 01:05:30'),
(91, 34, 'p81.jpg', '2016-10-28 21:06:34', '2016-10-28 01:06:34'),
(92, 34, 'p82.jpg', '2016-10-28 21:06:34', '2016-10-28 01:06:34'),
(93, 34, 'p83.jpg', '2016-10-28 21:06:34', '2016-10-28 01:06:34'),
(94, 35, 'p91.jpg', '2016-10-28 21:08:05', '2016-10-28 01:08:05'),
(95, 35, 'p92.jpg', '2016-10-28 21:08:05', '2016-10-28 01:08:05'),
(96, 36, 'p101.jpg', '2016-10-28 21:08:52', '2016-10-28 01:08:52'),
(97, 36, 'p102.jpg', '2016-10-28 21:08:52', '2016-10-28 01:08:52'),
(98, 36, 'p103.jpg', '2016-10-28 21:08:52', '2016-10-28 01:08:52'),
(99, 37, 'p111.jpg', '2016-10-28 21:09:44', '2016-10-28 01:09:44'),
(100, 37, 'p112.jpg', '2016-10-28 21:09:44', '2016-10-28 01:09:44'),
(101, 37, 'p113.jpg', '2016-10-28 21:09:44', '2016-10-28 01:09:44'),
(102, 38, 'p121.jpg', '2016-10-28 21:46:06', '2016-10-28 01:46:06'),
(103, 38, 'p122.jpg', '2016-10-28 21:46:06', '2016-10-28 01:46:06'),
(104, 40, 'p131.jpg', '2016-11-02 20:15:38', '2016-11-02 00:15:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart_items`
--
ALTER TABLE `tbl_cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart_items`
--
ALTER TABLE `tbl_cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart_items`
--
ALTER TABLE `tbl_cart_items`
  ADD CONSTRAINT `tbl_cart_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_products` (`id`);

--
-- Constraints for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  ADD CONSTRAINT `tbl_product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
