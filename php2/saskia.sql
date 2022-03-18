-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2022 a las 09:24:13
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mario_bros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saskia`
--

CREATE TABLE `saskia` (
  `id_saskia` int(11) NOT NULL,
  `produktua_id` int(11) NOT NULL,
  `produktu_izena` varchar(100) NOT NULL,
  `nan` varchar(9) NOT NULL,
  `kantitatea` int(11) NOT NULL,
  `prezioa` float NOT NULL,
  `prezio_totala` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `saskia`
--

INSERT INTO `saskia` (`id_saskia`, `produktua_id`, `produktu_izena`, `nan`, `kantitatea`, `prezioa`, `prezio_totala`) VALUES
(28, 1, 'nnnnnn', '77777777S', 1, 12, 12),
(29, 1, 'nnnnnn', '11111111S', 2, 12, 24),
(30, 1, 'nnnnnn', '77777777S', 1, 12, 12),
(31, 2, 'AA', '77777777S', 2, 55, 110);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `saskia`
--
ALTER TABLE `saskia`
  ADD PRIMARY KEY (`id_saskia`),
  ADD KEY `produktua_id` (`produktua_id`),
  ADD KEY `bezero_nan` (`nan`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `saskia`
--
ALTER TABLE `saskia`
  MODIFY `id_saskia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `saskia`
--
ALTER TABLE `saskia`
  ADD CONSTRAINT `saskia_ibfk_1` FOREIGN KEY (`produktua_id`) REFERENCES `produktuak` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `saskia_ibfk_2` FOREIGN KEY (`nan`) REFERENCES `bezeroak` (`nan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
