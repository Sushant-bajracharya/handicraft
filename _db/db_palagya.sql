-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2014 at 09:01 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_palagya`
--

-- --------------------------------------------------------

--
-- Table structure for table `ptw_aboutus`
--

CREATE TABLE IF NOT EXISTS `ptw_aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `about_us` text NOT NULL,
  `page_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ptw_aboutus`
--

INSERT INTO `ptw_aboutus` (`id`, `title`, `about_us`, `page_id`) VALUES
(1, 'About Us', '<p>Vivamus ac ipsum sit amet felis scelerisque consectetur eget ut elit. Vestibulum id sollicitudin ligula. Integer lectus dolor, commodo in interdum sed, lobortis vitae diam. Duis tristique laoreet nunc, eleifend eleifend nunc blandit ac. Cras at imperdiet tellus, et luctus nunc. Nullam ultrices, justo nec pellentesque fermentum, felis nisl fermentum nunc, et commodo ligula nunc non ipsum. Nullam sit amet metus nec nulla lobortis varius id non arcu. Sed mattis arcu ut velit fringilla suscipit. Donec et volutpat odio, vitae porta magna.</p>\r\n\r\n<p>Praesent non ante eu erat sodales dapibus. Vestibulum quis nunc in est imperdiet aliquet. Integer eu gravida tortor, eget sagittis elit. Suspendisse sit amet tellus quis ligula tristique iaculis. Quisque aliquam tincidunt ante ac congue. Maecenas nunc magna, volutpat et venenatis quis, blandit id erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum sit amet vehicula justo, non semper est. Donec urna ligula, imperdiet bibendum est id, tempus faucibus sapien. Fusce varius lacus at augue posuere elementum. Aenean lacinia tellus id mauris consectetur ultrices. Integer vitae fermentum tellus. Donec eros nibh, dapibus at aliquam eu, commodo ac erat. Nullam tristique ipsum a urna vestibulum rutrum. Curabitur at nibh quis augue imperdiet ullamcorper. In hac habitasse platea dictumst.</p>\r\n', 0),
(2, 'About Us', '<p>About Us</p>\r\n', 621258147897464),
(3, 'Test', '<p>Test123</p>\r\n', 403903779719805),
(4, 'title1', '  industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing softwa', 326623407411720),
(5, 'About Us', '<p>\r\n                    	Pala + Agya = ''Palagya'' The word''s meaning is OBEDIENT. The Hotel is Just  five minutes walking distance from world famous Pashupatinath & Airport. Hotel Palagya invites you to experience the  warmth of Nepalese hospitality at its gracious best.Bask in courtesy, comfort and care that come from a staff with decades of operational experience in some of the finest hotels and restaurants.</p>\r\n\r\n<p>\r\nWell-appointed suites and rooms, facilities for seminars, conference and banquets,make Hotel Palagya the perfect choice for business, celebration or simply pleasure. \r\n                    </p>\r\n                    ', 118277798324097),
(6, 'About Palagya Hotel', '<p>\r\n                    	Pala + Agya = ''Palagya'' The word''s meaning is OBEDIENT. The Hotel is Just  five minutes walking distance from world famous Pashupatinath & Airport. Hotel Palagya invites you to experience the  warmth of Nepalese hospitality at its gracious best.Bask in courtesy, comfort and care that come from a staff with decades of operational experience in some of the finest hotels and restaurants.</p>\r\n\r\n<p>\r\nWell-appointed suites and rooms, facilities for seminars, conference and banquets,make Hotel Palagya the perfect choice for business, celebration or simply pleasure. \r\n                    </p>\r\n                    <p>\r\n                    	<span>STAY CONNECTED WITH</span><br />\r\n                        <a href="#">\r\n                        <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/facebook.png" class="img-responsive" />\r\n                        </a>\r\n                        <a href="#">\r\n                        <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/google.png" class="img-responsive" />\r\n                        </a>\r\n                        <a href="#">\r\n                        <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/youtube.png" class="img-responsive" />\r\n                        </a>\r\n                        <a href="#">\r\n                        <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/twitter.png" class="img-responsive" />\r\n                        </a>\r\n                    </p>', 173948286022100);

-- --------------------------------------------------------

--
-- Table structure for table `ptw_blog`
--

CREATE TABLE IF NOT EXISTS `ptw_blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1050) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc` text NOT NULL,
  `page_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ptw_blog`
--

