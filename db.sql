CREATE TABLE IF NOT EXISTS `bases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `moderated` tinyint(1) NOT NULL DEFAULT '0',
  `affiliation` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `point` point NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=653 ;