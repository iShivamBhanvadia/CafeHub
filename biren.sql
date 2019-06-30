-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2017 at 10:19 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'biren'
--

-- --------------------------------------------------------

--
-- Table structure for table 'order_list'
--

CREATE TABLE IF NOT EXISTS order_list (
  id int(11) NOT NULL AUTO_INCREMENT,
  order_id int(255) NOT NULL,
order_name varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table 'order_list'
--

INSERT INTO order_list (id, order_id, order_name) VALUES
(1, 1, 'English Breakfast'),
(2, 2, 'Chines Breakfast'),
(3, 3, 'Indian Breakfast'),
(4, 4, 'Idli Sambhar'),
(5, 5, 'Thepla Masala-Dahi'),
(6, 6, 'Masala Dosa'),
(7, 7, 'Chai-Poha'),
(8, 8, 'Mix fast'),
(9, 9, 'Fried Rice'),
(10, 10, 'South Indian Dish'),
(11, 11, 'Rajma Chaval'),
(12, 12, 'Gujarati Dish'),
(13, 13, 'Paneer Tikka'),
(14, 14, 'Mix Dish'),
(15, 15, 'Bhindi Masala'),
(16, 16, 'Samosa Dish'),
(17, 17, 'Onion Bhujiya'),
(18, 18, 'Batata Vada'),
(19, 19, 'Garlic Bread'),
(20, 20, 'Dahi Handva'),
(21, 21, 'Uttapam'),
(22, 22, 'Strowberry Ice-Bowl'),
(23, 23, 'Vanila Con'),
(24, 24, 'Choco Dry'),
(25, 25, 'Chocolate Cup'),
(26, 26, 'Chocolate Special'),
(27, 27, 'Great Browni'),
(28, 28, 'Cherry Fudina'),
(29, 29, 'Watermelon Masala'),
(30, 30, 'Strowbarry Thik'),
(31, 31, 'Fruit Bear'),
(32, 32, 'Cola Cola'),
(33, 33, 'Lemon');

-- --------------------------------------------------------

--
-- Table structure for table `place_order`
--

CREATE TABLE IF NOT EXISTS place_order (
  id int(11) NOT NULL AUTO_INCREMENT,
  pr_id bigint(20) NOT NULL,
  table_no int(255) NOT NULL,
  order_id int(255) NOT NULL,
  order_name varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `place_order`
--

INSERT INTO place_order (id, pr_id, table_no, order_id, order_name) VALUES
(74, 31563018042, 1, 6, 'Masala Dosa'),
(75, 31563018042, 1, 4, 'Idli Sambhar'),
(76, 31563018042, 1, 6, 'Masala Dosa'),
(77, 31563018042, 1, 20, 'Dahi Handva'),
(78, 31563018042, 1, 17, 'Onion Bhujiya'),
(79, 31563018042, 1, 31, 'Fruit Bear'),
(80, 31563018042, 1, 32, 'Cola Cola'),
(81, 31563018042, 1, 29, 'Watermelon Masala'),
(82, 31563018042, 1, 31, 'Fruit Bear'),
(83, 9173082516, 1, 9, 'Fried Rice'),
(84, 9173082516, 1, 7, 'Chai-Poha'),
(85, 9173082516, 3, 6, 'Masala Dosa'),
(86, 8128443706, 3, 5, 'Thepla Masala-Dahi');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS reservation (
  id int(11) NOT NULL AUTO_INCREMENT,
  name int(11) NOT NULL,
  email varchar(255) NOT NULL,
  contact bigint(20) NOT NULL,
  pax int(255) NOT NULL,
  table_no int(255) NOT NULL,
  msg text NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `reservation`
--

INSERT INTO reservation (id, name, email, contact, pax, table_no, msg) VALUES
(1, 0, '".$_POST["email"]."', 0, 0, 0, '".$_POST["msg"]."'),
(2, 0, '', 0, 0, 0, ''),
(3, 0, '', 0, 0, 0, ''),
(4, 0, '', 0, 0, 0, ''),
(5, 0, 'rutvi@gmail.com', 8000980009, 2, 8, 'rrr'),
(6, 0, '', 8000980009, 0, 3, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
