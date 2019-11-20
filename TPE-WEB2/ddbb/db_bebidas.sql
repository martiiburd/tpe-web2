-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2019 a las 00:38:37
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

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
(1, 'Fermentado', 'La fermentación espontánea de cualquier líquido azucarado conduce a la obtención de una bebida fermentada.'),
(5, 'Aguas', 'fea'),
(8, 'Vinos', 'ñamñanm'),
(11, 'Destilados', 'Las bebidas destiladas son las descriptas generalmente como aguardientes y licores; sin embargo la destilación, agrupa a la mayoría de las bebidas alcohólicas que superen los 20º de carga alcohólica.'),
(12, 'mates', 'los mejores mates ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `comentario` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `puntaje` int(2) NOT NULL,
  `id_prod_fk` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_img` int(11) NOT NULL,
  `ruta_img` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `id_producto_fk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_img`, `ruta_img`, `id_producto_fk`) VALUES
(4770, 'img/5dcb1631c9523jpg', 4855),
(4771, 'img/5dcb1671193e7.jpg', 4856),
(4772, 'img/5dcb178e7a4b4.jpg', 4857),
(4773, 'img/5dcb178e8aa70.jpg', 4857),
(4774, 'img/5dcb178e92b59.jpg', 4857),
(4775, 'img/5dcb178e9e2f4.jpg', 4857),
(4777, 'img/5dcb178eae4c8.jpg', 4857),
(4778, 'img/5dcb17d93d395.jpg', 4858),
(4779, 'img/5dcb17d951bba.jpg', 4858),
(4780, 'img/5dcb17d95332a.jpg', 4858),
(4781, 'img/5dcb17d95a474.jpg', 4858),
(4783, 'img/5dcb17d95df0d.jpg', 4858),
(4784, 'img/5dcb1c72e2beb.jpg', 4859),
(4785, 'img/5dcb1c72ea8ed.jpg', 4859),
(4786, 'img/5dcb1c7309f31.jpg', 4859),
(4787, 'img/5dcb1c7313f5c.jpg', 4859),
(4788, 'img/5dcb1c7d52811.jpg', 4860),
(4789, 'img/5dcb1c7d67fd6.jpg', 4860),
(4790, 'img/5dcb1c7d73f41.jpg', 4860),
(4791, 'img/5dcb1c7d7b85b.jpg', 4860),
(4792, 'img/5dcb1db392d13.jpg', 4861),
(4793, 'img/5dcb1ddb60235.jpg', 4862),
(4794, 'img/5dcb1ddb6cd58.jpg', 4862),
(4795, 'img/5dcf3bc83b527.png', 4863),
(4796, 'img/5dcf3c0e61478.png', 4864),
(4797, 'img/5dcf3c0e6454c.jpg', 4864),
(4798, 'img/5dcf3c9488e6f.png', 4865),
(4800, 'img/5dcf400cdbd6c.png', 4867),
(4801, 'img/5dcf4083e5321.jpg', 4868),
(4802, 'img/5dcf414e578e1.png', 4869),
(4803, 'img/5dcf414e6019a.jpg', 4869),
(4818, 'img/5dcf52a4868f7.png', 4853);

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
(4853, 'Coñac', 233, 23, 1),
(4855, 'fazsfs', 34, 242, 1),
(4856, 'fazsfs', 34, 242, 1),
(4857, 'bsdbs', 34, 43, 1),
(4858, 'bsdbs', 34, 43, 1),
(4859, 'sca', 3141, 121, 1),
(4860, 'sca', 3141, 121, 1),
(4861, 'fishdf', 232, 32, 5),
(4862, 'gsegsg', 4124, 412, 11),
(4863, 'IVES', 3, 33, 8),
(4864, 'coca-cola', 1, 11, 8),
(4865, 'DEQA', 3, 3, 8),
(4867, 'casado', 1, 12, 5),
(4868, 'gato', 23, 32, 8),
(4869, 'kijono', 7, 88, 5),
(4872, 'lo logre', 22222, 11, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `contrasena`) VALUES
(2, 'paucasado@admin.com', '$2y$10$CwxD.fUHWVOyS3jsEsFpmOqpBzNs0M3./gep8s4T8VulZV4tXc5Ou'),
(3, 'martyburdy@admin.com', '$2y$10$vyMzWH80OMkPFGAbjW0Ek.KO9DrtBQRsisCoT5nWSVsWV14Ynrbbi');

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
  ADD KEY `id_producto_fk` (`id_producto_fk`);

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
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4819;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4873;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_prod_fk`) REFERENCES `producto` (`id_producto`);

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
