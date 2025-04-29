-- phpMyAdmin SQL Dump
-- https://www.phpmyadmin.net/


--
-- Database: `onestop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=22;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10;


-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `placed_on` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10;


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `product_detail` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=20;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `product_detail`, `image`) VALUES
(2, 'Jacket', '200', 'Slouch Creek Jacket/9WJ Waterproof/Breathable Mid-Weight Jacket Made from our revolutionary StormHide fabric that wears like iron and repels rain, snow, stickers and mud. Warm, but light-weight insulation, easy and quick to access pockets', 'ImageP1.jpeg'),
(3, 'Wetlands BIB', '250', 'WETLANDS BIB/89W Full Feature Waterproof Breathable Insulated Bib Whether you are in the blind, goose pit of pounding waves on the big water these bibs will keep you warm, dry and comfortable.', 'ImageP2.jpeg'),
(4, 'FireLine', '100', 'Berkley FireLine Thermally Fused Made in U.S.A. of Domestic and Imported components. Fused 8 Strand Superline Provides Unmatched Abrasion Resistance. 5 Times TOUGHER More Abrasion Resistant than leading competitive conventional braids', 'ImageP3.jpeg'),
(5, 'Rapala', '250', 'Rapala 72" Soft Grip Fillet Textured Comfort Grip Handle offers sure grip for added safety even when wet. Super Sharp lower blade cuts easily through bone structure and tough skin. Double-Taper Blade, Longer Lasting Cutting Edge.', 'ImageP4.jpeg'),
(6, 'WhiteTail', '100', 'Hornady American Whitetail .308 WIN features a 150 grain InterLock bullet for reliable expansion and deep penetration. Ideal for deer hunting, this ammo combines consistent performance with classic ballistic precision. Box #8090 offers dependable stopping', 'ImageP5.jpeg'),
(7, 'BuckSpoon', '150', 'The Buck-Shot Rattle Spoon by Northland Fishing Tackle features a UV-enhanced finish and internal rattles that attract fish from a wide area. Ideal for ice fishing, it helps target Crappie, Walleye, and Perch effectively. Built “by fishermen for fishermen', 'ImageP6.jpeg')

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7;


-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9;


COMMIT;
