-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2014 at 05:42 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dangercore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profiles`
--

CREATE TABLE IF NOT EXISTS `admin_profiles` (
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `profile_image` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_profiles`
--

INSERT INTO `admin_profiles` (`user_id`, `first_name`, `last_name`, `profile_image`) VALUES
(773531693, 'kesav', 'moorthi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auto_populate`
--

CREATE TABLE IF NOT EXISTS `auto_populate` (
  `vehicle_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(5) NOT NULL,
  `make` varchar(36) NOT NULL,
  `model` varchar(36) NOT NULL,
  `color` varchar(36) NOT NULL,
  PRIMARY KEY (`vehicle_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `auto_populate`
--

INSERT INTO `auto_populate` (`vehicle_id`, `type`, `make`, `model`, `color`) VALUES
(1, 'Car', 'Hyundai', 'Sonata', 'Green'),
(2, 'Car', 'Hyundai', 'Sonata', 'Black'),
(3, 'Car', 'Hyundai', 'Sonata', 'Blue'),
(4, 'Car', 'Ford', 'Fiesta', 'White'),
(5, 'Car', 'Ford', 'Fiesta', 'Silver'),
(6, 'Car', 'Ford', 'Fiesta', 'Red'),
(7, 'Truck', 'Toyota', 'Tacoma', 'Black'),
(8, 'Truck', 'Toyota', 'Tacoma', 'Pink'),
(9, 'Truck', 'Toyota', 'Tacoma', 'Burgundy'),
(10, 'Car', 'Toyota', 'Tercel', 'Red'),
(11, 'Car', 'Toyota', 'Tercel', 'Yellow'),
(12, 'Car', 'Toyota', 'Tercel', 'White'),
(13, 'Truck', 'Ford', 'F-150', 'Blue'),
(14, 'Truck', 'Ford', 'F-150', 'Charcoal'),
(15, 'Truck', 'Ford', 'F-150', 'Orange'),
(16, 'Car', 'Honda', 'Civic', 'White'),
(17, 'Car', 'Honda', 'Civic', 'Green'),
(18, 'Car', 'Honda', 'Civic', 'Red'),
(19, 'Car', 'Chevrolet', 'Nova', 'Yellow'),
(20, 'Car', 'Chevrolet', 'Nova', 'Blue'),
(21, 'Car', 'Chevrolet', 'Nova', 'Purple'),
(22, 'Car', 'Ford', 'Mustang', 'Gray'),
(23, 'Car', 'Ford', 'Mustang', 'Black'),
(24, 'Car', 'Ford', 'Mustang', 'White'),
(25, 'Truck', 'Toyota', 'Tundra', 'Red'),
(26, 'Truck', 'Toyota', 'Tundra', 'Orange'),
(27, 'Truck', 'Toyota', 'Tundra', 'Yellow'),
(28, 'Truck', 'Ford', 'F-250', 'Green'),
(29, 'Truck', 'Ford', 'F-250', 'Blue'),
(30, 'Truck', 'Ford', 'F-250', 'Purple'),
(31, 'Car', 'Hyundai', 'Accent', 'Gray'),
(32, 'Car', 'Hyundai', 'Accent', 'Silver'),
(33, 'Car', 'Hyundai', 'Accent', 'Black'),
(34, 'Car', 'Toyota', 'Corolla', 'White'),
(35, 'Car', 'Toyota', 'Corolla', 'Red'),
(36, 'Car', 'Toyota', 'Corolla', 'Orange'),
(37, 'Car', 'Honda', 'Accord', 'Yellow'),
(38, 'Car', 'Honda', 'Accord', 'Green'),
(39, 'Car', 'Honda', 'Accord', 'Blue'),
(40, 'Car', 'Honda', 'Fit', 'Purple'),
(41, 'Car', 'Honda', 'Fit', 'Gray'),
(42, 'Car', 'Honda', 'Fit', 'Silver'),
(43, 'Truck', 'Honda', 'Ridgeline', 'Black'),
(44, 'Truck', 'Honda', 'Ridgeline', 'White'),
(45, 'Truck', 'Honda', 'Ridgeline', 'Burgundy'),
(46, 'Truck', 'Ford', 'Ranger', 'Charcoal'),
(47, 'Truck', 'Ford', 'Ranger', 'Red'),
(48, 'Truck', 'Ford', 'Ranger', 'Orange'),
(49, 'Truck', 'Chevrolet', 'Colorado', 'Yellow'),
(50, 'Truck', 'Chevrolet', 'Colorado', 'Green'),
(51, 'Truck', 'Chevrolet', 'Colorado', 'Blue'),
(52, 'Truck', 'Chevrolet', 'Silverado', 'Purple'),
(53, 'Truck', 'Chevrolet', 'Silverado', 'Gray'),
(54, 'Truck', 'Chevrolet', 'Silverado', 'Black'),
(55, 'Car', 'Chevrolet', 'Impala', 'Pink'),
(56, 'Car', 'Chevrolet', 'Impala', 'Baby Blue'),
(57, 'Car', 'Chevrolet', 'Impala', 'Candy Red'),
(58, 'Car', 'Chevrolet', 'Corvette', 'Black'),
(59, 'Car', 'Chevrolet', 'Corvette', 'White'),
(60, 'Car', 'Chevrolet', 'Corvette', 'Tan'),
(61, 'Car', 'Mazda', 'RX-8', 'Brown'),
(62, 'Car', 'Mazda', 'RX-8', 'Red'),
(63, 'Car', 'Mazda', 'RX-8', 'Orange'),
(64, 'Car', 'Mazda', 'Miata', 'Yellow'),
(65, 'Car', 'Mazda', 'Miata', 'Green'),
(66, 'Car', 'Mazda', 'Miata', 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `category_menu`
--

CREATE TABLE IF NOT EXISTS `category_menu` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(56) NOT NULL,
  `parent_id` int(10) DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category_menu`
--

INSERT INTO `category_menu` (`category_id`, `name`, `parent_id`) VALUES
(1, 'Food', 0),
(2, 'Mexican', 1),
(3, 'Italian', 1),
(4, 'American', 1),
(5, 'Tacos', 2),
(6, 'Burritos', 2),
(7, 'Enchiladas', 2),
(8, 'Spaghetti', 3),
(9, 'Lasagna', 3),
(10, 'Hamburgers', 4),
(11, 'Fries', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `replyto_id` int(11) NOT NULL,
  `revision` int(11) NOT NULL,
  `type` varchar(5) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `timestamp`, `author_id`, `parent_id`, `replyto_id`, `revision`, `type`, `slug`, `title`, `content`) VALUES
(1, '2014-09-29 12:05:54', 242612923, 0, 0, 1, '', 'test-new-post', 'test new post', '<h2>The Last of The Mohicans</h2>\r\n\r\n<p><em>by James Fenimore Cooper​​</em></p>\r\n\r\n<p>Winding its way among countless islands,&nbsp;and imbedded in mountains, the &quot;holy lake&quot; extended a dozen leagues still further to the south. With the high plain that there interposed itself to the further passage of the water, commenced a portage of as many miles, which conducted the&nbsp;<a href="http://imperavi.com/redactor/some-file-link">test.txt</a>​adventurer to the banks of the Hudson, at a point where, with the usual obstructions of the rapids, or rifts, as they were then termed in the language of the country, the river became navigable to the tide.​</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Come,&quot; he said, with a good-humored smile; &quot;the buck that will take to the water must be headed, and not followed.&quot;</p>\r\n\r\n<p>The route taken by Hawkeye lay across those sandy plains, relived by occasional valleys and swells of land, which had been traversed by their party on the morning of the same day, with the baffled Magua for their guide. The sun had now fallen low toward the distant mountains; and as their journey lay through the interminable forest, the heat was no longer oppressive. Their progress, in consequenc</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="http://localhost/dangercore/server/files/redactor-image (2).jpg" style="height:200px" /></p>'),
(2, '2014-09-30 04:14:35', 242612923, 0, 0, 1, '', 'new-test-post', 'new test post', '<div><br></div><strong style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Lorem Ipsum</strong><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><div><div style="text-align: justify;"><font color="#000000" face="Arial, Helvetica, sans"><span style="font-size: 11px; line-height: 14px;"><br></span></font></div><div><br></div></div><img src="server/files/2.jpg" height="200"><div><br></div><div><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></div>'),
(3, '2014-09-30 04:17:48', 242612923, 0, 0, 2, '', 'new-test-post', 'new test post', '<div><br></div><strong style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Lorem Ipsum</strong><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><div><div style="text-align: justify;"><font color="#000000" face="Arial, Helvetica, sans"><span style="font-size: 11px; line-height: 14px;"><br></span></font></div><div><br></div></div><img src="server/files/2.jpg" height="200"><div><br></div><div><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></div><div><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">new test post is successfully</span></div><div><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;"><br></span></div><img src="http://localhost/dangercore/server/files/3.jpg" height="200">'),
(4, '2014-09-30 04:18:24', 242612923, 0, 0, 3, '', 'new-test-post', 'new test post', '<div><br></div><strong style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Lorem Ipsum</strong><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><div><div style="text-align: justify;"><font color="#000000" face="Arial, Helvetica, sans"><span style="font-size: 11px; line-height: 14px;"><br></span></font></div><div><br></div></div><img src="server/files/2.jpg" height="200"><div><br></div><div><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></div><div><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">new test post is successfully</span></div><div><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;"><br></span></div><img src="http://localhost/dangercore/server/files/3.jpg" height="200"><div><br></div><div>new post&nbsp;</div><div><br></div><img src="http://localhost/dangercore/server/files/redactor-image.jpg" height="200">');

-- --------------------------------------------------------

--
-- Table structure for table `customer_profiles`
--

CREATE TABLE IF NOT EXISTS `customer_profiles` (
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `street_address` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `profile_image` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_profiles`
--

INSERT INTO `customer_profiles` (`user_id`, `first_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `profile_image`) VALUES
(242612923, 'kesav', 'moorthi', 'test', 'test', 'test', '654123', NULL),
(359599042, '', '', '', '', '', '', NULL),
(922086188, '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_uploader_table`
--

CREATE TABLE IF NOT EXISTS `custom_uploader_table` (
  `user_id` int(10) unsigned NOT NULL,
  `images_data` text,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `denied_access`
--

CREATE TABLE IF NOT EXISTS `denied_access` (
  `IP_address` varchar(45) NOT NULL,
  `time` int(10) NOT NULL,
  `reason_code` tinyint(2) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ips_on_hold`
--

CREATE TABLE IF NOT EXISTS `ips_on_hold` (
  `IP_address` varchar(45) NOT NULL,
  `time` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_errors`
--

CREATE TABLE IF NOT EXISTS `login_errors` (
  `username_or_email` varchar(255) NOT NULL,
  `IP_address` varchar(45) NOT NULL,
  `time` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_errors`
--

INSERT INTO `login_errors` (`username_or_email`, `IP_address`, `time`) VALUES
('', '127.0.0.1', 1412068279),
('', '127.0.0.1', 1412067813);

-- --------------------------------------------------------

--
-- Table structure for table `manager_profiles`
--

CREATE TABLE IF NOT EXISTS `manager_profiles` (
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `license_number` varchar(30) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `profile_image` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `reg_mode` int(1) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_mode`) VALUES
(2);

-- --------------------------------------------------------

--
-- Table structure for table `temp_registration_data`
--

CREATE TABLE IF NOT EXISTS `temp_registration_data` (
  `reg_id` int(10) unsigned NOT NULL,
  `reg_time` int(10) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `user_pass` mediumtext NOT NULL,
  `user_salt` varchar(32) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `street_address` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `username_or_email_on_hold`
--

CREATE TABLE IF NOT EXISTS `username_or_email_on_hold` (
  `username_or_email` varchar(255) NOT NULL,
  `time` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(60) NOT NULL,
  `user_salt` varchar(32) NOT NULL,
  `user_last_login` int(10) DEFAULT NULL,
  `user_login_time` int(10) DEFAULT NULL,
  `user_session_id` varchar(40) DEFAULT NULL,
  `user_date` int(10) NOT NULL,
  `user_modified` int(10) NOT NULL,
  `user_agent_string` varchar(32) DEFAULT NULL,
  `user_level` tinyint(2) unsigned NOT NULL,
  `user_banned` enum('0','1') NOT NULL DEFAULT '0',
  `passwd_recovery_code` varchar(60) DEFAULT NULL,
  `passwd_recovery_date` int(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_salt`, `user_last_login`, `user_login_time`, `user_session_id`, `user_date`, `user_modified`, `user_agent_string`, `user_level`, `user_banned`, `passwd_recovery_code`, `passwd_recovery_date`) VALUES
(242612923, 'kesavanmoort', 'kesav.stallioni@gmail.com', '$2a$09$65efd944b9b94a7caeea8ukiIymUu6KQKXlDwkSQUrXUhF4fopAAm', '65efd944b9b94a7caeea800a8f1a1302', 1412080710, NULL, NULL, 1411706196, 1411706326, '09bf974da0437925889a226ba456ba86', 1, '0', NULL, NULL),
(359599042, 'karthikeyann', 'karthikeyan@stallioni.com', '$2a$09$b6968792b47bda2f272bauAyK58S4pBtQDy00upS0dEgyBOEAvTey', 'b6968792b47bda2f272ba5e1801abf06', NULL, NULL, NULL, 1412082791, 1412082791, NULL, 1, '0', NULL, NULL),
(773531693, 'dangercore', 'kesav@stallioni.com', '$2a$09$5cfcde09374ae9be2bdb4OSb/Po14itVMGHAe.SF408JH82aZEvmG', '5cfcde09374ae9be2bdb4ab28470daf5', 1412137855, 1412137855, '73e310599e9461430b404e6445b4fd22', 1411650942, 1411650942, '09bf974da0437925889a226ba456ba86', 9, '0', NULL, NULL),
(922086188, 'vijayveluman', 'vijay@stallioni.com', '$2a$09$f0af2c6bd2b24292db036ui1CkGZfT03.mFKPUldAUeAs87g8MQiu', 'f0af2c6bd2b24292db0363b9d1568dd5', NULL, NULL, NULL, 1412082678, 1412082678, NULL, 1, '0', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
