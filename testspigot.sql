-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2020 at 02:36 PM
-- Server version: 10.5.2-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testspigot`
--

-- --------------------------------------------------------

--
-- Table structure for table `authme`
--

CREATE TABLE `authme` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `ip` varchar(40) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
  `lastlogin` bigint(20) DEFAULT NULL,
  `x` double NOT NULL DEFAULT 0,
  `y` double NOT NULL DEFAULT 0,
  `z` double NOT NULL DEFAULT 0,
  `world` varchar(255) NOT NULL DEFAULT 'world',
  `regdate` bigint(20) NOT NULL DEFAULT 0,
  `regip` varchar(40) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
  `yaw` float DEFAULT NULL,
  `pitch` float DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `isLogged` smallint(6) NOT NULL DEFAULT 0,
  `hasSession` smallint(6) NOT NULL DEFAULT 0,
  `totp` varchar(16) DEFAULT NULL,
  `UUID` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authme`
--

INSERT INTO `authme` (`id`, `username`, `realname`, `password`, `ip`, `lastlogin`, `x`, `y`, `z`, `world`, `regdate`, `regip`, `yaw`, `pitch`, `email`, `isLogged`, `hasSession`, `totp`, `UUID`) VALUES
(1, 'dazzle', 'dazzle', '$SHA$acdd4cc320b840a7$2dd94f9fe6675e6ea7e598d5cdc180402a38104b34f0e6664f842aa516a118be', '127.0.0.1', 1590478469491, 0, 0, 0, 'world', 1590478469446, '127.0.0.1', NULL, NULL, NULL, 1, 0, NULL, 'c8cafbb7-c9f0-3bde-bd09-a96b45aed365');

-- --------------------------------------------------------

--
-- Table structure for table `eco_accounts`
--

