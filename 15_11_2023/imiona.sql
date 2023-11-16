-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Lis 2023, 15:33
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `imiona`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dane`
--

CREATE TABLE `dane` (
  `ID` int(11) NOT NULL,
  `imie` varchar(25) DEFAULT NULL,
  `nazwisko` varchar(30) DEFAULT NULL,
  `dataUrodzenia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `dane`
--

INSERT INTO `dane` (`ID`, `imie`, `nazwisko`, `dataUrodzenia`) VALUES
(1, 'Maks', 'Zarzycki', '2004-10-10'),
(2, 'Adrian', 'Włodarczyk', '2004-08-04'),
(3, 'Bartosz', 'Jurek', '2004-08-01'),
(4, 'Jakub', 'Terelak', '2004-04-27'),
(5, 'Adam', 'Pasternak', '2004-07-15');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dane_klientow`
--

CREATE TABLE `dane_klientow` (
  `ID` int(11) NOT NULL,
  `dataUr` year(4) DEFAULT NULL,
  `plec` varchar(20) DEFAULT NULL,
  `uwagi` varchar(100) DEFAULT NULL,
  `zgoda` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `dane_klientow`
--

INSERT INTO `dane_klientow` (`ID`, `dataUr`, `plec`, `uwagi`, `zgoda`) VALUES
(1, 2004, 'mężczyzna', 'Brak uwag', 'Tak'),
(2, 2004, 'mężczyzna', 'Brak', 'Tak'),
(3, 1994, 'kobieta', 'Strona jest prawie pusta pacanie. dodaj w końcu jakiś css i tym podobne... Zrób z tym coś szybkooooo', 'Nie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `ID` int(11) NOT NULL,
  `nazwisko` varchar(30) DEFAULT NULL,
  `imie` varchar(30) DEFAULT NULL,
  `ocena` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `oceny`
--

INSERT INTO `oceny` (`ID`, `nazwisko`, `imie`, `ocena`) VALUES
(1, 'Pasternak', 'Adam', 2),
(2, 'Pasternak', 'Adam', 2),
(3, 'Pasternak', 'Adam', 2),
(4, 'Pasternak', 'Adam', 3),
(5, 'Pasternak', 'Adam', 3),
(6, 'Ziembicki', 'Aleksander', 5),
(7, 'Ziembicki', 'Aleksander', 6),
(8, 'Ziembicki', 'Aleksander', 5),
(9, 'Zarzycki', 'Maksymilian', 6),
(10, 'Zapała', 'Jakub', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dane`
--
ALTER TABLE `dane`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `dane_klientow`
--
ALTER TABLE `dane_klientow`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `dane`
--
ALTER TABLE `dane`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `dane_klientow`
--
ALTER TABLE `dane_klientow`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
