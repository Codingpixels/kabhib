-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2014 at 11:14 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kabhee_b`
--

-- --------------------------------------------------------

--
-- Table structure for table `breads`
--

CREATE TABLE IF NOT EXISTS `breads` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(50) DEFAULT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  `category_id` varchar(50) DEFAULT NULL,
  `shelf_life` varchar(50) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `breads`
--

INSERT INTO `breads` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelf_life`, `unit`) VALUES
(29, 'KB89', 'ATTA PIZZA BASE BIG (3PC) ', 4, 30, 'img/bread6.png', '24', '10 DAYS', '200g'),
(30, 'KB258', 'TRIANGLE PIZZA BASE(3PC)', 9, 30, 'img/bread6.png', '24', '6 DAYS', '250g'),
(31, 'KB624', 'FRENCH LOAF', 18, 30, 'img/bread6.png', '25', '5 DAYS', '300g'),
(32, 'BS72', 'MULTI-GRAIN BREAD', 8, 25, 'img/bread6.png', '27', '5 DAYS', '150g'),
(33, 'BS75', 'FRUIT BREAD ', 11, 25, 'img/bread6.png', '27', '5 DAYS', '150g'),
(34, 'KB58', 'KB PAV BREAD ( 6 PC )', 5, 25, 'img/bread6.png', '26', '5 DAYS', '350g'),
(35, 'KB564', 'KB PIZZA BASE ( 4PC )', 10, 25, 'img/bread6.png', '24', '6 DAYS', '200g'),
(36, 'KB680', 'DP PIZZA BASE  9 Inch (2PC)', 10, 25, 'img/bread6.png', '24', '6 DAYS', '300g'),
(37, 'KB27', 'KB BREAD SOUP STICKS', 10, 20, 'img/bread6.png', '27', '60 DAYS', '75g'),
(38, 'KB586', 'KB MINI PIZZA ( 7 PC )', 10, 20, 'img/bread6.png', '24', '6 DAYS', '100g'),
(39, 'KB257', 'BROWN SUB ROLL(2PC)', 10, 20, 'img/bread6.png', '27', '4 DAYS', '150g'),
(40, 'KB87', 'KB SESAME BURGER ( 2 PC )', 0, 20, 'img/bread6.png', '26', '4 DAYS', '150g'),
(41, 'KB102', 'VADA PAV SPL (4PC)', 10, 20, 'img/bread6.png', '26', '4 DAYS', '150g'),
(42, 'KB85', 'KB HOT- DOG (2PC) ', 10, 20, 'img/bread6.png', '26', '4 DAYS', '100g'),
(43, 'KB585', 'KB KULCHA ( 2 PC )', 10, 15, 'img/bread6.png', '26', '4 DAYS', '100g'),
(44, '2FR', 'ROUND FRENCH LOAF', 9, 15, 'img/bread6.png', '25', '4 DAYS', '220g'),
(45, 'KB561', 'KB FRUIT BUN SWEET  ( 1 PC )', 10, 15, 'img/bread6.png', '27', '4 DAYS', '80g'),
(46, 'KB39', 'BISCUT PIZZA BASE  SMALL (4PC) 200g', 10, 35, 'img/bread6.png', '24', '10 DAYS', 'packet'),
(47, 'KB26', 'KB GARLIC BREAD ', 10, 35, 'img/bread6.png', '27', '4 DAYS', '300g'),
(48, 'KB228', 'MEXICAN LOAF ', 8, 40, 'img/bread6.png', '25', '4 DAYS', 'packet'),
(49, 'BS71', 'ITALIAN FOCCASIA BREAD     ', 10, 40, 'img/bread6.png', '25', '4 DAYS', 'packet'),
(50, 'KB605', 'KB LAVASH   ', 10, 60, 'img/bread6.png', '27', '4 MONTHS', '200g'),
(51, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(52, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL),
(54, NULL, NULL, -1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE IF NOT EXISTS `cakes` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `shelf_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelf_life`, `unit`) VALUES
(31, 'KB748', 'CHOCOLATE CRUNCHY', 18, 700, 'img/cake1.png', '5', '4 DAYS', 'KG'),
(30, 'KB908', 'TRUFFLE ALMOND', 10, 700, 'img/cake4.png', '5', '4 DAYS', 'KG'),
(29, 'PK17', 'TRUFFLE WALNUT', 9, 700, 'img/cake3.png', '5', '4 DAYS', 'KG'),
(28, 'PK87', 'CHEESE CAKES(Lemon,B', 9, 700, 'img/cake2.png', '5', '3 DAYS', 'KG'),
(27, 'KB734', 'BELGIUM MOUSSEE', 10, 650, 'img/cake4.png', '4', '3 DAYS', 'KG'),
(26, 'KB247', 'AMERICAN NUT', 10, 650, 'img/cake4.png', '4', '3 DAYS', 'KG'),
(25, 'KB249', 'STRAWBERRY TWIST', 10, 650, 'img/cake4.png', '4', '3 DAYS', 'KG'),
(24, 'KB338', 'CHOCOLATE HIDE & SEE', 9, 650, 'img/cake4.png', '4', '3 DAYS', 'KG'),
(23, 'KB252', 'PHOTO PASTRY', 10, 650, 'img/cake4.png', '4', '3 DAYS', 'KG'),
(22, 'KB736', 'CHOCOLATE ORANGE', 10, 650, 'img/cake4.png', '4', '3 DAYS', 'KG'),
(21, 'KB243', 'CHOCOLATE EXCCESS', 10, 650, 'img/cake4.png', '4', '4 DAYS', 'KG'),
(20, 'BS98', 'BRAZILIAN SURPRISE', 10, 650, 'img/cake4.png', '4', '4 DAYS', 'KG'),
(19, 'KB324', 'KIT KAT', 10, 650, 'img/cake4.png', '4', '4 DAYS', 'KG'),
(18, 'KB359', 'ZEBRA', 10, 650, 'img/cake4.png', '4', '4 DAYS', 'KG'),
(17, 'KB353', 'CHOCOLATE GOOEE', 10, 600, 'img/cake4.png', '3', '4 DAYS', 'KG'),
(16, 'PK11', 'BUTTER SCOTCH PASTRY', 10, 600, 'img/cake4.png', '3', '3 DAYS', 'KG'),
(15, 'PK46', 'SEASONAL FRUIT', 10, 600, 'img/cake4.png', '3', '3 DAYS', 'KG'),
(14, 'PK35', 'PINA ORANGE', 4, 600, 'img/cake4.png', '3', '3 DAYS', 'KG'),
(13, 'BS94', 'CHOCOLATE FUDGE', 10, 600, 'img/cake4.png', '3', '4 DAYS', 'KG'),
(12, 'PK10', 'WHITE FOREST', 10, 540, 'img/cake4.png', '2', '3 DAYS', 'KG'),
(11, 'KB268', 'TANGO ORANGE', 9, 540, 'img/cake4.png', '2', '3 DAYS', 'KG'),
(10, 'KB210', 'BOUR-BON PASTRY', 9, 540, 'img/cake4.png', '2', '4 DAYS', 'KG'),
(9, 'PK08', 'CHOCO CARAMEL', 9, 540, 'img/cake4.png', '2', '4 DAYS', 'KG'),
(8, 'KB724', 'CASSATA SWISS ROLL', 10, 540, 'img/cake4.png', '2', '3 DAYS', 'KG'),
(7, 'KB363', 'SWISS TRUFFLE', 10, 540, 'img/cake4.png', '2', '4 DAYS', 'KG'),
(6, 'KB720', 'CHOCOLATE CHIPS', 10, 540, 'img/cake4.png', '2', '4 DAYS', 'KG'),
(5, 'KB776', 'CHOCO SWISS ROLL', 10, 480, 'img/cake4.png', '1', '4 DAYS', 'KG'),
(4, 'KB233', 'CHOCOLATE GATEAUX', 10, 480, 'img/cake4.png', '1', '4 DAYS', 'KG'),
(3, 'PK33', 'STRAWBERRY TEMPTATIO', 10, 480, 'img/cake4.png', '1', '3 DAYS', 'KG'),
(2, 'KB308', 'PINEAPPLE GATEAUX', 10, 480, 'img/cake4.png', '1', '3 DAYS', 'KG'),
(1, 'KB231', 'BLACK FOREST', 10, 480, 'img/cake4.png', '1', '3 DAYS', 'KG'),
(32, 'KB762', 'BLUEBERRY PASTRY', 10, 700, 'img/cake4.png', '6', '4 DAYS', 'KG'),
(33, 'KB802', 'BROWNIE MOUSSEE PAST', 10, 700, 'img/cake4.png', '6', '4 DAYS', 'KG'),
(34, 'KB759', 'XOTIC FRUITS', 10, 700, 'img/cake4.png', '6', '4 DAYS', 'KG'),
(35, 'KB340', 'FERRERO ROCHER 100g', 10, 750, 'img/cake4.png', '6', '4 DAYS', 'KG'),
(36, 'KB755', 'OREO MOUSSEE 100g', 10, 750, 'img/cake4.png', '6', '4 DAYS', 'KG'),
(38, '', '', 10, 0, '', '', '', ''),
(39, '', '', 10, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_type` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `item_type`, `category`) VALUES
(1, 'Cake', 'POPULAR'),
(2, 'Cake', 'PREMIUM'),
(3, 'Cake', 'XOTICA'),
(4, 'Cake', 'SUPREME '),
(5, 'Cake', 'MAESTRO '),
(6, 'Cake', 'CHEF''S SPECIAL'),
(7, 'Pastry', 'POPULAR'),
(8, 'Pastry', 'PREMIUM'),
(9, 'Pastry', 'XOTICA'),
(10, 'Pastry', 'SUPREME '),
(11, 'Pastry', 'MAESTRO '),
(12, 'Pastry', 'CHEF''S SPECIAL'),
(13, 'DryCake', 'DOUGHNUT'),
(14, 'DryCake', 'MUFFIN'),
(15, 'DryCake', 'BROWNIEE'),
(16, 'DryCake', 'DRY CAKE'),
(18, 'Pudding', 'ONE PIECE'),
(19, 'Pudding', 'BULK'),
(20, 'Chocolate', 'FRUITS'),
(21, 'Chocolate', 'FLAVOURED'),
(22, 'Chocolate', 'PACKET'),
(23, 'Chocolate', 'ASSORTED'),
(24, 'Bread', 'PIZZA BREAD'),
(25, 'Bread', 'FRECH-ITALIAN-MAXICAN'),
(26, 'Bread', 'PAV'),
(27, 'Bread', 'OTHER'),
(30, 'Cookie', 'FLAVOURED'),
(31, 'Cookie', 'NANKHATAI'),
(32, 'Cookie', 'FRUIT'),
(33, 'Cookie', 'CHOCOLATE'),
(34, 'Savories', 'FASTFOOD'),
(35, 'Savories', 'ROLL'),
(36, 'Savories', 'BURGER'),
(37, 'Savories', 'SANDWICH'),
(38, 'Savories', 'PIZZA'),
(43, 'Khari', 'TOAST'),
(44, 'Khari', 'RUSK'),
(45, 'Khari', 'KHARI');

-- --------------------------------------------------------

--
-- Table structure for table `chocolates`
--

CREATE TABLE IF NOT EXISTS `chocolates` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `shelf_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `chocolates`
--

INSERT INTO `chocolates` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelf_life`, `unit`) VALUES
(1, 'KB107', 'FRUIT N NUT BAR', 19, 35, 'img/choco.jpg', '20', '6 MONTHS', '35g'),
(2, 'KB108', 'CRUNCHY BAR', 18, 25, 'img/choco.jpg', '21', '6 MONTHS', '30g'),
(3, 'KB170', 'CHOCO-BITE', 10, 10, 'img/choco.jpg', '21', '6 MONTHS', '10g'),
(4, 'KB173', 'CHOCOLATE PACK (SMALL) 12PC', 10, 80, 'img/choco.jpg', '22', '6 MONTHS', '75g'),
(5, 'KB174', 'CHOCOLATE PACK (MEDIUM) 22PC', 10, 150, 'img/choco.jpg', '22', '6 MONTHS', '150g'),
(6, 'KB48', 'CENTRE FILLED CHOCOLATE BOX  10PC', 10, 150, 'img/choco.jpg', '22', '3 MONTHS', '125g'),
(7, 'KB77', 'ASSORTED NUT CHOCOLATE', 10, 5, 'img/choco.jpg', '20', '6 MONTHS', '7g'),
(8, 'KB773', ' DRYFRUIT ROCKS CHOCOLATE (CASHEW / ALMOND)', 10, 10, 'img/choco.jpg', '20', '6 MONTHS', '15g'),
(9, 'KB783', 'CRUNCHY CHOCOLATE', 10, 15, 'img/choco.jpg', '21', '6 MONTHS', '15g'),
(10, 'KB832', 'SUGAR FREE CHOCOLATE', 10, 20, 'img/choco.jpg', '21', '6 MONTHS', '10g'),
(11, 'KB833', 'ASSORTED CENTER - FILLED CHOCOLATE', 10, 15, 'img/choco.jpg', '23', '3 MONTHS', '10g'),
(12, 'KB845', 'LOLLIPOP', 10, 10, 'img/choco.jpg', '21', '3 MONTHS', '12g'),
(13, 'KB855', 'TOFFEE DELITE', 10, 20, 'img/choco.jpg', '21', '3 MONTHS', '30g'),
(14, 'KB856', 'ORANGE LOG', 10, 20, 'img/choco.jpg', '20', '3 MONTHS', '25g'),
(15, 'KB857', 'CHOCOLATE PACK (LARGE) 35PC', 10, 220, 'img/choco.jpg', '22', '6 MONTHS', '250g'),
(16, 'KB858', ' ASSORTED ROCK CHOCOLATE', 9, 400, 'img/choco.jpg', '23', '6 MONTHS', '500g');

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

CREATE TABLE IF NOT EXISTS `cookies` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `shelfe_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelfe_life`, `unit`) VALUES
(1, 'KB571', 'KB SURTI BUTTER', 10, 40, 'img/khari2.jpg', '30', '4 MONTHS', '150g'),
(2, 'KB570', 'KB NANKHATAI', 3, 45, 'img/khari2.jpg', '31', '4 MONTHS', '200g'),
(3, 'BS64', 'KB BESAN KHATAI COOKIES', 3, 60, 'img/khari2.jpg', '31', '4 MONTHS', '250g'),
(4, 'BS60', 'PISTA SALTED COOKIES', 10, 50, 'img/khari2.jpg', '30', '4 MONTHS', '200g'),
(5, 'KB627', 'ATTA JEERA COOKIES', 10, 60, 'img/khari2.jpg', '30', '4 MONTHS', '200g'),
(6, 'KB569', 'KB COCONUT COOKIES', 10, 60, 'img/khari2.jpg', '32', '4 MONTHS', '250g'),
(7, 'KB599', 'KB CASHEW COOKIES', 10, 70, 'img/khari2.jpg', '30', '4 MONTHS', '200g'),
(8, 'KB568', 'KB CHOCOLATE CHIP COOKIES', 10, 70, 'img/khari2.jpg', '33', '4 MONTHS', '250g'),
(9, 'KB567', 'KB PISTA BADAM COOKIES', 10, 70, 'img/khari2.jpg', '32', '4 MONTHS', '200g'),
(10, 'KB715', 'DARK CHOCOLATE CHIP COOKIES', 10, 120, 'img/khari2.jpg', '33', '4 MONTHS', '250g'),
(11, 'KB703', 'GEMS COOKIES', 0, 120, 'img/khari2.jpg', '33', '4 MONTHS', '250g');

-- --------------------------------------------------------

--
-- Table structure for table `cream_rolls`
--

CREATE TABLE IF NOT EXISTS `cream_rolls` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `shelfe_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cream_rolls`
--

INSERT INTO `cream_rolls` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelfe_life`, `unit`) VALUES
(6, 'KB286', 'STRAWBERRY CREAM ROLL 1PC', 10, 25, 'img/khari2.jpg', '0', '2 MONTHS', '70g'),
(5, 'KB285', 'PINEAPPLE CREAM ROLL 1PC', 10, 25, 'img/khari2.jpg', '0', '2 MONTHS', '70g'),
(4, 'KB273', 'BUTTER SCOTCH CREAM ROLL 1PC', 10, 25, 'img/khari2.jpg', '0', '2 MONTHS', '70g'),
(3, 'KB816', 'KB JELLY CREAM ROLL 1PC', 10, 25, 'img/khari2.jpg', '0', '2 MONTHS', '70g'),
(2, 'KB604', 'KB CHOCO CREAM ROLL 1 PC', 10, 20, 'img/khari2.jpg', '0', '2 MONTHS', '70g'),
(1, 'KB603', 'KB VANILLA CREAM ROLL 1PC', 0, 20, 'img/khari2.jpg', '0', '2 MONTHS', '70g'),
(7, '', '', -1, 0, '', '', '', ''),
(8, '', '', -1, 0, '', '', '', ''),
(9, '', '', -20, 0, '', '', '', ''),
(10, '', '', -20, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cup_cakes`
--

CREATE TABLE IF NOT EXISTS `cup_cakes` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `shelfe_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cup_cakes`
--

INSERT INTO `cup_cakes` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelfe_life`, `unit`) VALUES
(1, 'KB223', 'STRAWBERRY', 29, 40, 'img/s1.jpg', '0', '10 DAYS', '75g'),
(2, 'KB224', 'PINEAPPLE', 29, 40, 'img/p2.jpg', '0', '10 DAYS', '75g'),
(3, 'KB225', 'CHOCOLATE CHIPS', 25, 40, 'img/c4.jpg', '0', '10 DAYS', '75g'),
(4, 'KB227', 'DOUBLE DIP', 31, 40, 'img/d3.jpg', '0', '10 DAYS', '75g');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `number` varchar(15) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122 ;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `name`, `number`) VALUES
(104, 'Rinkal', '9586286840'),
(103, 'jhgjgh', '77t7676'),
(102, 'nnn', '9966666666'),
(101, '', ''),
(100, 'Neel', '9409419294'),
(105, 'bhumika', '131354'),
(106, 'bhumika', '1464564'),
(107, 'bhumika', '9998765433'),
(108, 'ikjkjk', '1111111111'),
(109, 'bhumika', '8888888888'),
(110, 'bhumi', '7777777777'),
(111, 'hjhj', '9998321655'),
(112, 'neel', '94094'),
(113, 'neel', '1'),
(114, 'neel', '9010101010'),
(115, '', '9726732371'),
(116, 'rinkal', '9974400433'),
(117, 'test', 'test'),
(118, 'B', '997440433'),
(119, 'ankur', 'pandit'),
(120, 'Sonal', '9874563210'),
(121, 'test', 'teste');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_details`
--

CREATE TABLE IF NOT EXISTS `customer_order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_quantity` varchar(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `employee_id` varchar(20) NOT NULL,
  `total_bill` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `ordertype` varchar(20) NOT NULL DEFAULT 'takeaway',
  `advance` int(11) NOT NULL DEFAULT '0',
  `delivery_date` date DEFAULT NULL,
  `branch` varchar(20) NOT NULL DEFAULT 'Baroda',
  `item_return_quantity` int(20) NOT NULL,
  `each_qty_price` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=355 ;

--
-- Dumping data for table `customer_order_details`
--

INSERT INTO `customer_order_details` (`id`, `order_id`, `customer_id`, `item_name`, `item_quantity`, `order_date`, `employee_id`, `total_bill`, `type`, `ordertype`, `advance`, `delivery_date`, `branch`, `item_return_quantity`, `each_qty_price`) VALUES
(314, 11, 116, 'KB JEERA KHARI', '1', '2014-04-02 18:30:00', '6', 60, 'Khari', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(313, 11, 116, 'TRUFFLE WALNUT', '1', '2014-04-02 18:30:00', '6', 700, 'Cake', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(312, 11, 116, 'ATTA PIZZA BASE BIG (3PC) ', '1', '2014-04-02 18:30:00', '6', 30, 'Bread', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(311, 10, 116, 'Vanilla', '1', '2014-04-01 18:30:00', '6', 1000, 'Cake', 'special', 220, '0000-00-00', 'Baroda', 0, 0),
(310, 9, 116, 'ITALIAN BAKE PIZZA      ', '1', '2014-04-01 18:30:00', '6', 35, 'Savories', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(309, 9, 116, 'CHEESE CAKES(Lemon,B', '1', '2014-04-01 18:30:00', '6', 700, 'Cake', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(308, 9, 116, 'PINA ORANGE', '1', '2014-04-01 18:30:00', '6', 600, 'Cake', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(307, 8, 116, 'VEG. NOODLES PATTIES', '5', '2014-04-01 18:30:00', '6', 100, 'Puff', 'advance', 500, '2014-04-02', 'Baroda', 0, 0),
(306, 8, 116, 'MUFFIN CHOCO CHIPS 1PC             ', '5', '2014-04-01 18:30:00', '6', 125, 'DryCake', 'advance', 500, '2014-04-02', 'Baroda', 0, 0),
(305, 8, 116, 'PINA ORANGE', '5', '2014-04-01 18:30:00', '6', 3000, 'Cake', 'advance', 500, '2014-04-02', 'Baroda', 0, 0),
(304, 7, 116, 'cap', '1', '2014-04-01 18:30:00', '6', 35, 'Extra', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(303, 7, 116, 'TANGO ORANGE', '1', '2014-04-01 18:30:00', '6', 540, 'Cake', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(302, 7, 116, 'ATTA PIZZA BASE BIG (3PC) ', '1', '2014-04-01 18:30:00', '6', 30, 'Bread', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(301, 7, 116, 'PACK PATTIES', '1', '2014-04-01 18:30:00', '6', 15, 'Puff', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(300, 6, 118, 'ROUND FRENCH LOAF', '1', '2014-04-01 18:30:00', '6', 15, 'Bread', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(299, 6, 118, ' ASSORTED ROCK CHOCOLATE', '1', '2014-04-01 18:30:00', '6', 400, 'Chocolate', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(298, 6, 118, 'CHOCOLATE HIDE & SEE', '1', '2014-04-01 18:30:00', '6', 650, 'Cake', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(297, 5, 101, 'ITALIAN BAKE PIZZA      ', '1', '2014-04-01 18:30:00', '6', 35, 'Savories', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(296, 5, 101, 'KB JEERA KHARI', '1', '2014-04-01 18:30:00', '6', 60, 'Khari', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(295, 4, 116, 'CTC SANDWICH   (JAIN)                      ', '1', '2014-04-01 18:30:00', '6', 25, 'Savories', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(294, 4, 116, 'CHOCO CARAMEL', '1', '2014-04-01 18:30:00', '6', 540, 'Cake', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(293, 4, 116, 'ITALIAN FOCCASIA SANDWICH     ', '1', '2014-04-01 18:30:00', '6', 30, 'Savories', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(292, 4, 116, 'BOUR-BON PASTRY', '1', '2014-04-01 18:30:00', '6', 540, 'Cake', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(291, 3, 116, 'Vanilla', '1', '2014-04-01 18:30:00', '6', 1000, 'Cake', 'special', 240, '0000-00-00', 'Baroda', 0, 0),
(290, 2, 116, 'ALOO PUFF', '1', '2014-04-01 18:30:00', '6', 10, 'Puff', 'advance', 100, '2014-04-02', 'Baroda', 0, 0),
(289, 1, 116, 'ALOO PUFF', '1', '2014-04-01 18:30:00', '6', 10, 'Puff', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(315, 12, 116, 'GEMS COOKIES', '10', '2014-04-02 18:30:00', '6', 1200, 'Cookie', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(316, 13, 101, 'Vanilla', '1', '2014-04-02 18:30:00', '6', 0, 'Cake', 'special', 0, '0000-00-00', 'Baroda', 0, 0),
(317, 14, 116, 'DOUBLE DIP', '8', '2014-04-03 18:30:00', '6', 320, 'CupCake', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(321, 15, 116, 'STRAWBERRY', '10', '2014-04-06 18:30:00', '6', 400, 'CupCake', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(322, 15, 116, 'PINEAPPLE', '10', '2014-04-06 18:30:00', '6', 400, 'CupCake', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(323, 15, 116, 'CHOCOLATE CHIPS', '10', '2014-04-06 18:30:00', '6', 400, 'CupCake', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(324, 16, 119, 'KB PAV BREAD ( 6 PC )', '10', '2014-04-06 18:30:00', '6', 250, 'Bread', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(325, 16, 119, 'KB SESAME BURGER ( 2 PC )', '10', '2014-04-06 18:30:00', '6', 200, 'Bread', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(326, 17, 116, 'CHOCOLATE BALL', '10', '2014-04-07 18:30:00', '6', 200, 'Pudding', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(327, 17, 116, 'CHOCOLATE PUDDING', '10', '2014-04-07 18:30:00', '6', 450, 'Pudding', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(328, 17, 116, 'PRE. SADA KHAKHARA', '10', '2014-04-07 18:30:00', '6', 450, 'Khakhra', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(329, 18, 116, 'KB VANILLA CREAM ROLL 1PC', '12', '2014-04-20 18:30:00', '6', 20, 'CreamRoll', 'takeaway', 0, NULL, 'Baroda', 0, 0),
(330, 19, 116, 'ALOO PUFF', '10', '2014-04-21 07:23:21', '6', 10, 'Puff', 'takeaway', 0, NULL, 'Baroda', 5, 0),
(331, 20, 116, 'ATTA PIZZA BASE BIG (3PC) ', '2', '2014-04-23 07:18:14', '6', 60, 'Bread', 'takeaway', 0, NULL, 'Baroda', 1, 30),
(332, 21, 117, 'ATTA PIZZA BASE BIG (3PC) ', '2', '2014-04-22 18:30:00', '6', 60, 'Bread', 'takeaway', 0, NULL, 'Baroda', 0, 30),
(333, 21, 117, 'KB RUSK (JEERA)', '2', '2014-04-22 18:30:00', '6', 120, 'Khari', 'takeaway', 0, NULL, 'Baroda', 0, 60),
(334, 21, 117, 'VEG. PATTIES SPL', '5', '2014-04-23 06:47:05', '6', 100, 'Puff', 'takeaway', 0, NULL, 'Baroda', 1, 20),
(335, 22, 116, 'MULTI-GRAIN BREAD', '2', '2014-04-22 18:30:00', '6', 50, 'Bread', 'takeaway', 0, NULL, 'Baroda', 0, 25),
(336, 22, 116, 'FRUIT BREAD ', '2', '2014-04-22 18:30:00', '6', 50, 'Bread', 'takeaway', 0, NULL, 'Baroda', 0, 25),
(337, 22, 116, 'MEXICAN LOAF ', '2', '2014-04-22 18:30:00', '6', 40, 'Bread', 'takeaway', 0, NULL, 'Baroda', 0, 40),
(338, 23, 116, 'MUFFIN  RAISIN ALMOND 1PC        ', '1', '2014-04-22 18:30:00', '6', 25, 'DryCake', 'takeaway', 0, NULL, 'Baroda', 0, 25),
(339, 23, 116, 'ATTA PIZZA BASE BIG (3PC) ', '1', '2014-04-22 18:30:00', '6', 30, 'Bread', 'takeaway', 0, NULL, 'Baroda', 0, 30),
(340, 24, 116, 'Vanilla', '1', '2014-04-22 18:30:00', '6', 10800, 'Cake', 'special', 2200, '0000-00-00', 'Baroda', 0, 0),
(341, 25, 116, 'TRIANGLE PIZZA BASE(3PC)', '1', '2014-04-22 18:30:00', '6', 30, 'Bread', 'advance', 200, '2014-04-23', 'Baroda', 0, 0),
(342, 26, 116, 'Vanilla', '1', '2014-04-22 18:30:00', 'admin', 1000, 'Cake', 'special', 240, '0000-00-00', 'Baroda', 0, 0),
(343, 27, 120, 'select', '1', '2014-04-23 18:30:00', '6', 1000, 'Cake', 'special', 11109, '0000-00-00', 'Baroda', 0, 0),
(344, 28, 116, 'Chocolate', '1', '2014-04-23 18:30:00', '6', 1000, 'Cake', 'special', 300, '0000-00-00', 'Baroda', 0, 0),
(345, 29, 116, 'Chocolate', '1', '2014-04-23 18:30:00', '6', 1000, 'Cake', 'special', 300, '0000-00-00', 'Baroda', 0, 0),
(346, 30, 116, 'blueberry', '1', '2014-04-23 18:30:00', '6', 1000, 'Cake', 'special', 300, '0000-00-00', 'Baroda', 0, 0),
(347, 31, 101, 'KB NANKHATAI', '1', '2014-04-23 18:30:00', '6', 45, 'Cookie', 'takeaway', 0, NULL, 'Baroda', 0, 45),
(348, 32, 121, 'KB BESAN KHATAI COOKIES', '1', '2014-04-23 18:30:00', '6', 60, 'Cookie', 'takeaway', 0, NULL, 'Baroda', 0, 60),
(349, 33, 101, 'RAJA-RANI CAKE', '1', '2014-04-23 18:30:00', '6', 120, 'DryCake', 'takeaway', 0, NULL, 'Baroda', 0, 120),
(350, 34, 116, 'FRENCH LOAF', '1', '2014-04-24 18:30:00', '10', 30, 'Bread', 'takeaway', 0, NULL, 'Baroda', 0, 30),
(351, 34, 116, 'WALNUT BROWNIEE KB 1PC', '1', '2014-04-24 18:30:00', '10', 70, 'DryCake', 'takeaway', 0, NULL, 'Baroda', 0, 70),
(352, 35, 116, 'KB GOOEE BROWNIEE ', '1', '2014-04-24 18:30:00', '10', 70, 'DryCake', 'takeaway', 0, NULL, 'Baroda', 0, 70),
(353, 36, 116, 'KB BESAN KHATAI COOKIES', '6', '2014-04-24 18:30:00', '10', 360, 'Cookie', 'takeaway', 0, NULL, 'Baroda', 0, 60),
(354, 36, 116, 'KB NANKHATAI', '6', '2014-04-24 18:30:00', '10', 45, 'Cookie', 'takeaway', 0, NULL, 'Baroda', 0, 45);

-- --------------------------------------------------------

--
-- Table structure for table `customer_returns`
--

CREATE TABLE IF NOT EXISTS `customer_returns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `item_type` varchar(225) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_return_quantity` int(11) NOT NULL DEFAULT '0',
  `return_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remark` varchar(225) DEFAULT NULL,
  `note` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL DEFAULT 'Baroda',
  `item_purchase_quantity` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `customer_returns`
--

INSERT INTO `customer_returns` (`id`, `order_id`, `item_type`, `item_name`, `item_return_quantity`, `return_date`, `remark`, `note`, `branch`, `item_purchase_quantity`) VALUES
(122, 15, 'CupCake', 'PINEAPPLE', 1, '2014-04-07 08:20:25', 'test', 'Reuse', 'Baroda', 5),
(123, 15, 'CupCake', 'STRAWBERRY', 5, '2014-04-07 09:06:38', 'test', 'Reuse', 'Baroda', 10),
(124, 15, 'CupCake', 'STRAWBERRY', 5, '2014-04-07 09:07:58', 'test', 'Reuse', 'Baroda', 10),
(125, 15, 'CupCake', 'PINEAPPLE', 5, '2014-04-07 09:07:58', 'test', 'Reuse', 'Baroda', 10),
(126, 15, 'CupCake', 'CHOCOLATE CHIPS', 5, '2014-04-07 09:07:58', 'test', 'Reuse', 'Baroda', 10),
(127, 16, 'Bread', 'KB PAV BREAD ( 6 PC ', 5, '2014-04-07 10:12:03', 'ankur test', 'Reuse', 'Baroda', 10),
(128, 16, 'Bread', 'KB SESAME BURGER ( 2', 5, '2014-04-01 10:12:03', 'ankur test', 'Damage', 'Baroda', 10),
(129, 17, 'Pudding', 'CHOCOLATE BALL', 5, '2014-04-08 06:19:46', 'reuse', 'Reuse', 'Baroda', 10),
(130, 17, 'Pudding', 'CHOCOLATE PUDDING', 5, '2014-04-08 06:19:46', 'damage', 'Damage', 'Baroda', 10),
(131, 17, 'Khakhra', 'PRE. SADA KHAKHARA', 5, '2014-04-08 06:19:46', 'bad taste', 'Bad taste', 'Baroda', 10),
(132, 19, 'Puff', 'ALOO PUFF', 5, '2014-04-21 07:23:21', 'testing customer return', '', 'Baroda', 10);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE IF NOT EXISTS `delivery_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `delivery_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=377 ;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`id`, `delivery_id`, `item_name`, `quantity`, `type`) VALUES
(363, 172, 'STRAWBERRY CREAM ROL', 50, 'CreamRoll'),
(362, 171, 'STRAWBERRY CREAM ROL', 10, 'CreamRoll'),
(361, 170, 'CHOCOLATE DOUGHNUT K', 10, 'DryCake'),
(360, 169, 'CHOCOLATE CRUNCHY', 10, 'Cake'),
(359, 168, 'FRUIT BREAD ', 10, 'Bread'),
(358, 167, 'PINEAPPLE CREAM ROLL', 10, 'CreamRoll'),
(357, 167, 'STRAWBERRY CREAM ROL', 10, 'CreamRoll'),
(356, 166, 'KB RUSK (BUTTER)', 10, 'Khari'),
(355, 166, 'STRAWBERRY CREAM ROL', 10, 'CreamRoll'),
(354, 165, 'ALOO PUFF', 12, 'Puff'),
(353, 165, 'KACHORI PUFF', 10, 'Puff'),
(352, 164, 'CHOCOLATE DOUGHNUT K', 10, 'DryCake'),
(351, 164, 'STRAWBERRY TWIST', 10, 'Pastry'),
(350, 164, 'AMERICAN NUT', 10, 'Pastry'),
(347, 163, 'CHOCOLATE PUDDING', 10, 'Pudding'),
(348, 163, 'CHOCOLATE BALL', 5, 'Pudding'),
(349, 163, 'PRE. SADA KHAKHARA', 10, 'Khakhra'),
(364, 173, 'STRAWBERRY CREAM ROL', 50, 'CreamRoll'),
(365, 174, 'STRAWBERRY CREAM ROL', 50, 'CreamRoll'),
(366, 175, 'STRAWBERRY CREAM ROL', 50, 'CreamRoll'),
(367, 175, 'PINEAPPLE CREAM ROLL', 50, 'CreamRoll'),
(368, 176, 'KB VANILLA CREAM ROLL 1PC', 10, 'CreamRoll'),
(369, 177, 'SAMOSA 1PC', 10, 'Savories'),
(370, 178, 'KB RUSK (JEERA)', 10, 'Khari'),
(371, 178, 'KB RUSK (MILK)', 10, 'Khari'),
(372, 178, 'CHOCOLATE FUDGE', 10, 'Pastry'),
(373, 178, 'BRAZILIAN SURPRISE', 10, 'Pastry'),
(374, 178, 'FRUIT N NUT BAR', 10, 'Chocolate'),
(375, 178, 'CRUNCHY BAR', 10, 'Chocolate'),
(376, 179, 'KB VANILLA CREAM ROLL 1PC', 12, 'CreamRoll');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_masters`
--

