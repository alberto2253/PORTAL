/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.28-MariaDB : Database - portal_denuncias
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`portal_denuncias` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `portal_denuncias`;

/*Table structure for table `comentarios` */

DROP TABLE IF EXISTS `comentarios`;

CREATE TABLE `comentarios` (
  `id_comentario` int(100) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(200) DEFAULT NULL,
  `id_denuncia` int(100) DEFAULT NULL,
  PRIMARY KEY (`id_comentario`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `comentarios` */

insert  into `comentarios`(`id_comentario`,`comentario`,`id_denuncia`) values (20,'SE CANCELO POR MOTIVOS DE EMDDSS',158);

/*Table structure for table `denuncias` */

DROP TABLE IF EXISTS `denuncias`;

CREATE TABLE `denuncias` (
  `id_denuncia` int(100) NOT NULL AUTO_INCREMENT,
  `empresa` enum('afore-coppel','bancoppel','coppel') DEFAULT NULL,
  `pais` enum('argentina','estados-unidos','mexico') DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `nucentro` int(100) DEFAULT NULL,
  `anonimo` enum('si','no') DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` decimal(10,0) DEFAULT NULL,
  `detalle_denuncia` varchar(200) DEFAULT NULL,
  `fecha_hechos` datetime DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `folio_denuncia` int(100) DEFAULT NULL,
  `estatus` enum('Abierto','Finalizada','Cancelada') DEFAULT NULL,
  PRIMARY KEY (`id_denuncia`)
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `denuncias` */

insert  into `denuncias`(`id_denuncia`,`empresa`,`pais`,`estado`,`nucentro`,`anonimo`,`nombre`,`email`,`telefono`,`detalle_denuncia`,`fecha_hechos`,`password`,`folio_denuncia`,`estatus`) values (153,'afore-coppel','argentina','Buenos Aires',1234,'si','ANONIMO','ANONIMO@HOTMAIL.COM',66666666,'NO ME ATENDIERON ','2023-04-26 00:00:00','MODE2253',72762,'Abierto'),(154,'afore-coppel','mexico','Cdmx',545548,'si','ANONIMO','ANONIMO@HOTMAIL.COM',66666666,'Hola','2023-04-12 00:00:00','mode2253',17445,'Cancelada');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `usuario` varbinary(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nombre`,`usuario`,`contrasena`,`tipo`) values (1,'admin','admin','admin',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
