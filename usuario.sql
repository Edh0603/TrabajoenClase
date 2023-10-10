-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2023 a las 20:09:20
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laboratoriouno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `cedula` varchar(30) NOT NULL,
  `sexo` varchar(7) NOT NULL,
  `fechaNacimiento` varchar(20) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `institucion` varchar(100) NOT NULL,
  `especialidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `cedula`, `sexo`, `fechaNacimiento`, `direccion`, `email`, `telefono`, `institucion`, `especialidad`) VALUES
(1, 'dnqwjd', 'qwdkqwd', 'qwdqkjwd', 'M', '2023-09-07', 'qwdjnqwihjd', 'sdkjasjdn@gmail.com', '82398127389', 'sdjansdja', 'asdjnasdkj'),
(2, 'jqsdkjqsd', 'asdjnasdjn', '12038123', 'M', '2023-09-14', 'sjdnakjsbdkj', 'asdasjndkjsd@gmail.com', '120983019283091', 'saksdljasnkdja', 'asdkjnasjdaskjd'),
(3, 'jqsdkjqsd', 'asdjnasdjn', '12038123', 'M', '2023-09-14', 'sjdnakjsbdkj', 'asdasjndkjsd@gmail.com', '120983019283091', 'saksdljasnkdja', 'asdkjnasjdaskjd'),
(4, 'jqsdkjqsd', 'asdjnasdjn', '12038123', 'M', '2023-09-14', 'sjdnakjsbdkj', 'asdasjndkjsd@gmail.com', '120983019283091', 'saksdljasnkdja', 'asdkjnasjdaskjd'),
(5, 'jqsdkjqsd', 'asdjnasdjn', '12038123', 'M', '2023-09-14', 'sjdnakjsbdkj', 'asdasjndkjsd@gmail.com', '120983019283091', 'saksdljasnkdja', 'asdkjnasjdaskjd'),
(6, 'jqsdkjqsd', 'asdjnasdjn', '12038123', 'M', '2023-09-14', 'sjdnakjsbdkj', 'asdasjndkjsd@gmail.com', '120983019283091', 'saksdljasnkdja', 'asdkjnasjdaskjd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
