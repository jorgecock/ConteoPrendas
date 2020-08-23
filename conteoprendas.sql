-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2020 a las 19:07:35
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

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
  `cantidadhecha` int(11) NOT NULL,
  `eficiencia` int(11) NOT NULL,
  `horamarcada` int(11) NOT NULL,
  `tiempopromedio` int(11) NOT NULL,
  `prendasesperadas` int(11) NOT NULL,
  `horainicio` int(11) NOT NULL,
  `tiempoacumuladoparos` int(11) NOT NULL,
  `tiempocicloesperado` int(11) NOT NULL,
  `ultimotiempodeoperacion` int(11) NOT NULL,
  `tiempotranscurrido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conteoprendas`
--

INSERT INTO `conteoprendas` (`cantidadhecha`, `eficiencia`, `horamarcada`, `tiempopromedio`, `prendasesperadas`, `horainicio`, `tiempoacumuladoparos`, `tiempocicloesperado`, `ultimotiempodeoperacion`, `tiempotranscurrido`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrostiempo`
--

CREATE TABLE `registrostiempo` (
  `numregistro` int(11) NOT NULL,
  `horaregistro` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrostiempo`
--
ALTER TABLE `registrostiempo`
  ADD PRIMARY KEY (`numregistro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrostiempo`
--
ALTER TABLE `registrostiempo`
  MODIFY `numregistro` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
