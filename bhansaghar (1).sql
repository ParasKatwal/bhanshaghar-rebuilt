-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 07:04 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhansaghar`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `orders` text NOT NULL,
  `total_price` varchar(1000) NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `blurb` text NOT NULL,
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `price`, `image`, `blurb`, `type`) VALUES
(1, 'Espresso', '40', 'espresso.jpg', 'Espresso is made by forcing very hot water under high pressure through finely ground compacted coffee. Tamping down the coffee promotes the water''s even penetration through the grounds.', 'hot drinks'),
(2, 'Americano', '50', 'americano.jpg', 'CaffÃ¨ Americano or Americano is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee.', 'hot drinks'),
(3, 'Cappuccino', '50', 'cappuccino.jpg', 'A cappuccino is an espresso-based coffee drink that originated in Italy, and is traditionally prepared with steamed milk foam.', 'hot drinks'),
(4, 'Latte', '40', 'latte.jpg', 'A latte is a coffee drink made with espresso and steamed milk. The term as used in English is a shortened form of the Italian caffÃ¨ latte, caffelatte or caffellatte, which means milk coffee.', 'hot drinks'),
(5, 'Coco-Cola', '40', 'coco-cola.jpg', 'Coca cola is suitable with every dishes. Especially try the combo with momo.', 'soft drinks'),
(6, 'Sprite', '45', 'sprite.jpg', 'Sprite makes your mood on, because it makes every thing clear to you. Sprite makes every thing clear.', 'soft drinks'),
(7, 'Fanta', '45', 'fanta.jpg', 'Drick Fanta to be Fantastic. See for yourself how this drink makes your tongue feel the thing within you.', 'soft drinks'),
(8, 'Slice', '45', 'slice.jpg', 'Even in the winter, you get to taste the real mango. Its pure juice extracted from the mango, taste it. You will like Slice even more than the mango itself.', 'soft drinks'),
(9, 'Buff Momo', '90', 'momos.jpg', 'Buff momo should not be explained, this blurp would be unnecessay. Everyone knows how popular is the buff momo, cuz of its taste.', 'momo'),
(10, 'Veg Momo', '50', 'momos.jpg', 'Don''t worry if you are vegetarian and could not taste the meat, cuz this veg momo challanges every meat in this world.', 'momo'),
(11, 'Chiken Momo', '100', 'momos.jpg', 'Best chicken momo made form the fresh meat. Guarantee you that you will never forget the taste.', 'momo'),
(12, 'Pork Momo', '120', 'momos.jpg', 'This pork momo will make you feel royal. You will ask for the castle after having this, so please enjoy royalness.', 'momo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_order`
--
ALTER TABLE `food_order`
  ADD CONSTRAINT `food_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
