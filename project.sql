-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 okt 2017 om 09:11
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
(1, '41252', 'Richie Dickens', 'Cassieshire', 'kfahey@dickinson.com', 'Fisher PLC', '5885706549', '8877', '5362479178919590', '1970-06-05 13:48:26', 'Ohio', 'Maine', -773, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(2, '65060-7411', 'Judson Jacobi II', 'Lake Geo', 'zora70@will.com', 'Bode Ltd', '5406465821', '7741', '4716987074204269', '1991-08-31 01:48:41', 'Mississippi', 'Indiana', -952, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(3, '16499-2670', 'Jaiden Runolfsdottir', 'East Kattieland', 'ekuphal@spencer.com', 'Doyle and Sons', '3521358593', '3251', '5289464679172857', '1979-03-31 01:05:05', 'California', 'Maine', -318, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(4, '32970', 'Kavon Ritchie', 'Harveyburgh', 'germaine.stiedemann@legros.com', 'Wehner Inc', '0548071845', '5692', '5446323570697638', '2002-02-28 04:00:31', 'New Jersey', 'South Dakota', 146, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(5, '08610', 'Mr. Darren Rosenbaum', 'East Aprilport', 'vbayer@schulist.com', 'Paucek PLC', '8976393023', '7427', '4539207671586371', '2014-08-22 04:42:23', 'South Dakota', 'West Virginia', 4556, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(6, '49054', 'Eda Kub V', 'North Nicolaburgh', 'crist.alisa@walter.com', 'Hettinger LLC', '4336526230', '6141', '5232699606649349', '2010-05-06 03:35:00', 'Rhode Island', 'Ohio', 2832, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(7, '35409', 'Unique Grady', 'Lake Florenceton', 'ottis67@hartmann.com', 'Funk LLC', '3032142024', '5514', '2583153059634087', '2001-08-28 01:51:06', 'Nebraska', 'Utah', 2938, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(8, '88858', 'Kyle Littel', 'Binsstad', 'reid.torp@adams.info', 'Schiller, Gibson and Hyatt', '2377418066', '2966', '347464228602900', '1988-03-06 08:11:44', 'Idaho', 'South Carolina', -168, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(9, '25061', 'Violette Klocko', 'Budton', 'jerel.zulauf@daugherty.com', 'Grady, Boyer and Padberg', '8275130239', '4172', '4465457457043', '2006-06-14 21:51:46', 'Washington', 'Montana', 19, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(10, '27723-6733', 'Sonia Zulauf', 'Port Andreanemouth', 'earlene18@auer.com', 'Kuphal, Paucek and Kozey', '4499553695', '7777', '5327755497084909', '2015-12-13 14:12:47', 'New York', 'Oklahoma', 1216, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(11, '23515', 'Jean Wehner', 'East Arden', 'dejah37@prohaska.com', 'Jacobi LLC', '2043800663', '8401', '5482336354598769', '1978-09-29 15:07:25', 'West Virginia', 'Arkansas', -806, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(12, '93350-5958', 'Garry Padberg', 'Baumbachchester', 'omayert@beahan.com', 'Hackett, Miller and Ledner', '1347088334', '4784', '348986429952733', '2010-06-24 15:01:18', 'Washington', 'Ohio', 3019, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(13, '60921', 'Margaret McKenzie V', 'New Percyfort', 'wolf.darryl@von.com', 'Bosco, Reichel and Abshire', '3845191112', '4022', '5297004782893203', '1979-02-09 21:17:05', 'New Hampshire', 'Minnesota', 3061, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(14, '22267-0783', 'Trent Pollich', 'South Maybelle', 'rhyatt@bernier.com', 'Volkman, Stroman and Bosco', '8121755271', '2337', '4556993970422', '1998-04-12 17:44:21', 'South Carolina', 'South Carolina', 1246, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(15, '35995-6370', 'Madie Windler', 'Andresshire', 'reuben.brekke@wyman.com', 'Bechtelar-Ernser', '5857022053', '4731', '2540461592350323', '1987-08-24 19:32:24', 'New Mexico', 'South Dakota', -99, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(16, '35305-6211', 'Ms. Macy Farrell MD', 'Rolfsontown', 'mariana13@brakus.info', 'Spinka and Sons', '8207774630', '7215', '6011082235175827', '1973-01-26 00:08:03', 'Arizona', 'Washington', 1115, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(17, '38419-1918', 'Dr. Harley Jacobi PhD', 'North Tremaine', 'joseph54@reichert.com', 'Lang-Franecki', '1826963219', '5251', '2720429633294927', '1989-09-11 14:07:27', 'Michigan', 'District of Columbia', 1819, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(18, '52410', 'Delphine O\'Kon', 'Kerlukeland', 'pierce51@lind.com', 'Hintz LLC', '1267577606', '6958', '345586146600129', '1995-08-27 21:42:56', 'North Carolina', 'Michigan', 4429, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(19, '50946', 'Dr. Diego Parker DVM', 'North Dorabury', 'lwunsch@krajcik.com', 'Weimann, Roob and Hudson', '7525963827', '5670', '5396458987886497', '2013-08-25 13:28:45', 'Pennsylvania', 'Alaska', -441, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(20, '07971-8723', 'Arlene Nitzsche', 'Lake Ninashire', 'qkshlerin@schulist.biz', 'Hermiston Group', '8061925907', '3630', '4929031788207', '1971-06-23 20:13:51', 'Washington', 'Ohio', 2058, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(21, '11673', 'Liam Willms', 'Xzavierport', 'kuphal.amos@dicki.info', 'Koch Group', '1558531785', '3779', '372711292484120', '1974-10-06 06:13:54', 'South Dakota', 'Michigan', -382, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(22, '93617-8608', 'Ms. Pattie Eichmann PhD', 'North Carli', 'zabshire@erdman.org', 'Wiza-Swaniawski', '7965769948', '3900', '2623866177584726', '1981-11-07 22:18:59', 'Iowa', 'Nevada', 1449, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(23, '46901', 'Terry Legros', 'Monicaville', 'ottilie.gulgowski@swift.org', 'Huels, Terry and Reinger', '8375776777', '7213', '5303648572993821', '1983-06-07 03:42:48', 'Alaska', 'Nevada', 3669, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(24, '99540', 'Katarina Pfannerstill V', 'Port Celiaville', 'sjacobi@adams.info', 'Zieme LLC', '2495289606', '6678', '2660657952968703', '2000-03-14 16:56:13', 'Iowa', 'Pennsylvania', 1776, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(25, '91792', 'Otho Mertz', 'Elouisefort', 'alta40@brown.info', 'Miller-Hamill', '2562735501', '5911', '4916704690968534', '1972-04-08 11:11:53', 'Florida', 'Texas', 2603, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(26, '08230-8015', 'Berenice Crooks', 'Port Obieville', 'nader.werner@wuckert.com', 'McDermott-Rempel', '9774776690', '8533', '376795610406655', '2003-07-07 03:59:11', 'Alaska', 'Oregon', 1596, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(27, '50177', 'Prof. Pinkie Connelly DVM', 'Orintown', 'rgutmann@boyer.org', 'Mosciski, D\'Amore and Treutel', '4536578730', '5109', '5410455379514275', '2009-09-28 14:31:11', 'Michigan', 'Florida', 1241, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(28, '33340-2633', 'Marjorie Block', 'New Carleyfort', 'duane68@bailey.com', 'O\'Kon Inc', '0679188460', '6886', '348144706484067', '1990-08-05 09:01:34', 'Wyoming', 'Arizona', 4571, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(29, '20796-5017', 'Monty Wuckert', 'West Hermannfurt', 'torp.deangelo@dare.info', 'Wyman Group', '211187082X', '1126', '2221473537474296', '1984-01-05 19:06:20', 'New Jersey', 'Louisiana', 3414, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(30, '16017-5995', 'Miss Bethel Lubowitz', 'Lizethview', 'bbartell@kovacek.com', 'Kautzer Ltd', '4270876239', '3467', '4916252730566520', '2000-05-19 10:48:44', 'South Dakota', 'District of Columbia', 324, '2017-10-08 16:04:04', '2017-10-08 16:04:04'),
(31, '4273cv', 'harry', 'hank', 'hank@gmail.com', 'maarten', '23421424', '31623183611444', '235325325', '2000-08-09 00:00:00', 'aanmaken account', 'aanmaken project', -10, '2017-10-08 16:07:05', '2017-10-08 16:07:05'),
(32, 'sepudytu', 'Whoopi Russell', 'Sint labore cupidatat ut exercitationem aperiam dolorum.', 'piwu@yahoo.com', 'Cedric', '88', '+972-31-6322152', '28', '1999-06-06 00:00:00', 'Ipsam pariatur? Aperiam non dolore reprehenderit velit recusandae. Praesentium mollit.', 'Qui in sed nisi culpa.', 68, '2017-10-08 16:09:49', '2017-10-08 16:09:49'),
(33, 'jofocumedu', 'Gail Mccoy', 'Enim vitae praesentium libero corporis neque quos in.', 'patyvo@gmail.com', 'Laith', '49', '+317-38-2840358', '77', '2006-03-01 00:00:00', 'Commodo assumenda mollit ullam sint, nostrum architecto neque laudantium, minima eum eos qui sunt, nesciunt, aut.', 'Quas harum exercitation quasi eu ea odio quo sed occaecat velit, dolor.', 33, '2017-10-08 16:11:59', '2017-10-08 16:11:59');

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

--
-- Gegevens worden geëxporteerd voor tabel `tbl_log`
--

INSERT INTO `tbl_log` (`Log_ID`, `log`, `created_at`, `updated_at`) VALUES
(1, 'Autem mollitia architecto doloremque ut maxime aut', '2017-10-08 18:11:59', '2017-10-08 16:11:59');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `User_ID` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL,
  `remember_token` varchar(254) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_offertes`
--

CREATE TABLE `tbl_offertes` (
  `Offerte_ID` int(254) NOT NULL,
  `Customer_ID` int(254) NOT NULL,
  `Project_ID` int(254) NOT NULL,
  `payement_date` varchar(254) NOT NULL,
  `date_of_action` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `offerte_number` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_offertes`
--

INSERT INTO `tbl_offertes` (`Offerte_ID`, `Customer_ID`, `Project_ID`, `payement_date`, `date_of_action`, `created_at`, `offerte_number`, `email`, `updated_at`) VALUES
(1, 1, 2, 'test', 'test', '2017-10-08 06:57:51', 'test', 'test', '0000-00-00 00:00:00'),
(2, 1, 3, 'test', 'test', '2017-10-08 06:59:26', 'test', 'test', '0000-00-00 00:00:00');

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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_projects`
--

INSERT INTO `tbl_projects` (`Project_ID`, `Customer_ID`, `projectname`, `email`, `operatingsystem`, `application`, `hardware`, `contactperson`, `last_contact`, `next_contact`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 1, 'Cleora Maggio PhD', 'watson38@kertzmann.com', 'windows', 'qbalistreri', 'pc', 'Hilario Skiles MD', 'Montana', 'Iowa', '2017-10-08 18:05:21', '2017-10-08 16:05:21', 2),
(2, 2, 'Dr. Dovie Haley DDS', 'mlittle@hotmail.com', 'windows', 'caroline46', 'pc', 'Tom Romaguera DDS', 'Montana', 'Hawaii', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(3, 3, 'Ewald Miller', 'kole54@yahoo.com', 'windows', 'bgottlieb', 'pc', 'Mr. Godfrey Langworth IV', 'Indiana', 'Delaware', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(4, 4, 'Daphnee Bernier', 'myron.barton@yahoo.com', 'windows', 'kamille.hermiston', 'pc', 'Roslyn Larkin', 'Oregon', 'New Jersey', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(5, 5, 'Prof. Austen Heller MD', 'juvenal14@streich.net', 'windows', 'michaela.hills', 'pc', 'Diamond Marvin Sr.', 'Washington', 'Hawaii', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(6, 6, 'Rosario Mohr', 'xbeatty@pacocha.info', 'windows', 'jakubowski.alexanne', 'pc', 'Montana Batz', 'Iowa', 'Hawaii', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(7, 7, 'Elias Jaskolski', 'merle14@bernier.biz', 'windows', 'garett.boyer', 'pc', 'Destany Schaden', 'New York', 'District of Columbia', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(8, 8, 'Harry Hackett', 'yasmin.rodriguez@hotmail.com', 'windows', 'candice68', 'pc', 'Mrs. Dannie Bauch', 'Idaho', 'Alabama', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(9, 9, 'Clovis Boyer', 'nikki.gibson@gmail.com', 'windows', 'jsteuber', 'pc', 'Aubrey Leuschke', 'New York', 'North Dakota', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(10, 10, 'Johnpaul Jacobson', 'nicolas.madalyn@gislason.biz', 'windows', 'dillon75', 'pc', 'Mrs. Carlotta Johnson III', 'Tennessee', 'North Dakota', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(11, 11, 'Melisa Collier II', 'elvera21@yahoo.com', 'windows', 'ehirthe', 'pc', 'Sarah Schultz', 'Ohio', 'Pennsylvania', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(12, 12, 'Ms. Patricia Pollich', 'bria.gorczany@orn.biz', 'windows', 'ward.amber', 'pc', 'Mrs. Aliyah Effertz', 'Arkansas', 'North Carolina', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(13, 13, 'Myrtie Botsford', 'gisselle.marquardt@zboncak.net', 'windows', 'rupert.ledner', 'pc', 'Sophia Hettinger', 'Indiana', 'Mississippi', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(14, 14, 'Eugenia Powlowski', 'johnson.rashad@yahoo.com', 'windows', 'leora16', 'pc', 'Reuben Spencer DVM', 'Maryland', 'Alaska', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(15, 15, 'Virginia Schumm', 'heaney.ophelia@mckenzie.com', 'windows', 'gbernier', 'pc', 'Greyson Runte', 'Oregon', 'Arizona', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(16, 16, 'Rebecca Zboncak DVM', 'akerluke@gmail.com', 'windows', 'robyn.halvorson', 'pc', 'Orpha Mann', 'Wyoming', 'Delaware', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(17, 17, 'Barney Kuhic MD', 'alfreda.reilly@carroll.org', 'windows', 'jerrod29', 'pc', 'Dr. Bernice Weissnat II', 'Michigan', 'Minnesota', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(18, 18, 'Faustino Walter', 'lthompson@gmail.com', 'windows', 'funk.jason', 'pc', 'Leslie Morissette', 'Washington', 'South Dakota', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(19, 19, 'Stephany Kautzer', 'marjory.murazik@hotmail.com', 'windows', 'winifred58', 'pc', 'Abbigail Jacobi III', 'Montana', 'Wyoming', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(20, 20, 'Isabella Altenwerth', 'jasmin.little@huel.org', 'windows', 'janis10', 'pc', 'Mariana Emard', 'Rhode Island', 'Oklahoma', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(21, 21, 'Davin Olson V', 'mervin09@gmail.com', 'windows', 'katrine.fadel', 'pc', 'Ms. Alysa Streich', 'Maryland', 'Alaska', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(22, 22, 'Karelle Marvin', 'ibeatty@crona.net', 'windows', 'barrett.schinner', 'pc', 'Nash Ebert V', 'South Carolina', 'Vermont', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(23, 23, 'Dean Labadie', 'epollich@gmail.com', 'windows', 'dannie16', 'pc', 'Francesca McKenzie', 'Minnesota', 'Tennessee', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(24, 24, 'Dr. Kassandra McDermott', 'valentina.hilpert@gmail.com', 'windows', 'oda44', 'pc', 'Clay Ward', 'Wyoming', 'Massachusetts', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(25, 25, 'Ms. Winnifred Upton', 'friesen.louie@hotmail.com', 'windows', 'gislason.hayley', 'pc', 'Howard Cassin', 'North Dakota', 'New Jersey', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(26, 26, 'Dr. Mohammad Effertz', 'felipe60@hotmail.com', 'windows', 'lueilwitz.janae', 'pc', 'Janis Schumm', 'Washington', 'Iowa', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(27, 27, 'Lorena Ziemann', 'ullrich.nelle@hotmail.com', 'windows', 'katelynn31', 'pc', 'Quincy Brown', 'Washington', 'California', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(28, 28, 'Enrique Hilpert DVM', 'friesen.destini@gmail.com', 'windows', 'yratke', 'pc', 'Eliane Botsford II', 'Vermont', 'Nevada', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(29, 29, 'William Schneider', 'cole.carroll@hotmail.com', 'windows', 'wgreen', 'pc', 'Odie Murazik', 'Iowa', 'West Virginia', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 1),
(30, 30, 'Clara Sporer', 'schroeder.lenore@gmail.com', 'windows', 'shammes', 'pc', 'Miss Filomena Jacobson', 'Iowa', 'Washington', '2017-10-08 16:04:04', '2017-10-08 16:04:04', 0),
(31, 1, 'Prof. Sanford Walter', 'destiney.bartoletti@hotmail.com', 'windows', 'renner.clara', 'pc', 'Marcia Fisher', 'Georgia', 'Michigan', '2017-10-08 18:05:30', '2017-10-08 16:05:30', 2),
(32, 2, 'Dr. Erick Goyette', 'harber.leora@nitzsche.com', 'windows', 'vernie.willms', 'pc', 'Kameron Kshlerin', 'Virginia', 'Hawaii', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(33, 3, 'Mrs. Lilla Pfannerstill', 'qkreiger@yahoo.com', 'windows', 'hagenes.giovanny', 'pc', 'Dr. Brigitte Cremin Jr.', 'New Mexico', 'Oklahoma', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 1),
(34, 4, 'Jason Morar', 'sibyl.kulas@yahoo.com', 'windows', 'orin.deckow', 'pc', 'Letitia Lueilwitz', 'Virginia', 'Louisiana', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(35, 5, 'Prof. Idell Batz', 'ernest34@barton.com', 'windows', 'braden11', 'pc', 'Fredrick Weimann', 'New Mexico', 'New Mexico', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(36, 6, 'Janice Price', 'mbailey@stoltenberg.com', 'windows', 'dovie.paucek', 'pc', 'Celestine Shields', 'Montana', 'Georgia', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 1),
(37, 7, 'Dennis Pouros', 'mdouglas@shanahan.com', 'windows', 'keebler.bruce', 'pc', 'Maurice Wolff', 'Mississippi', 'Delaware', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(38, 8, 'Destini Eichmann', 'konopelski.alba@yahoo.com', 'windows', 'trantow.minnie', 'pc', 'Gilda Schulist III', 'New Mexico', 'Alaska', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 1),
(39, 9, 'Coralie Grady', 'sporer.gardner@rau.info', 'windows', 'kamron.johnston', 'pc', 'Adelia O\'Hara', 'Hawaii', 'Ohio', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 1),
(40, 10, 'Wallace Haag', 'uriah.koss@bosco.com', 'windows', 'brekke.alejandrin', 'pc', 'Miss Yoshiko Anderson III', 'Mississippi', 'North Carolina', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(41, 11, 'Itzel Parisian', 'nstanton@yahoo.com', 'windows', 'fatima15', 'pc', 'Vicky Price', 'Alaska', 'Nebraska', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 1),
(42, 12, 'Prof. Mose Jacobs', 'hudson99@ondricka.biz', 'windows', 'zhalvorson', 'pc', 'Zoie Boyer', 'Hawaii', 'South Dakota', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 1),
(43, 13, 'Prof. Donald Bergstrom DVM', 'boris98@pfeffer.com', 'windows', 'hlindgren', 'pc', 'Dr. Terry Beer', 'Oklahoma', 'West Virginia', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(44, 14, 'Rowan Borer', 'mckenzie.libby@hotmail.com', 'windows', 'ckutch', 'pc', 'Ona Spinka', 'Ohio', 'Tennessee', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(45, 15, 'Prof. Maximillian Hoeger', 'rickey.schneider@johnston.com', 'windows', 'hackett.ruby', 'pc', 'Dr. Marcelina McLaughlin', 'Mississippi', 'Massachusetts', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(46, 16, 'Nichole Leuschke I', 'caesar.grady@gmail.com', 'windows', 'larson.leonie', 'pc', 'Bobbie Rempel', 'South Dakota', 'Maryland', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(47, 17, 'Prof. Violette Yost', 'trantow.anissa@hilll.biz', 'windows', 'elyssa.ankunding', 'pc', 'Hayley Shields', 'Hawaii', 'Arizona', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 1),
(48, 18, 'Margaretta Kub PhD', 'irunolfsdottir@hotmail.com', 'windows', 'mosciski.riley', 'pc', 'Dalton Price II', 'Mississippi', 'Oklahoma', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 1),
(49, 19, 'Miss Florine Prohaska', 'nkuhic@mitchell.org', 'windows', 'schuppe.freddie', 'pc', 'Mrs. Rosie Lynch', 'Texas', 'Virginia', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(50, 20, 'Heloise Watsica', 'reggie.strosin@hotmail.com', 'windows', 'lebsack.gust', 'pc', 'Jalen Collins', 'Washington', 'North Dakota', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 1),
(51, 21, 'Thalia Muller', 'ida39@kertzmann.info', 'windows', 'neichmann', 'pc', 'Melba Moen', 'Michigan', 'Wisconsin', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(52, 22, 'Dr. Robyn Schaden III', 'will.adela@ankunding.com', 'windows', 'precious.rodriguez', 'pc', 'Colleen Wilkinson', 'South Dakota', 'South Carolina', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 1),
(53, 23, 'Meagan Hand', 'abshire.herminio@gibson.net', 'windows', 'hintz.everardo', 'pc', 'Myriam Kiehn', 'Maryland', 'New Jersey', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(54, 24, 'Tyrel Bernier', 'xgreen@macejkovic.info', 'windows', 'rohan.christ', 'pc', 'Sibyl Pollich', 'Pennsylvania', 'Iowa', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 1),
(55, 25, 'Jackeline King', 'colten11@yahoo.com', 'windows', 'hessel.adolfo', 'pc', 'Jarod McGlynn', 'Massachusetts', 'South Dakota', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(56, 26, 'Alexane Harvey PhD', 'schowalter.marcelina@hotmail.com', 'windows', 'janie.mante', 'pc', 'Justen Bins', 'Oregon', 'Utah', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(57, 27, 'Mrs. Octavia Borer', 'yschroeder@yahoo.com', 'windows', 'smitham.tiana', 'pc', 'Gabriel Nitzsche', 'Rhode Island', 'Wyoming', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(58, 28, 'Dayna Brown', 'tobin00@schumm.com', 'windows', 'baylee.buckridge', 'pc', 'Mrs. Anne Renner PhD', 'Colorado', 'Delaware', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(59, 29, 'Dane Wiza V', 'rruecker@hirthe.com', 'windows', 'eino03', 'pc', 'Prof. Elva Funk IV', 'New Mexico', 'Massachusetts', '2017-10-08 16:04:45', '2017-10-08 16:04:45', 0),
(60, 30, 'Faye Wyman', 'batz.kaden@rippin.com', 'windows', 'zshields', 'pc', 'Junior Green', 'Utah', 'New Hampshire', '2017-10-08 18:05:44', '2017-10-08 16:05:44', 2),
(61, 1, 'Janiemmm', 'wellington33@champlin.com', 'windows', 'lizeth97', 'pc', 'Dr. Ryder Donnelly Sr.', 'Connecticut', 'Washington', '2017-10-08 18:13:39', '2017-10-08 16:13:39', 1),
(62, 2, 'Prof. Brayan Lubowitz', 'gardner37@gmail.com', 'windows', 'lois58', 'pc', 'London Gleichner', 'Wyoming', 'South Carolina', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(63, 3, 'Annabel Trantow', 'laurence.skiles@hotmail.com', 'windows', 'shanahan.flavie', 'pc', 'Cayla Ryan', 'Pennsylvania', 'Minnesota', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(64, 4, 'Mrs. Mathilde Heathcote', 'lillie43@goyette.biz', 'windows', 'stuart.harris', 'pc', 'Kole Thompson', 'Wyoming', 'California', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(65, 5, 'Osvaldo Boyer', 'maximilian71@larkin.org', 'windows', 'srice', 'pc', 'Bruce Rodriguez', 'Louisiana', 'Utah', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(66, 6, 'Mr. Trace Schuppe IV', 'magnus.friesen@yahoo.com', 'windows', 'lkemmer', 'pc', 'Dr. Zackary O\'Hara', 'Pennsylvania', 'Rhode Island', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(67, 7, 'Marietta Watsica', 'astrid62@keebler.com', 'windows', 'alberto.cummings', 'pc', 'Prof. Casper Hegmann V', 'Pennsylvania', 'Michigan', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(68, 8, 'Darrin Heathcote', 'ian.jacobson@hotmail.com', 'windows', 'ckirlin', 'pc', 'Waylon Witting I', 'Maine', 'Connecticut', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(69, 9, 'Marjolaine Champlin Jr.', 'zieme.fabiola@muller.info', 'windows', 'jkuhlman', 'pc', 'Brown Walsh', 'Massachusetts', 'Alaska', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(70, 10, 'Ethel Streich', 'mario.marquardt@gmail.com', 'windows', 'twila.rau', 'pc', 'Santa Boyer', 'Delaware', 'Wyoming', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(71, 11, 'Mario Predovic', 'neoma63@hane.com', 'windows', 'aufderhar.sienna', 'pc', 'Wyatt Lynch', 'Idaho', 'Minnesota', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(72, 12, 'Vinnie Considine', 'joanne.turcotte@leannon.com', 'windows', 'immanuel.kozey', 'pc', 'Mr. Einar Schaefer I', 'Pennsylvania', 'New Hampshire', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(73, 13, 'Gunner Kuphal III', 'ynitzsche@hotmail.com', 'windows', 'aheidenreich', 'pc', 'Sydnie Casper', 'Virginia', 'South Dakota', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(74, 14, 'Tressie Zieme I', 'aufderhar.edgar@hotmail.com', 'windows', 'shany.osinski', 'pc', 'Maggie Langosh', 'Ohio', 'Wisconsin', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(75, 15, 'Eriberto Abbott', 'rath.kaela@schinner.biz', 'windows', 'dean81', 'pc', 'Brigitte Reichel', 'Texas', 'Washington', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(76, 16, 'Amber Konopelski', 'mertz.hector@welch.com', 'windows', 'avolkman', 'pc', 'Miss Mina Kub', 'Arizona', 'Delaware', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(77, 17, 'Evan Johns', 'winfield.dibbert@gmail.com', 'windows', 'sprohaska', 'pc', 'Marianne Schimmel', 'Illinois', 'Georgia', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(78, 18, 'Ms. Elva Homenick', 'jaleel.daniel@hotmail.com', 'windows', 'issac.raynor', 'pc', 'Bobbie Hackett', 'Arkansas', 'Missouri', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(79, 19, 'Elmore Tillman', 'hlesch@becker.com', 'windows', 'reichert.judge', 'pc', 'Mara Jerde', 'South Dakota', 'Kansas', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(80, 20, 'Felipe Mohr DDS', 'catalina.champlin@hotmail.com', 'windows', 'muller.wendy', 'pc', 'Aurelio Bergnaum', 'Pennsylvania', 'Texas', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(81, 21, 'Prof. Greyson Pollich DVM', 'gulgowski.camille@mcdermott.com', 'windows', 'braun.newton', 'pc', 'Anastacio Aufderhar', 'Illinois', 'Kentucky', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(82, 22, 'Ms. Camylle Stiedemann', 'wmurazik@dubuque.com', 'windows', 'mjacobson', 'pc', 'Israel Gutmann', 'Delaware', 'Arizona', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(83, 23, 'Waino Weber', 'brent47@gmail.com', 'windows', 'lyric.satterfield', 'pc', 'Prof. Tatum Kutch Jr.', 'Nebraska', 'Washington', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(84, 24, 'Reymundo Schmidt', 'okon.jesse@hudson.com', 'windows', 'evangeline44', 'pc', 'Diego Hahn', 'Nevada', 'South Carolina', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(85, 25, 'Judson Veum Sr.', 'carroll.michelle@langworth.com', 'windows', 'feeney.nathanael', 'pc', 'Ricky Collins', 'Hawaii', 'North Carolina', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(86, 26, 'Margret Ratke', 'bruen.carolina@bosco.com', 'windows', 'dheathcote', 'pc', 'Cleta Botsford', 'Idaho', 'New Mexico', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(87, 27, 'Juliana Quitzon', 'bradtke.jeremy@hotmail.com', 'windows', 'adell.welch', 'pc', 'Walton Muller', 'Texas', 'Ohio', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(88, 28, 'Bette Roberts', 'jwalsh@hotmail.com', 'windows', 'pkessler', 'pc', 'Gideon Kreiger', 'Virginia', 'Iowa', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(89, 29, 'Leanne Hansen', 'ziemann.maverick@barrows.biz', 'windows', 'zabshire', 'pc', 'Gina Romaguera', 'Mississippi', 'Alabama', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 0),
(90, 30, 'Kaylee O\'Connell', 'belle.johnson@schaefer.info', 'windows', 'miguel15', 'pc', 'Deven Tremblay DDS', 'Maryland', 'Nebraska', '2017-10-08 16:04:46', '2017-10-08 16:04:46', 1),
(91, 1, 'Chris Bahringer II', 'purdy.dell@yahoo.com', 'windows', 'daugherty.pearl', 'pc', 'Aron Mann', 'New Jersey', 'Missouri', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(92, 2, 'Jordy Thompson', 'tbahringer@howell.biz', 'windows', 'kreiger.hayley', 'pc', 'Eulah Langosh', 'Alabama', 'Arizona', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(93, 3, 'Prof. Keegan Donnelly', 'gbogan@hotmail.com', 'windows', 'macey.spencer', 'pc', 'Jaiden Kilback', 'North Dakota', 'Michigan', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 0),
(94, 4, 'Gussie Glover', 'bcollins@kub.com', 'windows', 'verona33', 'pc', 'Green Kovacek', 'Minnesota', 'Tennessee', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(95, 5, 'Eulah Crist', 'torp.barney@rogahn.com', 'windows', 'presley56', 'pc', 'Junius Kris', 'Alaska', 'Hawaii', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 0),
(96, 6, 'Edyth Walter', 'schmeler.tina@gmail.com', 'windows', 'bertrand.zulauf', 'pc', 'Alfonso Davis', 'Montana', 'Georgia', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(97, 7, 'Leland Raynor IV', 'tstamm@roberts.com', 'windows', 'mckayla97', 'pc', 'Tomasa Douglas DDS', 'California', 'Maine', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 0),
(98, 8, 'Ms. Delilah Lubowitz MD', 'dach.julia@ratke.com', 'windows', 'oreilly.horace', 'pc', 'Albin Schneider', 'Texas', 'District of Columbia', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 0),
(99, 9, 'Eula Oberbrunner', 'emely31@yahoo.com', 'windows', 'metz.delfina', 'pc', 'Arely Halvorson', 'Texas', 'New Jersey', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(100, 10, 'Dr. Anastacio Sawayn', 'alittle@stokes.biz', 'windows', 'caroline.anderson', 'pc', 'Sonny Baumbach', 'Illinois', 'Wisconsin', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(101, 11, 'Jaden Roob PhD', 'idaugherty@dietrich.org', 'windows', 'oran.windler', 'pc', 'Tatum Rice', 'Wyoming', 'Oregon', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(102, 12, 'Mr. Jon Goyette III', 'kunze.greyson@hamill.com', 'windows', 'dblanda', 'pc', 'Kale Stark', 'Arizona', 'Oregon', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 0),
(103, 13, 'Miss Scarlett Spencer II', 'conrad00@moore.org', 'windows', 'rebeka.ohara', 'pc', 'Yasmine Wolf IV', 'Nevada', 'Arkansas', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(104, 14, 'Elvie Mante', 'casper.keith@yahoo.com', 'windows', 'ucollier', 'pc', 'Estell Schuster', 'New Jersey', 'Nevada', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 0),
(105, 15, 'Dean Parker DVM', 'santino40@hotmail.com', 'windows', 'lisa39', 'pc', 'Dominique Jones', 'Massachusetts', 'New Mexico', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 0),
(106, 16, 'Maryse Dare Jr.', 'lbailey@larson.com', 'windows', 'corrine67', 'pc', 'Larry Bailey', 'Missouri', 'Indiana', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(107, 17, 'Dr. Garret Kuphal', 'crawford02@ferry.org', 'windows', 'litzy.heaney', 'pc', 'Austen Corwin', 'Washington', 'Washington', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(108, 18, 'Laney Hagenes', 'audie.veum@jacobs.info', 'windows', 'xconn', 'pc', 'Ethan Tillman', 'New Hampshire', 'West Virginia', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(109, 19, 'Danyka Maggio', 'jamel.schuster@yahoo.com', 'windows', 'feest.helmer', 'pc', 'Mr. Stephon Ratke', 'District of Columbia', 'Florida', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 0),
(110, 20, 'Aurore Shanahan', 'kunze.torey@ledner.com', 'windows', 'wschaefer', 'pc', 'Dannie Halvorson DDS', 'Oklahoma', 'Hawaii', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(111, 21, 'Estell Gutmann', 'nhegmann@hotmail.com', 'windows', 'conn.gianni', 'pc', 'Mrs. Ella Zulauf', 'Oregon', 'North Dakota', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(112, 22, 'Junius Barton', 'renner.charles@ohara.com', 'windows', 'jan63', 'pc', 'Prof. Eldon Toy', 'Maine', 'South Dakota', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 0),
(113, 23, 'Prof. Florencio Donnelly IV', 'keeling.dariana@gmail.com', 'windows', 'brekke.howell', 'pc', 'Mayra Walter', 'Mississippi', 'California', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(114, 24, 'Lauretta Okuneva', 'adah56@gmail.com', 'windows', 'isipes', 'pc', 'Miss Flossie Rogahn Sr.', 'New Jersey', 'Nebraska', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 0),
(115, 25, 'Prof. Elijah Bechtelar', 'gkub@gottlieb.com', 'windows', 'carter.tyrel', 'pc', 'Fannie Johnson', 'New York', 'Vermont', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(116, 26, 'Martin Hamill', 'cassin.queen@lubowitz.com', 'windows', 'coralie76', 'pc', 'Jerad Kuhlman', 'California', 'Colorado', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(117, 27, 'Prof. Rhea Haley III', 'lwisoky@yahoo.com', 'windows', 'susie49', 'pc', 'Joseph Stanton', 'Pennsylvania', 'Virginia', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(118, 28, 'Dr. George Spinka I', 'kbednar@ferry.com', 'windows', 'alexandre.auer', 'pc', 'Rylee Hudson', 'Nevada', 'Nebraska', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(119, 29, 'Mrs. Sunny Bartell II', 'clay92@auer.org', 'windows', 'ondricka.rubie', 'pc', 'Miss Corine Satterfield', 'Tennessee', 'Florida', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 0),
(120, 30, 'Prof. Lilla Kuvalis', 'glesch@yahoo.com', 'windows', 'arnaldo.ruecker', 'pc', 'Jaydon Bosco', 'Nebraska', 'Texas', '2017-10-08 16:04:47', '2017-10-08 16:04:47', 1),
(121, 1, 'Alda Bahringer', 'scole@langosh.com', 'windows', 'will98', 'pc', 'Ewell Lubowitz', 'Nebraska', 'Wisconsin', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(122, 2, 'Dimitri Gleichner', 'oliver.gerhold@kertzmann.com', 'windows', 'mohammad.sporer', 'pc', 'Jake Mayert', 'California', 'South Carolina', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(123, 3, 'Annie Zemlak DVM', 'leann.hilll@gmail.com', 'windows', 'hwunsch', 'pc', 'Zachariah Franecki MD', 'Kentucky', 'Kentucky', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(124, 4, 'Skyla Beatty', 'swaniawski.melody@cronin.com', 'windows', 'karli02', 'pc', 'Ryder Pagac', 'Colorado', 'Arkansas', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 0),
(125, 5, 'Baylee Gleason', 'allan50@kuhn.com', 'windows', 'batz.ettie', 'pc', 'Jadyn Tromp II', 'Kentucky', 'Rhode Island', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 0),
(126, 6, 'Colby Shanahan', 'hfunk@gmail.com', 'windows', 'dallas30', 'pc', 'Marguerite Conroy', 'Arizona', 'Alaska', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(127, 7, 'Millie Lowe', 'ewell86@gmail.com', 'windows', 'zander.block', 'pc', 'Calista Shields', 'Maryland', 'Florida', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(128, 8, 'Vida Bernier', 'mohr.rick@osinski.com', 'windows', 'fanny.moore', 'pc', 'Dr. Leopoldo Christiansen', 'Alaska', 'Rhode Island', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(129, 9, 'Arely Murray', 'zkerluke@gmail.com', 'windows', 'domenica.kunde', 'pc', 'Vella Little PhD', 'Illinois', 'Michigan', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 0),
(130, 10, 'Jessika Jacobs', 'mturcotte@baumbach.biz', 'windows', 'pagac.herta', 'pc', 'Jayda Trantow', 'Idaho', 'Georgia', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 0),
(131, 11, 'Craig Zemlak', 'soreilly@hotmail.com', 'windows', 'dashawn.rohan', 'pc', 'Antonina Sanford', 'Colorado', 'Nevada', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(132, 12, 'Marcus Lemke', 'leonor59@larkin.com', 'windows', 'ebert.lois', 'pc', 'Margarita Wilderman', 'Virginia', 'Hawaii', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 0),
(133, 13, 'Roxanne Hilpert', 'jeffertz@beier.com', 'windows', 'feil.santiago', 'pc', 'Peyton Smith', 'Michigan', 'Virginia', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 0),
(134, 14, 'Kaitlin Powlowski DDS', 'konopelski.lavada@dooley.com', 'windows', 'mathew.roob', 'pc', 'Diamond Ondricka', 'Texas', 'Illinois', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 0),
(135, 15, 'Greta Quigley Jr.', 'jweissnat@tremblay.biz', 'windows', 'laurie48', 'pc', 'Kenna Lubowitz', 'Colorado', 'Illinois', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(136, 16, 'Margot Lynch', 'maggio.reyna@walter.org', 'windows', 'mason04', 'pc', 'Miss Samantha Christiansen', 'Oklahoma', 'Nebraska', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(137, 17, 'Laisha Haag', 'justyn.wolff@armstrong.biz', 'windows', 'dschaden', 'pc', 'Ada Barrows', 'Illinois', 'Wisconsin', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(138, 18, 'Brian Cormier', 'sierra.rau@wunsch.com', 'windows', 'haylee.rempel', 'pc', 'Dr. Kirk Parisian', 'Maine', 'Montana', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(139, 19, 'Oren D\'Amore', 'qlubowitz@kunze.biz', 'windows', 'summer.carroll', 'pc', 'Vladimir Kunze Jr.', 'Mississippi', 'Ohio', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(140, 20, 'Prof. Joy Carroll', 'chelsie.daniel@mohr.biz', 'windows', 'gprohaska', 'pc', 'Roberta Ziemann V', 'Arizona', 'New Hampshire', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 0),
(141, 21, 'Berniece Lockman I', 'okon.stefanie@hotmail.com', 'windows', 'bernier.olin', 'pc', 'Grace Leuschke', 'Wisconsin', 'Maryland', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(142, 22, 'Ciara Smith', 'sister.morar@gmail.com', 'windows', 'kris.ron', 'pc', 'Mr. Demarco Hilll', 'New Jersey', 'Nebraska', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(143, 23, 'Tania Block', 'jarvis.baumbach@bechtelar.net', 'windows', 'mattie.bailey', 'pc', 'Napoleon Strosin', 'Tennessee', 'New Hampshire', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(144, 24, 'Art Anderson DDS', 'reanna45@yahoo.com', 'windows', 'halle85', 'pc', 'Prof. Troy Adams III', 'Missouri', 'Nevada', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 0),
(145, 25, 'Zechariah Mills', 'ayden08@hotmail.com', 'windows', 'felicita80', 'pc', 'Alberta Rodriguez', 'North Dakota', 'North Dakota', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 0),
(146, 26, 'Shane Littel', 'fahey.janie@rodriguez.com', 'windows', 'nsatterfield', 'pc', 'Dr. Rusty Rau IV', 'Iowa', 'Montana', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 0),
(147, 27, 'Dr. Trudie Lockman Sr.', 'dstokes@gmail.com', 'windows', 'warren.heaney', 'pc', 'Dr. Daphney Reilly', 'Tennessee', 'Minnesota', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(148, 28, 'Sasha Kemmer DVM', 'oschuster@yahoo.com', 'windows', 'rachel37', 'pc', 'Prof. Tiffany Boyle Sr.', 'Maine', 'Arizona', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(149, 29, 'Madisyn Bartoletti Sr.', 'rutherford.trever@feeney.com', 'windows', 'beaulah76', 'pc', 'Alyce Roberts', 'New Jersey', 'Minnesota', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 0),
(150, 30, 'Marcelina Frami', 'hanna.stoltenberg@gmail.com', 'windows', 'keebler.buster', 'pc', 'Kenyon Ryan', 'Arizona', 'Colorado', '2017-10-08 16:04:48', '2017-10-08 16:04:48', 1),
(151, 1, 'Stevie Langosh', 'shields.lincoln@hotmail.com', 'windows', 'thuel', 'pc', 'Osvaldo Wiegand', 'Mississippi', 'Kansas', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(152, 2, 'Kailee Rempel', 'abe83@yahoo.com', 'windows', 'obauch', 'pc', 'Dr. Roderick Oberbrunner', 'Illinois', 'Wyoming', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1),
(153, 3, 'Jess Wolf II', 'pleannon@yahoo.com', 'windows', 'selmer.flatley', 'pc', 'Janick Sanford MD', 'North Dakota', 'Indiana', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(154, 4, 'Kelley Schoen', 'schowalter.ismael@hotmail.com', 'windows', 'wrosenbaum', 'pc', 'Francisca Heaney', 'Vermont', 'District of Columbia', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1),
(155, 5, 'Miss Delilah Hammes', 'elna98@dooley.org', 'windows', 'dweimann', 'pc', 'Mr. Doyle Hilll', 'Minnesota', 'Florida', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1),
(156, 6, 'Lue Heidenreich', 'maynard.mann@kihn.com', 'windows', 'jchristiansen', 'pc', 'Johann Schuppe', 'Georgia', 'New Mexico', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1),
(157, 7, 'Ian Zieme DDS', 'linwood.hilll@hermiston.info', 'windows', 'harris.queenie', 'pc', 'Miss Scarlett Jerde DVM', 'Rhode Island', 'Tennessee', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1),
(158, 8, 'Annamae Okuneva', 'haag.carroll@fadel.com', 'windows', 'vfarrell', 'pc', 'Dan Berge', 'Oklahoma', 'Florida', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1),
(159, 9, 'Prof. Delfina Crist PhD', 'broderick.watsica@yahoo.com', 'windows', 'gbeatty', 'pc', 'Hanna Muller', 'New Mexico', 'Tennessee', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(160, 10, 'Maxime Homenick', 'ankunding.mikayla@yahoo.com', 'windows', 'ichamplin', 'pc', 'Ms. Shanie Frami', 'Georgia', 'Pennsylvania', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1),
(161, 11, 'Ola Hilpert', 'xmccullough@yahoo.com', 'windows', 'dena04', 'pc', 'Jedidiah Tillman', 'Massachusetts', 'Florida', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(162, 12, 'Dr. Jude Bradtke', 'isabel.harris@russel.com', 'windows', 'randy.hahn', 'pc', 'Nola Kuhlman', 'New Jersey', 'Pennsylvania', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1),
(163, 13, 'Doug Armstrong', 'herman77@gmail.com', 'windows', 'elisha54', 'pc', 'Ivy Schamberger', 'New Hampshire', 'Texas', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1),
(164, 14, 'Orin Kirlin', 'margie73@purdy.net', 'windows', 'hilll.meggie', 'pc', 'Haven Stokes V', 'Idaho', 'Iowa', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(165, 15, 'Eliane King', 'mohammad.hintz@yahoo.com', 'windows', 'cole.roscoe', 'pc', 'Johanna Willms', 'Oklahoma', 'Texas', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(166, 16, 'Diamond Jones', 'howard13@hotmail.com', 'windows', 'effertz.angelita', 'pc', 'Nora Rutherford', 'Virginia', 'Alaska', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(167, 17, 'Raegan Jones', 'kristina26@gmail.com', 'windows', 'phauck', 'pc', 'Prof. Nasir Walsh', 'Rhode Island', 'New Hampshire', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(168, 18, 'General Bechtelar', 'rippin.tre@jacobs.com', 'windows', 'tierra.lowe', 'pc', 'Allene Rippin', 'Louisiana', 'North Carolina', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(169, 19, 'Elmo Trantow', 'lfeest@rau.com', 'windows', 'welch.ubaldo', 'pc', 'Cruz Gaylord', 'District of Columbia', 'Ohio', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(170, 20, 'Alyson Fadel', 'mayert.saul@hotmail.com', 'windows', 'slindgren', 'pc', 'Dr. Dalton Mann I', 'District of Columbia', 'Texas', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(171, 21, 'Riley Mann', 'khirthe@gmail.com', 'windows', 'jairo31', 'pc', 'Viola Weissnat DDS', 'Mississippi', 'South Carolina', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(172, 22, 'Mauricio VonRueden DVM', 'oconnell.neha@yahoo.com', 'windows', 'myrtice.raynor', 'pc', 'Cleora Keeling', 'Kentucky', 'Connecticut', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1),
(173, 23, 'Thad Rice', 'kaci40@yahoo.com', 'windows', 'ndibbert', 'pc', 'Mr. Mortimer Powlowski III', 'Illinois', 'Wyoming', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(174, 24, 'Mr. Rhett Hamill', 'dickens.audie@casper.net', 'windows', 'jodie21', 'pc', 'Helena Daniel', 'Maine', 'Texas', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1),
(175, 25, 'Dr. Summer Mueller', 'julien.barton@crooks.com', 'windows', 'benedict41', 'pc', 'Prof. Kareem Heaney', 'Utah', 'South Carolina', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(176, 26, 'Vincenzo Lehner', 'pcarroll@gmail.com', 'windows', 'violette.legros', 'pc', 'Price Weimann DVM', 'Idaho', 'Connecticut', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1),
(177, 27, 'Mrs. Nia Hodkiewicz III', 'dorothy.marquardt@grimes.biz', 'windows', 'florida35', 'pc', 'Dr. Annamarie Swift I', 'South Dakota', 'Alaska', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(178, 28, 'Edison Kerluke', 'pedro21@yahoo.com', 'windows', 'wlangworth', 'pc', 'Dr. Toni Ward II', 'California', 'Idaho', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(179, 29, 'Prof. Flo Conroy I', 'dexter.marvin@yahoo.com', 'windows', 'sschowalter', 'pc', 'Dr. Kasandra Baumbach Sr.', 'Alaska', 'Massachusetts', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 0),
(180, 30, 'Brisa Botsford', 'kuhn.caleigh@yahoo.com', 'windows', 'ruben.waters', 'pc', 'Dr. Judah Hansen', 'Delaware', 'Minnesota', '2017-10-08 16:04:49', '2017-10-08 16:04:49', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexen voor tabel `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`Log_ID`);

--
-- Indexen voor tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexen voor tabel `tbl_offertes`
--
ALTER TABLE `tbl_offertes`
  ADD PRIMARY KEY (`Offerte_ID`);

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
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT voor een tabel `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `Log_ID` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_offertes`
--
ALTER TABLE `tbl_offertes`
  MODIFY `Offerte_ID` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `Project_ID` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