CREATE TABLE IF NOT EXISTS `delivery_masters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=180 ;

--
-- Dumping data for table `delivery_masters`
--

INSERT INTO `delivery_masters` (`id`, `order_id`, `created`, `employee_id`) VALUES
(163, 165, '2014-04-08', '6'),
(179, 178, '2014-04-21', '6'),
(178, 177, '2014-04-21', '6'),
(177, 176, '2014-04-16', '6'),
(176, 175, '2014-04-16', '6'),
(175, 174, '2014-04-16', '6'),
(174, 174, '2014-04-16', '6'),
(173, 174, '2014-04-16', '6'),
(172, 174, '2014-04-16', '6'),
(171, 173, '2014-04-16', '6'),
(170, 172, '2014-04-16', '6'),
(169, 171, '2014-04-16', '6'),
(168, 170, '2014-04-16', '6'),
(167, 169, '2014-04-16', '6'),
(166, 168, '2014-04-16', '6'),
(165, 167, '2014-04-16', '6'),
(164, 166, '2014-04-16', '6');

-- --------------------------------------------------------

--
-- Table structure for table `drycakes`
--

CREATE TABLE IF NOT EXISTS `drycakes` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `shelfe_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `drycakes`
--

INSERT INTO `drycakes` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelfe_life`, `unit`) VALUES
(1, 'KB653', 'CHOCOLATE DOUGHNUT KB', 10, 20, 'img/khari2.jpg', '13', '3 DAYS', '100g'),
(2, 'KB264', 'MUFFIN PINEAPPLE 1PC                ', 10, 20, 'img/khari2.jpg', '14', '15 DAYS', '50g'),
(3, 'BR07', 'MUFFIN  RAISIN ALMOND 1PC        ', 9, 25, 'img/khari2.jpg', '14', '15 DAYS', '50g'),
(4, 'AL130', 'MUFFIN CHOCO CHIPS 1PC             ', 5, 25, 'img/khari2.jpg', '14', '15 DAYS', '50g'),
(5, 'KB266', 'COMBO PC MUFFIN ', 10, 25, 'img/khari2.jpg', '14', '15 DAYS', '50g'),
(6, 'KB261', 'WALNUT BROWNIEE PACK 1PC ', 10, 45, 'img/khari2.jpg', '15', '15 DAYS', '50g'),
(7, 'KB160', 'ORANGE SLICED CAKE                    ', 10, 50, 'img/khari2.jpg', '16', '15 DAYS', '100g'),
(8, 'KB824', 'CHOCOVANILLA SLICE CAKE', 10, 50, 'img/khari2.jpg', '16', '15 DAYS', '100g'),
(9, 'AL119', 'WALNUT BROWNIEE KB 1PC', 9, 70, 'img/khari2.jpg', '15', '15 DAYS', '100g'),
(10, 'KB688', 'KB GOOEE BROWNIEE ', 9, 70, 'img/khari2.jpg', '15', '15 DAYS', '100g'),
(11, 'KB267', 'RICH CHOCOLATE CAKE (WITH SUGAR)', 10, 120, 'img/khari2.jpg', '16', '15 DAYS', '250g'),
(12, 'KB53', 'RAJA-RANI CAKE', 9, 120, 'img/khari2.jpg', '16', '15 DAYS', '250g'),
(13, '', '', 10, 0, '', '', '', ''),
(14, '', '', 10, 0, '', '', '', ''),
(15, '', '', -2, 0, '', '', '', ''),
(16, '', '', -2, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE IF NOT EXISTS `employee_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `number` int(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` varchar(225) NOT NULL DEFAULT 'Employee' COMMENT '0: employee, 1: administrator, 2: super administrator',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `name`, `number`, `email`, `password`, `position`) VALUES
(6, 'admin', 2147483647, 'rinkalvictor@gmail.c', 'admin', 'Admin'),
(7, 'demo', 2147483647, 'bhumika@yahoo.com', 'demo', 'Employee'),
(8, '1', 2147483647, 'neel@gmail.com', '123456', '0'),
(9, 'neel', 2147483647, 'test@test.com', '1234', '0'),
(10, 'test', 4546541, 'dsfdsf', 'test', 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `employee_returns`
--

CREATE TABLE IF NOT EXISTS `employee_returns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `return_qty` int(11) NOT NULL,
  `note` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `return_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reason` varchar(20) NOT NULL,
  `item_purchase_quantity` int(20) NOT NULL,
  `total_price` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `employee_returns`
--

INSERT INTO `employee_returns` (`id`, `order_id`, `item_name`, `return_qty`, `note`, `type`, `return_date`, `reason`, `item_purchase_quantity`, `total_price`) VALUES
(92, 165, 'CHOCOLATE PUDDING', 1, 'test', 'Pudding', '2014-01-01 10:55:36', 'Damage', 10, 200),
(93, 165, 'CHOCOLATE BALL', 1, 'test', 'Pudding', '2014-02-04 10:55:31', 'Damage', 5, 150),
(94, 165, 'PRE. SADA KHAKHARA', 1, 'test', 'Khakhra', '2014-03-18 10:55:26', 'Damage', 10, 80),
(95, 166, 'CHOCOLATE DOUGHNUT K', 2, '166 order', 'DryCake', '2014-04-05 10:55:19', 'Damage', 10, 100),
(96, 166, 'STRAWBERRY TWIST', 2, '166order', 'Pastry', '2014-04-06 10:55:10', 'Expire', 10, 100),
(97, 166, 'AMERICAN NUT', 2, '166 order', 'Pastry', '2014-04-09 10:55:04', 'Expire', 10, 100),
(98, 167, 'ALOO PUFF', 10, '167 order id', 'Puff', '2014-04-10 10:54:58', 'Expire', 12, 300),
(99, 167, 'KACHORI PUFF', 10, '167 order id', 'Puff', '2014-04-11 10:54:53', 'Expire', 10, 250),
(100, 168, 'KB RUSK (BUTTER)', 1, '168 order id', 'Khari', '2014-04-12 10:54:42', 'Customer return', 10, 90),
(101, 168, 'STRAWBERRY CREAM ROL', 1, '168 order id', 'CreamRoll', '2014-04-12 10:54:36', 'Customer return', 10, 70),
(102, 171, 'CHOCOLATE CRUNCHY', 2, '171 order id', 'Cake', '2014-04-13 10:54:29', 'Damage', 10, 120),
(103, 172, 'CHOCOLATE DOUGHNUT K', 2, '172 id', 'DryCake', '2014-04-14 10:54:23', 'Expire', 10, 100),
(104, 173, 'STRAWBERRY CREAM ROL', 1, '173 0rder', 'CreamRoll', '2014-04-14 10:54:15', 'Customer return', 10, 20),
(105, 175, 'KB VANILLA CREAM ROLL 1PC', 8, '175 order', 'CreamRoll', '2014-04-14 10:54:10', 'Expire', 10, 20),
(106, 174, 'STRAWBERRY CREAM ROL', 20, '174 order', 'CreamRoll', '2014-04-14 10:54:06', 'Expire', 50, 170),
(107, 174, 'PINEAPPLE CREAM ROLL', 20, '174 order', 'CreamRoll', '2014-04-15 10:54:00', 'Customer return', 50, 170),
(108, 170, 'FRUIT BREAD ', 7, '170 order', 'Bread', '2014-04-16 10:53:40', 'Customer return', 10, 175),
(109, 176, 'SAMOSA 1PC', 10, '176 order', 'Savories', '2014-04-16 10:50:46', 'Damage', 10, 100),
(110, 177, 'KB RUSK (JEERA)', 10, 'tets', 'Khari', '2014-04-21 06:14:44', 'Customer return', 10, 600),
(111, 177, 'KB RUSK (MILK)', 10, 'test', 'Khari', '2014-04-21 06:14:44', 'Damage', 10, 600),
(112, 177, 'CHOCOLATE FUDGE', 5, 'test', 'Pastry', '2014-04-21 06:14:44', 'Damage', 10, 300),
(113, 177, 'BRAZILIAN SURPRISE', 7, 'test', 'Pastry', '2014-04-21 06:14:44', 'Expire', 10, 455),
(114, 177, 'FRUIT N NUT BAR', 1, 'test', 'Chocolate', '2014-04-21 06:14:44', 'Expire', 10, 35),
(115, 177, 'CRUNCHY BAR', 2, 'test', 'Chocolate', '2014-04-21 06:14:45', 'Damage', 10, 50),
(116, 178, 'KB VANILLA CREAM ROLL 1PC', 12, 'qwerty', 'CreamRoll', '2014-04-21 06:19:04', 'Expire', 12, 240);

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE IF NOT EXISTS `extras` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`item_id`, `item_name`, `quantity`, `price`, `path`, `category_id`) VALUES
(1, 'knief', 0, 20, 'img/knief.png', 0),
(2, 'cap', -7, 35, 'img/cap.png', 0),
(3, 'balloons', 8, 50, 'img/balloons.png', 0),
(4, 'streamers', 70, 30, 'img/strmers.png', 0),
(5, 'big ballons', 10, 10, '', 0),
(6, 'nak', 10, 10, '', 0),
(7, '', -1, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fresh_returns`
--

CREATE TABLE IF NOT EXISTS `fresh_returns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `return_qty` int(11) NOT NULL,
  `return_type` varchar(20) NOT NULL,
  `item_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fresh_returns`
--

INSERT INTO `fresh_returns` (`id`, `order_id`, `item_name`, `return_qty`, `return_type`, `item_type`) VALUES
(1, 7, 'plainKhari', 1, '', ''),
(2, 7, 'cap', 1, '', ''),
(3, 7, 'WhiteForest1kg', 0, '', ''),
(4, 7, 'whitelarge', 0, '', ''),
(5, 7, 'plainKhari', 1, 'customer', 'Khari'),
(6, 132, 'whitelarge', 10, 'stock', 'Bread'),
(7, 9, 'vanilla', 1, 'customer', 'cake'),
(8, 6, 'WhiteForest500g', 1, 'customer', 'Cake');

-- --------------------------------------------------------

--
-- Table structure for table `khakhras`
--

CREATE TABLE IF NOT EXISTS `khakhras` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `shelfe_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `khakhras`
--

INSERT INTO `khakhras` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelfe_life`, `unit`) VALUES
(1, 'KB820 ', 'PRE. SADA KHAKHARA', 4, 45, 'img/khari2.jpg', '0', '2 MONTHS', '250g'),
(2, 'KB821', 'PRE.MASALA KHAKHARA', 10, 45, 'img/khari2.jpg', '0', '2 MONTHS', '250g'),
(3, 'KB18', 'PRE.METHI KHAKHARA', 10, 45, 'img/khari2.jpg', '0', '2 MONTHS', '250g'),
(4, '', '', -1, 0, '', '', '', ''),
(5, '1323', 'khakhra test', 21, 21, 'img/itemsPhoto/Khakhra/img5.gif', '0', '', '4 pieces');

