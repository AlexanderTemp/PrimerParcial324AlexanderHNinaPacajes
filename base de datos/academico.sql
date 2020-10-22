-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-10-2020 a las 04:28:26
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificador`
--

DROP TABLE IF EXISTS `identificador`;
CREATE TABLE IF NOT EXISTS `identificador` (
  `ci` int(11) NOT NULL,
  `nombrecompleto` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `residencia` int(2) DEFAULT NULL,
  `imagenperfil` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ci`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `identificador`
--

INSERT INTO `identificador` (`ci`, `nombrecompleto`, `fechanacimiento`, `residencia`, `imagenperfil`) VALUES
(5950236, 'Alexander Humberto Nina Pacajes', '1998-05-30', 2, 'imagenes/usuariovaron1.jpg'),
(9985475, 'Jose Antonio Lozada Lopez', '1997-03-20', 1, 'imagenes/usuariovaron2.jpg'),
(6875418, 'Ana Lucia Lopez Perez', '1999-06-05', 2, 'imagenes/usuariomujer1.jpg'),
(9985463, 'Regina Encarnacion Murillo Torrez', '1998-12-13', 1, 'imagenes/usuariomujer2.jpg'),
(8974135, 'Laura Luciana Osco Nina', '2000-08-07', 3, 'imagenes/usuariomujer3.jpg'),
(4648907, 'Sonia Tejerina Telleria', '1997-02-10', 5, 'imagenes/usuariomujer4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

DROP TABLE IF EXISTS `notas`;
CREATE TABLE IF NOT EXISTS `notas` (
  `idnota` int(5) NOT NULL AUTO_INCREMENT,
  `ci` int(11) DEFAULT NULL,
  `materia` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nota` float DEFAULT NULL,
  PRIMARY KEY (`idnota`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`idnota`, `ci`, `materia`, `nota`) VALUES
(1, 5950236, 'INF-121', 88),
(2, 5950236, 'INF-122', 68),
(3, 5950236, 'INF-123', 48),
(4, 9985475, 'INF-282', 75),
(5, 9985475, 'MAT-134', 43),
(6, 9985475, 'INF-281', 20),
(7, 9985475, 'INF-272', 100),
(8, 6875418, 'INF-111', 30),
(9, 6875418, 'LIN-114', 63),
(10, 6875418, 'INF-113', 2),
(11, 6875418, 'LAB-111', 43),
(12, 6875418, 'INF-121', 35),
(13, 9985463, 'MAT-123', 12),
(14, 9985463, 'MAT-114', 52),
(15, 9985463, 'INF-131', 96),
(16, 9985463, 'LAB-131', 64),
(17, 9985463, 'INF-143', 51),
(18, 8974135, 'INF-273', 48),
(19, 8974135, 'LAB-273', 69),
(20, 8974135, 'INF-272', 67),
(21, 8974135, 'INF-271', 12),
(22, 5950236, 'LAB-121', 58),
(23, 4648907, 'INF-333', 65),
(24, 4648907, 'INF-315', 48),
(25, 4648907, 'INF-325', 68),
(26, 4648907, 'INF-335', 99),
(27, 4648907, 'INF-282', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ci` int(11) NOT NULL,
  `contra` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ci`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `contra`) VALUES
(5950236, 'alexander3456'),
(9985475, 'dos3cuatro'),
(6875418, '12345ana'),
(9985463, 'regenc123'),
(8974135, 'lulu3120'),
(4648907, 'sonichedgehog');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
