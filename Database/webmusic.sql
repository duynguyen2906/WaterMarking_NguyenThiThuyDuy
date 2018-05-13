-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 09:30 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `parentid` varchar(256) NOT NULL,
  `id` varchar(256) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `singer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`parentid`, `id`, `name`, `singer`, `url`, `owner`) VALUES
('1-X5k4zYuvS7AdAOlDYQygkXBhZ_Vk9vS', '1-X5k4zYuvS7AdAOlDYQygkXBhZ_Vk9vS', 'Rá»±c Rá»¡ ThÃ¡ng NÄƒm', 'Má»¹ TÃ¢m', 'https://drive.google.com/file/d/1-X5k4zYuvS7AdAOlDYQygkXBhZ_Vk9vS/view?usp=sharing', 'admin'),
('11C2odK1VTwLL7p0nAk9tv2E3dsuvZgKM', '11C2odK1VTwLL7p0nAk9tv2E3dsuvZgKM', 'Äá»«ng NhÆ° ThÃ³i Quen', 'Jayki ft Ngá»c DuyÃªn', 'https://drive.google.com/file/d/11C2odK1VTwLL7p0nAk9tv2E3dsuvZgKM/view?usp=sharing', 'admin'),
('19okkRgi16SX-8M7KbfVtV69mUZ42-QJn', '19okkRgi16SX-8M7KbfVtV69mUZ42-QJn', 'Forever and One', 'Halloween', 'https://drive.google.com/file/d/19okkRgi16SX-8M7KbfVtV69mUZ42-QJn/view?usp=sharing', 'admin'),
('1h3HDC15Xb4l5Gpqqy5gwpIq08BhrMqiV', '1ESe8DebNtNKGS0kEPMm7ly_NVXrskMgU', 'Buá»“n Cá»§a Anh', 'Äáº¡t G - Masew', 'https://drive.google.com/file/d/1ESe8DebNtNKGS0kEPMm7ly_NVXrskMgU/view?usp=sharing', 'nguyenduy'),
('1h3HDC15Xb4l5Gpqqy5gwpIq08BhrMqiV', '1h3HDC15Xb4l5Gpqqy5gwpIq08BhrMqiV', 'Buá»“n Cá»§a Anh', 'Äáº¡t G - Masew', 'https://drive.google.com/file/d/1h3HDC15Xb4l5Gpqqy5gwpIq08BhrMqiV/view?usp=sharing', 'admin'),
('1JoKo-zcLjKu2AzdP6FtPymPhfo09bi7Q', '1JoKo-zcLjKu2AzdP6FtPymPhfo09bi7Q', 'That Why You Go Away', 'Michael Learns To Rock', 'https://drive.google.com/file/d/1JoKo-zcLjKu2AzdP6FtPymPhfo09bi7Q/view?usp=sharing', 'admin'),
('11C2odK1VTwLL7p0nAk9tv2E3dsuvZgKM', '1JZ18vY5PmER9on7pPyQFTz29dqJs2PNx', 'Äá»«ng NhÆ° ThÃ³i Quen', 'Jayki ft Ngá»c DuyÃªn', 'https://drive.google.com/file/d/1JZ18vY5PmER9on7pPyQFTz29dqJs2PNx/view?usp=sharing', 'duyntt'),
('1rlvsI4NgkLGYuvtAzZJZo1ci7ROqk4j8', '1rlvsI4NgkLGYuvtAzZJZo1ci7ROqk4j8', 'Rá»i Bá»', 'HÃ²a Minzy', 'https://drive.google.com/file/d/1rlvsI4NgkLGYuvtAzZJZo1ci7ROqk4j8/view?usp=sharing', 'admin'),
('11C2odK1VTwLL7p0nAk9tv2E3dsuvZgKM', '1rvEp5jBU5GIugqR5dVsSL3UYV8KLmMys', 'Äá»«ng NhÆ° ThÃ³i Quen', 'Jayki ft Ngá»c DuyÃªn', 'https://drive.google.com/file/d/1rvEp5jBU5GIugqR5dVsSL3UYV8KLmMys/view?usp=sharing', 'thienan'),
('1-X5k4zYuvS7AdAOlDYQygkXBhZ_Vk9vS', '1tbmKFyykwobITFQscLmswkWr_KHD-N6Q', 'Rá»±c Rá»¡ ThÃ¡ng NÄƒm', 'Má»¹ TÃ¢m', 'https://drive.google.com/file/d/1tbmKFyykwobITFQscLmswkWr_KHD-N6Q/view?usp=sharing', 'duynguyen'),
('11C2odK1VTwLL7p0nAk9tv2E3dsuvZgKM', '1TRgVuGDzJ_D6zaAun7GbjssH4wN-VuD6', 'Äá»«ng NhÆ° ThÃ³i Quen', 'Jayki ft Ngá»c DuyÃªn', 'https://drive.google.com/file/d/1TRgVuGDzJ_D6zaAun7GbjssH4wN-VuD6/view?usp=sharing', 'duynguyen'),
('1JoKo-zcLjKu2AzdP6FtPymPhfo09bi7Q', '1VOJKfawo1BKzXSpxt0vJ6x9OKukdvNUf', 'That Why You Go Away', 'Michael Learns To Rock', 'https://drive.google.com/file/d/1VOJKfawo1BKzXSpxt0vJ6x9OKukdvNUf/view?usp=sharing', 'duynguyen'),
('1vU0niO4rjA58vWjKF9CLbHRBfGiFkqq6', '1vU0niO4rjA58vWjKF9CLbHRBfGiFkqq6', 'CÃ´ ÄÆ¡n Giá»¯a Cuá»™c TÃ¬nh', 'Há»“ Ngá»c HÃ ', 'https://drive.google.com/file/d/1vU0niO4rjA58vWjKF9CLbHRBfGiFkqq6/view?usp=sharing', 'admin'),
('1X32QtCtPyipYTcpvzjVNbL80ITmcxxJH', '1X32QtCtPyipYTcpvzjVNbL80ITmcxxJH', 'Nothing Gonna Change My Love', 'George Benson', 'https://drive.google.com/file/d/1X32QtCtPyipYTcpvzjVNbL80ITmcxxJH/view?usp=sharing', 'admin'),
('1-X5k4zYuvS7AdAOlDYQygkXBhZ_Vk9vS', '1ZDLob3Sq8jqpoqsBCc465A_4A0DgIRZt', 'Rá»±c Rá»¡ ThÃ¡ng NÄƒm', 'Má»¹ TÃ¢m', 'https://drive.google.com/file/d/1ZDLob3Sq8jqpoqsBCc465A_4A0DgIRZt/view?usp=sharing', 'thienan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `quyen` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `quyen`) VALUES
(1, 'admin', 'admin123', 1),
(2, 'duynguyen', 'duynguyen', 0),
(3, 'minhkha', 'minhkha', 0),
(6, 'thienan', 'thienan', 0),
(7, 'nguyenduy', 'nguyenduy', 0),
(8, 'duyntt', 'duyntt', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
