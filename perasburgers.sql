-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2017 a las 12:24:16
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `perasburgers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `apellidos` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `correo` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `contrasena` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `apellidos`, `correo`, `contrasena`, `telefono`, `foto`) VALUES
(1, 'Miguel Angel', 'Hernández Rodríguez', '1530043@upv.edu.mx', 'miguel', '8342154699', 'foto.jpg'),
(2, 'Mario Humberto', 'Rodríguez Chávez', 'mario@mario.com', 'mario', '8345782031', 'admin.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `apellidos` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `contrasena` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `salario` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `apellidos`, `sexo`, `edad`, `correo`, `contrasena`, `telefono`, `foto`, `salario`) VALUES
(1, 'Fher Francisco ', 'Torres Paz', 'Hombre', 20, '1530370@upv.edu.mx', 'fher', '8341234567', 'fher.jpg', 800),
(2, 'Karen Giselle', 'Casanova Rocha', 'Mujer', 20, 'giselle@gmail.com', 'karengcasanova', '8341234567', 'giselle.jpg', 1000),
(3, 'Mariana Magdalena', 'Hinojosa Tijerina', 'Mujer', 20, '1530269@upv.edu.mx', 'marianahiti', '8349876543', 'mariana.jpg', 1050),
(4, 'José Antonio', 'Molina de la Fuente', 'Hombre', 20, '1530039@upv.edu.mx', 'toño', '8347783011', 'toño.jpg', 3000),
(5, 'Yuridia Guadalupe', 'Montelongo Padilla', 'Mujer', 20, '1530076@upv.edu.mx', 'yuri27', '8345678921', 'yuri.jpg', 1500),
(6, 'Gabriela', 'Robles Rodríguez', 'Mujer', 20, '1530108@upv.edu.mx', 'gaby', '8349010031', 'gaby.jpg', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `tipo`, `precio`, `descripcion`) VALUES
(1, 'Sencilla', 'Hamburguesa', 27, ''),
(2, 'Sencilla c/papas', 'Hamburguesa', 38, ''),
(3, 'Arrachera', 'Hamburguesa', 59, ''),
(4, 'Sirlon', 'Hamburguesa', 59, ''),
(5, 'De Pollo', 'Hamburguesa', 59, 'Pechuga empanizada, jamón, queso amarillo, verduras y cremas'),
(6, 'Especial', 'Hamburguesa', 80, 'Salchichón doble, jamón, queso gratinado, doble carne, queso amarillo, cebolla, pimiento, verduras y papas'),
(7, 'Texas', 'Hamburguesa', 80, 'Sirlon bañada en BBQ, champiñoes, tocino. queso gratinado, cebolla pimiento, verduras y papas'),
(8, 'Hawaiana', 'Hamburguesa', 80, 'Sirlon, rodaja de piña asada, queso gratinado y tocino'),
(9, 'Cordon Blue', 'Hamburguesa', 80, 'Pechuga de pollo rellena de queso manchego, tocino y aros de cebolla'),
(10, 'Media Orden', 'Boneless', 50, ''),
(11, 'Orden', 'Boneless', 95, ''),
(12, 'Sencilla', 'Papa', 40, 'Mantequilla, queso amarillo, jamón, salchichón y aguacate'),
(13, 'Borracha', 'Papa', 60, 'Mantequilla, queso amarillo, queso gratinado, jamón y salchichón'),
(14, 'Con Pollo', 'Papa', 60, ''),
(15, 'Con Sirlon', 'Papa', 65, ''),
(16, 'Con Rib eye', 'Papa', 60, ''),
(17, 'Papas gajo (Media orden)', 'Complemento', 25, ''),
(18, 'Papas gajo (Orden)', 'Complemento', 43, ''),
(19, 'Papas Francesas (Media Orden)', 'Complemento', 22, ''),
(20, 'Papas Francesas (Orden)', 'Complemento', 35, ''),
(21, 'Aros de cebolla', 'Complemento', 25, ''),
(22, 'Dedos de queso', 'Complemento', 45, ''),
(23, 'Burrito de Pizza', 'Complemento', 15, ''),
(24, 'Burrito de Frijol c/queso', 'Complemento', 15, ''),
(25, 'Ranch Extra', 'Complemento', 10, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `productos` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `costo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_productos`
--

CREATE TABLE `venta_productos` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `venta_productos`
--
ALTER TABLE `venta_productos`
  ADD PRIMARY KEY (`id_venta`,`id_producto`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id`);

--
-- Filtros para la tabla `venta_productos`
--
ALTER TABLE `venta_productos`
  ADD CONSTRAINT `venta_productos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `venta_productos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
