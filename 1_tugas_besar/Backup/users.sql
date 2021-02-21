-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 06:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15750941_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$E8vUPkauRpyBIXCFcT694O/9Xss/RIl.gM8.BebIj9fzBknNeZDoG'),
(2, 'admin1', '$2y$10$biMdyix1Vx0ekusUHGVTT.UCHzZEMFnxSTh7jw24F5yySgH.iaX2a'),
(3, 'hisyam', '$2y$10$nKQGXPT/cNY84yvRHWM3x.eUb5R/bG8UVtyAdLD1N1ilm6b3xV0Rm'),
(4, 'haryo', '$2y$10$N1IPSM/B8KTKkmZSScJGNOrp3QnC.qYz15BW56jqNuZ0KiH.mbBoq'),
(21, 'aa', '$2y$10$BzART5XqfF37uZ/H9ycYSOyjo6k1kDrFxAm9RD7S1e8GNLdyjH3Jm'),
(22, 'a', '$2y$10$lmdR20M2OK4BDcAn2YA8v.SVRQCAWhbinyA4O3qXwA3zqvqjgFCWa'),
(23, '', '$2y$10$LMs2RRUQxXzXiuEupLM.yuD8Z0erJIvg4suH7GEJZ5G7YQqwWuwme'),
(24, 'lina', '$2y$10$dwKXDDVJR5echqcPUAo94eHY1cCpBcOaINxPuvx4UgcI7B1ORtNAG'),
(25, 'anjay', '$2y$10$ioJCHSGTnrllVBbCclr78u.NpyDlCAAJ2gakP7/S.lyIw7/l1m1ES'),
(26, 'anjir', '$2y$10$cAJPGeodnMqt3W9jXFVse.d5hD4zBUYteIWpXR.wirbgvCLi4dVT.'),
(27, 'testing', '$2y$10$S2Ep.JuwA4ArnnvZiN5Juup4EAltX4n8ZU78Fq6JdauB65.hzOWAu'),
(28, 'navis', '$2y$10$YzbVDaM.9u7vrj2WXzVMneoMJDxJ3PMQYb/KK.aIzBZOzy90WJoAS'),
(29, 'user', '$2y$10$yMxBWvDgbh/LbN/caxD.EuYj3G2eykPlVwGQCIcGm9UmOiYqBQbDe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
