-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-09-2020 a las 17:59:44
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `utn_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo_final`
--

CREATE TABLE `trabajo_final` (
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `edad` int(2) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `sitio_web` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajo_final`
--

INSERT INTO `trabajo_final` (`usuario`, `clave`, `nombre`, `apellido`, `edad`, `email`, `sitio_web`) VALUES
('bsoft2005', 'bsoft2005', 'Luciano David', 'Perez', 36, 'bsoft2005@gmail.com', ''),
('claud_sanchez', 'sanchez_claud1', 'Claudia Gabriela', 'Sanchez', 39, 'claud_sanchez@aol.com', 'https://libreria-sanchez.com.ar'),
('exe_duarte', 'duarte9998', 'Exequiel Marcelino', 'Duarte', 62, 'exe_duarte_62@gmail.com', ''),
('july99', 'jul_99_az', 'Julieta Martina', 'Sanchez', 19, 'jul_sanchez@live.com', 'july-sanchez.com'),
('mar_45!', '45_maria_g', 'Maria Graciela', 'Gomez', 56, 'mar_45!@yahoo.com.ar', ''),
('mar_fed_89', 'marfed!*+', 'Marcos Federico', 'Siva', 28, 'marcosfed89@gmail.com', 'https://marcos-fed.com.ar'),
('matu09', 'elmatt2009', 'Matias', 'Cardozo', 31, 'matu@cardozo.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trabajo_final`
--
ALTER TABLE `trabajo_final`
  ADD PRIMARY KEY (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
