-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 03:40 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud_tbl`
--

CREATE TABLE `crud_tbl` (
  `id` int(11) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `college` varchar(20) NOT NULL,
  `contact_num` bigint(200) NOT NULL,
  `birthdate` date NOT NULL,
  `message` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud_tbl`
--

INSERT INTO `crud_tbl` (`id`, `last_name`, `first_name`, `gender`, `user_id`, `college`, `contact_num`, `birthdate`, `message`, `created_at`, `updated_at`) VALUES
(12, 'Peters', 'Adam', 'Female', '842', 'College of Education', 14019976593, '1980-10-14', 'Ea repellendus tenetur.', '2019-05-02', '0000-00-00'),
(22, 'Gonzaga', 'Alex', 'Female', '1755', 'College of Arts and ', 975, '1999-09-14', 'Hello', '2019-05-02', '0000-00-00'),
(23, 'Brown', 'Jesus', 'Male', '3763', 'College of Education', 2277318824, '2016-08-17', 'Molestiae vero velit odit neque vitae.', '2019-05-03', '0000-00-00'),
(29, 'Moreno', 'Nathaniel', 'Female', '8721', 'College of Nursing', 56385356154, '1994-07-19', 'Fugiat illo quia.', '2019-05-02', '0000-00-00'),
(30, 'Ruiz', 'Kevin', 'Female', '5891', 'College of Nursing', 34046979299, '1997-03-20', 'Nobis optio optio atque.', '2019-05-02', '0000-00-00'),
(31, 'Parker', 'James', 'Male', '1988', 'College of Business', 65193735650, '1994-12-01', 'Eveniet deleniti earum ab soluta nisi.', '2019-05-02', '0000-00-00'),
(32, 'Hamilton', 'Ryan', 'Male', '7465', 'College of Law', 72377725618, '1993-03-04', 'Et facere labore minima exercitationem.', '2019-05-02', '0000-00-00'),
(33, 'Flynn', 'Ann', 'Female', '2501', 'College of Law', 21032013969, '2023-04-25', 'Corrupti voluptatum quasi fuga numquam possimus dicta.', '2019-05-03', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `user_name` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_tbl`
--
ALTER TABLE `crud_tbl`
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
-- AUTO_INCREMENT for table `crud_tbl`
--
ALTER TABLE `crud_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
