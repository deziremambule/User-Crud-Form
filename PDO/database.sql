--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `usersdouble` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `image2` varchar(150) NOT NULL,
  brand_id varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `users`
--

INSERT INTO `usersdouble` (`id`, `first_name`, `last_name`, `image`, `image2`, `brand_id` ) VALUES
(18, 'Joseph', 'Harman', 'chlesea.jpg', 'manunited.jpg',1),
(19, 'John', 'Moss', 'manunited.jpg', 'chlesea.jpg',2),
(20, 'Lillie', 'Ferrarium', 'liverpool.jpg', 'mancity.jpg',3),
(21, 'Yolanda', 'Green', 'mancity.jpg', 'manunited.jpg',1),
(68, 'Roy', 'Newton', 'watford.jpg', 'chlesea.jpg',2);