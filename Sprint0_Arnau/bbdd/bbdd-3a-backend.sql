-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2023 a las 12:45:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `bbdd-3a-backend`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediciones`
--

CREATE TABLE `mediciones` (
  `idMedicion` int(5) NOT NULL COMMENT 'La UUID de la trama iBeacon proveniente de la tabla trama_beacon',
  `valorMedicionCO2` float(6,2) NOT NULL,
  `tiempoMedicion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idUsuario` int(11) NOT NULL COMMENT 'id del usuario proveniente de la tabla usuarios',
  `valorMedicionTemp` float(6,2) NOT NULL COMMENT 'valor ''minor'' de la trama iBeacon de la tabla trama_beacon'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mediciones`
--

INSERT INTO `mediciones` (`idMedicion`, `valorMedicionCO2`, `tiempoMedicion`, `idUsuario`, `valorMedicionTemp`) VALUES
(0, 1234.00, '2023-10-02 18:02:46', 0, 35.50),
(2, 1310.00, '2023-10-15 09:33:25', 0, 2023.00),
(3, 2870.00, '2023-10-15 09:33:25', 1, 235.00),
(4, 1310.00, '2023-10-15 09:33:53', 0, 2023.00),
(5, 1310.00, '2023-10-15 09:34:04', 0, 2023.00),
(7, 2870.00, '2023-10-15 09:37:04', 1, 235.00),
(8, 2870.00, '2023-10-15 09:45:59', 1, 235.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mediciones`
--
ALTER TABLE `mediciones`
  ADD PRIMARY KEY (`idMedicion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mediciones`
--
ALTER TABLE `mediciones`
  MODIFY `idMedicion` int(5) NOT NULL AUTO_INCREMENT COMMENT 'La UUID de la trama iBeacon proveniente de la tabla trama_beacon', AUTO_INCREMENT=9;
COMMIT;