-- --------------------------------------------------------

--
-- Table structure for table `kharis`
--

CREATE TABLE IF NOT EXISTS `kharis` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `shelf_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `kharis`
--

INSERT INTO `kharis` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelf_life`, `unit`) VALUES
(1, 'KB565', 'KB RUSK (BUTTER)', 19, 60, 'img/khari2.jpg', '44', '4 MONTHS', '250g'),
(2, 'KB672', 'KB RUSK (JEERA)', 8, 60, 'img/khari2.jpg', '44', '4 MONTHS', '250g'),
(3, 'KB573', 'KB RUSK (MILK)', 10, 60, 'img/khari2.jpg', '44', '4 MONTHS', '250g'),
(4, 'BS87', 'FRUIT RUSK', 10, 60, 'img/khari2.jpg', '44', '4 MONTHS', '250g'),
(5, 'BS90', 'WHEAT RUSK', 10, 60, 'img/khari2.jpg', '44', '4 MONTHS', '250g'),
(6, 'KB202', 'METHI RUSK', 10, 60, 'img/khari2.jpg', '44', '4 MONTHS', '250g'),
(7, 'KB572', 'KB CHEESE MASALA KHA', 10, 70, 'img/khari2.jpg', '45', '4 MONTHS', '200g'),
(8, 'KB582', 'KB BUTTER KHARI', 10, 60, 'img/khari2.jpg', '45', '4 MONTHS', '250g'),
(9, 'KB91 ', 'KB JEERA KHARI', 9, 60, 'img/khari2.jpg', '45', '4 MONTHS', '250g'),
(10, 'JP', 'KALORY JEERA TOAST', 10, 13, 'img/khari2.jpg', '43', '2 MONTHS', '125g'),
(11, 'MT', 'KALORY MILK TOAST', 10, 13, 'img/khari2.jpg', '43', '2 MONTHS', '125g'),
(12, 'BT', 'KALORY BUTTER TOAST', 10, 13, 'img/khari2.jpg', '43', '2 MONTHS', '125g'),
(13, 'PMT', 'KALORY PREMIUM MILK ', 10, 22, 'img/khari2.jpg', '43', '2 MONTHS', '200g');

