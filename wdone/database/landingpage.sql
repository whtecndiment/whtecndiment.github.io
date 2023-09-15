-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `latest`;
CREATE TABLE `latest` (
  `article_id` int NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `latest` (`article_id`, `image`, `title`, `type`, `date`) VALUES
(1,	'Stuart-Broad.jpg',	'The Ashes 2023: Stuart Broad bowls England to win over Australia',	'Cricket',	'7h ago'),
(2,	'Liverpool.jpeg',	'Fabinho: Liverpool midfielder joins Saudi side Al-Ittihad',	'Football',	'10h ago');

DROP TABLE IF EXISTS `trending`;
CREATE TABLE `trending` (
  `article_id` int NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `trending` (`article_id`, `image`, `title`, `type`, `date`) VALUES
(1,	'KylianMbappe.jpg',	'Explained: Why PSG are trying to sell Kylian Mbappe and a €300m bid from Saudi Arabia',	'Football',	'March 10, 2023'),
(2,	'ManUtdAdidas.jpg',	'Manchester: United agree 10-year extension with Adidas worth at least £900m',	'Football',	'July 31, 2023');

DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `article_id` int NOT NULL,
  `video` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `video` (`article_id`, `video`, `title`) VALUES
(1,	'BenStokes.jpg',	'The Ashes 2023: Stuart Broad bowls England to win over Australia'),
(2,	'KatieLedecky-img.jpg',	'Katie Ledecky reflects on historic world title run');

-- 2023-09-15 14:44:06
