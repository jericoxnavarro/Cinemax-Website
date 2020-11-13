-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 02:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemax`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `name`, `username`, `password`) VALUES
(1, 'Jerico', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ticket_number` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date_book` varchar(255) NOT NULL,
  `booking_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `title`, `ticket_number`, `name`, `seat`, `email`, `number`, `date`, `time`, `date_book`, `booking_status`) VALUES
(1, 'Far from Home', '1589716811931', 'Jerico Navarro', 'none', 'jericoxnavarro16@gmail.com', '09356555717', '2020-05-22', '12:30 PM', '2020/05/17', 'Declined'),
(2, 'Toy Story 4', '15897169866681', 'jubileah quemi', '7C10', 'dyubileyakemi071800@gmail.com', '09652558140', '2020-05-18', '3:30 PM', '2020/05/17', ''),
(3, 'Toy Story 4', '15897170226362', 'Sheenadine Pasion', '7E7', 'Shanangskiiee@gmail.com', '09261332209', '2020-05-18', '3:30 PM', '2020/05/17', 'Approved'),
(4, 'Toy Story 4', '15897170688413', 'YADAO, KLEIR IRISH S. ', '7B3', 'kleiryadao@gmail.com', '09675777611', '2020-05-18', '3:30 PM', '2020/05/17', 'Approved'),
(5, 'Toy Story 4', '15897170989104', 'Dean Dale Apanapao Almazan', 'none', 'deandalealmazan.dda@gmail.com', '09175502609', '2020-05-17', '9:30 AM', '2020/05/17', 'Declined'),
(6, 'Toy Story 4', '15897171371843', 'Keecee L. Regpala', 'none', 'regpalakeecee@gmail.com', '09365757155', '2020-05-17', '9:30 AM', '2020/05/17', 'Declined'),
(7, 'Toy Story 4', '15897171737888', 'Dahfney Y. Castro', '1D9', 'dahfneycastro@gmail.com', '09185923379', '2020-05-16', '9:30 AM', '2020/05/17', 'Approved'),
(8, 'The Rise of Skywalker', '15897172699784', 'Kathleen Joy Escobar Bernal', 'DD16', 'kathbernal14@gmail.com', '09218906912', '2020-05-19', '12:30 PM', '2020/05/17', ''),
(9, 'The Rise of Skywalker', '15897173052933', 'Erica Sabaten ', 'E11', 'ericaquijadosabaten@gmail.com', '09366310719', '2020-05-19', '9:30 AM', '2020/05/17', 'Approved'),
(10, 'The Rise of Skywalker', '15897173369362', 'Janine Macugay', '7D4', 'jajaninemacugay@gmail.com', '09550429370', '2020-05-21', '3:30 PM', '2020/05/17', '');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `Movie_ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Genre1` varchar(255) NOT NULL,
  `Genre2` varchar(255) NOT NULL,
  `Genre3` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Ratings` varchar(255) NOT NULL,
  `Thumbnail` varchar(255) NOT NULL,
  `BG_image` varchar(255) NOT NULL,
  `Trailer` varchar(255) NOT NULL,
  `Date1` date NOT NULL,
  `Date2` date NOT NULL,
  `Date3` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Movie_ID`, `Title`, `Genre1`, `Genre2`, `Genre3`, `Description`, `Ratings`, `Thumbnail`, `BG_image`, `Trailer`, `Date1`, `Date2`, `Date3`) VALUES
(1, 'Toy Story 4', 'Animation', 'Adventure', 'Comedy', 'When a new toy called \"Forky\" joins Woody and the gang, a road trip alongside old and new friends reveals how big the world can be for a toy.', '7.8', 'https://m.media-amazon.com/images/M/MV5BMTYzMDM4NzkxOV5BMl5BanBnXkFtZTgwNzM1Mzg2NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg', 'https://wallpapercart.com/wp-content/uploads/2019/05/Movie-Toy-Story-4-HD-Group-Wallpapers.jpg', 'wmiIUN-7qhE', '2020-05-16', '2020-05-17', '2020-05-18'),
(2, 'The Rise of Skywalker', 'Action', 'Adventure', 'Fantasy', 'The surviving members of the resistance face the First Order once again, and the legendary conflict between the Jedi and the Sith reaches its peak bringing the Skywalker saga to its end.', '6.7', 'https://m.media-amazon.com/images/M/MV5BMDljNTQ5ODItZmQwMy00M2ExLTljOTQtZTVjNGE2NTg0NGIxXkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_SY1000_CR0,0,675,1000_AL_.jpg', 'https://images3.alphacoders.com/105/1057751.jpg', '8Qn_spdM5Zg', '2020-05-19', '2020-05-20', '2020-05-21'),
(3, 'Far from Home', 'Action', 'Adventure', 'Sci-fi', 'Following the events of Avengers: Endgame (2019), Spider-Man must step up to take on new threats in a world that has changed forever.', '7.5', 'https://m.media-amazon.com/images/M/MV5BMGZlNTY1ZWUtYTMzNC00ZjUyLWE0MjQtMTMxN2E3ODYxMWVmXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_SY1000_CR0,0,674,1000_AL_.jpg', 'https://images7.alphacoders.com/100/1002384.jpg', 'Nt9L1jCKGnE&t=', '2020-05-22', '2020-05-23', '2020-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_movies`
--

CREATE TABLE `upcoming_movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre1` varchar(255) NOT NULL,
  `genre2` varchar(255) NOT NULL,
  `genre3` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ratings` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming_movies`
--

INSERT INTO `upcoming_movies` (`movie_id`, `title`, `genre1`, `genre2`, `genre3`, `description`, `ratings`, `thumbnail`, `bg_image`, `trailer`) VALUES
(1, 'Birds of Prey', 'Action', 'Adventure', 'Crime', 'After splitting with the Joker, Harley Quinn joins superheroes Black Canary, Huntress and Renee Montoya to save a young girl from an evil crime lord.', '6.2', 'https://m.media-amazon.com/images/M/MV5BMzQ3NTQxMjItODBjYi00YzUzLWE1NzQtZTBlY2Y2NjZlNzkyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg', 'https://images2.alphacoders.com/105/1058868.jpg', 'x3HbbzHK5Mc'),
(2, 'Extraction', 'Action', 'Thriller', 'Adventure', 'Tyler Rake, a fearless black market mercenary, embarks on the most deadly extraction of his career.', '6.8', 'https://m.media-amazon.com/images/M/MV5BMDJiNzUwYzEtNmQ2Yy00NWE4LWEwNzctM2M0MjE0OGUxZTA3XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SY1000_CR0,0,675,1000_AL_.jpg', 'https://images3.alphacoders.com/107/1072835.jpg', 'L6P3nI6VnlY'),
(3, 'Sonic the Hedgehog', 'Action', 'Adventure', 'Comedy', 'After discovering a small, blue, fast hedgehog, a small-town police officer must help him defeat an evil genius who wants to do experiments on him.', '6.6', 'https://m.media-amazon.com/images/M/MV5BMDk5Yzc4NzMtODUwOS00NTdhLTg2MjEtZTkzZjc0ZWE2MzAwXkEyXkFqcGdeQXVyMTA3MTA4Mzgw._V1_SY1000_CR0,0,666,1000_AL_.jpg', 'https://i.redd.it/102mbkf1qdh41.jpg', 'szby7ZHLnkA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`Movie_ID`);

--
-- Indexes for table `upcoming_movies`
--
ALTER TABLE `upcoming_movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `Movie_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `upcoming_movies`
--
ALTER TABLE `upcoming_movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