INSERT INTO `ptw_blog` (`blog_id`, `title`, `image`, `short_desc`, `long_desc`, `page_id`, `created_at`, `updated_at`) VALUES
(8, 'Special Offers on Food & Drinks at o12 Bar', 'o12bar_offer.jpg', 'For More Information:\r\nO12 Bar & Grill Restaurant\r\n108 – 110 The Grove\r\nStratford, London. E15 1NS\r\nT: 02082210563\r\nF: 02082210563\r\nE: info@o12bar.com', 'For More Information:\r\nO12 Bar & Grill Restaurant\r\n108 – 110 The Grove\r\nStratford, London. E15 1NS\r\nT: 02082210563\r\nF: 02082210563\r\nE: info@o12bar.com', 173948286022100, '2014-03-28 00:00:00', '2014-06-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_category`
--

CREATE TABLE IF NOT EXISTS `ptw_category` (
  `cid` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `parent` int(20) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ptw_category`
--

INSERT INTO `ptw_category` (`cid`, `title`, `parent`, `description`) VALUES
(8, 'Room', 0, ''),
(9, 'Tour', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_clients`
--

CREATE TABLE IF NOT EXISTS `ptw_clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `status` enum('1','0') NOT NULL,
  `page_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ptw_clients`
--

INSERT INTO `ptw_clients` (`client_id`, `name`, `logo`, `desc`, `status`, `page_id`, `created_at`, `updated_at`) VALUES
(1, 'Narendra', 'tp1.png', 'Test Client', '1', 403903779719805, '2014-02-03 00:00:00', '0000-00-00 00:00:00'),
(2, 'Buddha', 'tp2.png', 'This is test.', '0', 403903779719805, '2014-02-03 00:00:00', '2014-02-03 00:00:00'),
(3, 'client1', 'web2.jpg', 'industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing softwa ', '1', 326623407411720, '2014-03-09 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_menus`
--

CREATE TABLE IF NOT EXISTS `ptw_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1050) NOT NULL,
  `linked_pageid` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `page_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `ptw_menus`
--

INSERT INTO `ptw_menus` (`id`, `title`, `linked_pageid`, `parent`, `status`, `page_id`, `created_at`, `updated_at`) VALUES
(17, 'Bar & Lounge', 8, 0, '1', 173948286022100, '2014-05-11 00:00:00', '2014-06-25 00:00:00'),
(18, 'About Us', 10, 0, '1', 173948286022100, '2014-05-11 00:00:00', '2014-06-25 00:00:00'),
(19, 'Resturant Menu', 11, 0, '1', 173948286022100, '2014-05-11 00:00:00', '2014-06-25 00:00:00'),
(20, 'About Us', 12, 0, '1', 118277798324097, '2014-07-20 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_metakeys`
--

CREATE TABLE IF NOT EXISTS `ptw_metakeys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(500) NOT NULL,
  `meta_description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ptw_metakeys`
--

INSERT INTO `ptw_metakeys` (`id`, `page_title`, `meta_keywords`, `meta_description`) VALUES
(1, 'Pagetoweb', 'Pagetoweb', 'Pagetoweb');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_pages`
--

CREATE TABLE IF NOT EXISTS `ptw_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1050) NOT NULL,
  `description` text NOT NULL,
  `page_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ptw_pages`
--

INSERT INTO `ptw_pages` (`id`, `title`, `description`, `page_id`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'This is the description of about us page. It can be a longer text.', 403903779719805, '2014-04-16 00:00:00', '2014-04-16 00:00:00'),
(3, 'Sample Page', 'This is the sample page content.', 403903779719805, '2014-04-16 00:00:00', '2014-04-16 00:00:00'),
(4, 'Location', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mi quam, pretium sit amet lobortis sed, iaculis et diam. Vivamus eu tristique felis. Morbi a urna mollis augue commodo iaculis id vitae dolor. Proin nulla ipsum, lacinia nec iaculis ac, molestie vel dui. Maecenas tristique accumsan enim non commodo. Quisque ac turpis tortor. Vivamus vulputate nisi at aliquam vestibulum. Nullam viverra tortor nec ligula venenatis facilisis. Donec vulputate velit elit, ac suscipit dolor porta vel. Nunc porta sollicitudin nisl, eget cursus libero bibendum sit amet. Mauris scelerisque, neque eget faucibus rutrum, quam erat condimentum magna, quis iaculis mauris dolor sit amet odio.</p>\n\n<p>Vestibulum eleifend magna nec rhoncus lobortis. Sed eu vestibulum purus, id vulputate purus. Sed interdum purus vitae eros dignissim mattis. Donec consectetur leo nec odio hendrerit, at egestas massa tempus. Donec ultricies, nisl sed ultricies ullamcorper, sapien erat dapibus turpis, ut sodales urna libero ut enim. Sed a diam neque. Phasellus id ipsum eget augue sollicitudin venenatis non sed nunc. Fusce vitae elit a justo consectetur iaculis. Aliquam vehicula sodales sem, et tristique arcu adipiscing et. Aenean a magna ac urna elementum suscipit. Nam a sapien eu augue ultrices ornare. Sed adipiscing hendrerit dui eget facilisis. Fusce nec enim lobortis, sodales nunc eu, pellentesque orci. Integer sed lorem dolor.</p>\n\n<p>Nulla sed ipsum purus. Vivamus viverra mauris vitae arcu posuere dictum. Quisque mattis placerat leo, sed faucibus leo euismod at. Nulla commodo viverra justo non rutrum. Morbi eu mi felis. Nulla volutpat nunc id erat venenatis viverra. Morbi volutpat dui imperdiet ligula volutpat adipiscing. Nunc ullamcorper mi vel tortor accumsan varius vitae quis arcu. Proin posuere vestibulum felis ut ultrices. Nulla tempor leo quis velit convallis, nec vehicula mi imperdiet. Ut a blandit neque, in imperdiet massa. Vivamus consectetur ultrices aliquet. Suspendisse suscipit nisi et volutpat mattis. Cras at nunc velit.</p>\n\n<p>Aliquam a odio ac arcu fringilla tempor. Curabitur ornare ante vitae elit posuere, et tincidunt erat tristique. Maecenas porta placerat magna non mattis. Phasellus lacus velit, porta vel leo ut, porta posuere lectus. Aenean rutrum justo sed nisl aliquet gravida. Sed accumsan a nisi vel consectetur. Fusce pharetra tincidunt tellus, quis mattis diam condimentum et. Duis cursus feugiat laoreet.</p>\n\n<p>Vestibulum sit amet dui eu urna condimentum ultrices. Fusce et est eu felis laoreet fringilla nec imperdiet enim. Maecenas vulputate lobortis pretium. Fusce venenatis est et magna placerat fermentum. Nam et enim tincidunt, semper tortor et, imperdiet eros. Fusce id ultricies enim. Vivamus vel interdum mi. Donec interdum hendrerit ultrices. Integer vitae sem in nibh bibendum placerat. Quisque a nisi ante. Donec lobortis non lorem et sollicitudin.</p>\n', 326623407411720, '2014-04-17 00:00:00', '2014-04-22 00:00:00'),
(5, 'Test2', '<p>Ipsum dolor sit amet, consectetur adipiscing elit. Proin mi quam, pretium sit amet lobortis sed, iaculis et diam. Vivamus eu tristique felis. Morbi a urna mollis augue commodo iaculis id vitae dolor. Proin nulla ipsum, lacinia nec iaculis ac, molestie vel dui. Maecenas tristique accumsan enim non commodo. Quisque ac turpis tortor. Vivamus vulputate nisi at aliquam vestibulum. Nullam viverra tortor nec ligula venenatis facilisis. Donec vulputate velit elit, ac suscipit dolor porta vel. Nunc porta sollicitudin nisl, eget cursus libero bibendum sit amet. Mauris scelerisque, neque eget faucibus rutrum, quam erat condimentum magna, quis iaculis mauris dolor sit amet odio.</p>\n\n<p>Vestibulum eleifend magna nec rhoncus lobortis. Sed eu vestibulum purus, id vulputate purus. Sed interdum purus vitae eros dignissim mattis. Donec consectetur leo nec odio hendrerit, at egestas massa tempus. Donec ultricies, nisl sed ultricies ullamcorper, sapien erat dapibus turpis, ut sodales urna libero ut enim. Sed a diam neque. Phasellus id ipsum eget augue sollicitudin venenatis non sed nunc. Fusce vitae elit a justo consectetur iaculis. Aliquam vehicula sodales sem, et tristique arcu adipiscing et. Aenean a magna ac urna elementum suscipit. Nam a sapien eu augue ultrices ornare. Sed adipiscing hendrerit dui eget facilisis. Fusce nec enim lobortis, sodales nunc eu, pellentesque orci. Integer sed lorem dolor.</p>\n\n<p>Nulla sed ipsum purus. Vivamus viverra mauris vitae arcu posuere dictum. Quisque mattis placerat leo, sed faucibus leo euismod at. Nulla commodo viverra justo non rutrum. Morbi eu mi felis. Nulla volutpat nunc id erat venenatis viverra. Morbi volutpat dui imperdiet ligula volutpat adipiscing. Nunc ullamcorper mi vel tortor accumsan varius vitae quis arcu. Proin posuere vestibulum felis ut ultrices. Nulla tempor leo quis velit convallis, nec vehicula mi imperdiet. Ut a blandit neque, in imperdiet massa. Vivamus consectetur ultrices aliquet. Suspendisse suscipit nisi et volutpat mattis. Cras at nunc velit.</p>\n\n<p>Aliquam a odio ac arcu fringilla tempor. Curabitur ornare ante vitae elit posuere, et tincidunt erat tristique. Maecenas porta placerat magna non mattis. Phasellus lacus velit, porta vel leo ut, porta posuere lectus. Aenean rutrum justo sed nisl aliquet gravida. Sed accumsan a nisi vel consectetur. Fusce pharetra tincidunt tellus, quis mattis diam condimentum et. Duis cursus feugiat laoreet.</p>\n\n<p>Vestibulum sit amet dui eu urna condimentum ultrices. Fusce et est eu felis laoreet fringilla nec imperdiet enim. Maecenas vulputate lobortis pretium. Fusce venenatis est et magna placerat fermentum. Nam et enim tincidunt, semper tortor et, imperdiet eros. Fusce id ultricies enim. Vivamus vel interdum mi. Donec interdum hendrerit ultrices. Integer vitae sem in nibh bibendum placerat. Quisque a nisi ante. Donec lobortis non lorem et sollicitudin.</p>\n', 326623407411720, '2014-04-18 00:00:00', '2014-04-22 00:00:00'),
(6, 'menu test', '<p>Ipsum dolor sit amet, consectetur adipiscing elit. Proin mi quam, pretium sit amet lobortis sed, iaculis et diam. Vivamus eu tristique felis. Morbi a urna mollis augue commodo iaculis id vitae dolor. Proin nulla ipsum, lacinia nec iaculis ac, molestie vel dui. Maecenas tristique accumsan enim non commodo. Quisque ac turpis tortor. Vivamus vulputate nisi at aliquam vestibulum. Nullam viverra tortor nec ligula venenatis facilisis. Donec vulputate velit elit, ac suscipit dolor porta vel. Nunc porta sollicitudin nisl, eget cursus libero bibendum sit amet. Mauris scelerisque, neque eget faucibus rutrum, quam erat condimentum magna, quis iaculis mauris dolor sit amet odio.</p>\r\n\r\n<p>Vestibulum eleifend magna nec rhoncus lobortis. Sed eu vestibulum purus, id vulputate purus. Sed interdum purus vitae eros dignissim mattis. Donec consectetur leo nec odio hendrerit, at egestas massa tempus. Donec ultricies, nisl sed ultricies ullamcorper, sapien erat dapibus turpis, ut sodales urna libero ut enim. Sed a diam neque. Phasellus id ipsum eget augue sollicitudin venenatis non sed nunc. Fusce vitae elit a justo consectetur iaculis. Aliquam vehicula sodales sem, et tristique arcu adipiscing et. Aenean a magna ac urna elementum suscipit. Nam a sapien eu augue ultrices ornare. Sed adipiscing hendrerit dui eget facilisis. Fusce nec enim lobortis, sodales nunc eu, pellentesque orci. Integer sed lorem dolor.</p>\r\n', 326623407411720, '2014-05-11 00:00:00', '0000-00-00 00:00:00'),
(7, 'menu text', 'Home About Us Gallery Restaurant Menu Event News Contact Us Recent News delicious food items New Food Item Event News New Food Item Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in sem ac magna lobortis congue. In consequat placerat faucibus. Nam sollicitudin tincidunt laoreet. In erat enim, condimentum sed egestas id, dignissim vel orci. Integer et est ut erat ultrices luctus. ', 173948286022100, '2014-05-11 00:00:00', '2014-06-10 00:00:00'),
(8, 'Bar & Lounge', '\r\n\r\n<img src="../../../../css/o12bar/images/bar&lounge.jpg" alt="img" class="img-responsive" />\r\n\r\n<strong>O12 Bar & Grill Restaurant</strong> is famous for one of the longest and most enticing cocktail bar and lounge in East London. Sink into comfortable sofas and indulge in an endless menu of classic and exotic cocktails.<br> \r\nOur delicious bar food menu is available throughout the day offering a selection of light bites and platters. \r\n\r\n', 173948286022100, '2014-05-11 00:00:00', '2014-06-09 00:00:00'),
(9, 'About Us', 'Home About Us Gallery Restaurant Menu Event News Contact Us Recent News delicious food items New Food Item Event News New Food Item Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in sem ac magna lobortis congue. In consequat placerat faucibus. Nam sollicitudin tincidunt laoreet. In erat enim, condimentum sed egestas id, dignissim vel orci. Integer et est ut erat ultrices luctus. ', 173948286022100, '2014-05-11 00:00:00', '2014-06-05 00:00:00'),
(10, 'about', 'Home About Us Gallery Restaurant Menu Event News Contact Us Recent News delicious food items New Food Item Event News New Food Item Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in sem ac magna lobortis congue. In consequat placerat faucibus. Nam sollicitudin tincidunt laoreet. In erat enim, condimentum sed egestas id, dignissim vel orci. Integer et est ut erat ultrices luctus. Home About Us Gallery Restaurant Menu Event News Contact Us Recent News delicious food items New Food Item Event News New Food Item Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in sem ac magna lobortis congue. In consequat placerat faucibus. Nam sollicitudin tincidunt laoreet. In erat enim, condimentum sed egestas id, dignissim vel orci. Integer et est ut erat ultrices luctus. Home About Us Gallery Restaurant Menu Event News Contact Us Recent News delicious food items New Food Item Event News New Food Item Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in sem ac magna lobortis congue. In consequat placerat faucibus. Nam sollicitudin tincidunt laoreet. In erat enim, condimentum sed egestas id, dignissim vel orci. Integer et est ut erat ultrices luctus. ', 173948286022100, '2014-05-11 00:00:00', '0000-00-00 00:00:00'),
(11, 'Resturant Menu', '<div class="panel-group" id="accordion">\r\n  <div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">\r\n          White Wines\r\n        </a>\r\n      </h4>\r\n    </div>\r\n    <div id="collapseOne" class="panel-collapse collapse in">\r\n      <div class="panel-body">\r\n         <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th></th>\r\n            <th>Region</th>\r\n            <th colspan="3" class="center">Glass\r\n            	<span>125ml</span><span class="snd">175ml</span><span class="trd">250ml</span>\r\n            </th>\r\n            <th>Bottle</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>Il Banchetto Bianco 2009 75cl</td>\r\n        	<td>Italy</td>\r\n        	<td>£2.75</td>\r\n        	<td>£4.15</td>\r\n        	<td>£5.25</td>\r\n        	<td>£14.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Himalaya White</td>\r\n        	<td>Spain</td>\r\n        	<td>£2.95</td>\r\n        	<td>£4.15</td>\r\n        	<td>£5.25</td>\r\n        	<td>£14.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Alto Bajo Sauvignon</td>\r\n        	<td>Chile</td>\r\n        	<td>£3.10</td>\r\n        	<td>£4.25</td>\r\n        	<td>£5.65</td>\r\n        	<td>£15.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Old Press Chardonnay 75cl</td>\r\n        	<td>Australia</td>\r\n        	<td></td>\r\n        	<td></td>\r\n        	<td></td>\r\n        	<td>£15.00</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Conto Vecchio Pinot Grigio 75cl</td>\r\n        	<td>Italy</td>\r\n        	<td></td>\r\n        	<td></td>\r\n        	<td></td>\r\n        	<td>£18.00</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">\r\n          Rose Wines\r\n        </a>\r\n      </h4>\r\n    </div>\r\n    <div id="collapseTwo" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n         <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th></th>\r\n            <th>Region</th>\r\n            <th colspan="3" class="center">Glass\r\n            	<span>125ml</span><span class="snd">175ml</span><span class="trd">250ml</span>\r\n            </th>\r\n            <th>Bottle</th>\r\n        </tr>\r\n        </thead>\r\n       \r\n        <tr>\r\n        	<td>Wandering Bear Zinfandel Rose 75cl</td>\r\n        	<td>California</td>\r\n        	<td>£3.10</td>\r\n        	<td>£4.25</td>\r\n        	<td>£5.65</td>\r\n        	<td>£16.00</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Conto Vecchio Pinot Grigio Blush 75ml</td>\r\n        	<td>Italy</td>\r\n        	<td></td>\r\n        	<td></td>\r\n        	<td></td>\r\n        	<td>£15.00</td>\r\n        </tr>\r\n       \r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">\r\n         Red Wines\r\n        </a>\r\n      </h4>\r\n    </div>\r\n    <div id="collapseThree" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n       <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th></th>\r\n            <th>Region</th>\r\n            <th colspan="3" class="center">Glass\r\n            	<span>125ml</span><span class="snd">175ml</span><span class="trd">250ml</span>\r\n            </th>\r\n            <th>Bottle</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>Il Banchetto Bianco 2009 75cl</td>\r\n        	<td>Italy</td>\r\n        	<td>£2.75</td>\r\n        	<td>£4.15</td>\r\n        	<td>£5.25</td>\r\n        	<td>£14.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Himalaya Red</td>\r\n        	<td>Spain</td>\r\n        	<td>£2.95</td>\r\n        	<td>£4.15</td>\r\n        	<td>£5.25</td>\r\n        	<td>£14.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>San Rafael Merlot Valle Central 75cl</td>\r\n        	<td>Chile</td>\r\n        	<td>£2.95</td>\r\n        	<td>£4.15</td>\r\n        	<td>£5.25</td>\r\n        	<td>£16.00</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Kudu Plains Pinotage 75cl</td>\r\n        	<td>South Africa</td>\r\n        	<td></td>\r\n        	<td></td>\r\n        	<td></td>\r\n        	<td>£16.00</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Old Press Shiraz 75cl</td>\r\n        	<td>Australia</td>\r\n        	<td></td>\r\n        	<td></td>\r\n        	<td></td>\r\n        	<td>£18.00</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n\r\n <div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">\r\n          Champagne/Sparkling Wine \r\n        </a>\r\n      </h4>\r\n    </div>\r\n    <div id="collapseFour" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th></th>\r\n            <th>Region</th>\r\n            <th >Glass\r\n            </th>\r\n            <th>Bottle</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>Jeio Prosecco Valdobbiadene</td>\r\n        	<td>Italy</td>\r\n        	<td>£4.25</td>\r\n        	<td>£20.00</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>DOCG Brut NV 75cl</td>\r\n        	<td></td>\r\n        	<td></td>\r\n        	<td></td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Jeio Rose IGT NV 75cl</td>\r\n        	<td>Italy</td>\r\n        	<td>£4.25</td>\r\n        	<td>£20.00</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>De Castellane Croix Rouge</td>\r\n        	<td>Champagne</td>\r\n        	<td>£6.95</td>\r\n        	<td>£38.00</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Saint Andre Brut NV 75cl</td>\r\n        	<td></td>\r\n        	<td></td>\r\n        	<td></td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n <div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">\r\n          Martini\r\n        </a>\r\n      </h4>\r\n    </div>\r\n    <div id="collapseFive" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th>Name</th>\r\n            <th>Description</th>\r\n            <th>Bottle</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>Gin/Vodka Martini</td>\r\n        	<td class="i">Gin/Vodka, Dry Vermouth, Green Olive and Lemon Peel</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Espresso Martini</td>\r\n        	<td class="i">Espresso, Absolut Vodka, Kahlua and Creme de Cacao</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Porn Star Martini</td>\r\n        	<td class="i">Vanilla Vodka, Passion Fruit Liqueur and Lime Juice accompanied with a shot of Champagne</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Kiwi Martini</td>\r\n        	<td class="i">Vodka, peach schnapps, Vanilla and Crushed Kiwi</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n <div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">\r\n         Sparkling Cocktails\r\n        </a>\r\n      </h4>\r\n    </div>\r\n    <div id="collapseSix" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th>Name</th>\r\n            <th>Description</th>\r\n            <th>Bottle</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>Blu Fizz</td>\r\n        	<td class="i">Jeio Prosecco Valdobbiadene and Blue Curacao</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Kir Royal</td>\r\n        	<td class="i">Jeio Prosecco Valdobbiadene and Creme de Cassis</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Russian Spring Punch</td>\r\n        	<td class="i">Jeio Prosecco Valdobbiadene, Raspberry and Vodka</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Bellini</td>\r\n        	<td class="i">Jeio Prosecco Valdobbiadene and Peach Liqueur</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n<div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">\r\n         Non Alcoholic\r\n        </a>\r\n      </h4>\r\n    </div>\r\n    <div id="collapseSeven" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th>Name</th>\r\n            <th>Description</th>\r\n            <th>Bottle</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>Virgin Mary</td>\r\n        	<td class="i">Tomato Juice, Worchester sauce, Spices and Lime</td>\r\n        	<td>£3.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Virgin Colada</td>\r\n        	<td class="i">Coconut Cream, Double Cream and Pineapple Juice</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n       \r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n<div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">\r\n         Long Drinks\r\n        </a>\r\n      </h4>\r\n    </div>\r\n    <div id="collapseEight" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th>Name</th>\r\n            <th>Description</th>\r\n            <th>Bottle</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>Blue Heaven</td>\r\n        	<td class="i">Dark Rum, Amaretto, Blue Curacao, Lime and Pineapple Juice</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Mojito</td>\r\n        	<td class="i">Rum, Mint, Lime, Sugar and Soda Water</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Mai Tai</td>\r\n        	<td class="i">Rum, Cointreau, Lime, Grenadine, Pineapple Juice and Lemonade</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Long Island Iced Tea</td>\r\n        	<td class="i">Gin, Vodka, Rum, Tequila, Triple Sec and Coke</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n<div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">\r\n         Short Drinks/Alcoholic\r\n        </a>\r\n      </h4>\r\n    </div>\r\n    <div id="collapseNine" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th>Name</th>\r\n            <th>Description</th>\r\n            <th>Bottle</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>Margaritas</td>\r\n        	<td class="i">Tequila, Triple Sec and Lime Juice</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Manhattan</td>\r\n        	<td class="i">Bourbon Whisky, Vermouth and Angostura</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Cosmopolitan</td>\r\n        	<td class="i">Vodka, Triple Sec, Cranberry Juice and Lime Juice</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>Caipirinha</td>\r\n        	<td class="i">Cachaca, Cane Sugar, Lime and Crushed Ice</td>\r\n        	<td>£5.50</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n <div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">\r\n         CHARCOAL GRILLED\r\n        </a>\r\n      </h4>\r\n    </div>\r\n    <div id="collapseTen" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th>Name</th>\r\n            <th>Description</th>\r\n            <th>Price</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>GRILLED KING PRAWN</td>\r\n        	<td class="i">JUMBO KING PRAWN MARINATED & THEN CHARCOAL GRILLED.</td>\r\n        	<td>£ 11.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>FISH OF THE DAY  </td>\r\n        	<td class="i">WHOLE FISH (ON THE BONE) OVER NIGHT MARINATED & THEN \r\n  CHARCOAL GRILLED.</td>\r\n        	<td>£ 9.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>STEAK (RIB EYE STEAK) </td>\r\n        	<td class="i">STEAK SERVED WITH CURLY CHIPS & FRENCH BEANS.</td>\r\n        	<td>£ 9.50</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n<div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">\r\n         SALAD\r\n        </a>\r\n      </h4>\r\n    </div>\r\n    <div id="collapseEleven" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th>Name</th>\r\n            <th>Description</th>\r\n            <th>Price</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>GREEK SALAD </td>\r\n        	<td class="i">SALAD WITH TOMATO, CUCUMBER, OLIVES, PEPPERS & FETA \r\n  CHEESE WITH RED WINE VINAGRETTE DRESSING.</td>\r\n        	<td>£ 5.25</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>CHICKEN SALAD </td>\r\n        	<td class="i">CHICKEN, COS LETTUCE, SWEET CORN, CHERRY TOMATO, \r\n  CORNCHIPS WITH MUSTARD DRESSING.</td>\r\n        	<td>£ 5.25</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n<div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">\r\n         O12  CURRIES\r\n        </a>\r\n      </h4>\r\n    </div>\r\n    <div id="collapseTwelve" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th>Name</th>\r\n            <th>Description</th>\r\n            <th>Price</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>CHICKEN TIKKA MASALA  </td>\r\n        	<td class="i">CHARCOAL GRILLED CHICKEN CUBES COOKED GENTLY IN A BUTTERY\r\n  TOMATO SAUCE WITH GROUND CASHEW NUTS.</td>\r\n        	<td>£6.95</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>KARAHI GOST</td>\r\n        	<td class="i">SPICY LAMB CURRY COOKED WITH SPECIAL SPICES. CHICKEN COULD\r\n  BE ORDER AS WELL.</td>\r\n        	<td>£7.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>KATHMANDU AALU</td>\r\n        	<td class="i">POTATOES TOASTED WITH CUMIN SEEDS & TOMATOES.</td>\r\n        	<td>£3.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>MUSHROOM BHAJI</td>\r\n        	<td class="i">MUSHROOMS COOKED WITH TOUCH OF SPICES.</td>\r\n        	<td>£3.50</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n<div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">\r\n         NEPALESE SPECIALS\r\n        </a>\r\n      </h4>\r\n    </div>\r\n <div id="collapseThirteen" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th>Name</th>\r\n            <th>Description</th>\r\n            <th>Price</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>MOMO (CHICKEN OR LAMB)</td>\r\n        	<td class="i">STEM DUMPLINGS FILLED WITH MINCED LAMB OR CHICKEN & SERVED WITH SPECIAL SAUCE.</td>\r\n        	<td>£5.00</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>LAMB / CHICKEN CHHOYLA</td>\r\n        	<td class="i">SMOKED LAMB OR CHICKEN PIECES SMEARED WITH CHILLY, GARLIC, ONION & MUSTARD OIL</td>\r\n        	<td>£4.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>SEKUWA</td>\r\n        	<td class="i">LAMB PIECES MARNITED WITH TOUCH OF SPICES AND GRILLED.</td>\r\n        	<td>£5.00</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>BHUTAN</td>\r\n        	<td class="i">LAMB TRIPE, KIDNEY, LIVER & HEART BOILED & THEN PAN FRIED WITH WILD PEPPER & ONION.</td>\r\n        	<td>£3.50</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n<div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">\r\n         CHIPS & ONION RINGS\r\n        </a>\r\n      </h4>\r\n    </div>\r\n <div id="collapseFourteen" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th>Name</th>\r\n            <th>Description</th>\r\n            <th>Price</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>CURLY CHIPS</td>\r\n        	<td class="i"></td>\r\n        	<td>£2.00</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>PLAIN CHIPS</td>\r\n        	<td class="i"></td>\r\n        	<td>£2.00</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>ONION RINGS</td>\r\n        	<td class="i"></td>\r\n        	<td>£2.95</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n<div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen">\r\n         BREADS & RICE\r\n        </a>\r\n      </h4>\r\n    </div>\r\n <div id="collapseFifteen" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th>Name</th>\r\n            <th>Description</th>\r\n            <th>Price</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>GARLIC NAN</td>\r\n        	<td class="i"></td>\r\n        	<td>£1.95</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>CHEESE NAN</td>\r\n        	<td class="i"></td>\r\n        	<td>£1.95</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>PLAIN NAN</td>\r\n        	<td class="i"></td>\r\n        	<td>£1.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>KEEMA NAN</td>\r\n        	<td class="i"></td>\r\n        	<td>£2.50</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>STEAM RICE</td>\r\n        	<td class="i"></td>\r\n        	<td>£1.95</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>EGG FRIED RICE</td>\r\n        	<td class="i"></td>\r\n        	<td>£2.50</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n<div class="panel panel-default">\r\n    <div class="panel-heading">\r\n      <h4 class="panel-title">\r\n        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen">\r\n         DESSERTS\r\n        </a>\r\n      </h4>\r\n    </div>\r\n <div id="collapseSixteen" class="panel-collapse collapse">\r\n      <div class="panel-body">\r\n        <table class="table table-striped table-responsive">\r\n    	<thead>\r\n           <tr>\r\n        	<th>Name</th>\r\n            <th>Description</th>\r\n            <th>Price</th>\r\n        </tr>\r\n        </thead>\r\n        <tr>\r\n        	<td>CHEESE CAKE</td>\r\n        	<td class="i"></td>\r\n        	<td>£2.95</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>CHOCOLATE FUDGE BROWNIE (WITH VANILLA ICE CREAM)</td>\r\n        	<td class="i"></td>\r\n        	<td>£2.95</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>TRIO OF ICE CREAM</td>\r\n        	<td class="i"></td>\r\n        	<td>£2.95</td>\r\n        </tr>\r\n        <tr>\r\n        	<td>PISTACHIO  KULFI</td>\r\n        	<td class="i"></td>\r\n        	<td>£2.95</td>\r\n        </tr>\r\n    </table>\r\n      </div>\r\n    </div>\r\n  </div>\r\n\r\n</div>\r\n', 173948286022100, '2014-05-11 00:00:00', '2014-06-10 00:00:00'),
(12, 'About Us', '<div class="col-md-6 col-sm-6">\r\n<p>\r\n                    	Pala + Agya = ''Palagya'' The word''s meaning is OBEDIENT. The Hotel is Just  five minutes walking distance from world famous Pashupatinath & Airport. Hotel Palagya invites you to experience the  warmth of Nepalese hospitality at its gracious best.Bask in courtesy, comfort and care that come from a staff with decades of operational experience in some of the finest hotels and restaurants.</p>\r\n\r\n<p>\r\nWell-appointed suites and rooms, facilities for seminars, conference and banquets,make Hotel Palagya the perfect choice for business, celebration or simply pleasure. \r\n                    </p>\r\n</div>\r\n<div class="col-md-6 col-sm-6">\r\n    <img src="../../../../css/palagya/images/about-co.png" class="img-responsive" alt="img" />\r\n    </div>', 118277798324097, '2014-07-20 00:00:00', '2014-07-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_products`
--

CREATE TABLE IF NOT EXISTS `ptw_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `category` int(20) NOT NULL,
  `product_price` double NOT NULL DEFAULT '0',
  `duration` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `product_status` enum('1','0') NOT NULL DEFAULT '1',
  `page_id` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category` (`category`),
  KEY `category_2` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ptw_products`
--

INSERT INTO `ptw_products` (`product_id`, `product_name`, `category`, `product_price`, `duration`, `product_description`, `image`, `image1`, `image2`, `image3`, `product_status`, `page_id`, `created_date`, `updated_date`) VALUES
(1, 'pokhara tour', 9, 53.56, '2 week', 'Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.', 'imageaSASs1.jpg', 'imAAAages.jpg', '', '', '1', 118277798324097, '2014-07-20 00:00:00', '0000-00-00 00:00:00'),
(2, 'soyambu tour', 9, 53.56, '2 week', 'Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.', 'packg4.jpg', '', '', '', '1', 118277798324097, '2014-07-20 00:00:00', '0000-00-00 00:00:00'),
(4, 'hotal abc room', 8, 3, '56', 'Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.Comfortable double beds western style attached bathroom with two Hygienic Towels, Sofa Set, LED TV, Telephone facilities and unlimited internet facilities.', 'imagdses1.jpg', '', '', '', '1', 118277798324097, '2014-07-20 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_product_image`
--

CREATE TABLE IF NOT EXISTS `ptw_product_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ptw_projects`
--

CREATE TABLE IF NOT EXISTS `ptw_projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) NOT NULL,
  `project_description` text NOT NULL,
  `project_features` text NOT NULL,
  `project_status` enum('1','0') NOT NULL DEFAULT '1',
  `small_image` varchar(255) NOT NULL,
  `large_image` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ptw_projects`
--

INSERT INTO `ptw_projects` (`project_id`, `project_name`, `project_description`, `project_features`, `project_status`, `small_image`, `large_image`, `created_date`, `updated_date`) VALUES
(1, 'Project11', '<p>Project11</p>\r\n', '<p>Project11</p>\r\n', '1', 'Chrysanthemum.jpg', 'Desert.jpg', '2013-11-10', '2014-02-02'),
(2, 'Project2', '<p>Project2</p>\r\n', '<p>Project2</p>\r\n', '1', 'Tulips.jpg', 'Hydrangeas1.jpg', '2013-11-10', '2013-11-10'),
(3, 'My Project', '<p>My Project</p>\r\n', '<p>My Project</p>\r\n', '1', 'Penguins.jpg', 'Koala.jpg', '2013-11-10', '2014-02-02'),
(6, 'Apple Design 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis felis in elit ultricies tristique sed vitae risus. Phasellus non massa id urna pulvinar auctor eu bibendum arcu. Pellentesque feugiat at orci in pulvinar. Fusce euismod molestie dui ac rutrum. Cras vel enim tellus. Nullam mauris libero,</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis felis in elit ultricies tristique sed vitae risus.</p>\r\n', '<ul class="list-1">\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n</ul>\r\n', '1', 'Chrysanthemum1.jpg', 'Jellyfish.jpg', '2013-11-10', '2013-11-10'),
(7, 'Apple Design 5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis felis in elit ultricies tristique sed vitae risus. Phasellus non massa id urna pulvinar auctor eu bibendum arcu. Pellentesque feugiat at orci in pulvinar. Fusce euismod molestie dui ac rutrum. Cras vel enim tellus. Nullam mauris libero,</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis felis in elit ultricies tristique sed vitae risus.&nbsp;</p>\r\n', '<ul>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n</ul>\r\n', '1', 'Chrysanthemum2.jpg', 'Jellyfish1.jpg', '2013-11-10', '2013-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_settings`
--

CREATE TABLE IF NOT EXISTS `ptw_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(255) NOT NULL,
  `twitter_feeds` text NOT NULL,
  `flickr_photos` text NOT NULL,
  `facebook_likes` text NOT NULL,
  `fb_share` varchar(550) NOT NULL,
  `fb_logo` varchar(255) NOT NULL,
  `twitter_share` varchar(550) NOT NULL,
  `gplus_share` varchar(550) NOT NULL,
  `linkedin_share` varchar(550) NOT NULL,
  `pinterest_share` varchar(550) NOT NULL,
  `page_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ptw_settings`
--

INSERT INTO `ptw_settings` (`id`, `admin_email`, `twitter_feeds`, `flickr_photos`, `facebook_likes`, `fb_share`, `fb_logo`, `twitter_share`, `gplus_share`, `linkedin_share`, `pinterest_share`, `page_id`) VALUES
(7, 'lama.2b@gmail.com', '<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FO12-Bar-Grill-Restaurant%2F173948286022100&width&height=290&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>', '<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FO12-Bar-Grill-Restaurant%2F173948286022100&width&height=290&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>', '<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FO12-Bar-Grill-Restaurant%2F173948286022100&width&height=290&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>', 'https://www.facebook.com/', '', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 173948286022100);

-- --------------------------------------------------------

--
-- Table structure for table `ptw_testimonials`
--

CREATE TABLE IF NOT EXISTS `ptw_testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testimonial` varchar(1050) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `page_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ptw_users`
--

CREATE TABLE IF NOT EXISTS `ptw_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `page_id` bigint(20) NOT NULL,
  `template` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ptw_users`
--

INSERT INTO `ptw_users` (`user_id`, `name`, `phone`, `email`, `password`, `page_id`, `template`, `status`) VALUES
(1, 'Buddha Lama', '9801081507', 'lama.2b@gmail.com', 'j7i9fQporJAQ4sWc6Wa-gEwbuzp8M0Bi8jbQm1NNYBU', 403903779719805, 'design1', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ptw_products`
--
ALTER TABLE `ptw_products`
  ADD CONSTRAINT `ptw_products` FOREIGN KEY (`category`) REFERENCES `ptw_category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
