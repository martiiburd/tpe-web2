-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2019 a las 21:40:36
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_bebidas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES
(1, 'Fermentados', 'La fermentación espontánea de cualquier líquido azucarado conduce a la obtención de una bebida fermentada.'),
(2, 'Destilados', 'El proceso de destilación purifica el líquido y elimina los componentes diluyentes como el agua, con el fin de aumentar su proporción de contenido de alcohol.'),
(3, 'Licores', 'Los licores son una bebida alcohólica que se produce mediante la mezcla, la maceración y/o la destilación de diferentes sustancias. Por lo general tienen sabor a hierbas o a frutas'),
(4, 'martina', ''),
(5, 'pau', 'w2e'),
(6, 'cosa', 'cosita'),
(7, 'cosita', 'linda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(255) NOT NULL,
  `comentario` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `puntaje` int(2) NOT NULL,
  `id_prod_fk` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `comentario`, `puntaje`, `id_prod_fk`, `id_usuario_fk`) VALUES
(1, 'hola', 2, 11, 1),
(3, 'cosita', 1, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_img` int(11) NOT NULL,
  `ruta_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_producto_fk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_img`, `ruta_img`, `id_producto_fk`) VALUES
(6, 'img/5dc60152dcc14.png', 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `producto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `graduacion` int(11) NOT NULL,
  `precio` int(10) NOT NULL,
  `id_categoria_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `producto`, `graduacion`, `precio`, `id_categoria_fk`) VALUES
(2, 'Vino', 14, 297, 1),
(4, 'Cerveza', 10, 90, 1),
(5, 'Vermut', 20, 231, 1),
(6, 'Vodka', 40, 1780, 2),
(7, 'Whisky', 60, 2000, 2),
(8, 'Tequila', 50, 943, 2),
(9, 'Ron', 80, 540, 2),
(10, 'Ginebra', 45, 180, 2),
(11, 'Anís', 40, 863, 3),
(13, 'Coca-cola', 0, 98, 1),
(21, 'Tia Maria', 32, 333, 3),
(22, 'Blue Coracao', 10, 170, 3),
(23, 'Smirnoff', 40, 300, 2),
(34, 'fd', 132, 111, 2),
(36, 'hola', 235, 234, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `usuario_admin` tinyint(1) NOT NULL,
  `nombre_u` text COLLATE utf8_unicode_ci NOT NULL,
  `apellido_u` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `contrasena`, `id_usuario`, `usuario_admin`, `nombre_u`, `apellido_u`) VALUES
('martyburdy@admin.com', '$2y$10$azihBcz4EV5n/AEXvUoQS.aMDYkvRwfWTRmmQdqAH2RaHi9Ax0wjm', 1, 1, '', ''),
('paucasado@admin.com', '$2y$10$4OBB/z2WRV1pRAuafn8f4.nT4xdHGE9BJaPHnzHwsymo.cVCVeeZq', 2, 1, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_prod_fk` (`id_prod_fk`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `id_producto_fk` (`id_producto_fk`) USING BTREE;

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria_FK` (`id_categoria_fk`) USING BTREE;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_prod_fk`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_producto_fk`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria_fk`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
