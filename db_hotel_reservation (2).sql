-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `bill`;
CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `receptionist_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  PRIMARY KEY (`bill_id`),
  KEY `reservation_id` (`reservation_id`),
  KEY `guest_id` (`guest_id`),
  KEY `room_type_id` (`room_type_id`),
  KEY `receptionist_id` (`receptionist_id`),
  KEY `payment_id` (`payment_id`),
  CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`receptionist_id`) REFERENCES `receptionist` (`receptionist_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`guest_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `bill_ibfk_3` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `bill_ibfk_4` FOREIGN KEY (`room_type_id`) REFERENCES `room_type` (`room_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `bill_ibfk_5` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `bill` (`bill_id`, `room_type_id`, `guest_id`, `date`, `reservation_id`, `receptionist_id`, `payment_id`) VALUES
(2,	1,	2,	'2022-02-27',	2,	1,	1),
(6,	4,	5,	'2022-06-13',	5,	4,	2),
(7,	5,	6,	'2022-07-10',	6,	3,	5),
(8,	4,	6,	'2022-07-29',	7,	4,	2);

DROP TABLE IF EXISTS `guest`;
CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL AUTO_INCREMENT,
  `guest_name` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `guest_phone` varchar(100) NOT NULL,
  `guest_address` varchar(100) NOT NULL,
  `room_id` int(11) NOT NULL,
  PRIMARY KEY (`guest_id`),
  KEY `guest_ibfk_1` (`room_id`),
  CONSTRAINT `guest_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `guest` (`guest_id`, `guest_name`, `nik`, `guest_phone`, `guest_address`, `room_id`) VALUES
(2,	'Intan pertamasari',	'32170831228763',	'087654315285',	'Bandung',	2),
(3,	'Edo',	'32172937359287363',	'087776552444',	'Jakarta',	3),
(4,	'Nisa ',	'11188726343455',	'098779987653',	'jakarta utara',	3),
(5,	'Jasmine',	'321111888755666',	'087776625525',	'Sukabumi',	5),
(6,	'Yudha pratama',	'73635302736',	'0886655442272',	'cikarang',	6);

DROP TABLE IF EXISTS `keys`;
CREATE TABLE `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1,	0,	'rahasia',	0,	0,	0,	NULL,	0),
(2,	19,	'ZC0cA1Q',	0,	0,	0,	NULL,	0),
(3,	20,	'u1vODJ2',	0,	0,	0,	NULL,	0),
(4,	21,	'S3ji54S',	0,	0,	0,	NULL,	0),
(5,	22,	'4698nT3',	0,	0,	0,	NULL,	0),
(6,	23,	'GiFmAAg',	0,	0,	0,	NULL,	0),
(7,	24,	'y3k9166',	0,	0,	0,	NULL,	0),
(8,	25,	'TrzITe4',	0,	0,	0,	NULL,	0),
(9,	26,	'9MeZI6i',	0,	0,	0,	NULL,	0),
(10,	27,	'rlEI3S3',	0,	0,	0,	NULL,	0),
(11,	28,	'4doZPNh',	0,	0,	0,	NULL,	0),
(12,	29,	'3kitlDM',	0,	0,	0,	NULL,	0),
(13,	30,	'xIIW0dF',	0,	0,	0,	NULL,	0),
(14,	33,	'eRuqC',	0,	0,	0,	NULL,	0),
(15,	34,	'Uvx6r',	0,	0,	0,	NULL,	0),
(16,	37,	'',	0,	0,	0,	NULL,	0),
(17,	37,	'',	0,	0,	0,	NULL,	0),
(18,	38,	'',	0,	0,	0,	NULL,	0),
(19,	39,	'',	0,	0,	0,	NULL,	0);

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_name` varchar(100) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `payment` (`payment_id`, `payment_name`) VALUES
(1,	'cash'),
(2,	'Virtual Account'),
(3,	'Paylater'),
(4,	'QRIS'),
(5,	'kartu kredit');

DROP TABLE IF EXISTS `receptionist`;
CREATE TABLE `receptionist` (
  `receptionist_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`receptionist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `receptionist` (`receptionist_id`, `name`, `phone`, `email`, `address`) VALUES
(1,	'Laras',	'088845326781',	'laras@gmail.com',	'cimahi'),
(2,	'Bayu',	'082317625437',	'bayu@gmail.com',	'pasir koja'),
(3,	'Rahma',	'087765423145',	'rahma@gmail.com',	'bandung'),
(4,	'Tiara',	'089987665133',	'tiara@gmail.com',	'cihanjuang'),
(5,	'Sandy',	'088223346678',	'sandy@gmail.com',	'lembang'),
(6,	'safwan',	'08976545323',	'safwan@gmail.com',	'Bone'),
(15,	'Lala',	'8766553442',	'lala@gmail.com',	'sukajadi'),
(52,	'',	'',	'',	''),
(53,	'',	'',	'',	''),
(54,	'',	'',	'',	''),
(55,	'',	'',	'',	'');

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `check_in` date NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `check_out` date NOT NULL,
  `total_charge` varchar(100) NOT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `guest_id` (`guest_id`),
  KEY `room_id` (`room_id`),
  KEY `room_type_id` (`room_type_id`),
  CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`guest_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`room_type_id`) REFERENCES `room_type` (`room_type_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `reservation` (`reservation_id`, `check_in`, `guest_id`, `room_id`, `room_type_id`, `check_out`, `total_charge`) VALUES
(2,	'2022-02-27',	2,	2,	1,	'2022-02-28',	'300000'),
(3,	'2022-03-16',	3,	3,	2,	'2022-03-18',	'1000000'),
(4,	'2022-04-04',	4,	3,	2,	'2022-04-06',	'1000000'),
(5,	'2022-06-13',	5,	5,	4,	'2022-06-14',	'870000'),
(6,	'2022-07-10',	6,	6,	5,	'2022-07-12',	'2000000'),
(7,	'2022-08-27',	4,	3,	2,	'2022-08-30',	'1000000');

DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_number` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  PRIMARY KEY (`room_id`),
  KEY `room_type_id` (`room_type_id`),
  CONSTRAINT `room_ibfk_1` FOREIGN KEY (`room_type_id`) REFERENCES `room_type` (`room_type_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `room` (`room_id`, `room_number`, `floor`, `room_type_id`) VALUES
(2,	'101',	'lantai 1',	1),
(3,	'201',	'lantai 2',	2),
(5,	'401',	'lantai 4',	4),
(6,	'410',	'lantai 5',	5);

DROP TABLE IF EXISTS `room_type`;
CREATE TABLE `room_type` (
  `room_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `facility` text NOT NULL,
  PRIMARY KEY (`room_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `room_type` (`room_type_id`, `room_type_name`, `price`, `facility`) VALUES
(1,	'Standard Room',	'Rp. 300.000',	'WiFi gratis\r\nSingle Bed\r\nUkuran kamar: 27 m²/291 ft²\r\nPemandangan: Kebun\r\nTidak ada sarapan\r\nParkir, Minuman selamat datang, Kopi & teh'),
(2,	'Superior Room',	'Rp. 500.000',	'1 double bed \r\nUkuran kamar: 20 m²/269 ft²\r\nTV\r\nSarapan gratis\r\nWiFi gratis'),
(4,	'Suite Room',	'Rp. 870.000',	'WiFi gratis\r\n2 kasur single\r\nUkuran kamar: 27 m²/291 ft²\r\nPemandangan: Kebun\r\nBalkon/teras\r\nBebas asap rokok\r\nPancuran\r\nSarapan untuk 2 orang\r\nParkir, Minuman selamat datang, Kopi & teh, WiFi Gratis, Air minum'),
(5,	'Suite Executive - City Wing (Executive Suite - City Wing)',	'Rp. 1.000.000',	'WiFi gratis\r\n1 kasur double\r\nUkuran kamar: 38 m²/409 ft²\r\nPemandangan: Kota\r\nBalkon/teras\r\nSarapan untuk 2 orang\r\nParkir, Minuman selamat datang, Kopi & teh, WiFi Gratis, Air minum\r\n\r\nKeuntungan:\r\nSarapan untuk 2 orang\r\nParkir, Minuman selamat datang, Kopi & teh, WiFi Gratis, Air minum\r\nHarga murah (tidak bisa refund)');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `receptionist_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `receptionist_id` (`receptionist_id`),
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`receptionist_id`) REFERENCES `receptionist` (`receptionist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`user_id`, `username`, `password`, `receptionist_id`) VALUES
(36,	'',	'',	52),
(37,	'',	'',	53),
(38,	'',	'',	54),
(39,	'',	'',	55);

-- 2022-08-06 11:50:44
