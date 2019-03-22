-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Hoszt: localhost
-- Létrehozás ideje: 2019. Már 21. 10:59
-- Szerver verzió: 5.6.13
-- PHP verzió: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `atlatszonet`
--
CREATE DATABASE IF NOT EXISTS `atlatszonet` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `atlatszonet`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `message` longtext COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=12 ;

--
-- A tábla adatainak kiíratása `messages`
--

INSERT INTO `messages` (`mid`, `name`, `email`, `message`) VALUES
(9, 'Teszt Elek', 'teszt@teszt.hu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(10, 'Teszt András', 'andras@teszt.gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis placerat diam, et aliquam urna viverra non. Ut placerat ultricies mauris in ultricies. Nunc nisi leo, aliquam id massa viverra, pharetra viverra nisi. Nulla mattis vitae ligula sed mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce fringilla pulvinar convallis. Aliquam eleifend consectetur turpis in egestas. '),
(11, 'Teszt Erzsébet', 'erzsi@gmail.com', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) COLLATE utf32_hungarian_ci NOT NULL,
  `first_name` varchar(40) COLLATE utf32_hungarian_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf32_hungarian_ci NOT NULL,
  `email` varchar(40) COLLATE utf32_hungarian_ci NOT NULL,
  `password` varchar(80) COLLATE utf32_hungarian_ci NOT NULL,
  `authority` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_hungarian_ci AUTO_INCREMENT=8 ;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`uid`, `user_name`, `first_name`, `last_name`, `email`, `password`, `authority`) VALUES
(6, 'GAMF-WebAdmin', 'Gamf', 'Admin', 'GAMF-WebAdmin@admin.hu', '01dcc74e70ab1829b1b3fa153aa98d07ed42a2dc', 1),
(7, 'teszt', 'Teszt', 'Elek', 'teszt@teszt.hu', '34228a532093278fcdc65c3a1338482e8bdc44f6', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
