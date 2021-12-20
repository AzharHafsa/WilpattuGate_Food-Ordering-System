-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2021 at 03:13 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wilpattu`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `cName` varchar(50) NOT NULL,
  `mainCategory` varchar(200) NOT NULL,
  `cImage` varchar(200) NOT NULL,
  PRIMARY KEY (`cId`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cId`, `cName`, `mainCategory`, `cImage`) VALUES
(1, 'Dessert', 'Drinks_and_Dessert', 'des.jpg'),
(2, 'Smoothies', 'Drinks_and_Dessert', 'smoo.jpg'),
(3, 'Mocktails', 'Drinks_and_Dessert', 'mock.jpg'),
(4, 'Short Eats', 'Fast Food', 'seats.jpg'),
(5, 'Shawarma', 'Fast Food', 'shawarma.jpg'),
(6, 'Salads', 'Drinks_and_Dessert', 'salads.jpg'),
(7, 'Fried Rice', 'Rice/Biriyani', 'fr.jpg'),
(8, 'Noodles', 'Others', 'noo.jpg'),
(9, 'Indian Biryani', 'Rice/Biriyani', 'inbir.jpg'),
(10, 'Local Biryani', 'Rice/Biriyani', 'lob.jpg'),
(11, 'Burger', 'Fast food', 'burger.jpg'),
(12, 'Submarine And Sandwitch', 'Fast food', 'sub.jpg'),
(13, 'Indian cuisine', 'Others', 'ic.jpg'),
(14, 'Vegetable masala', 'Masala', 'vg.jpg'),
(15, 'Fried Rice Srilanakan', 'Rice/Biriyani', 'frs.jpg'),
(16, 'Rice And Curry', 'Rice/Biriyani', 'rc.jpg'),
(17, 'Chinese Cuisine', 'Others', 'cc.jpg'),
(18, 'Chopsuey', 'Others', 'ch.jpg'),
(19, 'Fresh Juice', 'Drinks_and_Dessert', 'fj.jpg'),
(20, 'Milk Shakes', 'Drinks_and_Dessert\r\n\r\n', 'ms.jpg'),
(21, 'Starters', 'Fast food', 'start.jpg'),
(22, 'Soups', 'Drinks_and_Dessert', 'soup.jpg'),
(23, 'Pizza', 'Fast food', 'pizza.jpg'),
(24, 'Italian', 'Others', 'ital.jpg'),
(25, 'Mexican Tacos', 'Others', 'mt.jpg'),
(26, 'Mutton Masala', 'Masala', 'mm.jpg'),
(27, 'Fish Masala', 'Masala', 'fm.jpg'),
(28, 'Prawn Masala', 'Masala', 'pm.jpg'),
(29, 'Cuttle Fish Masala', 'Masala', 'cf.jpg'),
(30, 'Chicken masala', 'Masala', 'cm.jpg'),
(31, 'Beef Masala', 'Masala', 'mm.jpg'),
(32, 'Kottu', 'Others', 'ch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fId` int(11) NOT NULL AUTO_INCREMENT,
  `fType` varchar(100) NOT NULL,
  `fMessage` varchar(5000) NOT NULL,
  `fName` varchar(100) NOT NULL,
  `lName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `rDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`fId`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fId`, `fType`, `fMessage`, `fName`, `lName`, `email`, `phone`, `rDate`) VALUES
(12, 'Contact', '456', 'kjnbj', 'jjn', '123@gmail.com', '123', '2020-11-20 14:10:20'),
(14, 'Order Inquiry', 'Is kittu available?', 'shakira', 'Abdullah', 'sara@gmail.com', '0342236804', '2020-12-20 17:03:10'),
(15, 'Appreciation', 'Your services are good', 'Hafsa', 'Azhar', 'hafsa.17@itfac.mrt.ac.lk', '0714005006', '2020-11-30 14:32:57'),
(17, 'Complaint', 'Not satisfied', 'Hafsa', 'Azhar', 'azharhafsa31@gmail.com', '0714005006', '2020-12-01 15:21:25'),
(21, 'Appreciation', 'You services are good', 'Hafsa', 'Azhar', 'hafsa.17@itfac.mrt.ac.lk', '0778556555', '2020-12-01 18:12:13'),
(22, 'Order Inquiry', 'Wholesales available?', 'Fathima', 'Nizar', 'fathima@gmail.com', '0714005006', '2020-12-20 17:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `gId` int(11) NOT NULL AUTO_INCREMENT,
  `gImage` varchar(200) NOT NULL,
  PRIMARY KEY (`gId`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gId`, `gImage`) VALUES
