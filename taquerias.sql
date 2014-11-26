-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2014 a las 03:41:39
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `taquerias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comen` int(11) NOT NULL AUTO_INCREMENT,
  `comen_nombre` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `comen_text` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `comen_cali` int(11) DEFAULT NULL,
  `fk_comen_tq` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_comen`),
  KEY `fk_comen_tq` (`fk_comen_tq`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=44 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comen`, `comen_nombre`, `comen_text`, `comen_cali`, `fk_comen_tq`) VALUES
(1, 'Antonio Witrago', 'El servicio me parecio adecuado, pero la carne al pastor esta un poco salada.', 3, 1),
(2, 'Francisco Reyes', 'El servicio es de muy buena calidad, pero necesitan mas variedad en el menu', 3, 1),
(3, 'Juan Carlos Rodriguez', 'Buen servicio, pero no hay tacos de lengua', 3, 1),
(26, 'Daniel Quintana', 'Me gusto mucho servicio por parte de los empleados', 4, 1),
(27, 'Francisco Becerra', 'Me gusto el servicio al cliente.', 3, 1),
(28, 'Olimpo Cruz', 'Me gusta el servicio, pero la carne de los tacos no es de mi agrado.', 4, 1),
(29, 'Olimpo Cruz', 'Muy mal servicio. Tardan mucho en atender', 2, 3),
(30, 'Paco BT', 'Mal servicio', 2, 3),
(31, 'Adan Vega', 'Mal servicio', 1, 3),
(43, 'Nestor Leon', 'Me gusta el servicio, pero hay que considerar que fui en horarios de poca labor.', 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(60) COLLATE utf8_bin NOT NULL,
  `costo` float DEFAULT NULL,
  `fk_menu_tq` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`),
  KEY `fk_menu_tq` (`fk_menu_tq`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id_menu`, `producto`, `costo`, `fk_menu_tq`) VALUES
(1, 'Tacos de Pastor', 4, 1),
(2, 'Quesadillas', 15, 1),
(3, 'Tacos de Bisteck', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE IF NOT EXISTS `sucursales` (
  `id_taq` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_taq` varchar(50) COLLATE utf8_bin NOT NULL,
  `direccion_taq` varchar(80) COLLATE utf8_bin NOT NULL,
  `promedio_taq` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_taq`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id_taq`, `nombre_taq`, `direccion_taq`, `promedio_taq`) VALUES
(1, 'La Flamita', 'Torres Landa #365 ', 3),
(2, 'Las 4 Esquinas', 'Barrio La Salud frente al Bara', 5),
(3, 'Heroes de la nacion', 'Ninios Heroes #575 atras de San Juan Bosco', 3),
(4, 'El paisa', 'Torres Landa #444', 1),
(5, 'Hermanos Gonzalez', 'Blvd Lazaro Cardenas frente al Waldos', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  `usuario` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pass` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`fk_comen_tq`) REFERENCES `sucursales` (`id_taq`) ON DELETE CASCADE;

--
-- Filtros para la tabla `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`fk_menu_tq`) REFERENCES `sucursales` (`id_taq`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
