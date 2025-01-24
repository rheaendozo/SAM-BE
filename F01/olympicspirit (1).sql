-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2025 at 02:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olympicspirit`
--

-- --------------------------------------------------------

--
-- Table structure for table `athletes`
--

CREATE TABLE `athletes` (
  `athlete_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `sport` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `athletes`
--

INSERT INTO `athletes` (`athlete_id`, `name`, `country`, `sport`, `image`) VALUES
(1, 'Lebron James', 'USA', 'Basketball', 'images/james.png'),
(2, 'Rayssa Leal', 'BRA', 'Skateboarding', 'images/leal.png'),
(3, 'Neeraj Chopra', 'IND', 'Athletics', 'images/chopra.png'),
(4, 'Noah Lyles', 'USA', 'Athletics', 'images/lyles.png'),
(5, 'Stephen Curry', 'USA', 'Basketball', 'images/curry.png'),
(6, 'Summer Mcintosh', 'CAN', 'Swimming', 'images/mcintosh.png'),
(7, 'Yuto Horigome', 'JPN', 'Skateboarding', 'images/horigome.png'),
(8, 'Tadej Pogacar', 'UAE', 'Cycling Road', 'images/pogacar.png');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `gameID` int(11) NOT NULL,
  `Year` int(11) DEFAULT NULL,
  `Season` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gameID`, `Year`, `Season`, `City`, `Country`, `Image`) VALUES
(1, 2028, 'Summer', 'Los Angeles', 'United States', 'images/LA.png'),
(2, 2030, 'Winter', 'French Alps', 'France', 'images/france.png'),
(3, 2032, 'Summer', 'Brisbane', 'Australia', 'images/brisbane.png'),
(4, 2034, 'Winter', 'Salt Lake City UTAH', 'United States', 'images/US.png');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story_id` int(11) NOT NULL,
  `athlete_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`story_id`, `athlete_id`, `title`, `content`, `image`) VALUES
(1, 1, 'The Rise of LeBron: From Akron to Icon', 'Akron\'s LeBron James, an NBA champion with Miami and Cleveland, achieved stardom and uses his platform for impactful social activism.', 'images/lebron.png'),
(2, 2, 'Skateboarding Prodigy', 'The Brazilian skateboarding sensation captivated the world with her talent, winning an Olympic silver medal at just 13 years old.', 'images/rayssa.png'),
(3, 3, 'India\'s Golden Javelin Thrower', 'Neeraj Chopra became the first Indian athlete to win Olympic gold in athletics, inspiring a nation with his javelin throw victory.', 'images/neeraj.png'),
(4, 4, 'The Speed Demon', 'Noah Lyles is a dominant American sprinter known for his speed, showmanship, and multiple world championship titles.', 'images/noah.png'),
(5, 5, 'The Golden State Warrior', 'Stephen Curry revolutionized basketball with his unparalleled three-point shooting, leading the Golden State Warriors to multiple NBA championships.', 'images/stephen.png'),
(6, 6, 'Canadian Swimming Sensation', 'Summer McIntosh is a rising star in swimming, breaking numerous records and showcasing exceptional talent in various events.', 'images/summer.png'),
(7, 7, 'Skateboarding\'s Rising Star', 'Yuto Horigome is a Japanese skateboarding prodigy who has consistently pushed the boundaries of the sport with his innovative and stylish tricks.', 'images/yuto.png'),
(8, 8, 'Cycling\'s Young Phenom', 'Tadej Pogačar is a Slovenian cyclist who has dominated the Tour de France, showcasing exceptional climbing ability and a relentless competitive spirit.', 'images/tadej.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athletes`
--
ALTER TABLE `athletes`
  ADD PRIMARY KEY (`athlete_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameID`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`story_id`),
  ADD KEY `athlete_id` (`athlete_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athletes`
--
ALTER TABLE `athletes`
  MODIFY `athlete_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `stories_ibfk_1` FOREIGN KEY (`athlete_id`) REFERENCES `athletes` (`athlete_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
