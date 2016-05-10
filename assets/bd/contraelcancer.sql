-- --------------------------------------------------------
-- Host:                         127.0.0.1
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


-- Volcando estructura para tabla contraelcancer.c_roles
DROP TABLE IF EXISTS `c_roles`;
CREATE TABLE IF NOT EXISTS `c_roles` (
  `rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_nombre` text COLLATE ucs2_spanish_ci,
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla contraelcancer.c_roles: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `c_roles` DISABLE KEYS */;
INSERT INTO `c_roles` (`rol_id`, `rol_nombre`) VALUES
	(1, 'Administrador');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla contraelcancer.c_usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `c_usuarios` DISABLE KEYS */;
INSERT INTO `c_usuarios` (`usuario_id`, `usuario_nombre`, `usuario_apellidos`, `usuario_direccion`, `usuario_telefono`, `usuario_email`, `usuario_user`, `usuario_pass`, `rol_id`) VALUES
	(1, 'Felipe de Jesus', 'Perez Perez', 'N/E', '9611688697', 'itifjpp@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');
/*!40000 ALTER TABLE `c_usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
