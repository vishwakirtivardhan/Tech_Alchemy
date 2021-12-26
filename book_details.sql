-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `book_details`;
CREATE TABLE `book_details` (
  `uuid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `release_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `book_details` (`uuid`, `name`, `release_date`, `author_name`, `created_at`, `updated_at`) VALUES
(63630,	'Book123 checks',	'2021-12-31 23:04:10',	'VIshwa Sharma',	'2021-12-26 12:59:55',	'2021-12-26 12:59:55'),
(63631,	'Book123 Testing',	'2021-12-31 23:04:10',	'VIshwa Sharma',	'2021-12-26 13:00:05',	'2021-12-26 13:00:05'),
(63632,	'12344 Testing',	'2021-12-31 23:04:10',	'Shailja Sharma',	'2021-12-26 13:01:22',	'2021-12-26 13:01:22');

-- 2021-12-26 19:53:43
