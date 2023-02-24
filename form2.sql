-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2023 a las 22:22:40
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `form2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `numemp` varchar(70) NOT NULL,
  `accessto` varchar(255) NOT NULL,
  `puesto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `details`
--

INSERT INTO `details` (`id`, `firstname`, `numemp`, `accessto`, `puesto`) VALUES
(15, 'Jorge', '1785', 'N;', 'IT'),
(16, 'dasddsadsasdadsadas', '31321321', 'N;', 'cxcxxc'),
(17, 'czczx', '32113232', 'N;', 'dcxz'),
(18, 'sdadasda', '231', 'N;', ''),
(19, 'sdsdsasd', '21213', 'N;', 'sdasddsa'),
(20, 'gfgg', '4324', 'N;', 'fdsdsf'),
(21, 'te', '34', 'N;', 'gf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