-- --------------------------------------------------------

--
-- Table structure for table `leave_info`
--

CREATE TABLE IF NOT EXISTS `leave_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `total_days` int(11) NOT NULL,
  `todate` date NOT NULL,
  `fromdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `leave_info`
--

INSERT INTO `leave_info` (`id`, `emp_id`, `total_days`, `todate`, `fromdate`) VALUES
(7, 0, 10, '2014-03-21', '2014-03-30'),
(8, 0, 2, '2014-03-21', '2014-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `new_arrivals`
--

CREATE TABLE IF NOT EXISTS `new_arrivals` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `category_id` int(20) NOT NULL DEFAULT '0',
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `shelf_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `new_arrivals`
--

INSERT INTO `new_arrivals` (`item_id`, `item_code`, `item_name`, `category_id`, `quantity`, `price`, `path`, `shelf_life`, `unit`) VALUES
(2, '', 'Cheeze Pizza', 0, 0, 70, '', '', ''),
(5, '', 'Veg. Burger', 0, -11, 30, '', '', ''),
(6, '', 'Veg. Roll', 0, -11, 20, '', '', ''),
(8, '', 'Veg. hot Pizza', 0, 10, 25, '', '', ''),
(9, '54', 'rinkal', 0, 10, 10, 'img/itemsPhoto/NewArrival/img9.jpg', '45', 'Kg'),
(10, 'KB14', 'Bread stick', 0, 25, 40, '', '3 months', '4 pieces'),
(11, 'Des', 'wewq', 0, 123, 123, 'img/itemsPhoto/NewArrival/img11.gif', 'Dsad', 'Dsaa'),
(12, '12', 'test', 0, 12, 132, '', '113', '13213');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `item_id` varchar(225) NOT NULL,
  `quantity` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=264 ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `item_id`, `quantity`, `type`) VALUES
(240, 166, 'AMERICAN NUT', 10, 'Pastry'),
(241, 166, 'STRAWBERRY TWIST', 10, 'Pastry'),
(242, 166, 'CHOCOLATE DOUGHNUT K', 10, 'DryCake'),
(243, 167, 'KACHORI PUFF', 10, 'Puff'),
(244, 167, 'ALOO PUFF', 12, 'Puff'),
(245, 168, 'STRAWBERRY CREAM ROLL 1PC', 10, 'CreamRoll'),
(246, 168, 'KB RUSK (BUTTER)', 20, 'Khari'),
(247, 169, 'STRAWBERRY CREAM ROLL 1PC', 10, 'CreamRoll'),
(248, 169, 'PINEAPPLE CREAM ROLL 1PC', 10, 'CreamRoll'),
(249, 170, 'FRUIT BREAD ', 10, 'Bread'),
(250, 171, 'CHOCOLATE CRUNCHY', 10, 'Cake'),
(251, 172, 'CHOCOLATE DOUGHNUT K', 10, 'DryCake'),
(252, 173, 'STRAWBERRY CREAM ROLL 1PC', 10, 'CreamRoll'),
(253, 174, 'STRAWBERRY CREAM ROLL 1PC', 50, 'CreamRoll'),
(254, 174, 'PINEAPPLE CREAM ROLL 1PC', 50, 'CreamRoll'),
(237, 165, 'CHOCOLATE PUDDING', 10, 'Pudding'),
(238, 165, 'CHOCOLATE BALL', 5, 'Pudding'),
(239, 165, 'PRE. SADA KHAKHARA', 10, 'Khakhra'),
(255, 175, 'KB VANILLA CREAM ROLL 1PC', 10, 'CreamRoll'),
(256, 176, 'SAMOSA 1PC', 10, 'Savories'),
(257, 177, 'KB RUSK (JEERA)', 10, 'Khari'),
(258, 177, 'KB RUSK (MILK)', 10, 'Khari'),
(259, 177, 'CHOCOLATE FUDGE', 10, 'Pastry'),
(260, 177, 'BRAZILIAN SURPRISE', 10, 'Pastry'),
(261, 177, 'FRUIT N NUT BAR', 10, 'Chocolate'),
(262, 177, 'CRUNCHY BAR', 10, 'Chocolate'),
(263, 178, 'KB VANILLA CREAM ROLL 1PC', 12, 'CreamRoll');

-- --------------------------------------------------------

--
-- Table structure for table `order_masters`
--

CREATE TABLE IF NOT EXISTS `order_masters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `employee_id` int(11) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=179 ;

--
-- Dumping data for table `order_masters`
--

INSERT INTO `order_masters` (`id`, `order_date`, `employee_id`, `flag`) VALUES
(170, '2014-04-16', 6, 1),
(169, '2014-04-16', 6, 1),
(168, '2014-04-16', 6, 1),
(167, '2014-04-16', 6, 1),
(166, '2014-04-16', 6, 1),
(171, '2014-04-16', 6, 1),
(172, '2014-04-16', 6, 1),
(173, '2014-04-16', 6, 1),
(174, '2014-04-16', 6, 1),
(175, '2014-04-16', 6, 1),
(176, '2014-04-16', 6, 1),
(177, '2014-04-21', 6, 1),
(178, '2014-04-21', 6, 1),
(165, '2014-04-08', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pastries`
--

CREATE TABLE IF NOT EXISTS `pastries` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `shelf_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `pastries`
--

INSERT INTO `pastries` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelf_life`, `unit`) VALUES
(1, 'BS94', 'CHOCOLATE FUDGE', 15, 60, 'img/cake4.png', '9', '4 DAYS', '100g'),
(2, 'BS98', 'BRAZILIAN SURPRISE', 13, 65, 'img/cake4.png', '10', '4 DAYS', '100g'),
(3, 'KB210', 'BOUR-BON PASTRY', 10, 55, 'img/cake4.png', '8', '4 DAYS', '100g'),
(4, 'KB231', 'BLACK FOREST', 10, 50, 'img/cake4.png', '7', '3 DAYS', '100g'),
(5, 'KB233', 'CHOCOLATE GATEAUX', 10, 50, 'img/cake4.png', '7', '4 DAYS', '100g'),
(6, 'KB243', 'CHOCOLATE EXCCESS', 10, 65, 'img/cake4.png', '10', '4 DAYS', '100g'),
(7, 'KB247', 'AMERICAN NUT', 18, 65, 'img/cake4.png', '10', '3 DAYS', '100g'),
(8, 'KB249', 'STRAWBERRY TWIST', 18, 65, 'img/cake4.png', '10', '3 DAYS', '100g'),
(9, 'KB252', 'PHOTO PASTRY', 10, 65, 'img/cake4.png', '10', '3 DAYS', '100g'),
(10, 'KB268', 'TANGO ORANGE', 10, 55, 'img/cake4.png', '8', '3 DAYS', '100g'),
(11, 'KB308', 'PINEAPPLE GATEAUX', 10, 50, 'img/cake4.png', '7', '3 DAYS', '100g'),
(12, 'KB324', 'KIT KAT', 10, 65, 'img/cake4.png', '10', '4 DAYS', '100g'),
(13, 'KB338', 'CHOCOLATE HIDE & SEEK', 10, 65, 'img/cake4.png', '10', '3 DAYS', '100g'),
(14, 'KB340', 'FERRERO ROCHER 100g', 10, 75, 'img/cake4.png', '12', '4 DAYS', '100g'),
(15, 'KB353', 'CHOCOLATE GOOEE', 10, 60, 'img/cake4.png', '9', '4 DAYS', '100g'),
(16, 'KB359', 'ZEBRA', 10, 65, 'img/cake4.png', '10', '4 DAYS', '100g'),
(17, 'KB363', 'SWISS TRUFFLE', 10, 55, 'img/cake4.png', '8', '4 DAYS', '100g'),
(18, 'KB720', 'CHOCOLATE CHIPS', 10, 55, 'img/cake4.png', '8', '4 DAYS', '100g'),
(19, 'KB724', 'CASSATA SWISS ROLL', 10, 55, 'img/cake4.png', '8', '3 DAYS', '100g'),
(20, 'KB734', 'BELGIUM MOUSSEE', 10, 65, 'img/cake4.png', '10', '3 DAYS', '100g'),
(21, 'KB736', 'CHOCOLATE ORANGE', 10, 65, 'img/cake4.png', '10', '3 DAYS', '100g'),
(22, 'KB748', 'CHOCOLATE CRUNCHY', 10, 70, 'img/cake4.png', '11', '4 DAYS', '100g'),
(23, 'KB755', 'OREO MOUSSEE 100g', 10, 75, 'img/cake4.png', '12', '4 DAYS', '100g'),
(24, 'KB759', 'XOTIC FRUITS', 10, 70, 'img/cake4.png', '11', '4 DAYS', '100g'),
(25, 'KB762', 'BLUEBERRY PASTRY', 10, 70, 'img/cake4.png', '11', '4 DAYS', '100g'),
(26, 'KB776', 'CHOCO SWISS ROLL', 10, 50, 'img/cake4.png', '7', '4 DAYS', '100g'),
(27, 'KB802', 'BROWNIE MOUSSEE PASTRY/ SQUARE', 10, 70, 'img/cake4.png', '11', '4 DAYS', '100g'),
(28, 'KB908', 'TRUFFLE ALMOND', 10, 70, 'img/cake4.png', '11', '4 DAYS', '100g'),
(29, 'PK08', 'CHOCO CARAMEL', 10, 55, 'img/cake4.png', '8', '4 DAYS', '100g'),
(30, 'PK10', 'WHITE FOREST', 10, 55, 'img/cake4.png', '8', '3 DAYS', '100g'),
(31, 'PK11', 'BUTTER SCOTCH PASTRY', 10, 60, 'img/cake4.png', '9', '3 DAYS', '100g'),
(32, 'PK17', 'TRUFFLE WALNUT', 10, 70, 'img/cake4.png', '11', '4 DAYS', '100g'),
(33, 'PK33', 'STRAWBERRY TEMPTATION', 10, 50, 'img/cake4.png', '7', '3 DAYS', '100g'),
(34, 'PK35', 'PINA ORANGE', 10, 60, 'img/cake4.png', '9', '3 DAYS', '100g'),
(35, 'PK46', 'SEASONAL FRUIT', 10, 60, 'img/cake4.png', '9', '3 DAYS', '100g'),
(36, 'PK87', 'CHEESE CAKES(Lemon,Blueberry,Plain/ORANGE)', 10, 70, 'img/cake4.png', '11', '3 DAYS', '100g');

-- --------------------------------------------------------

--
-- Table structure for table `payrolls`
--

CREATE TABLE IF NOT EXISTS `payrolls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `basic` int(11) NOT NULL,
  `da` int(11) NOT NULL,
  `hra` int(11) NOT NULL,
  `ptax` int(11) NOT NULL,
  `gross_sal` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`id`, `empid`, `basic`, `da`, `hra`, `ptax`, `gross_sal`) VALUES
(5, 0, 4950, 300, 200, 200, 5250),
(6, 0, 5042, 300, 200, 200, 5342);

-- --------------------------------------------------------

--
-- Table structure for table `puddings`
--

CREATE TABLE IF NOT EXISTS `puddings` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `shelf_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `puddings`
--

INSERT INTO `puddings` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelf_life`, `unit`) VALUES
(1, 'KB278', 'CHOCOLATE BALL', 4, 20, 'img/pastry1.jpg', '18', '4 DAYS', '100g (1 PC)'),
(2, 'KB275', 'CHOCOLATE PUDDING', 4, 45, 'img/pastry1.jpg', '18', '4 DAYS', '100g (1 PC)'),
(3, 'PK03', 'FRUIT PUDDING', 10, 45, 'img/pastry1.jpg', '18', '3 DAYS', '100g (1 PC)'),
(4, 'KB829', 'CHOCOLATE WALNUT PUDDING', 10, 60, 'img/pastry1.jpg', '18', '4 DAYS', '100g (1 PC)'),
(5, 'KB806', 'DARK SECRET', 10, 65, 'img/pastry1.jpg', '18', '4 DAYS', '100g (1 PC)'),
(6, 'KB275', 'CHOCOLATE PUDDING', 10, 450, 'img/pastry1.jpg', '19', '4 DAYS', 'KG'),
(7, 'PK03', 'FRUIT PUDDING', 10, 450, 'img/pastry1.jpg', '19', '3 DAYS', 'KG'),
(8, 'KB829', 'CHOCOLATE WALNUT PUDDING', 10, 600, 'img/pastry1.jpg', '19', '4 DAYS', 'KG');