(1, '1g.png'),
(2, '2g.png'),
(3, '3g.png'),
(4, '4g.png'),
(5, '5g.png'),
(6, '6g.png'),
(7, '7g.png'),
(8, '8g.png'),
(9, '9g.png'),
(10, '10g.png');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `iName` varchar(50) NOT NULL,
  `iPrice` decimal(10,2) NOT NULL,
  `iImage` varchar(200) NOT NULL,
  `cId` int(11) NOT NULL,
  PRIMARY KEY (`iId`)
) ENGINE=InnoDB AUTO_INCREMENT=379 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`iId`, `iName`, `iPrice`, `iImage`, `cId`) VALUES
(1, 'French Fries', '250.00', 'starter1.jpg', 21),
(2, 'Potato Wedges', '520.00', 'starter2.jpg', 21),
(3, 'Chicken Lolipop', '400.00', 'starter3.jpg', 21),
(4, 'Chicken Submarine', '450.00', 'sub1.jpg', 12),
(5, 'Beef Submarine', '500.00', 'sub2.jpg', 12),
(6, 'Mix Submarine', '500.00', 'sub3.jpg', 12),
(7, 'Sea food Submarine', '400.00', 'sub4.jpg', 12),
(8, 'Tuna Submarine', '400.00', 'sub5.jpg', 12),
(9, 'Chicken bread sandwich', '300.00', 'sand1.jpg', 12),
(10, 'Beef bread sandwich', '320.00', 'sand2.jpg', 12),
(11, 'Seafood Bread Sandwich', '350.00', 'sand3.jpg', 12),
(12, 'Garlick Bread Sandwich', '350.00', 'sand4.jpg', 12),
(13, 'Cheese Sandwich', '330.00', 'sand5.jpg', 12),
(14, 'Hum Bread Sandwich', '500.00', 'sand6.jpg', 12),
(15, 'Chicken Burger', '350.00', 'burg1.jpg', 11),
(16, 'Beef Burger', '350.00', 'burg2.jpg', 11),
(17, 'Crispy Chicken Burger', '400.00', 'burg3.jpg', 11),
(18, 'Double Cheese Burger', '500.00', 'burg4.jpg', 11),
(19, 'Rolls', '30.00', 'se1.jpg', 4),
(20, 'Cutlet', '30.00', 'se2.jpg', 4),
(21, 'Samosa', '30.00', 'se3.jpg', 4),
(22, 'Egg Rotti', '40.00', 'se4.jpg', 4),
(23, 'Patis', '30.00', 'se5.jpg', 4),
(24, 'Beef Rotti', '40.00', 'se6.jpg', 4),
(25, 'Parata', '15.00', 'se7.jpg', 4),
(26, 'Gee Parata', '30.00', 'se8.jpg', 4),
(27, 'Beef Kuruma', '200.00', 'se9.jpg', 4),
(28, 'Chicken Kuruma', '200.00', 'se10.jpg', 4),
(29, 'Fish Kuruma', '200.00', 'se11.jpg', 4),
(30, 'Beef Curry', '100.00', 'se12.jpg', 4),
(31, 'Chicken Curry', '100.00', 'se13.jpg', 4),
(32, 'Fish Curry', '100.00', 'se14.jpg', 4),
(33, 'Dhal Curry', '40.00', 'se15.jpg', 4),
(34, 'Egg Curry', '50.00', 'se16.jpg', 4),
(35, 'Potato Curry', '40.00', 'se17.jpg', 4),
(36, 'Fish Fry', '230.00', 'se18.jpg', 4),
(37, 'Chicken Fry', '250.00', 'se19.jpg', 4),
(38, 'Prawns curry', '300.00', 'se20.jpg', 4),
(39, 'Onion Sambol', '40.00', 'se21.jpg', 4),
(40, 'Maldive Sambol', '150.00', 'se22.jpg', 4),
(41, 'Maragarita - Small', '450.00', 'p1.jpg', 23),
(42, 'Maragarita - Medium', '900.00', 'p1.jpg', 23),
(43, 'Maragarita - Large', '1200.00', 'p1.jpg', 23),
(44, 'Marinara - Small', '600.00', 'p2.jpg', 23),
(45, 'Marinara - Medium', '1100.00', 'p2.jpg', 23),
(46, 'Marinara - Large', '1400.00', 'p2.jpg', 23),
(47, 'Polo Chicken - Small', '600.00', 'p3.jpg', 23),
(48, 'Polo Chicken - Medium', '1100.00', 'p3.jpg', 23),
(49, 'Polo Chicken - Large', '1500.00', 'p3.jpg', 23),
(50, 'Keema Beef - Small', '700.00', 'p4.jpg', 23),
(51, 'Keema Beef - Medium', '1250.00', 'p4.jpg', 23),
(52, 'Keema Beef - Large', '1500.00', 'p4.jpg', 23),
(53, 'Hawaiian - Small', '450.00', 'p5.jpg', 23),
(54, 'Hawaiian - Medium', '900.00', 'p5.jpg', 23),
(55, 'Hawaiian - Large', '1300.00', 'p5.jpg', 23),
(56, 'Shrimpo - Small', '700.00', 'p6.jpg', 23),
(57, 'Shrimpo - Medium', '900.00', 'p6.jpg', 23),
(58, 'Shrimpo - Large', '1500.00', 'p6.jpg', 23),
(59, 'Fruit Di Ma - Small', '600.00', 'p7.jpg', 23),
(60, 'Fruit Di Ma - Medium', '1100.00', 'p7.jpg', 23),
(61, 'Fruit Di Ma - Large', '1350.00', 'p7.jpg', 23),
(62, 'Fungi Mashroom - Small', '600.00', 'p8.jpg', 23),
(63, 'Fungi Mashroom - Medium', '1100.00', 'p8.jpg', 23),
(64, 'Fungi Mashroom - Large', '1300.00', 'p8.jpg', 23),
(65, 'Chicken Shawarma', '400.00', 'sha1.jpg', 5),
(66, 'Beef Shawarma', '420.00', 'sha2.jpg', 5),
(67, 'Mix Shawarma', '420.00', 'sha3.jpg', 5),
(68, 'Ice Cream - Venila', '130.00', 'des1.jpg', 1),
(69, 'Ice Cream-Strawberry', '130.00', 'des2.jpg', 1),
(70, 'Ice Cream -Chocolate', '150.00', 'des3.jpg', 1),
(71, 'Ice Cream - Mix', '250.00', 'des4.jpg', 1),
(72, 'Banana Boat', '250.00', 'des5.jpg', 1),
(73, 'Fruit Salat with Ice Cream', '250.00', 'des6.jpg', 1),
(74, 'Fruit Salad', '250.00', 'des7.jpg', 1),
(75, 'Vattilapam', '100.00', 'des8.jpg', 1),
(76, 'Carrot And Orange', '300.00', 'smoo1.jpg', 2),
(77, 'Mango Banana Orange', '300.00', 'smoo2.jpg', 2),
(78, 'Carrot Orange Ginger', '300.00', 'smoo3.jpg', 2),
(79, 'Gr cucumber mint lime', '300.00', 'mock1.jpg', 3),
(80, 'Ginger mint sprite', '300.00', 'mock2.jpg', 3),
(81, 'Cocktails Jamaika', '300.00', 'mock3.jpg', 3),
(82, 'Banana Papaya Mango', '300.00', 'mock4.jpg', 3),
(101, 'Chicken-Normal', '300.00', 'kot1.jpg', 32),
(102, 'Chicken-Full', '500.00', 'kot1.jpg', 32),
(103, 'Beef-Normal', '300.00', 'kot2.jpg', 32),
(104, 'Beef-Full', '500.00', 'kot2.jpg', 32),
(105, 'Mix-Normal', '600.00', 'kot3.jpg', 32),
(106, 'Mix - Full', '800.00', 'kot3.jpg', 32),
(107, 'String Hoppers-Chicken-N', '300.00', 'kot4.jpg', 32),
(108, 'String Hoppers-Chicken-F', '500.00', 'kot4.jpg', 32),
(109, 'String Hoppers-Beef-N', '300.00', 'kot5.jpg', 32),
(110, 'String Hoppers-Beef-F', '500.00', 'kot5.jpg', 32),
(111, 'String Hoppers-Mix', '500.00', 'kot6.jpg', 32),
(126, 'Vegetables', '300.00', 'fr1.jpg', 7),
(127, 'Egg', '350.00', 'fr2.jpg', 7),
(128, 'Chicken(N)', '450.00', 'fr3.jpg', 7),
(129, 'Chicken(F)', '600.00', 'fr4.jpg', 7),
(130, 'Beef(N)', '500.00', 'fr5.jpg', 7),
(131, 'Beef(F)', '700.00', 'fr6.jpg', 7),
(132, 'Mixed', '650.00', 'fr7.jpg', 7),
(133, 'Nasigoreng chicken', '500.00', 'fr8.jpg', 7),
(134, 'Nasigoreng mix', '700.00', 'fr12.jpg', 7),
(135, 'Nasigoreng beef', '650.00', 'fr6.jpg', 7),
(136, 'Mongolian special mix', '800.00', 'fr7.jpg', 7),
(137, 'Mongolian beef', '700.00', 'fr12.jpg', 7),
(139, 'Mongolian chicken', '650.00', 'fr8.jpg', 7),
(140, 'Sea food', '1000.00', 'fr5.jpg', 7),
(141, 'W Gate special mix', '1000.00', 'fr7.jpg', 7),
(142, 'Vegetable', '260.00', 'noo1.jpg', 8),
(143, 'Egg', '300.00', 'noo2.jpg', 8),
(144, 'Cream spegathi Chicken', '400.00', 'noo3.jpg', 8),
(145, 'Macrooni Chicken', '400.00', 'noo4.jpg', 8),
(146, 'Fried Chicken', '450.00', 'noo5.jpg', 8),
(147, 'Cream Spegathi Beef', '450.00', 'noo6.jpg', 8),
(148, 'Fry of spegathi Chicken', '450.00', 'noo7.jpg', 8),
(149, 'Macrooni Beef', '450.00', 'noo8.jpg', 8),
(150, 'String Hoppers Chicken', '450.00', 'noo9.jpg', 8),
(151, 'Cream Spegathi Beef', '450.00', 'noo10.jpg', 8),
(152, 'Fried Beef', '500.00', 'noo11.jpg', 8),
(153, 'Fry of Spegathi Beef', '500.00', 'noo1.jpg', 8),
(154, 'Cream of Macroni', '500.00', 'noo13.jpg', 8),
(155, 'Macroni Mix', '500.00', 'noo14.jpg', 8),
(156, 'String Hoppers Beef', '500.00', 'noo15.jpg', 8),
(157, 'Fried Mix', '600.00', 'noo16.jpg', 8),
(158, 'Cream Spegathi Mix', '600.00', 'noo17.jpg', 8),
(159, 'Fry of Spegathi Mix', '600.00', 'noo10.jpg', 8),
(160, 'String Hoppers Mix', '600.00', 'noo9.jpg', 8),
(161, 'W Gate Special', '1000.00', 'noo16.jpg', 8),
(162, 'Chicken Biriyani', '550.00', 'inb1.jpg', 9),
(172, 'Fish Biriyani', '600.00', 'inb2.jpg', 9),
(173, 'Beef Biriyani', '680.00', 'inb3.jpg', 9),
(174, 'Prawn Biriyani', '780.00', 'inb4.jpg', 9),
(175, 'Mutton Biriyani', '900.00', 'inb3.jpg', 9),
(176, 'Chic Biriyani Sawan', '3500.00', 'inb1.jpg', 9),
(177, 'Fish Biriyani sawan', '3800.00', 'inb2.jpg', 9),
(178, 'Beef Biriyani Sawan', '4200.00', 'inb3.jpg', 9),
(179, 'Prawn Biriyani Sawan', '4600.00', 'inb4.jpg', 9),
(180, 'Mutton Biriyani Sawan', '5000.00', 'inb3.jpg', 9),
(181, 'Chicken T.A', '550.00', 'inb1.jpg', 10),
(182, 'Chicken T.B', '550.00', 'inb1.jpg', 10),
(183, 'Beef T.A', '800.00', 'inb3.jpg', 10),
(184, 'Beef T.B', '800.00', 'inb3.jpg', 10),
(185, 'Tandoor parata', '120.00', 'ic1.jpg', 13),
(186, 'Lachcha parata', '120.00', 'ic2.jpg', 13),
(187, 'Pudina parata', '150.00', 'ic3.jpg', 13),
(188, 'Butter parata', '100.00', 'ic4.jpg', 13),
(189, 'Romali parata', '150.00', 'ic5.jpg', 13),
(190, 'Plain Naan', '100.00', 'ic6.jpg', 13),
(191, 'garlic Naan', '130.00', 'ic7.jpg', 13),
(192, 'Butter Naan', '160.00', 'ic6.jpg', 13),
(193, 'Cheese Naan', '200.00', 'ic4.jpg', 13),
(194, 'Cheese and Chilli Naan', '220.00', 'ic10.jpg', 13),
(195, 'Chappathi', '160.00', 'ic11.jpg', 13),
(196, 'Ajwan Rotty Tandoor', '150.00', 'ic12.jpg', 13),
(197, 'Dhal Fry', '380.00', 'vm1.jpg', 14),
(198, 'Dhal makkini', '400.00', 'vm2.jpg', 14),
(199, 'Dhal Tadka', '380.00', 'vm3.jpg', 14),
(200, 'Veggie', '420.00', 'vm4.jpg', 14),
(201, 'Veg Tikka Masala', '440.00', 'vm5.jpg', 14),
(202, 'Veg Kadai', '400.00', 'vm6.jpg', 14),
(203, 'Veg Pakara', '300.00', 'vm4.jpg', 14),
(204, 'Veg Mix Kuruma', '450.00', 'vm6.jpg', 14),
(205, 'Egg Masala', '440.00', 'se16.jpg', 14),
(206, 'Palak Paneer', '420.00', 'vm10.jpg', 14),
(207, 'Tawa panner Masala', '420.00', 'vm11.jpg', 14),
(208, 'Paneer Tikka Masala', '675.00', 'vm6.jpg', 14),
(209, 'Butter Paneer Masala', '675.00', 'vm13.jpg', 14),
(210, 'Paneer Buruji', '500.00', 'vm13.jpg', 14),
(211, 'Channa Masala', '480.00', 'vm14.jpg', 14),
(212, 'Bajji Masala', '380.00', 'vm16.jpg', 14),
(213, 'Alu Gobi Masala', '400.00', 'vm17.jpg', 14),
(214, 'Matar Masala', '480.00', 'vm18.jpg', 14),
(215, 'Mashroom Masala', '400.00', 'vm13.jpg', 14),
(216, 'Tomato Curyy', '300.00', 'vm20.jpg', 14),
(217, 'Onion Pakora', '200.00', 'vm21.jpg', 14),
(218, 'KuruKuri Bindhi', '380.00', 'vm22.jpg', 14),
(219, 'Jeera Alo', '350.00', 'vm23.jpg', 14),
(220, 'Gobi Munchorian', '460.00', 'vm24.jpg', 14),
(221, 'Chicken(N)', '300.00', 'frs1.jpg', 15),
(222, 'Chicken(F)', '500.00', 'frs1.jpg', 15),
(223, 'Beef(N)', '400.00', 'frs2.jpg', 15),
(224, 'Beef(F)', '600.00', 'frs2.jpg', 15),
(225, 'Fish(N)', '300.00', 'frs1.jpg', 15),
(226, 'Fish(F)', '500.00', 'frs1.jpg', 15),
(227, 'Egg(N)', '250.00', 'frs5.jpg', 15),
(228, 'Fish(F)', '450.00', 'frs1.jpg', 15),
(230, 'Egg(F)', '800.00', 'frs5.jpg', 15),
(231, 'Vegetable', '160.00', 'rc1.jpg', 16),
(232, 'Egg', '180.00', 'rc2.jpg', 16),
(233, 'Chicken(N)', '200.00', 'rc3.jpg', 16),
(234, 'Chicken(F)', '350.00', 'rc3.jpg', 16),
(235, 'Beef(N)', '200.00', 'rc4.jpg', 16),
(236, 'Beef(F)', '350.00', 'rc4.jpg', 16),
(237, 'Fish(N)', '200.00', 'rc5.jpg', 16),
(238, 'Fish(F)', '350.00', 'rc5.jpg', 16),
(239, 'Chicken Deviled', '480.00', 'cc1.jpg', 17),
(240, 'Beef Deviled', '580.00', 'cc2.jpg', 17),
(241, 'Fish Deviled', '520.00', 'cc3.jpg', 17),
(242, 'Mix Deviled', '720.00', 'cc1.jpg', 17),
(243, 'Deviled Prawns', '720.00', 'cc4.jpg', 17),
(244, 'Sweet and Sour prawns', '720.00', 'cc4.jpg', 17),
(245, 'Hot Butter Cuttle Fish', '650.00', 'cc3.jpg', 17),
(246, 'Chilly Cuttle Fish', '650.00', 'cc5.jpg', 17),
(247, 'Hot Garlic Fish', '500.00', 'cc6.jpg', 17),
(248, 'Hot garlic Chicken', '450.00', 'cc1.jpg', 17),
(249, 'Garlic Fish B Sauce', '600.00', 'cc7.jpg', 17),
(250, 'Beef Oyster Sauce', '650.00', 'cc8.jpg', 17),
(251, 'Hot Chicken W Garlic SA', '600.00', 'cc1.jpg', 17),
(252, 'Beef with Mushroom', '800.00', 'cc9.jpg', 17),
(253, 'Chicken with Mushroom', '500.00', 'cc10.jpg', 17),
(254, 'Boiled Vegetable', '500.00', 'ch1.jpg', 18),
(255, 'Vegetable', '700.00', 'ch2.jpg', 18),
(256, 'Chicken', '800.00', 'ch3.jpg', 18),
(257, 'Beef', '900.00', 'ch4.jpg', 18),
(258, 'Mix', '1000.00', 'ch5.jpg', 18),
(259, 'Lime Juice With Soda', '250.00', 'fj1.jpg', 19),
(260, 'Lime Juice With Mint', '250.00', 'fj2.jpg', 19),
(261, 'Mango', '250.00', 'fj3.jpg', 19),
(262, 'Butter Fruit Ice Cream', '300.00', 'fj4.jpg', 19),
(263, 'Wood Apple', '250.00', 'fj5.jpg', 19),
(264, 'Pineapple', '300.00', 'fj6.jpg', 19),
(265, 'Papaya', '150.00', 'fj7.jpg', 19),
(266, 'Orange', '300.00', 'fj8.jpg', 19),
(267, 'Water Melon', '200.00', 'fj9.jpg', 19),
(268, 'Mixed Fruit', '300.00', 'fj10.jpg', 19),
(269, 'Lime', '250.00', 'fj11.jpg', 19),
(270, 'Red Apple', '250.00', 'fj12.jpg', 19),
(271, 'Green Apple', '250.00', 'fj13.jpg', 19),
(272, 'Butter Fruit', '250.00', 'fj4.jpg', 19),
(273, 'Sweet Melon', '250.00', 'fj15.jpg', 19),
(274, 'Orange with Mint', '350.00', 'fj16.jpg', 19),
(275, 'Ginger with Mint', '350.00', 'fj17.jpg', 19),
(276, 'Custard Apple', '350.00', 'fj18.jpg', 19),
(277, 'Vanilla', '220.00', 'ms1.jpg', 20),
(278, 'Strawberry', '220.00', 'ms2.jpg', 20),
(279, 'Chocolate', '230.00', 'ms3.jpg', 20),
(280, 'Banana', '200.00', 'ms4.jpg', 20),
(281, 'Papaya', '200.00', 'ms5.jpg', 20),
(282, 'Mango', '300.00', 'ms6.jpg', 20),
(283, 'Faluda', '300.00', 'ms7.jpg', 20),
(284, 'Sweet Lassi', '200.00', 'ms8.jpg', 20),
(285, 'Salt Lassi', '180.00', 'ms9.jpg', 20),
(286, 'Mango Lassi', '250.00', 'ms6.jpg', 20),
(287, 'Banana Lassi', '250.00', 'ms4.jpg', 20),
(288, 'Pineapple Lassi', '250.00', 'ms12.jpg', 20),
(289, 'Vegetable Clear', '360.00', 'soup1.jpg', 22),
(290, 'Chicken Clear', '450.00', 'soup2.jpg', 22),
(291, 'Beef', '500.00', 'soup3.jpg', 22),
(292, 'Cream of Tomato', '450.00', 'soup4.jpg', 22),
(293, 'Tom Yam Seafood', '500.00', 'soup5.jpg', 22),
(294, 'H/S Chicken', '450.00', 'soup2.jpg', 22),
(295, 'H/S Beef', '500.00', 'soup3.jpg', 22),
(296, 'H/S Seafood', '600.00', 'soup6.jpg', 22),
(297, 'French Onion', '700.00', 'soup7.jpg', 22),
(298, 'Sweet Corn Chicken', '450.00', 'soup2.jpg', 22),
(299, 'Cream of Chicken', '700.00', 'soup2.jpg', 22),
(300, 'Lasaniya (Beef)', '1200.00', 'ital1.jpg', 24),
(301, 'Pasta Carpanara', '700.00', 'ital2.jpg', 24),
(302, 'Panne Arabiatha', '700.00', 'ital3.jpg', 24),
(303, 'Pasta Al Fardo', '700.00', 'ital4.jpg', 24),
(304, 'Chicken Picatta mil', '850.00', 'ital5.jpg', 24),
(305, 'Quesadilla (Hot)', '700.00', 'mt1.jpg', 25),
(306, 'Fagitas', '600.00', 'mt2.jpg', 25),
(307, 'Boritos', '550.00', 'mt3.jpg', 25),
(308, 'Mutton Sukka', '900.00', 'mm1.jpg', 26),
(309, 'Mutton Keema', '1100.00', 'mm2.jpg', 26),
(310, 'Hydrabad Mutton', '850.00', 'mm3.jpeg', 26),
(311, 'Hydrabad Dhal Mutton', '800.00', 'mm4.jpg', 26),
(312, 'Mutton Do Payaza', '900.00', 'mm5.jpg', 26),
(313, 'Mutton Kadai', '880.00', 'mm2.jpg', 26),
(314, 'Mutton Kuruma', '900.00', 'mm6.jpg', 26),
(315, 'Mutton Curry  or Masala', '850.00', 'mm5.jpg', 26),
(316, 'Mutton Munchurian', '980.00', 'mm8.jpg', 26),
(317, 'Mutton Green Curry', '950.00', 'mm9.jpg', 26),
(318, 'Fish Curry or Masala', '600.00', 'fm1.jpg', 27),
(319, 'Fish Kadai', '620.00', 'fm2.jpg', 27),
(320, 'Fish Kuruma', '700.00', 'fm3.jpg', 27),
(321, 'Fish Tikka Masala', '580.00', 'fm4.jpg', 27),
(322, 'Prawn Kadai', '800.00', 'pm1.jpg', 28),
(323, 'Prawn Kuruma', '860.00', 'pm2.jpg', 28),
(324, 'Prawn Masala', '780.00', 'pm3.jpg', 28),
(325, 'Tandoor Fry & SA', '850.00', 'pm4.jpg', 28),
(326, 'Cuttle Fish Curry or Masala', '800.00', 'cf1.jpg', 29),
(327, 'Cuttle Fish kadai', '750.00', 'cf2.jpg', 29),
(328, 'Cuttle Fish Kuruma', '840.00', 'cf3.jpg', 29),
(329, 'Chicken Munchurian', '720.00', 'cm1.jpg', 30),
(330, 'Chettinad Chicken', '680.00', 'cm2.jpg', 30),
(331, 'Indian Green Chicken', '600.00', 'cm3.jpg', 30),
(332, 'Mughlai Chicken', '520.00', 'cm3.jpg', 30),
(333, 'Chicken Seek Kebab Masala', '750.00', 'cm4.jpg', 30),
(334, 'Chicken chukka Fry Chettinad', '600.00', 'cm5.jpg', 30),
(335, 'Soli Chicken', '520.00', 'cm6.jpg', 30),
(336, 'Hydrabad Duka Chicken', '580.00', 'cm7.jpg', 30),
(337, 'Boneless CH fry W Mushroom', '750.00', 'cm8.jpg', 30),
(338, 'Chicken kosha', '520.00', 'cm1.jpg', 30),
(339, 'Chicken pickle', '500.00', 'cm2.jpg', 30),
(340, 'Coconut Chicken Curry', '520.00', 'cm3.jpg', 30),
(341, 'Chicken Kadai', '520.00', 'cm4.jpg', 30),
(342, 'Chicken Kuruma', '600.00', 'cm5.jpg', 30),
(343, 'Chicken Tikka Masala', '520.00', 'cm6.jpg', 30),
(344, 'Butter Chicken masala', '600.00', 'cm7.jpg', 30),
(345, 'Chicken pepper Masala', '480.00', 'cm8.jpg', 30),
(346, 'Chicken Masala', '780.00', 'cm1.jpg', 30),
(347, 'Thandoor Chicken Masala', '620.00', 'cm2.jpg', 30),
(348, 'Thandoor Chicken Che T', '600.00', 'cm3.jpg', 30),
(349, 'Thandoor Cheese Tikka', '520.00', 'cm4.jpg', 30),
(350, 'Chicken 65', '440.00', 'cm5.jpg', 30),
(351, 'Thandoor Chicken Full', '1200.00', 'cm6.jpg', 30),
(352, 'Thandoor Chicken Half', '600.00', 'cm6.jpg', 30),
(353, 'Thandoor Chicken Quater', '300.00', 'cm6.jpg', 30),
(354, 'Chicken Lollipop', '400.00', 'cm1.jpg', 30),
(355, 'Madras Beef Curry', '600.00', 'bm1.jpg', 31),
(356, 'Potato Beef', '650.00', 'bm2.jpg', 31),
(357, 'Aloo Keema Masala', '680.00', 'bm3.jpg', 31),
(358, 'Beef Egg Plant Youghut Curry', '680.00', 'bm4.jpg', 31),
(359, 'Beef Chop Masala', '780.00', 'bm5.jpg', 31),
(360, 'Keema Matara', '700.00', 'bm6.jpg', 31),
(361, 'Red Roast Beef Masala', '780.00', 'bm1.jpg', 31),
(362, 'Beef kadai', '600.00', 'bm2.jpg', 31),
(363, 'Beef Kuruma', '680.00', 'bm3.jpg', 31),
(364, 'Beef Masala', '640.00', 'bm4.jpg', 31),
(365, 'Beef Munchurian', '720.00', 'bm5.jpg', 31),
(366, 'Sea food', '420.00', 'salad1.jpg', 6),
(367, 'Garlic Prawn', '440.00', 'salad2.jpg', 6),
(368, 'Tuna', '540.00', 'salad3.jpg', 6),
(369, 'Roast beef', '350.00', 'salad4.jpg', 6),
(370, 'Parsely Potato', '440.00', 'salad5.jpg', 6),
(371, 'Mix Vegetable', '420.00', 'salad6.jpg', 6),
(372, 'Colselaw', '420.00', 'salad7.jpg', 6),
(373, 'Green Salad', '350.00', 'salad8.jpg', 6),
(374, 'Potato Salad', '350.00', 'salad9.jpg', 6),
(375, 'Corn Salad', '600.00', 'salad10.jpg', 6),
(376, 'Chicken Salad', '600.00', 'salad11.jpg', 6),
(377, 'Mixed', '350.00', 'salad12.jpg', 6),
(378, 'tick', '200.00', 'aaaaaaa.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `odId` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  PRIMARY KEY (`odId`),
  KEY `oId` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`odId`, `order_id`, `product_name`, `product_price`, `product_quantity`) VALUES
