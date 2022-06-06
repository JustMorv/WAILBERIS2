-- Adminer 4.8.1 MySQL 8.0.24 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `dbwaildberis` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dbwaildberis`;

CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_product` varchar(100) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `brend` varchar(100) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `desk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `search` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `products` (`id`, `id_product`, `img`, `title`, `brend`, `price`, `category`, `desk`, `search`) VALUES
(1,	'001',	'img/product/001-',	'Wrangler / Джинсы',	'Wrangler',	1212,	'hits',	'lorem',	'мужские Джинсы'),
(2,	'002',	'img/product/002-',	'Wrangler / Джинсы TEXASTRETCH',	'Wrangler',	74300,	'hits',	'хлопок 98%, эластин 2%',	'мужские Джинсы'),
(3,	'003',	'img/product/003-',	'TOM TAILOR / Джинсы Marvin Straight',	'TOM TAILOR ',	33900,	'hits',	'хлопок 98%, эластин 2%',	'мужские Джинсы'),
(6,	'001',	'img/product/001-',	'Wrangler / Джинсы',	'Wrangler',	1212,	'hits',	'lorem',	'мужские Джинсы'),
(7,	'002',	'img/product/002-',	'Wrangler / Джинсы TEXAS STRETCH',	'Wrangler',	74300,	'hits',	'хлопок 98%, эластин 2%',	'мужские Джинсы'),
(8,	'003',	'img/product/003-',	'TOM TAILOR / Джинсы Marvin Straight',	'TOM TAILOR ',	33900,	'hits',	'хлопок 98%, эластин 2%',	'мужские Джинсы');

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `loggin` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`id`, `full_name`, `loggin`, `email`, `password`, `avatar`) VALUES
(1,	'123',	'123',	'mrmorvol@mail.com',	'123',	NULL),
(2,	'12',	'',	'mrmorvol@mail.com',	'12',	'drop/1653674045icon-removebg-preview.png'),
(3,	'12',	'',	'mrmorvol@mail.com',	'12',	'drop/1653674113icon-removebg-preview.png'),
(4,	'12',	'123',	'12',	'c20ad4d76fe97759aa27a0c99bff6710',	'drop/1653674222icon-removebg-preview.png'),
(5,	'121',	'123',	'12',	'c20ad4d76fe97759aa27a0c99bff6710',	'drop/1653674562icon-removebg-preview.png'),
(6,	'123',	'123',	'123',	'202cb962ac59075b964b07152d234b70',	'drop/1653675592icon-removebg-preview.png'),
(7,	'122',	'122',	'122',	'a0a080f42e6f13b3a2df133f073095dd',	'drop/1653722423tPWfN0uwwdQ.jpg'),
(8,	'',	'',	'',	'd41d8cd98f00b204e9800998ecf8427e',	'drop/1653909343'),
(9,	'1233',	'12333',	'mrmorvol@mail.com',	'4297f44b13955235245b2497399d7a93',	'drop/16539099232-J16uPiA9w.jpg'),
(10,	'123123',	'123123',	'123123123',	'4297f44b13955235245b2497399d7a93',	'drop/1653927214'),
(11,	'12312',	'12312',	'12312',	'b3ddbc502e307665f346cbd6e52cc10d',	'drop/1653982066'),
(12,	'1232',	'1232',	'thesdasnd@gmail.com',	'4297f44b13955235245b2497399d7a93',	'drop/16539871971653935972HwZmtakoIS0.jpg'),
(13,	'1122',	'1122',	'mrmorvol@mail.com',	'3b712de48137572f3849aabd5666a4e3',	'drop/16540733401653935997TDZohc5XtNc.jpg');

-- 2022-06-06 10:32:30
