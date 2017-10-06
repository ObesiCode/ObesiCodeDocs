-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 okt 2017 om 09:37
-- Serverversie: 10.1.25-MariaDB
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `Customer_ID` int(11) NOT NULL,
  `adress` varchar(254) NOT NULL,
  `prospect` varchar(254) NOT NULL,
  `city` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `customer_name` varchar(254) NOT NULL,
  `faxnumber` varchar(254) NOT NULL,
  `phonenumber` varchar(254) NOT NULL,
  `bankaccountnumber` varchar(254) NOT NULL,
  `date_of_action` datetime NOT NULL,
  `last_action` varchar(254) NOT NULL,
  `next_action` varchar(254) NOT NULL,
  `saldo` int(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_customers`
--

INSERT INTO `tbl_customers` (`Customer_ID`, `adress`, `prospect`, `city`, `email`, `customer_name`, `faxnumber`, `phonenumber`, `bankaccountnumber`, `date_of_action`, `last_action`, `next_action`, `saldo`, `created_at`, `updated_at`) VALUES
(1, 'lepelaarstraat 20', 'jumbo', 'hank', 'maartendonkersloot@gmail.com', 'Jumbo', '24314241', '31623183611', '224141241241', '2017-10-03 00:00:00', 'registreren', 'registreren', 250, '2017-10-03 13:14:17', '2017-10-03 13:14:17'),
(2, '4273cv', 'maarten', 'hank', 'maartendonkersloot@gmail.com', 'maarten', '121212121', '232321313', '21212121', '1999-09-09 00:00:00', 'maken van offerte', 'maken van offerte', 250, '2017-10-04 16:05:26', '2017-10-04 16:05:26'),
(3, 'test', 'ter', 'test', 'test@gmail.com', 'ter', '09090', '090909', '09090', '2000-09-08 00:00:00', 'test', 'test', 250, '2017-10-05 05:41:01', '2017-10-05 05:41:01');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_log`
--

CREATE TABLE `tbl_log` (
  `Log_ID` int(254) NOT NULL,
  `log` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `User_ID` int(11) NOT NULL,
  `loginnaam` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL,
  `loginkey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_offertes`
--

CREATE TABLE `tbl_offertes` (
  `Offerte_ID` int(254) NOT NULL,
  `Customer_ID` int(254) NOT NULL,
  `Project_ID` int(254) NOT NULL,
  `date_of_action` varchar(254) NOT NULL,
  `payment_date` varchar(254) NOT NULL,
  `offerte_number` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `Project_ID` int(254) NOT NULL,
  `Customer_ID` int(254) NOT NULL,
  `projectname` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `operatingsystem` varchar(254) NOT NULL,
  `application` varchar(254) NOT NULL,
  `hardware` varchar(254) NOT NULL,
  `contactperson` varchar(254) NOT NULL,
  `last_contact` varchar(254) NOT NULL,
  `next_contact` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_projects`
--

INSERT INTO `tbl_projects` (`Project_ID`, `Customer_ID`, `projectname`, `email`, `operatingsystem`, `application`, `hardware`, `contactperson`, `last_contact`, `next_contact`, `created_at`, `updated_at`) VALUES
(1, 2, 'browser', 'maartendonkersloot@gmail.com', '5252', '42424', '52525', '2626', '2662', '27272', '2017-10-05 07:19:33', '2017-10-05 07:19:33');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexen voor tabel `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`Project_ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `Project_ID` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