(1, 1, 'French Fries', '250.00', 1),
(2, 1, 'Potato Wedges', '520.00', 1),
(3, 1, 'Chicken Lolipop', '400.00', 1),
(4, 2, 'Chicken Submarine', '450.00', 1),
(5, 2, 'Beef Submarine', '500.00', 1),
(6, 3, 'Chicken Submarine', '450.00', 2),
(7, 4, 'Beef Submarine', '500.00', 1),
(8, 4, 'Mix Submarine', '500.00', 1),
(11, 6, 'French Fries', '250.00', 1),
(12, 7, 'Crispy Chicken Burger', '400.00', 4),
(14, 9, 'Maragarita - Medium', '900.00', 1),
(15, 10, 'Polo Chicken - Small', '600.00', 1),
(19, 12, 'Potato Wedges', '520.00', 1),
(23, 14, 'Vanilla', '220.00', 3),
(24, 14, 'Mango', '300.00', 1),
(25, 14, 'Beef T.A', '800.00', 1),
(26, 15, 'Chicken Submarine', '450.00', 1),
(27, 15, 'Beef Submarine', '500.00', 2),
(28, 15, 'French Fries', '250.00', 1),
(29, 15, 'Ice Cream -Chocolate', '150.00', 2),
(30, 16, 'Chicken Submarine', '450.00', 1),
(31, 16, 'Beef bread sandwich', '320.00', 2),
(32, 16, 'Crispy Chicken Burger', '400.00', 3),
(33, 16, 'Ice Cream -Chocolate', '150.00', 1),
(34, 16, 'Macrooni Beef', '450.00', 1),
(35, 16, 'Ice Cream - Venila', '130.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

DROP TABLE IF EXISTS `order_table`;
CREATE TABLE IF NOT EXISTS `order_table` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `uId` int(11) NOT NULL,
  `creationDate` datetime NOT NULL,
  `deliveryAddress` varchar(200) NOT NULL,
  `orderStatus` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `uId` (`uId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `uId`, `creationDate`, `deliveryAddress`, `orderStatus`) VALUES
(1, 1, '2020-11-08 00:00:00', '10,2nd Cross Street', 'Order Placed'),
(2, 1, '2020-11-08 09:41:16', '32,PolesStreet', 'pending'),
(3, 1, '2020-11-08 10:09:01', '10,2nd Cross Street', 'Order Placed'),
(4, 1, '2020-11-08 15:40:38', '373/20,Mannar Road', 'Order Placed'),
(6, 2, '2020-11-11 23:34:00', '399,2nd Cross Street', 'pending'),
(7, 5, '2020-11-11 23:37:44', 'No Delivery', 'pending'),
(9, 1, '2020-11-17 13:45:46', '200,Poles Road', 'Order Placed'),
(10, 1, '2020-11-17 14:13:40', 'No Delivery', 'Order Placed'),
(12, 1, '2020-11-30 14:29:01', '399,1st Cross Street', 'Order Placed'),
(14, 12, '2020-11-30 20:48:14', '373/20,3rd Cross Street', 'pending'),
(15, 1, '2020-12-20 15:53:03', '373/20,2nd Cross Street', 'pending'),
(16, 1, '2020-12-30 18:07:50', 'No Delivery', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `pId` int(11) NOT NULL AUTO_INCREMENT,
  `pImage` varchar(200) NOT NULL,
  `pTitle` varchar(200) NOT NULL,
  `pPrice` decimal(10,2) NOT NULL,
  `pText` varchar(500) NOT NULL,
  PRIMARY KEY (`pId`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`pId`, `pImage`, `pTitle`, `pPrice`, `pText`) VALUES
(7, 'promo1.jpg', 'Promotion 1', '800.00', 'promotion description'),
(10, 'promo2.jpg', 'Promotion 2', '400.00', 'promotion description'),
(17, 'promo2.jpg', 'Promotion 3', '2000.00', 'promotion description');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `phone`, `password`, `role`) VALUES
(1, 'Hafsa', 'Azhar', 'hafsa@gmail.com', '0719090909', 'hafsa123', 'user'),
(2, 'Mala', 'Peter', 'mala@gmail.com', '0772920200', '456', 'user'),
(3, 'sasna', 'hadhy', 'sasna@gmail.com', '0712389745', '143', 'user'),
(4, 'shahnas', 'hadhy', 'shahnas@gmail.com', '456987', '123', 'user'),
(5, 'Muhammadhu', 'Azhar', 'mhmd@gmail.com', '0775778779', 'aqs', 'user'),
(6, 'Admin', 'Admin', 'admin@gmail.com', '0714040500', 'Admin123', 'admin'),
(7, 'Mujahid', 'Dilshad', 'muja@gmail.com', '0714005006', 'Muja12345', 'user'),
(8, 'Azhar ', 'ShahulHameed', 'azhar@gmail.com', '0775778779', 'Asdf1234', 'user'),
(12, 'Ramziya', 'Azhar', 'ramziya@gmail.com', '0718369775', 'Ram12345', 'user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_table` (`order_id`);

--
-- Constraints for table `order_table`
--
ALTER TABLE `order_table`
  ADD CONSTRAINT `order_table_ibfk_1` FOREIGN KEY (`uId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