CREATE TABLE `eco_accounts` (
  `id` int(10) NOT NULL,
  `player_uuid` varchar(50) NOT NULL,
  `player_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` double(30,2) NOT NULL,
  `sync_complete` varchar(5) NOT NULL,
  `last_seen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eco_accounts`
--

INSERT INTO `eco_accounts` (`id`, `player_uuid`, `player_name`, `money`, `sync_complete`, `last_seen`) VALUES
(1, 'c8cafbb7-c9f0-3bde-bd09-a96b45aed365', 'dazzle', 10000.00, 'true', '1590478585359');

-- --------------------------------------------------------

--
-- Table structure for table `meb_experience`
--

CREATE TABLE `meb_experience` (
  `id` int(10) NOT NULL,
  `player_uuid` varchar(50) NOT NULL,
  `player_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp` float(10,10) NOT NULL,
  `exp_to_level` int(10) NOT NULL,
  `total_exp` int(20) NOT NULL,
  `exp_lvl` int(10) NOT NULL,
  `last_seen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meb_experience`
--

INSERT INTO `meb_experience` (`id`, `player_uuid`, `player_name`, `exp`, `exp_to_level`, `total_exp`, `exp_lvl`, `last_seen`) VALUES
(1, 'c8cafbb7-c9f0-3bde-bd09-a96b45aed365', 'dazzle', 0.0326077566, 92, 1000, 26, '1590478585367');

-- --------------------------------------------------------

--
-- Table structure for table `meb_inventory`
--

CREATE TABLE `meb_inventory` (
  `id` int(10) NOT NULL,
  `player_uuid` char(36) NOT NULL,
  `player_name` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `inventory` longtext NOT NULL,
  `armor` longtext NOT NULL,
  `sync_complete` varchar(5) NOT NULL,
  `last_seen` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meb_inventory`
--

INSERT INTO `meb_inventory` (`id`, `player_uuid`, `player_name`, `inventory`, `armor`, `sync_complete`, `last_seen`) VALUES
(1, 'c8cafbb7-c9f0-3bde-bd09-a96b45aed365', 'dazzle', 'rO0ABXcEAAAAKXBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBw\r\n', 'rO0ABXcEAAAABHBwcHA=\r\n', 'true', '1590478585381');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `Nick` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Skin` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playersync_data`
--

CREATE TABLE `playersync_data` (
  `uuid` char(36) NOT NULL,
  `inventory` longtext DEFAULT NULL,
  `armorInventory` longtext DEFAULT NULL,
  `offHand` longtext DEFAULT NULL,
  `enderchest` longtext DEFAULT NULL,
  `potionEffects` longtext DEFAULT NULL,
  `gamemode` varchar(32) DEFAULT NULL,
  `health` double DEFAULT NULL,
  `hunger` int(11) DEFAULT NULL,
  `saturation` float DEFAULT NULL,
  `exhaustion` float DEFAULT NULL,
  `air` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `experience` float DEFAULT NULL,
  `lastSave` bigint(20) DEFAULT NULL,
  `isBeingUsed` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `playersync_data`
--

INSERT INTO `playersync_data` (`uuid`, `inventory`, `armorInventory`, `offHand`, `enderchest`, `potionEffects`, `gamemode`, `health`, `hunger`, `saturation`, `exhaustion`, `air`, `level`, `experience`, `lastSave`, `isBeingUsed`) VALUES
('c8cafbb7-c9f0-3bde-bd09-a96b45aed365', 'rO0ABXcEAAAAJHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcA==\r\n', 'rO0ABXcEAAAABHBwcHA=\r\n', 'rO0ABXcEAAAAAXNyABpvcmcuYnVra2l0LnV0aWwuaW8uV3JhcHBlcvJQR+zxEm8FAgABTAADbWFw\r\ndAAPTGphdmEvdXRpbC9NYXA7eHBzcgA1Y29tLmdvb2dsZS5jb21tb24uY29sbGVjdC5JbW11dGFi\r\nbGVNYXAkU2VyaWFsaXplZEZvcm0AAAAAAAAAAAIAAlsABGtleXN0ABNbTGphdmEvbGFuZy9PYmpl\r\nY3Q7WwAGdmFsdWVzcQB+AAR4cHVyABNbTGphdmEubGFuZy5PYmplY3Q7kM5YnxBzKWwCAAB4cAAA\r\nAAR0AAI9PXQAAXZ0AAR0eXBldAAGYW1vdW50dXEAfgAGAAAABHQAHm9yZy5idWtraXQuaW52ZW50\r\nb3J5Lkl0ZW1TdGFja3NyABFqYXZhLmxhbmcuSW50ZWdlchLioKT3gYc4AgABSQAFdmFsdWV4cgAQ\r\namF2YS5sYW5nLk51bWJlcoaslR0LlOCLAgAAeHAAAAi2dAADQUlSc3EAfgAOAAAAAA==\r\n', 'rO0ABXcEAAAAG3BwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcA==\r\n', 'rO0ABXcEAAAAAA==\r\n', 'SURVIVAL', 20, 20, 5, 0.0591, 300, 26, 0.0326078, 1590478585376, 0);

-- --------------------------------------------------------

--
-- Table structure for table `punishmenthistory`
--

CREATE TABLE `punishmenthistory` (
  `id` int(11) NOT NULL,
  `name` varchar(16) DEFAULT NULL,
  `uuid` varchar(35) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `operator` varchar(16) DEFAULT NULL,
  `punishmentType` varchar(16) DEFAULT NULL,
  `start` mediumtext DEFAULT NULL,
  `end` mediumtext DEFAULT NULL,
  `calculation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punishmenthistory`
--

INSERT INTO `punishmenthistory` (`id`, `name`, `uuid`, `reason`, `operator`, `punishmentType`, `start`, `end`, `calculation`) VALUES
(1, 'dogobaba', 'dogobaba', 'none', 'CONSOLE', 'BAN', '1590478478544', '-1', '');

-- --------------------------------------------------------

--
-- Table structure for table `punishments`
--

CREATE TABLE `punishments` (
  `id` int(11) NOT NULL,
  `name` varchar(16) DEFAULT NULL,
  `uuid` varchar(35) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `operator` varchar(16) DEFAULT NULL,
  `punishmentType` varchar(16) DEFAULT NULL,
  `start` mediumtext DEFAULT NULL,
  `end` mediumtext DEFAULT NULL,
  `calculation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punishments`
--

INSERT INTO `punishments` (`id`, `name`, `uuid`, `reason`, `operator`, `punishmentType`, `start`, `end`, `calculation`) VALUES
(1, 'dogobaba', 'dogobaba', 'none', 'CONSOLE', 'BAN', '1590478478544', '-1', '');

-- --------------------------------------------------------

--
-- Table structure for table `skins`
--

CREATE TABLE `skins` (
  `Nick` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Value` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Signature` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statsapi`
--

CREATE TABLE `statsapi` (
  `UUID` varchar(100) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Games` int(11) DEFAULT NULL,
  `Wins` int(11) DEFAULT NULL,
  `Kills` int(11) DEFAULT NULL,
  `Deaths` int(11) DEFAULT NULL,
  `Placedblocks` int(11) DEFAULT NULL,
  `Brokenblocks` int(11) DEFAULT NULL,
  `Openchests` int(11) DEFAULT NULL,
  `Skillpoints` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statsapi`
--

INSERT INTO `statsapi` (`UUID`, `Name`, `Games`, `Wins`, `Kills`, `Deaths`, `Placedblocks`, `Brokenblocks`, `Openchests`, `Skillpoints`) VALUES
('c8cafbb7-c9f0-3bde-bd09-a96b45aed365', 'dazzle', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supertrails`
--

CREATE TABLE `supertrails` (
  `Player` varchar(64) DEFAULT NULL,
  `Id` int(11) DEFAULT NULL,
  `Wings1` varchar(32) DEFAULT NULL,
  `Wings2` varchar(32) DEFAULT NULL,
  `Wings3` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authme`
--
ALTER TABLE `authme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `eco_accounts`
--
ALTER TABLE `eco_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `player_uuid` (`player_uuid`);

--
-- Indexes for table `meb_experience`
--
ALTER TABLE `meb_experience`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `player_uuid` (`player_uuid`);

--
-- Indexes for table `meb_inventory`
--
ALTER TABLE `meb_inventory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `player_uuid` (`player_uuid`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`Nick`);

--
-- Indexes for table `playersync_data`
--
ALTER TABLE `playersync_data`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `punishmenthistory`
--
ALTER TABLE `punishmenthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `punishments`
--
ALTER TABLE `punishments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skins`
--
ALTER TABLE `skins`
  ADD PRIMARY KEY (`Nick`);

--
-- Indexes for table `statsapi`
--
ALTER TABLE `statsapi`
  ADD UNIQUE KEY `UUID` (`UUID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authme`
--
ALTER TABLE `authme`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eco_accounts`
--
ALTER TABLE `eco_accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meb_experience`
--
ALTER TABLE `meb_experience`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meb_inventory`
--
ALTER TABLE `meb_inventory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `punishmenthistory`
--
ALTER TABLE `punishmenthistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `punishments`
--
ALTER TABLE `punishments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
