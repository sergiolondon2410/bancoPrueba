-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2015 a las 18:53:07
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cognox_banco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE IF NOT EXISTS `cuentas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `id_usuario`, `numero`, `saldo`) VALUES
(1, 1, 403552, 25516885),
(2, 9, 113553, 81338460),
(3, 6, 283213, 15015205),
(4, 2, 414961, 61116767),
(5, 4, 727208, 19899740),
(6, 9, 210999, 21276959),
(7, 3, 500736, 90879457),
(8, 7, 406669, 20970382),
(9, 9, 384670, 87282398),
(10, 1, 635954, 60443322),
(11, 10, 990834, 78092172),
(12, 9, 885411, 13388310),
(13, 4, 822733, 97688548),
(14, 1, 476193, 77050141),
(15, 9, 624160, 61640712),
(16, 5, 998323, 54338987),
(17, 10, 274118, 87568631),
(18, 8, 635329, 19290913),
(19, 4, 453955, 72756565),
(20, 2, 452602, 66839705),
(21, 3, 892113, 97345911),
(22, 10, 655318, 65336701),
(23, 1, 418462, 73062546),
(24, 6, 358134, 20147674),
(25, 7, 334447, 45685952),
(26, 7, 468153, 36499068),
(27, 6, 946889, 40849501),
(28, 5, 853388, 16853690),
(29, 3, 712167, 68196344),
(30, 5, 679440, 39521246),
(31, 3, 781490, 82812147),
(32, 9, 284152, 65650961),
(33, 4, 267606, 15935121),
(34, 1, 667537, 95224776),
(35, 6, 549837, 31816717),
(36, 8, 437345, 6435525),
(37, 7, 654741, 81074748),
(38, 9, 340215, 23326124),
(39, 9, 280492, 61469987),
(40, 5, 467527, 48302883);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transacciones`
--

CREATE TABLE IF NOT EXISTS `transacciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_envia` int(11) NOT NULL,
  `id_recibe` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `transacciones`
--

INSERT INTO `transacciones` (`id`, `id_envia`, `id_recibe`, `monto`, `date`) VALUES
(1, 1, 6, 10000, '2015-09-18 12:27:00'),
(2, 3, 4, 50000, '2015-09-18 14:25:05'),
(3, 30, 23, 33008, '2015-04-28 20:47:33'),
(4, 40, 12, 297389, '2015-09-15 08:29:16'),
(5, 3, 40, 874772, '2015-06-18 22:54:47'),
(6, 12, 29, 475275, '2015-08-01 23:36:13'),
(7, 38, 22, 249884, '2015-09-15 17:12:28'),
(8, 22, 34, 926890, '2015-06-01 03:13:31'),
(9, 14, 29, 579191, '2015-04-13 05:11:04'),
(10, 37, 29, 334821, '2015-03-11 12:58:34'),
(11, 38, 5, 138931, '2015-04-08 13:05:46'),
(12, 18, 15, 316751, '2015-06-22 07:01:40'),
(13, 24, 20, 273566, '2015-03-27 17:46:17'),
(14, 4, 21, 750198, '2015-06-02 14:21:33'),
(15, 3, 8, 832903, '2015-06-20 07:38:22'),
(16, 15, 4, 469753, '2015-06-19 18:29:21'),
(17, 2, 28, 954912, '2015-08-06 13:08:50'),
(18, 10, 18, 244069, '2015-07-02 12:23:06'),
(19, 13, 5, 974356, '2015-01-20 19:10:32'),
(20, 20, 8, 578804, '2015-06-06 07:43:21'),
(21, 7, 3, 806878, '2015-09-02 22:10:27'),
(22, 1, 14, 188802, '2015-09-12 05:33:42'),
(23, 11, 35, 955502, '2015-02-08 00:50:03'),
(24, 30, 13, 962685, '2015-03-04 10:04:07'),
(25, 25, 16, 495012, '2015-02-22 12:21:58'),
(26, 29, 13, 937859, '2015-08-22 19:55:50'),
(27, 40, 12, 691063, '2015-08-02 02:51:53'),
(28, 35, 30, 34355, '2015-07-04 07:54:15'),
(29, 9, 10, 775653, '2015-01-28 19:27:15'),
(30, 11, 4, 40379, '2015-02-09 01:30:18'),
(31, 2, 11, 497212, '2015-06-25 16:27:19'),
(32, 38, 33, 868635, '2015-03-10 20:45:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `pass` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `username`, `pass`) VALUES
(1, 'Usuario', 'usuario', 1234),
(2, 'Cameron Patrick', 'otro', 1234),
(3, 'Madison Hayes', 'madison', 2442),
(4, 'Kyla Willis', 'kyla', 8792),
(5, 'Amity Hensley', 'amity', 1277),
(6, 'Vernon Snow', 'vernon', 5212),
(7, 'John Montgomery', 'john', 8256),
(8, 'Nayda Bruce', 'nayda', 2782),
(9, 'Matt Strickland', 'matt', 3025),
(10, 'Natalie Harrington', 'natalie', 2149);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
