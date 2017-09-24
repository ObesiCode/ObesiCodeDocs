-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 sep 2017 om 20:02
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
-- Database: `project barroc it`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_afdeling`
--

CREATE TABLE `tbl_afdeling` (
  `login_name` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL,
  `afdeling` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_development`
--

CREATE TABLE `tbl_development` (
  `Project_Id` int(11) NOT NULL,
  `Client_ID` int(11) NOT NULL,
  `Maintance` tinyint(1) NOT NULL,
  `Open_projects` int(11) NOT NULL,
  `Applications` varchar(9999) NOT NULL,
  `Hardware` varchar(9999) NOT NULL,
  `Operating_System` varchar(9999) NOT NULL,
  `Last_contact_customer` varchar(9999) NOT NULL,
  `Internal contact person` varchar(9999) NOT NULL,
  `Next_Contact_Customer` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_finance`
--

CREATE TABLE `tbl_finance` (
  `offerte_id` int(11) NOT NULL,
  `offer_number` int(255) NOT NULL,
  `date_of_action` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `klant_id` int(255) NOT NULL,
  `klant_name` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `telefoonnummer` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `project_id` int(254) NOT NULL,
  `klant_id` int(254) NOT NULL,
  `offer_number` int(254) NOT NULL,
  `active` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `offer_number` int(255) NOT NULL,
  `offer-status` varchar(254) NOT NULL,
  `prospect` bit(1) NOT NULL,
  `date_of_action` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_contact_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `next_action` varchar(254) NOT NULL,
  `sales_precentage` decimal(65,0) NOT NULL DEFAULT '0',
  `creditworthy` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `klant_id` int(11) NOT NULL,
  `krediet_limiet` int(254) NOT NULL,
  `actief` bit(1) NOT NULL,
  `email` varchar(254) NOT NULL,
  `telefoon` varchar(254) NOT NULL,
  `location` varchar(254) NOT NULL,
  `fax_number` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tbl_afdeling`
--
ALTER TABLE `tbl_afdeling`
  ADD PRIMARY KEY (`afdeling`);

--
-- Indexen voor tabel `tbl_development`
--
ALTER TABLE `tbl_development`
  ADD PRIMARY KEY (`Project_Id`);

--
-- Indexen voor tabel `tbl_finance`
--
ALTER TABLE `tbl_finance`
  ADD PRIMARY KEY (`offerte_id`);

--
-- Indexen voor tabel `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexen voor tabel `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`offer_number`);

--
-- Indexen voor tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`klant_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_development`
--
ALTER TABLE `tbl_development`
  MODIFY `Project_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_finance`
--
ALTER TABLE `tbl_finance`
  MODIFY `offerte_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `offer_number` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `klant_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
