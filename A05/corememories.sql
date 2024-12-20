-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 03:28 PM
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
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'images/love1.png', 'A moment with family that fills my heart with joy.', 'Brick Red'),
(2, 1, 'images/love2.png', 'A memories that deepens my connection with my friends.', 'Chili Red'),
(3, 1, 'images/love3.png', 'A precious memories with my beloved classmates.', 'Wine Red'),
(4, 2, 'images/beauty1.png', 'The transformative power of makeup and cosmetics lies in its ability to boost confidence and reveal different facets of one\'s personality.', 'Flamingo'),
(5, 2, 'images/beauty2.png', 'My heart finds solace in the ocean\'s embrace, feeling connected to something much larger than myself.', 'Sea Pink'),
(6, 2, 'images/beauty3.png', 'The beauty of art lies in its ability to evoke deep feelings and provoke thought, offering new perspectives on the world.', 'Light Pink'),
(7, 3, 'images/imagine1.png', 'Creating new ideas that inspire others.', 'Sky Blue'),
(8, 3, 'images/imagine2.png', 'A vision of a futuristic world where innovation leads the way.', 'Royal Blue'),
(9, 3, 'images/imagine3.png', 'Exploring a world of fantasy where everything is possible.', 'Navy Blue'),
(10, 4, 'images/adventure1.png', 'The joy of discovering new food lies not only in the flavors but in the stories behind each dish, connecting you to the people and traditions that created it.', 'Canary'),
(11, 4, 'images/adventure2.png', 'The thrill of discovering new anime lies in the surprises it holds, where every series has the potential to become a favorite, creating lasting memories and new fandoms.', 'Mustard'),
(12, 4, 'images/adventure3.png', 'The excitement of going to different places for adventure lies in the freedom to explore, challenge yourself, and create stories that will stay with you forever.', 'Sunflower');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Island of Love', 'A place where connections, warmth, and passion create lasting memories.', 'This island represents my deep love for family, friends, and those special relationships that shape who I am. It\'s a place where I give and receive affection, empathy, and understanding.', 'red', 'images/islandoflove.png', 'active'),
(2, 'Island of Beauty', 'An island of elegance and appreciation for the world’s beauty in all forms.', 'In this island, I celebrate the beauty in life—whether it’s the simple joy of a sunset, a favorite piece of art, or the people and places I find aesthetically pleasing. It’s a place where I connect with what I find beautiful in the world.', 'pink', 'images/islandofbeauty.png', 'active'),
(3, 'Island of Imagination', 'A land of creativity and dreams, where possibilities are endless.', 'This island represents my creative mind, where I envision ideas, stories, and dreams without limits. It’s where I explore new concepts, innovate, and find solutions to the world’s challenges.', 'blue', 'images/islandofimagination.png', 'active'),
(4, 'Island of Adventure', 'A place where excitement and exploration knows no bounds.', 'This island reflects my adventurous spirit—whether it’s through travel, trying new experiences, or facing challenges head-on. It’s where I seek the unknown and push my boundaries.', 'yellow', 'images/islandofadventure.png', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
