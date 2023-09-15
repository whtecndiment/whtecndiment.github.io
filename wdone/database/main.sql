-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `below`;
CREATE TABLE `below` (
  `article_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `below` (`article_id`, `title`, `image`, `desc`, `date`) VALUES
(1,	'Bronny James, Son of LeBron, Suffers Cardiac Arrest During Workout in L.A.',	'im-781825.jpeg',	'Sens. Chris Van Hollen (D., Md.), Elizabeth Warren (D., Mass.), and Tim Kaine (D., Va.) are seeking details on any administration efforts to address North Korea’s growing reliance on stolen cryptocurrency. PHOTO: AMANDA ANDRADE-RHOADES/ASSOCIATED PRESS; AMANDA ANDRADE-RHOADES/REUTERS; DREW ANGERER/GETTY IMAGES.',	'2023-05-06'),
(2,	'Collectors Bristle at Nude Bathers, but Bid Up Portrait of Artist Stanley Whitney',	'im-830257.jpeg',	'Sens. Chris Van Hollen (D., Md.), Elizabeth Warren (D., Mass.), and Tim Kaine (D., Va.) are seeking details on any administration efforts to address North Korea’s growing reliance on stolen cryptocurrency. ',	'2023-02-09'),
(3,	'A Signed ‘Seinfeld’ Finale Script, a ‘Friends’ Trophy: It’s a Strike Auction',	'im-829488.jpeg',	'With inflation at 116% and a weakening currency, country considers conservative, business-friendly candidates, polls show',	'2023-12-06'),
(3,	'Argentina’s Ruling Peronists Await Defeat in Sunday Primary',	'im-828918.jpeg',	'Sens. Chris Van Hollen (D., Md.), Elizabeth Warren (D., Mass.), and Tim Kaine (D., Va.) are seeking details on any administration efforts to address North Korea’s growing reliance on stolen cryptocurrency. ',	'2023-05-06');

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `category` (`category_id`, `name`) VALUES
(1,	'BUSINESS'),
(2,	'POLITICS'),
(3,	'SPORTS'),
(4,	'ART'),
(5,	'BOOK'),
(6,	'SCIENCE');

DROP TABLE IF EXISTS `column1`;
CREATE TABLE `column1` (
  `article_id` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `column1` (`article_id`, `category`, `title`, `date`, `image`) VALUES
('1',	'LIFESTYLE',	'A Signed ‘Seinfeld’ Finale Script, a ‘Friends’ Trophy: It’s a Strike Auction',	'2023-05-09',	'im-830257.jpeg'),
('2',	'ART',	'Collectors Bristle at Nude Bathers, but Bid Up Portrait of Artist Stanley Whitney',	'2023-05-06',	'im-781825.jpeg');

DROP TABLE IF EXISTS `column2`;
CREATE TABLE `column2` (
  `article_id` int NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `column2` (`article_id`, `image`, `title`, `desc`) VALUES
(1,	'im-829488.jpeg',	'Crypto Heists Funneling Billions to North Korea’s Nuclear Program Attract Senate Scrutiny',	'Sens. Chris Van Hollen (D., Md.), Elizabeth Warren (D., Mass.), and Tim Kaine (D., Va.) are seeking details on any administration efforts to address North Korea’s growing reliance on stolen cryptocurrency. ');

DROP TABLE IF EXISTS `column3`;
CREATE TABLE `column3` (
  `article_id` int NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `column3` (`article_id`, `category`, `title`, `date`) VALUES
(1,	'POLITICS',	'Bronny James, Son of LeBron, Suffers Cardiac Arrest During Workout in L.A.',	'2023-07-25'),
(2,	'LIFESTYLE',	'Bronny James, Son of LeBron, Suffers Cardiac Arrest During Workout in L.A.',	'2023-05-06'),
(3,	'ART',	'A Signed ‘Seinfeld’ Finale Script, a ‘Friends’ Trophy: It’s a Strike Auction',	'2023-05-12'),
(4,	'SPORTS',	'Argentina’s Ruling Peronists Await Defeat in Sunday Primary',	'2023-09-30');

DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `article_id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `page` (`article_id`, `image`, `title`, `type`, `date`) VALUES
(1,	'Stuart-Broad.jpg',	'The Ashes 2023: Stuart Broad bowls England to win over Australia',	'Cricket',	'2023-02-03'),
(2,	'Liverpool.jpeg',	'Fabinho: Liverpool midfielder joins Saudi side Al-Ittihad',	'Football',	'2023-06-09'),
(3,	'file:///C:/laragon/www/wdone/landingpage/KylianMbappe.jpg',	'Explained: Why PSG are trying to sell Kylian Mbappe and a €300m bid from Saudi Arabia',	'Football',	'2023-07-12'),
(4,	'file:///C:/laragon/www/wdone/landingpage/ManUtdAdidas.jpg',	'Manchester United agree 10-year extension with Adidas worth at least £900m',	'Football',	'2023-07-12');

DROP TABLE IF EXISTS `title`;
CREATE TABLE `title` (
  `title_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`title_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `title` (`title_id`, `title`) VALUES
(1,	'title lamskdakdmkamsdmaldk');

DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `video_id` int NOT NULL,
  `image` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `video` (`video_id`, `image`, `title`) VALUES
(1,	'',	'The Ashes 2023: Ben Stokes hails \'incredible\' England comeback'),
(2,	'',	'Lorem ipsum dolor sit consectetur adipiscing elit.'),
(3,	'',	'Fabinho: Liverpool midfielder joins Saudi side Al-Ittihad');

-- 2023-09-15 14:44:23