-- --------------------------------------------------------

--
-- Table structure for table `puffs`
--

CREATE TABLE IF NOT EXISTS `puffs` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `shelfe_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `puffs`
--

INSERT INTO `puffs` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelfe_life`, `unit`) VALUES
(1, 'PF', 'ALOO PUFF', 5, 10, 'img/khari2.jpg', '0', '1 DAY', '1 PC'),
(2, 'KB801', 'KACHORI PUFF', 10, 15, 'img/khari2.jpg', '0', '1 DAY', '2 PC'),
(3, 'PPF', 'PACK PATTIES', 9, 15, 'img/khari2.jpg', '0', '1 DAY', '3 PC'),
(4, 'KB21', 'VEG. PATTIES SPL', 5, 20, 'img/khari2.jpg', '0', '1 DAY', '4 PC'),
(5, 'KB139', 'VEG. NOODLES PATTIES', 5, 20, 'img/khari2.jpg', '0', '1 DAY', '5 PC'),
(6, 'KB140', 'VEG.MANCHURIAN PATTIES', 10, 20, 'img/khari2.jpg', '0', '1 DAY', '6 PC'),
(7, 'KB142', 'LACHEDAR PATTIES', 10, 20, 'img/khari2.jpg', '0', '1 DAY', '7 PC'),
(8, 'BS138', 'KOLHAPURI PUFF', 10, 20, 'img/khari2.jpg', '0', '1 DAY', '8 PC'),
(9, 'BS137', 'CHATPATTA JAIN PUFF(Garnished with popey seeds )', 10, 30, 'img/khari2.jpg', '0', '1 DAY', '9 PC'),
(10, 'KB141', 'CHEESE CAPSICUM TOMATO PATTIES  (JAIN)', 10, 30, 'img/khari2.jpg', '0', '1 DAY', '10 PC'),
(11, 'KB830', 'PANEER CHILLY PUFF  (Garnished with Til)', 10, 30, 'img/khari2.jpg', '0', '1 DAY', '11 PC'),
(15, '', '', -1, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `savories`
--

CREATE TABLE IF NOT EXISTS `savories` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `shelfe_life` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `savories`
--

INSERT INTO `savories` (`item_id`, `item_code`, `item_name`, `quantity`, `price`, `path`, `category_id`, `shelfe_life`, `unit`) VALUES
(1, 'KB313', 'SAMOSA 1PC', 10, 10, 'img/khari2.jpg', '34', '2 DAYS', '1 PC'),
(2, 'KB800', 'VADA PAV SPL ', 10, 15, 'img/khari2.jpg', '34', '2 DAYS', '1 PC'),
(3, 'KB560', 'CHINESE ROLL', 10, 10, 'img/khari2.jpg', '35', '2 DAYS', '1 PC'),
(4, 'KB818', 'SPL DABELI BREAD', 10, 15, 'img/khari2.jpg', '34', '2 DAYS', '1 PC'),
(5, 'KB72', 'SCHEZWAN ROLL', 10, 20, 'img/khari2.jpg', '35', '2 DAYS', '1 PC'),
(6, 'KB900', 'ALOO TIKKI PANINI                 ', 10, 25, 'img/khari2.jpg', '36', '2 DAYS', '1 PC'),
(7, 'KB84', 'VEG DELITE SANDWICH          ', 10, 25, 'img/khari2.jpg', '37', '2 DAYS', '1 PC'),
(8, 'EP14', 'CTC SANDWICH   (JAIN)                      ', 9, 25, 'img/khari2.jpg', '37', '2 DAYS', '1 PC'),
(9, 'KB811', 'VEG.BURGER                           ', 10, 30, 'img/khari2.jpg', '36', '2 DAYS', '1 PC'),
(10, 'BS139', 'ITALIAN FOCCASIA SANDWICH     ', 9, 30, 'img/khari2.jpg', '37', '2 DAYS', '1 PC'),
(11, 'KB101', 'ITALIAN BAKE PIZZA      ', 7, 35, 'img/pizza.jpg', '38', '2 DAYS', '1 PC'),
(12, '', '', -1, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stock_destroys`
--

CREATE TABLE IF NOT EXISTS `stock_destroys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `return_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
