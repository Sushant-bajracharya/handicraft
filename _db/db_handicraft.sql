-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2014 at 11:59 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_handicraft`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ptw_aboutus`
--

INSERT INTO `ptw_aboutus` (`id`, `title`, `about_us`, `page_id`) VALUES
(1, 'About Us', '<p>Vivamus ac ipsum sit amet felis scelerisque consectetur eget ut elit. Vestibulum id sollicitudin ligula. Integer lectus dolor, commodo in interdum sed, lobortis vitae diam. Duis tristique laoreet nunc, eleifend eleifend nunc blandit ac. Cras at imperdiet tellus, et luctus nunc. Nullam ultrices, justo nec pellentesque fermentum, felis nisl fermentum nunc, et commodo ligula nunc non ipsum. Nullam sit amet metus nec nulla lobortis varius id non arcu. Sed mattis arcu ut velit fringilla suscipit. Donec et volutpat odio, vitae porta magna.</p>\r\n\r\n<p>Praesent non ante eu erat sodales dapibus. Vestibulum quis nunc in est imperdiet aliquet. Integer eu gravida tortor, eget sagittis elit. Suspendisse sit amet tellus quis ligula tristique iaculis. Quisque aliquam tincidunt ante ac congue. Maecenas nunc magna, volutpat et venenatis quis, blandit id erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum sit amet vehicula justo, non semper est. Donec urna ligula, imperdiet bibendum est id, tempus faucibus sapien. Fusce varius lacus at augue posuere elementum. Aenean lacinia tellus id mauris consectetur ultrices. Integer vitae fermentum tellus. Donec eros nibh, dapibus at aliquam eu, commodo ac erat. Nullam tristique ipsum a urna vestibulum rutrum. Curabitur at nibh quis augue imperdiet ullamcorper. In hac habitasse platea dictumst.</p>\r\n', 0),
(2, 'About Us', '<p>About Us</p>\r\n', 621258147897464),
(3, 'Test', '<p>Test123</p>\r\n', 403903779719805),
(4, 'title1', '  industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing softwa', 326623407411720),
(5, 'About Palagya', '<p>Operating a 24-hour front desk, Palagya Hotel & Restaurant is situated conveniently within 400 metres from Tribhuvan International Airport and the well-known Pashupatinath Temple. It provides free parking on site and complimentary Wi-Fi access in its public areas.</p>\r\n\r\n<p>Fitted with carpet flooring, air-conditioned rooms are equipped with a personal safe, a flat-screen cable TV and sofa seating area. The attached bathroom comes with shower facility.</p>\r\n\r\n<p>Palagya Hotel & Restaurant offers luggage storage, currency exchange and laundry services on request. Guests can enjoy a barbecue session on site, or rent a car to explore the area. Meeting/banqueting facilities are also available.</p>\r\n\r\n<p>The in-house Palagya Restaurant serves tasty Indian and Continental dishes. It offers buffet breakfast daily and meals can also be served in private with room service.</p>\r\n<p>Palagya Hotel is just 1 km to the city centre and 2.5 km to the iconic Boudhanath Stupa.</p>\r\n', 118277798324097);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ptw_blog`
--

INSERT INTO `ptw_blog` (`blog_id`, `title`, `image`, `short_desc`, `long_desc`, `page_id`, `created_at`, `updated_at`) VALUES
(1, 'Ipsum text edited', 'Photo_00001.jpg', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.&nbsp;<br />\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 403903779719805, '2014-02-02 00:00:00', '2014-02-02 00:00:00'),
(2, 'Test25', 'tp2.png', '<p>Test25</p>\r\n', '<p>Test25</p>\r\n', 0, '2014-02-05 00:00:00', '0000-00-00 00:00:00'),
(3, 'Test News on 2.10.2014', 'tp3.png', '<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;</p>\r\n', '<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014</p>\r\n\r\n<p>Test News on 2.10.2014&nbsp;Test News on 2.10.2014&nbsp;</p>\r\n', 403903779719805, '2014-02-10 00:00:00', '0000-00-00 00:00:00'),
(4, 'Test NEws', 'tp4.png', '<p>Test NEws</p>\r\n', '<p>Test NEws</p>\r\n', 403903779719805, '2014-02-11 00:00:00', '0000-00-00 00:00:00'),
(5, 'Meet Hyv, A Startup That Can’t Wait ', 'revolution.jpg', '<p>Editor&rsquo;s note: Derek Khanna is a technology policy consultant and columnist. He previously worked for the House Republican Study Committee where he authored their report on copyright reform.</p>\n', '<p>Editor&rsquo;s note: Derek Khanna is a technology policy consultant and columnist. He previously worked for the House Republican Study Committee where he authored their report on copyright reform. Hespearheaded the national campaign on cellphone unlocking that resulted in proposed legislation to legalize unlocking your phone. Derek regularly writes for The Atlantic, National Review and Forbes. Follow him on Twitter @DerekKhanna.</p>\n\n<p>On Tuesday, the House of Representatives will vote on legislation on phone unlocking (H.R. 1123). In January 2013, a decision by the Librarian of Congress made it a crime to unlock your phone, with either civil or criminal penalties. Since that time, the resale market has been significantly impacted and websites have shut down that offer unlocking services. In the following month over 114,000 Americans signed a White House petition demanding that this decision be reversed and supported our mass campaign, one of the largest online protests since SOPA/PIPA, and then legislation was introduced that has passed committee.</p>\n\n<p>This legislation cannot be passed soon enough for Alex Koren, an entrepreneur who is attending Johns Hopkins University.</p>\n\n<p>Koren is not your typical college sophomore. After completing his first year at Johns Hopkins, as an intern at Intel, he won a hackathon for designing an iOS application for distributed big data analysis. That app is the basis of an ambitious startup that he claims may solve some of our society&rsquo;s most vexing problems, such as providing better weather forecasting and even advanced cures to cancer. Koren can be seen here running for student president with a Gangnam Style campaign video:</p>\n', 326623407411720, '2014-02-22 00:00:00', '0000-00-00 00:00:00'),
(6, 'Technology policy consultant and columnist', 'fashion-background-wallpaper-710.jpg', '<p>Editor&rsquo;s note: Derek Khanna is a technology policy consultant and columnist. He previously worked for the House Republican Study Committee where he authored their report on copyright reform. Hespearheaded the national campaign on cellphone unlocking that resulted in proposed legislation to legalize unlocking your phone. Derek regularly writes for The Atlantic, National Review and Forbes</p>\n', '<p>Editor&rsquo;s note: Derek Khanna is a technology policy consultant and columnist. He previously worked for the House Republican Study Committee where he authored their report on copyright reform. Hespearheaded the national campaign on cellphone unlocking that resulted in proposed legislation to legalize unlocking your phone. Derek regularly writes for The Atlantic, National Review and Forbes. Follow him on Twitter @DerekKhanna.</p>\n\n<p>On Tuesday, the House of Representatives will vote on legislation on phone unlocking (H.R. 1123). In January 2013, a decision by the Librarian of Congress made it a crime to unlock your phone, with either civil or criminal penalties. Since that time, the resale market has been significantly impacted and websites have shut down that offer unlocking services. In the following month over 114,000 Americans signed a White House petition demanding that this decision be reversed and supported our mass campaign, one of the largest online protests since SOPA/PIPA, and then legislation was introduced that has passed committee.</p>\n\n<p>This legislation cannot be passed soon enough for Alex Koren, an entrepreneur who is attending Johns Hopkins University.</p>\n\n<p>Koren is not your typical college sophomore. After completing his first year at Johns Hopkins, as an intern at Intel, he won a hackathon for designing an iOS application for distributed big data analysis. That app is the basis of an ambitious startup that he claims may solve some of our society&rsquo;s most vexing problems, such as providing better weather forecasting and even advanced cures to cancer. Koren can be seen here running for student president with a Gangnam Style campaign video:</p>\n', 326623407411720, '2014-02-22 00:00:00', '0000-00-00 00:00:00'),
(7, 'testblog', 'web-2-0.png', 'this is test', 'Editor’s note: Derek Khanna is a technology policy consultant and columnist. He previously worked for the House Republican Study Committee where he authored their report on copyright reform. Hespearheaded the national campaign on cellphone unlocking that resulted in proposed legislation to legalize unlocking your phone. Derek regularly writes for The Atlantic, National Review and Forbes', 326623407411720, '2014-03-09 00:00:00', '0000-00-00 00:00:00'),
(8, 'Lord Buddha', 'lord-buddha1.png', '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis malesuada elit. Morbi et porta justo. Aenean porta maximus diam id egestas. Ut sed viverra nulla. Sed arcu turpis, maximus id metus mollis, lobortis vulputate ante. Curabitur ac sapien nunc. </p>', '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis malesuada elit. Morbi et porta justo. Aenean porta maximus diam id egestas. Ut sed viverra nulla. Sed arcu turpis, maximus id metus mollis, lobortis vulputate ante. Curabitur ac sapien nunc. Donec ut pretium lacus, a ultrices massa. Praesent commodo hendrerit urna, sed accumsan mi tempus non.</p>\r\n\r\n<p>Vivamus pulvinar libero at tempor rhoncus. Donec quis arcu et massa ullamcorper tristique. Nullam lobortis consectetur luctus. Sed dolor metus, placerat at lobortis ut, pretium nec tellus. Donec ac laoreet est. Ut ac suscipit mi. Proin rutrum ut nisl et gravida. Aliquam malesuada lectus vitae ipsum pulvinar luctus. Vivamus gravida ultrices ligula, et vulputate sapien commodo pharetra. Nulla eleifend arcu a massa feugiat, id luctus nulla gravida. Vestibulum at efficitur augue.</p> ', 335515313138217, '2014-09-08 00:00:00', '0000-00-00 00:00:00'),
(9, 'Latest Product', 'Lord-Buddha-jute-water-Hygyeine-models-showpiece1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis malesuada elit. Morbi et porta justo. Aenean porta maximus diam id egestas. Ut sed viverra nulla.</p>', '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis malesuada elit. Morbi et porta justo. Aenean porta maximus diam id egestas. Ut sed viverra nulla. Sed arcu turpis, maximus id metus mollis, lobortis vulputate ante. Curabitur ac sapien nunc. Donec ut pretium lacus, a ultrices massa. Praesent commodo hendrerit urna, sed accumsan mi tempus non.</p>\r\n\r\n<p>Vivamus pulvinar libero at tempor rhoncus. Donec quis arcu et massa ullamcorper tristique. Nullam lobortis consectetur luctus. Sed dolor metus, placerat at lobortis ut, pretium nec tellus. Donec ac laoreet est. Ut ac suscipit mi. Proin rutrum ut nisl et gravida. Aliquam malesuada lectus vitae ipsum pulvinar luctus. Vivamus gravida ultrices ligula, et vulputate sapien commodo pharetra. Nulla eleifend arcu a massa feugiat, id luctus nulla gravida. Vestibulum at efficitur augue. </p>', 335515313138217, '2014-09-08 00:00:00', '2014-09-08 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `ptw_menus`
--

INSERT INTO `ptw_menus` (`id`, `title`, `linked_pageid`, `parent`, `status`, `page_id`, `created_at`, `updated_at`) VALUES
(3, 'About', 0, 0, '1', 403903779719805, '2014-04-16 00:00:00', '2014-04-20 00:00:00'),
(4, 'Location', 1, 3, '1', 403903779719805, '2014-04-20 00:00:00', '2014-04-20 00:00:00'),
(5, 'Test', 0, 0, '1', 403903779719805, '2014-04-20 00:00:00', '2014-04-20 00:00:00'),
(6, 'Test2', 3, 5, '1', 403903779719805, '2014-04-20 00:00:00', '2014-04-20 00:00:00'),
(7, 'About Us', 0, 0, '1', 326623407411720, '2014-04-20 00:00:00', '2014-04-22 00:00:00'),
(8, 'Location', 5, 7, '1', 326623407411720, '2014-04-20 00:00:00', '2014-04-22 00:00:00'),
(9, 'Test', 5, 7, '1', 326623407411720, '2014-04-20 00:00:00', '2014-04-28 00:00:00'),
(10, 'Test2', 5, 7, '1', 326623407411720, '2014-04-22 00:00:00', '2014-04-28 00:00:00'),
(11, 'menu text', 6, 7, '1', 326623407411720, '2014-05-11 00:00:00', '0000-00-00 00:00:00'),
(12, 'About Us', 0, 0, '1', 515391725200829, '2014-05-18 00:00:00', '0000-00-00 00:00:00'),
(13, 'test1', 7, 12, '1', 515391725200829, '2014-05-18 00:00:00', '0000-00-00 00:00:00'),
(14, 'test2', 9, 12, '1', 515391725200829, '2014-05-18 00:00:00', '0000-00-00 00:00:00'),
(15, 'factory', 0, 0, '1', 515391725200829, '2014-05-18 00:00:00', '0000-00-00 00:00:00'),
(16, 'test1', 7, 15, '1', 515391725200829, '2014-05-18 00:00:00', '0000-00-00 00:00:00'),
(17, 'About Us', 11, 0, '1', 335515313138217, '2014-09-08 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `ptw_pages`
--

INSERT INTO `ptw_pages` (`id`, `title`, `description`, `page_id`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'This is the description of about us page. It can be a longer text.', 403903779719805, '2014-04-16 00:00:00', '2014-04-16 00:00:00'),
(3, 'Sample Page', 'This is the sample page content.', 403903779719805, '2014-04-16 00:00:00', '2014-04-16 00:00:00'),
(4, 'Location', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mi quam, pretium sit amet lobortis sed, iaculis et diam. Vivamus eu tristique felis. Morbi a urna mollis augue commodo iaculis id vitae dolor. Proin nulla ipsum, lacinia nec iaculis ac, molestie vel dui. Maecenas tristique accumsan enim non commodo. Quisque ac turpis tortor. Vivamus vulputate nisi at aliquam vestibulum. Nullam viverra tortor nec ligula venenatis facilisis. Donec vulputate velit elit, ac suscipit dolor porta vel. Nunc porta sollicitudin nisl, eget cursus libero bibendum sit amet. Mauris scelerisque, neque eget faucibus rutrum, quam erat condimentum magna, quis iaculis mauris dolor sit amet odio.</p>\n\n<p>Vestibulum eleifend magna nec rhoncus lobortis. Sed eu vestibulum purus, id vulputate purus. Sed interdum purus vitae eros dignissim mattis. Donec consectetur leo nec odio hendrerit, at egestas massa tempus. Donec ultricies, nisl sed ultricies ullamcorper, sapien erat dapibus turpis, ut sodales urna libero ut enim. Sed a diam neque. Phasellus id ipsum eget augue sollicitudin venenatis non sed nunc. Fusce vitae elit a justo consectetur iaculis. Aliquam vehicula sodales sem, et tristique arcu adipiscing et. Aenean a magna ac urna elementum suscipit. Nam a sapien eu augue ultrices ornare. Sed adipiscing hendrerit dui eget facilisis. Fusce nec enim lobortis, sodales nunc eu, pellentesque orci. Integer sed lorem dolor.</p>\n\n<p>Nulla sed ipsum purus. Vivamus viverra mauris vitae arcu posuere dictum. Quisque mattis placerat leo, sed faucibus leo euismod at. Nulla commodo viverra justo non rutrum. Morbi eu mi felis. Nulla volutpat nunc id erat venenatis viverra. Morbi volutpat dui imperdiet ligula volutpat adipiscing. Nunc ullamcorper mi vel tortor accumsan varius vitae quis arcu. Proin posuere vestibulum felis ut ultrices. Nulla tempor leo quis velit convallis, nec vehicula mi imperdiet. Ut a blandit neque, in imperdiet massa. Vivamus consectetur ultrices aliquet. Suspendisse suscipit nisi et volutpat mattis. Cras at nunc velit.</p>\n\n<p>Aliquam a odio ac arcu fringilla tempor. Curabitur ornare ante vitae elit posuere, et tincidunt erat tristique. Maecenas porta placerat magna non mattis. Phasellus lacus velit, porta vel leo ut, porta posuere lectus. Aenean rutrum justo sed nisl aliquet gravida. Sed accumsan a nisi vel consectetur. Fusce pharetra tincidunt tellus, quis mattis diam condimentum et. Duis cursus feugiat laoreet.</p>\n\n<p>Vestibulum sit amet dui eu urna condimentum ultrices. Fusce et est eu felis laoreet fringilla nec imperdiet enim. Maecenas vulputate lobortis pretium. Fusce venenatis est et magna placerat fermentum. Nam et enim tincidunt, semper tortor et, imperdiet eros. Fusce id ultricies enim. Vivamus vel interdum mi. Donec interdum hendrerit ultrices. Integer vitae sem in nibh bibendum placerat. Quisque a nisi ante. Donec lobortis non lorem et sollicitudin.</p>\n', 326623407411720, '2014-04-17 00:00:00', '2014-04-22 00:00:00'),
(5, 'Test2', '<p>Ipsum dolor sit amet, consectetur adipiscing elit. Proin mi quam, pretium sit amet lobortis sed, iaculis et diam. Vivamus eu tristique felis. Morbi a urna mollis augue commodo iaculis id vitae dolor. Proin nulla ipsum, lacinia nec iaculis ac, molestie vel dui. Maecenas tristique accumsan enim non commodo. Quisque ac turpis tortor. Vivamus vulputate nisi at aliquam vestibulum. Nullam viverra tortor nec ligula venenatis facilisis. Donec vulputate velit elit, ac suscipit dolor porta vel. Nunc porta sollicitudin nisl, eget cursus libero bibendum sit amet. Mauris scelerisque, neque eget faucibus rutrum, quam erat condimentum magna, quis iaculis mauris dolor sit amet odio.</p>\n\n<p>Vestibulum eleifend magna nec rhoncus lobortis. Sed eu vestibulum purus, id vulputate purus. Sed interdum purus vitae eros dignissim mattis. Donec consectetur leo nec odio hendrerit, at egestas massa tempus. Donec ultricies, nisl sed ultricies ullamcorper, sapien erat dapibus turpis, ut sodales urna libero ut enim. Sed a diam neque. Phasellus id ipsum eget augue sollicitudin venenatis non sed nunc. Fusce vitae elit a justo consectetur iaculis. Aliquam vehicula sodales sem, et tristique arcu adipiscing et. Aenean a magna ac urna elementum suscipit. Nam a sapien eu augue ultrices ornare. Sed adipiscing hendrerit dui eget facilisis. Fusce nec enim lobortis, sodales nunc eu, pellentesque orci. Integer sed lorem dolor.</p>\n\n<p>Nulla sed ipsum purus. Vivamus viverra mauris vitae arcu posuere dictum. Quisque mattis placerat leo, sed faucibus leo euismod at. Nulla commodo viverra justo non rutrum. Morbi eu mi felis. Nulla volutpat nunc id erat venenatis viverra. Morbi volutpat dui imperdiet ligula volutpat adipiscing. Nunc ullamcorper mi vel tortor accumsan varius vitae quis arcu. Proin posuere vestibulum felis ut ultrices. Nulla tempor leo quis velit convallis, nec vehicula mi imperdiet. Ut a blandit neque, in imperdiet massa. Vivamus consectetur ultrices aliquet. Suspendisse suscipit nisi et volutpat mattis. Cras at nunc velit.</p>\n\n<p>Aliquam a odio ac arcu fringilla tempor. Curabitur ornare ante vitae elit posuere, et tincidunt erat tristique. Maecenas porta placerat magna non mattis. Phasellus lacus velit, porta vel leo ut, porta posuere lectus. Aenean rutrum justo sed nisl aliquet gravida. Sed accumsan a nisi vel consectetur. Fusce pharetra tincidunt tellus, quis mattis diam condimentum et. Duis cursus feugiat laoreet.</p>\n\n<p>Vestibulum sit amet dui eu urna condimentum ultrices. Fusce et est eu felis laoreet fringilla nec imperdiet enim. Maecenas vulputate lobortis pretium. Fusce venenatis est et magna placerat fermentum. Nam et enim tincidunt, semper tortor et, imperdiet eros. Fusce id ultricies enim. Vivamus vel interdum mi. Donec interdum hendrerit ultrices. Integer vitae sem in nibh bibendum placerat. Quisque a nisi ante. Donec lobortis non lorem et sollicitudin.</p>\n', 326623407411720, '2014-04-18 00:00:00', '2014-04-22 00:00:00'),
(6, 'menu test', '<p>Ipsum dolor sit amet, consectetur adipiscing elit. Proin mi quam, pretium sit amet lobortis sed, iaculis et diam. Vivamus eu tristique felis. Morbi a urna mollis augue commodo iaculis id vitae dolor. Proin nulla ipsum, lacinia nec iaculis ac, molestie vel dui. Maecenas tristique accumsan enim non commodo. Quisque ac turpis tortor. Vivamus vulputate nisi at aliquam vestibulum. Nullam viverra tortor nec ligula venenatis facilisis. Donec vulputate velit elit, ac suscipit dolor porta vel. Nunc porta sollicitudin nisl, eget cursus libero bibendum sit amet. Mauris scelerisque, neque eget faucibus rutrum, quam erat condimentum magna, quis iaculis mauris dolor sit amet odio.</p>\r\n\r\n<p>Vestibulum eleifend magna nec rhoncus lobortis. Sed eu vestibulum purus, id vulputate purus. Sed interdum purus vitae eros dignissim mattis. Donec consectetur leo nec odio hendrerit, at egestas massa tempus. Donec ultricies, nisl sed ultricies ullamcorper, sapien erat dapibus turpis, ut sodales urna libero ut enim. Sed a diam neque. Phasellus id ipsum eget augue sollicitudin venenatis non sed nunc. Fusce vitae elit a justo consectetur iaculis. Aliquam vehicula sodales sem, et tristique arcu adipiscing et. Aenean a magna ac urna elementum suscipit. Nam a sapien eu augue ultrices ornare. Sed adipiscing hendrerit dui eget facilisis. Fusce nec enim lobortis, sodales nunc eu, pellentesque orci. Integer sed lorem dolor.</p>\r\n', 326623407411720, '2014-05-11 00:00:00', '0000-00-00 00:00:00'),
(7, 'test1', 'Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.', 515391725200829, '2014-05-18 00:00:00', '0000-00-00 00:00:00'),
(8, 'About Us', 'Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.', 515391725200829, '2014-05-18 00:00:00', '0000-00-00 00:00:00'),
(9, 'test2', 'Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.', 515391725200829, '2014-05-18 00:00:00', '0000-00-00 00:00:00'),
(10, 'factory', 'this is test', 515391725200829, '2014-05-18 00:00:00', '0000-00-00 00:00:00'),
(11, 'About Us', '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus metus justo, hendrerit nec odio ut, laoreet condimentum lorem. Quisque consequat ipsum ipsum, non vulputate sapien scelerisque in. Donec ut metus massa. Phasellus at elit sed turpis lacinia pellentesque. Vivamus sit amet lorem in augue vestibulum sollicitudin sed a nisl. Morbi erat felis, ultrices pellentesque erat nec, fringilla facilisis libero. Suspendisse feugiat enim diam, in pellentesque orci dapibus sed. Nullam ut dolor id velit ultricies iaculis id a tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut dolor nec ex feugiat posuere. In hac habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam posuere enim faucibus ornare feugiat.</p>\r\n\r\n<p>Cras faucibus purus id tincidunt aliquam. In ut massa tempus, vehicula lacus eu, interdum massa. Nunc interdum in nibh eu sollicitudin. Integer sed dolor eget diam dapibus fringilla finibus in erat. Nam vestibulum nisl eros, et fermentum nunc facilisis vel. Fusce pharetra suscipit arcu ut pulvinar. Morbi interdum tellus sed porta euismod. Pellentesque felis mauris, scelerisque sit amet finibus et, dapibus non nisl. Maecenas nec mauris et ante condimentum gravida. Proin pretium magna nec nisi euismod viverra eu eu nulla. Cras venenatis gravida ipsum, a gravida libero hendrerit vitae. Pellentesque sem nisl, pretium sed commodo et, vulputate non nulla. Curabitur tristique, lorem vitae tincidunt semper, massa lorem tincidunt urna, ac interdum mi enim eget erat. </p>', 335515313138217, '2014-09-08 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_products`
--

