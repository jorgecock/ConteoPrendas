-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2020 a las 05:29:18
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conteoprendas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conteoprendas`
--

CREATE TABLE `conteoprendas` (
  `idmod` int(11) NOT NULL,
  `cantidadhecha` int(11) NOT NULL,
  `eficiencia` int(11) NOT NULL,
  `horabotonanterior` time NOT NULL,
  `horaultimoboton` time NOT NULL,
  `tiempopromedio` int(11) NOT NULL,
  `unidadesesperadas` int(11) NOT NULL,
  `horainicio` time NOT NULL,
  `tiempoacumuladoparos` int(11) NOT NULL,
  `tiempocicloesperado` int(11) NOT NULL,
  `ultimotiempodeoperacion` int(11) NOT NULL,
  `tiempotranscurrido` int(11) NOT NULL,
  `primerapieza` int(11) NOT NULL,
  `minutosprogramados` int(11) NOT NULL,
  `estado` varchar(15) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conteoprendas`
--

INSERT INTO `conteoprendas` (`idmod`, `cantidadhecha`, `eficiencia`, `horabotonanterior`, `horaultimoboton`, `tiempopromedio`, `unidadesesperadas`, `horainicio`, `tiempoacumuladoparos`, `tiempocicloesperado`, `ultimotiempodeoperacion`, `tiempotranscurrido`, `primerapieza`, `minutosprogramados`, `estado`) VALUES
(1, 10, 0, '03:55:00', '03:55:00', 0, 0, '00:00:00', 0, 0, 0, 0, 0, 0, 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conteoprendas`
--
ALTER TABLE `conteoprendas`
  ADD PRIMARY KEY (`idmod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conteoprendas`
--
ALTER TABLE `conteoprendas`
  MODIFY `idmod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
