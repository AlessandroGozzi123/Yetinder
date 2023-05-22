-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Ned 21. kvě 2023, 22:19
-- Verze serveru: 10.4.28-MariaDB
-- Verze PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `yetinder`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230514175252', '2023-05-14 17:53:09', 98),
('DoctrineMigrations\\Version20230515141321', '2023-05-15 14:13:29', 109);

-- --------------------------------------------------------

--
-- Struktura tabulky `yeti`
--

CREATE TABLE `yeti` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bydliste` varchar(255) NOT NULL,
  `vek` int(11) NOT NULL,
  `vyska` int(11) NOT NULL,
  `hodnoceni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `yeti`
--

INSERT INTO `yeti` (`id`, `name`, `bydliste`, `vek`, `vyska`, `hodnoceni`) VALUES
(1, 'Karel', 'Les', 60, 200, 15),
(2, 'Pepa', 'Les', 80, 210, 12),
(3, 'Sully', 'Vrchlabí', 80, 205, 15),
(4, 'Mike', 'Vrchlabí', 80, 218, 9),
(5, 'Honza', 'Lánov', 90, 250, 11),
(6, 'Yettis', 'Les', 204, 234, 17),
(7, 'Michal', 'Vítkovice', 100, 205, 12),
(8, 'Pavel', 'Les', 204, 200, 11),
(9, 'Ondřej', 'Les', 153, 241, 15),
(10, 'Martin', 'Les', 124, 184, 15),
(11, 'Felix', 'Les', 152, 165, 8),
(12, 'Yelda', 'Les', 187, 2, 12);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexy pro tabulku `yeti`
--
ALTER TABLE `yeti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `yeti`
--
ALTER TABLE `yeti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
