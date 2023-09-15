-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `article_id` int NOT NULL,
  `textone` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image_url` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `texttwo` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `content` (`article_id`, `textone`, `image`, `image_url`, `texttwo`) VALUES
(1,	'<p>Kylian Mbappe’s future has been one of                      the hottest topics of a manic summer transfer window,                      and on Friday evening the story went into overdrive.</p>                     <p>Paris Saint-Germain left Mbappe, their star striker and the captain of France’s national team,                          out of their travelling squad for a four-match pre-season tour in the Far East and                          put him up for sale, with the Ligue 1 champions believing he intends to let his contract expire                          then join Spain’s Real Madrid next summer on a free transfer.</p>                     <p>On Monday, PSG received a world-record offer of €300m from Saudi Arabian club Al Hilal and                          the French club granted permission for them to speak to the 24-year-old.                         This is just the latest escalation in an epic transfer saga, and follows Mbappe’s decision not to extend                          a deal which runs until the end of the coming season, by a further year.                         So how did it come to this, why are PSG quite so annoyed about it,                          will anyone rival Real Madrid for Mbappe’s signature, and what will happen next?</p>',	'image.png',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.',	'<p>Paris Saint-Germain have left Kylian Mbappe off their pre-season tour because,                      they say, they no longer see him as part of their plans. He is now for sale in the current transfer window,                      and therefore will not travel with his team-mates today (Saturday)                      to start the club’s four-game trip to Japan and South Korea.</p>                 <p>Why is one of the world’s best footballers no longer a part of their plans, you ask?                      Well, that’s a lot to do with a transfer saga that has been running on repeat for the last few summers.                      This time, though, matters have escalated a tad.</p>                 <p>The reason PSG are sidelining the France captain, and arguably the best footballer on the planet these days (sorry, Lionel Messi),                      is because they have become convinced Mbappe has already agreed to leave them for free when his contract expires next summer,                      and sign for Real Madrid. PSG, understandably, absolutely do not want their (and the world’s) best player to leave for nothing.                      Their stance is that he either goes now for a (massive) fee, or for a fee next summer.</p>');

DROP TABLE IF EXISTS `headline`;
CREATE TABLE `headline` (
  `article_id` int NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `author` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `headline` (`article_id`, `category`, `title`, `author`) VALUES
(1,	'SPORTS',	'Explained: Why PSG are trying to sell Kylian Mbappe and a €300m bid from Saudi Arabia',	'By Peter Rutzler, March 10 2023');

DROP TABLE IF EXISTS `hugeimage`;
CREATE TABLE `hugeimage` (
  `article_id` int NOT NULL,
  `image_url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `hugeimage` (`article_id`, `image_url`) VALUES
(1,	'mbappe.png');

DROP TABLE IF EXISTS `readmore`;
CREATE TABLE `readmore` (
  `article_id` int NOT NULL,
  `firstrmimage` varchar(50) NOT NULL,
  `firstrmheader` varchar(150) NOT NULL,
  `firstrmtext` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `firstrmdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `readmore` (`article_id`, `firstrmimage`, `firstrmheader`, `firstrmtext`, `firstrmdate`) VALUES
(1,	'tiger.png',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat eros vestibulum mi faucibus, nec sollicitudin augue lobortis. Vivamus sed efficitur nunc. Nam aliquet diam vel vulputate iaculis. Ut accumsan mi quis egestas lobortis. Etiam imperdiet ac sapien ac dapibus.',	'2023-07-08');

DROP TABLE IF EXISTS `readmoretwo`;
CREATE TABLE `readmoretwo` (
  `article_id` int NOT NULL,
  `secondrmimage` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `secondrmheader` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `secondrmtext` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `secondrmdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `readmoretwo` (`article_id`, `secondrmimage`, `secondrmheader`, `secondrmtext`, `secondrmdate`) VALUES
(1,	'king.png',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat eros vestibulum mi faucibus, nec sollicitudin augue lobortis. Vivamus sed efficitur nunc. Nam aliquet diam vel vulputate iaculis. Ut accumsan mi quis egestas lobortis. Etiam imperdiet ac sapien ac dapibus.',	'2023-05-06');

DROP TABLE IF EXISTS `rmimage`;
CREATE TABLE `rmimage` (
  `article_id` int NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `rmimage` (`article_id`, `image`) VALUES
(1,	'messi.png');

-- 2023-09-15 14:43:47
