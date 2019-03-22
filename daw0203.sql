-- phpMyAdmin SQL Dump
-- version 3.3.7deb6
-- http://www.phpmyadmin.net
--
-- Servidor: hostingmysql328
-- Tiempo de generación: 22-03-2019 a las 09:44:33
-- Versión del servidor: 5.5.52
-- Versión de PHP: 5.2.6-1+lenny16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `daw0203`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE IF NOT EXISTS `animales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `animales`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales_donativos`
--

CREATE TABLE IF NOT EXISTS `animales_donativos` (
  `animales_id` int(11) NOT NULL,
  `donativos_id` int(11) NOT NULL,
  PRIMARY KEY (`animales_id`,`donativos_id`),
  KEY `fk_animales_has_donativos_donativos1_idx` (`donativos_id`),
  KEY `fk_animales_has_donativos_animales1_idx` (`animales_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `animales_donativos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros`
--

CREATE TABLE IF NOT EXISTS `centros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `centros`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donantes`
--

CREATE TABLE IF NOT EXISTS `donantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipos_donantes_id` int(11) NOT NULL,
  `es_habitual` tinyint(4) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `cif` varchar(9) DEFAULT NULL,
  `donantescol` varchar(45) DEFAULT NULL,
  `sexos_id` int(11) DEFAULT NULL,
  `tiene_aninales` tinyint(4) DEFAULT NULL,
  `donantescol1` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `vinculo_entidad` varchar(45) DEFAULT NULL,
  `spam` tinyint(4) DEFAULT NULL,
  `poblacion` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `es_colaborador` tinyint(4) DEFAULT NULL,
  `tipo_colaboracion` varchar(45) DEFAULT NULL,
  `fecha_alta` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_donantes_tipos_donantes1_idx` (`tipos_donantes_id`),
  KEY `fk_donantes_sexos1_idx` (`sexos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `donantes`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donantes_animales`
--

CREATE TABLE IF NOT EXISTS `donantes_animales` (
  `donantes_id` int(11) NOT NULL,
  `animales_id` int(11) NOT NULL,
  PRIMARY KEY (`donantes_id`,`animales_id`),
  KEY `fk_donantes_has_animales_animales1_idx` (`animales_id`),
  KEY `fk_donantes_has_animales_donantes1_idx` (`donantes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `donantes_animales`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donativos`
--

CREATE TABLE IF NOT EXISTS `donativos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donatiuscol` varchar(45) DEFAULT NULL,
  `subtipos_id` int(11) NOT NULL,
  `desc_animal` varchar(45) DEFAULT NULL,
  `centros_receptor_id` int(11) NOT NULL,
  `centro_receptor_altres` varchar(45) DEFAULT NULL,
  `usuarios_id` int(11) NOT NULL,
  `usuario_receptor` varchar(45) DEFAULT NULL,
  `centros_desti_id` int(11) NOT NULL,
  `donantes_id` int(11) NOT NULL,
  `coste` float DEFAULT NULL,
  `unidades` int(11) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `fecha_donativo` datetime DEFAULT NULL,
  `hay_factura` tinyint(4) DEFAULT NULL,
  `ruta_factura` varchar(255) DEFAULT NULL,
  `donativoscol` varchar(45) DEFAULT NULL,
  `es_coordinada` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`,`centros_desti_id`),
  KEY `fk_donatius_subtipos1_idx` (`subtipos_id`),
  KEY `fk_donativos_centros1_idx` (`centros_receptor_id`),
  KEY `fk_donativos_usuarios1_idx` (`usuarios_id`),
  KEY `fk_donativos_centros2_idx` (`centros_desti_id`),
  KEY `fk_donativos_donantes1_idx` (`donantes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `donativos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'usuario'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexos`
--

CREATE TABLE IF NOT EXISTS `sexos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `sexos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subtipos`
--

CREATE TABLE IF NOT EXISTS `subtipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `tipos_id` int(11) NOT NULL,
  `gama_alta` float NOT NULL,
  `gama_media` float NOT NULL,
  `gama_baja` float NOT NULL,
  `tipo_unidad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subtipos_tipos_idx` (`tipos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `subtipos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `tipos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_donantes`
--

CREATE TABLE IF NOT EXISTS `tipos_donantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `tipos_donantes`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `roles_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_roles1_idx` (`roles_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `correo`, `password`, `roles_id`, `nombre`) VALUES
(3, 'daniel', 'daniel@gmail.com', '123456', 2, 'daniel'),
(4, 'Jordi', 'jordipe77@gmail.com', '$2y$10$VAJVLmPNZUWPtgdIANGEwelUZEOgkHUquV8WVhqQLoTGZSjEGAaNa', 1, NULL),
(3, 'marti', 'marti@gmail.com', '123456', 2, 'marti');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `animales_donativos`
--
ALTER TABLE `animales_donativos`
  ADD CONSTRAINT `fk_animales_has_donativos_animales1` FOREIGN KEY (`animales_id`) REFERENCES `animales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_animales_has_donativos_donativos1` FOREIGN KEY (`donativos_id`) REFERENCES `donativos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `donantes`
--
ALTER TABLE `donantes`
  ADD CONSTRAINT `fk_donantes_tipos_donantes1` FOREIGN KEY (`tipos_donantes_id`) REFERENCES `tipos_donantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_donantes_sexos1` FOREIGN KEY (`sexos_id`) REFERENCES `sexos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `donantes_animales`
--
ALTER TABLE `donantes_animales`
  ADD CONSTRAINT `fk_donantes_has_animales_donantes1` FOREIGN KEY (`donantes_id`) REFERENCES `donantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_donantes_has_animales_animales1` FOREIGN KEY (`animales_id`) REFERENCES `animales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `donativos`
--
ALTER TABLE `donativos`
  ADD CONSTRAINT `fk_donatius_subtipos1` FOREIGN KEY (`subtipos_id`) REFERENCES `subtipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_donativos_centros1` FOREIGN KEY (`centros_receptor_id`) REFERENCES `centros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_donativos_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_donativos_centros2` FOREIGN KEY (`centros_desti_id`) REFERENCES `centros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_donativos_donantes1` FOREIGN KEY (`donantes_id`) REFERENCES `donantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subtipos`
--
ALTER TABLE `subtipos`
  ADD CONSTRAINT `fk_subtipos_tipos` FOREIGN KEY (`tipos_id`) REFERENCES `tipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;


  ALTER TABLE `usuarios` ADD `remember_token` VARCHAR(255) NULL;
