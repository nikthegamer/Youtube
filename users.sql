-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 09. apr 2023 ob 22.05
-- Različica strežnika: 10.4.27-MariaDB
-- Različica PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `users`
--

-- --------------------------------------------------------

--
-- Struktura tabele `comments`
--

CREATE TABLE `comments` (
  `idComment` int(11) NOT NULL,
  `Comment` varchar(45) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idUporabnik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Odloži podatke za tabelo `comments`
--

INSERT INTO `comments` (`idComment`, `Comment`, `Date`, `idUporabnik`) VALUES
(1, 'Comment...', '2023-04-09 18:26:58', 0),
(2, 'Comment...', '2023-04-09 18:27:13', 0),
(3, 'Comment...', '2023-04-09 18:34:18', 0),
(4, 'Comment...', '2023-04-09 18:34:25', 0),
(5, 'Comment...', '2023-04-09 18:35:09', 0),
(6, 'Comment...', '2023-04-09 18:37:27', 0),
(7, 'Comment...', '2023-04-09 18:37:31', 0),
(8, 'Comment...', '2023-04-09 18:37:33', 0),
(9, 'Comment...', '2023-04-09 18:38:27', 0),
(10, 'Comment...', '2023-04-09 18:38:30', 0),
(11, 'Comment...', '2023-04-09 18:38:31', 0),
(12, 'Comment...', '2023-04-09 18:38:33', 0),
(13, 'Comment...', '2023-04-09 18:41:53', 0),
(14, 'Comment...', '2023-04-09 18:44:57', 0),
(15, 'Comment...', '2023-04-09 18:47:03', 0),
(16, 'Comment...', '2023-04-09 18:48:28', 0),
(17, 'Comment...', '2023-04-09 18:48:40', 0),
(19, 'jajca me srbijo :(', '2023-04-09 18:49:02', 0),
(20, 'RTZHIOUBNRTGHFONIB', '2023-04-09 19:39:52', 0),
(21, 'RTZHIOUBNRTGHFONIB', '2023-04-09 19:42:20', 0),
(22, 'jaz vem veliko', '2023-04-09 19:42:30', 0),
(26, 'jajca', '2023-04-09 19:58:31', 8),
(27, 'Comment...', '2023-04-09 19:58:33', 8),
(28, 'dejan čurk je zakon in mi bo dal petico <3', '2023-04-09 19:58:56', 2),
(29, 'se strinjam z filipom vrabcem!!!', '2023-04-09 20:03:01', 7);

-- --------------------------------------------------------

--
-- Struktura tabele `uporabniki`
--

CREATE TABLE `uporabniki` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Odloži podatke za tabelo `uporabniki`
--

INSERT INTO `uporabniki` (`id`, `username`, `password`, `email`) VALUES
(1, 'janez', 'jajca', 'abc'),
(2, 'filip vrabec', 'mojamami123', 'filip.vrabec@hotmail.com'),
(7, 'janez', 'janez', 'janez.veliki@gmail.com'),
(8, 'tim', 'nahtigal', 'timotej@gmail.com');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `idUporabnik` (`idUporabnik`);

--
-- Indeksi tabele `uporabniki`
--
ALTER TABLE `uporabniki`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `comments`
--
ALTER TABLE `comments`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT tabele `uporabniki`
--
ALTER TABLE `uporabniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Omejitve tabel za povzetek stanja
--

--
-- Omejitve za tabelo `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`idUporabnik`) REFERENCES `uporabniki` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
