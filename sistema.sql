-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2021 a las 21:42:01
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `Codigo` int(10) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `Observacion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`Codigo`, `nombre`, `Observacion`) VALUES
(9, 'amada', 'zfsdgdfsgfdsg'),
(12, '35000', 'zfsdgdfsgfdsg'),
(13, 'adada', 'zfsdgdfsgfdsg'),
(14, 'Xilena', 'zfsdgdfsgfdsg'),
(23, 'Xilena', '12'),
(43, 'quimica', '12'),
(45, 'sfv', 'zfsdgdfsgfdsg'),
(67, 'biologia', 'zfsdgdfsgfdsg'),
(1234, 'fisica', 'en oferta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id` int(11) NOT NULL,
  `codigo` int(10) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `genero` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id`, `codigo`, `nombre`, `apellido`, `genero`) VALUES
(12, NULL, 'Xilena', 'asd', 'Femenino'),
(23, NULL, 'Xilena', 'Agamez', ''),
(24, NULL, 'Xilena', 'Agamez', 'Masculino'),
(56, NULL, 'juaquin', 'lopez', 'Masculino'),
(1004, NULL, 'Franklin', 'Agamez', 'Masculino'),
(1234, NULL, 'prueba', 'prueba', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `codigo` int(10) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `genero` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `codigo`, `nombre`, `apellido`, `genero`) VALUES
(2, NULL, 'sdv', 'srv', 'Masculino'),
(23, NULL, 'hernan', 'ortiz', 'Masculino'),
(234, NULL, 'rturo', 'asd', 'Masculino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo` (`codigo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `curso` (`Codigo`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `curso` (`Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
