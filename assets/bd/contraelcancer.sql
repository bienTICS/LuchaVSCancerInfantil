-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.5.5-10.1.8-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para contraelcancer
DROP DATABASE IF EXISTS `contraelcancer`;
CREATE DATABASE IF NOT EXISTS `contraelcancer` /*!40100 DEFAULT CHARACTER SET ucs2 COLLATE ucs2_spanish_ci */;
USE `contraelcancer`;


-- Volcando estructura para tabla contraelcancer.c_diccionarios
DROP TABLE IF EXISTS `c_diccionarios`;
CREATE TABLE IF NOT EXISTS `c_diccionarios` (
  `diccionario_id` int(11) NOT NULL AUTO_INCREMENT,
  `diccionario_palabra` text COLLATE ucs2_spanish_ci NOT NULL,
  `diccionario_descripcion` text COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`diccionario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla contraelcancer.c_diccionarios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `c_diccionarios` DISABLE KEYS */;
INSERT INTO `c_diccionarios` (`diccionario_id`, `diccionario_palabra`, `diccionario_descripcion`) VALUES
	(1, 'Alopecia', 'Caída del cabello'),
	(2, 'Anemia', 'Condición patológica definida por el descenso de la cifra de hemoglobina por debajo de los límites normales (11-12 g/Dl.).Los síntomas de la anemia son: palidez, falta de energía y cansancio fácil y las causas pueden ser múltiples (hemorragia, efecto de quimioterapia, desnutrición…)');
/*!40000 ALTER TABLE `c_diccionarios` ENABLE KEYS */;


-- Volcando estructura para tabla contraelcancer.c_directorios_osc
DROP TABLE IF EXISTS `c_directorios_osc`;
CREATE TABLE IF NOT EXISTS `c_directorios_osc` (
  `osc_id` int(11) NOT NULL AUTO_INCREMENT,
  `osc_organizacion` text COLLATE ucs2_spanish_ci NOT NULL,
  `osc_direccion` text COLLATE ucs2_spanish_ci NOT NULL,
  `osc_telefono` text COLLATE ucs2_spanish_ci NOT NULL,
  `osc_sitioweb` text COLLATE ucs2_spanish_ci NOT NULL,
  `osc_servicios` text COLLATE ucs2_spanish_ci NOT NULL,
  `estado_id` text COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`osc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla contraelcancer.c_directorios_osc: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `c_directorios_osc` DISABLE KEYS */;
INSERT INTO `c_directorios_osc` (`osc_id`, `osc_organizacion`, `osc_direccion`, `osc_telefono`, `osc_sitioweb`, `osc_servicios`, `estado_id`) VALUES
	(1, 'Asociación Mexicana de Ayuda a Niños con Cáncer I.A.P. (AMANC) ', 'Oficina dentro del Hospital Centenario Miguel Hidalgo, calle Galeana Sur No. 465, Col. Obraje C.P. 20230, Aguascalientes, Ags. , Monroy No. 109 Int 1, Barrio de San Marcos, C.P. 20070, Aguascalientes, Ags.', '(0144) 9994-6720  Ext. 4651,(0144) 9918-7410 Ext. 16', 'N/E', 'Albergue, alimentación, medicamentos, transporte a\r\nhospitales y traslados a comunidades, prótesis.', '1');
/*!40000 ALTER TABLE `c_directorios_osc` ENABLE KEYS */;


-- Volcando estructura para tabla contraelcancer.c_directorio_uma
DROP TABLE IF EXISTS `c_directorio_uma`;
CREATE TABLE IF NOT EXISTS `c_directorio_uma` (
  `directorio_id` int(11) NOT NULL AUTO_INCREMENT,
  `directorio_nombre` text COLLATE ucs2_spanish_ci NOT NULL,
  `directorio_direccion` text COLLATE ucs2_spanish_ci NOT NULL,
  `directorio_telefono` text COLLATE ucs2_spanish_ci NOT NULL,
  `directorio_email` text COLLATE ucs2_spanish_ci NOT NULL,
  `directorio_acreditaciones` text COLLATE ucs2_spanish_ci NOT NULL,
  `estado_id` text COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`directorio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla contraelcancer.c_directorio_uma: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `c_directorio_uma` DISABLE KEYS */;
INSERT INTO `c_directorio_uma` (`directorio_id`, `directorio_nombre`, `directorio_direccion`, `directorio_telefono`, `directorio_email`, `directorio_acreditaciones`, `estado_id`) VALUES
	(1, 'Centenario Hospital Miguel Hidalgo', ' Galeana Sur No. 465, Colonia Obraje, C.P. 20230, Aguascalientes, Aguascalientes.', '(01449) 9153142', 'hospitalhidalgo@prodigy.net.mx', 'Hematopatías Malignas ,Tumores sólidos fuera del SNC,Tumores sólidos del SNC', '1');
/*!40000 ALTER TABLE `c_directorio_uma` ENABLE KEYS */;


-- Volcando estructura para tabla contraelcancer.c_estados
DROP TABLE IF EXISTS `c_estados`;
CREATE TABLE IF NOT EXISTS `c_estados` (
  `estado_id` int(11) NOT NULL AUTO_INCREMENT,
  `estado_nombre` text,
  PRIMARY KEY (`estado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla contraelcancer.c_estados: ~32 rows (aproximadamente)
/*!40000 ALTER TABLE `c_estados` DISABLE KEYS */;
INSERT INTO `c_estados` (`estado_id`, `estado_nombre`) VALUES
	(1, 'Aguascalientes'),
	(2, 'Baja California'),
	(3, 'Campeche'),
	(4, 'Coahuila'),
	(5, 'Colima'),
	(6, 'Chiapas'),
	(7, 'Chihuahua'),
	(8, 'Distrito Federal'),
	(9, 'Durango'),
	(10, 'Guanajuato'),
	(11, 'Guerrero'),
	(12, 'Hidalgo'),
	(13, 'Jalisco'),
	(14, 'México'),
	(15, 'Michoacán'),
	(16, 'Morelos'),
	(17, 'Nayarit'),
	(18, 'Nuevo León'),
	(19, 'Oaxaca'),
	(20, 'Puebla'),
	(21, 'Querétaro'),
	(22, 'Quintana Roo'),
	(23, 'San Luis Potosí'),
	(24, 'Sinaloa'),
	(25, 'Sonora'),
	(26, 'Tabasco'),
	(27, 'Tamaulipas'),
	(28, 'Tlaxcala'),
	(29, 'Veracruz'),
	(30, 'Yucatán'),
	(31, 'Zacatecas'),
	(32, 'Baja California Sur');
/*!40000 ALTER TABLE `c_estados` ENABLE KEYS */;


-- Volcando estructura para tabla contraelcancer.c_roles
DROP TABLE IF EXISTS `c_roles`;
CREATE TABLE IF NOT EXISTS `c_roles` (
  `rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_nombre` text COLLATE ucs2_spanish_ci,
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla contraelcancer.c_roles: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `c_roles` DISABLE KEYS */;
INSERT INTO `c_roles` (`rol_id`, `rol_nombre`) VALUES
	(1, 'Administrador'),
	(2, 'Público'),
	(3, 'Adolecente'),
	(4, 'Escuela & Maestro'),
	(5, 'Paciente'),
	(6, 'Médico'),
	(7, 'Padre de Familia');
/*!40000 ALTER TABLE `c_roles` ENABLE KEYS */;


-- Volcando estructura para tabla contraelcancer.c_usuarios
DROP TABLE IF EXISTS `c_usuarios`;
CREATE TABLE IF NOT EXISTS `c_usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_nombre` text COLLATE ucs2_spanish_ci NOT NULL,
  `usuario_apellidos` text COLLATE ucs2_spanish_ci NOT NULL,
  `usuario_direccion` text COLLATE ucs2_spanish_ci NOT NULL,
  `usuario_telefono` text COLLATE ucs2_spanish_ci NOT NULL,
  `usuario_email` text COLLATE ucs2_spanish_ci NOT NULL,
  `usuario_user` text COLLATE ucs2_spanish_ci NOT NULL,
  `usuario_pass` text COLLATE ucs2_spanish_ci NOT NULL,
  `rol_id` text COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla contraelcancer.c_usuarios: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `c_usuarios` DISABLE KEYS */;
INSERT INTO `c_usuarios` (`usuario_id`, `usuario_nombre`, `usuario_apellidos`, `usuario_direccion`, `usuario_telefono`, `usuario_email`, `usuario_user`, `usuario_pass`, `rol_id`) VALUES
	(1, 'Felipe de jesus', 'Perez Perez', 'N/E', '9611688697', 'itifjpp@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
	(2, 'Felipe de jesus', 'Perez Perez', 'N/E', '9611688697', 'itifjpp@gmail.com', 'publico', '83951dcbdb9d96d2e43b8f20c3663943', '2'),
	(3, 'Felipe de jesus', 'Perez Perez', 'N/E', '9611688697', 'itifjpp@gmail.com', 'adolecente', '6985e2039005d3746578d7f821f877ae', '3'),
	(4, 'Felipe de jesus', 'Perez Perez', 'N/E', '9611688697', 'itifjpp@gmail.com', 'escuela', 'de57c5aeab2f35cee809fe5d00272fe9', '4'),
	(5, 'Felipe de jesus', 'Perez Perez', 'N/E', '9611688697', 'itifjpp@gmail.com', 'paciente', 'd243800a7d0ba0f87081bcdd832bb05f', '5'),
	(6, 'Felipe de jesus', 'Perez Perez', 'N/E', '9611688697', 'itifjpp@gmail.com', 'medico', '652044ac6e008761b3e6141748a99880', '6'),
	(7, 'Felipe de jesus', 'Perez Perez', 'N/E', '9611688697', 'itifjpp@gmail.com', 'padredefamilia', '18335e8b3474ee2f4b96fd4e9ac34b13', '7');
/*!40000 ALTER TABLE `c_usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