CREATE TABLE IF NOT EXISTS `ptw_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_price` double NOT NULL DEFAULT '0',
  `product_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `product_status` enum('1','0') NOT NULL DEFAULT '1',
  `page_id` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ptw_products`
--

INSERT INTO `ptw_products` (`product_id`, `product_name`, `product_price`, `product_description`, `image`, `image1`, `image2`, `image3`, `product_status`, `page_id`, `created_date`, `updated_date`) VALUES
(1, 'menu1', 333, 'zx', 'Chrysanthemum24.jpg', '', '', '', '1', 326623407411720, '2014-04-01 00:00:00', '0000-00-00 00:00:00'),
(2, 'menu1', 333, 'v b', 'Koala_-_Copy.jpg', '', '', '', '1', 326623407411720, '2014-04-01 00:00:00', '0000-00-00 00:00:00'),
(3, 'product1', 11, 'vbgnvc', 'Lighthouse_-_Copy2.jpg', '', '', '', '1', 326623407411720, '2014-04-01 00:00:00', '0000-00-00 00:00:00'),
(4, 'menu1', 11, 'cvbn vg', 'Lighthouse_-_Copy3.jpg', '', '', '', '1', 326623407411720, '2014-04-01 00:00:00', '0000-00-00 00:00:00'),
(5, 'menu2', 333, 'cvbnvc', 'Tulips8.jpg', '', '', '', '1', 326623407411720, '2014-04-01 00:00:00', '0000-00-00 00:00:00'),
(6, 'dfdsa', 2121, 'Quisque varius, nibh ac feugiat interdum, libero massa laoreet tellus, nec congue lorem arcu a nunc. Praesent quis felis eget elit semper Quisque varius, nibh ac feugiat interdum, libero massa laoreet tellus, nec congue lorem arcu a nunc. Praesent quis felis eget elit semper Quisque varius, nibh ac feugiat interdum, libero massa laoreet tellus, nec congue lorem arcu a nunc. Praesent quis felis eget elit semper', 'screen_shot_2013-12-06_at_2.23_.08_pm_3.png', '', '', '', '1', 118277798324097, '2014-04-02 00:00:00', '2014-04-02 00:00:00'),
(7, 'product1', 25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sollicitudin cursus facilisis. Duis commodo lacinia sapien, non placerat ipsum dignissim nec. Quisque adipiscing vitae ligula quis fermentum. Sed ultrices metus eget augue adipiscing lacinia eu at nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque at eros non ligula facilisis elementum. Suspendisse a pulvinar sapien, id sodales felis. Aenean mauris justo, molestie vitae massa a, ornare placerat leo. Donec ut viverra est, sed imperdiet massa. Suspendisse ac neque a felis commodo tincidunt quis eu purus. Fusce sollicitudin risus sagittis urna feugiat, in porta sem varius. Praesent nec laoreet lacus, non tristique nulla. ', 'Koala2.jpg', '', '', '', '1', 118277798324097, '2014-04-23 00:00:00', '0000-00-00 00:00:00'),
(8, 'product2', 100, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sollicitudin cursus facilisis. Duis commodo lacinia sapien, non placerat ipsum dignissim nec. Quisque adipiscing vitae ligula quis fermentum. Sed ultrices metus eget augue adipiscing lacinia eu at nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque at eros non ligula facilisis elementum. Suspendisse a pulvinar sapien, id sodales felis. Aenean mauris justo, molestie vitae massa a, ornare placerat leo. Donec ut viverra est, sed imperdiet massa. Suspendisse ac neque a felis commodo tincidunt quis eu purus. Fusce sollicitudin risus sagittis urna feugiat, in porta sem varius. Praesent nec laoreet lacus, non tristique nulla. ', 'Penguins1.jpg', 'Koala3.jpg', 'Lighthouse2.jpg', '', '1', 118277798324097, '2014-04-23 00:00:00', '0000-00-00 00:00:00'),
(9, 'product3', 150, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sollicitudin cursus facilisis. Duis commodo lacinia sapien, non placerat ipsum dignissim nec. Quisque adipiscing vitae ligula quis fermentum. Sed ultrices metus eget augue adipiscing lacinia eu at nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque at eros non ligula facilisis elementum. Suspendisse a pulvinar sapien, id sodales felis. Aenean mauris justo, molestie vitae massa a, ornare placerat leo. Donec ut viverra est, sed imperdiet massa. Suspendisse ac neque a felis commodo tincidunt quis eu purus. Fusce sollicitudin risus sagittis urna feugiat, in porta sem varius. Praesent nec laoreet lacus, non tristique nulla. ', 'Hydrangeas4.jpg', 'Penguins2.jpg', 'Tulips2.jpg', 'Lighthouse3.jpg', '1', 118277798324097, '2014-04-23 00:00:00', '0000-00-00 00:00:00'),
(10, 'product1', 20, 'Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.', 'Chrysanthemum10.jpg', 'Desert10.jpg', 'Jellyfish4.jpg', 'jlpt.jpg', '1', 515391725200829, '2014-05-18 00:00:00', '0000-00-00 00:00:00'),
(11, 'product2', 412, 'Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.Passion is committed to offering technologically advanced, highly reliable, and high quality security products with their extensive backup support team.', 'Chrysanthemum11.jpg', 'Desert11.jpg', '', '', '1', 515391725200829, '2014-05-18 00:00:00', '0000-00-00 00:00:00'),
(13, 'Lord Buddha', 1, '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus metus justo, hendrerit nec odio ut, laoreet condimentum lorem. Quisque consequat ipsum ipsum, non vulputate sapien scelerisque in. Donec ut metus massa. Phasellus at elit sed turpis lacinia pellentesque. Vivamus sit amet lorem in augue vestibulum sollicitudin sed a nisl. Morbi erat felis, ultrices pellentesque erat nec, fringilla facilisis libero. Suspendisse feugiat enim diam, in pellentesque orci dapibus sed. Nullam ut dolor id velit ultricies iaculis id a tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut dolor nec ex feugiat posuere. In hac habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam posuere enim faucibus ornare feugiat.</p>\r\n\r\n<p>Cras faucibus purus id tincidunt aliquam. In ut massa tempus, vehicula lacus eu, interdum massa. Nunc interdum in nibh eu sollicitudin. Integer sed dolor eget diam dapibus fringilla finibus in erat. Nam vestibulum nisl eros, et fermentum nunc facilisis vel. Fusce pharetra suscipit arcu ut pulvinar. Morbi interdum tellus sed porta euismod. Pellentesque felis mauris, scelerisque sit amet finibus et, dapibus non nisl. Maecenas nec mauris et ante condimentum gravida. Proin pretium magna nec nisi euismod viverra eu eu nulla. Cras venenatis gravida ipsum, a gravida libero hendrerit vitae. Pellentesque sem nisl, pretium sed commodo et, vulputate non nulla. Curabitur tristique, lorem vitae tincidunt semper, massa lorem tincidunt urna, ac interdum mi enim eget erat. </p>', 'SDL057691799_1372917142_image1-b4812.jpg', 'Lord-Buddha-jute-water-Hygyeine-models-showpiece.jpg', 'Beautiful-Brown-Mandir-With-Lord-Buddha-Shree-Creation-MDESHREEC000096_1.jpg', '', '1', 335515313138217, '2014-09-08 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ptw_settings`
--

INSERT INTO `ptw_settings` (`id`, `admin_email`, `twitter_feeds`, `flickr_photos`, `facebook_likes`, `fb_share`, `fb_logo`, `twitter_share`, `gplus_share`, `linkedin_share`, `pinterest_share`, `page_id`) VALUES
(6, 'abc@yahoo.com', 'this is testthis is test', 'this is testthis is test', '', '', 'karan-singh.jpg', '', '', '', '', 326623407411720);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ptw_testimonials`
--

INSERT INTO `ptw_testimonials` (`id`, `testimonial`, `client_name`, `website`, `page_id`) VALUES
(1, 'Good Work Narendra', 'Buddha', 'www.facebook.com', 403903779719805),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas iaculis, lacus eget elementum auctor, enim mauris elementum magna, vitae congue dui justo et elit. Suspendisse ut dignissim enim', 'abc', 'google.com', 515391725200829),
(3, 'sdsadsf', 'dfsdf', 'dsfdf', 515391725200829);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
